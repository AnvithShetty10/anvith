$(document).ready(function(){

  loadpage();
  loadpage();


});


function loadpage() {

  list = document.getElementById("move_image1");
  for( i= 0; i < songList.length/2; i++){
    a = document.createElement("a");
    index = songList[i]["artPath"].indexOf("res");
    path= "../"
    path = path+ songList[i]["artPath"].substr(index, songList[i]["artPath"].length);

    img = document.createElement("img");
    img.setAttribute("src",path)
    img.className="imgsize";
    a.setAttribute("href", "specificAlbum.php?name="+songList[i]["Album"]);
    a.appendChild(img);
    list.appendChild(a);
}
    list1 = document.getElementById("move_image2");
    for( i= 0; i < songList.length; i++){
      a = document.createElement("a");
      index = songList[i]["artPath"].indexOf("res");
      path= "../"
      path = path + songList[i]["artPath"].substr(index, songList[i]["artPath"].length);

      img = document.createElement("img");
      img.setAttribute("src",path)
      img.className="imgsize";
      a.setAttribute("href", "specificAlbum.php?name="+songList[i]["Album"]);
      a.appendChild(img);
      list1.appendChild(a);

  }
  list2 = document.getElementById("move_image");
  for( i= 0; i < songList.length; i++){
    a = document.createElement("a");
    index = songList[i]["artPath"].indexOf("res");
    path= "../";
    path = path + songList[i]["artPath"].substr(index, songList[i]["artPath"].length);

    img = document.createElement("img");
    img.setAttribute("src",path)
    img.className="imgsize";
    a.setAttribute("href", "specificAlbum.php?name="+songList[i]["Album"]);
    a.appendChild(img);
    list2.appendChild(a);
}

}
