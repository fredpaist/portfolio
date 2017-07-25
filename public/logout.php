<?php
/**
 * Created by PhpStorm.
 * User: fred.paist
 * Date: 16.05.2017
 * Time: 12:09
 */

require_once "../include/autoload.php";

$session->logout();

redirect_to(ROOT_URL);