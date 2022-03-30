<?php
include "../../../funciones/conexion.php" ;
if(isset($_POST['borrarfoto'])){
$id = $_POST['id'];


$publicacion22 = "SELECT archivo FROM publicacionesblog WHERE id_publicacion = $id" ;
    
    $publicacion2=mysqli_query($conexion,$publicacion22);

    if($pub = mysqli_fetch_array($publicacion2)){
        unlink("../../".$pub['archivo']);

    }



    $sql = "UPDATE publicacionesblog SET archivo = '' WHERE id_publicacion = '$id'";

    $sql2=mysqli_query($conexion,$sql);

    echo "<p class='alert alert-success'>Foto borrada con exito</p>";

}



if(isset($_POST['borrarportada'])){
    $id = $_POST['id'];


    $publicacion = "SELECT portada FROM publicacionesblog WHERE id_publicacion = $id" ;
    
    $publicacion2=mysqli_query($conexion,$publicacion);

    if($pub = mysqli_fetch_array($publicacion2)){
        unlink("../../".$pub['portada']);

    }



    $sql = "UPDATE publicacionesblog SET portada = '' WHERE id_publicacion = '$id'";

    $sql2=mysqli_query($conexion,$sql);

    echo "<p class='alert alert-success'>Portada borrada con exito</p>";
    
    }
    
    




?>