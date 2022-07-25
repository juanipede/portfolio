<nav class="navbar navbar-expand-md mb-4">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link px-4 py-1 <?php echo ($pag == "inicio")? "active": ""; ?>" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 py-1 <?php echo ($pag == "sobre-mi")? "active": ""; ?>" href="sobre-mi.php">Sobre mi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 py-1 <?php echo ($pag == "proyectos")? "active": ""; ?>" href="proyectos.php">Proyectos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4 py-1 <?php echo ($pag == "contacto")? "active": ""; ?>" href="contacto.php">Contacto</a>
                </li>
            </ul>
        </div>
        <div class="boton-cv">
            <a href="" class="boton btn-rojo">Descargar mi CV <i class="fas fa-download"></i></a>

        </div>
    </div>
</nav>