<?php
include "conexion.php";


 

if(isset($_POST["ingresar"])){

    if(strcmp($_POST["username"],"")!=0 && strcmp($_POST["password"],"")!=0){
$usuario =  mysqli_real_escape_string($conexion,$_POST["username"]);

$contra = mysqli_real_escape_string($conexion,$_POST["password"]);

   
    
 $validus = "SELECT user FROM users WHERE user='$usuario'" ;
         
         $resultus=mysqli_query($conexion,$validus);    


         if(mysqli_num_rows($resultus)==0){
     
            echo "<p class='alert alert-danger'>"."Usuario o contraseña incorrectos."."</p>";

            
            }else{
                $login = "SELECT user,pass,usertype FROM users " ;
         
                $resultado=mysqli_query($conexion,$login);
            
           
           while($mostrar = mysqli_fetch_array($resultado)){
               
               
               if(strcmp($usuario,$mostrar['user'])==0 && password_verify($contra,$mostrar['pass'])){
             
                
                $_SESSION['user'] = $usuario;
                $_SESSION['usertype'] = $mostrar['usertype'];
         
                    
           
        
                   
                   
               header("location: ../../blog");
                
                   
               }
               else{
                echo "<p class='alert alert-danger'>"."Contraseña erronea"."</p>";

               }
           }
           
            }

    



    
     
    }else{
        echo "<p class='alert alert-danger'>"."Faltan campos a llenar"."</p>";
    }
    
    
}




?>