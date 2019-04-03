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

@media (min-width: 768px){
.cls-content .cls-content-sm {
    width: 350px;
  }
}


</style>


<div class="cls-content">
    <div class="cls-content-sm panel">
        <div class="panel-body">

            <div class="mar-ver pad-btm">
              <!-- logo -->
                <!-- <img src="<?= base_url() ?>assets/img/brisas-logo.png" alt=""> -->
                <h1 class="h3">Incio de Sesion</h1>
            </div>

            <div class="" id="error" style="display:none;">
              <code>Los datos ingresados no son correctos</code>
            </div>

            <form class="" id="frm-log" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" autofocus name="usr" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="pss" required>
                </div>
                <div class="checkbox pad-btm text-left">
                    <a href="#">Olvide mi contraseña</a>
                </div>
                <button class="btn btn-primary btn-lg btn-block" type="submit">Iniciar</button>
            </form>

            <div class="panel-footer">
              ¿ Aun no estas registrado ? <a href="<?= base_url() ?>login/registro"> Registrate Aquí¡</a>
            </div>

        </div>




    </div>
</div>

<script type="text/javascript">
  const base_url = '<?= base_url() ?>'
</script>
<script src="<?= base_url() ?>assets/js/log.js" charset="utf-8"></script>
