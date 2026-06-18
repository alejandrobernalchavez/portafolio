<?php
// 1. Lógica de detección de idioma de forma segura
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'es';
if (!in_array($lang, ['es', 'en'])) {
    $lang = 'es';
}

// 2. Diccionario de traducción extendido para toda la página
$textos = [
    'es' => [
        'titulo_pestana' => 'Logros | Mi Portafolio',
        'inicio' => 'Inicio',
        'sobre' => 'Sobre mí',
        'proyectos' => 'Proyectos',
        'logros' => 'Logros',
        'contacto' => 'Contacto',
        'explorar' => 'Explorar',
        'redes' => 'Redes sociales',
        'h2_header' => 'Mis Logros Académicos y Profesionales',
        'p_header' => 'Validaciones y reconocimientos obtenidos a lo largo de mi trayectoria, que demuestran mi compromiso con la excelencia técnica y el trabajo en equipo.',
        
        // Tarjeta 1 - Networking Challenge
        'primer_lugar' => 'Primer Lugar',
        'net_desc1' => 'Diseño e implementación de infraestructura de redes',
        'net_desc2' => 'Diagnóstico y solución de problemas de conectividad',
        'net_desc3' => 'Configuración y enrutamiento avanzado',
        'net_fecha' => 'Mayo de 2026',
        
        // Tarjeta 2 - Robix FLISOL
        'tercer_lugar' => 'Tercer Lugar',
        'robix_titulo' => 'CARROS SEGUIDORES EN LÍNEA',
        'robix_desc1' => 'Diseño y construcción del prototipo robótico ROBIX',
        'robix_desc2' => 'Programación y lógica de seguimiento autónomo',
        'robix_desc3' => 'Evaluación de hardware y software para control',
        'robix_fecha' => 'Abril de 2026',
        
        // Barra de compromiso inferior
        'comp_titulo' => 'Compromiso con la excelencia',
        'comp_desc' => 'Cada logro representa horas de dedicación, aprendizaje continuo y trabajo en equipo para alcanzar soluciones innovadoras a problemas reales.'
    ],
    'en' => [
        'titulo_pestana' => 'Achievements | My Portfolio',
        'inicio' => 'Home',
        'sobre' => 'About me',
        'proyectos' => 'Projects',
        'logros' => 'Achievements',
        'contacto' => 'Contact',
        'explorar' => 'Explore',
        'redes' => 'Social Media',
        'h2_header' => 'My Academic and Professional Achievements',
        'p_header' => 'Validations and recognitions obtained throughout my career, demonstrating my commitment to technical excellence and teamwork.',
        
        // Tarjeta 1 - Networking Challenge
        'primer_lugar' => 'First Place',
        'net_desc1' => 'Network infrastructure design and implementation',
        'net_desc2' => 'Connectivity troubleshooting and resolution',
        'net_desc3' => 'Advanced routing and configuration',
        'net_fecha' => 'May 2026',
        
        // Tarjeta 2 - Robix FLISOL
        'tercer_lugar' => 'Third Place',
        'robix_titulo' => 'LINE FOLLOWER CARS',
        'robix_desc1' => 'Design and construction of the ROBIX robotic prototype',
        'robix_desc2' => 'Autonomous tracking logic and programming',
        'robix_desc3' => 'Hardware and software evaluation for control systems',
        'robix_fecha' => 'April 2026',
        
        // Barra de compromiso inferior
        'comp_titulo' => 'Commitment to excellence',
        'comp_desc' => 'Each achievement represents hours of dedication, continuous learning, and teamwork to achieve innovative solutions to real-world problems.'
    ]
];

$t = $textos[$lang];

