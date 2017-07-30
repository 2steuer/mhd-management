<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersAdditions1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table)
        {
            $table->unsignedInteger('qualification_id')->nullable();
            $table->unsignedInteger('driver_license_id')->nullable();
            $table->text('comment');

            $table->foreign('qualification_id')
                ->references('id')
                ->on('qualifications');

            $table->foreign('driver_license_id')
                ->references('id')
                ->on('driver_licenses');
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
