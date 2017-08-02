<?php

use Illuminate\Database\Seeder;

class DriverLicensesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('driver_licenses')->delete();
        
        \DB::table('driver_licenses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'A1',
                'description' => 'test',
                'rank' => 2,
                'color1' => '#ddebf7',
                'color2' => '#ddebf7',
                'text_color' => '#bebebe',
                'created_at' => '2017-07-30 20:16:40',
                'updated_at' => '2017-08-02 10:56:49',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'A2',
                'description' => NULL,
                'rank' => 3,
                'color1' => '#ddebf7',
                'color2' => '#ddebf7',
                'text_color' => '#bebebe',
                'created_at' => '2017-07-30 21:38:03',
                'updated_at' => '2017-08-02 10:57:14',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'A',
                'description' => NULL,
                'rank' => 4,
                'color1' => '#ffffff',
                'color2' => '#ffffff',
                'text_color' => '#000000',
                'created_at' => '2017-07-30 21:38:22',
                'updated_at' => '2017-07-31 17:24:28',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'B',
                'description' => NULL,
                'rank' => 5,
                'color1' => '#99ccff',
                'color2' => '#99ccff',
                'text_color' => '#000000',
                'created_at' => '2017-07-30 21:38:35',
                'updated_at' => '2017-08-02 10:57:47',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'BE',
                'description' => NULL,
                'rank' => 7,
                'color1' => '#99ccff',
                'color2' => '#99ccff',
                'text_color' => '#000000',
                'created_at' => '2017-07-30 21:38:47',
                'updated_at' => '2017-08-02 10:58:01',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'C1',
                'description' => NULL,
                'rank' => 9,
                'color1' => '#9bc2e6',
                'color2' => '#9bc2e6',
                'text_color' => '#008000',
                'created_at' => '2017-07-30 21:40:04',
                'updated_at' => '2017-08-02 11:00:26',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'C1E',
                'description' => NULL,
                'rank' => 10,
                'color1' => '#9bc2e6',
                'color2' => '#9bc2e6',
                'text_color' => '#008000',
                'created_at' => '2017-07-30 21:40:14',
                'updated_at' => '2017-08-02 11:12:00',
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'C',
                'description' => NULL,
                'rank' => 11,
                'color1' => '#333399',
                'color2' => '#333399',
                'text_color' => '#ffffff',
                'created_at' => '2017-07-30 21:40:23',
                'updated_at' => '2017-08-02 11:12:00',
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'CE',
                'description' => NULL,
                'rank' => 12,
                'color1' => '#333399',
                'color2' => '#333399',
                'text_color' => '#ffffff',
                'created_at' => '2017-07-30 21:40:54',
                'updated_at' => '2017-08-02 11:12:07',
            ),
            9 => 
            array (
                'id' => 11,
                'name' => 'BFeu',
                'description' => NULL,
                'rank' => 6,
                'color1' => '#99ccff',
                'color2' => '#99ccff',
                'text_color' => '#993300',
                'created_at' => '2017-07-30 21:41:43',
                'updated_at' => '2017-08-02 10:58:36',
            ),
            10 => 
            array (
                'id' => 14,
                'name' => '---',
                'description' => 'Kein Führerschein',
                'rank' => 1,
                'color1' => '#ffffff',
                'color2' => '#ffffff',
                'text_color' => '#000000',
                'created_at' => '2017-07-31 17:24:15',
                'updated_at' => '2017-07-31 17:24:32',
            ),
            11 => 
            array (
                'id' => 15,
                'name' => 'BEFeu',
                'description' => NULL,
                'rank' => 8,
                'color1' => '#99ccff',
                'color2' => '#99ccff',
                'text_color' => '#993300',
                'created_at' => '2017-08-02 10:59:12',
                'updated_at' => '2017-08-02 10:59:27',
            ),
        ));
        
        
    }
}