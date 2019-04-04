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



      $('.acction').click(function (e) {
          var _this = $(this)
          $.post(`${base}blog/acction`,{action: 'like', id: $(this).attr('idr')}, function (data) {
              _this.addClass('liked')
              _this.find('i').removeClass('fa fa-heart-o')
              _this.find('i').addClass('fa fa-heart liked')
          })
      })





})



function like(id) {

}


function comment(id) {

}
