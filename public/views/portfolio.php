<?php
/**
 * Created by PhpStorm.
 * User: fredp
 * Date: 5/23/2017
 * Time: 3:00 PM
 */
?>

<div class="content content-flex my-jobs">
    <div class="col-xs-12 col-md-6 done-stuff">
        <h2 class="page-header text-center">Projektid</h2>
        <div class="job-list">
                <?php foreach ($projects as $item) : ?>
                <div class="col-md-12">
                    <a href="#<?php echo $item->id ?>" class="list-item btn"><?php echo $item->title ?></a>&emsp;<?php echo $item->meta ?>
                </div>
                <?php endforeach; ?>
        </div>
    </div>
    <div class="col-xs-12 col-md-6 project">


    </div>

</div>
