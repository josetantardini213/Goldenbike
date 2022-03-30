<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/styles.css">
    <link rel="stylesheet" href="../style/style.css">
    <title>Goldenbike-Login</title>
    <link rel="shortcut icon" type="image/png" href="../img/Goldenbike-logo-negro.svg" sizes="76x76" />
    <link href="../img/Goldenbike-logo-negro.svg" rel="apple-touch-icon" sizes="76x76" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="theme-color" content="#B99F5A" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/simple-ajax-uploader/2.6.7/SimpleAjaxUploader.min.js"></script>
    <script src="https://kit.fontawesome.com/4f3bb1a9fe.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:700|Raleway:500.700">
    <script src="https://unpkg.com/scrollreveal"></script>
</head>
<body style="background-color:black !important;">
    
<?php
session_start();
if(!isset($_SESSION['user'])){ 



}else{
    header('Location: ../../blog');
}

?>


<img class="imglogin" src="../img/Goldenbike-logo-blanco (1).svg" alt="franquicia">
<a href="../../blog" style="text-align:center; display:flex; justify-content:center; text-decoration:none;">Volver</a>
<div class="login-page">
  <div class="form">
    
    <form class="login-form" action="" method="post">

      <input type="text" name="username" placeholder="username"/>
      <input type="password" name="password" placeholder="password"/>
    
      <input type="submit" class="ingresar" name="ingresar" id="ingresar" value="Ingresar">
     
      <?php include "../funciones/funlogin.php"; ?>

    </form>
  </div>
</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.1/vue.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="../../public/star.js"></script>
    <script src="../../public/scripts.js">
    </script>

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>
</body>

</html>