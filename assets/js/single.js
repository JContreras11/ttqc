$(function () {

  $('#use').click(function (e) {
    $.ajax({
              url: `${base}blog/add_history`,
              data: {id_u: $(this).attr('idr'), id_b: $(this).attr('ids')},
              type:"post",
              success: function(data) {
                $('#use').addClass('inuse');
                $('#use').html('<i class="fa fa-check"></i>');
              }
          });
      })



      $('.acction').click(function (e) {
          var _this = $(this)
          $.post(`${base}blog/acction`,{action: 'like', id: $(this).attr('idr')}, function (data) {

              if (data.unlike && data.unlike != undefined ) {
                _this.removeClass('liked')
                _this.find('i').removeClass('fa fa-heart liked')
                _this.find('i').addClass('fa fa-heart-o')
                _this.find('span').text('Like')

              } else {
                _this.find('span').text('Unlike')
                _this.addClass('liked')
                _this.find('i').removeClass('fa fa-heart-o')
                _this.find('i').addClass('fa fa-heart liked')
              }

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
                                          <img src="${base}uploads/${data.imagen}" alt="" class="img-comm">
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
