<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
  <link rel="icon" type="image/png" href="../media/images/icons/logo5.png" sizes="32x32">
  <link rel="icon" type="image/png" href="../media/images/icons/logo5.png" sizes="16x16">
  <link rel="main-logo" href="../media/images/icons/logo5.png" sizes="500x354">
  <link rel="tiny-logo" href="../media/images/icons/logo5.png" sizes="90x64">
  <link rel="shortcut icon" href="../media/images/icons/logo5.png">
    <link rel="stylesheet" type="text/css" href="../CSS/album.css">
    <link rel="stylesheet" type="text/css" href="../CSS/home.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/select_lang.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/search.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/side.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/profile.css" />
    <script type="text/javascript" src="../js/jquery.js"></script>

    <script type="text/javascript" src="../js/javascripts.js">
    </script>
    <script type="text/javascript" src="../js/album_script.js"></script>


    <title>Symphony</title>
    <style>
        #dropdown {
            margin-left: 85%;
            margin-top: -10%;
        }

        #pro {
            margin-left: 78%;
            margin-top: -10%;
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
    <div id="main">
        <span style="cursor:pointer" onclick="navcontrol()">
        <div class="container" onclick="myFunction(this)">
      <div class="bar1"></div>
      <div class="bar2"></div>
      <div class="bar3"></div>
     </div>
    </span>

        <div id="poscover">

    </div>
    <br><br><br>
    <center>
        <footer>
            <h2 style="font-family:papyrus">Follow Us On:</h2><br>
            <img src="../media/images/fb.png" style="width:5%;height:5%">
            <img src="../media/images/g+1.png" style="width:5%;height:5%">
            <img src="../media/images/tweet.png" style="width:4.5%;height:4.5%">

        </footer>
    </center>


</body>
<script>
$('#file-input').change( function(event) {
  document.form1.submit();
});

</script>
</html>
