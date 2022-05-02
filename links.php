<!DOCTYPE html>
<html lang="en">

<head>
<?php include "./Content/head.php"; ?>    


    <link rel="stylesheet" href="./public/links.css?n=6">
    <link rel="stylesheet" href="./public/styles.css?n=6">
    <link rel="stylesheet" href="./preloader/preloader.css?n=6">
    <link rel="stylesheet" href="./public/footer.css?n=6">

       
    <link rel="icon" href="./img/favicon.svg" type="image/svg+xml">
    <link rel="icon" href="./img/favicon.png" type="image/png">
    <?php include "./Content/analiticpersonalizado.php"; ?>

    <?php include "./Content/analitic.php"; ?>

</head>
<body>

    
<div class="loading" id="loading">
<div id="loading-center">
<div id="loading-center-absolute">
<img src="https://www.goldenbike.com.ar/img/Goldenbike-logo-blanco.svg"  width=100% alt="">
<!--<img src="https://goldenbike.com.ar/img/rueda.svg" alt="rueda">-->
</div>
</div>
 
</div>
<?php
include "./novedades/funciones/conexion.php";

    if(isset($_GET['val'])){
        $valor = $_GET['val'];


        $guarda = "SELECT * FROM links WHERE palabraclave='$valor' ";
    
        $noguarda=mysqli_query($conexion,$guarda); 
        $cont = 0;
    if(mysqli_num_rows($noguarda)>0){
       
        if($datos=mysqli_fetch_array($noguarda)){

                $texto = $datos['texto'];



        }

        
    }else{
        ?>
        <script>
            location.replace('https://goldenbike.com.ar');  
        </script>
        <?php
    }

    }else{
        ?>
        <script>
            location.replace('https://goldenbike.com.ar');  
        </script>
        <?php
    
}


?>
    <div class="content">

        <img src="./img/123123.jpg" style="border-radius: 1000px !important; " alt="logo">
       <div class="divcontentitulo">
        <h1 class="especialtitulo2">Goldenbike </h1> <h1 class="especialtitulo23"> argentina</h1>
       </div>
       <div class="divcontentitulo">
        <h2><a class="especialmonserrat">¡Elegí tu sucursal de preferencia y</a> <a class=".especialmonserrat3">accedé a nuestros descuentos exclusivos!</a> </h2>
        </div>
        <button onclick="capital()"><img src="./img/locationicon.png" width="20px">Capital Federal</button>

        <div class="contentcapital" id="contentcapitalfederal" style="display: none; width: 100%; font-family:monserrat;">
            <a href="https://wa.me/+541160245887?text=<?php echo $texto; ?>" target="_blank"><button><img src="./img/locationicon.png" width="20px">Villa Urquiza</button></a>
            <a href="https://wa.me/+541159109911?text=<?php echo $texto; ?>" target="_blank"> <button><img src="./img/locationicon.png" width="20px">Villa Devoto</button></a>
            <a href="https://wa.me/+541164555978?text=<?php echo $texto; ?>" target="_blank"> <button><img src="./img/locationicon.png" width="20px">Belgrano</button></a>
            <a href="https://wa.me/+541149494356?text=<?php echo $texto; ?>" target="_blank"> <button><img src="./img/locationicon.png"  width="20px">Cañitas</button></a>
            <a href="https://wa.me/+541130098055?text=<?php echo $texto; ?>" target="_blank"> <button><img src="./img/locationicon.png" width="20px">Recoleta</button></a>
            <a href="https://wa.me/+541121807114?text=<?php echo $texto; ?>" target="_blank"> <button><img src="./img/locationicon.png" width="20px">Caballito</button></a>


        </div>

        <button onclick="gbanorte()"><img src="./img/locationicon.png" id="gbanorte" width="20px">Gba Norte</button>



        <div class="contentcapital" id="contentgbanorte" style="display: none; width: 100%; font-family:monserrat;">
        <a href="https://wa.me/+541154887206?text=<?php echo $texto; ?>" target="_blank"> <button><img src="./img/locationicon.png" width="20px">Acasusso</button></a>
        <a href="https://wa.me/+541171548659?text=<?php echo $texto; ?>" target="_blank">  <button><img src="./img/locationicon.png" width="20px">Nordelta</button></a>
        <a href="https://wa.me/+541123269901?text=<?php echo $texto; ?>" target="_blank">   <button><img src="./img/locationicon.png" width="20px">Tortugas Open Mall</button></a>
        <a href="https://wa.me/+541178955556?text=<?php echo $texto; ?>" target="_blank">   <button><img src="./img/locationicon.png"  width="20px">San Miguel</button></a>
        <a href="https://wa.me/+541126670344?text=<?php echo $texto; ?>" target="_blank">  <button><img src="./img/locationicon.png" width="20px">Olivos</button></a>


        </div>



        <button onclick="gbaoeste()"><img src="./img/locationicon.png" id="gbaoeste" width="20px">Gba Oeste</button>


        <div class="contentcapital" id="contentgbaoeste" style="display: none; width: 100%;">
        <a href="https://wa.me/+541124590696?text=<?php echo $texto; ?>" target="_blank">   <button><img src="./img/locationicon.png" width="20px">Parque Leloir</button></a>




        </div>


        <button onclick="gbasur()"><img src="./img/locationicon.png" id="gbasur" width="20px">Gba Sur</button>


        <div class="contentcapital" id="contentgbasur" style="display: none; width: 100%;">
        <a href="https://wa.me/+541127810208?text=<?php echo $texto; ?>" target="_blank"> <button><img src="./img/locationicon.png" width="20px">Lomas de Zamora</button></a>
        <a href="https://wa.me/+541158976645?text=<?php echo $texto; ?>" target="_blank"> <button><img src="./img/locationicon.png" width="20px">Monte Grande</button></a>
        <a href="https://wa.me/+541130253574?text=<?php echo $texto; ?>" target="_blank">  <button><img src="./img/locationicon.png" width="20px">Quilmes</button></a>


        </div>


        <button onclick="provincia()"><img src="./img/locationicon.png" id="provincia" width="20px">Pcia. de BA</button>


        <div class="contentcapital" id="contentprovincia" style="display: none; width: 100%;">
      
        <a href="https://wa.me/+5492284521334?text=<?php echo $texto; ?>" target="_blank"> <button><img src="./img/locationicon.png" width="20px">Olavarria</button></a>



        </div>





        <div class="redes">
            <a href="https://www.instagram.com/goldenbike_arg/" target="_blank"><i class="fa fa-instagram"  style='font-size:20px;'></i></a>
            <a href="https://ar.linkedin.com/company/goldenbike" target="_blank"><i class="fa fa-linkedin"  style='font-size:20px;'></i></a>
            <a href="https://www.facebook.com/GOLDENBIKE.ARG/" target="_blank"><i class="fa fa-facebook"  style='font-size:20px; padding-left: 23px; padding-right: 23px;' ></i></a>
            <a href="https://twitter.com/goldenbike_arg" target="_blank"><i class="fa fa-twitter" style='font-size:20px;'></i></a>


        </div>




    </div>


    <script>
        function capital() {
            $('#contentcapitalfederal').toggle(500);

        }



        function gbanorte() {
            $('#contentgbanorte').toggle(500);

        }

        function gbaoeste() {
            $('#contentgbaoeste').toggle(500);

        }

        function gbasur() {
            $('#contentgbasur').toggle(500);

        }

        function provincia() {
            $('#contentprovincia').toggle(500);

        }
    </script>
    <script src="./public/scripts.js"></script>

</body>

</html>