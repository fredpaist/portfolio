<?php
/**
 * Created by PhpStorm.
 * User: fredp
 * Date: 5/30/2017
 * Time: 10:58 AM
 */

namespace Admin;
use App\File;


class FilesController
{
    public static  function show()
    {
        $id = filter_input(INPUT_GET, 'delete', FILTER_VALIDATE_INT);

        if($id){
            $file = File::find_by_ID($id);

            unlink(UPLOAD_PATH.$file->file_name);

            $file->delete();

            redirect_to(ROOT_URL. 'admin/?type=Files');
        }

        $files = File::find_all();

        echo view('files', 'admin')
            ->with('files', $files);
    }

}