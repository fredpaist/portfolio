<?php
/**
 * Created by PhpStorm.
 * User: fred.paist
 * Date: 16.05.2017
 * Time: 12:25
 */
require_once '../../include/autoload.php';
if(!$session->is_logged_in())redirect_to(MAIN_URL.'login.php');
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if($id){
    $user = App\User::find_by_ID($id);
    $edit = true;
}else{
    $user = new App\User;
    $edit = false;
}

$errors = [];
$install = filter_input(INPUT_POST, 'install', FILTER_VALIDATE_INT);

if($install){
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $pw = filter_input(INPUT_POST, 'pw', FILTER_SANITIZE_STRING);
    $pw_2 = filter_input(INPUT_POST, 'pw_2', FILTER_SANITIZE_STRING);

    if(empty($email)){
        $errors[] = 'email vajalik';
    }
    if(!$edit){
        if(empty($pw)){
            $errors[] = 'parool vajalik';
        }elseif(empty($pw_2)){
            $errors[] = 'parool 2 vajalik';
        }elseif($pw != $pw_2){
            $errors[] = 'paroolid peavad ühtima';
        }
    }



    if(empty($errors))
    {
        $user->email = $email;

        $user->status = 1;
        $user->group_rights = 99;
        if($edit){
            $user->edited = date("Y-m-d H:i:s");
            if(!empty($pw))$user->password = password_krypt($pw);
        }else{
            $user->added = date("Y-m-d H:i:s");
            $user->edited = date("Y-m-d H:i:s");
            $user->password = password_krypt($pw);
        }

        $user->save();

        redirect_to(ROOT_URL. 'admin/user');
    }

}

echo view('user_form', 'admin')->with('errors', $errors)->with('user', $user);