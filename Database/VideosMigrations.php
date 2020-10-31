<?php
namespace Database;

use Illuminate\Database\Capsule\Manager as Capsule;

class VideosMigrations{

  public function run(){
    Capsule::schema()->create('videos', function ($table) {

      $table->increments('id');
      $table->string('link');
      $table->integer('product_id')->nullable()->unsigned();
      $table->timestamps();

      $table->foreign('product_id')->references('id')->on('products');

    
      
    });
  }


}
