<?php
include "../funciones/conexion.php";
if(isset($_POST['cargar'])){

    if($_POST['palabraclave'] != ""){
        $palabraclave = $_POST['palabraclave'];
        $textowpp = $_POST['textowpp'];

            

            $guarda = "SELECT * FROM links WHERE palabraclave='$palabraclave' ";
    
            $noguarda=mysqli_query($conexion,$guarda); 
            $cont = 0;
        while(mysqli_num_rows($noguarda)>0){
             
            $cont = $cont+1;
         
            $palabraclave = $palabraclave."".$cont;   
            $guarda = "SELECT * FROM links WHERE palabraclave='$palabraclave' ";
    
            $noguarda=mysqli_query($conexion,$guarda); 
            
        }





            $publicar = "INSERT INTO links (palabraclave,texto) VALUES ('$palabraclave','$textowpp')";
    
            $presen=mysqli_query($conexion,$publicar); 

            if($presen == true){
                echo "<p class='alert alert-success'>"."Enlace cargado satisfactoriamente"."</p>";   
                     }
        
    }else{
        echo "<p class='alert alert-danger'>"."No ingreso una palabra clave"."</p>";
    }





}


if(isset($_POST['borrar'])){
    $palabra=$_POST['palabraclave'];
    $elimina = "DELETE FROM links WHERE palabraclave='$palabra' ";
    
    $elimina=mysqli_query($conexion,$elimina); 

}






$publicacion = "SELECT * FROM links" ;
    
    $publicacion2=mysqli_query($conexion,$publicacion);

    while($pub = mysqli_fetch_array($publicacion2)){

    ?> <div class="contenedorlinks"><?php
        echo "<p>Enlaces directos a un numero de whatssap: <a href='https://wa.me/aquinumerodecelular?text=".$pub['texto']."' target='_blank'>https://wa.me/aquinumerodecelular?text=".$pub['texto']."</a></p>";
        echo "<p>Este es el enlace a utilizar para las publicidades: <a href='https://goldenbike.com.ar/links?val=".$pub['palabraclave']."' target='_blank'>https://goldenbike.com.ar/links?val=".$pub['palabraclave']."</a></p>";
        
        ?>   
    <button class="btn btn-danger" onclick="borrar('<?php echo $pub['palabraclave']; ?>')">Borrar</button>
    </div><?php

    }









?>