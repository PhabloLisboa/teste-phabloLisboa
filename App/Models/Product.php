<?php
namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Product extends Eloquent

{

  public function videos() {
    return $this->hasMany(Videos::class, 'product_id');
  }

 }