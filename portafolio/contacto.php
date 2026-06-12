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
        'h1' => '¡Hablemos!',
        'p1' => 'Estoy abierta a oportunidades, colaboraciones o simplemente a conectar. No dudes en escribirme.',
        'lbl_correo' => 'CORREO',
        'sub_correo' => 'yuvicelavalleguzman@gmail.com',
        'lbl_telefono' => 'TELÉFONO',
        'sub_telefono' => '7352-5845',
        'lbl_ubicacion' => 'UBICACIÓN',
        'titulo_form' => 'Envíame un mensaje',
        'sub_form' => 'Completa el formulario y te responderé a la brevedad.',
        'placeholder_nombre' => 'Tu nombre completo',
        'placeholder_correo' => 'tu@correo.com',
        'placeholder_asunto' => '¿En qué puedo ayudarte?',
        'placeholder_mensaje' => 'Cuéntame sobre tu proyecto, oportunidad o consulta...',
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
        'h1' => "Let's talk!",
        'p1' => 'I am open to job opportunities, collaborations, or simply connecting. Don’t hesitate to write to me!',
        'lbl_correo' => 'EMAIL',
        'sub_correo' => 'yuvicelavalleguzman@gmail.com',
        'lbl_telefono' => 'PHONE',
        'sub_telefono' => '7352-5845',
        'lbl_ubicacion' => 'LOCATION',
        'titulo_form' => 'Send me a message',
        'sub_form' => 'Complete the form and I will get back to you shortly.',
        'placeholder_nombre' => 'Your full name',
        'placeholder_correo' => 'your@email.com',
        'placeholder_asunto' => 'How can I help you?',
        'placeholder_mensaje' => 'Tell me about your project, opportunity or inquiry...',
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

