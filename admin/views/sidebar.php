<?php
/**
 * Created by PhpStorm.
 * User: fred.paist
 * Date: 16.05.2017
 * Time: 9:34
 */

?>
<div class="sidebar" data-background-color="white" data-active-color="danger">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="<?php echo ROOT_URL ?>" class="simple-text">
                PAGE
            </a>
        </div>

        <ul class="nav">
            <li class="active">
                <a href="<?php echo ROOT_URL .'admin' ?>">
                    <i class="ti-panel"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="<?php echo ROOT_URL.'admin/user/add.php?id='.$session->user_id ?>">
                    <i class="ti-user"></i>
                    <p>My profile</p>
                </a>
            </li>
            <li>
                <a href="<?php echo ROOT_URL.'admin/?type=Files'?>">
                    <i class="ti-files"></i>
                    <p>Files</p>
                </a>
            </li>
            <li>
                <a href="<?php echo url('logout') ?>">
                    <i class="ti-plug"></i>
                    <p>Logout</p>
                </a>
            </li>

        </ul>
    </div>
</div>
