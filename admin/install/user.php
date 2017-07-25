<?php
/**
 * Created by PhpStorm.
 * User: fred.paist
 * Date: 16.05.2017
 * Time: 10:55
 */
require_once '../../include/autoload.php';

$errors = [];
$install = filter_input(INPUT_POST, 'install', FILTER_VALIDATE_INT);
global $database;

if($install){
    $email = filter_input(INPUT_POST, 'first_email', FILTER_SANITIZE_STRING);
    $pw = filter_input(INPUT_POST, 'first_pw', FILTER_SANITIZE_STRING);
    $pw_2 = filter_input(INPUT_POST, 'first_pw_2', FILTER_SANITIZE_STRING);

    if(empty($email)){
        $errors[] = 'email vajalik';
    }
    if(empty($pw)){
        $errors[] = 'parool vajalik';
    }elseif(empty($pw_2)){
        $errors[] = 'parool 2 vajalik';
    }elseif($pw != $pw_2){
        $errors[] = 'paroolid peavad ühtima';
    }


    if(empty($errors))
    {
        $sql_1 = include CLASS_PATH. 'database/user.php';
        $result = $database->query($sql_1);

        $sql_2 = include CLASS_PATH. 'database/pages.php';
        $result = $database->query($sql_2);

        $sql_3 = include CLASS_PATH. 'database/files.php';
        $result = $database->query($sql_3);

        $user = new App\User;
        $user->email = $email;
        $user->password = password_krypt($pw);
        $user->added = date("Y-m-d H:i:s");
        $user->edited = date("Y-m-d H:i:s");
        $user->status = 1;
        $user->group_rights = 99;
        $user->save();

        $session->login($user);

        redirect_to(ROOT_URL.'/admin');
    }

}

echo view('install_user', 'admin')->with('errors', $errors);