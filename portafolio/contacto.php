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
        .seccion-contacto-contenedor {
            display: flex !important;
            gap: 40px !important;
            max-width: 1140px !important;
            margin: 40px auto !important;
            padding: 0 20px !important;
            flex-wrap: wrap !important;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important;
            box-sizing: border-box !important;
        }
        
        .tarjeta-contacto-info {
            flex: 1 !important;
            min-width: 320px !important;
            background: #ffffff !important;
            padding: 45px !important;
            border-radius: 20px !important;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03) !important;
            text-align: left !important;
        }
        
        .tarjeta-contacto-formulario {
            flex: 1.2 !important;
            min-width: 350px !important;
            background: #ffffff !important;
            padding: 45px !important;
            border-radius: 20px !important;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03) !important;
            text-align: left !important;
            position: relative !important;
        }
        
        .titulo-principal-contacto {
            font-size: 2.3rem !important;
            font-weight: 700 !important;
            color: #1e293b !important;
            line-height: 1.2 !important;
            margin-bottom: 20px !important;
            margin-top: 0 !important;
        }
        
        .parrafo-descriptivo-contacto {
            color: #64748b !important;
            font-size: 0.95rem !important;
            line-height: 1.6 !important;
            margin-bottom: 35px !important;
        }
        
        .bloque-item-contacto {
            display: flex !important;
            align-items: center !important;
            gap: 20px !important;
            margin-bottom: 25px !important;
        }
        
        .caja-icono-azul {
            background-color: #eff6ff !important;
            color: #2563eb !important;
            width: 50px !important;
            height: 50px !important;
            border-radius: 12px !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            font-size: 1.2rem !important;
            flex-shrink: 0 !important;
        }
        
        .detalles-texto-contacto span {
            display: block !important;
        }
        
        .detalles-texto-contacto .tag-label {
            font-weight: 700 !important;
            font-size: 0.8rem !important;
            color: #1e293b !important;
            letter-spacing: 0.5px !important;
        }
        
        .detalles-texto-contacto .tag-subtext {
            font-size: 0.85rem !important;
            color: #64748b !important;
            margin-top: 2px !important;
        }
        
        .detalles-texto-contacto .tag-enlace {
            font-size: 0.9rem !important;
            color: #2563eb !important;
            font-weight: 500 !important;
            margin-top: 1px !important;
            text-decoration: none !important;
        }
        
        .boton-contacto-linkedin {
            display: inline-flex !important;
            align-items: center !important;
            gap: 8px !important;
            background: #ffffff !important;
            color: #2563eb !important;
            border: 1px solid #e2e8f0 !important;
            padding: 10px 24px !important;
            border-radius: 25px !important;
            font-weight: 600 !important;
            font-size: 0.9rem !important;
            text-decoration: none !important;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.02) !important;
            margin-top: 15px !important;
            transition: all 0.2s ease !important;
        }
        
        .boton-contacto-linkedin:hover {
            background: #f8fafc !important;
            border-color: #cbd5e1 !important;
        }
        
        .encabezado-tarjeta-formulario {
            display: flex !important;
            align-items: center !important;
            gap: 15px !important;
            margin-bottom: 30px !important;
            padding-right: 90px !important; /* Espacio para que el formulario no pise el logo */
        }
        
        .burbuja-icono-mensaje {
            background: #f1f5f9 !important;
            color: #2563eb !important;
            width: 44px !important;
            height: 44px !important;
            border-radius: 50% !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            font-size: 1.1rem !important;
        }
        
        /* EL UNICO LOGO TRATADO DE FORMA LIMPIA */
        .imagen-logo-esquina {
            position: absolute !important;
            top: 25px !important;
            right: 35px !important;
            width: 65px !important;      /* Cuadro contenedor de visión rígido */
            height: 65px !important;
            overflow: hidden !important;  /* Recorta los excesos */
            object-fit: none !important;  /* No escala ni deforma la imagen */
            /* Mueve la imagen para que muestre el centro-derecha, dejando el error azul fuera de la caja */
            object-position: 22px center !important; 
            background: transparent !important;
            border: none !important;
            box-shadow: none !important;
        }
        
        .fila-formulario-doble {
            display: flex !important;
            gap: 20px !important;
            flex-wrap: wrap !important;
            margin-bottom: 20px !important;
        }
        
        .grupo-formulario-input {
            flex: 1 !important;
            min-width: 200px !important;
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
            font-size: 0.75rem !important;
            font-weight: 700 !important;
            color: #475569 !important;
            letter-spacing: 0.5px !important;
        }
        
        .campo-formulario-input {
            width: 100% !important;
            padding: 14px 16px !important;
            border: 1px solid #e2e8f0 !important;
            border-radius: 10px !important;
            font-size: 0.9rem !important;
            color: #334155 !important;
            background: #ffffff !important;
            box-sizing: border-box !important;
            transition: border-color 0.2s !important;
        }
        
        .campo-formulario-input:focus {
            outline: none !important;
            border-color: #2563eb !important;
        }
        
        .boton-enviar-formulario {
            width: 100% !important;
            background: #2563eb !important;
            color: #ffffff !important;
            border: none !important;
            padding: 16px !important;
            border-radius: 12px !important;
            font-size: 1rem !important;
            font-weight: 600 !important;
            cursor: pointer !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            gap: 10px !important;
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.2) !important;
            transition: background 0.2s !important;
        }
        
        .boton-enviar-formulario:hover {
            background: #1d4ed8 !important;
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

<div class="logo-container">
    <img src="img/logoportafolio.png" alt="Logo Portafolio" class="logo-inicio">
</div>

<main class="seccion-contacto-contenedor">
    
    <section class="tarjeta-contacto-info">
        <h1 class="titulo-principal-contacto"><?php echo $t['h1']; ?></h1>
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
                <span class="tag-subtext"><?php echo $mi_ubicacion; ?></span>
            </div>
        </div>

        <a href="https://www.linkedin.com/in/cristopher-alejandro-bernal-chávez-245189381" target="_blank" class="boton-contacto-linkedin">
            <i class="fab fa-linkedin"></i> LinkedIn
        </a>
    </section>
    
    <section class="tarjeta-contacto-formulario">
        
        <img src="img/logoportafolio.png" alt="Logo Portafolio" class="imagen-logo-esquina">

        <div class="encabezado-tarjeta-formulario">
            <div class="burbuja-icono-mensaje">
                <i class="fas fa-comment-alt"></i>
            </div>
            <div>
                <h2 style="font-size: 1.25rem; font-weight: 700; color: #1e293b; margin: 0;"><?php echo $t['titulo_form']; ?></h2>
                <p style="font-size: 0.85rem; color: #64748b; margin: 2px 0 0 0;"><?php echo $t['sub_form']; ?></p>
            </div>
        </div>
        
        <form action="#" method="POST">
            <div class="fila-formulario-doble">
                <div class="grupo-formulario-input">
                    <label class="etiqueta-formulario"><?php echo $t['lbl_nombre']; ?></label>
                    <input type="text" class="campo-formulario-input" placeholder="<?php echo $t['placeholder_nombre']; ?>" required>
                </div>
                <div class="grupo-formulario-input">
                    <label class="etiqueta-formulario"><?php echo $t['lbl_correo_form']; ?></label>
                    <input type="email" class="campo-formulario-input" placeholder="<?php echo $t['placeholder_correo']; ?>" required>
                </div>
            </div>

            <div class="grupo-formulario-ancho-completo">
                <label class="etiqueta-formulario"><?php echo $t['lbl_asunto']; ?></label>
                <input type="text" class="campo-formulario-input" placeholder="<?php echo $t['placeholder_asunto']; ?>" required>
            </div>

            <div class="grupo-formulario-ancho-completo">
                <label class="etiqueta-formulario"><?php echo $t['lbl_mensaje']; ?></label>
                <textarea class="campo-formulario-input" rows="5" placeholder="<?php echo $t['placeholder_mensaje']; ?>" required style="resize: vertical;"></textarea>
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
            <a href="proyectos.php?lang=<?php echo $lang; ?>" style="color: white; text-decoration: none; opacity: 0.8; display: block;">
                <?php echo $t['proyectos']; ?>
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