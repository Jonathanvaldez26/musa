<?php
if(isset($_GET['pagina'])){
	$enlace = $_GET['pagina'];
  
	if($enlace == 'home.php'){
		

	}elseif($enlace == "eventos-sociales" || $enlace == "menu-list" || $enlace == "programa-academico"){
		header("Location: " .$enlace );
	}
	else{
		header("Location: error-404");
	}
}
  
?>