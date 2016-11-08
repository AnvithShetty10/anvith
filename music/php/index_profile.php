<?php session_start() ?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width,user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

<link rel="icon" type="image/png" href="../media/images/icons/logo5.png" sizes="32x32">
<link rel="icon" type="image/png" href="../media/images/icons/logo5.png" sizes="16x16">
<link rel="main-logo" href="../media/images/icons/logo5.png" sizes="500x354">
<link rel="tiny-logo" href="../media/images/icons/logo5.png" sizes="90x64">
<link rel="shortcut icon" href="../media/images/icons/logo5.png">
<head>
    <title>Symphony</title>
    <link rel="stylesheet" type="text/css" href="../CSS/landing.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/select_lang.css" />
    <link rel="stylesheet" type="text/css" href="../CSS/phone.css" />
    <script src="../js/jquery.js"></script>
    <style>
        body {
            min-width: 50%;
        }
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
              <a href="#top"><h3>Symphony</h3></a>
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
                    <a href="#" id="English" onclick="language(this)">English</a>
                    <a href="#" id="Hindi" onclick="language(this)">Hindi</a>
                    <a href="#" id="Kannada" onclick="language(this)">Kannada</a>
                  </div>
              </div>
            </div>
            <div class="line" ></div>
        </div>
        <!--*********************************************************-->

        <!--*********************************************************-->
        <div class="container_back" id="top">
          <div class="overlay"></div>
                    <video autoplay loop class="fillWidth">
          <source src="../media/back_video/MP4/Cheer-Up.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
          <source src="../media/back_video/WEBM/Cheer-Up.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
                    </video>
                    <div id="phoneback"></div>
                    <div id="name"><div id="logo"><img id="spins" onclick="spin()" src="../media/images/logo5.png"  ></div><br><br><br>
                    <p>Symphony</p>
                  </div>
        </div>
        <!--*********************************************************-->

        <div class="content1">
            <p style=""><br>We work to make your music experience elegant.<br>Handpicked features beautifully packed in one place.</p>
        </div>
        <!--*********************************************************-->

        <div class="content2">
            <div id="fea1">

                <center><img src="../media/images/musiclove1.png"></center>
                <p ><b>Discover Your Love For Music</b></p>

            </div>
            <div id="fea2">

                <center><img src="../media/images/playlist.png" ></center>
                <p><b>Symphony Curated Playlist</b></p>
            </div>
            <div id="fea3">

                <center><img src="../media/images/icon_tracks.png"></center>
                <p><b>Latest Music Tracks</b></p>
            </div>
            <div id="fea4">

                <center><img src="../media/images/top1.png" ></center>
                <p><b>Up-To-Date <br>Top Charts</b></p>
            </div>
        </div>

        <!--*********************************************************-->
        <div class="content3">
            <img id="c3_i1" src="../media/images/screen5.png" >
            <img id="c3_i2" src="../media/images/screen6.png" >
            <img id="c3_i3" src="../media/images/screen1.png" >
            <p><b><br>State of the Art <br>Design <br>and <br>Functionality</b></p>
            <!--*********************************************************-->
        </div>
        <div class="content4">
            <br>
            <center><img src="../media/images/credits.png">
                <p id="credit" >Credits</p>
            </center>
            <p id="credit_content" >The Symphony team would like to thank all of its users, maintainers, contributors, fans and its community for their suggestions and love that keeps us motivated. </p>
        </div>
        <!--*********************************************************-->

        <div class="meet">
            <br><br><br><br>
            <center><img src="../media/images/team.png"></center>
            <center>
                <p> Meet the Team</p>
            </center>
            <br><br><br>
            <div id="mem1">
                <img id="aditya" src="../media/images/aditya.jpg" >
                <figcaption id="aditya_name"><br>Aditya D Ramani</figcaption>
            </div>
            <div id="mem2">
                <img id="akshay" src="../media/images/akshay.jpg">
                <figcaption id="akshay_name"><br>Akshaykanth D L</figcaption>
            </div>
            <div id="mem3">
                <img id="anvith" src="../media/images/anvith.jpg">
                <figcaption id="anvith_name"><br>Anvith S Shetty</figcaption>
            </div>
            <div id="mem4">
                <img id="abhi" src="../media/images/abhi.jpg">
                <figcaption id="abhi_name"><br>Abhishek Dwivedi</figcaption>
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

        <div class="copy">
            <center> <br>&copy;2016 Symphony</center>
        </div>
    </div>
    <script>
        intiate();
    </script>
    <script type="text/javascript" src="../js/javascripts.js"></script>

</body>

</html>
