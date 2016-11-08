$(document).ready(function(){
      $("#jquery_jplayer_1").jPlayer({
        ready: function () {
          $(this).jPlayer("setMedia", {
            title: "-",
            m4a: "http://www.jplayer.org/audio/m4a/Miaow-07-Bubble.m4a",
            oga: "http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
          });
        },
        cssSelectorAncestor: "#jp_container_1",
        swfPath: "/js",
        supplied: "m4a, oga",
        useStateClassSkin: true,
        autoBlur: false,
        smoothPlayBar: true,
        keyEnabled: true,
        remainingDuration: true,
        toggleDuration: true
      });
    });


function playsong(ref){
$("#jquery_jplayer_1").jPlayer("destroy");
link=ref.getAttribute("href");
var player = $("#jquery_jplayer_1");

       player.jPlayer({
       ready: function () {
         $(this).jPlayer("setMedia", {
           mp3: link,
           title:ref.innerHTML,

         });
       }
     });


}

function playsongsearch(ref){
$("#jquery_jplayer_1").jPlayer("destroy");
link=ref.getAttribute("href");
var player = $("#jquery_jplayer_1");

       player.jPlayer({
       ready: function () {
         $(this).jPlayer("setMedia", {
           mp3: link,
           title:"-",

         });
       }
     });


}

function showPlayer(){
  var x=document.getElementById('jquery_jplayer_1');
  x.style.marginTop="37%";
}

function hidePlayer(){
  var x=document.getElementById('jquery_jplayer_1');
  x.style.marginTop="-20%";
}

flag=0;

function controlPlayer(){
  console.log("huyh");
  if(flag==0){
    showPlayer();
    flag=1;
  }
  else{
    hidePlayer();
    flag=0;
  }
}
