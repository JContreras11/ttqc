<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>LOGIN - ADMIN</title>


    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="<?= base_url() ?>assets/css/nifty.min.css" rel="stylesheet">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="<?= base_url() ?>assets/css/demo/nifty-demo-icons.min.css" rel="stylesheet">


    <!--=================================================-->



    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="<?= base_url() ?>assets/lugins/pace/pace.min.css" rel="stylesheet">
    <script src="<?= base_url() ?>assets/lugins/pace/pace.min.js"></script>



    <!--Demo [ DEMONSTRATION ]-->
    <link href="<?= base_url() ?>assets/css/demo/nifty-demo.min.css" rel="stylesheet">


    <!--=================================================

    REQUIRED
    You must include this in your project.


    RECOMMENDED
    This category must be included but you may modify which plugins or components which should be included in your project.


    OPTIONAL
    Optional plugins. You may choose whether to include it in your project or not.


    DEMONSTRATION
    This is to be removed, used for demonstration purposes only. This category must not be included in your project.


    SAMPLE
    Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


    Detailed information and more samples can be found in the document.

    =================================================-->

</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
    <div id="container" class="cls-container">

		<!-- BACKGROUND IMAGE -->
		<!--===================================================-->
		<div id="bg-overlay" class="bg-img" style="background-image: url()"></div>


		<!-- LOGIN FORM -->
		<!--===================================================-->
		<div class="cls-content">
		    <div class="cls-content-sm panel">
		        <div class="panel-body">
		            <div class="mar-ver pad-btm">
                  <!-- logo -->
                    <!-- <img src="<?= base_url() ?>assets/img/brisas-logo.png" alt=""> -->
		                <h1 class="h3">Incio de Sesion</h1>
		            </div>
                <?php echo validation_errors(); ?>
              <?php echo form_open('login', 'data-parsley-validate id="validation-form"'); ?>

		                <div class="form-group">
		                    <input type="text" class="form-control" placeholder="Username" autofocus name="username">
		                </div>
		                <div class="form-group">
		                    <input type="password" class="form-control" placeholder="Password" name="password">
		                </div>
		                <div class="checkbox pad-btm text-left">
		                    <input id="demo-form-checkbox" class="magic-checkbox" type="checkbox">
		                    <label for="demo-form-checkbox">Remember me</label>
		                </div>
		                <button class="btn btn-primary btn-lg btn-block" type="submit">Iniciar</button>
		            </form>
		        </div>


		    </div>
		</div>
		<!--===================================================-->


		<!-- DEMO PURPOSE ONLY -->
		<!--===================================================-->
		<!-- <div class="demo-bg">
		    <div id="demo-bg-list">
		        <div class="demo-loading"><i class="psi-repeat-2"></i></div>
		        <img class="demo-chg-bg bg-trans active" src="<?= base_url() ?>assets/img/bg-img/thumbs/bg-trns.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="<?= base_url() ?>assets/img/bg-img/thumbs/bg-img-1.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="<?= base_url() ?>assets/img/bg-img/thumbs/bg-img-2.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="<?= base_url() ?>assets/img/bg-img/thumbs/bg-img-3.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="<?= base_url() ?>assets/img/bg-img/thumbs/bg-img-4.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="<?= base_url() ?>assets/img/bg-img/thumbs/bg-img-5.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="<?= base_url() ?>assets/img/bg-img/thumbs/bg-img-6.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="<?= base_url() ?>assets/img/bg-img/thumbs/bg-img-7.jpg" alt="Background Image">
		    </div>
		</div> -->
		<!--===================================================-->



    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->



    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--jQuery [ REQUIRED ]-->
    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="<?= base_url() ?>assets/js/nifty.min.js"></script>




    <!--=================================================-->

    <!--Background Image [ DEMONSTRATION ]-->
    <script src="<?= base_url() ?>assets/js/demo/bg-images.js"></script>

</body>
</html>
