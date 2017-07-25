<?php
/**
 * Created by PhpStorm.
 * User: fredp
 * Date: 6/14/2017
 * Time: 1:15 PM
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo TEMPLATE_URL ?>img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo TEMPLATE_URL ?>img/settings.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Fred Paist</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="<?php echo RESOURCES_URL ?>assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="<?php echo RESOURCES_URL ?>assets/css/animate.min.css" rel="stylesheet"/>
    <link href="<?php echo RESOURCES_URL ?>assets/css/paper-dashboard.css" rel="stylesheet"/>
    <link href="<?php echo RESOURCES_URL ?>assets/css/demo.css" rel="stylesheet"/>
    <link href="<?php echo RESOURCES_URL ?>assets/css/themify-icons.css" rel="stylesheet"/>
    <link href="<?php echo RESOURCES_URL ?>assets/css/custom.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Muli:400,300" rel="stylesheet"/>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet"/>

</head>
<body>

    <div class="main-panel" id="body">
        <div class="content main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card">
                        <div class="content menu-1">
                            <ul class="nav">
                                <li class="active">
                                    <router-link to="/"><i class="fa fa-id-card-o" aria-hidden="true"></i>Fred</router-link>
                                </li>
                                <li data-view="portfolio">
                                    <router-link to=/portfolio><i class="fa fa-briefcase" aria-hidden="true"></i>Portfolio</router-link>
                                </li>
                            </ul>
                            <div class="social">
                                <a href="https://www.facebook.com/fred.paist" target="_blank"><i class="ti-facebook"></i></a>
                                <a href="https://www.instagram.com/fredpaist/" target="_blank"><i class="ti-instagram"></i></a>
                                <a href="mailto:fred.paist@gmail.com" title="fred.paist@gmail.com"><i class="ti-email"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="card">
                        <router-view></router-view>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<!--   Core JS Files   -->
<script src="<?php echo MAIN_URL ?>js/build.js" type="text/javascript"></script>



</html>

