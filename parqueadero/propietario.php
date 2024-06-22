<?php
include 'conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propietario de vehiculo Parking Area 51</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
    <img src="img/logo.png" alt="Logo del Parqueadero">
        <h1>Bienvenido querido propietario</h1>
        <p>Estamos encantados de darles la bienvenida a nuestro parqueadero público.<br> En Parkin Area 51, nos esforzamos por ofrecer un servicio excepcional y una experiencia de estacionamiento sin igual.<br>
        Nuestro equipo está aquí para asegurarse de que su visita sea cómoda, conveniente y segura.<br> Ya sea que estén aquí por unas pocas horas o todo el día, queremos que se sientan bienvenidos y cuidados en nuestro espacio.
      <br>Si vas a registrar tu vehiculo seleccione entrada.
      <br>Si vas de salida y deseas ver tu factura seleccione salida.

    </p>
    </header>
    
    <main>
        <div class="inicio">
            <h2>Seleccione una opción:</h2>
            <button onclick="location.href='regis_entrada.php'">Entrada</button>
            <button onclick="location.href='regis_salida.php'">Salida</button>
            <button onclick="location.href='inicio.php'">Regresar</button>
        </div>
        </div>
    </main>
</body>
</html>
