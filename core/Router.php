<?php

namespace Core;

class Router
{
    protected $routes = [];

    public function get($uri, $controller)
    {
        $this->routes[] = [
            'url' => $uri,
            'controller' => $controller,
            'method' => 'GET'
        ];
    }
    public function post($uri, $controller)
    {
        $this->routes[] = [
            'url' => $uri,
            'controller' => $controller,
            'method' => 'POST'
        ];
    }
    public function put($uri, $controller)
    {
        $this->routes[] = [
            'url' => $uri,
            'controller' => $controller,
            'method' => 'PUT'
        ];
    }
    public function patch($uri, $controller)
    {
        $this->routes[] = [
            'url' => $uri,
            'controller' => $controller,
            'method' => 'PATCH'
        ];
    }
    public function delete($uri, $controller)
    {
        $this->routes[] = [
            'url' => $uri,
            'controller' => $controller,
            'method' => 'DELETE'
        ];
    }
    public function route($uri, $method)
    {
        foreach($this->routes as $route) {
            if ($route['url'] === $uri && $route['method'] === strtoupper($method)) {
                return require basePath($route['controller']);
            }
        }
        $this->abort();
    }

    protected function abort($code = '404')
    {
        http_response_code(404);
        die();
    }
}
