<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DriverLicensesTableSeeder::class);
        $this->call(QualificationsTableSeeder::class);
        $this->call(TacticalQualificationsTableSeeder::class);
        $this->call(VehiclesTableSeeder::class);
        $this->call(UserSeed::class);
    }
}
