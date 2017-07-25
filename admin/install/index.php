<?php
/**
 * Created by PhpStorm.
 * User: fredp
 * Date: 5/18/2017
 * Time: 2:28 PM
 */
require_once '../../include/autoload.php';

$errors = [];
$install = filter_input(INPUT_POST, 'install', FILTER_VALIDATE_INT);

if($install){
    $db_name = filter_input(INPUT_POST, 'db_name', FILTER_SANITIZE_STRING);
    $db_host = filter_input(INPUT_POST, 'db_host', FILTER_SANITIZE_STRING);
    $db_pw = filter_input(INPUT_POST, 'db_pw', FILTER_SANITIZE_STRING);
    $db_user = filter_input(INPUT_POST, 'db_user', FILTER_SANITIZE_STRING);

    if(empty($db_name)){
        $errors[] = 'db name vajalik';
    }
    if(empty($db_host)){
        $errors[] = 'db host vajalik';
    }
    if(empty($db_user)){
        $errors[] = 'db user vajalik';
    }


    if(empty($errors))
    {
        $config = include '../install/create.php';
        $filename = '../../config.php';
        if(!file_exists($filename))file_put_contents($filename, $config);

        redirect_to(ROOT_URL . 'admin/install/user.php');
    }

}

echo view('install', 'admin')->with('errors', $errors);
