$(document).ready(function(){

  loadpage();

});


function loadpage() {
  index = songList[0]["artPath"].indexOf("res");
  path= "../";
  path = path + songList[0]["artPath"].substr(index, songList[0]["artPath"].length);
  document.getElementById("blur").style.backgroundImage = "url('"+ path+"')";
  document.getElementById("albumArt").setAttribute("src",path);
  list = document.getElementById("posallist");
  for( i= 0; i < songList.length/2; i++){
    li = document.createElement("li");
    index = songList[i]["npath"].indexOf("res");
    path= "../";
    path =path + songList[i]["npath"].substr(index, songList[i]["npath"].length);
    span = document.createElement("span");
    span.innerHTML = songList[i]["Name"];
    span.setAttribute("href",path);
    span.setAttribute("id",i);
    span.setAttribute("onclick","playsong(this)");
    li.appendChild(span);
    span1 = document.createElement("span");
    span1.innerHTML="&#43"
    span1.setAttribute("onclick","newElement(this)");
    span1.setAttribute("class","addBtn");

    li.appendChild(span1);
    list.appendChild(li);

  }


}
