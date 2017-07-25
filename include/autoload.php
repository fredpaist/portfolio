<?php
/**
 * Created by PhpStorm.
 * User: fred.paist
 * Date: 16.05.2017
 * Time: 9:25
 */
require_once 'definer.php';
require_once ROOT_PATH.'vendor/autoload.php';

require_once CLASS_PATH . 'functions.php';

if(file_exists(ROOT_PATH. 'config.php')){
    require_once ROOT_PATH. 'config.php';
    $database = new Project\MysqlConnection();
    $session = new Project\Session();
}



