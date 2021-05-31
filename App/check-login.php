<?php  
session_start();
include "connection.php";

if (isset($_POST['uname']) && isset($_POST['pass'])) {

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	$uname = test_input($_POST['uname']);
	$pass = test_input($_POST['pass']);
	

	if (empty($uname)) {
		header("Location: ../login.php?error=User Name is Required");
	}else if (empty($pass)) {
		header("Location: ../login.php?error=Password is Required");
	}else {

		// Hashing the password
		$pass = md5($pass);
        
        $sql = "SELECT * FROM vipdb WHERE uname='$uname' AND pass='$pass'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
        	// the user name must be unique
        	$row = mysqli_fetch_assoc($result);
        	if ($row['password'] === $password) {
        		$_SESSION['name'] = $row['name'];
        		$_SESSION['id'] = $row['id'];
        		$_SESSION['uname'] = $row['uname'];

        		header("Location: ../index.html");

        	}else {
        		header("Location: login.php?error=Incorect User name or password");
        	}
        }else {
        	header("Location: login.php?error=Incorect User name or password");
        }

	}
	
}else {
	header("Location: ../login.php");
}