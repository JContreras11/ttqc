

<div class="item1">

  <?php
      $this->load->view('includes/head');
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
  <!-- <style media="screen">
      #content-container:before {
        content: '';
        display: none !important;
        height: 165px;
        width: 0%;

        /* background-color: #1976d2; */

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


   -->
    <!--Open Sans Font [ OPTIONAL ]-->
    <link href="<?= base_url() ?>admin/assets/css/bootstrap.min.css" rel="stylesheet">
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
    <link id="theme" href="<?= base_url() ?>admin/assets/css/themes/type-e/theme-ocean.min.css" rel="stylesheet">
    <!--jQuery [ REQUIRED ]-->
    <!-- <script src="<?= base_url() ?>admin/assets/js/jquery.min.js"></script>






    <script src="<?= base_url() ?>admin/assets/js/nifty.min.js"></script> -->

    <link href="<?= base_url() ?>admin/assets/plugins/datatables/media/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?= base_url() ?>admin/assets/plugins/datatables/extensions/Responsive/css/responsive.dataTables.min.css" rel="stylesheet">

    <script type="text/javascript">
      const url = ''
      const global_url = '';
    </script>


    <script src="<?= base_url() ?>admin/js/propios.js"></script>


  <div class="grid-area">
<!-- Navegacion -->
    <div class="container-nav">
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
                                      <a href="javascript:void(0)">  <img class="img-circle img-md imgUsu" src="<?= base_url() ?>assets/img/usr.jpg" alt="Profile Picture" style="width: 85%;height: 150px;" id="imgUsu"></a>
                                      </div>
                                      <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">

                                          <p class="mnp-name" id="usuN"></p>
                                          <span class="mnp-desc" id="emaU" ></span>
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
                                                Historias
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

                                        <li  class="lim" id="" data-toggle="modal" data-target="#exampleModal" style="margin: 20px 0;background: white;font-size: 18px;color: #fff;padding: 6px 0;border:none;"  >
                                          <a href="javascript:void(0)" style="color: #ff6165;" >
                                              <!-- icono -->
                                            <span class="menu-title">
                                                Importante tener en cuenta
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
    </div>



    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Términos y Condiciones</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">


            <textarea name="name" class="form-control" rows="20" cols="80" readonly="true" style="text-align:center ;">


              El presente es un breve resumen de los puntos más importantes al momento de aceptar

                los términos y condiciones:

                Los términos y condiciones regulan la relación entre el Usuario y la plataforma web Te Tengo
                Que Contar respecto al acceso y el uso por parte del Usuario de la Página Web. El Usuario, al
                ingresar a la Página Web a través de cualquier modalidad o medio conocido o por conocerse
                y/o usarla, queda obligado bajo los mismos.
                Cláusula de exoneración sobre propiedad intelectual. Te Tengo Que Contar actúa como
                mero intermediario entre los Usuarios lo que implica que, la regulación sobre los contenidos
                subido a la Página Web no debe ser verificados ni garantizador por Te Tengo Que Contar. Por
                ende, Te Tengo Que Contar no se responsabiliza respecto de los contenidos en las siguientes
                condiciones:
                (i) Sobre los derechos de propiedad intelectual de un Usuario o un tercero que se vea
                afectado.
                (ii) No garantiza la veracidad del contenido.
                (iii) Sobre la información subida por los Usuarios en caso de que sea inmoral,
                inapropiada, difame o cause perjuicios a cualquier persona.
                Los Usuarios podrán utilizar el contenido subido a la Página Web y en caso de que sea
                utilizado para obtener beneficios económicos o de cualquier otra clase, se entenderá que las
                licencias y cesiones que deban presentarse serán manejados internamente por los Usuarios y
                a disposición de los mismos. Te Tengo Que Contar de la misma manera, se exonera de
                responsabilidad frente a los posibles conflictos jurídicos que se presenten entre los mismos
                toda vez que, actúa como intermediario.
                El contenido compartido por los usuarios registrados en la Página Web, no le pertenece y
                pertenecerá a Te Tengo Que Contar, la propiedad moral del contenido suministrado a la
                Página Web por los usuarios le pertenece al usuario que originalmente envía el relato.
                Tengo Que Contar se reserva la facultad de quitar la información publicada en la Página Web
                por el Usuario cuando lo considere necesario, sin previo aviso, y no se hará responsable por la
                pérdida de dicha información en caso de que el Usuario no tenga copia de la misma.

                Uso de la página web para lectores: Acepta hacer un uso adecuado de la Página Web,
                incluyendo la sección de comentarios, donde se compromete a no propagar mensajes
                inadecuados, irreverentes, difamatorios, obscenos indecentes, intimidatorios, o que incite a la
                violencia, a riesgo de ser bloqueado de la Página Web a juicio del equipo de Te Tengo Que
                Contar; Reconoce que la información proporcionada en el formulario de registro es veraz,
                aceptando los términos y condiciones de la página
                Uso de la página web para escritores de relatos: Se compromete a : Registrarse al
                momento de ingresar a la Página Web, aceptar los términos condiciones de la página, el
                Usuario puede elegir que su relato sea compartido de manera anónima y no autorizar la
                divulgación de sus datos personales como nombre, teléfono y/o correo electrónico en el caso
                de que un tercero registrado en La Página desee usar su relato; En caso de no hacer clic en
                esta opción proporcionada dentro del formulario de envío de la historia, el Usuario reconoce
                que cede el derecho a Te Tengo Que Contar de compartir su correo electrónico y/o teléfono
                con el Usuario que haya dado clic en la opción “usar historia”. El Usuario reconoce que es el

                autor intelectual y moral de la obra que sube a la Página Web; y que cede los derechos
                patrimoniales sobre la obra en caso de que esta logre obtener alguna remuneración
                económica a futuro; además, acepta que una vez el escrito sea enviado, le está otorgando el
                derecho a Te Tengo Que Contar de distribuirlo en la Página Web; el Usuario reconoce que
                mantiene indemne a Te Tengo Que Contar en el caso de que se produzca cualquier infracción a
                la ley de derechos de autor y autoriza a la modificación, alteración, adaptación, extensión,
                transmisión, publicación, distribución, reelaboración, de la obra original, protegido bajo ley de
                derechos de autor.
                Uso de la página para realizadores que deseen adaptar relatos: El usuario acepta
                registrarse en la Página Web al momento de hacer clic en el título del relato, reconoce que es
                su obligación notificar mediante la Página Web, haciendo clic en el botón de usar historia,
                cada vez que el Usuario desee hacer uso de cualquier relato disponible en la Página Web, ya
                sea para adaptarlo, modificarlo, extenderlo, publicarlo, reelaborarlo; reconocerá siempre los
                derechos morales que tiene el usuario que envió originalmente la obra, en caso de ser
                anónimo, el Usuario dará reconocimiento a la plataforma web que distribuyó el relato de
                dónde surgió la inspiración, para la adaptación de la obra original. El Usuario no está en la
                obligación de dar un reconocimiento patrimonial al Usuario que originalmente envió la obra;
                es a decisión del Usuario si desea ponerse en contacto con el Usuario que originalmente envió
                la obra a la Página Web; Te Tengo Que Contar no se hace responsable por cualquier tipo de
                contacto que se haga a futuro, negociación comercial, económica, publicitaria, de manera
                personal, en el caso de que un tercero registrado en la página desee hacer uso del relato y
                además contactar directamente a la persona que originalmente envió este relato; el Usuario
                reconoce que mantiene indemne a Te Tengo Que Contar en el caso de que se produzca
                cualquier infracción a la ley de derechos de autor.

            </textarea>


          </div>
          <div class="modal-footer">

            <a href="<?= base_url() ?>assets/docs/terminosycondiciones.docx" download ><button type="button" class="btn btn-primary" > <i class="fa fa-cloud-download" style="color:#fff;"></i> Terminos y condiciones</button></a>
            <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
          </div>
        </div>
      </div>
    </div>












    <div class="container-all">
        <div id="undefined-sticky-wrapper" class="sticky-wrapper" style="height: 82px;">
          <!-- Start Header Area -->
          <header class="default-header">
            <nav class="navbar navbar-expand-lg navbar-light"  style="    background-color: #fff; box-shadow: -7px -20px 30px 0px rgba(158,158,158,0.3);">
              <div class="container">
                  <a class="" href="<?= base_url() ?>" style="padding-right: 160px;">
                    <img src="<?= base_url() ?>assets/img/logo_t.png" alt="" style=" width: 130px;" class="imgPhone">
                  </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                      <?php if ($this->session->userdata('logged_in')): ?>
                        <li><a href="javascript:void(0)" data-toggle="modal" data-target="#myModal"> + Añadir</a></li>
                      <?php endif; ?>

                    <li><a href="<?= base_url() ?>">Home</a></li>
                    <li><a href="<?= base_url() ?>temas">Historias</a></li>
                    <li><a href="<?= base_url() ?>home/nosotros">Nosotros</a></li>
                    <li><a href="<?= base_url() ?>home/contacto">Contacto</a></li>

                    <?php if ($this->session->userdata('logged_in')['username']): ?>
                      <!-- <li><a href="<?= base_url() ?>usuario/<?= $this->session->userdata('logged_in')['username'] ?>" >Perfil</a></li> -->

                      <li class="dropdown">
                        <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                          Perfil
                        </a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="<?= base_url() ?>usuario/<?= $this->session->userdata('logged_in')['username'] ?>">Ver</a>
                          <a class="dropdown-item" href="<?= base_url() ?>login/logout">Salir</a>
                        </div>
                      </li>


                    <?php else: ?>
                      <li><a href="<?= base_url() ?>login" style="position: absolute; right: 20px;">Login</a></li>
                    <?php endif; ?>
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
          <!-- End Header Area -->
        </div>

        <div class="boxed">
          <!--CONTENT CONTAINER-->
          <!--===================================================-->
          <div id="content-container">


                        <!--Page content-->
                        <!--===================================================-->
                        <div id="page-content">


                                <!-- Basic Data Tables -->
                                <!--===================================================-->
                                <div class="panel tabu " id="tabEnt" style="display: block;margin-left: 25px;margin-right: 25px;">
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


                                <div class="panel tabu" id="tabSol"  style="display: none;margin-left: 25px;margin-right: 25px;">
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


                                <div class="panel tabu" id="tabUsu"  style="display: none; margin-left: 25px;margin-right: 25px;">
                                  <div class="panel-heading">
                                      <h3>Editar Usuario</h3>
                                  </div>
                                  <div class="panel-body">

                                    <form class="" id="frm-edi-usu" method="post">

                                    <div class="row">
                                      <div class="col-md-6">



                                          <a href="javascript:void(0)">
                                            <img class="img-circle img-md imgUsu imgPhone" src="<?= base_url() ?>assets/img/usr.jpg"  style="height: 157px;border: solid;margin: 8% 20%;    max-width: 158px;" >
                                          </a>


                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <input type="text" class="form-control" name="email" placeholder="Correo" id="email" readonly="readonly" required>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <textarea type="text" class="form-control"  id="des" name="des" placeholder="Biografia..." readonly="readonly"> </textarea>
                                            </div>
                                          </div>
                                          <div class="col-md-4">
                                            <div class="form-group">
                                              <input type="text" name="face" placeholder="Facebook"  class="form-control" id="face" readonly="readonly">
                                            </div>
                                          </div>
                                          <div class="col-md-4">
                                            <div class="form-group">
                                              <input type="text" name="ig" placeholder="Instagram"  class="form-control" id="ig" readonly="readonly">
                                            </div>
                                          </div>
                                          <div class="col-md-4">
                                            <div class="form-group">
                                              <input type="text" name="twitter" placeholder="Twitter"   class="form-control" id="twitter" readonly="readonly">
                                            </div>
                                          </div>


                                        <!-- <div class="form-group">
                                          <input type="text" class="form-control" placeholder="Usuario">
                                        </div> -->

                                      </div>
                                      <div class="col-md-6">
                                          <legend>Imagen de Perfil</legend>
                                          <div class="form-group" id="group_img_s">
                                              <div class="input-group">
                                                  <span class="input-group-btn">
                                                      <span class="btn btn-default btn-file">
                                                            <input type="file" id="imgInp" name="imgInp">
                                                      </span>
                                                  </span>
                                                  <input type="text" class="form-control" readonly>
                                              </div>
                                          <!--<img id='img-upload_s'  class="img-responsive" />-->
                                          </div>





                                      </div>

                                      <div class="row col-md-12">
                                        <div class="col-md-6">
                                          <button type="button" name="button" class="btn btn-sucess btn-block" id="editUsu" style="background: #ffc83e;    color: #f7f7f7;">Editar</button>
                                          <button type="button" name="button" class="btn btn-sucess btn-block" id="canUsu" style="display:none; background: #f7605e;    color: #f7f7f7;">Cancelar</button>
                                        </div>
                                        <div class="col-md-6">

                                          <div class="form-group">
                                            <input type="submit" value="Guardar" id="saveBut" class="btn btn-sucess btn-block" style="background: #8cff92;    color: #f7f7f7;" disabled>
                                          </div>

                                        </div>
                                      </div>


                                    </div>


                                  </form>

                                  </div>
                                </div>



                                <div class=" panel  menuButtons" style="margin-left: 25px;margin-right: 25px;">
                                  <div class="col-md-12 ">
                                    <div class="col-sm-4">
                                      <button class="btn btn-success" style="background-image: -webkit-linear-gradient(45deg, #ff4d7e 0%, #ff6a5b 100%);" onclick="javascript:views('tabEnt','menuEnt')">Historias</button>
                                    </div>
                                    <div class="col-sm-4">
                                      <button class="btn btn-success" style="background-image: -webkit-linear-gradient(45deg, #ff4d7e 0%, #ff6a5b 100%);" onclick="javascript:views('tabSol','menuSol')">Solicitudes</button>
                                    </div>
                                    <div class="col-sm-4">
                                      <button class="btn btn-success" style="background-image: -webkit-linear-gradient(45deg, #ff4d7e 0%, #ff6a5b 100%);" onclick="javascript:views('tabUsu','menuUsu')">Editar</button>
                                    </div>

                                  </div>
                                  <div class="col-md-12">
                                    <center><a href="javascript:void(0)" style="color: #ff6165;" data-toggle="modal" data-target="#exampleModal" >Importante tener en cuenta</a></center>
                                  </div>
                                </div>



                        </div>
                        <!--===================================================-->
                        <!--End page content-->

                    </div>
          <!--===================================================-->
          <!--END CONTENT CONTAINER-->

        </div>
    </div>







    <!--JAVASCRIPT-->
    <!--=================================================-->


<?php $this->load->view('includes/add_blog') ?>


    <!--=================================================-->



    <!-- <link href="<?= base_url() ?>admin/assets/css/nifty.min.css" rel="stylesheet"> -->

            <script src="<?= base_url() ?>admin/assets/plugins/datatables/media/js/jquery.dataTables.js"></script>
          	<script src="<?= base_url() ?>admin/assets/plugins/datatables/media/js/dataTables.bootstrap.js"></script>
          	<script src="<?= base_url() ?>admin/assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>





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
