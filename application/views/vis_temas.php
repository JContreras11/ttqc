
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
                <div class="col-lg-4 sidebar-area">
                    <div class="single_widget search_widget">
                        <div id="imaginary_container">
                            <div class="input-group stylish-input-group">
                                <input type="text" class="form-control"  placeholder="Search" >
                                <span class="input-group-addon">
                                    <button type="submit">
                                        <span class="lnr lnr-magnifier"></span>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="single_widget about_widget">
                        <img src="img/asset/s-img.jpg" alt="">
                        <h2 class="text-uppercase">Adele Gonzalez</h2>
                        <p>
                            MCSE boot camps have its supporters and
                            its detractors. Some people do not understand why you should have to spend money
                        </p>
                        <div class="social-link">
                            <a href="#"><button class="btn"><i class="fa fa-facebook" aria-hidden="true"></i> Like</button></a>
                            <a href="#"><button class="btn"><i class="fa fa-twitter" aria-hidden="true"></i> follow</button></a>
                        </div>
                    </div>
                    <div class="single_widget cat_widget">
                        <h4 class="text-uppercase pb-20">post categories</h4>
                        <ul>
                            <li>
                                <a href="#">Technology <span>37</span></a>
                            </li>
                            <li>
                                <a href="#">Lifestyle <span>37</span></a>
                            </li>
                            <li>
                                <a href="#">Fashion <span>37</span></a>
                            </li>
                            <li>
                                <a href="#">Art <span>37</span></a>
                            </li>
                            <li>
                                <a href="#">Food <span>37</span></a>
                            </li>
                            <li>
                                <a href="#">Architecture <span>37</span></a>
                            </li>
                            <li>
                                <a href="#">Adventure <span>37</span></a>
                            </li>
                        </ul>
                    </div>

                    <div class="single_widget recent_widget">
                        <h4 class="text-uppercase pb-20">Recent Posts</h4>
                        <div class="active-recent-carusel">
                            <div class="item">
                                <img src="img/asset/slider.jpg" alt="">
                                <p class="mt-20 title text-uppercase">Home Audio Recording <br>
                                For Everyone</p>
                                <p>02 Hours ago <span> <i class="fa fa-heart-o" aria-hidden="true"></i>
                                06 <i class="fa fa-comment-o" aria-hidden="true"></i>02</span></p>
                            </div>
                            <div class="item">
                                <img src="img/asset/slider.jpg" alt="">
                                <p class="mt-20 title text-uppercase">Home Audio Recording <br>
                                For Everyone</p>
                                <p>02 Hours ago <span> <i class="fa fa-heart-o" aria-hidden="true"></i>
                                06 <i class="fa fa-comment-o" aria-hidden="true"></i>02</span></p>
                            </div>
                            <div class="item">
                                <img src="img/asset/slider.jpg" alt="">
                                <p class="mt-20 title text-uppercase">Home Audio Recording <br>
                                For Everyone</p>
                                <p>02 Hours ago <span> <i class="fa fa-heart-o" aria-hidden="true"></i>
                                06 <i class="fa fa-comment-o" aria-hidden="true"></i>02</span></p>
                            </div>
                        </div>
                    </div>


                    <div class="single_widget cat_widget">
                        <h4 class="text-uppercase pb-20">post archive</h4>
                        <ul>
                            <li>
                                <a href="#">Dec'17 <span>37</span></a>
                            </li>
                            <li>
                                <a href="#">Nov'17 <span>37</span></a>
                            </li>
                            <li>
                                <a href="#">Oct'17 <span>37</span></a>
                            </li>
                            <li>
                                <a href="#">Sept'17 <span>37</span></a>
                            </li>
                            <li>
                                <a href="#">Aug'17 <span>37</span></a>
                            </li>
                            <li>
                                <a href="#">Jul'17 <span>37</span></a>
                            </li>
                            <li>
                                <a href="#">Jun'17 <span>37</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="single_widget tag_widget">
                        <h4 class="text-uppercase pb-20">Tag Clouds</h4>
                        <ul>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Art</a></li>
                            <li><a href="#">Adventure</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Adventure</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Technology</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End post Area -->
</div>
<!-- End post Area -->
