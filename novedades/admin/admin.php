<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <link rel="stylesheet" href="../../public/styles.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../../preloader/preloader.css">
    <title>Goldenbike-Admin</title>
    <link rel="icon" href="../../img/favicon.svg" type="image/svg+xml">
    <link rel="icon" href="../../img/favicon.png" type="image/png">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="theme-color" content="#B99F5A" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4f3bb1a9fe.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:700|Raleway:500.700">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="./modificar/ckeditor/ckeditor.js"></script>

<style>
    .alert-success {
        text-align: center;
    }
 

</style>

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
    
<?php
session_start();
if(isset($_SESSION['user']) && $_SESSION['usertype'] == 1){ 



}else{
    header('Location: ../../blog');
}


?>

<div class="container">

<a class="btn alert-warning " style="margin:auto; display:flex; justify-content:center;" href="../../blog">Volver</a>

<a class="btn alert-info " style="margin:auto; display:flex; justify-content:center;  margin-top:10px;" href="conexiones">Conexiones y visitas</a>
<a class="btn alert-info " style="margin:auto; display:flex; justify-content:center;  margin-top:10px;" href="links">Links</a>





<a href="./cargarimg" class="btn alert-info " style="margin:auto; display:flex; justify-content:center; margin-top:10px;">Cargar imagenes a la galeria</a>




<h1 class="tituloadmin">Publicar contenido.</h1>

<button type="button" class="btn btn-primary" style="display: flex; justify-content:center; margin:auto;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Crear contenido
          </button>

    
</div>



<div class="modal fade" id="staticBackdrop"   data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content modal-lg" >
      <div class="modal-header" >
        <h5 class="modal-title"  id="staticBackdropLabel">Publicar en blog</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <h1 class="tituloadmin">Publicar contenido.</h1>



        
<div class="publinovedades">
<form action="" id="novedades" method="POST" enctype="multipart/form-data">
	
<div class="form__group">
  <input type="text" class="form__input" name="titulo" id="titulo" placeholder="Titulo"  />

</div>
    
	
<div class="form__group">
  <input type="text" class="form__input" style="margin-top:20px;" name="url" id="url" required placeholder="Texto de la url solo minusculas y sin 'ñ'"  />

</div>
    

    
     <div id="div_file2" style="display:flex;justify-content:center;margin:auto; margin-top:20px;">
			<p>Adjuntar imagen o video.</p>
			<br><br><br>
			<input id="btn_enviar" type="file" class="subir" name="publica" accept=".zip,.rar,.txt,.docx,.pdf,.mp4,.jpg,.png,.jpeg,.webp" >
		</div>
        <div id="div_file22" style="display:flex;justify-content:center;margin:auto; margin-top:20px;">
			<p>Adjuntar imagen de portada</p>
			<br><br><br>
			<input id="btn_enviar2" type="file" class="subir" name="publicaportada" accept=".jpg,.png,.jpeg,.webp" >
		</div>
        </div>
        <p style="text-align:center; font-size:18px;">Descripcion corta de la publicacion:</p>
        <div style="justify-content: center; display:flex; margin:auto; align-items:center;  ">
      
        <textarea type="text" class="shortdescription" name="shortdescription" id="shortdescription" style="width: 400px; height:250px; padding:10px;"></textarea> 
     
        </div>
        <p style="text-align:center; margin-top:50px; font-size:18px;">Informacion de toda la publicacion</p>
        <textarea type="text" class="descripcion" name="txtDescripcion" id="editor1" rows="200"  cols="80">
     
        </textarea> 
  
        <div class="publinovedades">
    <input type="submit" class="btnpublicar" name="Publicar"  value="Publicar">
</div>
</form>      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>





<p style="text-align: center;">Tus publicaciones actuales son:</p>
<div class="publicaciones"><?php
include "../funciones/admin.php";
include "../funciones/muestrapubli.php";
?></div>
<div class="ayudamenu">
<?php include "../../Content/menu.php"; ?>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


<script src="../../public/scripts.js"></script>
<script src="../js/blog.js"></script>



    
    <script>
            CKEDITOR.replace('editor1');
        </script>

        <script>
            if (window.history.replaceState) { // verificamos disponibilidad
    window.history.replaceState(null, null, window.location.href);
}
        </script>
</body>
</html>


