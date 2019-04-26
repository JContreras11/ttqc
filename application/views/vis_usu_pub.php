


<div class="item1">

  <?php
      $this->load->view('includes/head');
      $this->load->view('includes/menu_usu');
      // $this->load->view('includes/menu_usu');
   ?>

</div>

<link rel="stylesheet" href="<?= base_url() ?>assets/bet/bett.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/bet/bett1.css">



<style media="screen">
#myModal{
  background: #00000080;
}
</style>


<style media="screen">
    #content-container:before {
      content: '';
      display: none;
      height: 165px;
      width: 0%;

      /* background-color: #1976d2; */

    }


    .lim{text-align: center;
    border-bottom: solid 1px #c3c3c3;
    font-size: 25px;}


    li.des {
        padding: 0 15px;
        text-align: justify;
        line-height: 1.7;
    }

</style>



    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="<?= base_url() ?>admin/assets/css/bootstrap.min.css" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="<?= base_url() ?>admin/assets/css/nifty.min.css" rel="stylesheet">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="<?= base_url() ?>admin/assets/css/demo/nifty-demo-icons.min.css" rel="stylesheet">


    <!--=================================================-->



    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="<?= base_url() ?>admin/assets/plugins/pace/pace.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>admin/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <script src="<?= base_url() ?>admin/assets/plugins/pace/pace.min.js"></script>


    <!--Demo [ DEMONSTRATION ]-->
    <!-- <link href="<?= base_url() ?>admin/assets/css/demo/nifty-demo.min.css" rel="stylesheet"> -->



    <!--DataTables [ OPTIONAL ]-->
    <link href="<?= base_url() ?>admin/assets/plugins/datatables/media/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?= base_url() ?>admin/assets/plugins/datatables/extensions/Responsive/css/responsive.dataTables.min.css" rel="stylesheet">




    <!--=================================================

    REQUIRED
    You must include this in your project.


    RECOMMENDED
    This category must be included but you may modify which plugins or components which should be included in your project.


    OPTIONAL
    Optional plugins. You may choose whether to include it in your project or not.


    DEMONSTRATION
    This is to be removed, used for demonstration purposes only. This category must not be included in your project.


    SAMPLE
    Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


    Detailed information and more samples can be found in the document.

    =================================================-->
    <!-- <link id="theme" href="<?= base_url() ?>admin/assets/css/themes/type-e/theme-ocean.min.css" rel="stylesheet"> -->
    <!--jQuery [ REQUIRED ]-->
    <script src="<?= base_url() ?>admin/assets/js/jquery.min.js"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="<?= base_url() ?>admin/assets/js/bootstrap.min.js"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="<?= base_url() ?>admin/assets/js/nifty.min.js"></script>

    <script type="text/javascript">
      const url = ''
      var base_url = '<?= base_url() ?>admin/'
      const global_url = '';
    </script>


    <script src="<?= base_url() ?>admin/js/propios.js"></script>



    <div id="container" class="effect aside-float aside-bright mainnav-lg mainnav-fixed navbar-fixed">





