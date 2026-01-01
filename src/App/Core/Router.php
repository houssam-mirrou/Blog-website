<?php

namespace App\Core;

class Router
{
    private $routes = [];

    public function get($uri, $action)
    {
        $this->routes['GET'][$uri] = $action;
    }
    public function post($uri, $action)
    {
        $this->routes['POST'][$uri] = $action;
    }

    public function dispatch()
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $request_method = $_SERVER['REQUEST_METHOD'];
        if (isset($this->routes[$request_method][$uri])) {
            [$controller_name, $method_name] = explode('@', $this->routes[$request_method][$uri]);
            $controller_class = "App\\Controllers\\$controller_name";
            $controller = new $controller_class();
            $controller->$method_name();
            return;
        }
        $controller_class = "App\\Controllers\\NotFoundController";
        $controller = new $controller_class();
        $controller->index();
        return;
    }
}
