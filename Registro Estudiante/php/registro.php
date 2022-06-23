<?php

include 'conexion.php';

if (!$con) {

	die('No se ha podido conectar a la base de datos');
}

$id = $_POST["id"];

$nombre = $_POST["nombre"];

$apellido = $_POST["apellido"];

$email = $_POST["email"];

$pass = $_POST["password"];

$fechaNacimiento = $_POST["fechaNacimiento"];

$tipoDocumento = $_POST["tipoDocumento"];

$numeroDocumento = $_POST["numeroDocumento"];

$celular = $_POST["celular"];

$direccionResidencia = $_POST["direccionResidencia"];
        
$nombreUsuario = $_POST["nombreUsuario"];

$query = "INSERT INTO $db_table_name (Id,Nombre,Apellido,FechaNacimiento,Tipodocumento,NumeroDocumento,Celular,Correo,Direccion,NombreUsuario,Password) VALUES ('$id','$nombre','$apellido','$fechaNacimiento','$tipoDocumento','$numeroDocumento','$celular','$email','$direccionResidencia','$nombreUsuario','$pass')";

mysqli_query($con, $query) or die(mysql_error());
	
header('Location: ../../loginPro/php/index.html');
		
?>