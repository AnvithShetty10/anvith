<?php

$connect=mysqli_connect('localhost:3306','root','','form_details');

if(mysqli_connect_errno($connect))
{
		die('Failed to connect');
}

$username=$_POST['uname'];
$emailid=$_POST['eid'];
$password=$_POST['psw'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];


$query="INSERT INTO login_forms(Username,Email,Password,PrimaryName,LastName)
				VALUES('$username','$emailid','$password','$fname','$lname')";

mysqli_query($connect,$query);

$query2="SELECT DP from login_forms WHERE Username LIKE '{$username}' LIMIT 1";
$result=mysqli_query($connect,$query2);
$row = $result->fetch_assoc();
session_start();
$_SESSION['uname']=$username;
$_SESSION['pic']=$row[DP];
$_SESSION['eid']=$row[Email];

header("Location:home.php");



?>
