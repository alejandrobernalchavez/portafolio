<?php
// 1. Lógica de detección de idioma
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'es';

// 2. Diccionario de textos para la sección de Contacto
$textos = [
    'es' => [
        'titulo_pestana' => 'Contacto | Cristopher Bernal',
        'inicio' => 'Inicio',
        'sobre' => 'Sobre mí',
        'proyectos' => 'Proyectos',
        'logros' => 'Logros',
        'contacto' => 'Contacto',
        'h1' => 'Hablemos de tu próximo proyecto',
        'p1' => 'Estoy abierto a oportunidades laborales, proyectos de automatización/testing manual o simplemente a conectar con entusiastas de la tecnología. Si buscas asegurar que tu software funcione sin fallos, ¡escríbeme!',
        'lbl_correo' => 'CORREO',
        'sub_correo' => 'Envíame un email',
        'lbl_telefono' => 'TELÉFONO',
        'sub_telefono' => 'Hablemos por llamada',
        'lbl_ubicacion' => 'UBICACIÓN',
        'titulo_form' => 'Completa el formulario',
        'sub_form' => 'y te responderé a la brevedad.',
        'placeholder_nombre' => 'Tu nombre completo',
        'placeholder_correo' => 'tu@correo.com',
        'placeholder_asunto' => '¿En qué puedo ayudarte?',
        'placeholder_mensaje' => 'Cuéntame sobre tu proyecto...',
        'lbl_nombre' => 'NOMBRE',
        'lbl_correo_form' => 'CORREO ELECTRÓNICO',
        'lbl_asunto' => 'ASUNTO',
        'lbl_mensaje' => 'MENSAJE',
        'btn_enviar' => 'Enviar mensaje',
        'explorar' => 'Explorar',
        'redes' => 'Redes sociales'
    ],
    'en' => [
        'titulo_pestana' => 'Contact | Cristopher Bernal',
        'inicio' => 'Home',
        'sobre' => 'About me',
        'proyectos' => 'Projects',
        'logros' => 'Achievements',
        'contacto' => 'Contact',
        'h1' => "Let's talk about your next project",
        'p1' => 'I am open to job opportunities, automation/manual testing projects, or simply connecting with technology enthusiasts. If you want to ensure your software runs bug-free, write to me!',
        'lbl_correo' => 'EMAIL',
        'sub_correo' => 'Send me an email',
        'lbl_telefono' => 'PHONE',
        'sub_telefono' => 'Let’s talk over a call',
        'lbl_ubicacion' => 'LOCATION',
        'titulo_form' => 'Complete the form',
        'sub_form' => 'and I will get back to you shortly.',
        'placeholder_nombre' => 'Your full name',
        'placeholder_correo' => 'your@email.com',
        'placeholder_asunto' => 'How can I help you?',
        'placeholder_mensaje' => 'Tell me about your project...',
        'lbl_nombre' => 'NAME',
        'lbl_correo_form' => 'EMAIL ADDRESS',
        'lbl_asunto' => 'SUBJECT',
        'lbl_mensaje' => 'MESSAGE',
        'btn_enviar' => 'Send message',
        'explorar' => 'Explore',
        'redes' => 'Social Media'
    ]
];

$t = $textos[$lang];
$pagina_actual = basename($_SERVER['PHP_SELF']);

