<?php
namespace App\Classes\Core;
class Router
{
    public function run(){

        $uri = $_SERVER['REQUEST_URI'];
        // hostname sans uri
        if(!empty($uri) && $uri != '/' && $uri[-1] ==='/'){
            $uri = substr($uri, 0, -1);
            var_dump($uri);
            http_response_code(301);
            header('Location: '.$uri);
            exit;
        }

        $params = explode('/', $_GET['param']);
        if($params[0] != ""){

            $controllerClasse = '\\App\\Classes\\Controllers\\'.ucfirst(array_shift($params)).'Controller';

            $action  = isset($params[0]) ?  array_shift($params): 'index';

            $controller = new $controllerClasse();

            if(method_exists($controller, $action)) {
                (isset($params[0])) ? $controller->$action($params) : $controller->$action();

            } else {
                http_response_code(404);
                echo "La page demandée  n'existe pas !";
            }
        }else {

            $controller = new \App\Classes\Controllers\HomeController();
            $controller->index();
        }
    }

}
