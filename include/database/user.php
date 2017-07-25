<?php
/**
 * Created by PhpStorm.
 * User: fred.paist
 * Date: 16.05.2017
 * Time: 10:10
 */

return "CREATE TABLE ". DB_PREFIX."users (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        email  VARCHAR(50) NOT NULL,
        password VARCHAR(60) NOT NULL,
        added  DATETIME,
        edited TIMESTAMP,
        group_rights INT(11) DEFAULT 99,
        status int(1)
        )";