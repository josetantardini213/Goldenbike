<?php
include "./conexion.php";


$id = mysqli_real_escape_string($conexion,$_POST['id']);



if(isset($_POST['update'])){

    if($_POST['titulo'] != "" && $_POST['tienda'] != ""){
        $titulo = mysqli_real_escape_string($conexion,$_POST["titulo"]);
        $textowpp = mysqli_real_escape_string($conexion,$_POST["textowpp"]);
        $tienda = mysqli_real_escape_string($conexion,$_POST["tienda"]);
        $visibility = mysqli_real_escape_string($conexion,$_POST["visibility"]);
        $nombrefoto = "";

        

if (isset($_FILES['afile'])){
	     
    $guarda42 = "SELECT img FROM linkstiendas WHERE  id_linktienda='$id' ";
                
    $noguarda42=mysqli_query($conexion,$guarda42); 

    if($datos22=mysqli_fetch_array($noguarda42)){
        $mytext = $datos22['img'];
    }
    
    unlink('../../imgpublicidad/'.$mytext);


    
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



	



            $publicar = "UPDATE linkstiendas SET img = '$nombrefoto' WHERE id_linktienda = $id ";
    
            $presen=mysqli_query($conexion,$publicar); 
	//Subimos el fichero al servidor

    move_uploaded_file($_FILES["afile"]["tmp_name"],'../../imgpublicidad/'.$nombrefoto);

	        }
	
	
        }
        

            $publicar = "UPDATE linkstiendas SET tienda = '$tienda', titulo = '$titulo', mensajedewpp = '$textowpp', vibilidad='$visibility' WHERE id_linktienda = $id ";
    
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















$publicacion = "SELECT * FROM linkstiendas WHERE id_linktienda = $id" ;
    
    $publicacion2=mysqli_query($conexion,$publicacion);

    while($pub = mysqli_fetch_array($publicacion2)){

    ?> <div class="contenedorlinks"><?php
        echo "<p>Enlaces directos a un numero de whatssap: <a href='https://wa.me/aquinumerodecelular?text=".$pub['mensajedewpp']."' target='_blank'>https://wa.me/aquinumerodecelular?text=".$pub['mensajedewpp']."</a></p>";
        echo "<p>Este es el enlace a utilizar para las publicidades: <a href='https://goldenbike.com.ar/linkstiendas?t=".$pub['tienda']."' target='_blank'>https://goldenbike.com.ar/linkstiendas?t=".$pub['tienda']."</a></p>";
        echo "<p>Titulo: ".$pub['titulo']."</p>";

        if($pub['vibilidad'] == 1){
            echo "<p>Visibilidad = Visible</p>";
        }else{
            echo "<p>Visibilidad = No visible</p>";

        }
        echo "<img style='width:40%; margin-bottom:20px;' src='../../../imgpublicidad/".$pub['img']."'>"
        
        ?>   
    <button class="btn btn-danger"  onclick="borrar('<?php echo $pub['id_linktienda']; ?>')">Borrar</button>
    </div><?php


}

?>