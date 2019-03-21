$(document).ready(function () {

  (get_data());


       /*** Ver Registro ****/
    $("#grillaDatos").on('click','.ver_registro',function() {
        var idr = $(this).attr('id');
        $.post(base_url+cont+'/get_url/'+idr,function (data) {
            window.open(global_url+cont.toLowerCase()+'/'+data[0][no_url])
        })
    });



    /*** editar Registro ****/
    $("#grillaDatos").on('click','.edita_registro',function() {
        var idr = $(this).attr('id');
        location.href = base_url+cont.toLowerCase()+'/edit/'+idr
    });


    /*** editar Registro ****/
    $("#grillaDatos").on('click','.borra_registro',function() {
        var idr = $(this).attr('id');
        if (confirm("Esta seguro de eliminar este elemento" )) {
          $.post(base_url+cont+'/del/'+idr,function (data) {
            location.reload()
          })
        }

    });

    $('.del-item').on('click',function (e) {
      e.preventDefault()
      alert('si pe')
    })



})



function get_data() {

  $.post(base_url+cont+'/get',function (data) {
    var datos = '';
      $.each(data,function(i,item) {


        datos+=  `${cont != 'Galeria' ? make_table(item) : make_gallery(item)}`;


      })

      if(cont != 'Galeria'){
        $('#grillaDatos').html(datos)
        $('#demo-dt-basic').dataTable()
      }else{
          $('#demo-gallery-2').html(datos)
          $("#demo-gallery-2").unitegallery({
			    tiles_type: "justified",
			    tile_border_color:"#7a7a7a",
			    tile_outline_color:"#8B8B8B",
			    tile_overlay_opacity:0.3,
			    tile_show_link_icon:true,
			    tile_image_effect_type:"sepia",
			    tile_image_effect_reverse:true,
			    tile_enable_textpanel:true,
			    lightbox_textpanel_title_color:"e5e5e5"
			});

      }

   })

}


function make_table(item) {
  var t = '<tr>';

  for (var i = 0; i < tabla.length; i++) {
    if (img(item[tabla[i]])) {
      t+= `<td style="text-align: center;"><img src="${base_url}uploads/${item[tabla[i]]}" alt="" style="width: 30px;  "></td>`;
    } else {
      t+= `<td>${item[tabla[i]]}</td>`;
    }

  }
    t+= ` <td style="text-align: center;" class="ver_registro " id="${item[ide_v]}"><i class="fa fa-search"></i></td>
          <td style="text-align: center;" class="edita_registro " id="${item[ide_v]}"><i class="fa fa-pencil"></i></td>
          <td style="text-align: center;" class="borra_registro " id="${item[ide_v]}"><i class="fa fa-trash"></i></td>`;

    t+= '</tr>';


  return t;
}

function make_gallery(item){

      /*
      Como es una galeria el orden del arreglo debe ser el siguiente:
      0: nombre de imagen
      1: url imagen
      2: descripcion
    */

    var img = `
            <a href="${base_url}${cont}/del/${item[ide_v]}" target="_self" class="img-down">
      			 <img alt="${item[tabla[0]]}"
      			 src="${base_url}/uploads/${item[tabla[1]]}"
      			 data-image="${base_url}uploads/${item[tabla[1]]}"
      			 data-description="${item[tabla[0]]}"
      			 style="display:none">
      			</a>`;

      return img;

}


function img(input){
    var allowedExtensions = /(.jpg|.jpeg|.png|)$/i;
    var ecep = allowedExtensions.exec(input);
    if(ecep[0] != ''){
      return true;
    }else {
      return false;
    }
}
