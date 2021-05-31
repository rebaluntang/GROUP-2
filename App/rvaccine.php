<!DOCTYPE html>
<html>





<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Home Page</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="rvaccine.css">
</head>
<body background="assets/img/rv.jpg">


    <div class="center">
  
        <?php if (isset($_GET['vaccine'])) { ?>
            <p class="error"><?php echo $_GET['vaccine']; ?></p>
        <?php } ?>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" role="button" href="index.html">HOME</a>
</div>




</body>
</html>