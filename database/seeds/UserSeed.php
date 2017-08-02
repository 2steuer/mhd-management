<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newUser = new \App\User();
        $newUser->first_name = 'Merlin';
        $newUser->last_name = 'Steuer';
        $newUser->email = 'steuer@malteser-stormarn.de';
        $newUser->password = Hash::make('pwmerlin');
        $newUser->can_login = true;
        $newUser->admin = true;
        $newUser->qualification_id = \App\Qualification::where('abbreviation', 'ES')->first()->id;
        $newUser->tactical_qualification_id = \App\TacticalQualification::where('abbreviation', 'GF')->first()->id;
        $newUser->driver_license_id = \App\DriverLicense::where('name', '---')->first()->id;
        $newUser->save();

        $number = new \App\PhoneNumber();
        $number->description = 'default';
        $number->number = '0176 / 48 55 06 26';
        $number->user_id = $newUser->id;
        $number->save();
    }
}
