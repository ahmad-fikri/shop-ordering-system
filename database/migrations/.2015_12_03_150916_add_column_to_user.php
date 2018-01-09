<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function ($table) {
            $table->string('IC');
            $table->string('Address1');
            $table->string('Address2')->nullable;
            $table->string('Postcode');
            $table->string('City');
            $table->string('State');
            $table->string('Country')->default('Malaysia');
            $table->integer('salary')->default(0);
            $table->string('tel')->nullable();
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
