<?php
namespace Routes;
use Routes\Router;
use Controllers\TesteController;

class Routes{
  public static function initRoutes(){
    
    Router::add('/', 'LoginController@index');
    Router::add('/validateLogin', 'LoginController@validateLogin', 'post');
    Router::add('/details/([0-9]*)','DetailsController@index');
    Router::add('/addVideo','DetailsController@addVideo', 'post');
    Router::add('/deleteVideo/([0-9]*)/([0-9]*)','DetailsController@deleteVideo');
    Router::run('/');
  }
}