<?php
/**
 * Created by PhpStorm.
 * User: fred.paist
 * Date: 16.05.2017
 * Time: 10:57
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
                                <label>email</label>
                                <input type="email" class="form-control border-input" name="first_email" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control border-input" name="first_pw">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Password again</label>
                                <input type="password" class="form-control border-input" name="first_pw_2">
                            </div>
                        </div>

                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-info btn-fill btn-wd" name="install" value="1">Install</button>
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
            <div class="col-md-3 col-xs-hidden"></div>
        </div>
    </div>

<?php
require_once 'footer.php';
