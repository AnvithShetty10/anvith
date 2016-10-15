<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">

    <title>Symphony</title>
    <link rel="stylesheet" type="text/css" href="CSS/landing.css" />
    <link rel="stylesheet" type="text/css" href="CSS/select_lang.css" />
    <script src="jquery.js"></script>
    <style>

      #uname{
        font-style: cursive;
        color: rgb(255, 255,255);
        position: absolute;;
        font-size: 2em;
        margin-left:-10%;
        z-index: 10;
      }
      #text{

        margin-top: -10%;      }
    </style>

  </head>

<body>

    <div class="wrapper">
        <!--*********************************************************-->
        <div class="static">
            <div class="header">
                <br><br><br>
                <a href=#top><h3 style="font-size:2em;margin-top:-1%;margin-left:2%;margin-right:0%;width:40%;color:white;font-family:myFont2;">Symphony</h3></a>
                <!--*************************************************************************-->

                <ul>
                    <div id="uname">
                    <img src="<?php echo $_SESSION['pic'] ?>" style="height:2em;width:2em;border-radius: 100%;">
                    <span id="text"> HEY  <?php echo $_SESSION['uname'] ?> </span>
                  </div>
                  <li><a href='#' onclick="document.getElementById('login').style.display='block'" class="round blue" style="display:none;"><span class="round">Login</span></a></li>
                  <li><a href="#" onclick="document.getElementById('register').style.display='block'" class="round red" style="display:none;"><span class="round">Sign Up</span></a></li>
                  <li><a href="#" onclick="document.getElementById('feedback').style.display='block'" class="round green"><span class="round">Feedback</span></a></li>
                  <li onclick="drop()"><a href='#' class="round red"><span class="round">Language</span></a></li>
                </ul>


                <div id="login" class="modal" style=background-color:rgba(0,128,128,0.1)>

                    <form class="modal-content animate" method="post" action="login.php">


                        <div class="container">
                          <span onclick="document.getElementById('login').style.display='none'" class="close" title="Close Modal">&times;</span>

                            <label><b>Username</b></label>
                            <input type="text" placeholder="Enter Username" name="uname" required>

                            <label><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="psw" required>
                            <input type="checkbox" checked="checked"> Remember me
                            <br><br>
                            <button type="submit">Login</button>
                            <span class="psw"><a href="#">Forgot password?</a></span>
                        </div>
                    </form>
                </div>



                <div id="register" class="modal" style=background-color:rgba(255,0,0,0.1)>

                    <form class="modal-content animate" method="post" action="register.php">

                        <div class="container" style="background-color:rgba(0,0,0,0.1)">
                          <span onclick="document.getElementById('register').style.display='none'" class="close" title="Close Modal">&times;</span>

                            <h1 style=text-align:center>Registration Form</h1>
                        </div>

                        <div class="container">
                            <input type="text" placeholder="Username" name="uname" required>

                            <input type="text" placeholder="E-mail Id" name="eid" required>

                            <input type="password" placeholder="Password" name="psw" id="check1" required>

                            <input type="password" placeholder="Confirm Password" name="psw" id="check2" required>

                            <input type="text" placeholder="First name" name="fname" required>

                            <input type="text" placeholder="Last name" name="lname" required>
                            <input type="checkbox" checked="checked"> I agree to terms and conditions
                            <br>
                            <br>
                            <button type="submit">Submit</button>
                        </div>
                    </form>
                </div>
                <div id="feedback" class="modal" style=background-color:rgba(0,128,0,0.1)>

                    <form class="modal-content animate" action="feedback.php">


                        <div class="container">
                          <span onclick="document.getElementById('feedback').style.display='none'" class="close" title="Close Modal">&times;</span>

                            <h1 style="padding-left:10px;">Feedback</h1>

                            <input type="text" placeholder="Name" name="name" required>

                            <input type="text" placeholder="E-mail Id" name="eid" required>

                            <textarea placeholder="Feedback" name="fb" class="neww"></textarea>
                            <input type="checkbox"> Send a copy to my e-mail addrress
                            <br>
                            <br>
                            <button type="submit">Submit</button>
                        </div>
                    </form>
                </div>

                <!--*************************************************************************-->
                <div id="dropdown" style="margin-top:-7.5%;margin-left:82%;" >
                  <div class="size"></div>
                  <div class="dropdown-content" id="drop">
                      <a href="#">English</a>
                      <a href="#">Hindi</a>
                      <a href="#">Kannada</a>
                  </div>
              </div>
            </div>
            <div class="line" ></div>
        </div>
        <!--*********************************************************-->

        <!--*********************************************************-->
        <div class="back" id="top">
            <div id="logo"><img id="spins" onclick="spin()" src="images/logo5.png" height="200" style="-webkit-transform:rotate(8deg);margin-left:47%;margin-top:15%;"></div><br><br><br>
            <p style="font-family:myFont;color:white;font-size:200px;margin-top:-8%;margin-left:38%;">Symphony</p>
        </div>
        <!--*********************************************************-->

        <div class="content1">
            <p style="text-align:center;font-size:300%;"><br>We work to make your music experience elegant.<br>Handpicked features beautifully packed in one place.</p>
        </div>
        <!--*********************************************************-->
        <div class="content2">
            <div id="fea1">
                <br><br>
                <center><img src="images/musiclove1.png" style="height:40%;width:40%;margin-top:5%"></center>
                <p style="font-size:1.25em;text-align:center;"><b>Discover Your Love For Music</b></p>

            </div>
            <div id="fea2">
                <br><br>
                <center><img src="images/playlist.png" style="height:40%;width:40%;margin-top:5%"></center>
                <p style="font-size:1.25em;text-align:center;"><b>Symphony Curated Playlist</b></p>
            </div>
            <div id="fea3">
                <br><br>
                <center><img src="images/icon_tracks.png" style="height:40%;width:40%;margin-top:5%"></center>
                <p style="font-size:1.25em;text-align:center;"><b>Latest Music Tracks</b></p>
            </div>
            <div id="fea4">
                <br><br>
                <center><img src="images/top1.png" style="height:40%;width:40%;margin-top:5%"></center>
                <p style="font-size:1.25em;text-align:center;"><b>Up-To-Date <br>Top Charts</b></p>
            </div>
        </div>
        <!--*********************************************************-->
        <div class="content3">
            <img src="images/screen2.png" style="height:70%;width:30%;margin-top:1%;margin-left:2%;position:absolute;border-radius:1em;">
            <img src="images/screen3.png" style="height:70%;width:30%;margin-top:2%;margin-left:24%;position:absolute;border-radius:1em;">
            <img src="images/screen4.png" style="height:70%;width:30%;margin-top:8%;margin-left:11%;position:absolute;border-radius:1em;">
            <p style="font-size:3em;margin-left:60%;text-align:center;"><b><br>State of the Art <br>Design <br>and <br>Functionality</b></p>
            <!--*********************************************************-->
        </div>
        <div class="content4">
            <br>
            <center><img src="images/credits.png" style="height:7em;width:7em;">
                <p style="font-size:3em;margin-top:0%">Credits</p>
            </center>
            <p style="font-size:3em;margin-left:5%;text-align:center">The Symphony team would like to thank all of its users, maintainers, contributors, fans and its community for their suggestions and love that keeps us motivated. </p>
        </div>
        <!--*********************************************************-->

        <div class="meet">
            <br><br><br><br>
            <center><img src="images/team.png" style="height:7em;width=7em;"></center>
            <center>
                <p style="font-size:3em;"> Meet the Team</p>
            </center>
            <br><br><br>
            <div id="mem1">
                <img src="images/aditya.jpg" style="height:15em;width:12em;border-radius: 1em;">
                <figcaption style="font-size:1.25em;"><br>Aditya D Ramani</figcaption>
            </div>
            <div id="mem2">
                <img src="images/akshay.jpg" style="height:15em;width:12em;border-radius: 1em;">
                <figcaption style="font-size:1.25em;"><br>Akshaykanth D L</figcaption>
            </div>
            <div id="mem3">
                <img src="images/anvith.jpg" style="height:15em;width:12em;border-radius: 1em;">
                <figcaption style="font-size:1.25em;"><br>Anvith S Shetty</figcaption>
            </div>
            <div id="mem4">
                <img src="images/aditya.jpg" style="height:15em;width:12em;border-radius: 1em;">
                <figcaption style="font-size:1.25em;"><br>Abhishek Dwivedi</figcaption>
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

        <div class="copy">
            <center> <br>&copy;2016 Symphony</center>
        </div>
    </div>
<script type="text/javascript" src="javascripts.js"></script>

<script>
    intiate();
   document.getElementById("dropdown").style.marginTop="-8%";
   document.getElementById("feed").style.marginLeft="6em";
   document.getElementById("feed").style.marginTop="-8%";

</script>
</body>

</html>