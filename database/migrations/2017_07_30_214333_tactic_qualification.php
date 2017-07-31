<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TacticQualification extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('tactical_qualifications');
        Schema::create('tactical_qualifications', function(Blueprint $t)
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

        Schema::table('users', function(Blueprint $t)
        {
            $t->unsignedInteger('tactical_qualification_id')->nullable();

            $t->foreign('tactical_qualification_id')
                ->references('id')
                ->on('tactical_qualifications');
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
