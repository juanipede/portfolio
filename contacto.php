<?php $pag = "contacto"; 

if($_POST){
  $nombre = $_POST["txtNombre"];
  $correo = $_POST["txtCorreo"];
  $telefono = $_POST["txtTelefono"];
  $mensaje = $_POST["txtMensaje"];

  if ($nombre != "" && $correo != "" && $telefono != "" && $mensaje != ""){  // Si $nombre,$correo,$telefono,$mensaje son distintos a Vacio (""), entonces: todo lo de abajo
// Destinatarios
$para  = 'juanipedevilla@gmail.com';

// título
$título = 'Recibiste un mensaje desde tu web';

// mensaje
$cuerpo = "
Nombre: $nombre <br>
Correo: $correo <br>
Telefono: $telefono <br>
Mensaje: $mensaje
";

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To: juanipedevilla@gmail.com' . "\r\n";
$cabeceras .= 'From: Recordatorio <cumples@example.com>' . "\r\n";


// Enviarlo
// mail($para, $título, $mensaje, $cabeceras);   (lo comento porque todavia no tenemos servicio de correo)
header("Location: confirmacion-envio.php");
} 
}
?>

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

  <footer class="container mt-sm-auto pt-5 pb-4">
      <div class="row">
        <div class="col-3">
          <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
          <a href="https://www.linkedin.com/in/nelson-daniel-tarche/" target="_blank" title="Linkedin"><i
              class="fab fa-linkedin-in"></i></a>
        </div>
        <div class="col-3">
          Sponsor <a href="https://depcsuite.com/?v=d72a48a8ebd2">DePC Suite</a>
        </div>
        <div class="col-3">
          <a href="mailto:juanipedevilla@gmail.com">juanipedevilla@gmail.com</a>
        </div>
        <div class="col-3">
        </div>
          <div class="whatsapp">
            <a href="https://api.whatsapp.com/send?phone=541162423341" title="Whatsapp"><i
                class="fab fa-whatsapp"></i></a>
          </div>
    </footer>

</body>

</html>