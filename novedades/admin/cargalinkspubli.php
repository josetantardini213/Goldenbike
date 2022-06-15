<?php






include "../funciones/conexion.php";
if(isset($_POST['cargar'])){

    if($_POST['titulo'] != "" && $_POST['tienda'] != ""){
        $titulo = mysqli_real_escape_string($conexion,$_POST["titulo"]);
        $textowpp = mysqli_real_escape_string($conexion,$_POST["textowpp"]);
        $tienda = mysqli_real_escape_string($conexion,$_POST["tienda"]);
        $visibility = mysqli_real_escape_string($conexion,$_POST["visibility"]);
        $nombrefoto = "";

        

if (isset($_FILES['afile'])){
	
	$valoralazar = 0;
	//Comprobamos si el fichero es una imagen
	        if ($_FILES['afile']['type']=='image/png' || $_FILES['afile']['type']=='image/jpeg' || $_FILES['afile']['type']=='image/webp'){
	

                
                
                $nombrefoto=$_FILES["afile"]["name"];
                
		        
                $guarda4 = "SELECT * FROM linkstiendas WHERE img='$nombrefoto' ";
    
                $noguarda4=mysqli_query($conexion,$guarda4); 

		        while(mysqli_num_rows($noguarda4)>0){


                $valoralazar = $valoralazar+1;
                    
                $nombrefoto = $valoralazar.$nombrefoto;
                
                 $guarda4 = "SELECT * FROM linkstiendas WHERE img='$nombrefoto' ";
                
                $noguarda4=mysqli_query($conexion,$guarda4); 
		    }



	



	//Subimos el fichero al servidor

    move_uploaded_file($_FILES["afile"]["tmp_name"],'../../imgpublicidad/'.$nombrefoto);

	        }
	
	
        }
        


            $publicar = "INSERT INTO linkstiendas (tienda,titulo,mensajedewpp,img,vibilidad) VALUES ('$tienda','$titulo','$textowpp','$nombrefoto','$visibility')";
    
            $presen=mysqli_query($conexion,$publicar); 


            if($presen == true){
                echo "<p class='alert alert-success'>"."Enlace cargado satisfactoriamente"."</p>";   
                     }else{
                         echo "<p class='alert alert-success'>"."Algo fallo :("."</p>";
                     }
        
    }else{
        echo "<p class='alert alert-danger'>"."Faltan campos a completar"."</p>";
    }

}





if(isset($_POST['borrar'])){
    $palabra=$_POST['id'];

    $guarda45 = "SELECT * FROM linkstiendas WHERE id_linktienda='$palabra' ";
                
    $noguarda45=mysqli_query($conexion,$guarda45); 

    if($datos2=mysqli_fetch_array($noguarda45)){
        $mytext = $datos2['img'];
    }
    
    unlink('../../imgpublicidad/'.$mytext);


    $elimina = "DELETE FROM linkstiendas WHERE id_linktienda='$palabra' ";
    
    $elimina=mysqli_query($conexion,$elimina); 
    
    echo"<br><p class='alert alert-success'>Imagen borrada con exito</p>";

}






$publicacion = "SELECT * FROM linkstiendas" ;
    
    $publicacion2=mysqli_query($conexion,$publicacion);

    while($pub = mysqli_fetch_array($publicacion2)){

    ?> <div class="contenedorlinks"><?php
        echo "<p>Enlaces directos a un numero de whatssap: <a href='https://wa.me/aquinumerodecelular?text=".$pub['mensajedewpp']."' target='_blank'>https://wa.me/aquinumerodecelular?text=".$pub['mensajedewpp']."</a></p>";
        echo "<p>Este es el enlace a utilizar para las publicidades: <a href='https://goldenbike.com.ar/linkstiendas?t=".$pub['tienda']."' target='_blank'>https://goldenbike.com.ar/linkstiendas?t=".$pub['tienda']."</a></p>";
        echo "<p>Titulo: ".$pub['titulo']."</p>";
        echo "<p>Tienda: ".$pub['tienda']."</p>";
        if($pub['vibilidad'] == 1){
            echo "<p>Visibilidad = Visible</p>";
        }else{
            echo "<p>Visibilidad = No visible</p>";

        }
        ?>   
    <button class="btn btn-danger"  onclick="borrar('<?php echo $pub['id_linktienda']; ?>')">Borrar</button>
        <a class="btneditar" href="./modificar/modificarlinkstiendas.php?id=<?php echo $pub['id_linktienda']; ?>">Modificar</a>
    </div><?php


}

?>