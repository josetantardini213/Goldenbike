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
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="./ckeditor/ckeditor.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4f3bb1a9fe.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>.navbar-nav {
    float: left;
    margin: 0;
    left: 50%;
    transform: translatex(-50%);
    position: relative;}

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
<div class="container">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
                            <a class="nav-link" href="../../../blog">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../admin">Admin blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../conexiones">Conexiones y visitas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../cargarimg">Cargar imagenes a la galeria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../links">Links</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./linkspublicidad">Links tiendas</a>
                        </li>
                    </ul>
                
                </div>
            </div>
        </nav>

</div>
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





    <script src="../../js/blog.js"></script>
    <script src="../../../public/scripts.js"></script>



   

    <script src="./borrar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

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