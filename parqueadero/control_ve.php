<?php
include 'conexion.php';

$sql = "SELECT tipo, COUNT(*) as cantidad FROM vehiculos GROUP BY tipo";
$resultado = $db->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver numeros de vehiculos y tipos Parking Area 51</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <img src="img/logo.png" alt="Logo del Parqueadero">
        <h1>Numeros de vehiculos y tipos</h1>
    </header>
    <main>
        <table>
            <tr>
                <th>Tipo de vehiculo</th>
                <th>Cantidad</th>
            </tr>
            <?php
            if ($resultado->num_rows > 0) {
                while($row = $resultado->fetch_assoc()) {
                    echo "<tr><td>" . $row['tipo'] . "</td><td>" . $row['cantidad'] . "</td></tr>";
                }
            } else {
                echo "<tr><td colspan='2'>No se encontraron datos.</td></tr>";
            }
            ?>
        </table>
        <button onclick="location.href='men_admin.php'">Regresar</button>
    </main>
</body>
</html>
