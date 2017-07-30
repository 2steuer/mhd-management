<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Vehicles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function(Blueprint $t)
        {
            $t->increments('id');
            $t->string('name');
            $t->string('abbreviation');
            $t->string('license')->nullable();
            $t->text('description')->nullable();
            $t->unsignedInteger('rank');
            $t->timestamps();
        });

        Schema::create('user_vehicle', function(Blueprint $t)
        {
            $t->unsignedInteger('user_id');
            $t->unsignedInteger('vehicle_id');

            $t->foreign('vehicle_id')
                ->references('id')
                ->on('vehicles');

            $t->foreign('user_id')
                ->references('id')
                ->on('users');


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
