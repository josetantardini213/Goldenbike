<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/styles.css">
    <link rel="stylesheet" href="../../style/style.css">
    <link rel="stylesheet" href="../../../preloader/preloader.css">
    <title>Goldenbike-Admin</title>
    <link rel="icon" href="../../../img/favicon.svg" type="image/svg+xml">
    <link rel="icon" href="../../../img/favicon.png" type="image/png">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="theme-color" content="#B99F5A" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/simple-ajax-uploader/2.6.7/SimpleAjaxUploader.min.js"></script>
    <script src="https://kit.fontawesome.com/4f3bb1a9fe.js" crossorigin="anonymous"></script>    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:700|Raleway:500.700">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="./ckeditor/ckeditor.js"></script>
    <script>



    
window.onload = function() {
    $("#loading").fadeOut("slow");
    var pos = window.name || 0;
            window.scrollTo(0, pos);
};

window.onunload = function() {
            window.name = self.pageYOffset || (document.documentElement.scrollTop + document.body.scrollTop);
        }
    </script>
</head>
<body>
 
    <?php include "../../funciones/conexion.php"; 
    
    include "../../funciones/modificar.php";

    ?><div id="sql"><?php
    $publicacion = "SELECT url,portada,shortdescription,archivo,titulo,descripcion,id_publicacion FROM publicacionesblog WHERE id_publicacion='".$_GET['modifi']."'"; 
    
    $publicacion2=mysqli_query($conexion,$publicacion);
    ?></div><?php
    if($pub = mysqli_fetch_array($publicacion2)){


    
    ?>



<?php
session_start();
if(isset($_SESSION['user']) && $_SESSION['usertype'] == 1){ 



}else{
    header('Location: ../../blog');
}


?>
<a class="btn alert-warning " style="margin:auto; display:flex; justify-content:center;" href="../admin.php">Volver</a>

<a href="../cargarimg" class="btn alert-info " style="margin:auto; display:flex; justify-content:center; margin-top:10px;">Cargar imagenes a la galeria</a>
<h1 class="tituloadmin">Modificar Publicacion.</h1>
<div class="publinovedades">


    
    
     <div id="div_file2">
			<p>Adjuntar imagen o video.</p>
			<br><br><br>
            <form action="" id="novedades" method="POST" enctype="multipart/form-data">
			<input id="btn_enviar" type="file" class="subir" name="publica" accept=".zip,.rar,.txt,.docx,.pdf,.mp4,.jpg,.png,.jpeg,.webp" >
           
           
		</div>
        
        </div>
        <div id="resultfoto" style="text-align: center;"></div>
        <div style="justify-content:center;  margin:auto; display:flex; margin:40px;">
        
        
        <input type="submit" class="btnpublicar" name="subir" value="Guardar">
        
</form>

<button class="btnpublicar btn btn-danger" value="<?php echo $_GET['modifi'] ;?>" id="borrarfoto">Borrar foto</button>
</div>
<form action="" id="novedades" method="POST" enctype="multipart/form-data">
<div id="div_file22" style="display:flex;justify-content:center;margin:auto;">
			<p>Adjuntar imagen de portada</p>
			<br><br><br>
			<input id="btn_enviar2" type="file" class="subir" name="publicaportada" accept=".jpg,.png,.jpeg,.webp" >
		</div>
        <div id="resultportada" style="text-align: center;"></div>
        <div style="justify-content:center;  margin:auto; display:flex; margin:40px;">
       
        <input type="submit" class="btnpublicar" name="subirportada" value="Guardar">
        
    </form>

    
<button class="btnpublicar btn btn-danger"  value="<?php echo $_GET['modifi'] ;?>" onclick="event.preventDefault();" id="borrarportada">Borrar portada</button> 
</div>
<form action="" id="novedades" method="POST" enctype="multipart/form-data">
    
<div class="form__group">
  <input type="text" class="form__input" name="titulo" value="<?php echo $pub['titulo'] ; ?>" style=" margin-bottom:40px;" id="titulo" placeholder="Titulo"  />

</div>
<p style="text-align:center; font-size:18px;">Descripcion corta de la publicacion:</p>
        <div style="justify-content: center; display:flex; margin:auto; align-items:center; ">
      
        <textarea type="text" class="shortdescription" name="shortdescription" id="shortdescription" style="width: 400px; height:250px; padding:10px;"><?php echo $pub['shortdescription'] ; ?></textarea> 
     
        </div>
        <div  onclick="location.reload()" class="actualizador"><i class="fas fa-sync"></i></div>
        <p style="text-align:center; margin-top:50px; font-size:18px;">Informacion de toda la publicacion</p>
        <textarea type="text" class="descripcion" name="txtDescripcion" id="editor1" rows="200"  cols="80">
     <?php echo $pub['descripcion'] ; ?> 
     
        </textarea> 
        <script>
            // Replace the <textarea id="editor1"> with a CKEditor 4
            // instance, using default configuration.
            CKEDITOR.replace('editor1');
           
        </script>
        <div class="publinovedades">
    <input type="submit" class="btnpublicar" name="Publicar" onclick="stopDefAction(event)" value="Publicar">
</div>
</form>

<p>Tus publicaciones actuales son:</p>
<div class="publicaciones"><?php



include "../../funciones/muestramodificacion.php" 

?></div>




<div class="ayudamenu">

<?php include "../../../Content/menu.php"; 

?>
</div>
    <script src="../../js/blog.js"></script>
    <script src="../../../public/scripts.js"></script>


    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>
   

    <script src="./borrar.js"></script>
    
<script>
if (window.history.replaceState) { // verificamos disponibilidad
    window.history.replaceState(null, null, window.location.href);
}

</script>
<?php
}
?>

</body>
</html>