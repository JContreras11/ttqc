



 $(function() {

    $('#file-input').change(function(e) {
        addImage(e);
       });

       function addImage(e){
        var file = e.target.files[0],
        imageType = /image.*/;

        if (!file.type.match(imageType))
         return;

        var reader = new FileReader();
        reader.onload = fileOnload;
        reader.readAsDataURL(file);

        $('#imgSalida').css("display",'block');
        $('#demo-dropzone').css("display",'none');

       }

       function fileOnload(e) {
        var result=e.target.result;
        $('#imgSalida').attr("src",result);
       }
    });

  $(document).ready(function () {

    comboselect(null,base_url+'Home/get_cat','Seleccione la Categoria','item.ide_cat','item.cat_des','form-noti','cat');

    $('#demo-dt-basic').dataTable()

    $('#summernote').summernote({
        height : '230px'
    });

    $('.note-codable').attr('name','contenido')

  })



  $('#save').click(function (e) {
    e.preventDefault()

    $('.note-codable').val($('.note-editable').html())

    var a = $('#form-noti')
    var formdata = new FormData(a[0]);

    $.ajax({
      url:'ins',
      data: formdata ,
      contentType : false,
      processData : false,
      type:'POST',
      success:function(data){
        if (data) {
          alert('Guardado con exito')
          location.href = base_url+url
        }else {
          alert('Error al insertar')
        }
      },
      error:function(data){
        alert('Error');
      }
    });

  })


  $('#title').on('keyup',function () {
    make_url($(this).val())
  })




  function make_url(value) {
    value = utfdecode(value);
    value = value.replace(/\s/g,'-');
    $('#url_case').text(value);
    $('#url').val(value)
  }

  function utfdecode(s) {
        var r=s.toLowerCase();
            r = r.trim();
            r = r.replace(new RegExp(/[àáâãäå]/g),"a");
            r = r.replace(new RegExp(/[èéêë]/g),"e");
            r = r.replace(new RegExp(/[ìíîï]/g),"i");
            r = r.replace(new RegExp(/ñ/g),"n");
            r = r.replace(new RegExp(/[òóôõö]/g),"o");
            r = r.replace(new RegExp(/[ùúûü]/g),"u");

 return r;
}
