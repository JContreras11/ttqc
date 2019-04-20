$(function () {

    jalar_data();
    jalar_sol();




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
  $.post(base+'home/get_blog', {w:id} ,function (data) {
       var grill= '';
       $.each(data,function (i,item) {
         grill += `
                       <tr>
                           <th><img src="${base}uploads/${item.img_blog}" style="width: 160px;" alt="" /></th>
                           <th>${item.tit_blog}</th>
                           <th>${item.comments}</th>
                           <th class="min-tablet">${item.likes}</th>
                           <th class="min-tablet">${item.fech_blog.slice(0,11)}</th>
                           <th class="min-desktop">${item.ide_est_blog}</th>
                           <th class="ver_r" ><i class="fa fa-search"></i></th>
                           <th class="edi_r" ><i class="fa fa-pencil"></i></th>
                           <th class="bor_r" ><i class="fa fa-trash-o"></i></th>
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



function views(n,t) {
  $('.tabu').css('display','none');
  $(`.lim`).removeClass('active');
  $(`#${t}`).addClass('active');
  $(`#${n}`).fadeIn();
}
