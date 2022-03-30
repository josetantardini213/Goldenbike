<?php


if (isset($_POST["enviar"])) {
    if (!empty($_POST["email"])) {
        $regex = "/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/";
        if(preg_match($regex, $_POST['email'])){
        
        $correo = htmlspecialchars($_POST['email']);
        $nombre = htmlspecialchars($_POST['nombrePersona']);
        $apellido = htmlspecialchars($_POST['apellidoPersona']);
        $provincia = htmlspecialchars($_POST['provincias']);
        $localidad = htmlspecialchars($_POST['localidad']);
        $telefono = htmlspecialchars($_POST['telefono']);
        $consulta = htmlspecialchars($_POST['consulta']);
    
    $asunto = "Hola ".$nombre." esta es tu solicitud de contacto";
    
    $mensaje = '<html>'.
        '<head><title>Goldenbike</title>
    
    <style>
    .carrito{
    
        justify-content:center;
        align-items:center;
        margin:50px auto 50px auto;
        width:70%;
        display:block;
        background-color:whitesmoke;
        height:100%;
        box-shadow:0px 0px 10px 0.5px;
        border-radius:10px;
    
    }
    
    img{
        display:block;
    justify-content:center;
        align-items:center;
        margin:auto;	
        border-radius:5px;
        height:50%;
        box-shadow:0px 0px 4px 1px;
    
    }
    p {
    
        text-align:center;
    
        margin:10px auto 0px auto;
    }
    
    h1 {
        text-align:center;
    
    margin:10px auto 15px auto;}
    
    h2{
    text-align:center;
    margin:10px auto 20px auto;
        
    }
    h3 { 
    text-align:center;
    margin:10px auto 0px auto;
        
        }
    
    h4 {
    text-align:center;
    
        margin:auto;
    
    }	
    
    .precio{
    background-color:#0C1089;
    width:400px;
    height:60px;
    padding:15px;
     display: flex;
       align-items: center;
       border-radius:100px;
       box-shadow:0px 0px 2px 2px;
       font-family:arial;
       font-size:18px;
       font-weight: bold;
       color:white;
    }
    
    .titulo{
        font-family:arial;
    transition:0.5s;
    width:80%;
      
        
    }
    
    
    </style>
        </head>'.
        '<body><h1 class="titulo">Solicitud de contacto:</h1> '.
    
        
    
        '</body>'.
        '</html>';
        $mensaje .= '<h3>¡HOLA '.$nombre.' TU SOLICITUD DE CONTACTO YA FUE ENVIADA!</h3>';
        $mensaje .= '<h3>PRONTO SE COMUNICARAN CON USTED.</h3>';
    
        $mensaje.='<img src="https://www.goldenbike.com.ar/img/LOGONEGROfondotransparente(1)(3).png" style="display:flex !important; justify-content:center !important; align-items:center !important; text-align:center !important; margin:auto !important; margin-top:50px !important; margin-bottom:50px !important;" width="50%" height="100%">';
            $mensaje .= '<h3>Gracias por tu contacto</h3>';
                $mensaje .= '<p><br>Por cualquier otra duda puedes mandarnos un email: franquicias@goldenbike.com.ar</p>';
        
    
    
        
    
        
    $cabeceras = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $cabeceras .= "From:franquicias@goldenbike.com.ar"."\r\n";  
    $cabeceras.= "Reply_To:franquicias@goldenbike.com.ar". "\r\n";
    $cabeceras.= "X-Mailer: PHP/". phpversion(); 
    $mail = mail($correo, $asunto, $mensaje,$cabeceras);
    
    if ($mail) {
        
        echo "<h4 class='alert alert-success' style='font-size:15px; width:100%; display:flex; align-content:center;justify-content:center;
        align-items:center;
        margin:auto; border-radius:100px; padding:15px; color:black;'>¡Solicitud enviada exitosamente! <br> Revisa tu cuenta de correo electronico.</h4>";
    }elseif(!$email){
             
        echo "<h4 class='alert alert-danger' style='font-size:15px; width:100%; display:flex; align-content:center;justify-content:center;
        align-items:center;
        margin:auto; border-radius:100px; padding:15px; color:black;'>¡Error email no valido!</h4>";

    }

        
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    $asunto2 = "Hola este usuario te realizo una solicitud de contacto";
    
    
    $mensaje2 = '<html>'.
        '<head><title>soldi</title>
    
    <style>
    .carrito{
    
        justify-content:center;
        align-items:center;
        margin:50px auto 50px auto;
        width:70%;
        display:block;
        background-color:whitesmoke;
        height:100%;
        box-shadow:0px 0px 10px 0.5px;
        border-radius:10px;
    
    }
    
    img{
        display:block;
    justify-content:center;
        align-items:center;
        margin:auto;	
        border-radius:5px;
        height:50%;
        box-shadow:0px 0px 4px 1px;
    
    }
    p {
    
        text-align:center;
    
        margin:10px auto 0px auto;
    }
    
    h1 {
        text-align:center;
    
    margin:10px auto 15px auto;}
    
    h2{
    text-align:center;
    margin:10px auto 20px auto;
        
    }
    h3 { 
    text-align:center;
    margin:10px auto 0px auto;
        
        }
    
    h4 {
    text-align:center;
    
        margin:auto;
    
    }	
    
    .mundo{
        display:flex;
        align-items: center;
        justify-content:center;
        text-align:center;
            margin:auto;
            
    }
    
    
    .precio{
    background-color:#0C1089;
    width:400px;
    height:60px;
    padding:15px;
     display: flex;
       align-items: center;
       border-radius:100px;
       box-shadow:0px 0px 2px 2px;
       font-family:arial;
       font-size:18px;
       font-weight: bold;
       color:white;
    }
    
    .titulo{
        font-family: Georgia;
    transition:0.5s;
    width:80%;
      background: -webkit-linear-gradient(yellow,red);
       -webkit-background-clip: text;
       -webkit-text-fill-color: transparent;
         color: tomato;
    }
    
    </style>
        </head>'.
        '<body><h1 class="titulo">Solicitud de contacto</h1>'.
    
        '</body>'.
        '</html>';
        
        $mensaje2 = '<h1 style="text-align:center;"> '.$nombre.' '.$apellido.' quiere contactarte franquicias</h1>';
        $mensaje2 .= '<h4 style="text-align:center;">Solicitud de contacto de: '.$nombre.' '.$apellido.' por franquicias </h4>';
    
    $mensaje2 .= '<h4 style="text-align:center;">Correo: '.$correo.' </h4>';
    
    $mensaje2 .= '<h4 style="text-align:center;">Los datos fueron enviados al correo: '.$correo.' </h4>';
    $mensaje2 .= '<h4 style="text-align:center;">Telefono: '.$telefono.'</h4>';
    $mensaje2 .= '<h4 style="text-align:center;">Provincia: '.$provincia.'</h4>';
    $mensaje2 .= '<h4 style="text-align:center;">Localidad: '.$localidad.'</h4>';
  
    $mensaje2 .= '<h4 style="text-align:center;">Consulta del cliente: '.$consulta.'</h4> ';


    
    
    $mensaje2 .= '<h4 style="text-align:center;" >Fecha de solicitud: '.date("d-m-Y").'  </h4 style="text-align:center; ">';
    
            $mensaje2 .= '<h3 style="text-align:center;">¡QUE TENGAS UN BUEN DIA!!!:</h3>';
        
            
    
    
        
    $cabeceras2 = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras2 .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $cabeceras2 .= "From:franquicias@goldenbike.com.ar"."\r\n";  
    $cabeceras2.= "Reply_To:franquicias@goldenbike.com.ar". "\r\n";
    $cabeceras2.= "X-Mailer: PHP/". phpversion(); 
    $mail2 = mail("franquicias@goldenbike.com.ar", $asunto2, $mensaje2,$cabeceras2);
    

}else{
                 
    echo "<h4 class='alert alert-danger' style='font-size:15px; width:100%; display:flex; align-content:center;justify-content:center;
    align-items:center;
    margin:auto; border-radius:100px; padding:15px; color:black;'>Email no valido</h4>";
}
    
    
        }else{
             
        echo "<h4 class='alert alert-danger' style='font-size:15px; width:100%; display:flex; align-content:center;justify-content:center;
        align-items:center;
        margin:auto; border-radius:100px; padding:15px; color:black;'>¡Faltan campos a completar!</h4>";
        }
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
        }	
    
    
    
    
    
    

    



?>