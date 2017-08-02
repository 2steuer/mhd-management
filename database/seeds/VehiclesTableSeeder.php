<?php

use Illuminate\Database\Seeder;

class VehiclesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('vehicles')->delete();
        
        \DB::table('vehicles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'KTW 4T',
                'abbreviation' => 'KTW 4T',
                'license' => NULL,
                'description' => NULL,
                'rank' => 4,
                'created_at' => '2017-07-30 19:28:48',
                'updated_at' => '2017-07-30 21:31:01',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'PKW',
                'abbreviation' => 'PKW',
                'license' => NULL,
                'description' => NULL,
                'rank' => 1,
                'created_at' => '2017-07-30 19:29:15',
                'updated_at' => '2017-07-30 19:30:27',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'N-NKTW G',
                'abbreviation' => 'N-KTW G',
                'license' => NULL,
                'description' => NULL,
                'rank' => 3,
                'created_at' => '2017-07-30 19:29:41',
                'updated_at' => '2017-07-30 21:31:07',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'MTW',
                'abbreviation' => 'MTW',
                'license' => NULL,
                'description' => NULL,
                'rank' => 2,
                'created_at' => '2017-07-30 21:29:23',
                'updated_at' => '2017-07-30 21:30:41',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'GW-San',
                'abbreviation' => 'GW-San',
                'license' => NULL,
                'description' => NULL,
                'rank' => 5,
                'created_at' => '2017-07-30 21:29:54',
                'updated_at' => '2017-07-30 21:30:46',
            ),
        ));
        
        
    }
}