

<div class="item1">

  <?php
      $this->load->view('includes/head');
      $this->load->view('includes/menu_usu');
   ?>

</div>



<style media="screen">
    #content-container:before {
      content: '';
      display: none !important;
      height: 165px;
      width: 0%;

      /* background-color: #1976d2; */

    }

    #myModal{
      background: #00000080;
    }


    .lim{text-align: center;
    border-bottom: solid 1px #c3c3c3;
    font-size: 25px;}


    .item1 { grid-area: header; }
    .item2 { grid-area: menu; }
    .item3 { grid-area: main; }
    .item4 { grid-area: right; }
    .item5 { grid-area: footer; }

    .grid-container {
      display: grid;
      grid-template-areas:
        'header header header header header header'
        'menu main main main right right'
        'menu footer footer footer footer footer';
      grid-gap: 10px;
      background-color: #2196F3;
      padding: 10px;
    }

    .grid-container > div {
      background-color: rgba(255, 255, 255, 0.8);
      text-align: center;
      padding: 20px 0;
      font-size: 30px;
    }


    .modal-content{
          margin-top: 32%;
    }


    #content-container{
          margin: 0% 1% 0 22%;

    }


    .panel{
    position: relative;
    top: 63px;
    }


    footer.footer-area.section-gap {
        display: none;
    }

    .active{
      background: -webkit-linear-gradient(45deg, #ff4d7e 0%, #ff6a5b 100%) !important;
      color: #fff !important;
    }

    .active a{
      color: #fff !important;
    }

</style>
    <!--Open Sans Font [ OPTIONAL ]-->
    <link href="http://127.0.0.1/estefania_blog/admin/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

















 -->


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
    <link id="theme" href="http://127.0.0.1/estefania_blog/admin/assets/css/themes/type-e/theme-ocean.min.css" rel="stylesheet">
    <!--jQuery [ REQUIRED ]-->
    <!-- <script src="http://127.0.0.1/estefania_blog/admin/assets/js/jquery.min.js"></script>






    <script src="http://127.0.0.1/estefania_blog/admin/assets/js/nifty.min.js"></script> -->

    <link href="http://127.0.0.1/estefania_blog/admin/assets/plugins/datatables/media/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="http://127.0.0.1/estefania_blog/admin/assets/plugins/datatables/extensions/Responsive/css/responsive.dataTables.min.css" rel="stylesheet">

    <script type="text/javascript">
      const url = ''
      const global_url = '';
    </script>


    <script src="http://127.0.0.1/estefania_blog/admin/js/propios.js"></script>







<div id="container" class="effect aside-float aside-bright mainnav-lg mainnav-fixed navbar-fixed">





<div class="boxed">

<div class="item2">

  <!--MAIN NAVIGATION-->
  <!--===================================================-->
  <nav id="mainnav-container" style=" padding-top: 0;float: left;position: absolute;z-index: 17;width: 20%;height: 100%;background: #fff;">
      <div id="mainnav">


          <!--OPTIONAL : ADD YOUR LOGO TO THE NAVIGATION-->
          <!--It will only appear on small screen devices.-->
          <!--================================
          <div class="mainnav-brand">
              <a href="index.html" class="brand">
                  <img src="http://127.0.0.1/estefania_blog/admin/assets/img/logo.png" alt="Nifty Logo" class="brand-icon">
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
                                <a href="javascript:void(0)">  <img class="img-circle img-md" src="<?= base_url() ?>assets/img/usr.jpg" alt="Profile Picture" style="width: 85%;height: 150px;"></a>
                              </div>
                              <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">

                                  <p class="mnp-name">0COOL</p>
                                  <span class="mnp-desc">jesuscontreras102@hotmail.com</span>
                              </a>
                          </div>
                      </div>



                      <ul id="mainnav-menu" class="list-group">
                                <li class="list-divider"></li>
                                <!--Category name-->

                                <li  class="lim active"  id="menuEnt">
                                  <a href="javascript:views('tabEnt','menuEnt')" >
                                      <!-- icono -->
                                    <span class="menu-title">
                                        Entradas
                                    </span>
                                  </a>
                                </li>
                                <li  class="lim"  id="menuSol">
                                  <a href="javascript:views('tabSol','menuSol')" >
                                      <!-- icono -->
                                    <span class="menu-title">
                                        Solicitudes
                                    </span>
                                  </a>
                                </li>
                                <li  class="lim" id="menuUsu">
                                  <a href="javascript:views('tabUsu','menuUsu')" >
                                      <!-- icono -->
                                    <span class="menu-title">
                                        Editar
                                    </span>
                                  </a>
                                </li>
                                <li  class="lim" id="usuarios" style="position: absolute;width: 100%;color: #fff;bottom: 0;background: #ff8585;">
                                  <a href="<?= base_url() ?>login/logout">
                                    <span class="menu-title">
                                        Salir
                                    </span>
                                  </a>
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



</div>
  <!--CONTENT CONTAINER-->
  <!--===================================================-->
  <div id="content-container">


                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">



               					<!-- Basic Data Tables -->
               					<!--===================================================-->
               					<div class="panel tabu " id="tabEnt" style="display: block;">
               					    <div class="panel-heading">
               					        <button type="button" name="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" style="    margin: 17px 35px;">Escribir</button>
               					    </div>
               					    <div class="panel-body">
               					        <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
               					            <thead>

               					                <tr>
               					                    <th>Imagen</th>
               					                    <th>Titulo</th>
               					                    <th>Comentarios</th>
                                            <th class="min-tablet">Likes</th>
               					                    <th class="min-tablet">Fecha</th>
               					                    <th class="min-desktop">Est</th>
               					                    <th class=""></th>
               					                    <th class=""></th>
               					                    <th class=""></th>
               					                </tr>

               					            </thead>
               					            <tbody id="grilla">

               					            </tbody>
               					        </table>
               					    </div>
               					</div>
               					<!--===================================================-->


                        <div class="panel tabu" id="tabSol"  style="display: none;">
                          <div class="panel-heading">
                              <h3>Solicitudes de mensajes</h3>
                          </div>
                          <div class="panel-body">
                            <table id="demo-dt-sol" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>

                                    <tr>

                                        <th class="">Usuario</th>
                                        <th class="">Fecha</th>
                                    </tr>

                                </thead>
                                <tbody id="grillaSol">

                                </tbody>
                            </table>





                          </div>
                        </div>


                        <div class="panel tabu" id="tabUsu"  style="display: none;">
                          <div class="panel-heading">
                              <h3>Editar Usuario</h3>
                          </div>
                          <div class="panel-body">

                            <form class="" id="frm-edi-usu" method="post">

                            <div class="row">
                              <div class="col-md-6">
                                  <div class="col-md-4">
                                    <div class="form-group">
                  										<input type="text" name="face" placeholder="Facebook" required="" class="form-control" id="face" readonly="readonly">
                  									</div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                  										<input type="text" name="ig" placeholder="Instagram" required="" class="form-control" id="ig" readonly="readonly">
                  									</div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                  										<input type="text" name="twitter" placeholder="Twitter"  required="" class="form-control" id="twitter" readonly="readonly">
                  									</div>
                                  </div>

                                <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Correo" id="email" readonly="readonly">
                                </div>
                                <!-- <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Usuario">
                                </div> -->

                              </div>
                              <div class="col-md-6">

                                  <div class="form-group" id="group_img_s">
                                      <div class="input-group">
                                          <span class="input-group-btn">
                                              <span class="btn btn-default btn-file">
                                                    <input type="file" id="imgInp_s" name="imgInp_s">
                                              </span>
                                          </span>
                                          <input type="text" class="form-control" readonly>
                                      </div>
                                  <!--<img id='img-upload_s'  class="img-responsive" />-->
                                  </div>


                                  <button type="button" name="button" class="btn btn-sucess" id="editUsu">Editar</button>

                                  <div class="form-group"><input type="submit" value="Guardar" class="btn btn-sucess"></div>


                              </div>
                            </div>


                          </form>

                          </div>
                        </div>


                </div>
                <!--===================================================-->
                <!--End page content-->

            </div>
  <!--===================================================-->
  <!--END CONTENT CONTAINER-->


    <!--JAVASCRIPT-->
    <!--=================================================-->


<?php $this->load->view('includes/add_blog') ?>


    <!--=================================================-->



    <!-- <link href="http://127.0.0.1/estefania_blog/admin/assets/css/nifty.min.css" rel="stylesheet"> -->

            <script src="http://127.0.0.1/estefania_blog/admin/assets/plugins/datatables/media/js/jquery.dataTables.js"></script>
          	<script src="http://127.0.0.1/estefania_blog/admin/assets/plugins/datatables/media/js/dataTables.bootstrap.js"></script>
          	<script src="http://127.0.0.1/estefania_blog/admin/assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>





            <script type="text/javascript">


            $(document).ready( function () {




              } );

              var uri = '';
              console.log(uri);
              $('#'+uri).addClass('active-sub')


              var base = '<?= base_url() ?>';
              const id = '<?= $this->session->userdata('logged_in')['id'] ?>'
            </script>

            <script src="<?= base_url() ?>assets/js/jsusu.js" charset="utf-8"></script>
      </div>






    </div>
