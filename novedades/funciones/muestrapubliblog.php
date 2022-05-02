<?php

$publicacion = "SELECT * FROM publicacionesblog ORDER BY id_publicacion DESC LIMIT 6" ;
    
    $publicacion2=mysqli_query($conexion,$publicacion);

    include 'blog-data.php';


?>