<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            //$table->increments('user_type_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('profession');
            //$table->string('picture');
            $table->integer('phone');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /*public static function select($name, $options = array(), $selected = null, $attributes = array())
    {
        {
            Form::select
            (
                'title', 
                array('Actor', 'Producer', 'Writer', 'Visuals', 'Make up', 'Costume Designer', 'Editing'), 
                $selected = NULL,  array('class' => 'input-small')
            )
        }
    }*/
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
