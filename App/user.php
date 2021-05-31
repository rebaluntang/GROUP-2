<?php
// Start the session on every page at the top first
session_start();
?>


<!DOCTYPE html>



<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Register Page</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    
</head>
<body style="
    background: url(assets/img/Header-bg2.jpg);
    color: white;
">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#page-top">Vaccine Immunization Passport</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto text-uppercase">
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.html">HOME</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="user.php" style="color: #fed136;">Vaccine Registration</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="aboutus.html">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="userinfo.php">User</a></li>
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
                </ul>
            </div>
        </div>
    </nav>
    
<section class="login-dark" style="
    height: 1100px;
">
<form action="userprocess.php" method="POST" style="
    top: 40%;
">
  <div class="container">
    
    <hr>

<?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        
        <div>
            <label for="health">HEALTH INSTITUTION:</label>
                <Select id="health" name="health">
                    <option value="base">- SELECT HEALTH INSTITUTION -</option>
                    <option value="DOH">DOH</option>
                    <option value="Philippine Red Cross">Philippine Red Cross</option>
                    <option value="PhilHealth">PhilHealth</option>
                    <option value="WHO">WHO</option>
                </Select>
        </div>

        <div>
            <label for="region">REGION:</label>
                <Select id="region" name="region">
                    <option value="base">- SELECT REGION -</option>
                    <option value="Region NCR">REGION NCR</option>
                    <option value="Region CAR">REGION CAR</option>
                    <option value="Region I">REGION I</option>
                    <option value="Region II">REGION II</option>
                    <option value="Region III">REGION III</option>
                    <option value="Region IV">REGION IV-A</option>
                    <option value="Region MIMAROPA">MIMAROPA</option>
                    <option value="Region V">REGION V</option>
                    <option value="Region VI">REGION VI</option>
                    <option value="Region VII">REGION VII</option>
                    <option value="Region VIII">REGION VIII</option>
                    <option value="Region IX">REGION IX</option>
                    <option value="Region X">REGION X</option>
                    <option value="Region XI">REGION XI</option>
                    <option value="Region XII">REGION XII</option>
                    <option value="Region XIII">REGION XIII</option>
                    <option value="Region BARMM">REGION BARMM</option>
                </Select>
        </div>
    
        <div>
            <label for="tdate">DATE :</label>
                <input type="date" name="tdate" id="tdate">
        </div>


    <label for="vac"><b>VACCINE</b></label>
        <select class="w3-input w3-border" id="vac" name="vac" required>
            <option value="Region I">- SELECT TYPE OF VACCINE -</option>
            <option value="Live-attenuated">Live-attenuated</option>
            <option value="Inactivated/Killed">Inactived/Killed</option>
            <option value="Toxoid">Toxoid</option>
            <option value="Subunit/Conjugate">Subunit/Conjugate</option>
            <option value="Messenger RNA (mRNA)">Messenger RNA (mRNA)</option>
            <option value="Viral Vector">Viral Vector</option>
        </select>

    <label for="brand"><b>BRAND</b></label>
        <select class="w3-input w3-border" id="brand" name="brand" required>
            <option value="Region I">- SELECT BRAND OF VACCINE -</option>
            <option value="Malini T">Malini T</option>
            <option value="Curevac">Curevac</option>
            <option value="Biontech">Biontech</option>
            <option value="Sanofi">Sanofi</option>
            <option value="Moderna">Moderna</option>
            <option value="Merck">Merck</option>
            <option value="Sanofi">Sanofi</option>
            <option value="AstraZeneca">AstraZeneca</option>
            <option value="Sinovac">Sinovac</option>
            <option value="Pfizer">Pfizer</option>
        </select>

    <label for="route"><b>ROUTE</b></label>
        <select class="w3-input w3-border" id="route" name="route" required>
            <option value="Region I">- SELECT ROUTE -</option>
            <option value="Oral Route: Administered by mouth">Oral Route: Administered by mouth</option>
            <option value="Subcutaneous route: injected into the area just beneath the skin into the fatty, connective tissue">Subcutaneous route: injected into the area just beneath the skin into the fatty, connective tissue</option>
            <option value="Intramuscular route: injected into muscle tissu">Intramuscular route: injected into muscle tissue</option>
            <option value="Intradermal route: injected into layers of the skin">Intradermal route: injected into layers of the skin</option>
            <option value="Intranasal route: administered into the nose">Intranasal route: administered into the nose</option>
        </select>

    <label for="psw"><b>VACCINATION DATE</b></label>
    <input class="w3-input w3-border" type="date" placeholder="Select Date" name="psw" required>

    <label for="location"><b>VACCINATION LOCATION</b></label>
        <select id="location" name="location" class="w3-input w3-border">
            <option value="Region">- SELECT REGION -</option>
            <option value="Region NCR">REGION NCR</option>
            <option value="Region CAR">REGION CAR</option>
            <option value="Region I">REGION I</option>
            <option value="Region II">REGION II</option>
            <option value="Region III">REGION III</option>
            <option value="Region IV">REGION IV-A</option>
            <option value="Region MIMAROPA">MIMAROPA</option>
            <option value="Region V">REGION V</option>
            <option value="Region VI">REGION VI</option>
            <option value="Region VII">REGION VII</option>
            <option value="Region VIII">REGION VIII</option>
            <option value="Region IX">REGION IX</option>
            <option value="Region X">REGION X</option>
            <option value="Region XI">REGION XI</option>
            <option value="Region XII">REGION XII</option>
            <option value="Region XIII">REGION XIII</option>
            <option value="Region BARMM">REGION BARMM</option>
        </select>

    <label for="total"><b>TOTAL DOSAGE</b></label>
        <select id="total" name="total" class="w3-input w3-border">
            <option value="Region I">- SELECT DOSAGE -</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
    <hr>
    <?php
    
    if(isset($_SESSION['uname']))
    echo '<input type="hidden" readonly  name="uname2" for="uname2" value="'.$_SESSION['uname'].'"></input>'; 
?>

    <button type="submit" name="add" class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" style="left: 50%;">Submit</button>
  </div>

</form>
</section>


</body>
</html>