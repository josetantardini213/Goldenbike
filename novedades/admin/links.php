<!DOCTYPE html>
<html lang="en">
<?php

session_start();
if(isset($_SESSION['user']) && $_SESSION['usertype'] == 1){ 



}else{
    header('Location: ../../blog');
}
?>  
<?php 
    
if(isset($_SESSION['user']) && $_SESSION['usertype'] == 1){ 



}else{
    header('Location: ../../blog');
}

    ?>
<head>
<?php include "../../Content/head.php"; ?>

  <link rel="icon" href="../../img/favicon.svg" type="image/svg+xml">
    <link rel="icon" href="../../img/favicon.png" type="image/png">
    <link rel="stylesheet" href="./style/links.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:700|Raleway:500.700">
<style>.navbar-nav {
    float: left;
    margin: 0;
    left: 50%;
    transform: translatex(-50%);
    position: relative;}

	</style>
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



<div class="contentlinks">
<input type="text" id="palabraclave" placeholder="Palabra clave">
<input type="text" id="textowpp" placeholder="Texto de mensaje whatssap">
<button onclick="cargar()">Guardar</button>
</div>
<div id="result"></div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    
<script>
  $('#result').load('./cargarlinks.php');



function cargar(){

  palabraclave = document.getElementById("palabraclave").value;
  textowpp = document.getElementById("textowpp").value;


    textowpp = textowpp.replace(/\s/g,"%20");







	$.ajax({
			type: 'POST',
			url: './cargarlinks.php',
			data: {
				'cargar': 'cargar',
				'palabraclave': palabraclave,
                'textowpp' : textowpp,

			},
			beforeSend: function() {
				$('#result').html('...')
                

			}
		})
		.done(function(response) {
			$('#result').html(response)

		})


	}


    
function borrar(palabraclave){

console.log(palabraclave)
$.ajax({
        type: 'POST',
        url: './cargarlinks.php',
        data: {
            'borrar': 'borrar',
            'palabraclave': palabraclave

        },
        beforeSend: function() {
            $('#result').html('...')

        }
    })
    .done(function(response) {
        $('#result').html(response)

    })


}



</script>
</body>
</html>