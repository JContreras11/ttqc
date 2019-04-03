$(function () {
    get_cat();
    get_recent();
})

function get_cat() {
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
      cat += `  <div class="item">
                    <img src="${base}uploads/${item.img_blog}" alt="" style=" max-width: 308px;">
                    <p class="mt-20 title text-uppercase">${item.tit_blog}</p>
                    <p><span> <i class="fa fa-heart-o" aria-hidden="true"></i>
                    ${item.likes} <i class="fa fa-comment-o" aria-hidden="true"></i>${item.comments}</span></p>
                </div>`
    })

    $('#asiBlog').html(cat);

  })
}
