<?php
/**
 * Created by PhpStorm.
 * User: fredp
 * Date: 7/26/2017
 * Time: 11:39 AM
 */

use Router\Router;

$router = new Router();

$router->setNamespace('Controller');

$router->get('')
    ->method('FrontPageController@show')
    ->name('home');

$router->get('sinnamai')
    ->method('TestController@shoer')
    ->name('test.test');


$router->start();