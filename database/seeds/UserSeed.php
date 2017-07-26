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
        $newUser->save();
    }
}
