<template>
<div class="content content-flex">
    <div class="indroduction col-md-6 col-xs-12">
        <h2 class="page-header text-center">Fred Paist<br><small>Web developer</small></h2>
        <div class="intro-text">
			<div class="col-md-6 col-xs-12 img-wrap">
				<img src="./public/assets/fred_1.jpg">
			</div>
			<div class="col-md-6 col-xs-12">
			Fred on Söörömaa söbralik poiss, kes ei pea ühtegi ülesannet liiga raskeks. Fred tunneb ennast koodi kirjutades vabalt. Selged on tal PHP, MySQL, javascript ja muidugi ka HTML ja CSS. Ta teeb veebilehti, mis näevad head välja, on lihtsasti kasutatavad ja hallatavad. Vabal ajal meeldib Fredile sporti teha.
            <br>
			</div>
        </div>
        <div class="col-xs-12 text-center button-warp">
            <a href="./public/assets/upload/cv_eng.pdf" target="_blank" class="btn btn-default btn-wd">Minu CV</a>
        </div>
    </div>
    <div class="skills col-md-6 col-xs-12">
        <section id="infografika">
            <div>
                <div class="row">
                    <div class="col-xs-6 circle-wrap">
                        <progress-circle :completed-steps="80"
                                           :total-steps="100"
                                           :inner-text="'PHP'"
                                           :diameter="110">
                        </progress-circle>
                    </div>
                    <div class="col-xs-6 circle-wrap">
                          <progress-circle :completed-steps="75"
                                           :total-steps="100"
                                           :diameter="110"
                                           :inner-text="'jQuery'">
                          </progress-circle>
                    </div>
					<div class="col-xs-6 circle-wrap">
                                <progress-circle :completed-steps="73"
                                               :total-steps="100"
                                               :diameter="110"
                                               :inner-text="'HTML'">
                                </progress-circle>
                    </div>
					<div class="col-xs-6 circle-wrap">
                        <progress-circle :completed-steps="72"
                                       :total-steps="100"
                                       :diameter="110"
                                       :inner-text="'CSS'">
                        </progress-circle>
                    </div>
                    <div class="col-xs-6 circle-wrap">
                        <progress-circle :completed-steps="70"
                                       :total-steps="100"
                                       :diameter="110"
                                       :inner-text="'MySQL'">
                        </progress-circle>
                    </div>
                    <div class="col-xs-6 circle-wrap">
                        <progress-circle :completed-steps="60"
                                       :total-steps="100"
                                       :diameter="110"
                                       :inner-text="'VueJS'">
                        </progress-circle>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
</template>

<script>
var ProgressBar = require( './Progress.vue' );
export default {
       components: {
               ProgressCircle: ProgressBar
           },
      props: {

      },

      data () {
        return {

         }
      }
}
</script>

<style>
.circle-wrap{
    margin-bottom: 25px;
    display: flex;
    justify-content: center;
}
</style>
