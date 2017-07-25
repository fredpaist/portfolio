<?php
namespace App;
/**
 * Created by PhpStorm.
 * User: fred.paist
 * Date: 16.05.2017
 * Time: 11:33
 */
class Pages extends DatabaseQuery
{
    protected static $table_name = 'pages';
    protected static $db_fields = [
        'id', 'url', 'title', 'content', 'added', 'edited', 'menu_title', 'status'];

    public $id;
    public $title;
    public $url;
    public $content;
    public $added;
    public $edited;
    public $menu_title;
    public $status;

}