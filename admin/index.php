<?php
/**
 * Created by PhpStorm.
 * User: fred.paist
 * Date: 16.05.2017
 * Time: 9:21
 */

require_once '../include/autoload.php';
if(!$session->is_logged_in())redirect_to(MAIN_URL.'login.php');

$type = filter_input(INPUT_GET, 'type', FILTER_SANITIZE_STRING);

$users = App\User::find_all();

$projects = App\Project::find_all();

if(!empty($type)){
    $name = $type.'Controller';
    $a = "\Admin\\$name";

    $a::show();
}else{
    echo view('dashboard', 'admin')
        ->with('users', $users)
        ->with('projects', $projects);
}

