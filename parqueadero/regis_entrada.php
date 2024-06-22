<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $placa = $_POST['placa'];
    $tipo = $_POST['tipo'];
    $hora_entrada = date('Y-m-d H:i:s'); 

    
    $sql = "INSERT INTO propietarios (nombre, telefono) VALUES ('$nombre', '$telefono')";
    $db->query($sql);
    $propietario_id = $db->insert_id;
    $sql = "INSERT INTO vehiculos (propietario_id, tipo, placa) VALUES ('$propietario_id', '$tipo', '$placa')";
    $db->query($sql);
    $vehiculo_id = $db->insert_id;
     $sql = "INSERT INTO registros (vehiculo_id, hora_entrada) VALUES ('$vehiculo_id', '$hora_entrada')";
    if ($db->query($sql) === TRUE) {
        echo "Registro de entrada exitoso.";
    } else {
        echo "Error al registrar la entrada: " . $db->error;
    } 
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de entrada Parking Area 51</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
       <img src="img/logo.png" alt="Logo del Parqueadero">
        <h1>Registro de entrada</h1>
        <p>Apreciado propietario, le solicitamos que complete el registro asegurándose de que toda la información proporcionada sea precisa y actualizada.<br> La información es crucial para garantizar un servicio eficiente y seguro en Parking Area 51.<br>¡Gracias por su cooperación!</p>

    </header>
    <main>
        <form action="regis_entrada.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" required>
            <label for="placa">Placa:</label>
            <input type="text" id="placa" name="placa" required>
            <label for="tipo">Tipo:</label>
            <select id="tipo" name="tipo">
                <option value="moto">Moto</option>
                <option value="carro">Carro</option>
            </select>
            <label for="hora_entrada">Hora de entrada:</label>
            <input type="datetime-local" id="hora_salida" name="hora_salida" required>
            <button type="submit">Registrar</button>
           
        </form>
        <button onclick="location.href='inicio.php'">Regresar</button>
    </main>
</body>
</html>
