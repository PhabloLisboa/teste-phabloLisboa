<?php
namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Videos extends Eloquent

{
  protected $fillable = ['link', 'product_id'];
      
}