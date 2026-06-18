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

            <div class="contenedor-cards" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px; margin: 40px auto; max-width: 900px;">
                
                <div class="tech-card-modern" style="margin: 0; padding: 20px; display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <div style="text-align: center; margin-bottom: 20px;">
                            <span class="rol-destacado" style="font-size: 1.4rem; color: #2563eb; display: block; margin-bottom: 5px;">
                                <i class="fa-solid fa-award"></i> ¡1er Lugar Destacado!
                            </span>
                            <h3 style="margin-top: 10px; font-size: 1.2rem; color: var(--color-texto-principal); font-weight: bold;">
                                NETWORKING CHALLENGE 2026
                            </h3>
                            <p style="font-size: 0.85rem; color: var(--color-texto-suave); font-weight: bold; margin-top: 5px;">
                                Facultad de Ciencia y Tecnología — Universidad Gerardo Barrios
                            </p>
                        </div>

                        <img src="primerlugar.jpeg" alt="Diploma Primer Lugar Networking Challenge 2026" class="img-proyecto-detalle" style="margin: 15px auto; box-shadow: 0 8px 20px rgba(0,0,0,0.1); max-width: 100%; height: 180px; object-fit: cover; display: block; border-radius: 8px;">

                        <div style="padding: 12px 15px; background-color: #f8fafc; border-radius: 12px; border-left: 4px solid #2563eb; margin-top: 15px;">
                            <p style="color: var(--color-texto-principal); font-size: 0.85rem; line-height: 1.5; margin: 0; text-align: left;">
                                Acreditación del <strong>Primer Lugar</strong> en la competencia de desafío final de infraestructura de redes y conectividad. Valida competencias técnicas en diseño, diagnóstico y enrutamiento.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="tech-card-modern" style="margin: 0; padding: 20px; display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <div style="text-align: center; margin-bottom: 20px;">
                            <span class="rol-destacado" style="font-size: 1.4rem; color: #10b981; display: block; margin-bottom: 5px;">
                                <i class="fa-solid fa-robot"></i> ¡3er Lugar Destacado!
                            </span>
                            <h3 style="margin-top: 10px; font-size: 1.2rem; color: var(--color-texto-principal); font-weight: bold;">
                                CARROS SEGUIDORES EN LÍNEA
                            </h3>
                            <p style="font-size: 0.85rem; color: var(--color-texto-suave); font-weight: bold; margin-top: 5px;">
                                22° Festival Latinoamericano de Instalación de Software Libre
                            </p>
                        </div>

                        <img src="tercerlugar.jpeg" alt="Diploma Tercer Lugar Robix FLISOL" class="img-proyecto-detalle" style="margin: 15px auto; box-shadow: 0 8px 20px rgba(0,0,0,0.1); max-width: 100%; height: 180px; object-fit: cover; display: block; border-radius: 8px;">

                        <div style="padding: 12px 15px; background-color: #f8fafc; border-radius: 12px; border-left: 4px solid #10b981; margin-top: 15px;">
                            <p style="color: var(--color-texto-principal); font-size: 0.85rem; line-height: 1.5; margin: 0; text-align: left;">
                                Acreditación del <strong>Tercer Lugar</strong> obtenido con el prototipo robótico <strong>ROBIX</strong> en la competencia del festival internacional FLISOL, evaluando diseño de hardware y lógica de seguimiento autónomo.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <footer>
        <div class="footer-wrapper">
            <div> 
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
        </div>

        <div class="copy">
            &copy; <?php echo date("Y"); ?> Cristopher Alejandro Bernal Chávez. Todos los derechos reservados.
        </div>
    </footer>

</body>
</html>