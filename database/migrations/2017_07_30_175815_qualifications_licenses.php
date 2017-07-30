<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class QualificationsLicenses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualifications', function(Blueprint $t)
        {
            $t->increments('id');
            $t->string('name');
            $t->string('abbreviation');
            $t->unsignedInteger('rank');

            $t->string('color1');
            $t->string('color2');
            $t->string('text_color');

            $t->timestamps();
        });

        Schema::create('driver_licenses', function(Blueprint $t)
        {
            $t->increments('id');
            $t->string('name');
            $t->text('description');
            $t->unsignedInteger('rank');

            $t->string('color1');
            $t->string('color2');
            $t->string('text_color');
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
