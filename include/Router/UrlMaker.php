<?php
/**
 * Created by PhpStorm.
 * User: fredp
 * Date: 7/26/2017
 * Time: 11:32 AM
 */

namespace Router;

use Router\Router;

class UrlMaker
{
    public $name;
    public $class;
    public $method;
    public $url;

    public function __construct($url)
    {
        $this->url = ROOT_URL. $url;
    }

    public function method($class)
    {
        $classer = explode('@', $class);

        $this->class = $classer[0];
        $this->method = $classer[1];

        return $this;
    }

    public function name($index)
    {
        $this->name = $index;

        return $this;
    }
}