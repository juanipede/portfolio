<?php $pag = "contacto"; ?>

<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto</title>
  <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
  <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="shortcut icon" href="images/favicon.png">
</head>

<body id="contacto" class="d-flex flex-column h-100">
  <header >
      <?php include_once("menu.php"); ?>
  </header>

  <main class="container">
    <div class="row">
      <div class="col-12 pt-3 pb-5">
        <h1>Contacto</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-sm-6">
        <p>Te invito a que te contactes enviándome un mensaje o bien por whatsapp.</p>
      </div>
      <div class="col-12 col-sm-6">
        <form action="" method="POST">
          <div class="pb-3">
            <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control shadow">
          </div>
          <div class="pb-3">
            <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control shadow">
          </div>
          <div class="pb-3">
            <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Teléfono/Whatsapp" class="form-control shadow">
          </div>
          <div class="pb-3">
            <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aquí tu mensaje"
              class="form-control shadow"></textarea>
          </div>
          <div class="pb-3">
            <button type="submit" class="btn" name="btnEnviar" id="btnEnviar">ENVIAR</button>
          </div>

        </form>
      </div>
    </div>
  </main>

  <footer class="container mt-auto pb-4">
    

  </footer>

</body>

</html>