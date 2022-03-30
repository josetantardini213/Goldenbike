<!DOCTYPE html>
<html lang="en">
    <?php   include "./novedades/funciones/conexion.php";
    
    $id = $_GET["n"];

    $publicacion3 = "SELECT * FROM publicacionesblog WHERE url='".$id."'"; 
    
    $publicacion4=mysqli_query($conexion,$publicacion3);
    ?>
    
<head>
<meta charset="UTF-8">


    <?php if($pub3 = mysqli_fetch_array($publicacion4)){ ?>
    <title><?php echo $pub3["titulo"]; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:type" content="article" />
	<meta property="og:title" content="<?php echo $pub3["titulo"]; ?>" />
	<meta property="og:description" content="La cadena de bicicleterías más grande del país." />
	<meta property="og:url" content="https://www.goldenbike.com.ar/<?php echo $pub3["url"];?>" />
	<meta property="og:site_name" content="Goldenbike" />
    <meta name="theme-color" content="#B99F5A" />
    <?php $url=$url= substr($pub3['archivo'],11);  ?>
    <meta property="og:image" content="https://www.goldenbike.com.ar/novedades/imgblog/<?php echo $url ;?>" /> 
    <meta property="og:image:secure_url" content="https://www.goldenbike.com.ar/novedades/imgblog/<?php echo $url ;?>" /> 
    <meta property="og:image:type" content="image/jpeg" /> 
    <meta property="og:image:width" content="400" /> 
    <meta property="og:image:height" content="300" />
    
    <link rel="icon" href="./img/favicon.svg" type="image/svg+xml">
    <link rel="icon" href="./img/favicon.png" type="image/png">
    <link rel="stylesheet" href="./public/styles.css">
    <link rel="stylesheet" href="./novedades/style/style.css">
    <link rel="stylesheet" href="./preloader/preloader.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/4f3bb1a9fe.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <?php } ?>
    
    <script>
window.onload = function() {
    $("#loading").fadeOut("slow");
};
</script>
<?php include "./Content/analiticpersonalizado.php"; ?>

    <?php include "./Content/analitic.php"; ?>    

</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php
 include "./Content/menu.php"
?>
<?php
         
       
         $id = $_GET["n"];
         
         ?>
         <script>

         </script>
         <?php
 



         $publicacion = "SELECT url,portada,shortdescription,archivo,titulo,id_publicacion,descripcion FROM publicacionesblog WHERE url='".$id."'"; 
    
    $publicacion2=mysqli_query($conexion,$publicacion);
    if($pub = mysqli_fetch_array($publicacion2)){
?>

<?php

if($pub['portada'] != "" && $pub['portada'] != "NULL"){
?>
<img class="img" src="./novedades/funciones/<?php echo $pub['portada']; ?>" alt="franquicia">
    
<?php }else{
?>
<img class="img" src="./img/hf_franquicia_goldenbike.jpg" alt="franquicia">

<?php
} ?>
<section>


    <div class="nuestratienda">
    <?php

if($pub['titulo'] != null){
?>
    <h1 class="h1noticia" ><?php echo $pub['titulo']; ?></h1> 
    <?php } ?>     
    <div class="pdentrop" >
            <h1  id="textograndegolden" style=" transition: 0.1s;">GOLDENBIKE</h1>
            </div>
          

    </div>


</section>

<section>
<div class="contenedornoticia">


<img src="./novedades/funciones/<?php echo $pub['archivo']; ?>" hspace="5" vspace="5" style="float: left; object-fit: cover;" />
<div class="contentdescription">
<?php echo $pub['descripcion']; ?>
</div>
</div>
</section>


<section><div class="compartir">
<div class="fb-share-button" >

 <h2>Compartí esta nota:    <a href="https://api.whatsapp.com/send?text=Mira%20esta%20noticia%20de%20Goldenbike%20https://www.goldenbike.com.ar/<?php echo $pub['url'] ;?>" data-action="share/whatsapp/share" target="_blank" style="margin-right:10px;"><i  class="fa fa-whatsapp" style="padding-left:17px; padding-right:17px;"></i></a><a href="https://www.facebook.com/sharer/sharer.php?u=https://www.goldenbike.com.ar/<?php echo $pub['url'] ;?>"><i class="fa fa-facebook"></i></a></h2>
    
    </div>
</div></section>

<?php } ?>

    <script src="./public/star.js"></script>
    <script src="./public/scripts.js"></script>
   
    <?php
    
    include "./Content/footer.php";  
    
    ?>
</body>
</html>