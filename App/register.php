<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Home Page</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/register.css">

</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#page-top">Vaccine Immunization Passport</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto text-uppercase">
                </ul>
            </div>
        </div>
    </nav>
    <section class="login-dark"><div id="wrapper">
    </div>


<form action="registerprocess.php" method="POST">
  <div class="container">

    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <?php if (isset($_GET['error'])) { ?>
            <p class="error" style="color: red"><?php echo $_GET['error']; ?></p>
        <?php } ?>

    <label for="email"><b>Email</b></label>
      <br>
    <input type="text" placeholder="Enter Email" name="email" id="email" required="">

    <label for="username"><b>Username</b></label>
      <br>
    <input type="text" placeholder="username" name="uname" id="username" required="">

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter password" name="pass" id="psw-repeat" required="">


    <label for="pnum"><b>Contact Number</b></label>
    <input type="text" placeholder="Enter contact number" name="pnum" id="pnum" required="">

    <label for="name"><b>Full Name</b></label>
    <input type="text" placeholder="Last name, First name MI. " name="name" id="name" required="">

    <div style="text-align: center;">
    <label for="bdate"><b >Birthdate</b></label>
    <input type="date" placeholder="Enter date born" name="bdate" id="bdate" required="" style="height: 55px;">

    <label for="age"><b style="padding-left: 120px;">Age</b></label>
    <input type="text" placeholder="age" name="age" id="age" required="" style="
    width: 6%;">
    <label for="sex"><b style="padding-left: 120px;">Sex: </b></label>
    <input type="radio" name="sex" id="sex" value="Male">Male
    <input type="radio" name="sex" id="sex" value="Female">Female
      </div>

    <label for="adress"><b>Address</b></label>
    <input type="text" placeholder="House number, Street, Barangay/District, City" name="address" id="address" required="">

    <hr>


    <p class="forgot">By creating an account you agree to our <a href="#">Terms &amp; Privacy</a>.</p>
    <button type="submit" name="register" class="btn btn-primary btn-block">Register</button>
  </div>

  <div class="forgot">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form></section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/agency.js"></script>
    <script src="assets/js/login.js"></script>
</body>

</html>