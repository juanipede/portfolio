<?php $pag = "inicio"; ?>

<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="images/favicon.png">
</head>
<body id="inicio" class="d-flex flex-column h-100">
    <header>
        <?php include_once("menu.php"); ?>
    </header>
    
    <main class="container pt-4">
      <div class="row">
        <div class="col-12 cohete mx-auto text-center ">
          <a href="proyectos.php"><img src="images/cohete.svg" alt="cohete"></a> 
        </div>
      </div>
      <div class="row pt-5">
        <div class="col-12 col-sm-6 offset-sm-3 text-center pt-sm-5">
          <p class="p-1 my-3"> Bienvenid@ a mi sitio web sobre desarrollo de sistemas.</p>
        </div>
        <div class="row">
          <div class="col-12 text-center pt-3">
            <a href="proyectos.php" class="btn-blanco shadow">Conoce mis proyectos</a>
          </div>

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