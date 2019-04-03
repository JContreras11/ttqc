


<!-- Start Header Area -->
<header class="default-header">
  <nav class="navbar navbar-expand-lg navbar-light"  style="    background-color: #fff;    width: 100% !important; box-shadow: -7px -20px 30px 0px rgba(158,158,158,0.3);">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url() ?>" style="padding-right: 160px;">
          <!-- <img src="<?= base_url() ?>assets/img/logo_t.png" alt="" style=" width: 160px;"> -->
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
            <li><a href="<?= base_url() ?>usuario/<?= $this->session->userdata('logged_in')['username'] ?>" style="position: absolute; right: 20px;">Perfil</a></li>
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
