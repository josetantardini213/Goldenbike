<!DOCTYPE html>

<html lang="en">
<?php 
    
    session_start();
if(isset($_SESSION['user']) && $_SESSION['usertype'] == 1){ 



}else{
    header('Location: ../../blog');
}

    ?>
<head>

<style>.navbar-nav {
    float: left;
    margin: 0;
    left: 50%;
    transform: translatex(-50%);
    position: relative;}

	</style>
  <?php include "../../Content/head.php"; ?>
  <link rel="stylesheet" href="./style/stylecargaimg.css">
  <link rel="icon" href="../../img/favicon.svg" type="image/svg+xml">
    <link rel="icon" href="../../img/favicon.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:700|Raleway:500.700">
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
                            <a class="nav-link" href="../../blog">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./admin">Admin blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./conexiones">Conexiones y visitas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./cargarimg">Cargar imagenes a la galeria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./links">Links</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./linkspublicidad">Links tiendas</a>
                        </li>
                    </ul>
                
                </div>
            </div>
        </nav>

</div>
<?php







if (isset($_FILES['imagen'])){
	
	$cantidad= count($_FILES["imagen"]["tmp_name"]);
	$valoralazar = 0;
	for ($i=0; $i<$cantidad; $i++){
	//Comprobamos si el fichero es una imagen
	if ($_FILES['imagen']['type'][$i]=='image/png' || $_FILES['imagen']['type'][$i]=='image/jpeg' || $_FILES['imagen']['type'][$i]=='image/webp'){
	


		$total_imagenes = count(glob('../../galeria/'.$valoralazar.$_FILES["imagen"]["name"][$i],GLOB_BRACE));


		while($total_imagenes>0){


			$valoralazar +=1; 


			$total_imagenes = count(glob('../../galeria/'.$valoralazar.$_FILES["imagen"]["name"][$i],GLOB_BRACE));
		}



	



	//Subimos el fichero al servidor



	move_uploaded_file($_FILES["imagen"]["tmp_name"][$i],'../../galeria/'.$valoralazar.$_FILES["imagen"]["name"][$i]);
	$validar=true;
	}
	else $validar=false;
	
	
}
}

?>
<div class="subirimg">
<form method="post" action="?" enctype="multipart/form-data">
<input type="file" name="imagen[]" value="" multiple><br>

<input type="submit" value="Subir Imagen">
</form>






</div>
<div id="contenidoinfo" class="contentmuestraimg"></div>

<script>



function borrar(file){


	$.ajax({
			type: 'POST',
			url: './infoimg.php',
			data: {
				'borrar': 'borrar',
				'file': file

			},
			beforeSend: function() {
				$('#contenidoinfo').html('...')

			}
		})
		.done(function(response) {
			$('#contenidoinfo').html(response)

		})


	}



</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


<script>
  $('#contenidoinfo').load('./infoimg.php');


  if (window.history.replaceState) { // verificamos disponibilidad
    window.history.replaceState(null, null, window.location.href);
}


</script>
    
</body>
</html>