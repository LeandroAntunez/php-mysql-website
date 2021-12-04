<?php
session_start();
if($_POST){
  if($_POST['usuario']=="develoteca" && $_POST['contrasenia']=="sistema") {
    $_SESSION['usuario']="ok";
    $_SESSION['nombreUsuario']="develoteca";
    header('Location:inicio.php');
  } else {
    $mensaje="Error: el usuario o contraseña son incorrectos.";
  }

}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Administrador</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <div class="row">

          <div class="col-md-4">
              
          </div>

              <div class="col-md-4">
                  <br/><br/><br/>
                  <div class="card">
                      <div class="card-header">
                          Login
                      </div>
                      <?php if(isset($mensaje)) { ?>
                      <div class="card-body">
                        <div class="alert alert-danger" role="alert">
                          <?php echo $mensaje; ?>
                        </div>
                      <?php } ?>

                        <form method="POST" >
                         
                          <div class = "form-group">
                            <label>Usuario</label>
                            <input type="text" name="usuario" class="form-control"  aria-describedby="emailHelp" placeholder="Escribe tu usuario">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                          </div>

                          <div class="form-group">
                            <label>Contraseña</label>
                            <input type="password" name="contrasenia" class="form-control" placeholder="Escribe tu contraseña">
                          </div>
                          
                          <button type="submit" class="btn btn-primary">Ingresar</button>
                          </form>
                          
                          
                      </div>
                  </div>
              </div>
              
          </div>
      </div>

  </body>
</html>