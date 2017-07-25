<?php
/**
 * Created by PhpStorm.
 * User: fred.paist
 * Date: 16.05.2017
 * Time: 12:28
 */
require_once '../../include/autoload.php';
if(!$session->is_logged_in())redirect_to(MAIN_URL.'login.php');
$del = filter_input(INPUT_GET,'delete', FILTER_VALIDATE_INT);

if($del){
    $user = App\User::find_by_ID($del);
    $user->delete();
    redirect_to(ROOT_URL. 'admin/');
}

$headers =['ID', 'email', 'status', 'Rigths'];

$users = App\User::find_all();

echo view('list', 'admin')->with('headers', $headers)->with('items', $users);