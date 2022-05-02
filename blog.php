<!DOCTYPE html>
<html lang="en">
<?php session_start();
?>
<head>
<?php include "./Content/head.php"; ?>    
    <link rel="stylesheet" href="./public/styles.css?n=33">
    <link rel="stylesheet" href="./novedades/style/style.css?n=33">
    <link rel="stylesheet" href="./preloader/preloader.css?n=33">
    <link rel="stylesheet" href="./public/footer.css?n=33">

    <link rel="icon" href="./img/favicon.svg" type="image/svg+xml">
    <link rel="icon" href="./img/favicon.png" type="image/png">

    <?php include "./Content/analiticpersonalizado.php"; ?>

    <?php include "./Content/analitic.php"; ?>    
</head>

<body>
  <?php
         
         include "./novedades/funciones/conexion.php";
?>
<img class="img" src="./novedades/img/blog_goldenbike.webp" alt="franquicia">

<section>


    <div class="nuestratienda">
    <h1 class="h1tiendas" >Blog</h1>      
    <div class="pdentrop" >
            <h1  id="textograndegolden" style="  transition: 0.1s;">GOLDENBIKE</h1>
            </div>
          

    </div>
</section>




    <div class="iconos3" style="background-color: white;">
        <div class="containeres">
        <div class="row1" id="post-data">
       <?php
       include "./novedades/funciones/muestrapubliblog.php";
       ?>
       
        
       </div>
</div>
</div>
<button class="botonloadmore" id="vermas">Ver mas contenido</button>


    <div id="progressBar"></div>
    <div id="progressBarContainer"></div>
    
    <div class="loading" id="loading">
<div id="loading-center">
<div id="loading-center-absolute">
<img src="https://www.goldenbike.com.ar/img/Goldenbike-logo-blanco.svg"  width=100% alt="">
<!--<img src="https://goldenbike.com.ar/img/rueda.svg" alt="rueda">-->

</div>
</div>
 
</div>


    <!-- nav del sitio -->

    <nav class="menublog" id="menu" style="margin-top: 70px;">
        <input type="checkbox" href="#" class="menublog-open" name="menublog-open" id="menublog-open" />
        <label class="menublog-open-button" for="menublog-open">
     <span class="lines line-1"></span>
     <span class="lines line-2"></span>
     <span class="lines line-3"></span>
    </label>

     
        <a href="https://www.goldenbike.com.ar" class="menublog-item green"> <i style="font-size:28px;" class="fa fa-home"></i> </a>
        <a href="#" class="menublog-item red"> <i style="font-size:23px;" class="fas fa-store"></i> </a>
        <a href="https://www.goldenbike.com.ar/blog" class="menublog-item purple"> <i class="fas fa-blog" style="font-size:23px;"></i> </a>
        
        <?php if(isset($_SESSION['user']) && $_SESSION['usertype'] == 1){ ?>
        <a href="./novedades/admin/admin" class="menublog-item blue" style=""> <i style="font-size:28px;" class="fas fa-users-cog"></i> </a>  
        
        <a href="./novedades/funciones/logout.php" class="menublog-item black"> <i class="fas fa-sign-out-alt" style="font-size:28px;"></i> </a>
        <?php } ?>
    
        </nav>
        
<?php

include "./Content/footer.php";
?>

<script>

lastid2 = 0;


$(window).scroll(function () { 
    var golden = $(".botonloadmore").offset().top - 400;
    var scrollelement = $(window).scrollTop();
if(golden <= scrollelement){
    $('.botonloadmore').click()

}
});


$('.botonloadmore').click(function() {
    


        var last_id = $(".postid:last").attr("value");
        
    if(last_id != lastid2){
            loadMore(last_id);
    }
    lastid2=last_id;


});


function loadMore(last_id){
    
  $.ajax({
      url: './novedades/funciones/load-more.php?last_id=' + last_id,
      type: "get",
      beforeSend: function(){
          $('.ajax-load').show();
      }
  }).done(function(data){
      $('.ajax-load').hide();
      $("#post-data").append(data);
  }).fail(function(jqXHR, ajaxOptions, thrownError){
      alert('server not responding...');
  });
}
</script> 

    <script src="./public/star.js"></script>
    <script src="./public/scripts.js"></script>
    <script src="./script.js"></script>

<script>

    variable = 0;
function hover(id) {
    variable = 1
if(variable == 1){

    $("#"+id+" h2").stop().animate({
        marginTop:-200
        
       
    },1000);

    $("#"+id+" .h2especial").stop().animate({
        marginTop:-100,
        opacity:1
        
       
    },600);
    setTimeout( function(){
    $("#"+id+" img")
          .css('filter','blur(2px)')
          .css('webkitFilter','blur(2px)')
          .css('mozFilter','blur(2px)')
          .css('oFilter','blur(2px)')
          .css('msFilter','blur(2px)');
   }, 0);
}
}




function contrarioahover(id){




    setTimeout( function(){
    $("#"+id+" img")
          .css('filter','blur(0px)')
          .css('webkitFilter','blur(0px)')
          .css('mozFilter','blur(0px)')
          .css('oFilter','blur(0px)')
          .css('msFilter','blur(0px)');
   }, 0);


   

   $("#"+id+" h2").stop().animate({
        marginTop: 10,
        
        
       
    },1000);

    


    $("#"+id+" .h2especial").stop().animate({
        
    marginTop:"0",
        opacity:0

        
       
    },400);
}





</script>
</body>

</html>