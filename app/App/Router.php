<?php

namespace ardiStory\Php\Mvc\App;

class Router
{
    static $routes = [];

    static function add(
        string $method,
        string $path,
        string $controller,
        string $function
    ): void {
        self::$routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'function' => $function
        ];
    }

    static function run(): void
    {
        $path = '/';

        if (isset($_SERVER['PATH_INFO'])) {
            $path = $_SERVER['PATH_INFO'];
        }

        $method = $_SERVER['REQUEST_METHOD'];

        foreach (self::$routes as $route) {
            $pattern = "#^" . $route['path'] . "$#";

            if (preg_match($pattern, $path, $variables) && $route['method'] == $method) {
                $controller = new $route['controller'];
                $function = $route['function'];

                array_shift($variables);
                call_user_func_array([$controller, $function], $variables);

                return;
            }
        }

        echo "CONTROLLER NOT FOUND";
    }
}
