<?php
/**
 * Created by PhpStorm.
 * User: fredp
 * Date: 5/18/2017
 * Time: 4:23 PM
 */

require_once '../include/autoload.php';

$fileid = filter_input(INPUT_POST,'fail_id', FILTER_SANITIZE_STRING);

if($fileid && !empty($_FILES))
{
    $file = new App\File();
    $file->file_id = $fileid;
    $file->file_name = $_FILES['file']['name'];
    $file->added = date("Y-m-d H:i:s");

    $tempFile = $_FILES['file']['tmp_name'];          //3

    $targetPath = TEMPLATE_PATH. 'upload'. DS;  //4

    $targetFile =  $targetPath. $_FILES['file']['name'];  //5

    if(move_uploaded_file($tempFile,$targetFile)){
        $file->save();
    };

}

redirect_to(ROOT_URL.'/admin');