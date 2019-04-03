

<!-- Start top-section Area -->
<section class="top-section-area section-gap" style="padding: 3% 0">
    <div class="container">
        <div class="row justify-content-between align-items-center d-flex">
            <div class="col-lg-8 top-left">
                <h1 class="text-white mb-20"><?= $cat[0]->nom_cat ?></h1>
                <ul>
                    <li><a href="category.html">Categoria</a><span class="lnr lnr-arrow-right"></span></li>
                    <li><a href="<?= base_url() ?>categoria/<?= $cat[0]->url_cat ?>"><?= $cat[0]->nom_cat ?></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End top-section Area -->

<!-- Start post Area -->
<div class="post-wrapper pt-100">
    <!-- Start post Area -->
    <section class="post-area">
        <div class="container">
            <div class="row justify-content-center d-flex">
                <div class="col-lg-8">

                    <div class="post-lists" style=" margin-top: 0;">

                      <?php foreach ($data as $k => $v): ?>

                        <div class="single-list flex-row d-flex">
                            <div class="thumb">
                                <div class="date">
                                    <span>20</span><br>Dec
                                </div>
                                <img src="<?= base_url()?>uploads/<?= $v->img_blog ?>" alt="" style="max-width: 280px; min-width: 280px;">
                            </div>
                            <div class="detail">
                                <a href="<?= base_url()?>entrada/<?= $v->url_blog ?>"><h4 class="pb-20"><?= $v->tit_blog ?></h4></a>
                                <p>
                                    <?= $v->min_des_blog ?>
                                </p>
                                <p class="footer pt-20">
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                <a href="#"> <?= $v->likes < 10 ? '0'.$v->likes : $v->likes ?> Likes</a>     <i class="ml-20 fa fa-comment-o" aria-hidden="true"></i> <a href="#"><?= $v->comments < 10 ? '0'.$v->comments : $v->comments ?> Comments</a>
                                </p>
                            </div>
                        </div>

                      <?php endforeach; ?>

                    </div>

                </div>
                <?php $this->load->view('includes/aside') ?>
            </div>
        </div>
    </section>
    <!-- End post Area -->
</div>
<!-- End post Area -->
