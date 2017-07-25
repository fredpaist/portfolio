<?php
/**
 * Created by PhpStorm.
 * User: fredp
 * Date: 5/18/2017
 * Time: 3:44 PM
 */
require_once '../../include/autoload.php';

if (!empty($_FILES)) {
    $project = App\Project::find_by_ID($_POST['id']);

    $project->image = $_FILES['file']['name'];
    $project->save();

    $tempFile = $_FILES['file']['tmp_name'];          //3

    $targetPath = TEMPLATE_PATH. 'upload'. DS;  //4

    $targetFile =  $targetPath. $_FILES['file']['name'];  //5

    move_uploaded_file($tempFile,$targetFile);
}