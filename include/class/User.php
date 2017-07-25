<?php
namespace App;
use Project\DatabaseQuery;
/**
 * Created by PhpStorm.
 * User: fred.paist
 * Date: 16.05.2017
 * Time: 11:18
 */
class User extends DatabaseQuery
{
    protected static $table_name = 'users';
    protected static $db_fields = [
        'id', 'email', 'password', 'added', 'edited', 'group_rights', 'status'];

    public $id;
    public $password;
    public $email;
    public $added;
    public $edited;
    public $group_rights;
    public $status;


    public function auth($email, $password) {

        global $database, $session;

        $sql = "SELECT * FROM " .DB_PREFIX. self::$table_name . " WHERE email='" . $email . "' LIMIT 1";

        $result = $database->query($sql);
        $user = mysqli_fetch_object($result);

        if(!empty($user)) {

                if(password_verify($password, $user->password)){
                    $session->login($user);
                    return true;
                }
        }

        return false;
    }
}