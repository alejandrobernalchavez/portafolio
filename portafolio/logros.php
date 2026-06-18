<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logros | Mi Portafolio</title>
    <link rel="stylesheet" href="estilos.css?v=3">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Estilos específicos basados fielmente en la nueva interfaz (image_1944a9.jpg) */
        .header-logros {
            text-align: center;
            padding: 40px 20px 20px;
        }
        .header-logros .icono-copa {
            font-size: 2rem;
            color: #f59e0b;
            margin-bottom: 10px;
        }
        .header-logros h2 {
            font-size: 2.2rem;
            color: #0f172a;
            font-weight: 800;
            margin: 10px 0;
        }
        .header-logros p {
            color: #64748b;
            font-size: 1rem;
            max-width: 750px;
            margin: 0 auto;
            line-height: 1.6;
        }
        
        /* Contenedor Grid Principal */
        .grid-logros {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 30px auto;
            padding: 0 20px;
        }
        @media (max-width: 900px) {
            .grid-logros { grid-template-columns: 1fr; }
        }

        /* Tarjeta Base de Logros */
        .tarjeta-logro-moderna {
            background: #ffffff;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.03);
            border: 2px solid;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
        }
        .tarjeta-azul { border-color: #eff6ff; }
        .tarjeta-verde { border-color: #f0fdf4; }

        /* Contenido Superior Interno */
        .tarjeta-header-layout {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 25px;
        }
        .info-titulo-evento h3 {
            font-size: 1.3rem;
            color: #0f172a;
            font-weight: 700;
            margin: 8px 0 5px 0;
        }
        .info-titulo-evento p {
            font-size: 0.9rem;
            color: #2563eb;
            margin: 0;
            font-weight: 500;
        }
        .tarjeta-verde .info-titulo-evento p { color: #16a34a; }

        /* Icono e Insignia Flotante */
        .badge-lugar {
            font-size: 0.75rem;
            font-weight: 700;
            padding: 6px 16px;
            border-radius: 20px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .badge-azul { background: #eff6ff; color: #2563eb; }
        .badge-verde { background: #f0fdf4; color: #16a34a; }

        .icono-logro-principal {
            font-size: 2.8rem;
        }
        .icono-azul { color: #2563eb; }
        .icono-verde { color: #10b981; }

        /* Cuerpo Interno: Columnas de Atributos + Diploma */
        .tarjeta-body-layout {
            display: flex;
            gap: 20px;
            align-items: center;
        }
        @media (max-width: 600px) {
            .tarjeta-body-layout { flex-direction: column; align-items: stretch; }
        }

        .lista-items-tecnicos {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        .item-tecnico {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        .item-tecnico i {
            font-size: 1.1rem;
            width: 24px;
            text-align: center;
        }
        .item-tecnico div p {
            margin: 0;
            font-size: 0.85rem;
            color: #334155;
            line-height: 1.4;
        }

        /* Contenedor de la Imagen del Diploma */
        .wrapper-diploma-preview {
            width: 220px;
            height: 140px;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.06);
            background: #f8fafc;
            flex-shrink: 0;
        }
        .wrapper-diploma-preview img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        /* Footer de la tarjeta: Fecha y Badges */
        .tarjeta-footer-layout {
            margin-top: 25px;
            padding-top: 20px;
            border-top: 1px solid #f1f5f9;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }
        .fecha-logro {
            font-size: 0.85rem;
            color: #64748b;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .contenedor-badges-tecnologicos {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }
        .badge-tecnico {
            font-size: 0.75rem;
            font-weight: 600;
            color: #475569;
            background: #f1f5f9;
            padding: 5px 12px;
            border-radius: 15px;
        }

        /* Barra Inferior de Compromiso */
        .barra-compromiso-excelencia {
            max-width: 1160px;
            margin: 40px auto 60px;
            background: #f8fafc;
            border-radius: 16px;
            padding: 15px 25px;
            display: flex;
            align-items: center;
            gap: 20px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.02);
        }
        .badge-compromiso-icono {
            background: #2563eb;
            color: #ffffff;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            flex-shrink: 0;
        }
        .texto-compromiso {
            display: flex;
            justify-content: space-between;
            width: 100%;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
        }
        .texto-compromiso span.titulo-comp {
            font-weight: 700;
            color: #0f172a;
            font-size: 0.95rem;
        }
        .texto-compromiso p.desc-comp {
            margin: 0;
            color: #64748b;
            font-size: 0.9rem;
            flex: 1;
            text-align: right;
        }
        @media (max-width: 768px) {
            .texto-compromiso { flex-direction: column; align-items: flex-start; }
            .texto-compromiso p.desc-comp { text-align: left; }
        }
    </style>
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
        <section class="header-logros">
            <div class="icono-copa"><i class="fa-solid fa-trophy"></i></div>
            <h2>Mis Logros Académicos y Profesionales</h2>
            <p>Validaciones y reconocimientos obtenidos a lo largo de mi trayectoria, que demuestran mi compromiso con la excelencia técnica y el trabajo en equipo.</p>
        </section>

        <section class="grid-logros">
            
            <div class="tarjeta-logro-moderna tarjeta-azul">
                <div>
                    <div class="tarjeta-header-layout">
                        <div class="icono-logro-principal icono-azul">
                            <i class="fa-solid fa-award"></i>
                        </div>
                        <div class="info-titulo-evento">
                            <span class="badge-lugar badge-azul">Primer Lugar</span>
                            <h3>NETWORKING CHALLENGE 2026</h3>
                            <p>Facultad de Ciencia y Tecnología — Universidad Gerardo Barrios</p>
                        </div>
                    </div>

                    <div class="tarjeta-body-layout">
                        <div class="lista-items-tecnicos">
                            <div class="item-tecnico">
                                <i class="fa-solid fa-diagram-project" style="color: #2563eb;"></i>
                                <div><p>Diseño e implementación de infraestructura de redes</p></div>
                            </div>
                            <div class="item-tecnico">
                                <i class="fa-solid fa-magnifying-glass-chart" style="color: #2563eb;"></i>
                                <div><p>Diagnóstico y solución de problemas de conectividad</p></div>
                            </div>
                            <div class="item-tecnico">
                                <i class="fa-solid fa-sliders" style="color: #2563eb;"></i>
                                <div><p>Configuración y enrutamiento avanzado</p></div>
                            </div>
                        </div>

                        <div class="wrapper-diploma-preview">
                            <img src="img/primerlugar.jpeg" alt="Diploma Primer Lugar Networking Challenge">
                        </div>
                    </div>
                </div>

                <div class="tarjeta-footer-layout">
                    <div class="fecha-logro">
                        <i class="fa-regular fa-calendar"></i> Mayo de 2026
                    </div>
                    <div class="contenedor-badges-tecnologicos">
                        <span class="badge-tecnico">Cisco</span>
                        <span class="badge-tecnico">Redes</span>
                        <span class="badge-tecnico">Enrutamiento</span>
                        <span class="badge-tecnico">TCP/IP</span>
                    </div>
                </div>
            </div>

            <div class="tarjeta-logro-moderna tarjeta-verde">
                <div>
                    <div class="tarjeta-header-layout">
                        <div class="icono-logro-principal icono-verde">
                            <i class="fa-solid fa-robot"></i>
                        </div>
                        <div class="info-titulo-evento">
                            <span class="badge-lugar badge-verde">Tercer Lugar</span>
                            <h3>CARROS SEGUIDORES EN LÍNEA</h3>
                            <p>22° Festival Latinoamericano de Instalación de Software Libre (FLISOL)</p>
                        </div>
                    </div>

                    <div class="tarjeta-body-layout">
                        <div class="lista-items-tecnicos">
                            <div class="item-tecnico">
                                <i class="fa-solid fa-microchip" style="color: #16a34a;"></i>
                                <div><p>Diseño y construcción del prototipo robótico ROBIX</p></div>
                            </div>
                            <div class="item-tecnico">
                                <i class="fa-solid fa-code" style="color: #16a34a;"></i>
                                <div><p>Programación y lógica de seguimiento autónomo</p></div>
                            </div>
                            <div class="item-tecnico">
                                <i class="fa-solid fa-bullseye" style="color: #16a34a;"></i>
                                <div><p>Evaluación de hardware y software para control</p></div>
                            </div>
                        </div>

                        <div class="wrapper-diploma-preview">
                            <img src="img/tercerlugar.jpeg" alt="Diploma Tercer Lugar Robix FLISOL">
                        </div>
                    </div>
                </div>

                <div class="tarjeta-footer-layout">
                    <div class="fecha-logro">
                        <i class="fa-regular fa-calendar"></i> Abril de 2026
                    </div>
                    <div class="contenedor-badges-tecnologicos">
                        <span class="badge-tecnico">Robótica</span>
                        <span class="badge-tecnico">Arduino</span>
                        <span class="badge-tecnico">Sensores</span>
                        <span class="badge-tecnico">FLISOL</span>
                    </div>
                </div>
            </div>

        </section>

        <section class="barra-compromiso-excelencia">
            <div class="badge-compromiso-icono">
                <i class="fa-regular fa-star"></i>
            </div>
            <div class="texto-compromiso">
                <span class="titulo-comp">Compromiso con la excelencia</span>
                <p class="desc-comp">Cada logro representa horas de dedicación, aprendizaje continuo y trabajo en equipo para alcanzar soluciones innovadoras a problemas reales.</p>
            </div>
        </section>
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