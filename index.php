<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./Content/head.php"; ?>    


    <link rel="stylesheet" href="public/styles.css">
    <link rel="stylesheet" href="public/sass.css">
    <link rel="stylesheet" href="preloader/preloader.css">
    <link rel="stylesheet" href="./public/carrusel.css">

    
    <link rel="icon" href="./img/favicon.svg" type="image/svg+xml">
    <link rel="icon" href="./img/favicon.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
   
   <?php include "./Content/analiticpersonalizado.php"; ?>
   
    <?php include "./Content/analitic.php"; ?>    

   
</head>

<body>





<?php
 include "./Content/menu.php";


 $archivo = "./carrusel/carruselproductos.xlsx";

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


    <img src="./img/portada_02.webp" width="100%" alt="Portada">

        <!--<iframe width="100%" height="900" src="https://www.youtube.com/embed/3PuufyEmT8Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->

        <div class="texto">
            <div class="container">
                <p class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInDown; font-family:bebaschiqui !important; margin-bottom:10px;">WE ARE</p>
                <h2 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s" id="head" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInDown;"></h2>


            </div>
        </div>
    </div>


<div class="botonimage">

            
         <img src="./img/raleigth-01.svg" alt="imagen-releight">
 
  
         <img src="./img/VAIRO-01.svg" alt="imagen-releight">
 
                
            
        </div>


<div class="mensajeespecial">

<p>Seleccione la tienda en la cual desea comprar su bicicleta</p>

</div>



        <div class="center">
       
       <?php
       $cont = 0;
       for ($fila = 2; $fila <= $highestRow; $fila++){
   if($sheet->getCell("A".$fila)->getValue() != ""){
       $cont +=1;
?>
        <div class="element">
            <img src="<?php  echo "./catalogoimg/".$sheet->getCell("D".$fila)->getValue(); ?>" id='<?php echo $cont; ?>' alt="Bicicleta">
            <h2><?php  echo $sheet->getCell("A".$fila)->getValue(); ?></h2>
            <p class="especial"><?php  if($sheet->getCell("B".$fila)->getValue() != "") { echo "$".number_format($sheet->getCell("B".$fila)->getValue(),2, ',','.'); }?></p>
            <p><strong><?php  if($sheet->getCell("C".$fila)->getValue() != "") { echo "$".number_format($sheet->getCell("C".$fila)->getValue(),2, ',','.'); }?></strong></p>
        </div>
       <?php }} ?>
    </div>



  <!--
    <div id="slider" class="slider">
	<div id="track"  class="slide-track">
    <div class="slide">
			<img src="./img/trek-01.svg" height="100" width="250" alt="" />
		</div>
        <div class="slide">
			<img src="./img/raleigth-01.svg" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="./img/venzo-01.svg" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="./img/VAIRO-01.svg" height="100" width="250" alt="" />
		</div>
        <div class="slide">
			<img src="./img/volta-01.svg" height="100" width="250" alt="" />
		</div>

        <div class="slide">
			<img src="./img/trek-01.svg" height="100" width="250" alt="" />
		</div>
        <div class="slide">
			<img src="./img/raleigth-01.svg" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="./img/venzo-01.svg" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="./img/VAIRO-01.svg" height="100" width="250" alt="" />
		</div>
        <div class="slide">
			<img src="./img/volta-01.svg" height="100" width="250" alt="" />
		</div>

        <div class="slide">
			<img src="./img/trek-01.svg" height="100" width="250" alt="" />
		</div>
        <div class="slide">
			<img src="./img/raleigth-01.svg" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="./img/venzo-01.svg" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="./img/VAIRO-01.svg" height="100" width="250" alt="" />
		</div>
        <div class="slide">
			<img src="./img/volta-01.svg" height="100" width="250" alt="" />
		</div>

        <div class="slide">
			<img src="./img/trek-01.svg" height="100" width="250" alt="" />
		</div>
        <div class="slide">
			<img src="./img/raleigth-01.svg" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="./img/venzo-01.svg" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="./img/VAIRO-01.svg" height="100" width="250" alt="" />
		</div>
        <div class="slide">
			<img src="./img/volta-01.svg" height="100" width="250" alt="" />
		</div>

        <div class="slide">
			<img src="./img/trek-01.svg" height="100" width="250" alt="" />
		</div>
        <div class="slide">
			<img src="./img/raleigth-01.svg" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="./img/venzo-01.svg" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="./img/VAIRO-01.svg" height="100" width="250" alt="" />
		</div>
        <div class="slide">
			<img src="./img/volta-01.svg" height="100" width="250" alt="" />
		</div>
	</div>
</div>

        -->
    <!-- tarjetas -->
    <!--<section class="franquiciascontent">
        
       
        <h3 class="h3 aparece" style="font-size:87px;">SUMATE A LA CADENA DE BICICLETERÍAS <h3 class="h3 aparece" style="color:rgb(185,159,90); font-size:127px;">MÁS GRANDE DEL PAÍS</h3></h3>
        

        <div class="seccionfran aparece">



            <a class="botonfran" href="./franquicias">FRANQUICIA</a>

        </div>
        <div class="imgfranquicias aparece">
            <img class="imgfranqui" src="img/1_franquicia_goldenbike (1).jpg" alt="imgfranquicia">
            <img  class="imgfranqui" src="img/2_franquicia_goldenbike (1).jpg" alt="imgfranquicia">
            <img  class="imgfranqui" src="img/3_franquicia_goldenbike.png" alt="imgfranquicia">
        </div>

        <h2 class="tiendasdistri">Más de 20 tiendas distribuidas por toda Argentina</h2>








        <br><br>




    </section>
        -->

