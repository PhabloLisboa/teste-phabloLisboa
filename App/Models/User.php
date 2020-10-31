<?php
namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent

{

  protected $fillable = ['name', 'email', 'password', 'phone'];

  public function produto() {
      return $this->hasOne(Product::class, 'user_id');
  }
  // public static function validateLogin($email, senha){
  //  return User::where('email', $email);
  // }

 }