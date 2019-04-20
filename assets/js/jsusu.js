  $(function () {




    jalar_data();
    jalar_usu();
    jalar_sol();




    $('#nwPost').submit(function (e) {
      e.preventDefault();

            if ($('#accion').val() === 'edita') {


                var formxx = $(this);
                var formdata = false;

                if (window.FormData){
                    formdata = new FormData(formxx[0]);
                }

                $.ajax({
                  url:base+'blog/upd',
                  data: formdata ? formdata : formxx.serialize(),
                  contentType : false,
                  processData : false,
                  type:'post',
                  success: function (data) {

                    location.reload()
                  },
                })


              }


    })

    //
    // $('#frm-edi-usu').submit(function (e) {
    //   e.preventDefault();
    //
    //
    //             var formxx = $(this);
    //             var formdata = false;
    //
    //             if (window.FormData){
    //                 formdata = new FormData(formxx[0]);
    //             }
    //
    //             $.ajax({
    //               url:base+'blog/upd',
    //               data: formdata ? formdata : formxx.serialize(),
    //               contentType : false,
    //               processData : false,
    //               type:'post',
    //               success: function (data) {
    //
    //                 location.reload()
    //               },
    //             })
    //
    //
    //
    //
    //
    // })



    $('#grilla').on('click','.ver_r', function () {
      console.log('ver_r');
    })


    $('#grilla').on('click','.edi_r', function () {
      var i= $(this).attr('idr');

      $('#accion').val('edita');
      $('#id_b').val(i);

      $.post(base+'home/get_blog/'+i, {w:id} ,function (data) {
           var grill= '';
           $('#img-upload').remove()

           // clearNote()

           $('.wysihtml5-sandbox').contents().find("body").html('')

           $.each(data,function (i,item) {

             $('#title').val(item.tit_blog);
             $('#url').val(item.url_blog);
             $('#min').val(item.min_des_blog);

             $('#summernote').text(item.des_blog);
             $('#summernote ~ iframe.wysihtml5-sandbox').contents().find("body").html(item.des_blog)

             $('#tags').val(item.tags_blog);


             if (parseInt(item.ide_est_blog) === 0) {
               $('#priv')[0].checked = true
             } else {
               $('#priv')[0].checked = false
             }


             $('#group_img').append(`<img id='img-upload' src="${base}uploads/${item.img_blog}"  class="img-responsive" />`);
           })

           getCat(i).then(function (data) {
             $('#cat option:selected').removeAttr('selected');
             $.each(data,function (i,item) {
               $('#cat option[value="'+item.ide_cat+'"]').attr('selected','selected');
             })
             $('#cat').trigger('change');
             $('#myModal').modal('show')
           })



      })

    })
    $('#grilla').on('click','.bor_r', function () {
        var i= $(this).attr('idr');
        $.post(`${base}blog/del_blog`,{i},function (data) {
            jalar_data()
        })
    })



/*

  Funcion toggle a botono

*/

    $('#editUsu').click(function() {

      $('.form-control').removeAttr('readonly','readonly');
      //Document
      //Object
      //Model

      /* 2 */ $(this).css('display','none');
      /* 1 */ $('#canUsu').css('display','block')

    })

    $('#canUsu').click(function() {
      $('.form-control').attr('readonly','readonly');
      /* 2 */ $(this).css('display','none');
      /* 1 */ $('#editUsu').css('display','block')

      // hidde
      // show

    })


    //  document.getElementById('frm-edi-usu').addEventListener('submit',function (e) {
    //     alert('Hola esto es JS ')
    //
    //     /*-----------*/
    //
    // })
    //
    //


    $('#frm-edi-usu').submit(function (e) {
        e.preventDefault();


        var formxx = $(this);
        var formdata = false;

        if (window.FormData){
            formdata = new FormData(formxx[0]);
        }

        $.ajax({
            url: `${base}usuario/upd`,
            type:'POST',
            data: formdata ? formdata : formxx.serialize(),
            contentType : false,
            processData : false,
            success: function (data) {
              Swal.fire({
                    title: 'OK',
                    text: 'Usuario actualizado correctamente',
                    type: 'success',
                    confirmButtonText: 'OK'
                  }).then(function () {

                            $('.form-control').attr('readonly','readonly');
                    /* 2 */ $('#canUsu').css('display','none');
                    /* 1 */ $('#editUsu').css('display','block')

                    //reciclar codigo
                    jalar_usu();
                  })
            },
        })

    })





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
                  $('#group_img_s').append('<img id="img-upload_s"  class="img-responsive" style="width: 40%; margin: 3% 0 0 5%; height:  40%;"/>')
                    $('#img-upload_s').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp_s").change(function(){

            console.log(this);
            readURL(this);
        });




})



