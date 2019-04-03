

<!-- Start post Area -->
<div class="post-wrapper pt-100">
    <!-- Start post Area -->
    <section class="post-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="single-page-post">
                        <img class="img-fluid" src="<?= base_url() ?>uploads/<?= $data[0]->img_blog ?>" alt="">
                        <div class="top-wrapper ">
                            <div class="row d-flex justify-content-between">
                                <h2 class="col-lg-8 col-md-12 text-uppercase">
                                    <?= $data[0]->tit_blog ?>
                                </h2>
                                <div class="col-lg-4 col-md-12 right-side d-flex justify-content-end">
                                    <div class="desc">
                                       <h2><?= $data[0]->nom_usu ?></h2>
                                        <h3><?= $data[0]->fech_blog ?></h3>
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
                        <div class="single-post-content">

                          <?= $data[0]->des_blog ?>

                          <?php if ($this->session->userdata('logged_in')['id'] != $data[0]->ide_usu): ?>

                          <center>
                            <a class="primary-btn mt-20" href="javascript:void(0)" data-toggle="modal" data-target="#mySolicitud" style="padding: 4px 25px;" >Usar esta historia</a>
                          </center>

                        <?php endif; ?>

                        </div>
                        <div class="bottom-wrapper">
                            <div class="row">
                                <div class="col-lg-4 single-b-wrap col-md-12">
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                     like this
                                </div>
                                <div class="col-lg-4 single-b-wrap col-md-12">
                                    <i class="fa fa-comment-o" aria-hidden="true"></i> 06 comments
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
                        <?php if (count($com) > 0): ?>
                          <section class="comment-sec-area pt-80 pb-80">
                            <div class="container">
                                <div class="row flex-column">
                                    <h5 class="text-uppercase pb-80">05 Comments</h5>
                                    <br>
                                    <div class="comment-list">
                                        <div class="single-comment justify-content-between d-flex">
                                            <div class="user justify-content-between d-flex">
                                                <div class="thumb">
                                                    <img src="img/asset/c1.jpg" alt="">
                                                </div>
                                                <div class="desc">
                                                    <h5><a href="#">Emilly Blunt</a></h5>
                                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                                    <p class="comment">
                                                        Never say goodbye till the end comes!
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="reply-btn">
                                                   <a href="" class="btn-reply text-uppercase">reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-list left-padding">
                                        <div class="single-comment justify-content-between d-flex">
                                            <div class="user justify-content-between d-flex">
                                                <div class="thumb">
                                                    <img src="img/asset/c2.jpg" alt="">
                                                </div>
                                                <div class="desc">
                                                    <h5><a href="#">Emilly Blunt</a></h5>
                                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                                    <p class="comment">
                                                        Never say goodbye till the end comes!
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="reply-btn">
                                                   <a href="" class="btn-reply text-uppercase">reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-list left-padding">
                                        <div class="single-comment justify-content-between d-flex">
                                            <div class="user justify-content-between d-flex">
                                                <div class="thumb">
                                                    <img src="img/asset/c3.jpg" alt="">
                                                </div>
                                                <div class="desc">
                                                    <h5><a href="#">Emilly Blunt</a></h5>
                                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                                    <p class="comment">
                                                        Never say goodbye till the end comes!
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="reply-btn">
                                                   <a href="" class="btn-reply text-uppercase">reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-list">
                                        <div class="single-comment justify-content-between d-flex">
                                            <div class="user justify-content-between d-flex">
                                                <div class="thumb">
                                                    <img src="img/asset/c4.jpg" alt="">
                                                </div>
                                                <div class="desc">
                                                    <h5><a href="#">Emilly Blunt</a></h5>
                                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                                    <p class="comment">
                                                        Never say goodbye till the end comes!
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="reply-btn">
                                                   <a href="" class="btn-reply text-uppercase">reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-list">
                                        <div class="single-comment justify-content-between d-flex">
                                            <div class="user justify-content-between d-flex">
                                                <div class="thumb">
                                                    <img src="img/asset/c5.jpg" alt="">
                                                </div>
                                                <div class="desc">
                                                    <h5><a href="#">Emilly Blunt</a></h5>
                                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                                    <p class="comment">
                                                        Never say goodbye till the end comes!
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="reply-btn">
                                                   <a href="" class="btn-reply text-uppercase">reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <?php endif; ?>

                        <!-- End comment-sec Area -->

                        <!-- Start commentform Area -->
                        <section class="commentform-area  pb-120 pt-80 mb-100">
                            <div class="container">
                                <h5 class="text-uppercas pb-50">Deja tu comentario</h5>
                                <div class="row flex-row d-flex">
                                    <!-- <div class="col-lg-6">
                                        <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
                                        <input name="email" placeholder="Enter your email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your email'" class="common-input mb-20 form-control" required="" type="email">
                                        <input name="Subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your Subject'" class="common-input mb-20 form-control" required="" type="text">

                                    </div> -->
                                    <div class="col-lg-12">
                                        <textarea class="form-control mb-10" name="message" cols="2" rows="2" style="height: 50px" placeholder="Comentario" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                                        <a class="primary-btn mt-20" href="#">Comentar</a>
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
    <div class="modal-content">
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
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control" placeholder="Email" id="" autofocus name="email" required>
                      <input type="hidden" class="form-control" id="" value="<?= $data[0]->ide_usu ?>" name="id_u">
                      <input type="hidden" class="form-control" id="" value="<?= $data[0]->ide_blog ?>" name="id_b">
                    </div>

                    <div class="form-group col-md-6">
                      <input type="text" class="form-control" placeholder="Telefono" id=""  name="tel">
                    </div>
                  </div>

                  <div class="form-group">
                      <textarea type="text" class="form-control" id="" placeholder="Descripción" name="des" ></textarea>
                  </div>



                </fieldset>
              </div>

          </div>


      </div>



      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-success" >Usar</button>
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
