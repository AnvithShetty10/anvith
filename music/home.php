<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="CSS/home.css" />
    <link rel="stylesheet" type="text/css" href="CSS/album.css" />
    <link rel="stylesheet" type="text/css" href="CSS/select_lang.css" />
    <link rel="stylesheet" type="text/css" href="CSS/search.css" />
    <link rel="stylesheet" type="text/css" href="CSS/side.css" />
    <link rel="stylesheet" type="text/css" href="CSS/profile.css" />
    <script src="crawler.js" type="text/javascript"></script>
    <script src="jquery.js"></script>
    <script type="text/javascript" src="javascripts.js"></script>
    <title>Symphony</title>
    <style>
        #dropdown {
            margin-left: 87%;
            margin-top: 1%;
        }

        .image-upload > input
    {
        display: none;
    }

        #pro {
            margin-left: 80%;
            margin-top: 1%;
        }

        body {
            min-width: 50%;
        }
    </style>
</head>

<body>
    <div id="dropdown" onclick="drop()">
        <div class="size"><a href='#' class="round red"><span class="round">Language</span></a></div>
        <div class="dropdown-content" id="drop">
            <a href="#">English</a>
            <a href="#">Hindi</a>
            <a href="#">Kannada</a>
        </div>
    </div>

    <div id="mypro" class="sidepro">
        <a href="javascript:void(0)" class="closebtn" onclick="closepro()">&times;</a>
        <div id="holder">
        <div class="card">
            <img  id="profile" src="<?php echo $_SESSION['pic'] ?>" alt="Avatar" style="width:100%">

            <form name="form1" class="image-upload"  id="image-upload"  enctype="multipart/form-data" action="try1.php">
            <label for="file-input">
            <div id="edit" ><img src="images/draw.png" alt="edit" style="height:50%;width:50%;cursor:pointer;"/></div>
            </label>

            <input id="file-input" name="pic" type="file" />
        	</form>

            <div class="container">
                <h4><b><?php echo $_SESSION['uname'] ?></b></h4>
                <p>Email:<?php echo $_SESSION['eid'] ?></p>
            </div>
          </div>
        </div>
    </div>

    <div id="pro" style="cursor:pointer;  display: inline-block;" onclick="openpro()">
        <div class="size">
            <a href='#' class="round red"><span class="round">Profile</span></a>
        </div>
    </div>


    <a href="home.php">
        <div id="title"><img src="images/logo5.png" height="150" style="-webkit-transform:rotate(8deg);margin-left:4%" />
            <p id="pos" style="font-family:myFont;color:white;font-size:75px;position:absolute">ymphony</p>
        </div>
    </a>

    <div class="search" id="possearch">
        <form class="search_box cf">
            <input type="text" name="search" id="myText" placeholder="Search here..." required>
            <button type="button" onclick="javascript:RedirectToSecondPage()">Search</button>
        </form>
    </div>
    <div id="mySidenav" class="sidenav">
        <ul id="tabs">
            <a href="home.html">
                <li>Home</li>
            </a>
            <a href="album.html">
                <li>Albums </li>
            </a>
            <a href="artists.html">
                <li>Artists</li>
            </a>
            <a href="concert.html">
                <li>Concerts</li>
            </a>
            <a href="topcharts.html">
                <li>Top Charts</li>
            </a>
        </ul>
    </div>
    <div id="main">
        <span style="cursor:pointer" onclick="navcontrol()">
    <div class="container" onclick="myFunction(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
 </div>
</span>

        <div id="latest">
            <h3 style="font-family:myFont1">New Release</h3>
            <div class="latest">
                <div id="move_image2">
                    <a href="raaz_reboot.html"><img src="Albums/raaz_reboot.jpg" class="imgsize"></a>
                    <img src="Albums/nucleya-bass-rani-cover.jpg" class="imgsize">
                    <img src="Albums/akira.jpg" class="imgsize">
                    <img src="Albums/sultan.jpg" class="imgsize">
                    <img src="Albums/dhoni.jpg" class="imgsize">
                    <img src="Albums/rustom.jpg" class="imgsize">
                    <img src="Albums/coke.jpg" class="imgsize">
                    <img src="Albums/akira.jpg" class="imgsize">
                    <img src="Albums/dhoni.jpg" class="imgsize">
                    <img src="Albums/sultan.jpg" class="imgsize">
                    <img src="Albums/rustom.jpg" class="imgsize">
                </div>
            </div>
        </div>

        <div id="fav">
            <h3 style="font-family:myFont1">Symphony Favourite</h3>
            <div class="latest">
                <div id="move_image1">
                    <a href="raaz_reboot.html"><img src="Albums/raaz_reboot.jpg" class="imgsize"></a>
                    <img src="Albums/nucleya-bass-rani-cover.jpg" class="imgsize">
                    <img src="Albums/akira.jpg" class="imgsize">
                    <img src="Albums/sultan.jpg" class="imgsize">
                    <img src="Albums/dhoni.jpg" class="imgsize">
                    <img src="Albums/rustom.jpg" class="imgsize">
                    <img src="Albums/coke.jpg" class="imgsize">
                </div>
            </div>
        </div>

        <div id="trend">
            <h3 style="font-family:myFont1">Trending</h3>
            <div class="latest">
                <div id="move_image">
                    <a href="raaz_reboot.html"><img src="Albums/raaz_reboot.jpg" class="imgsize"></a>
                    <img src="Albums/nucleya-bass-rani-cover.jpg" class="imgsize">
                    <img src="Albums/akira.jpg" class="imgsize">
                    <img src="Albums/sultan.jpg" class="imgsize">
                    <img src="Albums/dhoni.jpg" class="imgsize">
                    <img src="Albums/rustom.jpg" class="imgsize">
                    <img src="Albums/coke.jpg" class="imgsize">
                </div>
            </div>
        </div>
    </div>

    <center>
        <footer>
            <h2 style="font-family:papyrus">Follow Us On:</h2>
            <img src="images/fb.png" style="width:5%;height:5%">
            <img src="images/g+1.png" style="width:5%;height:5%">
            <img src="images/tweet.png" style="width:4.5%;height:4.5%">

        </footer>
    </center>
  <script>
  $('#file-input').change( function(event) {
  var tmppath = URL.createObjectURL(event.target.files[0]);
    console.log(tmppath);
    /*document.form1.submit();*/
  });

  </script>
</body>



</html>
