<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTwoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        $config = config('laravel-permission.table_names');
        $config['users'] = config('auth.table');

        Schema::create($config['user_has_roles'], function (Blueprint $table) use ($config) {
            $table->integer('role_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->foreign('role_id')
                ->references('id')
                ->on($config['roles'])
                ->onDelete('cascade');

            $table->foreign('user_id')
                ->references('id')
                ->on($config['users'])
                ->onDelete('cascade');

            $table->primary(['role_id', 'user_id']);
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
