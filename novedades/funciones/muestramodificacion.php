



<div class="iconos3" style="background-color: white;">
        <div class="containeres">
        <div class="row1">
            <?php
            if(isset($_GET['modifi'])){
                
              $valor = $_GET['modifi'];
$publicacion = "SELECT shortdescription,descripcion,archivo,titulo,id_publicacion,extension FROM publicacionesblog WHERE id_publicacion=".$valor." " ;
    
    $publicacion2=mysqli_query($conexion,$publicacion);

    while($pub = mysqli_fetch_array($publicacion2)){
          ?>
     
      
    <?php
    
        if(strcmp($pub["extension"],"")==0){

?>   <div class="col-md-3 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown;"> <?php
        echo "<h2>".$pub['titulo']." </h2>";
        echo "<p>".$pub['shortdescription']."</p> <br>";
    ?>

</div>
<?php
}


if (strcmp($pub["extension"],"jpg")==0 || strcmp($pub["extension"],"png")==0 || strcmp($pub["extension"],"webp")==0 ) {
  ?>
<div class="col-md-3 wow fadeInDown " data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown;"> 
    <?php
        
        
         echo "<img src='../".$pub['archivo']."' height='200'>";
         echo "<h2>".$pub['titulo']."</h2>";
         echo "<p>".$pub['shortdescription']."</p>";
    ?>
 
</div>
<?php
}


elseif (strcmp($pub["extension"],"mp4")==0) {
  
        ?>
<div class="col-md-3 wow fadeInDown " data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown;"> 
    <?php
       
        
         echo "<video src='../".$pub['archivo']."' width=85%  controls ></video>";
         echo "<h2>".$pub['titulo']."</h2>";
         echo "<p>".$pub['shortdescription']."</p>";
     ?>
  
</div>
<?php
}

elseif (strcmp($pub["extension"],"pdf")==0) {
  
 ?>
<div class="col-md-3 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown;"> 
    <?php
      
        
         echo "<embed src='../".$pub['archivo']."' type='application/pdf' width='100%' height='600px' />";
         echo "<h2>".$pub['titulo']."</h2>";
         echo "<p>".$pub['shortdescription']."</p>";
    ?>
 
</div>
<?php
}

elseif (strcmp($pub["extension"],"docx")==0) {
  
 ?>
<div class="col-md-3 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown;"> 
    <?php
       
        echo "<a href='../".$pub['archivo']."' target='_blank'>Archivo.word <img src='../../img/word.png' width='200px' ></a>";
        echo "<h2>".$pub['titulo']."</h2>";
        echo "<p>".$pub['shortdescription']."</p>";
     ?>
  
</div>
<?php
}

elseif (strcmp($pub["extension"],"txt")==0) {
  
    ?>
<div class="col-md-3 wow fadeInDown " data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown;"> 
    <?php
                
                echo "<a href='../".$pub['archivo']."' target='_blank'>Archivo.txt <img src='../../img/txt.png' width='200px' ></a>";
                echo "<h2>".$pub['titulo']."</h2>";
                echo "<p>".$pub['shortdescription']."</p>";
              ?>
           
</div>

<?php
        }


    elseif (strcmp($pub["extension"],"rar")==0) {
  ?>
<div class="col-md-3 wow fadeInDown " data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown;"> 
    <?php
      
        echo "<a href='".$pub["img"]."' target='_blank'>Archivo.rar <img src='../../img/rar.png' width='200px' ></a>";
        echo "<h2>".$pub['titulo']."</h2>";
        echo "<p>".$pub['shortdescription']."</p>";
    ?>
 
</div>
<?php
    
}

elseif (strcmp($pub["extension"],"zip")==0) {
  
      ?>
<div class="col-md-3 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInDown;"> 
    <?php

        echo "<h2>".$pub['titulo']."</h2>";
       echo "<a href='./funciones/".$pub['archivo']."' target='_blank'>Archivo.zip <img src='../../img/zip.png' width='200px' ></a>";
    
         echo "<p>".$pub['shortdescription']."</p>";
         
    ?>
 
    </div>


<?php
}


} 

            }
     ?>


    </div>
</div>
</div>