// Tus datos reales y confirmados
$mi_correo = "bernalalejandro1302@gmail.com";
$mi_telefono = "64277676";
$mi_ubicacion = "Jiquilisco, Usulután, El Salvador";
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $t['titulo_pestana']; ?></title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        body {
            background-color: #f8fafc !important;
            margin: 0;
            font-family: 'Segoe UI', Inter, sans-serif !important;
            position: relative;
            overflow-x: hidden;
        }

        /* Ondas estéticas de fondo difuminadas como en la imagen */
        body::before {
            content: '';
            position: absolute;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(37,99,235,0.05) 0%, rgba(255,255,255,0) 70%);
            bottom: -100px;
            left: -100px;
            z-index: -1;
        }

        .seccion-contacto-contenedor {
            display: flex !important;
            align-items: stretch !important; 
            gap: 32px !important;
            max-width: 1200px !important;
            margin: 40px auto !important;
            padding: 0 24px !important;
            flex-wrap: wrap !important;
            box-sizing: border-box !important;
        }
        
        /* TARJETA IZQUIERDA: INFORMACIÓN */
        .tarjeta-contacto-info {
            flex: 1 !important;
            min-width: 340px !important;
            background: #ffffff !important;
            padding: 50px 40px !important;
            border-radius: 24px !important;
            box-shadow: 0 20px 40px rgba(15, 23, 42, 0.04) !important;
            text-align: left !important;
            position: relative !important;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* Puntos estéticos de fondo (esquina superior derecha e inferior izquierda) */
        .tarjeta-contacto-info::before {
            content: '••••\n••••\n••••';
            position: absolute;
            top: 25px;
            right: 30px;
            color: #cbd5e1;
            font-size: 14px;
            letter-spacing: 4px;
            line-height: 12px;
            white-space: pre;
            opacity: 0.5;
        }
        .tarjeta-contacto-info::after {
            content: '••••\n••••\n••••';
            position: absolute;
            bottom: 30px;
            right: 40px;
            color: #cbd5e1;
            font-size: 14px;
            letter-spacing: 4px;
            line-height: 12px;
            white-space: pre;
            opacity: 0.5;
        }
        
        /* TARJETA DERECHA: FORMULARIO */
        .tarjeta-contacto-formulario {
            flex: 1.2 !important;
            min-width: 380px !important;
            background: #ffffff !important;
            padding: 50px 45px !important;
            border-radius: 24px !important;
            box-shadow: 0 20px 40px rgba(15, 23, 42, 0.04) !important;
            text-align: left !important;
            position: relative !important;
        }
        
        .titulo-principal-contacto {
            font-size: 2.3rem !important;
            font-weight: 800 !important;
            color: #0f172a !important;
            line-height: 1.2 !important;
            margin-bottom: 8px !important;
            margin-top: 0 !important;
            letter-spacing: -0.5px;
        }

        /* Línea azul decorativa debajo del título principal */
        .linea-decorativa-titulo {
            width: 45px;
            height: 4px;
            background-color: #2563eb;
            border-radius: 2px;
            margin-bottom: 30px;
        }
        
        .parrafo-descriptivo-contacto {
            color: #475569 !important;
            font-size: 0.95rem !important;
            line-height: 1.6 !important;
            margin-bottom: 35px !important;
        }
        
        .bloque-item-contacto {
            display: flex !important;
            align-items: center !important;
            gap: 18px !important;
            margin-bottom: 24px !important;
        }
        
        .caja-icono-azul {
            background-color: #eff6ff !important;
            color: #2563eb !important;
            width: 48px !important;
            height: 48px !important;
            border-radius: 14px !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            font-size: 1.15rem !important;
            flex-shrink: 0 !important;
        }
        
        .detalles-texto-contacto span {
            display: block !important;
        }
        
        .detalles-texto-contacto .tag-label {
            font-weight: 800 !important;
            font-size: 0.85rem !important;
            color: #0f172a !important;
            letter-spacing: 0.3px !important;
        }
        
        .detalles-texto-contacto .tag-subtext {
            font-size: 0.85rem !important;
            color: #64748b !important;
            margin-top: 1px !important;
        }
        
        .detalles-texto-contacto .tag-enlace {
            font-size: 0.9rem !important;
            color: #2563eb !important;
            font-weight: 600 !important;
            margin-top: 1px !important;
            text-decoration: none !important;
        }
        
        /* BOTÓN LINKEDIN FIEL AL DISEÑO ORIGINAL */
        .boton-contacto-linkedin {
            display: inline-flex !important;
            align-items: center !important;
            gap: 8px !important;
            background: #ffffff !important;
            color: #1e293b !important;
            border: 1px solid #e2e8f0 !important;
            padding: 10px 20px !important;
            border-radius: 12px !important;
            font-weight: 600 !important;
            font-size: 0.85rem !important;
            text-decoration: none !important;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.02) !important;
            margin-top: 20px !important;
            width: max-content;
            transition: all 0.2s ease !important;
        }
        
        .boton-contacto-linkedin:hover {
            background: #f8fafc !important;
            border-color: #cbd5e1 !important;
            color: #2563eb !important;
        }
        
        .encabezado-tarjeta-formulario {
            display: flex !important;
            align-items: center !important;
            gap: 16px !important;
            margin-bottom: 35px !important;
            padding-right: 100px !important; 
        }
        
        .burbuja-icono-mensaje {
            background: #eff6ff !important;
            color: #2563eb !important;
            width: 46px !important;
            height: 46px !important;
            border-radius: 50% !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            font-size: 1.1rem !important;
        }
        
        /* UBICACIÓN EXACTA DEL LOGO EN LA ESQUINA DEL FORMULARIO */
        .imagen-logo-esquina {
            position: absolute !important;
            top: 40px !important;
            right: 45px !important;
            width: 70px !important;
            height: auto !important;
            background: transparent !important;
        }
        
        .fila-formulario-doble {
            display: flex !important;
            gap: 20px !important;
            flex-wrap: wrap !important;
            margin-bottom: 20px !important;
        }
        
        .grupo-formulario-input {
            flex: 1 !important;
            min-width: 220px !important;
            display: flex !important;
            flex-direction: column !important;
            gap: 8px !important;
        }
        
        .grupo-formulario-ancho-completo {
            display: flex !important;
            flex-direction: column !important;
            gap: 8px !important;
            margin-bottom: 20px !important;
        }
        
        .etiqueta-formulario {
            font-size: 0.78rem !important;
            font-weight: 700 !important;
            color: #1e293b !important;
            letter-spacing: 0.5px !important;
        }
        
        /* CONTENEDOR E INPUTS CON ICONOS INCORPORADOS */
        .wrapper-input-icono {
            position: relative !important;
            width: 100% !important;
        }

        .wrapper-input-icono i {
            position: absolute !important;
            left: 16px !important;
            top: 50% !important;
            transform: translateY(-50%) !important;
            color: #94a3b8 !important;
            font-size: 0.95rem !important;
            pointer-events: none !important;
        }

        .wrapper-input-icono.textarea-icon i {
            top: 20px !important;
            transform: none !important;
        }
        
        .campo-formulario-input {
            width: 100% !important;
            padding: 14px 16px 14px 45px !important; /* Margen izquierdo extra para no pisar el icono */
            border: 1px solid #e2e8f0 !important;
            border-radius: 12px !important;
            font-size: 0.92rem !important;
            color: #334155 !important;
            background: #ffffff !important;
            box-sizing: border-box !important;
            transition: all 0.2s ease !important;
        }
        
        .campo-formulario-input:focus {
            outline: none !important;
            border-color: #2563eb !important;
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.08) !important;
        }

        .campo-formulario-input::placeholder {
            color: #94a3b8 !important;
        }
        
        /* BOTÓN ENVIAR MENSAJE CON DEGRADADO EXACTO */
        .boton-enviar-formulario {
            width: 100% !important;
            background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%) !important;
            color: #ffffff !important;
            border: none !important;
            padding: 15px !important;
            border-radius: 14px !important;
            font-size: 1rem !important;
            font-weight: 600 !important;
            cursor: pointer !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            gap: 10px !important;
            box-shadow: 0 4px 15px rgba(37, 99, 235, 0.25) !important;
            transition: all 0.2s ease !important;
        }
        
        .boton-enviar-formulario:hover {
            transform: translateY(-1px) !important;
            box-shadow: 0 6px 20px rgba(37, 99, 235, 0.35) !important;
        }
    </style>
