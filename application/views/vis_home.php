

    <!-- start banner Area -->
    <section class="banner-area relative" id="home" data-parallax="scroll" data-image-src="<?= base_url() ?>assets/img/T.png">
      <div class=""></div>
      <div class="container">
        <div class="row fullscreen">
          <div class="banner-content d-flex align-items-center col-lg-12 col-md-12">
            <h1>

            </h1>
          </div>
          <div class="head-bottom-meta d-flex justify-content-between align-items-end col-lg-12">
            <div class="col-lg-6 flex-row d-flex meta-left no-padding">
            </div>
            <div class="col-lg-6 flex-row d-flex meta-right no-padding justify-content-end">
              <div class="col-lg-4 col-sm-12 footer-social">
                <!-- <a href="#"><i class="fa fa-facebook"></i></a> -->
                <!-- <a href="https://www.instagram.com/ttengoquecontar/" target="_blank"><i class="fa fa-instagram"></i></a> -->
                <!-- <a href="#"><i class="fa fa-twitter"></i></a> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End banner Area -->


    <section class="section-gap" style="background: #fff;padding-bottom: 0;padding-top: 20px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <center class="titHome">
              <h1>¡T.T.Q.C!</h1>
            </center>
          </div>

          <div class="col-md-6">
                <p class="textHome">Somos una plataforma transmedia que cree en el potencial narrativo tan grande que pueden tener ‘simples’ relatos cotidianos.</p>
                <p class="textHome">
                  <center class="textTt">  <strong>¡Te tengo que contar! </strong></center>
                </p>
                <p class="textHome">  Es un proyecto de escritura colaborativa en la que los jóvenes bogotanos podrán aportar sus historias del día a día, para así ir creando un banco de historias, que a su vez puedan ser adaptadas por jóvenes realizadores audiovisuales, guionistas, escritores, etc, en guiones de ficción.  </p>
          </div>
          <div class="col-md-6">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/d4KX0QAMgHA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>



    <!-- Start travel Area -->
    <section class="travel-area section-gap seccat" id="travel" style="padding-top: 20px;padding-bottom: 140px;margin-top: 20px;">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="menu-content pb-20 col-lg-8">
            <div class="title text-center">
              <h1 class="mb-10" style="color:#fff;">CATEGORÍAS</h1>
              <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua.</p> -->
            </div>
          </div>
        </div>

        <div class="row">
          <?php foreach ($cat as $k => $v): ?>


            <div class="col-lg-4 travel-left">
              <div class="home-categori single-cat cat">
                <a href="<?= base_url() ?>categoria/<?= $v->url_cat ?>">
                  <img class="img-reponsive" src="<?= base_url() ?>uploads/<?= $v->img_cat ?>" style="max-width: 320px;max-height: 320px;" alt="">
                </a>

                <div class="inner-text">
                  <h4 class="mt-0"><a href="<?= base_url() ?>categoria/<?= $v->url_cat ?>"><?= $v->nom_cat ?></a></h4>
                  <p class="des-cat" style="display:none;">
                    <?= strip_tags($v->des_cat) ?>
                  </p>
                  <!-- <a href="<?= base_url(). $v->url_cat ?>" class="primary-btn load-more pbtn-2 text-uppercase mx-auto mt-60">ver mas </a> -->
                </div>
              </div>
          </div>


          <?php endforeach; ?>

        </div>
        <div class="row">
          <!-- <a href="#" class="primary-btn load-more pbtn-2 text-uppercase mx-auto mt-60">Load More </a> -->
        </div>
      </div>
    </section>
    <!-- End travel Area -->

    <!-- Start fashion Area -->
    <section class="fashion-area section-gap" id="fashion" style="padding-top: 40px;padding-bottom: 10px;border-bottom: solid 1px #f1f1f1;">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="menu-content pb-20 col-lg-8">
            <div class="title text-center">
              <h1 class="mb-10">Ultimas Historias</h1>
            </div>
          </div>
        </div>
        <div class="active-cat-carusel  ">
          <?php foreach ($blog as $k => $v): ?>
<!--
            <div class="col-lg-3 col-md-6 single-fashion lasthist ">
              <img class="img-fluid" src="<?= base_url() ?>uploads/<?= $v->img_blog  ?>" alt="">
              <p class="date"><?= $v->fech_blog ?></p>
              <h4><a href="<?= base_url() ?>entrada/<?= $v->url_blog?>"><?= $v->tit_blog  ?></a></h4>
                <p>

                </p>
                <div class="meta-bottom d-flex justify-content-between">
                  <p><span class="lnr lnr-heart"></span> <?= $v->likes < 10 && $v->likes > 0 ? '0'.$v->likes : $v->likes ?> Likes</p>
                  <p><span class="lnr lnr-bubble"></span> <?= $v->comments ?> Comentarios</p>
                </div>
              </div> -->

              <div class="item single-cat singleBlog">
                <img src="<?= base_url() ?>uploads/<?= $v->img_blog ?>" alt="" style="max-height: 227px;">
                <p class="date"><?= date('d-m-Y', strtotime($v->fech_blog)) ?></p>
                <h4 class="titsingleblog"><a href="<?= base_url() ?>entrada/<?= $v->url_blog ?>" target="_blank"><?= $v->tit_blog ?></a></h4>
                <div class="meta-bottom d-flex justify-content-between likesandcomm">
                  <p><span class="lnr lnr-heart"></span> <?= $v->likes < 10 && $v->likes > 0 ? '0'.$v->likes : $v->likes ?> Likes</p>
                  <p><span class="lnr lnr-bubble"></span> <?= $v->comments ?> Comentarios</p>
                </div>
              </div>


          <?php endforeach; ?>

        </div>
      </div>
    </section>
    <!-- End fashion Area -->


    <!-- Start category Area -->
    <section class="category-area section-gap" id="news" style="padding-top: 50px;padding-bottom: 20px;">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="menu-content pb-20 col-lg-8">
            <div class="title text-center">
              <h1 class="mb-10">Noticias</h1>
              <p style="color:#000;">Noticias de la semana que te pueden interesar</p>
            </div>
          </div>
        </div>

        <div class="active-cat-carusel">

          <?php foreach ($news as $k => $v): ?>
            <div class="item single-cat">
              <img src="<?= base_url() ?>uploads/<?= $v->img_new ?>" alt="" style="max-height: 227px;">
              <p class="date"><?= date('d-m-Y', strtotime($v->tit_new)) ?></p>
              <h4><a href="<?= $v->url_new ?>" target="_blank"><?= $v->tit_new ?></a></h4>
              <div class="desNot"><?= substr($v->des_new,0,150) ?>...</div>
            </div>
          <?php endforeach; ?>

        </div>
      </div>
    </section>
    <!-- End category Area -->

    <?php $this->load->view('includes/add_blog') ?>





    <script type="text/javascript">

        $(document).ready(function () {


          $('.cat').hover(function () {
              $('.cat').removeClass('hov');
              $('.des-cat').css('display','none');
              $($(this).children()[1]).children()[1].style.display = "block";
              $(this).addClass('hov')
          })

          $('.cat').mouseleave(function () {
              $('.cat').removeClass('hov');
              $('.des-cat').css('display','none');
          })


        })

    </script>
