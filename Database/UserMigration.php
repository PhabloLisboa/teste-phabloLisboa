<?php
namespace Database;

use Illuminate\Database\Capsule\Manager as Capsule;

class UserMigration{

  public function run(){
    Capsule::schema()->create('users', function ($table) {

      $table->increments('id');
      $table->string('name');
      $table->string('email')->unique();
      $table->string('password');
      $table->string('phone');
      $table->timestamps();
    
      
    });
  }


}
