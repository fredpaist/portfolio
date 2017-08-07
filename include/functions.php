<?php
/**
 * Created by PhpStorm.
 * User: fred.paist
 * Date: 16.05.2017
 * Time: 9:39
 */

function view($name, $place) {
    return new Project\View($name, $place);
}

function redirect_to($url) {
    if(!empty($url)) {
        ?><META http-equiv="refresh" content="0;URL=<?php echo $url ?>"><?php
        exit();
    }

}

function password_krypt($pwd) {
    /**
     * In this case, we want to increase the default cost for BCRYPT to 12.
     * Note that we also switched to BCRYPT, which will always be 60 characters.
     */
    $options = [
        'cost' => 12,
    ];
    return password_hash($pwd, PASSWORD_BCRYPT, $options);
}

function get_ip()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
	
	return $ip;
}


function url($name, $variables = NULL)
{
    global $router;

    return $router->getPageUrl($name, $variables);
}


function back()
{
    redirect_to($_SESSION['referer']);
}