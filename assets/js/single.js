$(function () {

  $('#solPost').submit(function (e) {
    e.preventDefault()
    $.ajax({
              url: `${base}blog/add_history`,
              data: $(this).serialize(),
              type:"post",
              success: function(data) {
                limpiarForm('solPost');
                $('#mySolicitud').modal('hide');
              }
          });
      })



})
