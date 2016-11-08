<?php
$connect=mysqli_connect('localhost:3306','root','','form_details');

if(mysqli_connect_errno($connect))
{
		die('Failed to connect');
}

$username = $_POST['uname'];
$password = $_POST['psw'];

$sql = "SELECT * from login_forms WHERE Username LIKE '{$username}' AND Password LIKE  '{$password}' LIMIT 1";
$result = mysqli_query($connect,$sql);


if (!mysqli_num_rows($result) == 1) {
      echo "<p>Invalid username/password combination</p>";
} else {
		$row=$result->fetch_assoc();
		session_start();
		$_SESSION['uname']=$username;
		$_SESSION['pic']=$row[DP];
		$_SESSION['eid']=$row[Email];
    header("Location: index_profile.php");
		}
