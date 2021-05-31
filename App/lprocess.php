<?php

	

$mysqli = new mysqli('localhost','root','','vip') or
die (mysqli_error($msqli));


if(isset($_POST['login']))
{
$uname = trim($_POST['uname']);
$pass = trim($_POST['pass']);
$query = "SELECT uname, pass FROM vipdb WHERE uname='$uname' 
AND pass='$pass'";

$result = mysqli_query($mysqli,$query)or die(mysqli_error());
$num_row = mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
if( $num_row ==1 )
     {
 $_SESSION['userid']=$row['userid'];
 
 echo ("<script LANGUAGE='JavaScript'>
          window.location.href='http://localhost/app/index.html';
          window.alert('welcome');
       </script>");
 exit;
  }
  else
     {
	echo ("<script LANGUAGE='JavaScript'>
          window.alert('failed to login please check your username and password');
          window.location.href='http://localhost/app/login.html';
       </script>");
  }
 }




?>