<section>


    <div class="nuestratienda">
    <h1 class="h1tiendas" >NUESTRAS TIENDAS</h1>      
    <div class="pdentrop" >
            <h1  id="textograndegolden" style="  transition: 0.1s;">GOLDENBIKE</h1>
            </div>
          

    </div>
</section>







   


    <section>
<div id="mapasseccion" class="mapas">


<div class="letraverti">
<h1 id="gbanor">GBA Norte</h1>
</div>  
    <div class="tiendas">
        
    <div class="tienda capital" id="capital">
    <a href="villaurquiza" target="_blank" > Villa Urquiza <!--<img src="./img/clickaqui.png" id="elemento" width="30px" alt="">--></a>
                
    </div>
    

    <div class="tienda capital" id="capital">
    
    <a href="villadevoto" target="_blank"> Villa Devoto </a>
                 
    </div>

    <div class="tienda capital" id="capital">
    <a href="belgrano" target="_blank"> Belgrano </a>
                 
    </div>

    <div class="tienda sur"  >
    <a href="canitas" target="_blank">Cañitas</a> 
         

    </div>

    <div class="tienda capital" id="capital">
    <a href="recoleta" target="_blank"> Recoleta </a>
           
    </div>
    <div class="tienda capital" id="capital">
    <a href="caballito" target="_blank">Caballito </a>
          
    </div>
    
    <div class="tienda norte" id="norte">
    <a href="acasusso" target="_blank">Acasusso </a>
          
    </div>
    
    <div class="tienda norte" id="norte">
    <a href="nordelta" target="_blank">Nordelta </a>
   

    </div>
    
    <div class="tienda norte" id="norte">
  
    <a href="olivos" target="_blank">Olivos </a>
         


    </div>
    <div class="tienda norte" id="norte">
    <a href="tom" target="_blank">Tortugas Open Mall </a>


    </div>


    <div class="tienda norte" id="norte">
    <a href="sanmiguel" target="_blank">San Miguel</a> 

    </div>
    <div class="tienda oeste" id="oeste">
    <a href="parqueleloir" target="_blank">Parque Leloir </a>
          


    </div>


    <div class="tienda sur"  >
    <a href="lomasdezamora" target="_blank">Lomas de Zamora</a> 
         

    </div>


    <div class="tienda sur" id="norte">
  
 
    <a href="quilmes" target="_blank">Quilmes </a>
      



  </div>
  
  <div class="tienda sur" id="sur">
  
  <a href="montegrande" target="_blank">Monte Grande </a>




  </div>






  <div class="tienda provincia" id="norte">
  <a href="laplata" target="_blank">La Plata </a>
 
  </div>

  <div class="tienda provincia" id="norte">
  <a href="olavarria" target="_blank"> Olavarría </a>

  </div>


    </div>

    <div class="mapa">
    <img src="./img/goldenbike.webp"  alt="goldenbike">
   
        <iframe class="mapaofi"  src="https://www.google.com/maps/d/u/0/embed?mid=1PRpDyHgrrkL_zo1ZaTxjOihzZAMWSpzJ&ehbc=2E312F"></iframe>
    </div>


</div>




</section>







    <section>
        <div class="iconos2" style="background-color: white;">
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





    <!-- footer del sitio -->
   


    <script src="./public/star.js"></script>
    <script src="./public/scripts.js">
    </script>


<script>



        const lugar = document.getElementById('head');

        const elementos = ['G', 'O', 'L', 'D', 'E', 'N', 'B', 'I', 'K', 'E']

        function sleep(ms) {

            return new Promise(
                resolve => setTimeout(resolve, ms)
            );

        }

        async function muestra() {


            for (i = 0; i < elementos.length; i++) {


                lugar.innerHTML += elementos[i];


                await sleep(200);

            }

        }
     
    </script>
    
</script>

<script>


    
</script>

<script>
    $(".botonimage").click(function() {
 $('html, body').animate({
 scrollTop: $("#mapasseccion").offset().top
 }, 1000);
});

$(".botonimage").click(function() {
 $('html, body').animate({
 scrollTop: $("#mapasseccion").offset().top
 }, 1000);
});

$(".center").click(function() {
 $('html, body').animate({
 scrollTop: $("#mapasseccion").offset().top

 }, 1000);

 $('.mensajeespecial').animate({
 opacity:'1'
 
 }, 500);

 setTimeout(() => {
    $('.mensajeespecial').animate({
 opacity:'0'
 
 }, 500);
 }, 3000);
});


</script>
</script>

<script>
        $('.center').slick({
            centerMode: true,
            centerPadding: '60px',
            slidesToShow: 5,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: false,
            adaptiveHeight: true,

            responsive: [{
                    breakpoint: 1920,
                    settings: {
                        centerMode: true,
                        slidesToShow: 6
                    }
                }, {
                    breakpoint: 1420,
                    settings: {
                        centerMode: true,
                        slidesToShow: 5
                    }
                }, {
                    breakpoint: 1200,
                    settings: {
                        centerMode: false,
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 950,
                    settings: {

                        slidesToShow: 3
                    }
                },


                {

                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: false,
                        centerPadding: '40px',
                        slidesToShow: 2
                    }
                }, {
                    breakpoint: 400,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });
    </script>



</body>

</html>