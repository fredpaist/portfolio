<?php
/**
 * Created by PhpStorm.
 * User: fredp
 * Date: 7/26/2017
 * Time: 11:10 AM
 */

namespace Router;

use Router\UrlMaker;
use Router\Params;

class Router extends Params
{
    public $namespace;
    protected $routes = [];
    protected $request;
    protected $uri;
    public $variables = [];
    protected $type;
    public $lastUrl;

    public function __construct()
    {
        $this->uri = $this->getUrl();

        $this->type = $this->getMethod();

        $_SESSION['referer'] = isset($_SESSION['referer']) ? $_SESSION['referer'] : $this->uri;
    }

    public function get($url)
    {
        $urler = new UrlMaker($url);

        $urler->type = 'GET';

        $this->routes['get'][] = $urler;

        return $urler;
    }

    public function post($url)
    {
        $urler = new UrlMaker($url);

        $urler->type = 'POST';

        $this->routes['post'][] = $urler;

        return $urler;
    }

    public function getUrl()
    {
        return ROOT_URL.ltrim($_SERVER['REQUEST_URI'], '/');
    }

    public function start()
    {
        if($this->getMethod() == 'GET')
        {
            foreach ($this->routes['get'] as $route)
            {
                $this->checkParams($route);

                if($route->url == $this->uri)
                {
                    $this->startController($route);

                    return $this;
                }
            }
        }elseif($this->getMethod() == 'POST')
        {
            foreach ($this->routes['post'] as $route)
            {
                $this->checkParams($route);
                if($route->url == $this->uri)
                {
                    $this->startController($route);

                    return $this;
                }
            }
        }

        return $this->NotFound();

    }

    public function startController($route)
    {
        $class = "$this->namespace\\$route->class";

        $method = $route->method;

        $controller = new $class;

        if(count($this->variables) > 0){
            echo $controller->$method(...$this->variables);
        }else {
            echo $controller->$method();
        }

        $_SESSION['referer'] = $this->uri;
    }

    public function setNamespace($namespace){

        $this->namespace = $namespace;

        return $this;
    }

    public function getMethod()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function NotFound()
    {
        echo 'page not found';
    }

    public function getPageUrl($name, $variables = NULL)
    {
        $urlObject = array_map(function($route) use ($name){
                return $route->name == $name ?  $route->url : '';
        }, $this->routes['get']);

        $url = array_values(array_filter($urlObject));

        if(empty($url)){
            $urlObject = array_map(function($route) use ($name){
                return $route->name == $name ?  $route->url : false;
            }, $this->routes['post']);

            $url = array_values(array_filter($urlObject));
        }


        if($variables)
        {
            $url = $this->setVariables($url, $variables);
        }

        return $url[0];
    }
}