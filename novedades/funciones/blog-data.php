
            <?php
$id = 0;
    while($pub = mysqli_fetch_array($publicacion2)){
          ?>
     
      
    <?php
$id = $id+1;    
        if(strcmp($pub["extension"],"")==0){

?>  <div class="publitexto col-md-3 "   style="opacity:1;">  <a href="<?php echo $pub['url'];  ?>"><?php
        echo "<h2 style='margin-top:20px; color:black;'>".$pub['titulo']." </h2>";
        echo "<p>".$pub['shortdescription']."</p> <br>";

    ?>
  </a>
</div>
   
<?php
}


if (strcmp($pub["extension"],"jpg")==0 || strcmp($pub["extension"],"png")==0  || strcmp($pub["extension"],"webp")==0) {
  ?>
 
<article class="postid col-md-3"  id="<?php echo 'element'.$pub['id_publicacion']; ?>" value="<?php echo $pub['id_publicacion']; ?>" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transition: all 1s ease 0s, opacity 0.6s cubic-bezier(1, 1, 1, 1) 0.2s, transform 0.6s cubic-bezier(1, 1, 1, 1) 0.2s;">
<a href="<?php echo $pub['url'];  ?>">
<div class="cobertor" onmouseover="hover('<?php echo 'element'.$pub['id_publicacion']; ?>')" onmouseout="contrarioahover('<?php echo 'element'.$pub['id_publicacion']; ?>')"></div>

    <?php
        
echo "<div class='contentimgblog'>";   

         echo "<img src='./novedades/funciones/".$pub['archivo']."' height='200' style='z-index:10;'>";
       
         ?></div><?php
         echo "<header><h2 style='margin-top:10px !important; color:black; position:absolute; left:0;  right:0;  margin:auto;  z-index:9;'>".$pub['titulo']."</header></h2>";
         echo "<h2  class='h2especial' style='margin-top:20px; z-index:12;'>".$pub['titulo']."</h2>";
         echo "<p>".$pub['shortdescription']."</p>";
    ?>
    
 </a>
</article>

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


 
