<!--CONTENT CONTAINER-->
<!--===================================================-->

<?php
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>


<div id="content-container">
              <div id="page-head">
                      <div class="pad-all text-center">
                          <h3>Bienvenido Usuario.</h3>
                          <p>En el panel de administracion usted puede agregar contenido a su pagina web.</p>
                      </div>
              </div>


              <!--Page content-->
              <!--===================================================-->
              <div id="page-content" style="padding-top: 80px;">
                  <?php echo $output; ?>
              </div>
              <!--===================================================-->
              <!--End page content-->

</div>
<!--===================================================-->
<!--END CONTENT CONTAINER-->


<?php foreach($js_files as $file): ?>
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
