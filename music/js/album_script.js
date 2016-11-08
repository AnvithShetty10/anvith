$(document).ready(function() {
      $.ajax({
              type: "POST",
              url: "/music/php/album_php.php",
              success:function(text) {

                  var albums=JSON.parse(text);
                  for(i=0 ; i<albums.length; i++)
                      console.log(albums[i]);
                  display(albums);

                },
              error: function(xhr, status) {
                console.log(xhr, status);
                          },
      });
  });


function display(albums){
  var container =  document.getElementById("poscover");

  for( i =0 ; i<albums.length ; i++){

    div = document.createElement("div");
    a = document.createElement("a");
    img = document.createElement("img");
    caption= document.createElement("figcaption")
    a.setAttribute("href", "specificAlbum.php?name="+albums[i]["Album"]);
    index = albums[i]["artPath"].indexOf("res");
    path= "../";
    path = path+albums[i]["artPath"].substr(index, albums[i]["artPath"].length);


    img.setAttribute("src",path);
    //set image src as album art
    caption.setAttribute("align","center")
    caption.style.color="white";
    caption.style.marginTop="10px"
    div.style.display ="inline-block";
    div.style.marginRight ="25px";

    caption.innerHTML =albums[i]["Album"];
    img.setAttribute("class","imgsize");
    img.setAttribute("hspace","20");
    img.setAttribute("vspace","10");


    div.appendChild(a);
    a.appendChild(img);
    //div.appendChild(img)
    div.appendChild(caption)
    container.appendChild(div)


}

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
