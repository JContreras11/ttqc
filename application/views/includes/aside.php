<div class="col-lg-4 sidebar-area">

    <!-- <div class="single_widget search_widget">
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
    </div> -->

    <?php if ($this->uri->segment(1) == 'entrada'): ?>
      <div class="single_widget about_widget">
          <img style="width:40px;" src="<?= base_url() ?>uploads/<?= $data[0]->img_usu != '' ? $data[0]->img_usu : 'default_avatar.png' ?>" alt="">
          <h2 class="text-uppercase"><?= $data[0]->nom_usu ?></h2>
          <div class="social-link">
              <a href="#" style="width:40px;" ><i class="fa fa-facebook social-i" aria-hidden="true"></i></a>
              <a href="#" style="width:40px;" ><i class="fa fa-instagram social-i" aria-hidden="true"></i></a>
              <a href="#" style="width:40px;" ><i class="fa fa-twitter social-i" aria-hidden="true"></i></a>
          </div>
      </div>
    <?php endif; ?>


    <div class="single_widget cat_widget colobg">
        <h4 class="text-uppercase pb-20">Categorías</h4>
        <ul id="cata">

        </ul>
    </div>

    <div class="single_widget recent_widget">
        <h4 class="text-uppercase pb-20">Ultimos Posts</h4>
        <div class="active-recent-carusel" id="asiBlog">

        </div>
    </div>


</div>

<script type="text/javascript">
  var base = '<?= base_url() ?>'
</script>
<script src="<?= base_url()  ?>assets/js/aside.js" charset="utf-8"></script>
