
<?php
$verdad = $_GET["modifi"];
$usuario=$_SESSION['user'];
if (isset($_POST["Publicar"])) {



if (isset($_POST["titulo"])) {
$titulo = $_POST["titulo"];
}
if (isset($_POST["txtDescripcion"])) {
$descripcion = $_POST["txtDescripcion"];

}
if (isset($_POST["shortdescription"])) {
    $shortdescription = $_POST["shortdescription"];
    }

if (isset($titulo)) {	
if(strcmp($titulo,"")!=0){
$sql = "UPDATE publicacionesblog SET titulo = '$titulo' WHERE id_publicacion = '$verdad'";

 $sql2=mysqli_query($conexion,$sql);


 
}
}

if (isset($descripcion)) {	
if(strcmp($descripcion,"")!=0){
$sql = "UPDATE publicacionesblog SET descripcion = '$descripcion' WHERE id_publicacion = '$verdad'";

 $sql2=mysqli_query($conexion,$sql);


?>
<script>

</script>
<?php


}
}

if (isset( $shortdescription)) {	
    if(strcmp($shortdescription,"")!=0){
    $sql = "UPDATE publicacionesblog SET shortdescription = '$shortdescription' WHERE id_publicacion = '$verdad'";
    
     $sql2=mysqli_query($conexion,$sql);
    }
    }





}













if (isset($_POST["subir"])) {


	

    
    
    


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
    if(strcmp($tips,"png")==0 && $size < 100000000 || strcmp($tips,"jpg")==0 && $size < 100000000 || strcmp($tips,"mp4")==0 && $size < 100000000 ||  strcmp($tips,"zip")==0 && $size < 100000000 ||  strcmp($tips,"rar")==0 && $size < 100000000 ||  strcmp($tips,"docx")==0 && $size < 100000000 ||  strcmp($tips,"txt")==0 && $size < 100000000 ||  strcmp($tips,"pdf")==0 && $size < 100000000 || strcmp($tips,"webp")==0 && $size < 100000000){
        
        
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
    copy($ruta1,"../".$destino3);
    $publicar = "UPDATE publicacionesblog SET archivo = '$destino3', extension = '$extension' WHERE id_publicacion = '$verdad'";
    
    $presen=mysqli_query($conexion,$publicar); 

    

 echo "<p class='alert alert-success'>Publicacion editada con exito</p>";

}else{
    echo "<p class='alert alert-danger'>Error desconocido</p>";
}



    }else {
        echo "<p class='alert alert-danger'>Limite de tamaño de archivo superado</p>";
    }


}


}


//portadaaa AAAA





if (isset($_POST["subirportada"])) {


	

    
    
    


    $tips ="";
    $tipo = $_FILES["publicaportada"]["type"];
   
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
   
    $size = $_FILES["publicaportada"]["size"];
    if($size > 1){
    if(strcmp($tips,"png")==0 && $size < 100000000 || strcmp($tips,"jpg")==0 && $size < 100000000 || strcmp($tips,"mp4")==0 && $size < 100000000 ||  strcmp($tips,"zip")==0 && $size < 100000000 ||  strcmp($tips,"rar")==0 && $size < 100000000 ||  strcmp($tips,"docx")==0 && $size < 100000000 ||  strcmp($tips,"txt")==0 && $size < 100000000 ||  strcmp($tips,"pdf")==0 && $size < 100000000 || strcmp($tips,"webp")==0 && $size < 100000000){
        
        
        $extension = $tips;


        $nombrefoto1=$_FILES["publicaportada"]["name"];
        $ruta1=$_FILES["publicaportada"]["tmp_name"];
        $name3 = "portada".$nombrefoto1;
        $destino3= "../imgblog/".$name3;


        

        $guarda = "SELECT portada FROM publicacionesblog WHERE portada='$destino3' ";
    
    $noguarda=mysqli_query($conexion,$guarda); 
    $cont = 0;
while(mysqli_num_rows($noguarda)>0){
     
    $cont = $cont+1;
 
    $name3 = "portada".$cont.".".$tips;
     
     $destino3= "../imgblog/".$name3;
    
     $guarda = "SELECT portada FROM publicacionesblog WHERE portada='$destino3' ";
    
    $noguarda=mysqli_query($conexion,$guarda); 
    
}

if(is_uploaded_file($ruta1)){
        
        
    $destino3 = "../imgblog/".$name3;
    copy($ruta1,"../".$destino3);
    $publicar = "UPDATE publicacionesblog SET portada = '$destino3' WHERE id_publicacion = '$verdad'";
    
    $presen=mysqli_query($conexion,$publicar); 

    

 echo "<p class='alert alert-success'>Publicacion subida con exito</p>";

}else{
    echo "<p class='alert alert-danger'>Error desconocido</p>";
}



    }else {
        echo "<p class='alert alert-danger'>Limite de tamaño de archivo superado</p>";
    }


}


}


?>

















