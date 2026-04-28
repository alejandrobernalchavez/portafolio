<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cristopher Bernal | QA Tester</title>
    <link rel="stylesheet" href="estilos.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>

<nav class="navbar">
    <a href="index.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>">
        <i class="fas fa-home"></i> Inicio
    </a>
    <a href="sobre-mi.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'sobre-mi.php') ? 'active' : ''; ?>">
        <i class="fas fa-user"></i> Sobre mí
    </a>
</nav>

<main class="contenedor">

    <div class="perfil">
        <img src="img/_LUI0053-2.jpeg" alt="Cristopher Bernal - QA Tester">
    </div>

    <div class="info">
        <h1>CRISTOPHER BERNAL</h1>
        <h2>QA Tester enfocado en calidad de software</h2>
        <h3>Detecto errores antes de que lleguen al usuario final</h3>

        <p class="descripcion">
            Estudiante de <strong>Ingeniería en Sistemas</strong> apasionado por el aseguramiento de calidad, pruebas funcionales y mejora continua del software.
        </p>

        <div class="acciones">
            <a href="sobre-mi.php" class="btn btn-primario">
                <i class="fas fa-search"></i> Conocer más
            </a>
            <a href="cv/cv-espanol.pdf" download class="btn btn-secundario">
                <i class="fas fa-file-download"></i> Descargar CV
            </a>
        </div>
    </div>

</main>

<footer>
    <div class="footer-contenido">
        <div>
            <h3>Explorar</h3>
            <a href="sobre-mi.php" style="color: inherit; text-decoration: none; opacity: 0.8;">Sobre mí</a>
        </div>

        <div>
            <h3>Redes sociales</h3>
            <div class="redes">
                <a href="https://www.linkedin.com/in/cristopher-alejandro-bernal-chávez-245189381" target="_blank">
                    <img src="img/linkedin.jpg" alt="LinkedIn">
                </a>
                <a href="https://github.com/alejandrobernalchavez" target="_blank">
                    <img src="img/github.png" alt="GitHub">
                </a>
                <a href="mailto:alejogevara27@gmail.com">
                    <img src="img/email.png" alt="Email">
                </a>
            </div>
        </div>
    </div>

    <p class="copy">© 2026 Cristopher Bernal. Todos los derechos reservados.</p>
</footer>

</body>
</html>