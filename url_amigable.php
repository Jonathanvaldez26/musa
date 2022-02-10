<?php
if(isset($_GET['pagina'])){
	$enlace = $_GET['pagina'];
  
	if($enlace == 'home.php'){
		

	}elseif($enlace == "eventos-sociales" || $enlace == "menu-list" || $enlace == "programa-academico"){
		header("Location: " .$enlace );
	}
	else{
	  echo 'error'.$_GET['pagina'];
	}
  }
  else{
	$enlace = 'home';
	header("Location: home");
  }
?>