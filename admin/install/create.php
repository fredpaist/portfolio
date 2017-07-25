<?php
/**
 * Created by PhpStorm.
 * User: fred.paist
 * Date: 16.05.2017
 * Time: 10:19
 */

$file = "<?php \n";
$file .= "define('DB_HOST', '".$db_host."');\n";
$file .= "define('DB_NAME', '".$db_name."');\n";
$file .= "define('DB_PREFIX', 'port_');\n";
$file .= "define('DB_PW', '".$db_pw."');\n";
$file .= "define('DB_USER', '".$db_user."');\n";
$file .= "?>";

return $file;
