<?php
// Require the constants
require('./app/config/constantes.php');
// Verificar si el usuario está logueado
require(ROOT_PATH . DS . 'app' . DS . 'login' . DS . 'verificar-login.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <link rel="shortcut icon" href="./assets/img/favicon.ico" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css" />
  <title>usuarios de foodapp</title>
  <link rel="stylesheet" href="estilos.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="http://localhost/examen/assets/css/style.css">
</head>

<body class="registro">
 
    <div class="division"></div>
    <div class=" crearregistro">

      <div class="container-fluid row">
        <div class="contenedor">
          <form class=" col-5 " method="POST">
            <h3 class="text-center">Crear usuario Nuevo</h3>
            <?php
            include "modelo/conexion.php";
            include "controlador/crear_usuario.php";
            ?>

            <div class="mb-1 mt-3">
              <label for="exampleInputEmail1" class="form-label">nombre</label>
              <input type="text" class="form-control" name="name">
            </div>

            <div class="mb-1">
              <label for="phone" class="form-label">telefono</label>
              <input type="text" class="form-control" name="phone">
            </div>

            <div class="mb-1">
              <label for="email" class="form-label">nombre de usuario</label>
              <input type="text" class="form-control" name="email">
            </div>

            <div class="mb-1">
              <label for="pass" class="form-label">contraseña</label>
              <input type="password" class="form-control" name="pass">
            </div>
            <div class="centrar">
              <button type="submit" name="btnregistrar" value="ok" class="btnagregar btn-primary">agregar</button>
            </div>
          </form>

        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>