</head>
<body>

<nav class="navbar">
    <div class="pestañas">
        <a href="index.php?lang=<?php echo $lang; ?>" class="<?php echo ($pagina_actual == 'index.php') ? 'active' : ''; ?>">
            <i class="fas fa-home"></i> <?php echo $t['inicio']; ?>
        </a>
        <a href="sobre-mi.php?lang=<?php echo $lang; ?>" class="<?php echo ($pagina_actual == 'sobre-mi.php') ? 'active' : ''; ?>">
            <i class="fas fa-user"></i> <?php echo $t['sobre']; ?>
        </a>
        <a href="proyectos.php?lang=<?php echo $lang; ?>" class="<?php echo ($pagina_actual == 'proyectos.php' || $pagina_actual == 'detalle-proyecto.php') ? 'active' : ''; ?>">
            <i class="fas fa-code"></i> <?php echo $t['proyectos']; ?>
        </a>
        <a href="logros.php?lang=<?php echo $lang; ?>" class="<?php echo ($pagina_actual == 'logros.php') ? 'active' : ''; ?>">
            <i class="fas fa-trophy"></i> <?php echo $t['logros']; ?>
        </a>
        <a href="contacto.php?lang=<?php echo $lang; ?>" class="<?php echo ($pagina_actual == 'contacto.php') ? 'active' : ''; ?>">
            <i class="fas fa-envelope"></i> <?php echo $t['contacto']; ?>
        </a>
    </div>

    <div class="idiomas">
        <i class="fas fa-language"></i>
        <a href="?lang=es" class="<?php echo ($lang == 'es') ? 'lang-active' : ''; ?>">ES</a>
        <span>|</span>
        <a href="?lang=en" class="<?php echo ($lang == 'en') ? 'lang-active' : ''; ?>">EN</a>
    </div>
