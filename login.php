<?php
// Require the constants
require('./app/config/constantes.php');

// if get request logout is set, destroy the session
if (isset($_GET['logout'])) {
    session_start();
    session_destroy();
    header("Location: login.php");
    exit;
}
?>
<!doctype html>
<html lang="es">

<head>
    <title>login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="cl-icon/css/all.min.css">
</head>

<body>
    <div class="wrapper">
        <form action="app/login/register.php" class="form" method="post">
        <h3 class="title">Crear usuario Nuevo</h3>
        <?php
            if (isset($_GET['error'])) {
                echo "<p class='text-danger'>Email o contraseña incorrectos</p>";
            }
            ?>
            <div class="inp">
                <input type="text" name="email" id="" class="input" placeholder="usuario">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="inp">
                <input type="password" name="password" id="" class="input" placeholder="contraseña">
                <i class="fa-solid fa-lock"></i>
            </div>
            <button type="submit" class="submit btn mt-4" name="login">Ingresar</button>
            <p class="footer">¿No tienes cuenta? <a href="registrarse.php" class="link">registrarse</a></p>
        </form>
        <div></div>
        <div class="banner">
            <h1 class="wel_text">Bienvenid@</h1><br>
            <p class="para"></p>
        </div>
    </div>

</body>

</html>