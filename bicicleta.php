<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include "./Content/head.php";
    ?>
    <link rel="manifest" href="./manifest.json">

    <link rel="stylesheet" href="./public/landingbicicletas.css">
<link rel="stylesheet" href="./preloader/preloader.css">    
<link rel="icon" href="./img/favicon.svg" type="image/svg+xml">
    <link rel="icon" href="./img/favicon.png" type="image/png">
  
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
 <!--<script src='./lib/elevatezoom-master/jquery-1.8.3.min.js'></script>
  <script src='./lib/elevatezoom-master/jquery.elevatezoom.js'></script>-->
  <script>
window.onload = function() {
    $("#loading").fadeOut("slow");
    muestra()
};


</script>
</head>
<body>
  <?php
  
  

$ubiar= $_GET['b'];



$archivo = "./carrusel/carrucelbicicletas.xlsx";



 include "./Content/menu.php";


require_once './landing/phpexcel/Classes/PHPExcel.php';




$inputFileType = PHPExcel_IOFactory::identify($archivo);
$objReader = PHPExcel_IOFactory::createReader($inputFileType);
$objPHPExcel = $objReader->load($archivo);


$sheet = $objPHPExcel->getSheet(0);
$highestRow = $sheet -> getHighestRow();
$highestColumn = $sheet -> getHighestColumn();







  ?>
<?php
       $cont = 0;
       for ($fila = 2; $fila <= $highestRow; $fila++){
            if($sheet->getCell("I".$fila)->getValue() == $ubiar){
                $cont++;
                ?>
<div class="contenedorlogo">
  <img src="./img/Group.svg" alt="vairo">

</div>
<div class="contenido">
<div class="imgbicicleta">
  <div class="titulos">
  <h1><?php echo $sheet->getCell('B'.$fila)->getValue(); ?></h1>
  <p><?php echo $sheet->getCell('L'.$fila)->getValue(); ?></p>
</div>


            
       

  <img src="./catalogoimg/<?php echo $sheet->getCell('D'.$fila)->getValue(); ?>"  id="zoom_01" alt="Bicicleta">

</div>
</div>

<div class="especificaciones">

  <div class="especificaciones-contenido">
    <h1>Especificaciones técnicas</h1>
    <p>
    <?php echo $sheet->getCell('J'.$fila)->getValue(); ?>
     
      
      
    </p>

</div>

</div>
<?php } }?>
<div class="modelos">
  <h1>Mirá estos modelos</h1>
</div>



  <div class="modelosimg">
  <?php     $cont = 0;
       for ($fila = 2; $fila <= $highestRow; $fila++){
            if($sheet->getCell("K".$fila)->getValue() == 1){
                $cont++;
                ?>
      <img src="./catalogoimg/<?php echo $sheet->getCell('D'.$fila)->getValue(); ?>" alt="Bicicleta">
      <?php }} ?>
  </div>


  
  <script src="./public/scripts.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
  $('.modelosimg').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: false,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
      }
    },
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
    // You can unslick at a given breakpoint now by adding:

});



</script>
<!--
<script>

  $(window).width();

 
if($(window).width() > 768){
  $('#zoom_01').elevateZoom({
    cursor: "crosshair",  
    zoomWindowFadeIn: 200, 
    zoomWindowFadeOut: 200,
    zoomLevel: 0.8,
    scrollZoom: true,
    zoomWindowPosition: 11,
    borderSize: 0,
    borderColour: '#fff',
    lensFadeIn: 200, 
    lensFadeOut: 200,
    lensSize: 500,
    lensShape: 'round',
    lensBorderSize: 0,
    lensBorderColour: '#fff',
    containLensZoom: true,
    lensBorderSize: 0,





    //default zoom level of image

  }); 


}else{
  $('#zoom_01').elevateZoom({
      zoomType: "inner",
      cursor: "crosshair",
      zoomWindowFadeIn: 500,
      zoomWindowFadeOut: 750
    });
}
</script>
-->

</body>
</html>