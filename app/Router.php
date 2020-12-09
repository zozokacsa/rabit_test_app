<?php

namespace App;

use ReflectionMethod;

/**
 * Base router class.
 */
class Router
{
    /**
     * The routes of array we pass on index.php.
     *
     * @var array
     */
    protected $routes = [];

    /**
     * Adding desired route to the routes array.
     *
     * @param string $route
     * @param array $params
     * @return void
     */
    public function add($route, $params = [])
    {
        $this->routes[$route] = $params;
    }

    /**
     * Dispatching the right method for the route.
     *
     * @param string $url
     * @return void
     */
    public function dispatch($url)
    {
        // Check the given url is exist in registered routes.
        if(array_key_exists($url, $this->routes)) {
            $controller = $this->routes[$url]['controller'];
            $action = $this->routes[$url]['action'];

            // Check the class is exist
            if(class_exists($controller)) {
                // Create new controller instance
                $controllerObject = new $controller();
                // Pass thru Reflection Method Class
                $reflection = new ReflectionMethod($controllerObject, $action);

                // Check the method is public, if yes than call it
                if($reflection->isPublic()) {
                    $controllerObject->$action();
                } else {
                    throw new \Exception("Method $action in controller $controller cannot be called directly");
                }
            } else {
                throw new \Exception("Controller class $controller not found");
            }
        } else {
            throw new \Exception('No route matched.', 404);
        }
    }
}
