
<?php
// Start the session on every page at the top first
session_start();
?>


<?php
$mysqli = new mysqli('localhost','root','','vip') or
die (mysqli_error($msqli));
if(isset($_POST['add'])){
	
	$health = $_POST['health'];
	$region = $_POST['region'];
	$tdate = $_POST['tdate'];
	$vac = $_POST['vac'];
	$brand = $_POST['brand'];
	$route = $_POST['route'];
	$psw = $_POST['psw'];
	$location = $_POST['location'];
	$total = $_POST['total'];
	$uname2 = $_POST['uname2'];
	





  
	
    $mysqli->query("INSERT into dashboard (health,region,tdate,vac,brand,route,psw,location,total,uname2) values ('$health','$region','$tdate','$vac','$brand','$route','$psw','$location','$total','$uname2')") or die($mysqli->error);
    header("location: user.php");

	$dtToday = date('Y/m/d',strtotime('-1 year'));

	if($psw < $dtToday){
		header("Location: user.php?error= Invalid Vaccination Date");
	}


	else if($vac=="Toxoid" && $total < 4){

		header("Location: rvaccine.php?vaccine= Toxoid vaccines use a toxin (harmful product) made by the germ that causes a disease. They create immunity to the parts of the germ that cause a disease instead of the germ itself, if you feel any symptoms please consult your doctor ");

		$mysqli->query("INSERT into dashboard (health,region,tdate,vac,brand,route,psw,location,total,uname) values ('$health','$region','$tdate','$vac','$brand','$route','$psw','$location','$total','$uname')") or die($mysqli->error);
    			

	}

	else if($vac=="Toxoid" && $total >= 4){

		header("Location: rvaccine.php?vaccine= Toxoid vaccines tend not to be highly immunogenic unless large amounts or multiple doses are used: one problem with using larger doses is that tolerance can be induced to the antigen");

		$mysqli->query("INSERT into dashboard (health,region,tdate,vac,brand,route,psw,location,total,uname) values ('$health','$region','$tdate','$vac',''$brand,'$route','$psw','$location','$total','$uname')") or die($mysqli->error);
    			
	
	}
	else if($vac=="Messenger RNA (mRNA)"){

		header("Location: rvaccine.php?vaccine= mRNA vaccine is a new type of vaccine to protect againts infectious diseases.");

		$mysqli->query("INSERT into dashboard (health,region,tdate,vac,brand,route,psw,location,total,uname) values ('$health','$region','$tdate','$vac','$brand','$route','$psw','$location','$total','$uname')") or die($mysqli->error);
    			

	}

	else if($vac=="Viral Vector"){

		header("Location: rvaccine.php?vaccine= The benefit of viral vector vaccines, like all vaccines, is those vaccinated gain protection without ever having to risk the serious consequences of getting sick with COVID-19.");

		$mysqli->query("INSERT into dashboard (health,region,tdate,vac,brand,route,psw,location,total,uname) values ('$health','$region','$tdate','$vac',''$brand,'$route','$psw','$location','$total','$uname')") or die($mysqli->error);
    			
	
	}
	else if($vac=="Live-attenuated"){

		header("Location: rvaccine.php?vaccine= Live attenuated vaccines contain a version of the living virus that has been weakened so that it does not cause serious disease in people with healthy immune systems.");

		$mysqli->query("INSERT into dashboard (health,region,tdate,vac,brand,route,psw,location,total,uname) values ('$health','$region','$tdate','$vac','$brand','$route','$psw','$location','$total','$uname')") or die($mysqli->error);
    			

	}

	else if($vac=="Inactivated/Killed"){

		header("Location: rvaccine.php?vaccine= These vaccines have a weakened version of the live virus, to stop it from causing the disease but to still encourage the production of T cells.");

		$mysqli->query("INSERT into dashboard (health,region,tdate,vac,brand,route,psw,location,total,uname) values ('$health','$region','$tdate','$vac',''$brand,'$route','$psw','$location','$total','$uname')") or die($mysqli->error);
    			
	
	}
	else if($vac=="Subunit/Conjugate"){

		header("Location: rvaccine.php?vaccine= Subunit vaccines consist of a small amount of virus particles, which induces protective immunity in patients.");

		$mysqli->query("INSERT into dashboard (health,region,tdate,vac,brand,route,psw,location,total,uname) values ('$health','$region','$tdate','$vac',''$brand,'$route','$psw','$location','$total','$uname')") or die($mysqli->error);
    			
	}
	
	




	else{
			
		$mysqli->query("INSERT into dashboard (health,region,tdate,vac,brand,route,psw,location,total,uname) values ('$health','$region','$tdate','$vac','$brand','$route','$psw','$location','$total','$uname')") or die($mysqli->error);
    			
	header("Location: index.html");

	}


}
?>