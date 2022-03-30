<!DOCTYPE html>
<html lang="en">

<head>
<?php include "./Content/head.php"; ?>    
    
    <link rel="stylesheet" href="./public/styles.css">
    <link rel="stylesheet" href="./public/sass.css">
    <link rel="stylesheet" href="./preloader/preloader.css">
    <link rel="stylesheet" href="./landing/css/style.css">
   
  
    <link rel="icon" href="./img/favicon.svg" type="image/svg+xml">
    <link rel="icon" href="./img/favicon.png" type="image/png">
    
    <?php include "./Content/analiticpersonalizado.php"; ?>

    <?php include "./Content/analitic.php"; ?>    


</head>

<body>
    

<?php
$ubiar= $_GET['landing'];



$archivo = "./landing/landinginfo/$ubiar.xlsx";


if(file_exists($archivo)){

}else{
?>
<script>
    window.location.replace("https://www.goldenbike.com.ar");
</script>
<?php
}
 include "./Content/menu.php";


require_once './landing/phpexcel/Classes/PHPExcel.php';




$inputFileType = PHPExcel_IOFactory::identify($archivo);
$objReader = PHPExcel_IOFactory::createReader($inputFileType);
$objPHPExcel = $objReader->load($archivo);


$sheet = $objPHPExcel->getSheet(0);
$highestRow = $sheet -> getHighestRow();
$highestColumn = $sheet -> getHighestColumn();




?>

    <!-- video del sitio -->


    <div class="videohome">
    
  
<img class="imagenlanding" src="./img/<?php 
for ($fila = 2; $fila <= $highestRow; $fila++){
    echo $sheet->getCell("F".$fila)->getValue();
}
 ?>" style="width:100%; " alt="">
<h1 class="hola">GOLDENBIKE <a href="#"><?php 
for ($fila = 2; $fila <= $highestRow; $fila++){
    echo "".$sheet->getCell("A".$fila)->getValue();
}
 ?></a></h1>

    </div>

    <section>


<div class="nuestratienda">
<h1 class="h1tiendas" style="padding:;  z-index:10;"><a href="<?php for ($fila = 2; $fila <= $highestRow; $fila++){
    echo $sheet->getCell("E".$fila)->getValue();
} ?>" target="_blank"><i class="fab fa-whatsapp iconolanding" style="margin-right:100px; margin-left:100px; padding-left:24px; padding-right:24px;" ></a></i><i class="far fa-clock iconolanding" id="horarios"  style="margin-right:100px; cursor:pointer;"></i><i class="fas fa-search-location iconolanding" id="ubicacion"  style="margin-right:100px; cursor:pointer;"></i></h1>      
<div class="pdentrop" >
        <h1  id="textograndegolden" style="  transition: 0.1s;">GOLDENBIKE</h1>
        </div>
      

</div>
</section>


<section>
<div class="contenthorario">
<header><h1 id="horarios2">HORARIO</h1></header>
   <?php 
for ($fila = 2; $fila <= $highestRow; $fila++){
    echo "<p>".$sheet->getCell("B".$fila)->getValue()." ".$sheet->getCell("C".$fila)->getValue()."</p>";
}
?>
</div>



</section>

<div class="mapalanding">
<h1>¿Cómo Llego?</h1>

<?php for ($fila = 2; $fila <= $highestRow; $fila++){
    echo $sheet->getCell("D".$fila)->getValue();
}  ?>
</div>

    <section>
        <div class="iconos2"  style="background-color: white; margin-top:50px;">
            <div class="containeres">
                <div class="row">
                    <div class="col-md-3 wow fadeInDown aparece" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown;">
                        <i class="fas fa-shipping-fast"></i>
                        <h1>Envíos</h1>
                        <p>Todas tus compras se encuentran bajo el control y el resguardo de los mejores profesionales en el área. Garantizando una entrega ágil, segura y sin complicaciones.</p>
                    </div>
                    <div class="col-md-3 wow fadeInDown aparece" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInDown;">
                        <i class="fas fa-comments"></i>
                        <h1>Atención personalizada</h1>
                        <p>Nuestras sucursales cuentan con un amplio equipo de expertos en atención al cliente. Aseguramos una experiencia de usuario personalizada e inigualable.</p>
                    </div>
                    <div class="col-md-3 wow fadeInDown aparece" data-wow-duration="1s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInDown;">
                        <i class="fa fa-map-marker"></i>
                        <h1>Cerca tuyo</h1>
                        <p>Nos encontramos en los puntos más importantes del país. Seleccionamos estratégicamente cada ubicación para que puedas tenernos cerca, siempre.</p>
                    </div>
                    
                    <div class="col-md-3 wow fadeInDown aparece" data-wow-duration="1s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInDown;">
                        <i style="color:black;" class="fas fa-credit-card"></i>
                        <h1>Compra segura</h1>
                        <p>Contamos con todos los medios de pago. Además podes financiar tus transacciones en hasta 12 cuotas sin interés con todas las tarjetas bancarias.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <?php
include "./Content/footer.php";
?>

    <script src="./public/star.js"></script>
    <script src="./public/scripts.js"></script>
 
<script>
$("#horarios").click(function() {
 $('html, body').animate({
 scrollTop: $("#horarios2").offset().top
 }, 2000);
});

$("#ubicacion").click(function() {
 $('html, body').animate({
 scrollTop: $("#mapas2").offset().top
 }, 2000);
});


</script>        

</body>
        </html>