
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

<link href="<?= base_url() ?>assets/js/wysiwyg/dist/bootstrap3-wysihtml5.min.css" rel="stylesheet">

  <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog" data-backdrop=”static” data-keyboard=false>
    <div class="modal-dialog " style="max-width: 90%;">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Crear Entrada</h4>
        </div>
        <form class="form-vertical" id="nwPost"  method="post">

        <div class="modal-body">

            <div class="row">
                <div class="col-md-12">
                  <fieldset>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Titutlo" id="title" autofocus name="tit" required>
                        <input type="hidden" class="form-control" id="url" name="url">
                    </div>
                    <div class="form-group">
                        <textarea type="text" class="form-control" placeholder="Mini Descripción"  name="min" required></textarea>
                    </div>

                    <div class="form-group">
                        <textarea type="text" class="form-control" id="summernote" name="cont" required></textarea>
                    </div>

                    <div class="form-group">
                      <select class="form-control" multiple="multiple" placeholder="" id="cat"  name="cat[]" required style="width: 100%">
                      </select>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Tags... ejm: #amor, #encuentro, #familia..." name="tags" >
                    </div>

                    <div class="form-group" id="group_img">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <span class="btn btn-default btn-file">
                                      <input type="file" id="imgInp" name="imgInp">
                                </span>
                            </span>
                            <input type="text" class="form-control" readonly>
                        </div>
                    <!--<img id='img-upload'  class="img-responsive" />-->
                    </div>


                  </fieldset>
                </div>

            </div>


        </div>



        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-success" >Publicar</button>
        </div>
      </form>
      </div>

    </div>
  </div>





<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
  <script src="<?= base_url() ?>assets/js/wysiwyg/dist/bootstrap3-wysihtml5.all.min.js"></script>


<script type="text/javascript">

  const base = '<?= base_url() ?>'
  $(document).ready(function () {

        get_cat()

        $('#cat').select2({
              width: 'resolve' // need to override the changed default
          });

        $('#summernote').wysihtml5({
          toolbar: {
                "fa": true
                }

            });


            $(document).on('change', '.btn-file :file', function() {
                var input = $(this),
                    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                input.trigger('fileselect', [label]);
                });

                $('.btn-file :file').on('fileselect', function(event, label) {

                    var input = $(this).parents('.input-group').find(':text'),
                        log = label;

                    if( input.length ) {
                        input.val(log);
                    } else {
                        if( log ) alert(log);
                    }

                });



                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                          $('#group_img').append('<img id="img-upload"  class="img-responsive" style="width: 40%; margin: 3% 0 0 5%; height:  40%;"/>')
                            $('#img-upload').attr('src', e.target.result);
                        }

                        reader.readAsDataURL(input.files[0]);
                    }
                }

                $("#imgInp").change(function(){

                    console.log(this);
                    readURL(this);
                });


                $('#title').on('keyup',function () {
                    make_url($(this).val())
                  })


  })


  function get_cat() {
      comboselectmultiple(null,`${base}categorias/list_cat`,'Seleccione Categorias','item.ide_cat','item.nom_cat','nwPost','cat');
  }

</script>






<script src="<?= base_url() ?>assets/js/nw_post.js"></script>
