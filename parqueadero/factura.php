<?php
include 'conexion.php';

$sql = "SELECT r.id, v.placa, v.tipo, r.hora_entrada, r.hora_salida, r.total_pago FROM registros r
        INNER JOIN vehiculos v ON r.vehiculo_id = v.id
        ORDER BY r.id DESC
        LIMIT 1";
$resultado = $db->query($sql);

if ($resultado->num_rows > 0) {
    $row = $resultado->fetch_assoc();
    $placa = $row['placa'];
    $tipo_vehiculo = $row['tipo'];
    $hora_entrada = $row['hora_entrada'];
    $hora_salida = $row['hora_salida'];
    $total_pago = $row['total_pago'];

    echo "<h2>Factura</h2>";
    echo "<p><strong>Placa:</strong> $placa</p>";
    echo "<p><strong>Tipo de Vehículo:</strong> $tipo_vehiculo</p>";
    echo "<p><strong>Hora de Entrada:</strong> $hora_entrada</p>";
    echo "<p><strong>Hora de Salida:</strong> $hora_salida</p>";
    echo "<p><strong>Total a Pagar:</strong> $total_pago</p>";
} else {
    echo "No se encontraron registros de factura.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver factura Parking Area 51</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>

        <h1>Factura</h1>
    </header>
    <main>
        
    <button onclick="location.href='cerrar_sesion.php'">Salir</button>
        <button onclick="location.href=''">Imprimir</button>

    </main>
</body>
</html>
