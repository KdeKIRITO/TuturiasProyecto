<?php

include 'conexion.php';

if (!$con) {

	die('No se ha podido conectar a la base de datos');
}

$id = $_POST["id"];

$documento = $_POST["documentos"];

$nombre = $_POST["nombre"];

$apellido = $_POST["apellido"];

$email = $_POST["email"];

$pass = $_POST["password"];

$fechaNacimiento = $_POST["fechaNacimiento"];

$tipoDocumento = $_POST["tipoDocumento"];

$numeroDocumento = $_POST["numeroDocumento"];

$celular = $_POST["celular"];

$direccion = $_POST["direccion"];

$experiencia = $_POST["experiencia"];
        
$nombreUsuario = $_POST["nombreUsuario"];

$query = "INSERT INTO $db_table_name (Id,Nombre,Apellido,FechaNacimiento,TipoDocumento,NumeroDocumento,Celular,Correo,Direccion,NombreUsuario,Password,Experiencia,Documentos) VALUES ('$id','$nombre','$apellido','$fechaNacimiento','$tipoDocumento','$numeroDocumento','$celular','$email','$direccion','$nombreUsuario','$pass','$experiencia','$documento')";

mysqli_query($con, $query) or die(mysql_error());
	
header('Location: ../../Pagina Principal/index.html');
		
?>