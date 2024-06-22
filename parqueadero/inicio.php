<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paking area 51</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
      <img src="img/logo.png" alt="Logo del Parqueadero">
        <h1>Bienvenido al Paking area 51</h1>
        <p>Bienvenidos de nuevo a Parking Area 51. Si eres usuario, por favor selecciona la opción "Propietario de vehículo" para comenzar tu registro.<br> Una vez que hayas revisado tu factura y finalizado tus trámites, te invitamos a cerrar sesión para garantizar la seguridad de tus datos. <br>¡Gracias por confiar en nosotros para el cuidado de tu vehículo!</p>
        
    </header>
    <main>
        <div class="inicio">
            <h2>Seleccione una opción:</h2>
            <button onclick="location.href='admin.php'">Administrador</button>
            <button onclick="location.href='propietario.php'">Propietario de Vehículo</button>
            <button onclick="location.href='cerrar_sesion.php'">Cerrar sesion</button>
        </div>
    </main>
</body>
</html>
