<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mí | Cristopher Bernal</title>
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

<div class="pagina-sobre-mi">

    <h1>Sobre mí</h1>

    <p>
        Soy estudiante de <strong>Ingeniería en Sistemas</strong> y QA Tester apasionado por la excelencia técnica. Mi enfoque va más allá de encontrar fallos; busco optimizar la experiencia del usuario final garantizando que cada línea de código cumpla con los más altos estándares de calidad y funcionalidad.
    </p>

    <p>
        Me especializo en el ciclo de vida de pruebas, desde la detección temprana de errores hasta la mejora continua. Mi formación técnica me permite colaborar estrechamente con equipos de desarrollo, aportando una visión analítica y detallista en cada proyecto.
    </p>

    <section style="text-align: left; margin-top: 40px;">
        <h2 style="font-family: var(--fuente-titulos); color: #1a73e8;">Formación Académica</h2>
        
        <div style="border-left: 3px solid #1a73e8; padding-left: 20px; margin-bottom: 20px;">
            <p style="margin: 0; font-weight: bold; font-size: 1.1rem;">Ingeniería en Sistemas</p>
            <p style="margin: 0; color: #666;">Universidad | 2022 - a la fecha</p>
        </div>

        <div style="border-left: 3px solid #dadce0; padding-left: 20px;">
            <p style="margin: 0; font-weight: bold; font-size: 1.1rem;">Bachillerato General</p>
            <p style="margin: 0; color: #666;">Institución Educativa | 2019 - 2021</p>
        </div>
    </section>

    <section>
        <h2 style="font-family: var(--fuente-titulos); color: #1a73e8; margin-top: 40px;">Habilidades de Especialización</h2>
        <div class="contenedor-cards">
            <div class="card">
                <p><i class="fas fa-bug" style="color: #1a73e8;"></i> Testing Manual</p>
                <p><i class="fas fa-check-circle" style="color: #1a73e8;"></i> Pruebas Funcionales</p>
                <p><i class="fas fa-file-alt" style="color: #1a73e8;"></i> Documentación de Errores</p>
            </div>
            <div class="card">
                <p><i class="fas fa-tools" style="color: #1a73e8;"></i> Azure DevOps</p>
                <p><i class="fas fa-database" style="color: #1a73e8;"></i> SQL Básico</p>
                <p><i class="fas fa-code" style="color: #1a73e8;"></i> HTML / CSS</p>
            </div>
        </div>
    </section>

    <div class="acciones" style="justify-content: center; margin-top: 50px;">
        <a href="cv/cv-espanol.pdf" download class="btn btn-secundario">
            <i class="fas fa-file-download"></i> Descargar CV
        </a>
    </div>

</div>

<footer>
    <div class="footer-contenido">
        <div>
            <h3 style="font-family: var(--fuente-titulos);">Documentación</h3>
            <a href="cv/cv-ingles.pdf" download style="color: inherit; text-decoration: none; opacity: 0.8;">CV Inglés</a><br>
            <a href="cv/cv-espanol.pdf" download style="color: inherit; text-decoration: none; opacity: 0.8;">CV Español</a>
        </div>

        <div>
            <h3 style="font-family: var(--fuente-titulos);">Redes sociales</h3>
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