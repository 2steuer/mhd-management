<?php

namespace App\Console\Commands;

use App\DriverLicense;
use App\PhoneNumber;
use App\Qualification;
use App\TacticalQualification;
use App\User;
use App\Vehicle;
use Illuminate\Console\Command;
use Keboola\Csv\CsvFile;

class ImportUsersCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:import {file=mitglieder.csv}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Imports all users from the list given in file.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $filename = $this->argument('file');

        $this->info('Reading users from '.$filename);

        // get information about vehicles, tactical qualifications, qualifications and driver licenses
        $tactical_qualifications = TacticalQualification::all()->pluck('id', 'abbreviation');
        $qualifications = Qualification::all()->pluck('id', 'abbreviation');
        $licenses = DriverLicense::all()->pluck('id', 'name');
        $vehicles_ids = Vehicle::all()->pluck('id', 'abbreviation');

        $csv = new CsvFile($filename, ";");


        foreach($csv as $row)
        {
            $last_name = $row[0];
            $first_name = $row[1];
            $email = $row[2];
            $phone = $row[3];
            $quali = $row[4];
            $tquali = $row[5];
            $license = $row[6];
            $comment = $row[7];
            $pkw = $row[8];
            $mtw = $row[9];
            $nktw = $row[10];
            $gwsan = $row[11];
            $ktw = $row[12];

            $newUser = new User();
            $newUser->last_name = $last_name;
            $newUser->first_name = $first_name;
            $newUser->comment = $comment;
            $newUser->email = $email != '' ? $email : $last_name . '.' . $first_name . '@no-mail.de';
            $newUser->qualification_id = $qualifications[$quali];
            $newUser->tactical_qualification_id = $tactical_qualifications[$tquali];
            $newUser->driver_license_id = $licenses[$license != '' ? $license : '---'];
            $newUser->can_login = false;
            $newUser->admin = false;
            $newUser->save();

            $number = new PhoneNumber();
            $number->user_id = $newUser->id;
            $number->description = 'default';
            $number->number = $phone;
            $number->save();

            $vehicles = [];
            if($pkw != '')
            {
                array_push($vehicles, $vehicles_ids['PKW']);
            }

            if($mtw != '')
            {
                array_push($vehicles, $vehicles_ids['MTW']);
            }

            if($nktw != '')
            {
                array_push($vehicles, $vehicles_ids['N-KTW G']);
            }

            if($gwsan != '')
            {
                array_push($vehicles, $vehicles_ids['GW-San']);
            }

            if($ktw != '')
            {
                array_push($vehicles, $vehicles_ids['KTW 4T']);
            }

            $newUser->vehicles()->sync($vehicles);
        }
    }
}
