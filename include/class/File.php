<?php
/**
 * Created by PhpStorm.
 * User: fredp
 * Date: 5/18/2017
 * Time: 4:24 PM
 */

namespace App;
use Project\DatabaseQuery;


class File extends DatabaseQuery
{
    protected static $table_name = 'files';
    protected static $db_fields = [
        'id', 'file_id', 'file_name', 'added'];

    public $id;
    public $file_id;
    public $file_name;
    public $added;

    public static function file($file_id){
            global $database;

            $sql = "SELECT * FROM "
                . DB_PREFIX . static::$table_name
                . " WHERE file_id='" . $database->escape_value($file_id) . "' LIMIT 1";

            $result = static::find_by_query($sql);

            return !empty($result) ? array_shift($result) : false;
    }
}