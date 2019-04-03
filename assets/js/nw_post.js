$(document).ready(function () {
  $('#nwPost').submit(function (e) {
    e.preventDefault();

    var formxx = $(this);
    var formdata = false;

    if (window.FormData){
        formdata = new FormData(formxx[0]);
    }

    $.ajax({
      url:base+'blog/ins',      
      data: formdata ? formdata : formxx.serialize(),
      contentType : false,
      processData : false,
      type:'post',
      success: function (data) {
          console.log(data);
          $('#myModal').modal('hide');
      },
    })
  })
})


function make_url(value) {
  value = utfdecode(value);
  $('#url').val(value)
}

function utfdecode(s) {
      var r = s.toLowerCase();
          r = r.trim();
          r = r.replace(new RegExp(/[àáâãäå]/g),"a");
          r = r.replace(new RegExp(/[èéêë]/g),"e");
          r = r.replace(new RegExp(/[ìíîï]/g),"i");
          r = r.replace(new RegExp(/ñ/g),"n");
          r = r.replace(new RegExp(/[òóôõö]/g),"o");
          r = r.replace(new RegExp(/[ùúûü]/g),"u");
          r = r.replace(new RegExp(/[.,¿¡!$%&/()=?#@-_:;{}*'+`"´¨]/g),"");
          r = r.replace(new RegExp(/\s/g),"-");
          do {
            r = r.replace(new RegExp(/--/g),"-");
          } while (r.indexOf('--') != -1);
return r;
}
