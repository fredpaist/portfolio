<?php
/**
 * Created by PhpStorm.
 * User: fred.paist
 * Date: 16.05.2017
 * Time: 9:20
 */

require_once 'include/autoload.php';

if(!file_exists('config.php'))redirect_to(ROOT_URL.'admin/install/');


$files['img'] = App\File::file('img_me_2');

echo view('layout', 'resources')
        ->with('files', $files);
?>
