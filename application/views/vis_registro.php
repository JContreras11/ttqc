<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<style media="screen">
.cls-content {
  padding: 50px 15px 15px;
  padding-top: 10vh;
  background: #ecf0f5; /*colocar una imagen :D */
  position: relative;
}


.cls-content .panel {
    background-color: #fff;
    box-shadow: 0 0px 20px rgba(0,0,0,0.15);
}


.panel-body {
    padding: 15px 20px 25px;
}

.cls-content .cls-content-sm, .cls-content .cls-content-lg {
    width: 70%;
    min-width: 270px;
    margin: 0 auto;
    position: relative;
    border: 0;
    box-shadow: none;
}
/*
@media (min-width: 768px){
.cls-content .cls-content-sm {
    width: 350px;
  }
} */


</style>




<div class="cls-content">
    <div class="cls-content-sm panel">
        <div class="panel-body">

            <div class="mar-ver pad-btm">
              <!-- logo -->
                <h1 class="h3">Registro de usuario</h1>
            </div>

            <div class="" id="error" style="display:none;">
              <code>Los datos ingresados no son correctos</code>
            </div>

            <form class="" id="frm-reg" method="post">

              <div class="row">
                  <div class="col-md-6">
                    <fieldset>

                      <div class="form-group">
                          <input type="text" class="form-control" placeholder="Username" autofocus name="usr" required>
                      </div>

                      <div class="form-group">
                          <input type="password" class="form-control" placeholder="Password" name="pss" required>
                      </div>

                    </fieldset>
                  </div>
                  <div class="col-md-6">
                    <fieldset>
                      <div class="form-group">
                          <input type="email" class="form-control" placeholder="Email" name="email" required>
                      </div>
                      <div class="form-group">
                          <input type="number" class="form-control" placeholder="Telefono" name="tlf" >
                      </div>
                    </fieldset>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                        <input type="checkbox" class=""  name="acpt" id="acpt" required > <label for="acpt">¿ Acepta los <a href="javascript:void()" data-toggle="modal" data-target="#myModal"> termninos y condiciones </a> ?</label>
                    </div>
                  </div>
              </div>



                <button class="btn btn-primary btn-lg btn-block" type="submit">Registar</button>
            </form>

            <!-- <div class="panel-footer">
              ¿ Aun no estas registrado ? <a href="#"> Registrate Aquí¡</a>
            </div> -->

        </div>




    </div>
</div>


<div class="modal fade" id="myModal" role="dialog">
   <div class="modal-dialog modal-lg">

     <!-- Modal content-->
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <!-- <h4 class="modal-title">Modal Header</h4> -->
       </div>
       <div class="modal-body">
         <div class="container">
           <h3>Terminos y Condiciones</h3>
           <textarea name="name" rows="8" cols="80" disabled>

              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

             </textarea>
         </div>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
       </div>
     </div>

   </div>
 </div>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" charset="utf-8"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" charset="utf-8"></script>

<script type="text/javascript">
  const base_url = '<?= base_url() ?>'
</script>
<script src="<?= base_url() ?>assets/js/log.js" charset="utf-8"></script>