// Obtener la página actual
$pagina_actual = basename($_SERVER['PHP_SELF']);
if ($pagina_actual == '') {
    $pagina_actual = 'logros.php';
}
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($t['titulo_pestana'], ENT_QUOTES, 'UTF-8'); ?></title>
    <link rel="stylesheet" href="estilos.css?v=3">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Estilos específicos basados fielmente en la nueva interfaz */
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
            <a href="index.php?lang=<?php echo $lang; ?>" class="<?php echo ($pagina_actual == 'index.php') ? 'active' : ''; ?>">
                <i class="fa-solid fa-house"></i> <?php echo htmlspecialchars($t['inicio'], ENT_QUOTES, 'UTF-8'); ?>
            </a>
            <a href="sobre-mi.php?lang=<?php echo $lang; ?>" class="<?php echo ($pagina_actual == 'sobre-mi.php') ? 'active' : ''; ?>">
                <i class="fa-solid fa-user"></i> <?php echo htmlspecialchars($t['sobre'], ENT_QUOTES, 'UTF-8'); ?>
            </a>
            <a href="proyectos.php?lang=<?php echo $lang; ?>" class="<?php echo ($pagina_actual == 'proyectos.php') ? 'active' : ''; ?>">
                <i class="fa-solid fa-code"></i> <?php echo htmlspecialchars($t['proyectos'], ENT_QUOTES, 'UTF-8'); ?>
            </a>
            <a href="logros.php?lang=<?php echo $lang; ?>" class="<?php echo ($pagina_actual == 'logros.php') ? 'active' : ''; ?>">
                <i class="fa-solid fa-trophy"></i> <?php echo htmlspecialchars($t['logros'], ENT_QUOTES, 'UTF-8'); ?>
            </a>
            <a href="contacto.php?lang=<?php echo $lang; ?>" class="<?php echo ($pagina_actual == 'contacto.php') ? 'active' : ''; ?>">
                <i class="fa-solid fa-envelope"></i> <?php echo htmlspecialchars($t['contacto'], ENT_QUOTES, 'UTF-8'); ?>
            </a>
        </div>
        
        <div class="idiomas">
            <i class="fas fa-language"></i>
            <a href="<?php echo $pagina_actual; ?>?lang=es" class="<?php echo ($lang == 'es') ? 'lang-active' : ''; ?>">ES</a>
            <span>|</span>
            <a href="<?php echo $pagina_actual; ?>?lang=en" class="<?php echo ($lang == 'en') ? 'lang-active' : ''; ?>">EN</a>
        </div>
    </nav>

    <main>
        <section class="header-logros">
            <div class="icono-copa"><i class="fa-solid fa-trophy"></i></div>
            <h2><?php echo htmlspecialchars($t['h2_header'], ENT_QUOTES, 'UTF-8'); ?></h2>
            <p><?php echo htmlspecialchars($t['p_header'], ENT_QUOTES, 'UTF-8'); ?></p>
        </section>

        <section class="grid-logros">
            <div class="tarjeta-logro-moderna tarjeta-azul">
                <div>
                    <div class="tarjeta-header-layout">
                        <div class="icono-logro-principal icono-azul">
                            <i class="fa-solid fa-award"></i>
                        </div>
                        <div class="info-titulo-evento">
                            <span class="badge-lugar badge-azul"><?php echo htmlspecialchars($t['primer_lugar'], ENT_QUOTES, 'UTF-8'); ?></span>
                            <h3>NETWORKING CHALLENGE 2026</h3>
                            <p>Facultad de Ciencia y Tecnología — Universidad Gerardo Barrios</p>
                        </div>
                    </div>

                    <div class="tarjeta-body-layout">
                        <div class="lista-items-tecnicos">
                            <div class="item-tecnico">
                                <i class="fa-solid fa-diagram-project" style="color: #2563eb;"></i>
                                <div><p><?php echo htmlspecialchars($t['net_desc1'], ENT_QUOTES, 'UTF-8'); ?></p></div>
                            </div>
                            <div class="item-tecnico">
                                <i class="fa-solid fa-magnifying-glass-chart" style="color: #2563eb;"></i>
                                <div><p><?php echo htmlspecialchars($t['net_desc2'], ENT_QUOTES, 'UTF-8'); ?></p></div>
                            </div>
                            <div class="item-tecnico">
                                <i class="fa-solid fa-sliders" style="color: #2563eb;"></i>
                                <div><p><?php echo htmlspecialchars($t['net_desc3'], ENT_QUOTES, 'UTF-8'); ?></p></div>
                            </div>
                        </div>

                        <div class="wrapper-diploma-preview">
                            <img src="img/primerlugar.jpeg" alt="Diploma Primer Lugar Networking Challenge">
                        </div>
                    </div>
                </div>

                <div class="tarjeta-footer-layout">
                    <div class="fecha-logro">
                        <i class="fa-regular fa-calendar"></i> <?php echo htmlspecialchars($t['net_fecha'], ENT_QUOTES, 'UTF-8'); ?>
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
                            <span class="badge-lugar badge-verde"><?php echo htmlspecialchars($t['tercer_lugar'], ENT_QUOTES, 'UTF-8'); ?></span>
                            <h3><?php echo htmlspecialchars($t['robix_titulo'], ENT_QUOTES, 'UTF-8'); ?></h3>
                            <p>22° Festival Latinoamericano de Instalación de Software Libre (FLISOL)</p>
                        </div>
                    </div>

                    <div class="tarjeta-body-layout">
                        <div class="lista-items-tecnicos">
                            <div class="item-tecnico">
                                <i class="fa-solid fa-microchip" style="color: #16a34a;"></i>
                                <div><p><?php echo htmlspecialchars($t['robix_desc1'], ENT_QUOTES, 'UTF-8'); ?></p></div>
                            </div>
                            <div class="item-tecnico">
                                <i class="fa-solid fa-code" style="color: #16a34a;"></i>
                                <div><p><?php echo htmlspecialchars($t['robix_desc2'], ENT_QUOTES, 'UTF-8'); ?></p></div>
                            </div>
                            <div class="item-tecnico">
                                <i class="fa-solid fa-bullseye" style="color: #16a34a;"></i>
                                <div><p><?php echo htmlspecialchars($t['robix_desc3'], ENT_QUOTES, 'UTF-8'); ?></p></div>
                            </div>
                        </div>

                        <div class="wrapper-diploma-preview">
                            <img src="img/tercerlugar.jpeg" alt="Diploma Tercer Lugar Robix FLISOL">
                        </div>
                    </div>
                </div>

                <div class="tarjeta-footer-layout">
                    <div class="fecha-logro">
                        <i class="fa-regular fa-calendar"></i> <?php echo htmlspecialchars($t['robix_fecha'], ENT_QUOTES, 'UTF-8'); ?>
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
                <span class="titulo-comp"><?php echo htmlspecialchars($t['comp_titulo'], ENT_QUOTES, 'UTF-8'); ?></span>
                <p class="desc-comp"><?php echo htmlspecialchars($t['comp_desc'], ENT_QUOTES, 'UTF-8'); ?></p>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-wrapper">
            <div class="footer-col">
                <h3><?php echo htmlspecialchars($t['explorar'], ENT_QUOTES, 'UTF-8'); ?></h3>
                <a href="index.php?lang=<?php echo $lang; ?>"><?php echo htmlspecialchars($t['inicio'], ENT_QUOTES, 'UTF-8'); ?></a>
                <a href="sobre-mi.php?lang=<?php echo $lang; ?>"><?php echo htmlspecialchars($t['sobre'], ENT_QUOTES, 'UTF-8'); ?></a>
                <a href="proyectos.php?lang=<?php echo $lang; ?>"><?php echo htmlspecialchars($t['proyectos'], ENT_QUOTES, 'UTF-8'); ?></a>
                <a href="logros.php?lang=<?php echo $lang; ?>"><?php echo htmlspecialchars($t['logros'], ENT_QUOTES, 'UTF-8'); ?></a>
                <a href="contacto.php?lang=<?php echo $lang; ?>"><?php echo htmlspecialchars($t['contacto'], ENT_QUOTES, 'UTF-8'); ?></a>
            </div>

            <div class="footer-col">
                <h3><?php echo htmlspecialchars($t['redes'], ENT_QUOTES, 'UTF-8'); ?></h3>
                <div class="social-icons-container">
                    <a href="https://www.linkedin.com/in/cristopher-alejandro-bernal-chávez-245189381" target="_blank" rel="noopener noreferrer">
                        <img src="img/linkedin.jpg" alt="LinkedIn" class="img-social">
                    </a>
                    <a href="https://github.com/alejandrobernalchavez" target="_blank" rel="noopener noreferrer">
                        <img src="img/github.png" alt="GitHub" class="img-social">
                    </a>
                    <a href="mailto:bernalalejandro1302@gmail.com">
                        <img src="img/email.png" alt="Email" class="img-social">
                    </a>
                </div>
            </div>
        </div>
        <p class="copy">© 2026 Cristopher Bernal. Todos los derechos reservados.</p>
    </footer>

</body>
</html>