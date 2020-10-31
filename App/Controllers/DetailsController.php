<?php

namespace App\Controllers;
// include 'utils/utils.php';

use App\Models\Product;
use App\Models\User;
use App\Models\Videos;

class DetailsController extends Controller{

  public function index($id){
    $user = User::find($id);

    return $this->view('DetailsView', ['user' => $user]);
  }

  public function addVideo(){
    extract($_POST);
   
    $user = User::find($userId);

    $video = new Videos([
       'link' => $link,
       'product_id' => $productId
    ]);
    
    $video->save();
    
    header("Location: http://localhost:8080/details/".$user->id);
    
  }

  public function deleteVideo($id, $userId){
    $video = Videos::destroy($id);

    header("Location: http://localhost:8080/details/".$userId);
  }


}