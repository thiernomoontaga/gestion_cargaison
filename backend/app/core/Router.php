<?php 
namespace App\Core;
class Router {
  public static function resolver(){
    $routes = require_once __DIR__.'/../../routes/route.web.php';

    $uri = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
    if(array_key_exists($uri,$routes)){
      $controller = $routes[$uri]['controller'];
      $method = $routes[$uri]['method'];
      $instance = new $controller();
      $instance->$method();
    }
    else {
      echo "404 la page n'existe pas ! ";
    }

  }
}





 