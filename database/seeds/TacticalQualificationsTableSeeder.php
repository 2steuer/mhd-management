<?php

use Illuminate\Database\Seeder;

class TacticalQualificationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tactical_qualifications')->delete();
        
        \DB::table('tactical_qualifications')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Helfer',
                'abbreviation' => 'H',
                'rank' => 1,
                'color1' => '#ffffff',
                'color2' => '#ffffff',
                'text_color' => '#000000',
                'created_at' => '2017-07-31 16:46:01',
                'updated_at' => '2017-07-31 16:46:01',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Truppführer',
                'abbreviation' => 'TF',
                'rank' => 2,
                'color1' => '#ffffff',
                'color2' => '#ff0000',
                'text_color' => '#000000',
                'created_at' => '2017-07-31 16:47:00',
                'updated_at' => '2017-08-02 10:15:49',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Gruppenführer',
                'abbreviation' => 'GF',
                'rank' => 3,
                'color1' => '#ff0000',
                'color2' => '#ff0000',
                'text_color' => '#000000',
                'created_at' => '2017-07-31 16:47:14',
                'updated_at' => '2017-08-02 10:16:00',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Zugführer',
                'abbreviation' => 'ZF',
                'rank' => 5,
                'color1' => '#993300',
                'color2' => '#993300',
                'text_color' => '#ffffff',
                'created_at' => '2017-07-31 16:48:01',
                'updated_at' => '2017-08-02 10:17:13',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Org. Leiter RD',
                'abbreviation' => 'OrgL',
                'rank' => 4,
                'color1' => '#993300',
                'color2' => '#993300',
                'text_color' => '#ffffff',
                'created_at' => '2017-07-31 16:48:15',
                'updated_at' => '2017-08-02 12:38:44',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Einsatzleiter',
                'abbreviation' => 'EL',
                'rank' => 6,
                'color1' => '#993300',
                'color2' => '#993300',
                'text_color' => '#ffffff',
                'created_at' => '2017-07-31 16:48:46',
                'updated_at' => '2017-08-02 12:38:37',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Leitender Notarzt',
                'abbreviation' => 'LNA',
                'rank' => 7,
                'color1' => '#993300',
                'color2' => '#993300',
                'text_color' => '#ffff00',
                'created_at' => '2017-08-02 10:18:00',
                'updated_at' => '2017-08-02 10:18:00',
            ),
        ));
        
        
    }
}