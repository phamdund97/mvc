<?php
namespace Test;
use Test\Router;
use Test\Request;


class Dispatcher
{

    private $request;

    public function dispatch()
    {
        $this->request = new Request();
        
        Router::parse($this->request->url, $this->request);
        
        $controller = $this->loadController();

        // $controller->method(param, param1,...)
        call_user_func_array([$controller, $this->request->action], $this->request->params);
    }

    public function loadController()
    {
        $name = $this->request->controller . "Controller";
        $file = "Test\\Controllers\\" . $name;
        $controller = new $file();
        return $controller;
    }

}
?>