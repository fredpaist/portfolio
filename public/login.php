<?php
/**
 * Created by PhpStorm.
 * User: fred.paist
 * Date: 16.05.2017
 * Time: 11:47
 */
require_once '../include/autoload.php';
if($session->is_logged_in())redirect_to(ROOT_URL.'admin');
$errors = [];
//$pages = Pages::find_all();
$install = filter_input(INPUT_POST, 'install', FILTER_VALIDATE_INT);
global $database;


if($install){
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $pw = filter_input(INPUT_POST, 'pw', FILTER_SANITIZE_STRING);

    if(empty($email)){
        $errors[] = 'email vajalik';
    }
    if(empty($pw)){
        $errors[] = 'parool vajalik';
    }


    if(empty($errors)){
        $auth = new App\User();

        if($auth->auth($email, $pw)) {
            redirect_to(ROOT_URL.'admin/');
        } else {
            $errors[] = 'failed to log in';
			if(!isset($_SESSION['failed'])){$_SESSION['failed'] = 1;}else{$_SESSION['failed'] += 1;}
        }
    }

}
if(isset($_SESSION['failed']) && $_SESSION['failed'] >= 3){
	$text = get_ip(). ' failed too many times and has been blocked';
	echo view('content', 'public')->with('text', $text)->with('session', $session)->with('pages', $pages);
}else{
	echo view('login', 'public')->with('errors', $errors);
}
