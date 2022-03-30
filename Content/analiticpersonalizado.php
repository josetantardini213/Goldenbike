
    <?php
    
    $ip_addprin = $_SERVER['REMOTE_ADDR'];
    $ip_add = strval($ip_addprin);
    $bandera=0;
   
   
   


    foreach(file('ip.txt') as $line) {

     $line2 =  substr($line,0, -1);   

    
        if($line2 == $ip_add){
            $bandera = 1;
        }
     } 


    if($bandera == 0){
    $fichero = 'ip.txt';
// Abre el fichero para obtener el contenido existente
$actual = file_get_contents($fichero);
// Añade una nueva persona al fichero
$actual .= "$ip_add\n";
// Escribe el contenido al fichero
file_put_contents($fichero, $actual);
        
    }



    $archivo = fopen("visitas.txt", "r");
     
    // Recorremos todas las lineas del archivo
    while(!feof($archivo)){
        // Leyendo una linea
        $traer = fgets($archivo);
        // Imprimiendo una linea
        $cantidad= nl2br($traer);
    }
     
    // Cerrando el archivo
    fclose($archivo);

    if($bandera==0){
    $nombreArchivo = "visitas.txt";
    $cantidad +=1;
        $archivo = fopen($nombreArchivo, "w");
        fwrite($archivo, "$cantidad");
        fclose($archivo);
    }
    ?>