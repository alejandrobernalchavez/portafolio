<?php
// 1. Lógica de detección de idioma
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'es';

// 2. Diccionario de textos (Optimizado para QA Tester)
$textos = [
    'es' => [
        'titulo_pestana' => 'Contacto | Cristopher Bernal',
        'meta_desc' => 'Ponte en contacto con Cristopher Bernal, QA Tester en formación. Formulario de contacto para propuestas de aseguramiento de calidad y proyectos de software.',
        'meta_keywords' => 'Contacto, Cristopher Bernal, QA Tester, Aseguramiento de calidad, El Salvador, Jiquilisco, Control de calidad software',
        'inicio' => 'Inicio',
        'sobre' => 'Sobre mí',
        'proyectos' => 'Proyectos',
        'contacto' => 'Contacto',
        
        // Columna Izquierda (Info)
        'hablemos' => '¡Hablemos de Calidad!',
        'intro_qa' => 'Estoy abierto a oportunidades laborales, proyectos de automatización/testing manual o simplemente a conectar con entusiastas de la tecnología. Si buscas asegurar que tu software funcione sin fallos, ¡escríbeme!',
        'correo_tit' => 'CORREO',
        'tel_tit' => 'TELÉFONO',
        'ubi_tit' => 'UBICACIÓN',
        'ubi_det' => 'Jiquilisco, Usulután, El Salvador',
        
        // Columna Derecha (Formulario)
        'enviname' => 'Envíame un mensaje',
        'completar' => 'Completa el formulario y te responderé a la brevedad.',
        'lbl_nombre' => 'NOMBRE',
        'lbl_correo' => 'CORREO ELECTRÓNICO',
        'lbl_asunto' => 'ASUNTO',
        'lbl_mensaje' => 'MENSAJE',
        'ph_nombre' => 'Tu nombre completo',
        'ph_correo' => 'tu@correo.com',
        'ph_asunto' => '¿En qué puedo ayudarte?',
        'ph_mensaje' => 'Cuéntame sobre tu proyecto, oportunidad o consulta...',
        'btn_enviar' => 'Enviar mensaje',
        
        // Mensajes de Validación
        'msg_exito' => '¡Reporte enviado! Tu mensaje ha sido recibido con éxito.',
        'msg_error' => 'Error: Por favor, revisa y completa todos los campos.',
        'explorar' => 'Explorar',
        'redes' => 'Redes sociales'
    ],
    'en' => [
        'titulo_pestana' => 'Contact | Cristopher Bernal',
        'meta_desc' => 'Get in touch with Cristopher Bernal, QA Tester in training. Contact form for quality assurance proposals and software projects.',
        'meta_keywords' => 'Contact, Cristopher Bernal, QA Tester, Quality Assurance, El Salvador, Jiquilisco, Software testing',
        'inicio' => 'Home',
        'sobre' => 'About me',
        'proyectos' => 'Projects',
        'contacto' => 'Contact',
        
        // Left Column (Info)
        'hablemos' => "Let's Talk Quality!",
        'intro_qa' => 'I am open to job opportunities, manual or automated testing projects, or simply connecting with tech enthusiasts. If you want to ensure your software runs bug-free, drop me a line!',
        'correo_tit' => 'EMAIL',
        'tel_tit' => 'PHONE',
        'ubi_tit' => 'LOCATION',
        'ubi_det' => 'Jiquilisco, Usulutan, El Salvador',
        
        // Right Column (Form)
        'enviname' => 'Send me a message',
        'completar' => 'Complete the form and I will get back to you shortly.',
        'lbl_nombre' => 'NAME',
        'lbl_correo' => 'EMAIL ADDRESS',
        'lbl_asunto' => 'SUBJECT',
        'lbl_mensaje' => 'MESSAGE',
        'ph_nombre' => 'Your full name',
        'ph_correo' => 'you@example.com',
        'ph_asunto' => 'How can I help you?',
        'ph_mensaje' => 'Tell me about your project, opportunity, or inquiry...',
        'btn_enviar' => 'Send message',
        
        // Validation Messages
        'msg_exito' => 'Report sent! Your message has been successfully received.',
        'msg_error' => 'Error: Please check and fill in all fields.',
        'explorar' => 'Explore',
        'redes' => 'Social Media'
    ]
];

