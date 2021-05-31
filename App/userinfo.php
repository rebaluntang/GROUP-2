

<?php
// Start the session on every page at the top first
session_start();
?>

<!DOCTYPE html>
<html>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>


    
            




<body style="font-size: 14px;background: url(assets/img/Header-bg2.jpg);color: white;">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#page-top">Vaccine Immunization Passport</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto text-uppercase">
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.html">HOME</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="user.php">Vaccine Registration</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="aboutus.html">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="userinfo.php" style="color: #fed136;">User</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#" onclick="myFunction()">Logout</a></li>
                    <script>
function myFunction() {
  var txt;
  var r = confirm("Do you really want to logout?");
  if (r == true) {
    location.href="login.php";
  } else {
    txt = "You pressed Cancel!";
  }
  document.getElementById("demo").innerHTML = txt;
}
</script>
                    <li class="nav-item"></li>
                </ul>
            </div>
        </div>
    </nav>







    <!-- <footer>
        <h2>&copy; Copyright Reserved.</h2>
    </footer> -->




<section class="login-dark">
<div class="container" style="
    background-color: white;
    padding: 25px;
    color:black;
">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                </div>
            </div>
         



<?php
    //connection
        $conn= mysqli_connect('localhost', 'root','','vip');

        $sql = "SELECT * FROM vipdb";

        $result = mysqli_query($conn,$sql);

?>

 <?php
        $mysqli = new mysqli('localhost','root','','vip') or
        die (mysqli_error($msqli));
        
        $name=$_SESSION['uname'];


        $resultset = $mysqli->query("SELECT * from dashboard WHERE uname2='$name'") or die($mysqli->error);


        ?>
            
<?php
       
        echo "<h1 align='left'>NAME: <b>".$_SESSION['name']."</b></h1>";


?>



   <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>HEALTH INSTITUTION</th>
                        <th>Vaccine</th>
                        <th>Date Vaccinated</th>
                        
                        
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($row = $resultset->fetch_assoc()):
                    ?>
                    <tr>
                        <td><?php echo $row['health'] ?></td>
                        <td><?php echo $row['vac'] ?></td>
                        <td><?php echo $row['psw'] ?></td>
                        <td>
                            <a href="delete.php?id=<?php echo $row["id"];?>">Delete</a>
                        </td>
                        
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</section>
</div>









</body>
</html>