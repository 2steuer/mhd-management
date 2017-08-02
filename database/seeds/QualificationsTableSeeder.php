<?php

use Illuminate\Database\Seeder;

class QualificationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('qualifications')->delete();
        
        \DB::table('qualifications')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Erste Hilfe',
                'abbreviation' => 'EH',
                'rank' => 2,
                'color1' => '#ffffff',
                'color2' => '#ffffff',
                'text_color' => '#000000',
                'created_at' => '2017-07-30 20:04:48',
                'updated_at' => '2017-08-02 10:01:10',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Einsatzsanitäter',
                'abbreviation' => 'ES',
                'rank' => 6,
                'color1' => '#99cc00',
                'color2' => '#99cc00',
                'text_color' => '#000000',
                'created_at' => '2017-07-30 20:52:51',
                'updated_at' => '2017-08-02 10:06:33',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Sanitäter',
                'abbreviation' => 'San',
                'rank' => 4,
                'color1' => '#bfbfbf',
                'color2' => '#bfbfbf',
                'text_color' => '#000000',
                'created_at' => '2017-07-30 21:31:51',
                'updated_at' => '2017-08-02 10:05:22',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Schulsanitäter',
                'abbreviation' => 'SSD',
                'rank' => 3,
                'color1' => '#bfbfbf',
                'color2' => '#bfbfbf',
                'text_color' => '#000000',
                'created_at' => '2017-07-30 21:32:20',
                'updated_at' => '2017-08-02 10:05:07',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'Notfallhelfer',
                'abbreviation' => 'NotH',
                'rank' => 5,
                'color1' => '#bfbfbf',
                'color2' => '#99cc00',
                'text_color' => '#ffffff',
                'created_at' => '2017-07-30 21:32:57',
                'updated_at' => '2017-08-02 10:06:10',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'Rettungssanitäter',
                'abbreviation' => 'RS',
                'rank' => 8,
                'color1' => '#ffff00',
                'color2' => '#ffff00',
                'text_color' => '#000000',
                'created_at' => '2017-07-30 21:34:43',
                'updated_at' => '2017-08-02 10:07:56',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'Rettungssanitäter mit Einsatzerfahrung',
                'abbreviation' => 'RS E',
                'rank' => 9,
                'color1' => '#ffff00',
                'color2' => '#ff0000',
                'text_color' => '#000000',
                'created_at' => '2017-07-30 21:35:12',
                'updated_at' => '2017-08-02 10:08:38',
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'Rettungsassistent',
                'abbreviation' => 'RA',
                'rank' => 10,
                'color1' => '#ff0000',
                'color2' => '#ff0000',
                'text_color' => '#000000',
                'created_at' => '2017-07-30 21:35:51',
                'updated_at' => '2017-08-02 10:08:51',
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'Lehrrettungsassistent',
                'abbreviation' => 'LRA',
                'rank' => 11,
                'color1' => '#ff0000',
                'color2' => '#ff0000',
                'text_color' => '#000000',
                'created_at' => '2017-07-30 21:36:10',
                'updated_at' => '2017-08-02 10:09:12',
            ),
            9 => 
            array (
                'id' => 11,
                'name' => 'Notfallsanitäter',
                'abbreviation' => 'NotS',
                'rank' => 12,
                'color1' => '#ff0000',
                'color2' => '#ff0000',
                'text_color' => '#000000',
                'created_at' => '2017-07-30 21:36:28',
                'updated_at' => '2017-08-02 10:09:22',
            ),
            10 => 
            array (
                'id' => 12,
                'name' => 'Arzt',
                'abbreviation' => 'A',
                'rank' => 13,
                'color1' => '#3366ff',
                'color2' => '#3366ff',
                'text_color' => '#000000',
                'created_at' => '2017-07-30 21:36:47',
                'updated_at' => '2017-08-02 10:10:05',
            ),
            11 => 
            array (
                'id' => 13,
                'name' => 'Notarzt',
                'abbreviation' => 'NA',
                'rank' => 14,
                'color1' => '#3366ff',
                'color2' => '#3366ff',
                'text_color' => '#ffffff',
                'created_at' => '2017-07-30 21:37:02',
                'updated_at' => '2017-08-02 10:10:19',
            ),
            12 => 
            array (
                'id' => 14,
                'name' => 'Keine',
                'abbreviation' => '---',
                'rank' => 1,
                'color1' => '#ffffff',
                'color2' => '#ffffff',
                'text_color' => '#000000',
                'created_at' => '2017-07-31 16:43:54',
                'updated_at' => '2017-07-31 16:44:16',
            ),
            13 => 
            array (
                'id' => 15,
                'name' => 'Rettungshelfer',
                'abbreviation' => 'RH',
                'rank' => 7,
                'color1' => '#99cc00',
                'color2' => '#ffff00',
                'text_color' => '#000000',
                'created_at' => '2017-08-02 10:07:23',
                'updated_at' => '2017-08-02 10:07:38',
            ),
        ));
        
        
    }
}