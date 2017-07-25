<?php
/**
 * Created by PhpStorm.
 * User: fred.paist
 * Date: 16.05.2017
 * Time: 10:16
 */

return "CREATE TABLE ". DB_PREFIX."project (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        title  VARCHAR(50) NOT NULL,
        content TEXT  NOT NULL,
        url  VARCHAR(50) NOT NULL,
        image  VARCHAR(50) NOT NULL,
        myPart  VARCHAR(255) NOT NULL,
        meta  VARCHAR(255) NOT NULL,
        added  DATETIME,
        edited TIMESTAMP,
        status int(1)
        )";