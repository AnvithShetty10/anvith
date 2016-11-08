pass1=window.location.href.split('?');
pass2=pass1[1].split('=');
$(document).ready(function() {

      $.ajax({
              type: "POST",
              data:{search:pass2[1]},
              url: "/music/php/search.php",
              success:function(text) {
                  var pics=JSON.parse(text);
                  display(pics);
                                  },
              error: function(xhr, status) {
                console.log(xhr, status);
                          },
      });
  });


function display(pics){
  var container =  document.getElementById("content");

   pic=pics.split('+');

    div = document.createElement("div");
    img = document.createElement("img");
    a = document.createElement("span");
    index = pic[0].indexOf("res");
    path1= "../";
    path1 =path1 + pic[0].substr(index, pic[0].length);
    a.setAttribute("href", path1);
    a.setAttribute("onclick","playsongsearch(this)");
    index = pic[1].indexOf("res");
    path2= "../";
    path2 =path2 + pic[1].substr(index, pic[1].length);
    img.setAttribute("src",path2);
    div.style.display ="inline-block";
    div.style.marginRight ="";
    img.setAttribute("class","imgsize");
    img.setAttribute("hspace","20");
    img.setAttribute("vspace","10");

    a.appendChild(img);
    div.appendChild(a);
    //div.appendChild(img)
    container.appendChild(div);


}


/*
  function callPHP(name) {
      $.ajax ({
          method:"POST",
          url: "makeAlbum.php",
          data: {
            da : assign }, //optional
          success: function( result ) {

          }
  }
*/
