<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bet/bett1.css">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/bet/img/fav.png">
    <!-- Author Meta -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/font-awesome.min.css">
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <title>TTQL</title>
    <link href="<?= base_url() ?>assets/bet/TTQC_files/css" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>assets/bet//img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>assets/bet//img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/bet//img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= base_url() ?>assets/bet//img/favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bet/TTQC_files/linearicons.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bet/TTQC_files/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bet/TTQC_files/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bet/TTQC_files/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bet/TTQC_files/nice-select.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bet/TTQC_files/main.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bet/TTQC_files/propios.css">
    <script src="<?= base_url() ?>assets/bet/TTQC_files/jquery-2.2.4.min.js"></script>
    <script src="<?= base_url() ?>assets/bet/TTQC_files/sweetalert2@8"></script>
    <link rel="stylesheet" href="<?= base_url() ?>assets/bet/bett.css">
    <!--Open Sans Font [ OPTIONAL ]-->
      <link href="<?= base_url() ?>assets/bet/TTQC_files/bootstrap.min.css" rel="stylesheet">
      <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>-->
  </head>
  <body>
    <div class="grid-area">
<!-- Navegacion -->
      <div class="container-nav">
        <div class="item2">

          <!--MAIN NAVIGATION-->
          <!--===================================================-->
          <nav id="mainnav-container">
              <div id="mainnav">


                  <!--OPTIONAL : ADD YOUR LOGO TO THE NAVIGATION-->
                  <!--It will only appear on small screen devices.-->
                  <!--================================
                  <div class="mainnav-brand">
                      <a href="index.html" class="brand">
                          <img src="<?= base_url() ?>assets/bet/admin/assets/img/logo.png" alt="Nifty Logo" class="brand-icon">
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
                                      <img src="<?= base_url() ?>assets/bet/TTQC_files/logo_t.png" alt="" >
                                  </div>
                                  <div class="profile-wrap text-center">
                                      <div class="pad-btm">
                                        <a href="javascript:void(0)">  <img class="img-circle img-md" src="<?= base_url() ?>assets/bet/TTQC_files/usr.jpg" alt="Profile Picture" style="width: 85%;height: 150px;"></a>
                                      </div>
                                      <a href="<?= base_url() ?>assets/bet/0cool#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">

                                          <p class="mnp-name">0COOL</p>
                                          <span class="mnp-desc">jesuscontreras102@hotmail.com</span>
                                      </a>
                                  </div>
                              </div>



                              <ul id="mainnav-menu" class="list-group">
                                        <li class="list-divider"></li>
                                        <!--Category name-->

                                        <li class="lim" id="menuEnt">
                                          <a href="javascript:views(&#39;tabEnt&#39;,&#39;menuEnt&#39;)">
                                              <!-- icono -->
                                            <span class="menu-title">
                                              Entradas
                                            </span>
                                          </a>
                                        </li>
                                        <li class="lim" id="menuSol">
                                          <a href="javascript:views(&#39;tabSol&#39;,&#39;menuSol&#39;)">
                                              <!-- icono -->
                                            <span class="menu-title">
                                                Solicitudes
                                            </span>
                                          </a>
                                        </li>
                                        <li class="lim" id="menuUsu">
                                          <a href="javascript:views(&#39;tabUsu&#39;,&#39;menuUsu&#39;)">
                                              <!-- icono -->
                                            <span class="menu-title">
                                                Editar
                                            </span>
                                          </a>
                                        </li>
                                        <li class="lim" id="usuarios" style="position: absolute;width: 100%;color: #fff;bottom: 0;background: #ff8585;">
                                          <a href="<?= base_url() ?>assets/bet/login/logout">
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
          <!--===================================|================-->
          <!--END MAIN NAVIGATION-->



        </div>
      </div>


<!-- FIN DE NAVEGACION -->

