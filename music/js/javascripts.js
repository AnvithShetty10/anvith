
var flag_side=1;


function openNav() {

    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    flag_side = 0;

}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    flag_side = 1;

}

function navcontrol() {
    if (flag_side==1) {
        openNav();
    } else {
        closeNav();
    }
}

function myFunction(x) {
    x.classList.toggle("change");
}

function language(lang){
  var a=lang.id;
  console.log(a);
}


function RedirectToSecondPage() {
  document.search.submit();
}


function spin() {
    document.getElementById('spins').setAttribute("class", "spinner");
    setTimeout('fade();', 1000);
}

function fade() {
    $('body').fadeOut(1000, load);

}

function load() {
  window.location="home.php";
}

var slideIndex = 0;


function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    setTimeout(showSlides, 2500);
}




function pageart(ref, evt, ptr) {
    var i;
    var x = document.getElementsByClassName("page");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }

    var y = document.getElementById(ref);
    y.style.display = "block";

    var tablinks = document.getElementsByClassName("active");
    tablinks[0].className = "tablink";
    ptr.className += " active";
}

var flag1=1;
function dropopen(){
  var y=document.getElementById("drop");
  y.style.display="block";
}

function dropclose(){
  var y=document.getElementById("drop");
  y.style.display="none";
}

function drop(){
if(flag1==1)
 {dropopen();
   flag1=0;
  }
else
  {
    dropclose();
    flag1=1;
  }
}

function openpro() {
    document.getElementById("mypro").style.width = "20%";

}

function closepro() {
    document.getElementById("mypro").style.width = "0%";
}


function artist(tab){
  var x=document.getElementById(tab);
  console.log(x.children[0].children[1].children[0].children[0].textContent);
  var i;
  for(i=0;i<10;i++)
    {var z=x.children[0].children[1].children[i].children[0];
      var y=x.children[1].children[1].children[i].children[0];
z.setAttribute("onclick","link(this)");
y.setAttribute("onclick","link(this)");


}

}

function link(ref){
  window.open("http://www.last.fm/music/"+ref.textContent,"_blank")
}
empty=1;
function newElement(y) {
  empty=0;
  var l = document.createElement("li");
  var a=document.getElementById("posallist");
  var x=y.parentNode.children[0].id;
  var ab =document.createElement("span");
  var path = songList[x]["npath"].substr(index, songList[x]["npath"].length);
  ab.setAttribute("href",path);
  ab.setAttribute("onclick","playsong(this)");
  ab.innerHTML= y.parentNode.children[0].textContent;
      l.appendChild(ab);
document.getElementById("playlist").appendChild(l);


var span = document.createElement("SPAN");
var txt = document.createTextNode("\u00D7");

span.className = "close1";
span.appendChild(txt);
l.appendChild(span);

span.setAttribute("onclick","close1(this)");
}

function close1(x) {
    x.parentNode.parentNode.removeChild(x.parentNode);

}



$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

marqueeInit({
    uniqueid: 'move_image',
    style: {

    },
    inc: 5, //speed - pixel increment for each iteration of this marquee's movement
    mouse: 'cursor driven', //mouseover behavior ('pause' 'cursor driven' or false)
    moveatleast: 2,
    neutral: 1000,
    savedirection: false,
    random: false
});

marqueeInit({
    uniqueid: 'move_image1',
    style: {

    },
    inc: 5, //speed - pixel increment for each iteration of this marquee's movement
    mouse: 'cursor driven', //mouseover behavior ('pause' 'cursor driven' or false)
    moveatleast: 2,
    neutral: 1000,
    savedirection: false,
    random: false
});


marqueeInit({
    uniqueid: 'move_image2',
    style: {

    },
    inc: 5, //speed - pixel increment for each iteration of this marquee's movement
    mouse: 'cursor driven', //mouseover behavior ('pause' 'cursor driven' or false)
    moveatleast: 2,
    neutral: 1000,
    savedirection: false,
    random: false
});




function intiate()
{
document.getElementById("check2").addEventListener("blur",validate2,false);
document.getElementById("check1").addEventListener("blur",validate1,false);
var cpass,pass;
function validate2(e)
{

  cpass=e.target.value;
  validate();

}

function validate1(e)
{

  pass=e.target.value;
  validate();
}

function validate()
{
  if(pass!=null && pass!="" && cpass!=null && cpass!="")
{
  if(pass!=cpass)
  {
    if(document.getElementById("mismatch")==null)
    {
      var d=document.createElement("div");
      d.textContent="*Passwords Do not match";
      d.setAttribute("id","mismatch");
      d.style.color="red";
      d.style.fontSize="0.8em"
      document.getElementById("check2").parentNode.insertBefore(d, document.getElementById("check2").nextSibling);

    }
  }
  else
   {
    if(document.getElementById("mismatch")!=null)
    {
      document.getElementById("mismatch").remove();
    }
  }
}
}
}
