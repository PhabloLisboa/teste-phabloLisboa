<?php
namespace Database;

use Illuminate\Database\Capsule\Manager as Capsule;

class ProductMigration{

  public function run(){
    Capsule::schema()->create('products', function ($table) {

      $table->increments('id');
      $table->string('key');
      $table->string('purchased');
      $table->integer('user_id')->nullable()->unsigned();
      $table->timestamps();

      $table->foreign('user_id')->references('id')->on('users');

    
      
    });
  }


}
