<?php
include 'conexion.php';

//if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // $id = $_POST['id'];
    //$sql = "DELETE FROM propietarios WHERE id='$id'";
   // if ($db->query($sql) === TRUE) {
     //   echo "Propietario eliminado exitosamente.";
    //} else {
      //  echo "Error al eliminar el propietario: " . $db->error;
    //}
//}
//?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar propietario Parking Area 51</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <img src="img/logo.png" alt="Logo del Parqueadero">
        <h1>Eliminar Propietario</h1>
    </header>
    <main>
        <form action="eliminar_pro.php" method="POST">
            <label for="id">ID del Propietario:</label>
            <input type="number" id="id" name="id" required>
            <button type="submit">Eliminar Propietario</button>
        </form>
        <button onclick="location.href='men_admin.php'">Regresar</button>
    </main>
</body>
</html>
