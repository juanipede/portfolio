<?php $pag = "proyectos"; ?>

<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="images/favicon.png">

</head>

<body id="proyectos" class="column-flex h-100">
    <header>
        <?php include_once("menu.php"); ?>
    </header>

    <main class="container">
        <div class="pt-3">
            <h1>Proyectos</h1>
        </div>
        <div class="pt-5 ">
            <p>Los siguientes son algunos de los trabajos que he realizado:</p>
        </div>

        <div class="row">
            <div class="col-12 col-sm-4 p-sm-4">
                <div class="row card">
                    <div class="col-12 p-0">
                        <img src="images/abmclientes.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 py-3 fondo-degradado">
                        <h2>ABM CLIENTES</h2>
                    </div>
                    <div class="col-12 parrafos py-3">
                        <p>Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap
                            y Json.</p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6">
                            <a class="btn-rojo" href="#" target="_blank">Ver online</a>
                        </div>
                        <div class="col-6 codigo-fuente">
                            <a href="">Código fuente</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 p-sm-4">
                <div class="row card">
                    <div class="col-12 p-0">
                        <img src="images/abmventas.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 py-3 fondo-degradado">
                        <h2>SISTEMA DE GESTIÓN DE VENTAS</h2>
                    </div>
                    <div class="col-12 parrafos py-3">
                        <p>Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC,
                            Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6">
                            <a href="" class="btn-rojo " target="_blank">Ver online</a>
                        </div>
                        <div class="col-6 codigo-fuente">
                            <a href="">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 p-sm-4">
                <div class="row card">
                    <div class="col-12 p-0">
                        <img src="images/proyecto-integrador.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 py-3 fondo-degradado">
                        <h2>PROYECTO INTEGRADOR</h2>
                    </div>
                    <div class="col-12 parrafos py-3">
                        <p>Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS,
                            Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y
                            funcionalidades a fines.</p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6">
                            <a href="" class="btn-rojo " target="_blank">Ver online</a>
                        </div>
                        <div class="col-6 codigo-fuente">
                            <a href="">Código fuente</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="container">
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