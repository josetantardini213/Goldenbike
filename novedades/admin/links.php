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
    
    session_start();
if(isset($_SESSION['user']) && $_SESSION['usertype'] == 1){ 



}else{
    header('Location: ../../blog');
}

    ?>
<head>
<?php include "../../Content/head.php"; ?>
  <link rel="icon" href="../../img/favicon.svg" type="image/svg+xml">
    <link rel="icon" href="../../img/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style/links.css">

</head>
<body>

<a class="btn alert-warning " style="margin:auto; display:flex; justify-content:center;" href="admin">Volver</a>


<div class="contentlinks">
<input type="text" id="palabraclave" placeholder="Palabra clave">
<input type="text" id="textowpp" placeholder="Texto de mensaje whatssap">
<button onclick="cargar()">Guardar</button>
</div>
<div id="result"></div>



    
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