<?php

include 'conexion.php';

if (!$con) {

	die('No se ha podido conectar a la base de datos');
}

    $user = $_POST["user"];

    $pass = $_POST["pass"];

    $resultados = mysqli_query($con, "SELECT * FROM $db_table_name_estudiante");

    $resultadosTutor = mysqli_query($con, "SELECT * FROM $db_table_name_tutor");


    while($consulta = mysqli_fetch_array($resultados)){


        if($consulta['NombreUsuario'] == $user && $consulta['Password'] == $pass){

            header('Location: ../../EstudianteVista/Estudiante.php');
            die;

        }
        
    }

    while($consultaTutor = mysqli_fetch_array($resultadosTutor)){

        if($consultaTutor['NombreUsuario'] == $user && $consultaTutor['Password'] == $pass){

            echo ("Bienvenido Tutor");
            die;

        }


    }

    header('Location: ../../fail/index.html');
    
?>