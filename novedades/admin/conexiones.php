<!DOCTYPE html>

<html lang="en">
<?php

session_start();
if(isset($_SESSION['user']) && $_SESSION['usertype'] == 1){ 



}else{
    header('Location: ../../blog');
}
?>   
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goldenbike</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/4f3bb1a9fe.js" crossorigin="anonymous"></script>
    <style>.navbar-nav {
    float: left;
    margin: 0;
    left: 50%;
    transform: translatex(-50%);
    position: relative;}

	</style>
</head>
<body>

<div class="container">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
                            <a class="nav-link" href="../../blog">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./admin">Admin blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./conexiones">Conexiones y visitas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./cargarimg">Cargar imagenes a la galeria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./links">Links</a>
                        </li>
                    </ul>
                
                </div>
            </div>
        </nav>

</div>

        <table class="table table-stripped table-hove">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Ip</th>
                    <th scope="col">Pais</th>
                    <th scope="col">Provincia</th>
                    <th scope="col">Bandera</th>
                    <th scope="col">Servicio</th>
                    <th scope="col">Latitud</th>
                    <th scope="col">Logitud</th>

                    
                </tr>
            </thead>
            <tbody id="aquielementos">
                
            <?php
              $archivoip = fopen("../../ip.txt", "r");
              $archivovisi = fopen("../../visitas.txt", "r");
                $cont=0;
               
               
                 while ($linea = fgets($archivoip)) {
                  


                    $cont +=1;
               
                  
                    
                    if(!feof($archivovisi)){
                        $traer23 = fgets($archivovisi);
                        $valor3= nl2br($traer23);
                       
                    
                      echo "<td>total:$valor3</td>";
                     
                        
                    }
                   
                
                    
                    ?>
                    
                    

                    <script>
                        fetch(`https://ipwhois.app/json/<?php echo $linea; ?>`, {
                            method: 'GET'
                         })
                         .then(response => response.json())
                         .then(responsejson2 => {
                             
                             lugar = document.getElementById("aquielementos");
                             string = `
                             <th scope='row'><?php echo $cont; ?></th>
                             <td><?php echo $linea; ?></td>
                             <td>${responsejson2.country}</td>
                             <td>${responsejson2.country_capital}</td>
                             <td><img  src="${responsejson2.country_flag}" width="100px""></td>
                             <td>${responsejson2.isp}</td>
                             <td>${responsejson2.latitude}</td>
                             <td>${responsejson2.longitude}</td>
                             `
                             lugar.innerHTML += string;
                        })
                    </script>
                    
                    <?php

                    
                 
            
          
                    }
            
              
            ?>
        

            </tbody>
        </table>


    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>