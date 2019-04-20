<section class="section-gap" style="padding-bottom: 30px;background-image: linear-gradient(rgba(255, 135, 135, 0.36),       rgba(255, 144, 144, 0.85)     ),url(<?= base_url() ?>assets/img/contact.jpg);background-repeat: no-repeat;background-position-y: -305px;background-attachment: fixed;background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <center>
            <h1>CONTACTO</h1>
          </center>
        </div>

      </div>
    </div>
  </section>


<section class="section-gap" style="padding-bottom: 30px;    padding-top: 28px;">
    <div class="container">
      <div class="row">

        <div class="col-md-6">
            <h3>ESCRIBENOS</h3>
            <form class="" action="#" method="post" id="frm-contact">

            <div class="row">
              <div class="col-md-6">
                <div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
										<input type="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required="" class="single-input frmInput">
								</div>
              </div>
              <div class="col-md-6">
                <div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
										<input type="text" name="tel" placeholder="Telefono" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required="" class="single-input frmInput">
									</div>
              </div>
              <div class="col-md-12">
                <div class="input-group-icon mt-10">
										<textarea name="menss" rows="4" cols="4" placeholder="Mensaje" class="single-input frmInput"></textarea>
								</div>

                <div class="input-group-icon mt-10">
										<input type="submit" class="primary-btn" name="" value="Enviar" style="padding: 0 40px;">
								</div>


              </div>
            </div>
          </form>
        </div>
        <div class="col-md-6">
            <h3>DETALLE DE CONTACTO</h3>
            <ul class="unordered-list" style=" margin-top: 20px; font-size: 20px;">
              <li>ttengoquecontar@gmail.com</li>
              <li>+57 316 4195134</li>
              <li><a target="_blank" href="https://www.facebook.com/TeTengoQueContar/"><i class="fa fa-facebook"></i> Facebook</a> </li>
              <li><a target="_blank" href="https://www.instagram.com/ttengoquecontar/"><i class="fa fa-instagram"></i> Instagram</a> </li>
            </ul>
        </div>

      </div>
    </div>
  </section>


  <?php $this->load->view('includes/add_blog') ?>

  <script src="<?= base_url() ?>assets/js/contact.js" charset="utf-8"></script>
