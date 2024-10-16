<?php
// Require the constants
require('./app/config/constantes.php');
?>
?>
<!doctype html>
<html lang="es">
<head>
    <title>Registrarse</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <!-- implementar tailwind -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="./style.css"> -->
    <link rel="stylesheet" href="cl-icon/css/all.min.css">
    <style>
        * {
  margin: 0;
  padding: 0;
  font-family: arial;
  color: #fff;
}
body {
  width: 100vw;
  height: 100vh;
  background: #ffffff;
  display: grid;
  justify-content: center;
  align-content: center;
}
::-webkit-input-placeholder {
  color: #eee;
}
.wrapper {
  position: relative;
  width: 800px;
  height: auto;
  display: grid;
  grid-template-columns: 1fr 1fr;
  border: 3px solid #76bdff;
  box-shadow: 0 0 50px 0 #099dff;
}
.form {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.title {
  font-size: 25px;
  color: #000000;
  padding-top: 15px;
  
}
.inp {
  padding-bottom: 5px;
  border-bottom: 2px solid #eee;
}
.input {
  border: none;
  outline: none;
  background: none;
  width: 260px;
  margin-top: 20px;
  padding-right: 10px;
  font-size: 17px;
  color: rgb(0, 4, 255);
}
.submit {
  border: none;
  outline: none;
  width: 288px;
  margin-top: 25px;
  padding: 10px 0;
  font-size: 20px;
  border-radius: 40px;
  letter-spacing: 1px;
  cursor: pointer;
  color: #ffffff;
  background: linear-gradient(45deg,  rgb(0, 4, 255), #76bdff);
}
.footer {
  margin-top: 30px;
  letter-spacing: 0.5px;
  font-size: 14px;
  color: #000000;
}
.link {
  color: #76bdff;
  text-decoration: none;
}
.banner {
  position: absolute;
  top: 0;
  right: 0;
  width: 450px;
  height: 390px;
  background: linear-gradient(to right, rgb(0, 4, 255), #76bdff);
  clip-path: polygon(0 0, 100% 0, 100% 100%, 60% 100%);
  padding-right: 70px;
  text-align: right;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-end;
}

.wel_text {
  font-size: 40px;
  margin-top: -50px;
  line-height: 50px;
}
.para {
  margin-top: 10px;
  font-size: 18px;
  line-height: 24px;
  letter-spacing: 1px;
}

.fondonavegacion{
  color: rgb(255, 255, 255);
  border: none;
  padding: 5px 10px;
  border-radius: 5px;
  box-shadow: 4px 4px 2px 1px rgba(0, 0, 0, 0.2);
}
    </style>
</head>

<body>
    <div class="wrapper">
        <form action="app/login/register.php" class="form" method="POST">
            <h1 class="title font-mono">Crear usuario</h1>
            <?php
            include "modelo/conexion.php";
            include "controlador/crear_usuario.php";
            ?>
            <div class="inp">
            <label for="exampleInputEmail1" class="form-label">nombre</label>
                <input type="text" name="name" id="" class="input" placeholder="Nombre Completo">
            </div>

            <div class="inp">
            <label for="phone" class="form-label">telefono</label>
            <input type="text" name="phone" id="" class="input" placeholder="Numero de Telefono">
            </div>

            <div class="inp">
            <label for="email" class="form-label">nombre de usuario</label>
            <input type="text" name="email" id="" class="input" placeholder="usuario">
            </div>

            <div class="inp">
            <label for="pass" class="form-label">contraseña</label>
            <input type="password" name="pass" id="" class="input" placeholder="contraseña">
            </div>

            <button type="submit" name="btnregistrar" value="ok" class="btnagregar btn-primary submit">agregar</button>
            <p class="footer">¿ya tienes una cuenta? <a href="login.php" class="link">Iniciar Secion</a></p>
        </form>
    
        <div class="banner">
            <h1 class="wel_text">Bienvenid@</h1><br>
            <p class="para"></p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>