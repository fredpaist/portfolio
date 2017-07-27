<?php
/**
 * Created by PhpStorm.
 * User: fredp
 * Date: 7/27/2017
 * Time: 5:46 PM
 */

namespace Controller;

use App\User;

class LoginController
{
    public function show()
    {
        global $session;

        if($session->is_logged_in())redirect_to(ROOT_URL.'admin');

        return view('login', 'public');
    }

    public function login()
    {
        global $errors;

        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $pw = filter_input(INPUT_POST, 'pw', FILTER_SANITIZE_STRING);

        if(empty($email)){
            $errors->setError('email', 'email vajalik');
        }
        if(empty($pw)){
            $errors->setError('pw', 'parool vajalik');
        }

        if(!$errors->hasErrors()){
            $auth = new User();

            if($auth->auth($email, $pw)) {
                return redirect_to(ROOT_URL.'admin/');
            } else {
                $errors->setError('auth', 'failed to log in');
            }
        }

        return back();
    }

    public function logout()
    {
        global $session;

        $session->logout();

        return redirect_to(url('home'));
    }

}