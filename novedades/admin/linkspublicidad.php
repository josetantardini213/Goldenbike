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

    <style>
        .btneditar{
            background-color: blue;
            color: white;
            padding:8px;
            text-decoration: none;
            border-radius: 10px;
            margin-top: 10px;
        }
        .btneditar:hover{
            color: white;
        }
    </style>
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

    .selectvisibility{

        margin-top: 20px;

        border-radius: 10px;
        padding: 20px;

    }
    .file{
        color: white;
    }
    .title{
        display: flex;
        justify-content: center;
        margin-top: 80px;
    }


    
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


<div class="title">
    <h1>Carga de links personalizados individual para cada tienda</h1>
</div>




<div class="contentlinks">
<select class="form-select text-center" id="tienda" aria-label="Default select example">
  <option  value="">Seleccione tienda</option>
  <option value="villaurquiza">Villa Urquiza</option>
  <option value="villadevoto">Villa Devoto</option>
  <option value="belgrano">Belgrano</option>
  <option value="canitas">Cañitas</option>
  <option value="recoleta">Recoleta</option>
  <option value="caballito">Caballito</option>
  <option value="saavedra">Saavedra</option>
  <option value="acassuso">Acassuso</option>
  <option value="nordelta">Nordelta</option>
  <option value="olivos">Olivos</option>
  <option value="tom">TOM</option>
  <option value="sanmiguel">San Miguel</option>
  <option value="parqueleloir">Parque Leloir</option>
  <option value="lomasdezamora">Lomas de Zamora</option>
  <option value="quilmes">Quilmes</option>
  <option value="montegrande">Monte Grande</option>
  <option value="olavarria">Olavarria</option>
  <option value="nunez">Núñez</option>
  <option value="villaluro">Villa Luro</option>
  <option value="sanjuan">San Juan</option>
  
</select>

<input type="text" id="textowpp"  placeholder="Texto de mensaje whatssap">
<input type="text" id="title" placeholder="Titulo de la publicidad">
<input type="file" id="afile"  class="file"  required/>
<select class="selectvisibility" id="visibilidad" aria-label="Default select example">
  <option  value="1">visibilidad</option>
  <option value="1">Visible</option>
  <option value="0">No visible</option>
</select>
<button onclick="cargar()">Guardar</button>
</div>
<div id="result"></div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    
<script>
  $('#result').load('./cargalinkspubli.php');



function cargar(){

  titulo = document.getElementById("title").value;
  textowpp = document.getElementById("textowpp").value;

  tienda = document.getElementById("tienda").value;
  visibi = document.getElementById("visibilidad").value;

    textowpp = textowpp.replace(/\s/g,"%20");

    file_data = $('#afile').prop('files')[0];   

    var form_data = new FormData();                  
            form_data.append('cargar', 'cargar');
            form_data.append('afile', file_data);
            form_data.append('titulo', titulo);
            form_data.append('textowpp', textowpp);
            form_data.append('tienda', tienda);
            form_data.append('visibility', visibi);



            $.ajax({
                url: './cargalinkspubli.php', 
                type: 'post',
                dataType: 'html',
                data: form_data ,                         
                processData:false,
                cache:false,
                contentType: false,
                success: function(data, textStatus, jqXHR){
                    $("#result").html(data);
                   
                }
             })


	}


    
function borrar(id){

console.log(id)
$.ajax({
        type: 'POST',
        url: './cargalinkspubli.php',
        data: {
            'borrar': 'borrar',
            'id': id

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