</nav>

<main class="seccion-contacto-contenedor">
    
    <section class="tarjeta-contacto-info">
        <div>
            <h1 class="titulo-principal-contacto"><?php echo $t['h1']; ?></h1>
            <div class="linea-decorativa-titulo"></div>
            <p class="parrafo-descriptivo-contacto"><?php echo $t['p1']; ?></p>
            
            <div class="bloque-item-contacto">
                <div class="caja-icono-azul">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="detalles-texto-contacto">
                    <span class="tag-label"><?php echo $t['lbl_correo']; ?></span>
                    <span class="tag-subtext"><?php echo $t['sub_correo']; ?></span>
                    <a href="mailto:<?php echo $mi_correo; ?>" class="tag-enlace"><?php echo $mi_correo; ?></a>
                </div>
            </div>

            <div class="bloque-item-contacto">
                <div class="caja-icono-azul">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <div class="detalles-texto-contacto">
                    <span class="tag-label"><?php echo $t['lbl_telefono']; ?></span>
                    <span class="tag-subtext"><?php echo $t['sub_telefono']; ?></span>
                    <a href="tel:+503<?php echo $mi_telefono; ?>" class="tag-enlace"><?php echo $mi_telefono; ?></a>
                </div>
            </div>

            <div class="bloque-item-contacto">
                <div class="caja-icono-azul">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="detalles-texto-contacto">
                    <span class="tag-label"><?php echo $t['lbl_ubicacion']; ?></span>
                    <span class="tag-subtext" style="color: #334155; font-weight: 500; margin-top: 2px;"><?php echo $mi_ubicacion; ?></span>
                </div>
            </div>
        </div>

        <a href="https://www.linkedin.com/in/cristopher-alejandro-bernal-chávez-245189381" target="_blank" class="boton-contacto-linkedin">
            <i class="fab fa-linkedin" style="color: #0a66c2; font-size: 1.1rem;"></i> LinkedIn
        </a>
    </section>
    
    <section class="tarjeta-contacto-formulario">
        
        <img src="img/logoportafolio.png" alt="Logo Portafolio" class="imagen-logo-esquina">

        <div class="encabezado-tarjeta-formulario">
            <div class="burbuja-icono-mensaje">
                <i class="fas fa-comments"></i>
            </div>
            <div>
                <h2 style="font-size: 1.3rem; font-weight: 800; color: #0f172a; margin: 0;"><?php echo $t['titulo_form']; ?></h2>
                <p style="font-size: 0.88rem; color: #64748b; margin: 3px 0 0 0; font-weight: 500;"><?php echo $t['sub_form']; ?></p>
            </div>
        </div>
        
        <form action="#" method="POST">
            <div class="fila-formulario-doble">
                <div class="grupo-formulario-input">
                    <label class="etiqueta-formulario"><?php echo $t['lbl_nombre']; ?></label>
                    <div class="wrapper-input-icono">
                        <i class="fas fa-user"></i>
                        <input type="text" class="campo-formulario-input" placeholder="<?php echo $t['placeholder_nombre']; ?>" required>
                    </div>
                </div>
                <div class="grupo-formulario-input">
                    <label class="etiqueta-formulario"><?php echo $t['lbl_correo_form']; ?></label>
                    <div class="wrapper-input-icono">
                        <i class="fas fa-envelope"></i>
                        <input type="email" class="campo-formulario-input" placeholder="<?php echo $t['placeholder_correo']; ?>" required>
                    </div>
                </div>
            </div>

            <div class="grupo-formulario-ancho-completo">
                <label class="etiqueta-formulario"><?php echo $t['lbl_asunto']; ?></label>
                <div class="wrapper-input-icono">
                    <i class="fas fa-tag"></i>
                    <input type="text" class="campo-formulario-input" placeholder="<?php echo $t['placeholder_asunto']; ?>" required>
                </div>
            </div>

            <div class="grupo-formulario-ancho-completo">
                <label class="etiqueta-formulario"><?php echo $t['lbl_mensaje']; ?></label>
                <div class="wrapper-input-icono textarea-icon">
                    <i class="fas fa-pen"></i>
                    <textarea class="campo-formulario-input" rows="5" placeholder="<?php echo $t['placeholder_mensaje']; ?>" required style="resize: vertical;"></textarea>
                </div>
            </div>

            <button type="submit" class="boton-enviar-formulario">
                <i class="fas fa-paper-plane"></i> <?php echo $t['btn_enviar']; ?>
            </button>
        </form>
    </section>

