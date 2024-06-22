<?php
include 'conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracion de propietarios Parking area 51</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
    <img src="img/logo.png" alt="Logo del Parqueadero">
        <h1>Administracion y control de propietarios</h1>
    </header>
    <main>
        
        <li><a href="control_pro.php">Ver propietarios</a></li>
        <li><a href="control_ve.php">Ver numeros de vehiculos y tipos</a></li>
        <li><a href="eliminar_pro.php">Eliminar propietario</a></li>


        </ul>
        <button onclick="location.href='cerrar_sesion.php'">Cerrar sesion</button>
        <button onclick="location.href='inicio.php'">Regresar</button>
    </main>
</body>
</html>
