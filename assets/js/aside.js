$(function () {
    get_categories_aside();
    get_recent();
})

function get_categories_aside() {
  var cat ='';
  $.getJSON(`${base}categorias/list_cat`,function (data) {
    $.each(data,function (i,item) {
      cat += `  <li>
                  <a href="${base}categoria/${item.url_cat}">${item.nom_cat}</a>
                </li>`
    })

    $('#cata').html(cat);

  })
}



function get_recent() {
  var cat ='';
  $.getJSON(`${base}home/get_blog`,function (data) {

    $.each(data,function (i,item) {
      cat += ` <a href="${base}entrada/${item.url_blog}">
                  <div class="item" >
                      <img src="${base}uploads/${item.img_blog}" alt="" style=" max-width: 308px;">
                      <p class="mt-20 title text-uppercase">${item.tit_blog}</p>
                      <p><span> <i class="fa fa-heart-o" aria-hidden="true"></i>
                      ${item.likes} <i class="fa fa-comment-o" aria-hidden="true"></i>${item.comments}</span></p>
                  </div>
                </a>
                `
    })

    $('#asiBlog').html(cat);

    $('.active-recent-carusel').owlCarousel({
        items:1,
        loop:true,
        autoplay:true,
        dots: true,
        0:{
          items: 1
        },
        480:{
          items: 1
        },
        769:{
          items: 1
        }
    });



  })
}
