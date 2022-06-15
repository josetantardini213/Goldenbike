<!DOCTYPE html>
<html lang="en">

<head>
<?php include "./Content/head.php"; ?>    


    <link rel="stylesheet" href="./public/linkstiendas.css?n=10">
    <link rel="stylesheet" href="./public/styles.css?n=10">
    <link rel="stylesheet" href="./preloader/preloader.css?n=10">
    <link rel="stylesheet" href="./public/footer.css?n=10">

       
    <link rel="icon" href="./img/favicon.svg" type="image/svg+xml">
    <link rel="icon" href="./img/favicon.png" type="image/png">
    <?php include "./Content/analiticpersonalizado.php"; ?>

    <?php include "./Content/analitic.php"; ?>

<style>


    .imgtiendas{
        height: 50px;
        width:50px;
        object-fit: cover;
        position: absolute;
        margin-top: -17px;
        margin-left: -8px;
    }
</style>

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

if(isset($_GET['t'])){
    $valor =  mysqli_real_escape_string($conexion,$_GET["t"]);
    switch($valor){

        case "recoleta":
            $telefono = "5491130098055";
        break;
        case "acassuso":
            $telefono = "5491154887206";
        break;
        case "villaurquiza":
            $telefono = "5491160245887";
        break;
        case "villadevoto":
            $telefono = "5491159109911";
        break;
        case "belgrano":
            $telefono = "5491164555978";
        break;
        case "canitas":
            $telefono = "5491149494356";
        break;
        case "nordelta":
            $telefono = "5491171548659";
        break;
        case "caballito":
            $telefono = "5491121807114";
        break;
        case "saavedra":
            $telefono = "5491164793999";
        break;
        case "olivos":
            $telefono = "5491126670344";
        break;
        case "tom":
            $telefono = "5491123269901";
        break;
        case "sanmiguel":
            $telefono = "5491178955556";
        break;
        case "parqueleloir":
            $telefono = "5491124590696";
        break;
        case "lomasdezamora":
            $telefono = "5491127810208";
        break;
        case "quilmes":
            $telefono = "5491130253574";
        break;
        case "montegrande":
            $telefono = "5491158976645";
        break;
        case "olavarria":
            $telefono = "5492284521334";
        break;
        case "villaluro":
            $telefono = "5491158532677";
        break;
        case "sanjuan":
            $telefono = "5492645216100";
        break;
        case "nunez":
            $telefono = "5492645216100";
        break;
        

    }

    $guarda2 = "SELECT * FROM linkstiendas WHERE tienda='$valor' ";

    $noguarda2=mysqli_query($conexion,$guarda2); 

    $guarda = "SELECT * FROM linkstiendas WHERE tienda='$valor' ";

    $noguarda=mysqli_query($conexion,$guarda); 
    

}else{

}

?>
    <div class="content">

        <img src="./img/123123.webp" style="border-radius: 1000px !important;  margin-top: 20px;" alt="logo">
       <div class="divcontentitulo">
        <h1 class="especialtitulo2">Goldenbike <i class="especialtitulo23"><?php if($datos2=mysqli_fetch_array($noguarda2)){ echo $datos2['tienda'] ; } ?></i></h1>
       </div>
       <div class="divcontentitulo">
        <h2><a class="especialmonserrat">¿A qué oferta exclusiva te gustaría acceder hoy? </a> <a class="especialmonserrat3">Promo por tiempo limitado 🔥</a> </h2>
        </div>
        <div class="contentcapital" id="contentcapitalfederal" style=" width: 100%; font-family:monserrat;">


        <?php
       
        if(mysqli_num_rows($noguarda)>0){
           
            while($datos=mysqli_fetch_array($noguarda)){
                if($datos['vibilidad'] == 1){
                ?>
                <a href="https://wa.me/+<?php echo $telefono; ?>?text=<?php echo $datos['mensajedewpp']; ?>" target="_blank"> <button><img class="imgtiendas" src="./imgpublicidad/<?php echo $datos['img']; ?>" >&nbsp;&nbsp;<?php echo $datos['titulo']; ?></button></a>
                <?php
                }
    
    
            }
    
            
        }else{
        
        }
    
      
    
           
        
    
    
            


        ?>

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
    <script src="./public/scripts.js?p=3"></script>

</body>

</html>