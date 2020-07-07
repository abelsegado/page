<?php 

if(isset($_GET['nombre']) && isset($_GET['contra'])){

	$mysqli = new mysqli('127.0.0.1', 'root', '', 'tiendaonline'); 

	if ($mysqli->connect_errno) {
		echo "Hubo problemas con la conexión" . $mysqli->connect_errno;
	}
	else{
		
		$sql = "SELECT * FROM usuarios where usuario ='".$_GET['nombre']."' and contrasena = '".$_GET['contra']."'";

		$resultado = $mysqli->query($sql);
		if (!$resultado) { 
			echo "Hubo un error al ejecutar la consulta " . $mysqli->errno;
		}
		else{//si todo fue bien
			$id = $resultado->fetch_assoc();
			if(strlen($id["idusuarios"])>0){
				setcookie("id",$id["usuario"],time()+36000,"/page/");
				$resultado->free(); //liberamos memoria
				$mysqli->close();//cerramos conexión a la base de datos
				 header('Location: ../index.php');
			}else{
				$resultado->free(); //liberamos memoria
				$mysqli->close();//cerramos conexión a la base de datos
				header('Location: login.php');
			}
	    }
	}
	
}else{
	echo "hola";
}
?>