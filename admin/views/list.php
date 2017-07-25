<?php
/**
 * Created by PhpStorm.
 * User: fred.paist
 * Date: 16.05.2017
 * Time: 12:11
 */
require_once 'header.php';

require_once 'sidebar.php';
?>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-bell"></i>
                                <p>me</p>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo MAIN_URL .'logout.php'?>">logout</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">kasutajad <a class="btn btn-default btn-wd"  href="<?php echo ROOT_URL .'admin/user/add.php' ?>">lisa uus</a></h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                    <?php foreach ($headers as $head) : ?>
                                    <th><?php echo $head ?></th>

                                    <?php endforeach; ?>
                                    <th></th>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($items as $item) : ?>
                                    <tr>
                                        <td><?php echo $item->id ?></td>
                                        <td><?php echo $item->email ?></td>
                                        <td><?php echo $item->status ?></td>
                                        <td><?php echo $item->group_rights ?></td>
                                        <td><a href="add.php?id=<?php echo $item->id ?>">Muuda</a></td>
                                        <td><a href="?delete=<?php echo $item->id ?>" class="text-danger">Kustuta</a></td>
                                    </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>



    </div>

<?php

require_once 'footer.php';
