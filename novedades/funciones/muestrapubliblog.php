<div class="iconos3" style="background-color: white;">
        <div class="containeres">
        <div class="row1">
            <?php
$publicacion = "SELECT portada,url,shortdescription,archivo,titulo,id_publicacion,extension FROM publicacionesblog order by id_publicacion desc " ;
    
    $publicacion2=mysqli_query($conexion,$publicacion);
$id = 0;
    while($pub = mysqli_fetch_array($publicacion2)){
          ?>
     
      
    <?php
$id = $id+1;    
        if(strcmp($pub["extension"],"")==0){

?>  <div class="publitexto col-md-3 wow fadeInDown aparece"  data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown; color:black;">  <a href="<?php echo $pub['url'];  ?>"><?php
        echo "<h2 style='margin-top:20px; color:black;'>".$pub['titulo']." </h2>";
        echo "<p>".$pub['shortdescription']."</p> <br>";

    ?>
  </a>
</div>
   
<?php
}


if (strcmp($pub["extension"],"jpg")==0 || strcmp($pub["extension"],"png")==0  || strcmp($pub["extension"],"webp")==0) {
  ?>
<div   id="<?php echo "element".$id; ?>" class="col-md-3 wow fadeInDown aparece"  data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown;"> 
<a href="<?php echo $pub['url'];  ?>">
<div class="cobertor" onmouseover="hover('<?php echo 'element'.$id; ?>')" onmouseout="contrarioahover('<?php echo 'element'.$id; ?>')"></div>

    <?php
        
echo "<div class='contentimgblog'>";    
         echo "<img src='./novedades/funciones/".$pub['archivo']."' height='200' style='z-index:10;'>";
       
         ?></div><?php
         echo "<h2 style='margin-top:10px !important; color:black; position:absolute; left:0;  right:0;  margin:auto;  z-index:9;'>".$pub['titulo']."</h2>";
         echo "<h2  class='h2especial' style='margin-top:20px; z-index:12;'>".$pub['titulo']."</h2>";
         echo "<p>".$pub['shortdescription']."</p>";
    ?>
 </a>
</div>
<?php
}


elseif (strcmp($pub["extension"],"mp4")==0) {
  
        ?>
<div class="col-md-3 wow fadeInDown aparece" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown;"> 
    <?php
       
        
         echo "<video src='./novedades/funciones/".$pub['archivo']."' width=85%  controls ></video>";
         echo "<h2 style='margin-top:20px;'>".$pub['titulo']."</h2>";
         echo "<p>".$pub['shortdescription']."</p>";
     ?>
  
</div>
<?php
}

elseif (strcmp($pub["extension"],"pdf")==0) {
  
 ?>
<div class="col-md-3 wow fadeInDown aparece" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown;"> 
   
   <?php
      
        
         echo "<embed src='./novedades/funciones/".$pub['archivo']."' type='application/pdf' width='100%' height='600px' />";
         echo "<h2 style='margin-top:20px;'>".$pub['titulo']."</h2>";
         echo "<p>".$pub['shortdescription']."</p>";
    ?>
 
</div>
<?php
}

elseif (strcmp($pub["extension"],"docx")==0) {
  
 ?>
<div class="col-md-3 wow fadeInDown aparece" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown;"> 
    <?php
       
        echo "<a href='./novedades/funciones/".$pub['archivo']."' target='_blank'>Archivo.word <img src='./novedades/img/word.png' width='200px' ></a>";
        echo "<h2 style='margin-top:20px;'>".$pub['titulo']."</h2>";
        echo "<p>".$pub['shortdescription']."</p>";
     ?>
  
</div>
<?php
}

elseif (strcmp($pub["extension"],"txt")==0) {
  
    ?>
<div class="col-md-3 wow fadeInDown aparece" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown;"> 
    <?php
                
                echo "<a href='./novedades/funciones/".$pub['archivo']."' target='_blank'>Archivo.txt <img src='./novedades/img/txt.png' width='200px' ></a>";
                echo "<h2 style='margin-top:20px;'>".$pub['titulo']."</h2>";
                echo "<p>".$pub['shortdescription']."</p>";
              ?>
           
</div>

<?php
        }


    elseif (strcmp($pub["extension"],"rar")==0) {
  ?>
<div class="col-md-3 wow fadeInDown aparece" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown;"> 
    <?php
      
        echo "<a href='./novedades/".$pub["img"]."' target='_blank'>Archivo.rar <img src='./novedades/img/rar.png' width='200px' ></a>";
        echo "<h2 style='margin-top:20px;'>".$pub['titulo']."</h2>";
        echo "<p>".$pub['shortdescription']."</p>";
    ?>
 
</div>
<?php
    
}

elseif (strcmp($pub["extension"],"zip")==0) {
  
      ?>
<div class="col-md-3 wow fadeInDown aparece" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown;"> 
    <?php

        echo "<h2 style='margin-top:20px;'>".$pub['titulo']."</h2>";
       echo "<a href='./novedades/funciones/".$pub['archivo']."' target='_blank'>Archivo.zip <img src='./novedades/img/zip.png' width='200px' ></a>";
    
         echo "<p>".$pub['shortdescription']."</p>";
    ?>
 
    </div>


<?php
}


}    
     ?>


    </div>
</div>
</div>