$t = $textos[$lang];
$pagina_actual = basename($_SERVER['PHP_SELF']);

// Lógica de procesamiento
$mensaje_estado = '';
$clase_estado = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_SPECIAL_CHARS);
    $correo = filter_input(INPUT_POST, 'correo', FILTER_VALIDATE_EMAIL);
    $asunto = filter_input(INPUT_POST, 'asunto', FILTER_SANITIZE_SPECIAL_CHARS);
    $mensaje = filter_input(INPUT_POST, 'mensaje', FILTER_SANITIZE_SPECIAL_CHARS);

    if ($nombre && $correo && $asunto && $mensaje) {
        $mensaje_estado = $t['msg_exito'];
        $clase_estado = 'estado-exito';
    } else {
        $mensaje_estado = $t['msg_error'];
        $clase_estado = 'estado-error';
    }
}
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $t['meta_desc']; ?>">
    <meta name="keywords" content="<?php echo $t['meta_keywords']; ?>">
    <meta name="author" content="Cristopher Bernal">
    <meta name="robots" content="index, follow">

    <title><?php echo $t['titulo_pestana']; ?></title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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

<main class="contenedor-principal" style="max-width: 1100px; margin: 40px auto; padding: 0 20px; display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 30px;">
    
    <section style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 15px; padding: 40px; text-align: left; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.2);">
        <div>
            <h1 style="margin-top: 0; margin-bottom: 15px; font-size: 2rem; color: #ffffff;"><?php echo $t['hablemos']; ?></h1>
            <p style="color: #b0b3b8; line-height: 1.6; margin-bottom: 40px; font-size: 1.05rem;"><?php echo $t['intro_qa']; ?></p>
            
            <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 25px;">
                <div style="width: 50px; height: 50px; background: rgba(0, 123, 255, 0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #007bff; font-size: 1.2rem;">
                    <i class="fas fa-envelope"></i>
                </div>
                <div>
                    <span style="font-size: 0.8rem; font-weight: bold; color: #8c9096; display: block; letter-spacing: 1px;"><?php echo $t['correo_tit']; ?></span>
                    <a href="mailto:bernalalejandro1302@gmail.com" style="color: #ffffff; text-decoration: none; font-size: 1.05rem; font-weight: 500;">bernalalejandro1302@gmail.com</a>
                </div>
            </div>

            <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 25px;">
                <div style="width: 50px; height: 50px; background: rgba(0, 123, 255, 0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #007bff; font-size: 1.2rem;">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <div>
                    <span style="font-size: 0.8rem; font-weight: bold; color: #8c9096; display: block; letter-spacing: 1px;"><?php echo $t['tel_tit']; ?></span>
                    <a href="tel:+50364277676" style="color: #ffffff; text-decoration: none; font-size: 1.05rem; font-weight: 500;">6427-7676</a>
                </div>
            </div>

            <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 40px;">
                <div style="width: 50px; height: 50px; background: rgba(0, 123, 255, 0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #007bff; font-size: 1.2rem;">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div>
                    <span style="font-size: 0.8rem; font-weight: bold; color: #8c9096; display: block; letter-spacing: 1px;"><?php echo $t['ubi_tit']; ?></span>
                    <span style="color: #ffffff; font-size: 1.05rem; font-weight: 500;"><?php echo $t['ubi_det']; ?></span>
                </div>
            </div>
        </div>

        <div style="display: flex; gap: 15px;">
            <a href="https://www.linkedin.com/in/cristopher-alejandro-bernal-chávez-245189381" target="_blank" class="btn-portafolio btn-blanco" style="padding: 10px 20px; font-size: 0.9rem; margin: 0;">
                <i class="fab fa-linkedin"></i> LinkedIn
            </a>
            <a href="mailto:bernalalejandro1302@gmail.com" class="btn-portafolio btn-blanco" style="padding: 10px 20px; font-size: 0.9rem; margin: 0; opacity: 0.8;">
                <i class="fas fa-paper-plane"></i> Correo directo
            </a>
        </div>
    </section>

    <section style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 15px; padding: 40px; text-align: left; box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.2);">
        <h2 style="margin-top: 0; margin-bottom: 5px; font-size: 1.8rem; color: #ffffff;"><?php echo $t['enviname']; ?></h2>
        <p style="color: #b0b3b8; margin-bottom: 30px; font-size: 0.95rem;"><?php echo $t['completar']; ?></p>

        <?php if (!empty($mensaje_estado)): ?>
            <div class="<?php echo $clase_estado; ?>" style="padding: 15px; margin-bottom: 25px; border-radius: 8px; font-weight: bold; text-align: center;">
                <?php echo $mensaje_estado; ?>
            </div>
        <?php endif; ?>

        <form action="contacto.php?lang=<?php echo $lang; ?>" method="POST" style="display: flex; flex-direction: column; gap: 20px;">
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px;">
                <div style="display: flex; flex-direction: column; gap: 8px;">
                    <label style="font-size: 0.75rem; font-weight: bold; color: #8c9096; letter-spacing: 0.5px;"><?php echo $t['lbl_nombre']; ?></label>
                    <input type="text" name="nombre" placeholder="<?php echo $t['ph_nombre']; ?>" required style="padding: 14px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1); background: rgba(0,0,0,0.2); color: #fff; font-size: 0.95rem; width: 100%; box-sizing: border-box;">
                </div>
                <div style="display: flex; flex-direction: column; gap: 8px;">
                    <label style="font-size: 0.75rem; font-weight: bold; color: #8c9096; letter-spacing: 0.5px;"><?php echo $t['lbl_correo']; ?></label>
                    <input type="email" name="correo" placeholder="<?php echo $t['ph_correo']; ?>" required style="padding: 14px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1); background: rgba(0,0,0,0.2); color: #fff; font-size: 0.95rem; width: 100%; box-sizing: border-box;">
                </div>
            </div>

            <div style="display: flex; flex-direction: column; gap: 8px;">
                <label style="font-size: 0.75rem; font-weight: bold; color: #8c9096; letter-spacing: 0.5px;"><?php echo $t['lbl_asunto']; ?></label>
                <input type="text" name="asunto" placeholder="<?php echo $t['ph_asunto']; ?>" required style="padding: 14px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1); background: rgba(0,0,0,0.2); color: #fff; font-size: 0.95rem; width: 100%; box-sizing: border-box;">
            </div>

            <div style="display: flex; flex-direction: column; gap: 8px;">
                <label style="font-size: 0.75rem; font-weight: bold; color: #8c9096; letter-spacing: 0.5px;"><?php echo $t['lbl_mensaje']; ?></label>
                <textarea name="mensaje" rows="5" placeholder="<?php echo $t['ph_mensaje']; ?>" required style="padding: 14px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1); background: rgba(0,0,0,0.2); color: #fff; font-size: 0.95rem; width: 100%; box-sizing: border-box; resize: vertical; line-height: 1.5;"></textarea>
            </div>

            <button type="submit" class="btn-portafolio btn-azul" style="border: none; cursor: pointer; padding: 16px; font-size: 1rem; font-weight: bold; width: 100%; margin-top: 10px; display: flex; align-items: center; justify-content: center; gap: 10px; border-radius: 8px; transition: background 0.3s ease;">
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
                <a href="mailto:bernalalejandro1302@gmail.com">
                    <img src="img/email.png" alt="Email" style="width: 30px; height: 30px; border-radius: 5px;">
                </a>
            </div>
        </div>
    </div>
    <p class="copy">© 2026 Cristopher Bernal. Todos los derechos reservados.</p>
</footer>

</body>
</html>