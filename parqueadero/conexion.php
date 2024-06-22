<?php

$db = new mysqli('localhost', 'root', '', 'parqueadero');
if ($db->connect_error) {
	die('Error de conexión con la base de datos: '  . $db->connect_error);
}
?>