<!-- Inicio del container principal -->
<div class="container-all">
  <!-- Start Header Area -->
  <div id="undefined-sticky-wrapper" class="sticky-wrapper" style="height: 82px;">
    <header class="default-header" style="">
    <nav class="navbar navbar-expand-lg navbar-light" style="    background-color: #fff; box-shadow: -7px -20px 30px 0px rgba(158,158,158,0.3);">
      <div class="container container-1 ">
          <a class="navbar-brand" href="<?= base_url() ?>assets/bet/" style="padding-right: 160px;">
            <!-- <img src="<?= base_url() ?>assets/bet//img/logo_t.png" alt="" style=" width: 160px;"> -->
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
            <ul class="navbar-nav">
                            <li><a href="javascript:void(0)" data-toggle="modal" data-target="#myModal"> + Añadir</a></li>

            <li><a href="<?= base_url() ?>assets/bet/">Home</a></li>
            <li><a href="<?= base_url() ?>assets/bet/temas">Historias</a></li>
            <li><a href="<?= base_url() ?>assets/bet/home/nosotros">Nosotros</a></li>
            <li><a href="<?= base_url() ?>assets/bet/home/contacto">Contacto</a></li>

                        <li><a href="<?= base_url() ?>assets/bet/0cool" class="perfil" >Perfil</a></li>
                      <!-- Dropdown -->
              <!-- <li class="dropdown">
                <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                  Pages
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="single.html">Single</a>
                  <a class="dropdown-item" href="category.html">Category</a>
                  <a class="dropdown-item" href="search.html">Search</a>
                  <a class="dropdown-item" href="archive.html">Archive</a>
                  <a class="dropdown-item" href="generic.html">Generic</a>
                  <a class="dropdown-item" href="elements.html">Elements</a>
                </div>
              </li> -->
            </ul>
          </div>
      </div>
    </nav>
  </header>
  </div>
  <!-- End Header Area -->
  <div id="container" class="effect aside-float aside-bright mainnav-lg mainnav-fixed navbar-fixed">





    <div class="boxed">


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


                            <div class="panel tabu" id="tabSol" style="display: none;">
                              <div class="panel-heading">
                                  <h3>Solicitudes de mensajes</h3>
                              </div>
                              <div class="panel-body">
                                <div id="demo-dt-sol_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                  <div class="row">
                                    <div class="col-sm-6">
                                      <div class="dataTables_length" id="demo-dt-sol_length"><label>Show <select name="demo-dt-sol_length" aria-controls="demo-dt-sol" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="demo-dt-sol_filter" class="dataTables_filter"><label>Search: <input type="search" class="form-control input-sm" placeholder="" aria-controls="demo-dt-sol"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="demo-dt-sol" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="demo-dt-sol_info" style="width: 100%;">
                                    <thead>

                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="demo-dt-sol" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Usuario: activate to sort column descending" style="width: 0px;">Usuario</th><th class="sorting" tabindex="0" aria-controls="demo-dt-sol" rowspan="1" colspan="1" aria-label="Fecha: activate to sort column ascending" style="width: 0px;">Fecha</th></tr>

                                    </thead>
                                    <tbody id="grillaSol">





                      <tr role="row" class="odd">
                               <th class="sorting_1">0COOL</th>
                               <th class="min-tablet">2019-04-07 </th>
                           </tr><tr role="row" class="even">
                               <th class="sorting_1">JESUS</th>
                               <th class="min-tablet">2019-04-07 </th>
                           </tr><tr role="row" class="odd">
                               <th class="sorting_1">JESUS</th>
                               <th class="min-tablet">2019-04-07 </th>
                           </tr></tbody>
                                </table></div></div>
                                <div class="row">
                                  <div class="col-sm-5">
                                    <div class="dataTables_info" id="demo-dt-sol_info" role="status" aria-live="polite">Showing 1 to 3 of 3 entries</div>
                                  </div><div class="col-sm-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="demo-dt-sol_paginate">
                                      <ul class="pagination">
                                        <li class="paginate_button previous disabled" id="demo-dt-sol_previous"><a href="<?= base_url() ?>assets/bet/0cool#" aria-controls="demo-dt-sol" data-dt-idx="0" tabindex="0">Previous</a></li>
                                        <li class="paginate_button active"><a href="<?= base_url() ?>assets/bet/0cool#" aria-controls="demo-dt-sol" data-dt-idx="1" tabindex="0">1</a></li>
                                        <li class="paginate_button next disabled" id="demo-dt-sol_next"><a href="<?= base_url() ?>assets/bet/0cool#" aria-controls="demo-dt-sol" data-dt-idx="2" tabindex="0">Next</a></li>
                                      </ul></div></div>
                                    </div>
                                    </div>





                              </div>
                            </div>


                            <div class="panel tabu" id="tabUsu" style="display: none;">
                              <div class="panel-heading">
                                  <h3>Editar Usuario</h3>
                              </div>
                              <div class="panel-body">


                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group"><input type="text" class="form-control"></div>
                                    <div class="form-group"><input type="text" class="form-control"></div>
                                    <div class="form-group"><input type="text" class="form-control"></div>
                                    <div class="form-group"><input type="text" class="form-control"></div>
                                    <div class="form-group"><input type="text" class="form-control"></div>
                                    <div class="form-group"><input type="text" class="form-control"></div>
                                  </div>
                                  <div class="col-md-6">

                                      <div class="form-group" id="group_img_s">
                                          <div class="input-group">
                                              <span class="input-group-btn">
                                                  <span class="btn btn-default btn-file">
                                                        <input type="file" id="imgInp_s" name="imgInp_s">
                                                  </span>
                                              </span>
                                              <input type="text" class="form-control" readonly="">
                                          </div>
                                      <!--<img id='img-upload_s'  class="img-responsive" />-->
                                      </div>


                                  </div>
                                </div>

                                <?php $this->load->view('includes/add_blog') ?>



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



  <link href="<?= base_url() ?>assets/bet/TTQC_files/select2.min.css" rel="stylesheet">

  <link href="<?= base_url() ?>assets/bet/TTQC_files/bootstrap3-wysihtml5.min.css" rel="stylesheet">


  <script src="<?= base_url() ?>assets/bet/TTQC_files/select2.min.js"></script>
    <script src="<?= base_url() ?>assets/bet/TTQC_files/bootstrap3-wysihtml5.all.min.js"></script>


  <script type="text/javascript">

    var base = '<?= base_url() ?>assets/bet/'


    $(document).ready(function () {

          get_cat()

          $('#cat').select2({
                width: 'resolve' // need to override the changed default
            });

          $('#summernote').wysihtml5({
            toolbar: {
                  "fa": true
                  }

              });


              $(document).on('change', '.btn-file :file', function() {
                  var input = $(this),
                      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                  input.trigger('fileselect', [label]);
                  });

                  $('.btn-file :file').on('fileselect', function(event, label) {

                      var input = $(this).parents('.input-group').find(':text'),
                          log = label;

                      if( input.length ) {
                          input.val(log);
                      } else {
                          if( log ) alert(log);
                      }

                  });



                  function readURL(input) {
                      if (input.files && input.files[0]) {
                          var reader = new FileReader();

                          reader.onload = function (e) {
                            $('#group_img').append('<img id="img-upload"  class="img-responsive" style="width: 40%; margin: 3% 0 0 5%; height:  40%;"/>')
                              $('#img-upload').attr('src', e.target.result);
                          }

                          reader.readAsDataURL(input.files[0]);
                      }
                  }

                  $("#imgInp").change(function(){

                      console.log(this);
                      readURL(this);
                  });


                  $('#title').on('keyup',function () {
                      make_url($(this).val())
                    })


    })


    function get_cat() {
        comboselectmultiple(null,`${base}categorias/list_cat`,'Seleccione Categorias','item.ide_cat','item.nom_cat','nwPost','cat');
    }

  </script>






  <script src="<?= base_url() ?>assets/bet/TTQC_files/nw_post.js"></script>


      <!--=================================================-->



      <!-- <link href="<?= base_url() ?>assets/bet/admin/assets/css/nifty.min.css" rel="stylesheet"> -->

              <script src="<?= base_url() ?>assets/bet/TTQC_files/jquery.dataTables.js"></script>
            	<script src="<?= base_url() ?>assets/bet/TTQC_files/dataTables.bootstrap.js"></script>
            	<script src="<?= base_url() ?>assets/bet/TTQC_files/dataTables.responsive.min.js"></script>





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
</div>
<!--FIN  del container principal  -->


<!-- End footer Area -->
<script src="<?= base_url() ?>assets/bet/TTQC_files/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="<?= base_url() ?>assets/bet/TTQC_files/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/bet/TTQC_files/jquery.ajaxchimp.min.js"></script>
<script src="<?= base_url() ?>assets/bet/TTQC_files/parallax.min.js"></script>
<script src="<?= base_url() ?>assets/bet/TTQC_files/owl.carousel.min.js"></script>
<script src="<?= base_url() ?>assets/bet/TTQC_files/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url() ?>assets/bet/TTQC_files/jquery.sticky.js"></script>
<script src="<?= base_url() ?>assets/bet/TTQC_files/main.js"></script>
<script src="<?= base_url() ?>assets/bet/TTQC_files/propios(1).js"></script>


  </body>
</html>
