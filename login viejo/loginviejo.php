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
  <link rel="stylesheet" href="./login.css">
</head>
<body>
  <div class="section">
    <div class="container">
      <div class="row full-height justify-content-center">
        <div class="col-12 text-center align-self-center py-5">
          <div class="section pb-5 pt-5 pt-sm-2 text-center">
            <h6 class="mb-0 pb-3"><span>Ingresar </span><span>Crear una cuenta</span></h6>
            <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
            <label for="reg-log"></label>
            <div class="card-3d-wrap mx-auto">
              <div class="card-3d-wrapper">
                <div class="card-front">
                  <div class="center-wrap">
                    <div class="section text-center">
                      <?php 
                      if (isset($_GET['error'])) {
                          echo "<p class='text-danger'>Email o contraseña incorrectos</p>";
                      }
                      ?>

                    <form action="app/login/register.php" method="post">
                      <h4 class="mb-4 pb-3">Ingresar
                      </h4>
                      <div class="form-group">
                        <input value="" required type="email" name="email" class="form-style" placeholder="Email">
                        <i class="input-icon uil uil-at"></i>
                      </div>
                      <div class="form-group mt-2">
                        <input value='' required type="password" name="password" class="form-style" placeholder="Password">
                        <i class="input-icon uil uil-lock-alt"></i>
                      </div>
                      
                      <button type="submit" class="btn mt-4" name="login">Ingresar</button>
                    </form>
                    </div>
                  </div>
                </div>

                
                <div class="card-back">
                  <div class="center-wrap">
                    <div class="section text-center">
                      <form action="app/login/register.php" method="post">
                        <h4 class="mb-3 pb-3">Crea una cuenta</h4>
                        <div class="form-group">
                          <input type="text" class="form-style" placeholder="Full Name" name="name">
                          <i class="input-icon uil uil-user"></i>
                        </div>
                        <div class="form-group mt-2">
                          <input type="tel" class="form-style" placeholder="Phone Number" name="phone">
                          <i class="input-icon uil uil-phone"></i>
                        </div>
                        <div class="form-group mt-2">
                          <input type="email" class="form-style" placeholder="Email" name="email">
                          <i class="input-icon uil uil-at"></i>
                        </div>
                        <div class="form-group mt-2">
                          <input type="password" class="form-style" placeholder="Password" name="pass">
                          <i class="input-icon uil uil-lock-alt"></i>
                        </div>
                        <button type="submit" class="btn mt-4" name="register">Crear mi cuenta</button>
                      </form>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
