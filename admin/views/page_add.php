<?php
/**
 * Created by PhpStorm.
 * User: fred.paist
 * Date: 16.05.2017
 * Time: 12:47
 */
require_once 'header.php';

require_once 'sidebar.php'
?><link href="<?php echo RESOURCES_URL ?>assets/css/dropzone.css" rel="stylesheet"/>

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

                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Projekt</h4>
                        </div>
                        <div class="content">
                            <form method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>title</label>
                                            <input type="text" class="form-control border-input" name="title"  value="<?php echo isset($page->title) ? $page->title : '' ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>url</label>
                                            <input type="text" class="form-control border-input" name="url" value="<?php echo isset($page->url) ? $page->url : '' ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Minu töö selles</label>
                                            <input type="text" class="form-control border-input" name="mypart" value="<?php echo isset($page->myPart) ? $page->myPart : '' ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>meta (eralda komadega)</label>
                                            <input type="text" class="form-control border-input" name="meta" value="<?php echo isset($page->meta) ? $page->meta : '' ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Content</label>
                                            <textarea rows="5" class="form-control border-input"  name="content" ><?php echo isset($page->content) ? $page->content : '' ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit"  name="insert" value="1" class="btn btn-info btn-fill btn-wd">Insert</button>
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <?php if(!empty($page->image)) : ?>
                        <div class="col-md-12">
                            <div class="card">
                                <img src="<?php echo TEMPLATE_URL.'upload/'. $page->image?>" width="200px">
                            </div>
                        </div>
                    </div>
                        <?php endif; ?>
                    <?php if(isset($page->id)) : ?>
                    <div class="row">
                        <form action="<?php echo ROOT_URL ?>admin/pages/upload.php"
                          class="dropzone"
                          id="my-awesome-dropzone"><input type="hidden" name="id" value="<?php echo $page->id;  ?>"/></form>
                    </div>
                    <?php endif; ?>
                </div>


            </div>
        </div>
    </div>

</div>
<?php
require_once 'footer.php';
