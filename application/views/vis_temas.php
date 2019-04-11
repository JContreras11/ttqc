
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

                                    <?= $c->fechaCastellano($v->fech_blog) ?>
                                </div>
                                <img src="<?= base_url()?>uploads/<?= $v->img_blog ?>" alt="" style="max-width: 280px; min-width: 280px;">
                            </div>
                            <div class="detail">
                                <a href="<?= base_url()?>entrada/<?= $v->url_blog ?>"><h4 class="pb-20"><?= $v->tit_blog ?></h4></a>
                                <p>
                                    <?= substr($v->min_des_blog, 0, 150) ?>...
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


<?php $this->load->view('includes/add_blog') ?>
