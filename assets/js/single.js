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


      $('#commentButton').click(function (e) {
        e.preventDefault()
        var _this = $(this)

        if ($('#commentText').val() != '') {

          $.post(`${base}blog/acction`,{action: 'comment',com:$('#commentText').val() ,id: $('#commentText').attr('idr')}, function (data) {


            var comment = `<div class="comment-list commetUsu">
                              <div class="single-comment justify-content-between d-flex">
                                  <div class="user justify-content-between d-flex">
                                      <div class="thumb">
                                          <img src="${base}uploads/${data.imagen}" alt="">
                                      </div>
                                      <div class="desc">
                                          <h5><a href="${base}usuario/${data.username}">${data.username}</a></h5>
                                          <p class="comment">
                                              ${$('#commentText').val()}
                                          </p>
                                      </div>
                                  </div>
                              </div>
                          </div>`



              $('#commentArea').append(comment)
              $('#commentText').val('')
              $('#ncom').text($('.commetUsu').length);
          })

        } else {
          $('#commentText').css('border','solid 1px #cc2a2a')
          setTimeout(function () {
            $('#commentText').css('border','solid 1px #c3c3c3')
          },3000)
        }
      })





})



function like(id) {

}


function comment(id) {

}
