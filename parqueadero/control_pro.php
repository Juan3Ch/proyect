<?php
include 'conexion.php';

$sql = "SELECT p.id AS propietario_id, p.nombre, p.telefono, v.placa, v.tipo FROM propietarios p
        LEFT JOIN vehiculos v ON p.id = v.propietario_id
        ORDER BY p.id";
$resultado = $db->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propietarios y vehiculos Parking Area 51</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <img src="img/logo.png" alt="Logo del Parqueadero">
        <h1>Propietarios y vehiculos</h1>
    </header>
    <main>
        <table>
            <tr>
                <th>ID Propietario</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Placa del Vehículo</th>
                <th>Tipo de Vehículo</th>
            </tr>
            <?php
            if ($resultado->num_rows > 0) {
                while($row = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['propietario_id'] . "</td>";
                    echo "<td>" . $row['nombre'] . "</td>";
                    echo "<td>" . $row['telefono'] . "</td>";
                    echo "<td>" . $row['placa'] . "</td>";
                    echo "<td>" . $row['tipo'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No se encontraron datos.</td></tr>";
            }
            ?>
        </table>
        <button onclick="location.href='men_admin.php'">Regresar</button>
    </main>
</body>
</html>
