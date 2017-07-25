<?php
/**
 * Created by PhpStorm.
 * User: fred.paist
 * Date: 16.05.2017
 * Time: 9:46
 */
define('DS', DIRECTORY_SEPARATOR);

defined('ROOT_URL') ? null : define('ROOT_URL', pathUrl(__DIR__.'/../'));
defined('ROOT_PATH') ? null :
    define('ROOT_PATH',  dirname(dirname(__FILE__)). '/');

//MAIN CONSTANTS
defined('CLASS_PATH') ? null : define('CLASS_PATH', ROOT_PATH . 'include' . DS);
defined('MAIN_URL') ? null : define('MAIN_URL', ROOT_URL . 'public/');
defined('MAIN_PATH') ? null : define('MAIN_PATH', ROOT_PATH . 'public' . DS);

//TEMPLATE CONSTANTS
defined('TEMPLATE_PATH') ? null : define('TEMPLATE_PATH', MAIN_PATH . 'assets' . DS);
defined('TEMPLATE_URL') ? null : define('TEMPLATE_URL', MAIN_URL . 'assets/');
defined('RESOURCES_URL') ? null : define('RESOURCES_URL', ROOT_URL . 'resources/');
defined('UPLOAD_URL') ? null : define('UPLOAD_URL', TEMPLATE_URL . 'upload/');
defined('UPLOAD_PATH') ? null : define('UPLOAD_PATH', TEMPLATE_PATH . 'upload/');


function pathUrl($dir = __DIR__){

    $root = "";
    $dir = str_replace('\\', '/', realpath($dir));

    //HTTPS or HTTP
    $root .= !empty($_SERVER['HTTPS']) ? 'https' : 'http';

    //HOST
    $root .= '://' . $_SERVER['HTTP_HOST'];

    //ALIAS
    if(!empty($_SERVER['CONTEXT_PREFIX'])) {
        $root .= $_SERVER['CONTEXT_PREFIX'];
        $root .= substr($dir, strlen($_SERVER[ 'CONTEXT_DOCUMENT_ROOT' ]));
    } else {
        $root .= substr($dir, strlen($_SERVER[ 'DOCUMENT_ROOT' ]));
    }

    $root .= '/';

    return $root;
}