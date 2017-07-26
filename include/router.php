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

$router->get('test/{id}')
    ->method('FrontPageController@test')
    ->name('test.test');

$router->get('test/fred/{id}')
    ->method('FrontPageController@test')
    ->name('test.test');

$router->get('test/{id}/test')
    ->method('FrontPageController@test')
    ->name('test.test');

$router->post('posttest')->method('TestController@post')->name('test.post');

$router->start();
