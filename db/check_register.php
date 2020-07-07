<?php 

if(isset($_POST['usu']) && isset($_POST['pass']) && isset($_POST['passConfirm'])){
	if ($_POST['pass']==$_POST['passConfirm']) {
	

$usuario=$_POST['usu'];
$password=$_POST['pass'];
	$mysqli = new mysqli('127.0.0.1', 'root', '', 'tiendaonline'); 

	if ($mysqli->connect_errno) {
		echo "Hubo problemas con la conexión" . $mysqli->connect_errno;
	}
	else{
		
		$sql = "INSERT INTO usuarios (idusuarios, usuario, contrasena) VALUES(NULL,'$usuario','$password')";

		$resultado = $mysqli->query($sql);
		if (!$resultado) { 
			echo "Hubo un error al ejecutar la consulta " . $mysqli->errno;
		}
		else{//si todo fue bien
			echo "te has registrado correctamente";
			header('Location:login.php');
			// $id = $resultado->fetch_assoc();
			
			// if(strlen($id["idusuarios"])>0){
			// 	setcookie("id",$id["idusuarios"],time()+3600);
			// 	$resultado->free(); //liberamos memoria
			// 	$mysqli->close();//cerramos conexión a la base de datos
			// 	header('Location: indexa.php');
			// }else{
			// 	$resultado->free(); //liberamos memoria
			// 	$mysqli->close();//cerramos conexión a la base de datos
			// 	header('Location: index.php');
			// }
	    }
	}
		}else{
			header('Location:registro.php');
		}
}else{
	echo "hola";
}
?>