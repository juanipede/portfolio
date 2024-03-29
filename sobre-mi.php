<?php $pag = "sobre-mi"; ?>

<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre mi</title>
  <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
  <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="shortcut icon" href="images/favicon.png">
</head>

<body id="sobre-mi" class="d-flex flex-column h-100">
  <header>
      <?php include_once("menu.php"); ?>
  </header>

  <main>

    <div class="container">
      <div class="row pb-5">
        <div class="col-sm-5 col-12 mt-5">
          <h1 class=" pb-sm-4">Sobre mí</h1>

          <p class="pb-sm-5"> Soy desarrollador Web full stack. Con muchas ganas de vivir de la programación y aprender todos los dias un poco más.</p>
          <a href="contacto.php" class="btn-rojo">Enviar mensaje</a>
        </div>
        <div class="col-sm-3 col-12 mt-4 offset-sm-2">
          <img src="images/foto-perfil.jpg" alt="juan pedevilla" class="foto-perfil img-fluid">
        </div>
      </div>
    </div>
    <section class="pb-sm-5 seccion-stack-tecnologico" id="franja-roja">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="stack-tecnologico py-sm-5">Stack tecnológico</h2>
          </div>

        </div>
        <div class="row pb-sm-4">
          <div class=" col-sm-2 text-center">
            <div class="card py-5 mb-sm-0">
              <h3>Javascript</h3>
              <img class="mx-auto" width="60" src="images/javascript.jpeg" alt="javascript">
            </div>
          </div>
          <div class="col-sm-2 text-center">
            <div class="card py-5 mb-sm-0">
              <h3>PHP</h3>
              <img class="mx-auto" width="60" src="images/php.jpg" alt="php">
            </div>
          </div>
          <div class="col-sm-2 text-center">
            <div class="card py-5 mb-sm-0">
              <h3>HTML5</h3>
              <img class="mx-auto" width="60" src="images/html5.png" alt="html5">
            </div>
          </div>
          <div class="col-sm-2 text-center">
            <div class="card py-5 mb-sm-0">
              <h3>React.js</h3>
              <img class="mx-auto" width="60" src="images/react-js.png" alt="react-js">
            </div>
          </div>
          <div class="col-sm-2  text-center">
            <div class="card py-5 mb-sm-0">
              <h3>jQuery</h3>
              <img class="mx-auto" width="60" src="images/jquery.jpg" alt="jquery">
            </div>
          </div>
          <div class="col-sm-2 text-center">
            <div class="card py-5 mb-sm-0">
              <h3>Bootstrap</h3>
              <img class="mx-auto" width="60" src="images/bootstrap.png" alt="bootstrap">
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-sm-2  text-center">
            <div class="card py-5 mb-sm-0">
              <h3>Laravel</h3>
              <img class="mx-auto" width="90" src="images/laravel.png" alt="laravel">
            </div>
          </div>
          <div class="col-sm-2  text-center">
            <div class="card py-5 mb-sm-0">
              <h3>MySQL</h3>
              <img class="mx-auto" width="60" src="images/mysql.png" alt="mysql">
            </div>
          </div>
          <div class="col-sm-2 text-center">
            <div class="card py-5 mb-sm-0">
              <h3>CSS</h3>
              <img class="mx-auto" width="60" src="images/css.png" alt="CSS">
            </div>
          </div>
          <div class="col-sm-2 text-center">
            <div class="card py-5 mb-sm-0">
              <h3>Git</h3>
              <img class="mx-auto" width="60" src="images/git.png" alt="Git">
            </div>
          </div>
          <div class="col-sm-2 text-center">
            <div class="card py-5 mb-sm-0">
              <h3>Apache</h3>
              <img class="mx-auto" width="110" src="images/apache.png" alt="Apache">
            </div>
          </div>
          <div class="col-sm-2 text-center">
            <div class="card py-5 mb-sm-0">
              <h3>Mercadopago</h3>
              <img class="mx-auto" width="60" src="images/mercadopago.jpg" alt="Mercadopago">
            </div>
          </div>

        </div>
      </div>


    </section>
    <section class="container pb-5" id="experiencia-laboral">
      <div class="row py-5">
        <div class="col-12 exp-laboral">
          <h2><i class="fa-solid fa-briefcase"></i>Experiencia laboral</h2>
        </div>
      </div>
      <div class="row shadow">
        <div class="col-12">
          <div class="row">
            <div class="col-2 my-auto p-5">
              <img src="images/DEPOSITOSINTEGRALES.png" class=" imagen-depositosintegrales" width="140"
                alt="depositosintegrales">
            </div>
            <div class="col-10 my-auto">
              <h3> Administración</h3>
              <h4>DEPOSITOS INTEGRALES S.A.</h4>
              <h5>2014- presente</h5>
              <p>-Empresa familiar- Atención al cliente. Ingreso de remitos de toda la mercaderia que entra y/o sale.
                Emito hojas de ruta. Entre otras tareas administrativas.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="formacion-academica" class="container pb-5">
      <div class="row pb-5">
        <div class="col-12 form-academica">
          <h2><i class="fas fa-graduation-cap"></i>Formacion académica</h2>
        </div>
      </div>
      <div class="row shadow pb-3">
        <div class="col-2">
          <img src="#" alt="">
        </div>
        <div class="col-10 my-auto">
          <h3>Bachiller Contable</h3>
          <h4>Colegio Marista La Inmaculada</h4>
          <h5>2009-2013</h5>
          <p> https://www.maristasinmaculada.com.ar/</p>
        </div>
      </div>
    </section>
    <section id="cursos-desarrollo-profesional" class="container pb-5">
      <div class="row pb-5">
        <div class="col-12 cursos-profesional">
          <h2><i class="fas fa-graduation-cap"></i>Cursos de desarrollo profesional</h2>
        </div>
      </div>
      <div class="row shadow pb-3">
        <div class="col-2 my-auto p-5 ">
          <img src="images/logo-depcsuite.svg" class="logo-depcsuite baw" alt="">
        </div>
        <div class="col-10 my-auto">
          <h3>Desarrollo Web Full Stack</h3>
          <h4>DEPCSUITE SA</h4>
          <h5>Expedición: may 2022</h5>
        </div>
      </div>
    </section>
    <section id="idiomas">
      <div class="container">
        <div class="row py-5 idiomas-fila">
          <div class="col-sm-6 col-12 shadow">
            <div class="row bg-white mb-3 mb-sm-0">
              <div class="col-4 text-center card">
                <i class="fa-solid fa-message"></i>
              </div>
              <div class="col-8 my-auto">
                <h4>IDIOMAS</h4>
                <p>ESPAÑOL - Nativo</p>
                <p>INGLES - Básico</p>
              </div>

            </div>
          </div>
          <div class="col-sm-6 col-12 shadow ">
            <div class="row bg-white ">
              <div class="col-4 text-center card">
                <i class="fa-solid fa-star"></i>
              </div>
              <div class="col-8 my-auto">
                <h4>HOBBIES</h4>
                <p>Fútbol, Simracing, Impresion 3D.</p>
              </div>
            </div>

          </div>

        </div>
      </div>
    </section>
  </main>

  <footer class="container mt-auto pb-4">
    <div class="row mt-5 pb-3">
      <div class="col-12 text-center text-sm-start col-sm-3">
          <a href="https://github.com/" target="_blank" title="Github"><i class="fab fa-github"></i></a>
          <a href="https://www.linkedin.com/in/nelson-daniel-tarche/" target="_blank" title="Linkedin"><i
                  class="fab fa-linkedin-in"></i></a>
      </div>
      <div class="col-12 text-center text-sm-start col-sm-3 color-red pt-2 p-sm-0">
          Sponsor <a href="https://depcsuite.com/?v=d72a48a8ebd2">DePC Suite</a>
      </div>
      <div class="col-12 text-center text-sm-start col-sm-3 color-red pt-2 p-sm-0">
          <a href="mailto:juanipedevilla@gmail.com">juanipedevilla@gmail.com</a>
      </div>
  </div>
  <div class="whatsapp">
      <a href="https://api.whatsapp.com/send?phone=541162423341" title="Whatsapp"><i
              class="fab fa-whatsapp"></i></a>
  </div>
  </footer>

</body>

</html>