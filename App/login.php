<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login Page</title>
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
    <link rel="stylesheet" href="assets/css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>

<body style="background: url(&quot;assets/img/Header-bg2.jpg&quot;);">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#page-top">Vaccine Immunization Passport</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto text-uppercase">
                    
                </ul>
            </div>
        </div>
    </nav>    <img class="wave" src="assets/img/wave.png">
    <div class="container1">
        <div class="img">
        	<div class="intro-lead-in"><span>Welcome To VIP!</span></div>
            <img src="assets/img/med.svg">
            <div class="intro-heading text-uppercase"><span>Create your account now!</span></div><a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" role="button" href="register.php">Create account</a>
        </div>
        <div class="login-container">
            <form action="loginprocess.php" method="post" style="padding: 20px;border-radius: 30px">
                
                <h2>LOGIN</h2>
        
                    <?php if (isset($_GET['error'])) { ?>
            <p class="error" style="color: red"><?php echo $_GET['error']; ?></p>
        <?php } ?>
                
                <div class="input-div one focus">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>

                    <div>
                        <h5>Username</h5>
                        <input class="input" type="text" name="uname" required>
                    </div>
                </div>
                <div class="input-div one focus">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                        <h5>Password</h5>
                        <input class="input" type="password" name="pass" required>
                    </div>
                </div>
                <a href="#">Forgot Password?</a>
                <input type="submit" class="btn1" value="Login" name="login">
                <div class="sign_up">
                    <p>Not yet a member?</p>
                    <a href="register.php">Sign Up</a>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/login.js"></script>
    <!-- <footer>
        <h2>&copy; Copyright Reserved.</h2>
    </footer> -->
    <script type="text/javascript" src="js/login.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/agency.js"></script>
    <script src="assets/js/login.js"></script>
</body>

</html>