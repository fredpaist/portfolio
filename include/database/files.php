<?php
/**
 * Created by PhpStorm.
 * User: fredp
 * Date: 5/18/2017
 * Time: 4:31 PM
 */

return "CREATE TABLE ". DB_PREFIX."files (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        file_id  VARCHAR(50) NOT NULL,
        file_name VARCHAR(100)  NOT NULL,
        added  DATETIME
        )";