<?php

namespace App\Controllers;
include 'utils/utils.php';

use App\Models\User;

class LoginController extends Controller{

  public function index(){
    

    $feedback = $_SESSION['feedback'];
    $_SESSION['feedback'] = null;

    return $this->view('LoginView');
  }

  public function validateLogin(){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $user = User::where('email', $email)->first();



    if($user){
     return $user->password === $password ? 
     header("Location: http://localhost:8080/details/".$user->id)
     : $this->view('LoginView');
    }
    
     redirect("", ['type' => "error", "message" => 'Email ou senha inválidos']);

  }
  


}