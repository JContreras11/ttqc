<!--MAIN NAVIGATION-->
<!--===================================================-->
<nav id="mainnav-container">
    <div id="mainnav">


        <!--OPTIONAL : ADD YOUR LOGO TO THE NAVIGATION-->
        <!--It will only appear on small screen devices.-->
        <!--================================
        <div class="mainnav-brand">
            <a href="index.html" class="brand">
                <img src="<?= base_url()?>assets/img/logo.png" alt="Nifty Logo" class="brand-icon">
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
                        <div class="profile-wrap text-center">
                            <div class="pad-btm">
                              <a href="<?= base_url() ?>">  <img class="img-circle img-md" src="<?= base_url()?>assets/img/profile-photos/1.png" alt="Profile Picture"></a>
                            </div>
                            <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                <span class="pull-right dropdown-toggle">
                                    <i class="dropdown-caret"></i>
                                </span>
                                <p class="mnp-name"><?= $sesion['username'] ?></p>
                                <span class="mnp-desc"><?= $sesion['email'] ?></span>
                            </a>
                        </div>
                        <div id="profile-nav" class="collapse list-group bg-trans">
                            <a href="#" class="list-group-item">
                                <i class="demo-pli-male icon-lg icon-fw"></i> Ver Perfil
                            </a>
                            <a href="<?= base_url() ?>Login/logout" class="list-group-item">
                                <i class="demo-pli-unlock icon-lg icon-fw"></i> Salir
                            </a>
                        </div>
                    </div>



                    <ul id="mainnav-menu" class="list-group">
                              <li class="list-divider"></li>
                              <!--Category name-->
                              <li class="list-header">Menu</li>

                              <li  class="" id="">
                                <a href="<?= base_url() ?>">
                                  <i class="fa fa-newspaper-o"></i>  <!-- icono -->
                                  <span class="menu-title">
                                      Entradas
                                  </span>
                                </a>
                              </li>
                              <li  class="" id="">
                                <a href="<?= base_url() ?>">
                                  <i class="fa fa-newspaper-o"></i>  <!-- icono -->
                                  <span class="menu-title">
                                      Noticias
                                  </span>
                                </a>
                              </li>
                              <li  class="" id="categorias">
                                <a href="<?= base_url() ?>categorias">
                                  <i class="fa fa-newspaper-o"></i>  <!-- icono -->
                                  <span class="menu-title">
                                      Categorioas
                                  </span>
                                </a>
                              </li>
                              <li  class="" id="">
                                <a href="<?= base_url() ?>">
                                  <i class="fa fa-newspaper-o"></i>  <!-- icono -->
                                  <span class="menu-title">
                                      Usuarios
                                  </span>
                                </a>
                              </li>
                              <li  class="" id="">
                                <a href="<?= base_url() ?>">
                                  <i class="fa fa-newspaper-o"></i>  <!-- icono -->
                                  <span class="menu-title">
                                      Solicitudes
                                  </span>
                                </a>
                              </li>
                              <li  class="" id="">
                                <a href="<?= base_url() ?>">
                                  <i class="fa fa-newspaper-o"></i>  <!-- icono -->
                                  <span class="menu-title">
                                      Subscripciones
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



<script type="text/javascript">
  var uri = '<?= $this->uri->segment(1) ?>';
  console.log(uri);
  $('#'+uri).addClass('active-sub')


</script>
