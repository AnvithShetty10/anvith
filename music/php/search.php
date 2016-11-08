<?php
$connect=mysqli_connect('localhost:3306','root','','music');

if(mysqli_connect_errno($connect))
{
		die('Failed to connect');
}

$search=$_POST['search'];
$search_key=implode(' ',explode('+',$search));
//$search_key='Rolling In the Deep';
$query="SELECT * from songs WHERE Name LIKE '{$search_key}' LIMIT 1";
$result=mysqli_query($connect,$query);
$row=$result->fetch_assoc();

echo json_encode($row['npath']."+".$row['artPath']);

 ?>
