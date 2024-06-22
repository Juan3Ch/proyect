<?php
session_start();
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $contrasena = $_POST['contrasena'];

    $sql = "SELECT * FROM administradores WHERE nombre = ? AND contrasena = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("ss", $nombre, $contrasena);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
      
        $_SESSION['administrador'] = $nombre;
        header("Location: men_admin.php");
    } else {
        
        echo "Nombre o contraseña incorrectos.";
    }

    $stmt->close();
    $db->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador Parking Area 51</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <img src="img/logo.png" alt="Logo del Parqueadero">
        <h1>Bienvenido querido administrador</h1>
       <p> Bienvenido, administrador a Parking Area 51. Estamos encantados de tenerle aquí para gestionar y supervisar nuestro parqueadero. <br>Su contribución es fundamental para mantener nuestro servicio eficiente y seguro para todos nuestros usuarios.
<br>Si usted es un usuario, por favor diríjase a nuestra página destinada a los usuarios para continuar con su visita a Parking Area 51.<br> ¡Gracias por su cooperación!</p>
    </header>
    <main>
        <form id="adminn" action="admin.php" method="POST">
            <label for="nombre">Usuario de administrador:</label>
            <input type="text" id="username" name="nombre" required>
            <label for="admincontrasena">Contraseña:</label>
            <input type="password" id="Contrasena" name="contrasena" required>
           
            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg azul mb-3" type="submit">Ingresar</button>
            <button onclick="location.href='inicio.php'">Regresar</button>
    </form>
    </main>
</body>
</html>
