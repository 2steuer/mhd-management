<?php

namespace App\Console\Commands;

use App\PhoneNumber;
use Illuminate\Console\Command;

class UpdateNumbers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:update_numbers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sets all numbers to default and normalizes the numbers. Should only be issued once after the update to the new number fields.';

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
        foreach (PhoneNumber::all() as $number)
        {
            $number->is_default = true;
            $number->update_normalized_number();
            $number->save();
        }
    }
}
