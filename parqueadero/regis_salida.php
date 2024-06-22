<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $placa = $_POST['placa'];
    $hora_salida = $_POST['hora_salida']; 

    
    $sql = "SELECT r.id, r.hora_entrada, v.tipo FROM registros r
            INNER JOIN vehiculos v ON r.vehiculo_id = v.id
            WHERE v.placa = '$placa'
            ORDER BY r.id DESC
            LIMIT 1";
    $resultado = $db->query($sql);

    if ($resultado->num_rows > 0) {
        $row = $resultado->fetch_assoc();
        $registro_id = $row['id'];
        $hora_entrada = $row['hora_entrada'];
        $tipo_vehiculo = $row['tipo'];

      
        $diferencia = strtotime($hora_salida) - strtotime($hora_entrada);
        $horas_estacionado = ceil($diferencia / 3600); 

        
        if ($tipo_vehiculo == 'moto') {
            $costo_por_hora = 4000; 
        } else {
            $costo_por_hora = 10000; 
        }
        $total_pago = $horas_estacionado * $costo_por_hora;

        
        $sql = "UPDATE registros SET hora_salida='$hora_salida', total_pago='$total_pago' WHERE id='$registro_id'";
        if ($db->query($sql) === TRUE) {
            echo "Registro de salida exitoso. Total a pagar: $" . $total_pago;
        } else {
            echo "Error al registrar la salida: " . $db->error;
        }
    } else {
        echo "No se encontro ningun registro para la placa especificada.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de salida Parkin Area 51</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
    <img src="img/logo.png" alt="Logo del Parqueadero">
        <h1>Registro de Salida</h1>
        <p>Gracias por utilizar nuestras instalaciones en Parking Area 51. Esperamos haber cumplido con sus expectativas y que su experiencia haya sido placentera.<br> ¡Hasta la próxima visita!
        </p>
    </header>
    <main>
        <form action="regis_salida.php" method="POST">
            <label for="placa">Placa:</label>
            <input type="text" id="placa" name="placa" required>
            <label for="hora_salida">Hora de Salida:</label>
            <input type="datetime-local" id="hora_salida" name="hora_salida" required>
            <button type="submit">Registrar Salida</button>
        </form>
        <button onclick="location.href='inicio.php'">Regresar</button>
        <button onclick="location.href='factura.php'">Ver Factura</button>
    </main>
</body>
</html>
