<style>
   @media (max-width:800px){ tbody, td, tfoot, th, thead, tr{
        display: flex;
        flex-direction: column;
        
    }
    .imgadmin{
        height: 100%;
        width: 100%;
    }
}
</style>
<?php



$publicacion = "SELECT portada,url,shortdescription,archivo,titulo,id_publicacion,extension FROM publicacionesblog order by id_publicacion desc " ;
    
    $publicacion2=mysqli_query($conexion,$publicacion);
?> <div class="container">
    <table class="table table-stripped table-hove">
<thead class="table-dark">

<tr>
        <th scope="col" style="color: white; text-align:center;">#</th>
        <th scope="col" style="color: white; text-align:center;">Imagen</th>
        <th scope="col" style="color: white; text-align:center;">Titulo</th>
        <th scope="col" style="color: white; text-align:center;">Opciones</th>
    </tr>

    </thead>
    <tbody>

    <?php
    $cont = 0;
    while($pub = mysqli_fetch_array($publicacion2)){
          $cont +=1;
          ?>
      
    <?php
    
        if(strcmp($pub["extension"],"")==0){

?>
<tr>
<th scope="row" style="text-align: center;"><?php echo $cont ?></th>
<?php
        echo " <td><h2>".$pub['titulo']." </h2> </td>";
        echo " <td><p style='position:relative;'>".$pub['shortdescription']."</p> <br> </td>";
        ?><?php
        echo " <td><a class='btn alert-info'    href='./modificar/modificaremos.php?modifi=".$pub['id_publicacion']."'  ><i class='fas fa-edit'></i></a> </td>";
    ?>
     <td>
<form action="" method="post" style="width: 10%;">
    
    <input  type="submit" class="btn alert-danger" name="<?php echo $pub['id_publicacion'] ?>" id="<?php echo $pub['id_publicacion'] ?>" value="eliminar">
</form>  
        </td> 
        <td><a href="../../<?php echo $pub['url']; ?>" target="_blank" style="text-decoration:none;">Visitar</a></td>

</tr>



<?php
}


if (strcmp($pub["extension"],"jpg")==0 || strcmp($pub["extension"],"webp")==0 || strcmp($pub["extension"],"png")==0 ) {
  ?>

<tr>


<th  scope="row" style="text-align: center;"><?php echo $cont ?></th>
    <?php
        
        
         echo " <td><img class='imgadmin' src='".$pub['archivo']."'' height='100px'></td>";
         echo "<td><h2>".$pub['titulo']."</h2></td>";
         
         echo "<td><a class='btn alert-info'  class='btn alert-info'  href='./modificar/modificaremos.php?modifi=".$pub['id_publicacion']."'  ><i class='fas fa-edit'></i></a></td>";
    ?>
    <td><form action="" method="post">
    
    <input type="submit" class="btn alert-danger far fa-trash-alt" name="<?php echo $pub['id_publicacion'] ?>" id="<?php echo $pub['id_publicacion'] ?>" value="eliminar">
</form></td>
<td><a href="../../<?php echo $pub['url']; ?>" target="_blank" style="text-decoration:none;">Visitar</a></td>
</tr>


<?php
}


elseif (strcmp($pub["extension"],"mp4")==0) {
  
        ?>
<div class="col-md-3 wow fadeInDown " data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown;"> 
    <?php
       
        
         echo "<video src='".$pub["archivo"]."' width=85%  controls ></video>";
         echo "<h2>".$pub['titulo']."</h2>";
         echo "<p>".$pub['shortdescription']."</p>";
         ?><div class="botonesblog"><?php
         echo "<a class='btn alert-info'  href='./modificar/modificaremos.php?modifi=".$pub['id_publicacion']."'  >Modificar</a>";
     ?>
     <form action="" method="post">
    
    <input type="submit" class="btn alert-danger" name="<?php echo $pub['id_publicacion'] ?>" id="<?php echo $pub['id_publicacion'] ?>" value="eliminar">
</form>
           </div>
</div>
<?php
}

elseif (strcmp($pub["extension"],"pdf")==0) {
  
 ?>
<div class="col-md-3 wow fadeInDown " data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown;"> 
    <?php
      
        
         echo "<embed src='".$pub['archivo']."' type='application/pdf' width='100%' height='600px' />";
         echo "<h2>".$pub['titulo']."</h2>";
         echo "<p>".$pub['shortdescription']."</p>";
         ?><div class="botonesblog"><?php
         echo "<a class='btn alert-info'  href='./modificar/modificaremos.php?modifi=".$pub['id_publicacion']."'  >Modificar</a>";
    ?>
    <form action="" method="post">
    
    <input type="submit" class="btn alert-danger" name="<?php echo $pub['id_publicacion'] ?>" id="<?php echo $pub['id_publicacion'] ?>" value="eliminar">
</form>
           </div>
</div>
<?php
}

elseif (strcmp($pub["extension"],"docx")==0) {
  
 ?>
<div class="col-md-3 wow fadeInDown " data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown;"> 
    <?php
       
        echo "<a href='".$pub["archivo"]."' target='_blank'>Archivo.word <img src='../img/word.png' width='200px' ></a>";
        echo "<h2>".$pub['titulo']."</h2>";
        echo "<p>".$pub['shortdescription']."</p>";
        ?><div class="botonesblog"><?php
        echo "<a class='btn alert-info'  href='./modificar/modificaremos.php?modifi=".$pub['id_publicacion']."'  >Modificar</a>";
     ?>
     <form action="" method="post">
    
    <input type="submit" class="btn alert-danger" name="<?php echo $pub['id_publicacion'] ?>" id="<?php echo $pub['id_publicacion'] ?>" value="eliminar">
</form>
          </div>
</div>
<?php
}

elseif (strcmp($pub["extension"],"txt")==0) {
  
    ?>
<div class="col-md-3 wow fadeInDown " data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; margin-top:20px; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown;"> 
    <?php
                
                echo "<a href='".$pub["archivo"]."' target='_blank'>Archivo.txt <img src='../img/txt.png' width='200px'></a>";
                echo "<h2>".$pub['titulo']."</h2>";
                echo "<p>".$pub['shortdescription']."</p>";
                ?><div class="botonesblog"><?php
                echo "<a class='btn alert-info'  href='./modificar/modificaremos.php?modifi=".$pub['id_publicacion']."'  >Modificar</a>";
              ?>
              <form action="" method="post">
    
    <input type="submit" class="btn alert-danger" name="<?php echo $pub['id_publicacion'] ?>" id="<?php echo $pub['id_publicacion'] ?>" value="eliminar">
</form>
                  </div>
</div>

<?php
        }


    elseif (strcmp($pub["extension"],"rar")==0) {
  ?>
<div class="col-md-3 wow fadeInDown " data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown;"> 
    <?php
      
        echo "<a href='".$pub["img"]."' target='_blank'>Archivo.rar <img src='../img/rar.png' width='200px' ></a>";
        echo "<h2>".$pub['titulo']."</h2>";
        echo "<p>".$pub['shortdescription']."</p>";
        ?><div class="botonesblog"><?php
        echo "<a class='btn alert-info'  href='./modificar/modificaremos.php?modifi=".$pub['id_publicacion']."'  >Modificar</a>";
    ?>
    <form action="" method="post">
    
    <input type="submit" class="btn alert-danger" name="<?php echo $pub['id_publicacion'] ?>" id="<?php echo $pub['id_publicacion'] ?>" value="eliminar">
</form>
          </div>
</div>
<?php
    
}

elseif (strcmp($pub["extension"],"zip")==0) {
  
      ?>
<div class="col-md-3 wow fadeInDown " data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown;"> 
    <?php

        echo "<h2>".$pub['titulo']."</h2>";
       echo "<a href='".$pub["archivo"]."' target='_blank'>Archivo.zip <img src='../img/zip.png' width='200px' ></a>";
    
         echo "<p>".$pub['shortdescription']."</p>";
         ?><div class="botonesblog"><?php
         echo "<a class='btn alert-info'  href='./modificar/modificaremos.php?modifi=".$pub['id_publicacion']."'  >Modificar</a>";
         ?>
    <form action="" method="post">
    
    <input type="submit" class="btn alert-danger" name="<?php echo $pub['id_publicacion'] ?>" id="<?php echo $pub['id_publicacion'] ?>" value="eliminar">
</form>
           </div>
    </div>


<?php
}


    
     ?>

</div>
</div>
</div>





<?php

   if (isset($_POST[$pub['id_publicacion']])) {
   	
if(strcmp($pub['archivo'],"")!=0){      
   
unlink($pub['archivo']);
unlink($pub['portada']);



            
            }

            $DELETE = "RewriteRule ^(".$pub['url'].")$ noticia.php?n=$1"; 
            $data = file("../../.htaccess");
             $out = array(); 
             foreach($data as $line) { 
                 if(trim($line) != $DELETE) { $out[] = $line; }
                
                } $fp = fopen("../../.htaccess", "w+");
                 flock($fp, LOCK_EX); 
                 foreach($out as $line) 
                 { fwrite($fp, $line); }
                  flock($fp, LOCK_UN);
                   fclose($fp);
            

            $delete = "DELETE FROM publicacionesblog WHERE id_publicacion='".$pub['id_publicacion']."'";
    
    $delete2=mysqli_query($conexion,$delete);
            
            
         
            
      
          ?>
          
          <script>location.reload();</script>
          <?php




   }

    } 



?>

</tbody>
</table>

</div>