<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logros | Mi Portafolio</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <nav class="navbar">
        <div class="pestañas">
            <a href="index.php"><i class="fa-solid fa-house"></i> Inicio</a>
            <a href="sobre-mi.php"><i class="fa-solid fa-user"></i> Sobre mí</a>
            <a href="proyectos.php"><i class="fa-solid fa-code"></i> Proyectos</a>
            <a href="logros.php" class="active"><i class="fa-solid fa-trophy"></i> Logros</a>
            <a href="contacto.php"><i class="fa-solid fa-envelope"></i> Contacto</a>
        </div>
        
        <div class="idiomas">
            <a href="#" class="lang-active">ES</a>
            <span>|</span>
            <a href="#">EN</a>
        </div>
    </nav>

    <main>
        <div class="contenedor-sobre-mi" style="padding-top: 50px;">
            <h2 class="titulo-principal-contacto" style="text-align: center;">Mis Logros Académicos y Profesionales</h2>
            <div class="linea-decorativa-titulo" style="margin: 0 auto 40px;"></div>
            
            <p class="parrafo-descriptivo-contacto" style="text-align: center; max-width: 700px; margin-left: auto; margin-right: auto;">
                Validaciones y reconocimientos obtenidos a lo largo de mi trayectoria, que demuestran mi compromiso con la excelencia técnica, la resolución de problemas bajo presión y el trabajo en equipo.
            </p>

            <div class="tech-card-modern" style="max-width: 850px; margin: 40px auto; padding: 20px;">
                <div style="text-align: center; margin-bottom: 20px;">
                    <span class="rol-destacado" style="font-size: 1.8rem; color: #2563eb;">
                        <i class="fa-solid fa-award"></i> ¡1er Lugar Destacado!
                    </span>
                    <h3 style="margin-top: 10px; font-size: 1.5rem; color: var(--color-texto-principal);">
                        NETWORKING CHALLENGE 2026
                    </h3>
                    <p style="font-size: 0.9rem; color: var(--color-texto-suave); font-weight: bold;">
                        Facultad de Ciencia y Tecnología — Universidad Gerardo Barrios
                    </p>
                </div>

                <img src="primerlugar.jpeg" alt="Diploma Primer Lugar Networking Challenge 2026" class="img-proyecto-detalle" style="margin: 20px auto; box-shadow: 0 10px 25px rgba(0,0,0,0.15); max-width: 100%; height: auto; display: block;">

                <div style="padding: 15px 20px; background-color: #f8fafc; border-radius: 12px; border-left: 4px solid #2563eb; margin-top: 25px;">
                    <p style="color: var(--color-texto-principal); font-size: 0.95rem; line-height: 1.6; margin: 0; text-align: left;">
                        Acreditación del <strong>Primer Lugar</strong> en la competencia de desafío final de infraestructura de redes y conectividad. Este logro convalida mis competencias técnicas avanzadas en el diseño, diagnóstico, enrutamiento y optimización de topologías de red en entornos corporativos simulados de alta exigencia.
                    </p>
                </div>
            </div>

        </div>
    </main>

    <footer>
        <div class="footer-wrapper">
            <div class="footer-col">
                <h4 style="margin-bottom: 15px; color: #2563eb; font-weight: bold;">Explorar</h4>
                <a href="index.php">Inicio</a>
                <a href="sobre-mi.php">Sobre mí</a>
                <a href="proyectos.php">Proyectos</a>
                <a href="logros.php">Logros</a>
                <a href="contacto.php">Contacto</a>
            </div>

            <div class="footer-col">
                <h4 style="margin-bottom: 15px; color: #2563eb; font-weight: bold;">Redes sociales</h4>
                <div class="social-icons-container">
                    <a href="https://www.linkedin.com/in/cristopher-alejandro-bernal-chávez-245189381" target="_blank" title="LinkedIn">
                        <img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" alt="LinkedIn" class="img-social">
                    </a>
                    <a href="https://github.com" target="_blank" title="GitHub">
                        <img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" alt="GitHub" class="img-social">
                    </a>
                </div>
            </div>
        </div>

        <div class="copy">
            &copy; <?php echo date("Y"); ?> Cristopher Alejandro Bernal Chávez. Todos los derechos reservados.
        </div>
    </footer>

</body>
</html>