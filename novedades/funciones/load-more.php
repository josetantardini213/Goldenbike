<?php
include './conexion.php';
$publicacion = "SELECT * FROM publicacionesblog WHERE id_publicacion < '".$_GET['last_id']."' ORDER BY id_publicacion DESC LIMIT 6" ;
    
    $publicacion2=mysqli_query($conexion,$publicacion);

include 'blog-data.php';
?>