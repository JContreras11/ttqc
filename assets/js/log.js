$(function () {


  $('#frm-log').submit(function (e) {
      e.preventDefault()
      $.ajax({
        url:base_url+'login/log',
        type:'post',
        data: $(this).serialize(),
        success: function (data) {
          if (!data) {
              $('#error').fadeIn()
          } else {
            if (red != undefined) {
              location.href = `${base_url}entrada/${red}`;
            } else {
              location.href = `${base_url}usuario/${data}`;
            }
          }
        }
      })
  })

  $('#frm-reg').submit(function (e) {
      e.preventDefault()
      $.ajax({
        url:base_url+'login/reg',
        type:'post',
        data: $(this).serialize(),
        success: function (data) {
          if (!data) {
              $('#error').fadeIn()
          } else {
            Swal.fire({
                title: 'Completado!',
                text: 'Ya puedes ingresar con tu nombre y contraseña',
                type: 'success',
                confirmButtonText: 'OK'
              }).then(function () {
                location.href = base_url+'login'
              })
          }
        }
      })
  })


})