</main>

<footer>
    <div style="display: flex; justify-content: space-around; max-width: 900px; margin: 0 auto; flex-wrap: wrap; gap: 20px;">
        <div class="footer-col" style="text-align: left; min-width: 150px;">
            <h3 style="margin-bottom: 15px; color: white;"><?php echo $t['explorar']; ?></h3>
            <a href="index.php?lang=<?php echo $lang; ?>" style="color: white; text-decoration: none; opacity: 0.8; display: block; margin-bottom: 8px;">
                <?php echo $t['inicio']; ?>
            </a>
            <a href="sobre-mi.php?lang=<?php echo $lang; ?>" style="color: white; text-decoration: none; opacity: 0.8; display: block; margin-bottom: 8px;">
                <?php echo $t['sobre']; ?>
            </a>
            <a href="proyectos.php?lang=<?php echo $lang; ?>" style="color: white; text-decoration: none; opacity: 0.8; display: block; margin-bottom: 8px;">
                <?php echo $t['proyectos']; ?>
            </a>
            <a href="logros.php?lang=<?php echo $lang; ?>" style="color: white; text-decoration: none; opacity: 0.8; display: block;">
                <?php echo $t['logros']; ?>
            </a>
        </div>

        <div class="footer-col" style="text-align: left; min-width: 150px;">
            <h3 style="margin-bottom: 15px; color: white;"><?php echo $t['redes']; ?></h3>
            <div style="display: flex; gap: 15px;">
                <a href="https://www.linkedin.com/in/cristopher-alejandro-bernal-chávez-245189381" target="_blank">
                    <img src="img/linkedin.jpg" alt="LinkedIn" style="width: 30px; height: 30px; border-radius: 5px;">
                </a>
                <a href="https://github.com/alejandrobernalchavez" target="_blank">
                    <img src="img/github.png" alt="GitHub" style="width: 30px; height: 30px; border-radius: 5px;">
                </a>
                <a href="mailto:<?php echo $mi_correo; ?>">
                    <img src="img/email.png" alt="Email" style="width: 30px; height: 30px; border-radius: 5px;">
                </a>
            </div>
        </div>
    </div>
    <p class="copy">© 2026 Cristopher Bernal. Todos los derechos reservados.</p>
</footer>

</body>
</html>