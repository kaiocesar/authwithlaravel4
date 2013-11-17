<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up(){
	  Schema::create('users', function($table){
	     $table->increments('id');
	     $table->string('email')->unique();
	     $table->string('password');
	     $table->string('username',45)->unique();
	     $table->string('name',45);
	     $table->timestamps();
  	  });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down(){
	  Schema::drop('users');
	}

}
