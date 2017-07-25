<?php
/**
 * Created by PhpStorm.
 * User: fredp
 * Date: 5/18/2017
 * Time: 3:04 PM
 */

namespace App;
use Project\DatabaseQuery;


class Project extends DatabaseQuery
{

    protected static $table_name = 'project';
    protected static $db_fields = [
        'id', 'title', 'content', 'url', 'image', 'myPart', 'meta', 'added', 'edited', 'status'];

    public $id;
    public $title;
    public $content;
    public $url;
    public $image;
    public $myPart;
    public $meta;
    public $added;
    public $edited;
    public $status;
}