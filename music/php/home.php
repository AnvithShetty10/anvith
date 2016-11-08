<?php session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "music";
if(isset($_COOKIES['lang']))
  $language = $_COOKIES['lang'];
        else{
  $language = "english";

}
if(!isset($_SESSION['pic']))
    $_SESSION['pic']="";

// Create connection
$conn = new mysqli($servername, $username, $password , $dbName);

// Check connection
$sql= "SELECT * from songs WHERE language = '".$language."' GROUP BY Album";
$result = $conn->query($sql);
$album_names = array();
if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        $n = array();
        $n["Album"] = $row["Album"];
        $n["artPath"] = $row["artPath"];

        array_push($album_names ,$n);
}


$album_names= json_encode($album_names);

}
else {
    echo "0 Res";
}


?>
<!DOCTYPE html>

<html>
<meta name="viewport" content="width=device-width,initial-scale=1">
<head>
  <link rel="icon" type="image/png" href="../media/images/icons/logo5.png" sizes="32x32">
  <link rel="icon" type="image/png" href="../media/images/icons/logo5.png" sizes="16x16">
  <link rel="main-logo" href="../media/images/icons/logo5.png" sizes="500x354">
  <link rel="tiny-logo" href="../media/images/icons/logo5.png" sizes="90x64">
  <link rel="shortcut icon" href="../media/images/icons/logo5.png">
    <link rel="stylesheet" type="text/css" href="../CSS/album.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/home.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/select_lang.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/search.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/side.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/profile.css" />
    <script src="../js/crawler.js" type="text/javascript"></script>
    <script src="../js/jquery.js"></script>
    <script type="text/javascript"> var songList = <?php echo $album_names?>
    </script>
    <script type="text/javascript" src="../js/javascripts.js"></script>
    <script type="text/javascript" src="../js/home.js"></script>

    <title>Symphony</title>
    <style>
        #dropdown {
            margin-left: 87%;
            margin-top: 1%;
        }

        .image-upload     {
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
    <div id="main">
        <span style="cursor:pointer" onclick="navcontrol()">
    <div class="container" onclick="myFunction(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
 </div>
</span>

        <div id="latest">
            <h3 style="font-family:myFont1;color:white;">New Release</h3>
            <div class="latest">
                <div id="move_image2">

                </div>
            </div>
        </div>

        <div id="fav">
            <h3 style="font-family:myFont1;color:white;">Symphony Favourite</h3>
            <div class="latest">
                <div id="move_image1">

                </div>
            </div>
        </div>

        <div id="trend">
            <h3 style="font-family:myFont1;color:white;">Trending</h3>
            <div class="latest">
                <div id="move_image">

                </div>
            </div>
        </div>
    </div>

    <center>
        <footer>
            <h2 style="font-family:papyrus">Follow Us On:</h2>
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
