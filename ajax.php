<?php
/**
 * Created by PhpStorm.
 * User: fredp
 * Date: 6/27/2017
 * Time: 12:47 PM
 */
require_once 'include/autoload.php';

$json = file_get_contents('php://input');

$action = json_decode($json,true);

//$action = filter_input(INPUT_POST, 'controller', FILTER_SANITIZE_STRING);

if(!empty($action))
{
    $exploded = explode('@', $action['controller']);
    $controller = "Controller\\$exploded[0]";

    $function = $exploded[1];

    $do = new $controller;

    echo $do->$function();
}