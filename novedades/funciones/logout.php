<?php


  
     session_start();
     unset($_SESSION["user"]);
     unset($_SESSION["usertype"]);
     session_unset();
     session_destroy();
      
    

     header ("location: ../../blog");
 

?>