$mi_correo = "yuvicelavalleguzman@gmail.com";
$mi_telefono = "7352-5845";
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
            align-items: flex-start !important; /* Alinea ambas tarjetas perfectamente arriba */
            gap: 30px !important;
            max-width: 1200px !important;
            margin: 30px auto !important;
            padding: 0 20px !important;
            flex-wrap: wrap !important;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important;
            box-sizing: border-box !important;
        }
        
        .tarjeta-contacto-info {
            flex: 1 !important;
            min-width: 320px !important;
            background: #ffffff !important;
            padding: 35px !important; /* Compactado para evitar vacíos */
            border-radius: 20px !important;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03) !important;
            text-align: left !important;
        }
        
        .tarjeta-contacto-formulario {
            flex: 1.4 !important;
            min-width: 380px !important;
            background: #ffffff !important;
            padding: 35px !important;
            border-radius: 20px !important;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03) !important;
            text-align: left !important;
            position: relative !important;
        }
        
        .titulo-principal-contacto {
            font-size: 2rem !important;
            font-weight: 700 !important;
            color: #1e293b !important;
            line-height: 1.2 !important;
            margin-bottom: 15px !important;
            margin-top: 0 !important; /* Elimina espacio muerto arriba */
        }
        
        .parrafo-descriptivo-contacto {
            color: #64748b !important;
            font-size: 0.95rem !important;
            line-height: 1.5 !important;
            margin-bottom: 30px !important;
            margin-top: 0 !important;
        }
        
        .bloque-item-contacto {
            display: flex !important;
            align-items: center !important;
            gap: 15px !important;
            margin-bottom: 22px !important;
        }
        
        .caja-icono-azul {
            background-color: #eff6ff !important;
            color: #2563eb !important;
            width: 46px !important;
            height: 46px !important;
            border-radius: 10px !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            font-size: 1.1rem !important;
            flex-shrink: 0 !important;
        }
        
        .detalles-texto-contacto span {
            display: block !important;
        }
        
        .detalles-texto-contacto .tag-label {
            font-weight: 700 !important;
            font-size: 0.75rem !important;
            color: #64748b !important;
            letter-spacing: 0.5px !important;
        }
        
        .detalles-texto-contacto .tag-subtext {
            font-size: 0.9rem !important;
            color: #1e293b !important;
            font-weight: 500 !important;
            margin-top: 2px !important;
            text-decoration: none !important;
        }
        
        /* Contenedor para botones inferiores alineados */
        .contenedor-botones-redes {
            display: flex !important;
            gap: 12px !important;
            flex-wrap: wrap !important;
            margin-top: 30px !important;
            padding-top: 20px !important;
            border-top: 1px solid #f1f5f9 !important;
        }
        
        .boton-contacto-link {
            display: inline-flex !important;
            align-items: center !important;
            gap: 8px !important;
            background: #ffffff !important;
            color: #2563eb !important;
            border: 1px solid #e2e8f0 !important;
            padding: 10px 18px !important;
            border-radius: 10px !important;
            font-weight: 600 !important;
            font-size: 0.85rem !important;
            text-decoration: none !important;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.01) !important;
            transition: all 0.2s ease !important;
        }
        
        .boton-contacto-link:hover {
            background: #f8fafc !important;
            border-color: #cbd5e1 !important;
        }
        
        .encabezado-tarjeta-formulario {
            margin-bottom: 25px !important;
        }
        
        .fila-formulario-doble {
            display: flex !important;
            gap: 15px !important;
            flex-wrap: wrap !important;
            margin-bottom: 15px !important;
        }
        
        .grupo-formulario-input {
            flex: 1 !important;
            min-width: 180px !important;
            display: flex !important;
            flex-direction: column !important;
            gap: 6px !important;
        }
        
        .grupo-formulario-ancho-completo {
            display: flex !important;
            flex-direction: column !important;
            gap: 6px !important;
            margin-bottom: 15px !important;
        }
        
        .etiqueta-formulario {
            font-size: 0.75rem !important;
            font-weight: 700 !important;
            color: #475569 !important;
            letter-spacing: 0.5px !important;
        }
        
        .campo-formulario-input {
            width: 100% !important;
            padding: 12px 14px !important;
            border: 1px solid #e2e8f0 !important;
            border-radius: 8px !important;
            font-size: 0.9rem !important;
            color: #334155 !important;
            background: #f8fafc !important;
            box-sizing: border-box !important;
            transition: all 0.2s !important;
        }
        
        .campo-formulario-input:focus {
            outline: none !important;
            border-color: #2563eb !important;
            background: #ffffff !important;
        }
        
        .boton-enviar-formulario {
            width: 100% !important;
            background: #2563eb !important;
            color: #ffffff !important;
            border: none !important;
            padding: 14px !important;
            border-radius: 10px !important;
            font-size: 0.95rem !important;
            font-weight: 600 !important;
            cursor: pointer !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            gap: 10px !important;
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.15) !important;
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
                <a href="mailto:<?php echo $mi_correo; ?>" class="tag-subtext"><?php echo $t['sub_correo']; ?></a>
            </div>
        </div>

        <div class="bloque-item-contacto">
            <div class="caja-icono-azul">
                <i class="fas fa-phone-alt"></i>
            </div>
            <div class="detalles-texto-contacto">
                <span class="tag-label"><?php echo $t['lbl_telefono']; ?></span>
                <a href="tel:+503<?php echo $mi_telefono; ?>" class="tag-subtext"><?php echo $t['sub_telefono']; ?></a>
            </div>
        </div>

        <div class="bloque-item-contacto">
            <div class="caja-icono-azul">
                <i class="fas fa-map-marker-alt"></i>
            </div>
            <div class="detalles-texto-contacto">
                <span class="tag-label"><?php echo $t['lbl_ubicacion']; ?></span>
                <span class="tag-subtext" style="color: #334155;"><?php echo $mi_ubicacion; ?></span>
            </div>
        </div>

        <div class="contenedor-botones-redes">
            <a href="https://www.linkedin.com/in/cristopher-alejandro-bernal-chávez-245189381" target="_blank" class="boton-contacto-link">
                <i class="fab fa-linkedin-in" style="color: #0077b5;"></i> LinkedIn
            </a>
            <a href="mailto:<?php echo $mi_correo; ?>" class="boton-contacto-link">
                <i class="fas fa-paper-plane" style="color: #2563eb;"></i> Correo directo
            </a>
        </div>
    </section>
    
    <section class="tarjeta-contacto-formulario">
        <div class="encabezado-tarjeta-formulario">
            <h2 style="font-size: 1.5rem; font-weight: 700; color: #1e293b; margin: 0;"><?php echo $t['titulo_form']; ?></h2>
            <p style="font-size: 0.9rem; color: #64748b; margin: 5px 0 0 0;"><?php echo $t['sub_form']; ?></p>
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