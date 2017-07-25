<?php
/**
 * Created by PhpStorm.
 * User: fredp
 * Date: 5/30/2017
 * Time: 9:13 AM
 */
?>

<div class="project-header">
    <img src="<?php echo UPLOAD_URL. $project->image ?>" height="200px">
    <h3 class="project-text title"><?php echo $project->title ?><br><small><?php echo $project->meta ?></small></h3>
</div>
<div class="project-text"><i class="ti-pencil-alt"></i><div><?php echo $project->content ?></div></div>
<div class="project-text"><i class="fa fa-file-code-o" aria-hidden="true"></i><div>Minu roll: <?php echo $project->myPart ?></div></div>
<?php if(!empty($project->url)) : ?>
<div class="project-text"><i class="ti-link"></i><a href="<?php echo $project->url ?>" target="_blank"><?php echo $project->url ?></a></div>
<?php endif; ?>
