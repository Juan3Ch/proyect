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
        header("Location:inicio.php");
    } else {
        
        echo "Nombre o contraseña incorrectos.";
    }

    $stmt->close();
    $db->close();
}
?>
<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="estilos.css">
  <title>Ingreso Parking Area 51</title>
</head>

<body>
  <section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
                  <div class="text-center">
                  <img src="img/logo.png" style="width: 170px;" alt="Logo del Parqueadero">
                  </div>
                  <form action="login.php" method="POST">
                    <div class="form-outline mb-4">
                    <label class="form-label" for="username">Usuario admin:</label>
                      <input type="text" id="username" name="nombre" class="form-control"/>
                    </div>
                    <div class="form-outline mb-4">
                      <label class="form-label" for="password">Contraseña:</label>
                      <input type="password" id="password" name="contrasena" class="form-control"/>
                    </div>
                    <div class="text-center pt-1 mb-5 pb-1">
                      <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg azul mb-3" type="submit">Ingresar</button>
                      <a class="text-muted" href="#!">Olvidaste tu contraseña?</a>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">Parking area 51</h4>
                  <p class="small mb-0">Bienvenidos a todos a Parking Area 51. Nos complace tenerlos aquí y esperamos que disfruten de nuestro servicio de parqueadero. Te invitamos a solicitar asistencia al administrador si necesitas ayuda para ingresar.<br> Estamos aquí para hacer tu experiencia lo más conveniente y segura posible. ¡Gracias por elegir Parking Area 51!</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>