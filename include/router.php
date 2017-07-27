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

$router->get('')->method('FrontPageController@show')->name('home');

$router->post('ajax')->method('ProjectController@projects')->name('ajax');

// Auth

$router->get('login')->method('LoginController@show')->name('login');

$router->post('login/try')->method('LoginController@login')->name('login.try');

$router->get('logout')->method('LoginController@logout')->name('logout');

$router->start();