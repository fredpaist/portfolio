<?php
/**
 * Created by PhpStorm.
 * User: fredp
 * Date: 5/23/2017
 * Time: 2:54 PM
 */
?>
<div class="content content-flex">
    <div class="indroduction col-md-6 col-xs-12">
        <h2 class="page-header text-center">Fred Paist<br><small>Veebiarendaja</small></h2>
        <div class="intro-text">
			<div class="col-md-6 col-xs-12 img-wrap">
				<img src="<?php echo TEMPLATE_URL ?>fred_1.jpg">
			</div>
			<div class="col-md-6 col-xs-12">
			Fred on Söörömaa söbralik poiss, kes ei pea ühtegi ülesannet liiga raskeks. Fred tunneb ennast koodi kirjutades vabalt. Selged on tal PHP, MySQL, javascript ja muidugi ka HTML ja CSS. Ta teeb veebilehti, mis näevad head välja, on lihtsasti kasutatavad ja hallatavad. Vabal ajal meeldib Fredile sporti teha.
            <br>
			</div>
        </div>
        <div class="col-xs-12 text-center button-warp">
            <a href="<?php echo UPLOAD_URL. $files['cv'];  ?>" target="_blank" class="btn btn-default btn-wd">Minu CV</a>
        </div>
    </div>
    <div class="skills col-md-6 col-xs-12">
        <section id="infografika">
            <div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="first-sirkl"
                             data-value="0.80"
                             data-size="100"
                             data-thickness="4">
                            <strong>PHP<br><span class="score"></span></strong>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="first-sirkl"
                             data-value="0.75"
                             data-size="100"
                             data-thickness="4">
                            <strong>jQuery<br><span class="score"></span></strong>
                        </div>
                    </div>
					<div class="col-xs-6">
                        <div class="first-sirkl"
                             data-value="0.73"
                             data-size="100"
                             data-thickness="4">
                            <strong><i class="fa fa-html5" aria-hidden="true"></i>HTML<br><span class="score"></span></strong>
                        </div>
                    </div>
					<div class="col-xs-6">
                        <div class="first-sirkl"
                             data-value="0.72"
                             data-size="100"
                             data-thickness="4">
                            <strong><i class="fa fa-css3" aria-hidden="true"></i>CSS<br><span class="score"></span></strong>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="first-sirkl"
                             data-value="0.70"
                             data-size="100"
                             data-thickness="4">
                            <strong>MySQL<br><span class="score"></span></strong>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="first-sirkl"
                             data-value="0.60"
                             data-size="100"
                             data-thickness="4">
                            <strong>VueJS<br><span class="score"></span></strong>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
