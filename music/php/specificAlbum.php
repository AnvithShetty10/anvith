<?php
$album=  $_GET['name'];
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "music";

// Create connection
$conn = new mysqli($servername, $username, $password , $dbName);

// Check connection
  $sql = "SELECT * FROM songs WHERE Album='" .$album ."'" ;


$result = $conn->query($sql);
$songs = array();
if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        $n = array();
        $n["Name"] = $row["Name"];
        $n["artPath"] = $row["artPath"];
        $n["npath"] = $row["npath"];

        array_push($songs ,$n);
}


$names =( json_encode($songs));

}
else {
    echo "0 Res";
}


?>
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
    <script type="text/javascript" src="../js/specificAlbum.js"></script>

    <script type="text/javascript" src="../js/javascripts.js"></script>
    <script type="text/javascript">var songList = <?php echo $names ?></script>
    <title>Symphony</title>
    <style>
        #blur {

            height: 180px;
            -webkit-filter: blur(15px);
        }

        h4 {
            font-family: myFont2;
            font-size: 3em;
            color: brown;
            margin-left: 20%;
            margin-top: -13%;
            -webkit-filter: blur(0px);
            position: absolute;
        }

        h5 {
            font-family: myFont2;
            font-size: 2em;
            color: brown;
            margin-left: 20%;
            margin-top: -7%;
            -webkit-filter: blur(0px);
            position: absolute;
        }

        #dropdown {
            margin-left: 85%;
            margin-top: -10%;
        }

        #pro {
            margin-left: 78%;
            margin-top: -10%;
        }

        @font-face {
            font-family: myFont2;
            src: url('../media/fonts/Philosopher-BoldItalic.ttf');
        }

        .addBtn {
            padding: 5px;
            width: 5%;
            background: #d9d9d9;
            color: #555;
            border-radius: 100%;
            text-align: center;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        .addBtn:hover {
            background-color: #bbb;
            text-align: center;

        }

        #playlist li{
          color:white;
          font-size: 1em;
          z-index: 2;
        }

        #play{
          color: white;
          padding-left: 100px;
          font-family: myFont2;
        }

        .sidenav{
          position: absolute;
          margin-top: 11%;
        }

        .search_box input {
        height: 40px;
        width: 390px;
      }

      #edit img{
        height:2%;
        width:5%;
        position: absolute;
        cursor:pointer;

      }
    </style>
</head>

<body>
    <a href="home.php">
        <div id="title"><img src="../media/images/logo5.png" height="150" style="-webkit-transform:rotate(8deg);margin-left:4%" />
            <p id="pos" style="font-family:myFont;color:white;font-size:75px;position:absolute">ymphony</p>
        </div>
    </a>

    <div id="dropdown" onclick="drop()">
        <div class="size"><a href='#' class="round red"><span class="round">Language</span></a></div>
        <div class="dropdown-content" id="drop">
          <a href="#" id="English" onclick="language(this)">English</a>
          <a href="#" id="Hindi" onclick="language(this)">Hindi</a>
          <a href="#" id="Kannada" onclick="language(this)">Kannada</a>
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

        <div id="full">
          <div id="poscoveral">
          <div id="blur"></div>
        <div id="albcover"><img id="albumArt"   class="imgsize" hspace="30" ></div>

          <h4 id="albumName"></h4>
          <h5 id="artistName"></h5>
        </div>
            <br>
            <ol id="posallist">


            </ol>
        </div>
    </div>

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
