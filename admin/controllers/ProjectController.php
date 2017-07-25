<?php
/**
 * Created by PhpStorm.
 * User: fredp
 * Date: 7/24/2017
 * Time: 4:32 PM
 */

namespace Admin;

use App\Project;

class ProjectController
{

    public static function show()
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        if($id){
            $page = Project::find_by_ID($id);
            $edit = true;
        }else{
            $page = new Project();
            $edit = false;
        }

        $install = filter_input(INPUT_POST, 'insert', FILTER_VALIDATE_INT);

        if($install){
            $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
            $content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_STRING);
            $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_STRING);
            $mypart = filter_input(INPUT_POST, 'mypart', FILTER_SANITIZE_STRING);
            $meta = filter_input(INPUT_POST, 'meta', FILTER_SANITIZE_STRING);

            $page->title = $title;
            $page->content = $content;
            $page->myPart = $mypart;
            $page->meta = $meta;
            $page->status = 1;
            $page->url = $url;
            if($edit){
                $page->edited = date("Y-m-d H:i:s");
            }else{
                $page->added = date("Y-m-d H:i:s");
                $page->edited = date("Y-m-d H:i:s");
            }

            $page->save();

            redirect_to(ROOT_URL. 'admin/');
        }

        echo view('page_add', 'admin')->with('page', $page);
    }

}