<div class="boxed">
<!--MAIN NAVIGATION-->
<!--===================================================-->
<nav id="mainnav-container" style="    padding-top: 0;">
    <div id="mainnav">


        <!--OPTIONAL : ADD YOUR LOGO TO THE NAVIGATION-->
        <!--It will only appear on small screen devices.-->
        <!--================================
        <div class="mainnav-brand">
            <a href="index.html" class="brand">
                <img src="<?= base_url() ?>admin/assets/img/logo.png" alt="Nifty Logo" class="brand-icon">
                <span class="brand-text">Nifty</span>
            </a>
            <a href="#" class="mainnav-toggle"><i class="pci-cross pci-circle icon-lg"></i></a>
        </div>
        -->



        <!--Menu-->
        <!--================================-->
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">

                    <!--Profile Widget-->
                    <!--================================-->
                    <div id="mainnav-profile" class="mainnav-profile">

                        <div class="profile-wrap text-center" style="padding-top:15px;">
                            <img src="<?= base_url() ?>assets/img/logo_t.png" alt="" style=" width: 160px;">
                        </div>
                        <div class="profile-wrap text-center">
                            <div class="pad-btm">
                              <a href="javascript:void(0)">  <img class="img-circle img-md" src="<?= $usu[0]->img_usu != '' ? base_url().'uploads/'.$usu[0]->img_usu : base_url().'uploads/a1.jpg' ?>" alt="Profile Picture" style="width: 85%;height: 150px;"></a>
                            </div>
                            <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">

                                <p class="mnp-name"><?= $usu[0]->nom_usu ?></p>

                                <div class="row" style="    padding: 14px 15px 0px 15px; font-size: 15px;">
                                  <?php if ($usu[0]->fb_usu != ''): ?>
                                    <div class="col-md-4"><a href="#"><i class="fa fa-facebook"></i></a></div>
                                  <?php endif; ?>
                                  <?php if ($usu[0]->tw_usu != ''): ?>
                                    <div class="col-md-4"><a href="#"><i class="fa fa-twitter"></i></a></div>
                                  <?php endif; ?>
                                  <?php if ($usu[0]->ig_usu != ''): ?>
                                    <div class="col-md-4"><a href="#"><i class="fa fa-instagram"></i></a></div>
                                  <?php endif; ?>



                                </div>
                            </a>
                        </div>
                    </div>



                    <ul id="mainnav-menu" class="list-group">
                              <li class="list-divider"></li>
                              <!--Category name-->

                              <li  class="des" id="">
                                  <?= $usu[0]->dir_usu ?>


                              </li>
                   </ul>

                </div>
            </div>
        </div>
        <!--================================-->
        <!--End menu-->

    </div>
</nav>
<!--===================================================-->
<!--END MAIN NAVIGATION-->



<script type="text/javascript">
  var uri = '';
  console.log(uri);
  $('#'+uri).addClass('active-sub')


</script>
  <!--CONTENT CONTAINER-->
  <!--===================================================-->
  <div id="content-container">


                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">



                  <!-- NECESITAS HACER UNA LISTA -->

                  <div class="row blog-container" style="background: #f9f9f9;padding: 15px 33px;border-radius: 5px;box-shadow: 1px 1px 8px #c3c3c3;">
                    <ul>
                      <?php if (count($blog) > 0): ?>
                        <?php foreach ($blog as $k => $v): ?>
                          <li>

                            <div class="single-list col-sm-12" >
                                <div class="thumb">
                                    <div class="date">
                                        jojojooojo
                                    </div>
                                    <img src="<?= base_url()?>uploads/<?= $v->img_blog ?>" alt="" style="max-width: 280px; min-width: 280px;">
                                </div>
                                <div class="detail">
                                    <a href="<?= base_url()?>entrada/<?= $v->url_blog ?>"><h4 class="pb-20"><?= $v->tit_blog ?></h4></a>
                                    <p>
                                        <?= substr($v->min_des_blog, 0, 150) ?>...
                                    </p>

                                </div>
                            </div>


                          </li>
                        <?php endforeach; ?>
                      <?php else: ?>
                        <li>Este Usuario no tiene historias</li>
                      <?php endif; ?>


                    </ul>
                  </div>








                </div>
                <!--===================================================-->
                <!--End page content-->

            </div>
  <!--===================================================-->
  <!--END CONTENT CONTAINER-->


    <!--JAVASCRIPT-->
    <!--=================================================-->





    <!--=================================================-->




    <!--Flot Chart [ OPTIONAL ]-->
    <script src="<?= base_url() ?>admin/assets/plugins/flot-charts/jquery.flot.min.js"></script>
  	<script src="<?= base_url() ?>admin/assets/plugins/flot-charts/jquery.flot.resize.min.js"></script>
  	<script src="<?= base_url() ?>admin/assets/plugins/flot-charts/jquery.flot.tooltip.min.js"></script>


    <!--Sparkline [ OPTIONAL ]-->
    <script src="<?= base_url() ?>admin/assets/plugins/sparkline/jquery.sparkline.min.js"></script>


    <!--Specify page [ SAMPLE ]-->
    <script src="<?= base_url() ?>admin/assets/js/demo/dashboard.js"></script>
      </div>




    </div>
