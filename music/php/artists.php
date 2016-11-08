<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
  <link rel="icon" type="image/png" href="../media/images/icons/logo5.png" sizes="32x32">
  <link rel="icon" type="image/png" href="../media/images/icons/logo5.png" sizes="16x16">
  <link rel="main-logo" href="../media/images/icons/logo5.png" sizes="500x354">
  <link rel="tiny-logo" href="../media/images/icons/logo5.png" sizes="90x64">
  <link rel="shortcut icon" href="../media/images/icons/logo5.png">
    <link rel="stylesheet" type="text/css" href="../CSS/select_lang.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/home.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/artist.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/search.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/side.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/profile.css" />
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/javascripts.js"></script>
    <title>Symphony</title>
    <style>
        #dropdown {
            margin-left: 85%;
            margin-top: -10%;
            position: absolute;
        }

        #pro {
            margin-left: 78%;
            margin-top: -10%;
            position: absolute;
        }

        .pospic{
          margin-left: 30%;
          margin-top: -55%
        }

        #imgsize{
          height: 250px;
          width: 250px;
        }

        #list1{
          margin-left: 19%;
          margin-top: 0%;
            list-style-type: none;
            font-size: 1em;
            font-family: myFont1;
            position: absolute;
        }
        @font-face {
           font-family:myFont1;
           src: url('../media/fonts/Graviola-Regular.otf');
        }

        #list2{
          margin-left: 45%;
          margin-top: 0%;
          list-style-type: none;
          font-size: 1em;
          font-family: myFont1;
          position: absolute;
        }


        .imgsize1{
        height:200px;
        width:200px;

        }

        #posphoto{
        margin-left:17%;
        margin-top: -5%;
        border: solid white 3px;
        height: 180px;
        width:60%;


        }

        #artcover{

          margin-top: -10%;
          -webkit-filter:blur(0px);
          position: absolute;

        }


        .pos{
          margin-top: 10%;
          margin-left: 25%;
          position: absolute;
        }

        h4{
          font-family:myFont2;
          font-size:3em;
          color:white;
          margin-left:25%;
          margin-top: -10%;
          -webkit-filter:blur(0px);
          position: absolute;

        }

        /************************************/

        .table,.table-all{
          border-collapse:collapse;
          border-spacing:0;
          width:15%;
          display:table;}

        .table-all
        {border:1px solid #ccc;
        }

        .bordered tr,.table-all tr{
          border-bottom:1px solid #ddd;
        }

        .striped tbody tr:nth-child(even){
          background-color:#f1f1f1;

        }

        .table-all tr:nth-child(odd){
          background-color:#fff;
          color: white;
        }

        .table-all tr:nth-child(even){
          background-color:#f1f1f1;

        }

        .table td,.table th,.table-all td,.table-all th{
          padding:6px 8px;
          display:table-cell;
          text-align:left;
          vertical-align:top;
        }
        .table td,.table-all td{
          color: grey;
        }



        .table th:first-child,.table td:first-child,.table-all th:first-child,.table-all td:first-child{
          padding-left:16px;
        }


        .card-4,.hover-shadow:hover{
          box-shadow:0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19)!important;
        }

        .blue,.hover-blue:hover{
          color:#fff!important;
          background-color:#2196F3!important;
        }

        .containers{
          padding:0.01em 16px;

        }

        /*************************************************/


        ul.pagination {
            display: inline-block;
            padding: 0;
            margin: 0;
            margin-left: 25%;

        }

        ul.pagination li {
          display: inline;
        }

        ul.pagination li a {
            color: white;
            font-size: 1.5em;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 5px;
        }

        ul.pagination li a.active {
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
        }

        ul.pagination li a:hover:not(.active) {
          background-color: #ddd;
        }

        hr {
            display: block;
            margin-top: 0.5em;
            margin-bottom: 0.5em;
            margin-left: auto;
            margin-right: auto;
            border-style: outset;
            border-width: 5px;
            border-color:#4CAF50;
        }
        /***********************************************/

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
                <h3><b><?php echo $_SESSION['uname'] ?></b></h3>
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




        <ul class="pagination">
            <li><a href="#" class="tablink active" id="test" onclick="pageart('a-e',event,this)">A-E</a></li>
            <li><a href="#" class="tablink" onclick="pageart('f-j',event,this)">F-J</a></li>
            <li><a href="#" class="tablink" onclick="pageart('k-o',event,this)">K-O</a></li>
            <li><a href="#" class="tablink" onclick="pageart('p-t',event,this)">P-T</a></li>
            <li><a href="#" class="tablink" onclick="pageart('u-z',event,this)">U-Z</a></li>
            <hr>
        </ul>

        <div class="containers" id="contains">

            <div id="a-e" class="page">
                <table class="table striped bordered card-4 " id="list1">
                    <thead>
                        <tr class="blue">
                            <th>Artists</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>Adele</td>
                    </tr>
                    <tr>
                        <td>Ariana Grande</td>
                    </tr>
                    <tr>
                        <td>Avicii</td>
                    </tr>
                    <tr>
                        <td>Alan Walker</td>
                    </tr>
                    <tr>
                        <td>Beyoncé</td>
                    </tr>
                    <tr>
                        <td>B.o.B</td>
                    </tr>
                    <tr>
                        <td>Becky G</td>
                    </tr>
                    <tr>
                        <td>Britney Spears</td>
                    </tr>
                    <tr>
                        <td>Calvin Harris</td>
                    </tr>
                    <tr>
                        <td>Coldplay</td>
                    </tr>
                </table>

                <table class="table striped bordered card-4" id="list2">
                    <thead>
                        <tr class="blue">
                            <th>Artists</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>Charlie Puth</td>
                    </tr>
                    <tr>
                        <td>Chainsmokers</td>
                    </tr>
                    <tr>
                        <td>David Guetta</td>
                    </tr>
                    <tr>
                        <td>Daft Punk</td>
                    </tr>
                    <tr>
                        <td>Daya</td>
                    </tr>
                    <tr>
                        <td>Drake</td>
                    </tr>
                    <tr>
                        <td>Ellie Goulding</td>
                    </tr>
                    <tr>
                        <td>Eminem</td>
                    </tr>
                    <tr>
                        <td>Enrique Iglesias</td>
                    </tr>
                    <tr>
                        <td>Ed Sheeren</td>
                    </tr>
                </table>
            </div>
            <!--*************************************************-->
            <div id="f-j" class="page">
                <table class="table striped bordered card-4" id="list1">
                    <thead>
                        <tr class="blue">
                            <th>Artists</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>Fifth Harmony</td>
                    </tr>
                    <tr>
                        <td>Flo Rida</td>
                    </tr>
                    <tr>
                        <td>Fun</td>
                    </tr>
                    <tr>
                        <td>Fall Out Boy</td>
                    </tr>
                    <tr>
                        <td>Green Day</td>
                    </tr>
                    <tr>
                        <td>G-Eazy</td>
                    </tr>
                    <tr>
                        <td>Grace</td>
                    </tr>
                    <tr>
                        <td>Gnash</td>
                    </tr>
                    <tr>
                        <td>Hardwell</td>
                    </tr>
                    <tr>
                        <td>Hans Zimmer</td>
                    </tr>
                </table>

                <table class="table striped bordered card-4 " id="list2">
                    <thead>
                        <tr class="blue">
                            <th>Artists</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>Hozier</td>
                    </tr>
                    <tr>
                        <td>Halsey</td>
                    </tr>
                    <tr>
                        <td>Imagine Dragons</td>
                    </tr>
                    <tr>
                        <td>Iggy Azalea</td>
                    </tr>
                    <tr>
                        <td>Iron Maiden</td>
                    </tr>
                    <tr>
                        <td>Inna</td>
                    </tr>
                    <tr>
                        <td>Jennifer Lopez</td>
                    </tr>
                    <tr>
                        <td>Justin Bieber</td>
                    </tr>
                    <tr>
                        <td>Jay-Z</td>
                    </tr>
                    <tr>
                        <td>Justin Timberlake</td>
                    </tr>
                </table>
            </div>
            <!--****************************************************-->
            <div id="k-o" class="page">
                <table class="table striped bordered card-4" id="list1">
                    <thead>
                        <tr class="blue">
                            <th>Artists</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>Katy Perry</td>
                    </tr>
                    <tr>
                        <td>KSHMR</td>
                    </tr>
                    <tr>
                        <td>Kygo</td>
                    </tr>
                    <tr>
                        <td>Krewella</td>
                    </tr>
                    <tr>
                        <td>Linkin Park</td>
                    </tr>
                    <tr>
                        <td>Little Mix</td>
                    </tr>
                    <tr>
                        <td>Lady Gaga</td>
                    </tr>
                    <tr>
                        <td>Lil' Wayne</td>
                    </tr>
                    <tr>
                        <td>Maroon 5</td>
                    </tr>
                    <tr>
                        <td>Metallica</td>
                    </tr>
                </table>

                <table class="table striped bordered card-4" id="list2">
                    <thead>
                        <tr class="blue">
                            <th>Artists</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>Magic</td>
                    </tr>
                    <tr>
                        <td>Martin Garrix</td>
                    </tr>
                    <tr>
                        <td>Nickle Back</td>
                    </tr>
                    <tr>
                        <td>Nicki Minaj</td>
                    </tr>
                    <tr>
                        <td>Nicky Romero</td>
                    </tr>
                    <tr>
                        <td>Ne-Yo</td>
                    </tr>
                    <tr>
                        <td>One Republic</td>
                    </tr>
                    <tr>
                        <td>One Direction</td>
                    </tr>
                    <tr>
                        <td>Owl City</td>
                    </tr>
                    <tr>
                        <td>Of Monsters And Men</td>
                    </tr>
                </table>
            </div>
            <!--*************************************************-->
            <div id="p-t" class="page">
                <table class="table striped bordered card-4" id="list1">
                    <thead>
                        <tr class="blue">
                            <th>Artists</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>Pink Floyd</td>
                    </tr>
                    <tr>
                        <td>Pink</td>
                    </tr>
                    <tr>
                        <td>Pitbull</td>
                    </tr>
                    <tr>
                        <td>PSY</td>
                    </tr>
                    <tr>
                        <td>Queen</td>
                    </tr>
                    <tr>
                        <td>Queers</td>
                    </tr>
                    <tr>
                        <td>Quincy Jones</td>
                    </tr>
                    <tr>
                        <td>Quest</td>
                    </tr>
                    <tr>
                        <td>Rihanna</td>
                    </tr>
                    <tr>
                        <td>Rolling Stones</td>
                    </tr>
                </table>

                <table class="table striped bordered card-4" id="list2">
                    <thead>
                        <tr class="blue">
                            <th>Artists</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>Robbie Williams</td>
                    </tr>
                    <tr>
                        <td>Rick Nelson</td>
                    </tr>
                    <tr>
                        <td>Selena Gomez</td>
                    </tr>
                    <tr>
                        <td>Script</td>
                    </tr>
                    <tr>
                        <td>Sia</td>
                    </tr>
                    <tr>
                        <td>Skrillex</td>
                    </tr>
                    <tr>
                        <td>Taylor Swift</td>
                    </tr>
                    <tr>
                        <td>Twenty One Pilots</td>
                    </tr>
                    <tr>
                        <td>Tiesto</td>
                    </tr>
                    <tr>
                        <td>T-Pain</td>
                    </tr>
                </table>
            </div>
            <!--******************************************-->
            <div id="u-z" class="page">
                <table class="table striped bordered card-4" id="list1">
                    <thead>
                        <tr class="blue">
                            <th>Artists</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>Usher</td>
                    </tr>
                    <tr>
                        <td>Vance Joy</td>
                    </tr>
                    <tr>
                        <td>Will.i.am</td>
                    </tr>
                    <tr>
                        <td>Wiz Khalifa</td>
                    </tr>
                    <tr>
                        <td>XTC</td>
                    </tr>
                    <tr>
                        <td>Ylvis</td>
                    </tr>
                    <tr>
                        <td>Zedd</td>
                    </tr>
                    <tr>
                        <td>Zayn Malik</td>
                    </tr>
                    <tr>
                        <td>Bruno Mars</td>
                    </tr>
                    <tr>
                        <td>Backstreet Boys</td>
                    </tr>
                </table>

                <table class="table striped bordered card-4" id="list2">
                    <thead>
                        <tr class="blue">
                            <th>Artists</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>Michael Jackson</td>
                    </tr>
                    <tr>
                        <td>Major Lazer</td>
                    </tr>
                    <tr>
                        <td>Luke Bryan</td>
                    </tr>
                    <tr>
                        <td>AC/DC</td>
                    </tr>
                    <tr>
                        <td>Chris Brown</td>
                    </tr>
                    <tr>
                        <td>Niall Horan</td>
                    </tr>
                    <tr>
                        <td>Shakira</td>
                    </tr>
                    <tr>
                        <td>Gary Jules</td>
                    </tr>
                    <tr>
                        <td>DJ Snake</td>
                    </tr>
                    <tr>
                        <td>Celine Dion</td>
                    </tr>
                </table>
            </div>
        </div>

    </div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <center>
        <footer>
            <h2 style="font-family:papyrus;color:white;">Follow Us On:</h2>
            <img src="../media/images/fb.png" style="width:5%;height:5%">
            <img src="../media/images/g+1.png" style="width:5%;height:5%">
            <img src="../media/images/tweet.png" style="width:4.5%;height:4.5%">

        </footer>
    </center>
</body>
<script type="text/javascript">
    pageart("a-e", event, document.getElementById("test"));
    artist("a-e");
    artist("f-j");
    artist("k-o");
    artist("p-t");
    artist("u-z");

</script>

<script>
$('#file-input').change( function(event) {
  document.form1.submit();
});

</script>
</html>
