<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
  <link rel="icon" type="image/png" href="../media/images/icons/logo5.png" sizes="32x32">
  <link rel="icon" type="image/png" href="../media/images/icons/logo5.png" sizes="16x16">
  <link rel="main-logo" href="../media/images/icons/logo5.png" sizes="500x354">
  <link rel="tiny-logo" href="../media/images/icons/logo5.png" sizes="90x64">
  <link rel="shortcut icon" href="../media/images/icons/logo5.png">
    <link rel="stylesheet" type="text/css" href="../CSS/home.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/album.css">
    <link type="text/css" href="../CSS/skin/pink.flag/jplayer.pink.flag.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../CSS/select_lang.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/search.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/side.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/profile.css" />
    <script type="text/javascript" src ="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/javascripts.js"></script>

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
        #sea{
          position: relative;
          top:-1.5em;
          left:6em;
          font-size: 2em;
          color: white;
        }
        hr{
          position: relative;
          top:-3em;
          left:1em;

        }
        #content{
          position: relative;
          top:-1em;
          left:12em;

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

            <form name="form1" class="image-upload" method="post" id="image-upload"  enctype="multipart/form-data" action="upload.php">
              <label for="file-input">
              <div id="edit" ><img src="../media/images/draw.png" alt="edit" style="height:50%;width:50%;cursor:pointer;"/></div>
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
        <div id="title"><img src="../media/images/logo5.png" height="150" style="-webkit-transform:rotate(8deg);margin-left:4%" />
            <p id="pos" style="font-family:myFont;color:white;font-size:75px;position:absolute">ymphony</p>
        </div>
    </a>

    <div class="search" id="possearch">
      <form class="search_box cf" name="search" method="get" action="searchpage.php">
          <input type="text" name="search" id="myText" placeholder="Search here..." required>
          <button type="button" onclick="javascript:RedirectToSecondPage()">Search</button>

        </form>
    </div>
    <div id="mySidenav" class="sidenav">
        <ul id="tabs">
            <a href="home.php">
                <li>Home</li>
            </a>
            <a href="album.php">
                <li>Albums </li>
            </a>
            <a href="artists.php">
                <li>Artists</li>
            </a>
            <a href="concert.php">
                <li>Concerts</li>
            </a>
            <a href="topcharts.php">
                <li>Top Charts</li>
            </a>
        </ul>
    </div>

    <div id="jquery_jplayer_1" class="jp-jplayer"></div>
    <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
      <div class="jp-type-single">
        <div class="jp-gui jp-interface">
          <div class="jp-volume-controls">
            <button class="jp-mute" role="button" tabindex="0">mute</button>
            <button class="jp-volume-max" role="button" tabindex="0">max volume</button>
            <div class="jp-volume-bar">
              <div class="jp-volume-bar-value"></div>
            </div>
          </div>
          <div class="jp-controls-holder">
            <div class="jp-controls">
              <button class="jp-play" role="button" tabindex="0">play</button>
              <button class="jp-stop" role="button" tabindex="0">stop</button>
            </div>
            <div class="jp-progress">
              <div class="jp-seek-bar">
                <div class="jp-play-bar"></div>
              </div>
            </div>
            <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
            <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
            <div class="jp-toggles">
              <button class="jp-repeat" role="button" tabindex="0">repeat</button>
            </div>
          </div>
        </div>
        <div class="jp-details">
          <div class="jp-title" aria-label="title">&nbsp;</div>
        </div>
        <div class="jp-no-solution">
          <span>Update Required</span>
          To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
        </div>
      </div>
    </div>

    <div id="main">
        <span style="cursor:pointer" onclick="navcontrol()">
    <div class="container" onclick="myFunction(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
 </div>
</span>
<div id="sea">Search Results</div>
<hr size="5em" width=75% >
<div id="content"></div>


    <script src="../js/search_script.js"></script>
      <script type="text/javascript" src ="../js/jquery-2.1.4.js"></script>
      <script type="text/javascript" src ="../js/jquery.jplayer.min.js"></script>
      <script type="text/javascript" src= "../js/script.js"></script>

      </body>
      <script>
      $('#file-input').change( function(event) {
        document.form1.submit();
      });

      </script>


</html>
