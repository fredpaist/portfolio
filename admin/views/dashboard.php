<?php
/**
 * Created by PhpStorm.
 * User: fred.paist
 * Date: 16.05.2017
 * Time: 11:44
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
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="content">
                                <form method="post" action="upload.php"  enctype="multipart/form-data">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control border-input" name="fail_id" placeholder="fail id">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="file" class="form-control border-input" name="file">
                                        </div>
                                    </div>
                                    <button type="submit"  name="install" value="1" class="btn btn-info btn-fill btn-wd">Insert</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">kasutajad <a class="btn btn-default btn-wd"  href="<?php echo ROOT_URL .'admin/user/add.php' ?>">lisa uus</a></h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>email</th>
                                        <th>status</th>
                                        <th>rights</th>
                                    <th></th>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($users as $item) : ?>
                                        <tr>
                                            <td><?php echo $item->id ?></td>
                                            <td><?php echo $item->email ?></td>
                                            <td><?php echo $item->status ?></td>
                                            <td><?php echo $item->group_rights ?></td>
                                            <td><a href="user/add.php?id=<?php echo $item->id ?>">Muuda</a></td>
                                            <td><a href="user/?delete=<?php echo $item->id ?>" class="text-danger">Kustuta</a></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Projektid <a class="btn btn-default btn-wd"  href="<?php echo ROOT_URL .'admin/?type=Project' ?>">lisa uus</a></h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Url</th>
                                    <th></th>
                                    <th></th>
                                    </thead>
                                    <tbody>
                                    <?php if($projects) : ?>
                                        <?php foreach ($projects as $item) : ?>
                                            <tr>
                                                <td><?php echo $item->id ?></td>
                                                <td><?php echo $item->title ?></td>
                                                <td><a href="<?php echo $item->url ?>" target="_blank"><?php echo $item->url ?></a></td>
                                                <td><a href="?type=Project&id=<?php echo $item->id ?>">Muuda</a></td>
                                                <td><a href="?delete=<?php echo $item->id ?>" class="text-danger">Kustuta</a></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>



    </div>
    <?php require_once 'footer.php';

