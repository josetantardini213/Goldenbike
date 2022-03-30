<?php

include "../funciones/conexion.php";


if(isset($_POST["Publicar"])) {

    if(isset($_POST["txtDescripcion"])) {
	
        $descripcion = mysqli_real_escape_string($conexion,$_POST["txtDescripcion"]);
    }else{
        $descripcion = "";
    }
    if(isset($_POST["url"])) {
    
        $url = mysqli_real_escape_string($conexion,$_POST["url"]);        
        $guarda47= "SELECT url FROM publicacionesblog WHERE url='$url' ";
    
    $noguarda47=mysqli_query($conexion,$guarda47); 
    $cont23 = 0;
    while(mysqli_num_rows($noguarda47)>0){
     
        $cont23 = $cont23+1;
     
        $url = $url.$cont23;
         
       
        
         $guarda47 = "SELECT url FROM publicacionesblog WHERE url='$url' ";
        
        $noguarda47=mysqli_query($conexion,$guarda47); 
        
    }
        
    
    }else{
        $url = "";
    }
    
    
    if(isset($_POST["shortdescription"])) {
	
        $shortdescripcion = mysqli_real_escape_string($conexion,$_POST["shortdescription"]);
    }else{
        $shortdescripcion = "";
    }
    
    if(isset($_POST["titulo"])) {
        
        $titulo = mysqli_real_escape_string($conexion,$_POST["titulo"]);
    }else{
        $titulo = "";
    }
//portada
    
    $tipsportada ="";
    $tipoportada = $_FILES["publicaportada"]["type"];
    
    if(strcmp($tipoportada,"image/png")==0){
   
        $tipsportada = "png";
    $tipoportada = array('image/png' => 'png');
    
    }

    if(strcmp($tipoportada,"image/webp")==0){
   
        $tipsportada = "webp";
    $tipoportada = array('image/webp' => 'webp');
    
    }
    
    

     elseif(strcmp($tipoportada,"image/jpeg")==0){
   
        $tipsportada = "jpg";
    $tipoportada = array('image/jpeg' => 'jpg');
    
    }

    $sizeportada = $_FILES["publicaportada"]["size"];
    if($sizeportada > 1){
    if(strcmp($tipsportada,"png")==0 && $sizeportada < 100000000 || strcmp($tipsportada,"jpg")==0 && $sizeportada < 100000000 || strcmp($tipsportada,"webp")==0 && $sizeportada < 100000000){

     
        
        $extension4 = $tipsportada;


        $nombrefoto14=$_FILES["publicaportada"]["name"];
        $ruta14=$_FILES["publicaportada"]["tmp_name"];
        $name34 = "portada".$nombrefoto14;
        $destino34= "../imgblog/".$name34;


        

        $guarda4 = "SELECT portada FROM publicacionesblog WHERE portada='$destino34' ";
    
    $noguarda4=mysqli_query($conexion,$guarda4); 
    $cont4 = 0;
while(mysqli_num_rows($noguarda4)>0){
     
    $cont4 = $cont4+1;
 
    $name34 = "Archivo".$cont4.".".$tipsportada;
     
     $destino34= "../imgblog/".$name34;
    
     $guarda4 = "SELECT archivo FROM publicacionesblog WHERE archivo='$destino34' ";
    
    $noguarda4=mysqli_query($conexion,$guarda4); 
    
}

if(is_uploaded_file($ruta14)){
        
        
    $destino34 = "../imgblog/".$name34;
    copy($ruta14,$destino34);
    
    



    
}else{
    echo "<p class='alert alert-danger' style='text-align:center;'>Error desconocido</p>";
}



    }else {
        echo "<p class='alert alert-danger' style='text-align:center;'>Limite de tamaño de archivo superado</p>";
    }

    }



    


//portada

    $tips ="";
    $tipo = $_FILES["publica"]["type"];
   
    if(strcmp($tipo,"image/png")==0){
   
        $tips = "png";
    $type = array('image/png' => 'png');
    
    }


      
    if(strcmp($tipo,"image/webp")==0){
   
        $tips = "webp";
    $type = array('image/webp' => 'webp');
    
    }

     elseif(strcmp($tipo,"image/jpeg")==0){
   
        $tips = "jpg";
    $type = array('image/jpeg' => 'jpg');
    
    }

     elseif(strcmp($tipo,"video/mp4")==0){
   
        $tips = "mp4";
    $type = array('video/mp4' => 'mp4');
    
    }


elseif(strcmp($tipo,"application/pdf")==0){
   
        $tips = "pdf";
    $type = array('application/pdf' => 'pdf');
    
    }


elseif(strcmp($tipo,"application/octet-stream")==0){
   
        $tips = "rar";
    $type = array('application/octet-stream' => 'rar');
    
    }


elseif(strcmp($tipo,"application/x-zip-compressed")==0){
   
        $tips = "zip";
    $type = array('application/x-zip-compressed' => 'zip');
    
    }



elseif(strcmp($tipo,"application/vnd.openxmlformats-officedocument.wordprocessingml.document")==0){
   
        $tips = "docx";
    $type = array('application/vnd.openxmlformats-officedocument.wordprocessingml.document' => 'docx');
    
    }

    elseif(strcmp($tipo,"text/plain")==0){
   
        $tips = "txt";
    $type = array('text/plain' => 'txt');
    
    }
   
    $size = $_FILES["publica"]["size"];
    if($size > 1){
    if(strcmp($tips,"png")==0 && $size < 100000000 || strcmp($tips,"webp")==0 && $size < 100000000 || strcmp($tips,"jpg")==0 && $size < 100000000 || strcmp($tips,"mp4")==0 && $size < 100000000 ||  strcmp($tips,"zip")==0 && $size < 100000000 ||  strcmp($tips,"rar")==0 && $size < 100000000 ||  strcmp($tips,"docx")==0 && $size < 100000000 ||  strcmp($tips,"txt")==0 && $size < 100000000 ||  strcmp($tips,"pdf")==0 && $size < 100000000){
        
        
        $extension = $tips;


        $nombrefoto1=$_FILES["publica"]["name"];
        $ruta1=$_FILES["publica"]["tmp_name"];
        $name3 = "Archivo".$nombrefoto1;
        $destino3= "../imgblog/".$name3;


        

        $guarda = "SELECT archivo FROM publicacionesblog WHERE archivo='$destino3' ";
    
    $noguarda=mysqli_query($conexion,$guarda); 
    $cont = 0;
while(mysqli_num_rows($noguarda)>0){
     
    $cont = $cont+1;
 
    $name3 = "Archivo".$cont.".".$tips;
     
     $destino3= "../imgblog/".$name3;
    
     $guarda = "SELECT archivo FROM publicacionesblog WHERE archivo='$destino3' ";
    
    $noguarda=mysqli_query($conexion,$guarda); 
    
}

if(is_uploaded_file($ruta1)){
        
        
    $destino3 = "../imgblog/".$name3;
    copy($ruta1,$destino3);
    if(isset($destino34)){
    if(strlen($destino34)>0){   
    $publicar = "INSERT INTO publicacionesblog (archivo,titulo,descripcion,extension,shortdescription,portada,url) VALUES ('$destino3','$titulo','$descripcion','$extension', '$shortdescripcion','$destino34','$url')";
    
    $presen=mysqli_query($conexion,$publicar); 
   

    $archivo = "../../.htaccess";
    $actual = file_get_contents($archivo);
    $actual .= "RewriteRule ^($url)$ noticia.php?n=$1\n";
    file_put_contents($archivo, $actual); 
    

}}else{   
        $publicar = "INSERT INTO publicacionesblog (archivo,titulo,descripcion,extension,shortdescription,url) VALUES ('$destino3','$titulo','$descripcion','$extension', '$shortdescripcion','$url')";
        
        $presen=mysqli_query($conexion,$publicar); 
        
    $archivo = "../../.htaccess";
    $actual = file_get_contents($archivo);
    $actual .= "RewriteRule ^($url)$ noticia.php?n=$1\n";
    file_put_contents($archivo, $actual); 
         }


 echo "<p class='alert alert-success' style='text-align:center;'>Publicacion subida con exito</p>";
    
}else{
    echo "<p class='alert alert-danger' style='text-align:center;'>Error desconocido</p>";
}



    }else {
        echo "<p class='alert alert-danger' style='text-align:center;'>Limite de tamaño de archivo superado</p>";
    }

    }elseif($size < 1 && strcmp($titulo,"")!=0 || $size < 1 && strcmp($descripcion,"")!=0 || isset($destino34)){
         if(isset($destino34)==0){
        $destino34 = null;
         }
    $publicar = "INSERT INTO publicacionesblog (titulo,descripcion,shortdescription,portada,url) VALUES ('$titulo','$descripcion','$shortdescripcion','$destino34','$url')" ;
    
    $presen=mysqli_query($conexion,$publicar); 

    echo "<p class='alert alert-success'>Publicacion subida con exito</p>";
    
    $archivo = "../../.htaccess";
    $actual = file_get_contents($archivo);
    $actual .= "RewriteRule ^($url)$ noticia.php?n=$1\n";
    file_put_contents($archivo, $actual); 

    }
    else{
        echo "<p class='alert alert-danger' style='text-align:center;'>Faltan campos a completar</p>";
    }




}


?>