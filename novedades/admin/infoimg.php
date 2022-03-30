
<?php

session_start();
if(isset($_SESSION['user']) && $_SESSION['usertype'] == 1){ 



}else{
    header('Location: ../../blog');
}
?> 
<?php
	    if(isset($_POST['borrar'])){


        unlink($_POST['file']);

        echo"<br><p class='alert alert-success'>Imagen borrada con exito</p>";

    }

    
    $cont = 0;
    
    
    $thefolder = "../../galeria/";
	if ($handler = opendir($thefolder)) {
		while (false !== ($file = readdir($handler))) {
			if(strlen($file) > 2){
				$cont +=1;
			?>
            
            <div class="contentimg">
            <img src="<?php echo "../../galeria/".$file ?>" width="100">
			<br>
            <p style="display: none;" id="texto_a_copiar<?php echo $cont; ?>" value="12">&lt;img   src="https://www.goldenbike.com.ar/galeria/<?php echo $file; ?>" &gt;</p>
					<input type="submit" onclick="borrar('../../galeria/<?php echo $file; ?>')" name="borrar" value="Borrar">
					<button class="btn btn-info" onclick="copyClipboard('#texto_a_copiar<?php echo $cont; ?>')" style="display:flex; justify-content:center; margin:auto;">Copiar</button>		</div>
			<?php
			}
		}
		closedir($handler);
	}








?>
<script>
function copyClipboard(element) {
  var $bridge = $("<input>")
  $("body").append($bridge);
  $bridge.val($(element).text()).select();
  document.execCommand("copy");
  $bridge.remove();
  alert("Copiado");

}
</script>