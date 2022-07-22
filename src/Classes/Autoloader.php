<?php

namespace App\Classes;
class Autoloader
{
    static function register()
    {
        spl_autoload_register([
            __CLASS__, 'autoload'
        ]);
    }

    static function autoload($class)
    {
      /* var_dump(__DIR__);

        var_dump($class);

        var_dump(__NAMESPACE__);*/
        $class = str_replace(__NAMESPACE__.'\\', '', $class);
        //var_dump($class);

        $class = str_replace('\\', '/', $class);
        if (file_exists(__DIR__ . '/' . $class . '.php')) {
            require __DIR__ . '/' . $class . '.php';
        }else{
            //http_response_code(404);
            //echo " Page not found"; die();
        }
    }

}
