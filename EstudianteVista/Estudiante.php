<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Style.css">
    <title>Estudiante</title>
</head>

<body>
    <div class="Banner">
		
    <img src="img/logo-1.png" id="LogoBanner" style="width: 10%;"> 
    
        <form action="Valoracion/valoracion.html">
        <p class="contenido"></p>
		<input type="submit" id="boton" value="Inicio">
        <input type="submit" id="boton" value="Informes">
        <input type="submit" id="boton" value="Licencia">
        <input type="submit" id="boton" value="Valoracion">
        </form>

        <form action="../loginPro/index.html">

            <a class="salir"><img src="img/salir.png" class="cerrar"><button id="Cerrar">Cerrar Sesion</button></a>

        </form>
        
    </div>
        

    </div>
    <div class="Contenedor">
        <div class="Tablero">
            <img src="img/1.png" id="LogoTablero">
            <div class="Datos">
                <h1>Calendario</h1>
                <iframe src="https://calendar.google.com/calendar/embed?src=diegofergar21%40gmail.com&ctz=America%2FBogota" style="border:solid 3px black; margin: 15px;" width="300" height="200" frameborder="0" scrolling="no"></iframe><br>
                <h1>Usuario</h1>
                <br>
                <h2>*nombre usuario* <?php  ?></h2>
                <br>
                <h1>Materias</h1>
                <br>
                <h2>*materias*</h2>
                <br>          
            </div>
        </div>
        <div class="Contenido">
            <div class="Materias">
                <p>MATERIAS</p>
            </div>
            <div class="Profesores">
                <p>TUTORES</p>
            </div>
            <div class="Horarios">
                <p>HORARIOS</p>
            </div>
            <div class="Calificaciones">
                <p>CALIFICACIONES</p>
            </div>

        </div>  
    </div>
    </div>
</body>

</html>
