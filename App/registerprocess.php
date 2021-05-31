<?php
$mysqli = new mysqli('localhost','root','','vip') or
die (mysqli_error($msqli));
if(isset($_POST['register'])){
	
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$uname= $_POST['uname'];
	$pnum= $_POST['pnum'];
	
	$bdate= $_POST['bdate'];
	$age= $_POST['age'];
	$sex= $_POST['sex'];
	$address= $_POST['address'];
	$name= $_POST['name'];
	
	
	

	$u="SELECT * FROM vipdb WHERE uname='$uname' ";
$uname=mysqli_query($mysqli,$u);
$uu="SELECT * FROM vipdb WHERE email='$email' ";
$email=mysqli_query($mysqli,$uu);


      if (mysqli_num_rows($uname) > 0) {

header("Location: register.php?error= username is already taken"); 
}

     if (mysqli_num_rows($email) > 0) {

header("Location: register.php?error= invalid email is already taken"); 
}



 

else{
	$mysqli->query("INSERT into vipdb (email,pass,uname,pnum,bdate,age,sex,address,name) values ('$email','$pass','$uname','$pnum','$bdate','$age','$sex','$address','$name')") or die($mysqli->error);
	header("location: login.php");

	/*
	if(mysql_num_rows($dbunames) > 0 ) { //check if there is already an entry for that username
 	echo "Already taken";
	}

	else{
			$mysqli->query("INSERT into vipdb (email,pass,uname,pnum,bdate,age,sex,address,name) values ('$email','$pass','$uname','$pnum','$bdate','$age','$sex','$address','$name')") or die($mysqli->error);
	header("location: login.php");

	}
*/

	}
}




?>