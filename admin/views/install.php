<?php
/**
 * Created by PhpStorm.
 * User: fred.paist
 * Date: 16.05.2017
 * Time: 9:42
 */

require_once 'header.php';
?>
    <div class="col-lg-12 text-center">
        <?php if(!empty($errors)) : ?>
            <div>
                <?php foreach ( $errors as $error) : ?>
                    <p class="text-danger"><?php echo $error ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <div class="card">
            <div class="header">
                <h4 class="title">Insert needed info</h4>
            </div>
            <div class="col-md-3 col-xs-hidden"></div>
            <div class="content col-md-6 col-xs-12">
                <form method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Database name</label>
                                <input type="text" class="form-control border-input" name="db_name"  >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Database password</label>
                                <input type="text" class="form-control border-input" name="db_pw">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Database host</label>
                                <input type="text" class="form-control border-input" name="db_host">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Database username</label>
                                <input type="text" class="form-control border-input" name="db_user">
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-info btn-fill btn-wd" name="install" value="1">Next</button>
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
            <div class="col-md-3 col-xs-hidden"></div>
        </div>
    </div>

<?php
require_once 'footer.php';