function jalar_data(){
  $('#demo-dt-basic').DataTable().destroy();

  $.post(base+'home/get_blog', {w:id} ,function (data) {
       var grill= '';

       $.each(data,function (i,item) {

         if (parseInt(item.ide_est_blog) === 0) {
            var est = 'Privado';
         } else {
            var est = 'Publico';
         }


         grill += `
                       <tr>
                           <th><img src="${base}uploads/${item.img_blog}" style="width: 160px;max-height: 90px;" alt="" /></th>
                           <th>${item.tit_blog}</th>
                           <th>${item.comments}</th>
                           <th class="min-tablet">${item.likes}</th>
                           <th class="min-tablet">${item.fech_blog.slice(0,11)}</th>
                           <th class="min-desktop">${est}</th>
                           <th class="ver_r" idr="${item.ide_blog}"><a href="${base}entrada/${item.url_blog}" target="_blank"><i class="fa fa-search"></i></a></th>
                           <th class="edi_r" idr="${item.ide_blog}"><i class="fa fa-pencil"></i></th>
                           <th class="bor_r" idr="${item.ide_blog}"><i class="fa fa-trash-o"></i></th>
                       </tr>
                  `;
       })
       $('#grilla').html(grill);
       $('#demo-dt-basic').DataTable();
  })
}

function jalar_sol(){
  $.post(base+'usuario/get_sol', {w:id} ,function (data) {
       var grill= '';
       $.each(data,function (i,item) {
         grill += `
                       <tr>
                           <th>${item.nom_usu}</th>
                           <th class="min-tablet">${item.fecha.slice(0,11)}</th>
                       </tr>
                  `;
       })



       $('#grillaSol').html(grill);
       $('#demo-dt-sol').DataTable();
  })
}

function jalar_usu(){
  $.post(base+'usuario/get_usu', {w:id} ,function (data) {
       var grill= '';
       $.each(data,function (i,item) {
         $('#face').val(item.fb_usu)
         $('#ig').val(item.ig_usu)
         $('#des').val(item.dir_usu)
         $('#twitter').val(item.tw_usu)
         $('#email').val(item.ema_usu)

         $('#imgUsu').attr('src',`${base}uploads/${item.img_usu}`);
         $('#usuN').text(item.nom_usu);
         $('#emaU').text(item.ema_usu);

       })

       $('#grillaSol').html(grill);
       $('#demo-dt-sol').DataTable();
  })
}



function views(n,t) {
  $('.tabu').css('display','none');
  $(`.lim`).removeClass('active');
  $(`#${t}`).addClass('active');
  $(`#${n}`).fadeIn();
}

function getCat(i) {
  return new Promise(function (res,rej) {
      $.post(`${base}blog/get_cat_blog`,{i},function (data) {
          res(data);
      })
  })
}

function clearNote() {
  $('.wysihtml5-toolbar').remove();
  $('.wysihtml5-sandbox').remove();
  $('input[name="_wysihtml5_mode"]').remove();
  $('#summernote').css('display','block');
}
