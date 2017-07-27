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

$router->post('ajax')
        ->method('ProjectController@projects')
        ->name('ajax');

$router->get('test/{id}')
    ->method('FrontPageController@test')
    ->name('test.test1');

$router->get('test/fred/{id}')
    ->method('FrontPageController@test')
    ->name('test.test2');

$router->get('test/{id}/test')
    ->method('FrontPageController@test')
    ->name('test.test3');

$router->post('posttest')->method('TestController@post')->name('test.post');

$router->start();