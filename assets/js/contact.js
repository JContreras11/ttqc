$(function () {
  $('#frm-contact').submit(function (e) {
      e.preventDefault();
      $.ajax({
        url:`${base}contacto/mail`,
        data:$(this).serialize(),
        type:'post',
        success: function () {
          Swal.fire({
              title: 'Mensaje Enviado!',
              text: 'Gracias por contactarnos, nos comunicaremos en la brevedad',
              type: 'success',
              confirmButtonText: 'OK'
            }).then(function () {
              $('.frmInput').val('')  
            })
        },
      })
  })
})
