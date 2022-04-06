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
  <?php include "../../Content/head.php"; ?>
  <link rel="stylesheet" href="./style/stylecargaimg.css">
  <link rel="icon" href="../../img/favicon.svg" type="image/svg+xml">
    <link rel="icon" href="../../img/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>

<a class="btn alert-warning " style="margin:auto; display:flex; justify-content:center;" href="admin">Volver</a>
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



<script>
  $('#contenidoinfo').load('./infoimg.php');


  if (window.history.replaceState) { // verificamos disponibilidad
    window.history.replaceState(null, null, window.location.href);
}


</script>
    
</body>
</html>