
<style media="screen">
  .commetUsu{
    padding-top: 15px;
    padding-bottom: 20px !important;
    margin-bottom: 15px;
    background: #f3f3f3;

  }


  .img-comm{
    margin: 0 -9px 0 15px;
    max-width: 60px;

    border-radius: 100%;
  }


.thumb{
    border-right: solid 1px #ef8872;
    padding-right: 14px;
}

.inuse{
  background: #fcee21;
  background: -moz-linear-gradient(135deg, #fcee21 0%,#009245 100%);
  background: -webkit-linear-gradient(135deg, #fcee21 0%,#009245 100%);
  background: linear-gradient(135deg, #fcee21 0%,#009245 100%);
}

</style>

<!-- Start post Area -->
<div class="post-wrapper pt-100">
    <!-- Start post Area -->
    <section class="post-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="single-page-post">
                        <img class="img-fluid" src="<?= base_url() ?>uploads/<?= $data[0]->img_blog ?>" alt="" style="width: 100%;">
                        <div class="top-wrapper blogsub" >
                            <div class="row d-flex justify-content-between">
                                <h2 class="col-lg-8 col-md-12 text-uppercase">
                                    <?= $data[0]->tit_blog ?>
                                </h2>
                                <div class="col-lg-4 col-md-12 right-side d-flex justify-content-end">
                                    <div class="desc">
                                       <h2><?= $data[0]->nom_usu ?></h2>
                                        <h3 style="color: #000;"><?= $data[0]->fech_blog ?></h3>
                                    </div>
                                    <div class="user-img">
                                        <img src="<?= $data[0]->img_usu != '' ? $data[0]->img_usu : 'default_avatar.png' ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tags">

                          <?php if (count($cat) > 0): ?>

                            <ul>
                              <?php foreach ($cat as $k => $v): ?>
                                <li><a href="<?= base_url() ?>categoria/<?= $v->url_cat ?>"><?= $v->nom_cat ?></a></li>
                              <?php endforeach; ?>
                            </ul>

                          <?php endif; ?>

                        </div>
                        <div class="single-post-content brdCont">

                          <?= $data[0]->des_blog ?>

                          <?php if ($this->session->userdata('logged_in')['id'] != $data[0]->ide_usu): ?>

                          <center>
                            <a class="primary-btn mt-20" id="use" idr="<?= $data[0]->ide_usu ?>" ids="<?= $data[0]->ide_blog ?>" href="javascript:void(0)" data-toggle="modal" data-target="#mySolicitud" style="padding: 4px 25px;" >Usar esta historia</a>
                          </center>

                        <?php endif; ?>

                        </div>

                        <!-- BOTONES PARA COMPARTIR -->

                        <div class="sharethis-inline-share-buttons" style="margin-top: 20px;"></div>

                        <!-- BOTONES PARA COMPARTIR -->


                        <div class="bottom-wrapper" style="padding: 8px 0 0 0px;">
                            <div class="row" style=" padding: 0 20px; font-size: 16px;">
                                <a href="javascript:void(0)" class="acction <?= $like ? 'liked' : '' ?>" data-action="like" idr="<?= $data[0]->ide_blog ?>">
                                  <div class="">
                                    <?php if ($like): ?>
                                      <i class="fa fa-heart liked" aria-hidden="true"></i>
                                      <span>Unlike</span>

                                    <?php else: ?>
                                      <i class="fa fa-heart-o" aria-hidden="true"></i>
                                      <span>Like</span>

                                    <?php endif; ?>
                                  </div>
                                </a>
                                <div class="col-lg-4 single-b-wrap col-md-12">
                                    <i class="fa fa-comment-o" aria-hidden="true"></i> <span id="ncom"><?= count($com) ?></span> comments
                                </div>
                                <!-- <div class="col-lg-4 single-b-wrap col-md-12">
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>

                        <!-- Start nav Area -->
                        <!-- <section class="nav-area pt-50 pb-100">
                            <div class="container">
                                <div class="row justify-content-between">
                                    <div class="col-sm-6 nav-left justify-content-start d-flex">
                                        <div class="thumb">
                                            <img src="img/prev.jpg" alt="">
                                        </div>
                                        <div class="details">
                                            <p>Prev Post</p>
                                            <h4 class="text-uppercase"><a href="#">A Discount Toner</a></h4>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 nav-right justify-content-end d-flex">
                                        <div class="details">
                                            <p>Prev Post</p>
                                            <h4 class="text-uppercase"><a href="#">A Discount Toner</a></h4>
                                        </div>
                                        <div class="thumb">
                                            <img src="img/next.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section> -->
                        <!-- End nav Area -->

                        <!-- Start comment-sec Area -->
                          <section class="comment-sec-area pt-20 pb-10">
                            <div class="container">
                                <div class="row flex-column" id="commentArea">
                                    <br>
                                    <?php if (count($com) > 0): ?>
                                      <?php foreach ($com as $k => $v): ?>
                                          <div class="comment-list commetUsu" >
                                              <div class="single-comment justify-content-between d-flex">
                                                  <div class="user justify-content-between d-flex">
                                                      <div class="thumb">
                                                          <img src="<?= base_url() ?>uploads/<?= $v->img_usu ?>" alt="" class="img-comm">
                                                      </div>
                                                      <div class="desc">
                                                          <h5><a href="<?= base_url() ?>usuario/<?= $v->nom_usu ?>"><?= $v->nom_usu ?></a></h5>
                                                          <p class="comment">
                                                              <?= $v->des_com ?>
                                                          </p>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      <?php endforeach; ?>
                                    <?php endif; ?>


                                </div>
                            </div>
                          </section>

                        <!-- End comment-sec Area -->

                        <!-- Start commentform Area -->
                        <section class="commentform-area  pb-100 pt-20 mb-100">
                            <div class="container">
                                <h5 class="text-uppercas pb-50">Deja tu comentario</h5>
                                <div class="row flex-row d-flex">
                                    <!-- <div class="col-lg-6">
                                        <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
                                        <input name="email" placeholder="Enter your email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your email'" class="common-input mb-20 form-control" required="" type="email">
                                        <input name="Subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your Subject'" class="common-input mb-20 form-control" required="" type="text">

                                    </div> -->
                                    <div class="col-lg-12">
                                        <textarea id="commentText" class="form-control mb-10" name="message" cols="2" rows="2" style="height: 50px" placeholder="Comentario" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required="" idr="<?= $data[0]->ide_blog ?>"></textarea>
                                        <a class="primary-btn mt-20" href="javascript:void(0)" id="commentButton">Comentar</a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- End commentform Area -->

                    </div>
                </div>



                <?php $this->load->view('includes/aside') ?>
            </div>
        </div>
    </section>
    <!-- End post Area -->
</div>
<!-- End post Area -->



<!-- Modal -->
<div id="mySolicitud" class="modal fade" role="dialog" data-backdrop=”static” data-keyboard=false>
  <div class="modal-dialog " style="max-width: 50%;">

    <!-- Modal content-->
    <div class="modal-content" style="background: #ff6767;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Usar historia</h4>
      </div>
      <form class="form-vertical" id="solPost"  method="post">

      <div class="modal-body">

          <div class="row">
              <div class="col-md-12">
                <fieldset>
                  <div class="row">
                    <?php if ($data[0]->ide_est_blog == 1): ?>
                      <div class="col-md-12">
                        <center style=" font-size: 24px; color: #fff;"><strong>¡Gracias por creer en el poder de los relatos cotidianos!</strong></center>
                        <br>
                        <p style="text-align:center; color:#fff;">
                            Ahora como guionista tienes el derecho de adaptar, modificar, extender,  o reelaborar este relato. Recuerda que debes hacer un reconocimiento al autor original del escrito en caso de que lo utilices. ¡Este es su contacto, para que puedan intercambiar más ideas!
                        </p>
                          <center style="color:#fff;">
                            <h3 style="color:#fff;"><?= $data[0]->ema_usu ?></h3>
                          </center>
                      </div>
                    <?php else: ?>
                      <div class="col-md-12">
                        <center style=" font-size: 24px; color: #fff;"><strong>¡Gracias por creer en el poder de los relatos cotidianos!</strong></center>
                        <br>
                        <p style="text-align:center; color:#fff;">
                            Ahora como guionista tienes el derecho de adaptar, modificar, extender, o reelaborar este relato.  Recuerda que debes hacer un reconocimiento al autor original del escrito en caso de que lo utilices; en este caso, como el autor es anónimo, puedes darle un reconocimiento a www.tetengoquecontar.com como plataforma web que distribuyó el relato de dónde surgió la inspiración para tu guion de ficción.
                        </p>

                      </div>
                    <?php endif; ?>
                  </div>
                </fieldset>
              </div>

          </div>


      </div>



      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
        <!-- <button type="submit" class="btn btn-success" >Usar</button> -->
      </div>
    </form>
    </div>

  </div>
</div>



        <?php $this->load->view('includes/add_blog') ?>



<script type="text/javascript">
  var base = '<?= base_url() ?>';
</script>
<script src="<?= base_url() ?>assets/js/single.js" charset="utf-8"></script>
