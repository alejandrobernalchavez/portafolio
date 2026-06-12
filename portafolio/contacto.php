<?php
// 1. Lógica de detección de idioma
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'es';

// 2. Diccionario de textos corregido con las llaves exactas que pide tu interfaz gráfica
$textos = [
    'es' => [
        'titulo_pestana' => 'Contacto | Cristopher Bernal',
        'meta_desc' => 'Ponte en contacto con Cristopher Bernal, QA Tester en formación. Formulario de contacto para propuestas de aseguramiento de calidad y proyectos de software.',
        'meta_keywords' => 'Contacto, Cristopher Bernal, QA Tester, Aseguramiento de calidad, El Salvador, Jiquilisco',
        'inicio' => 'Inicio',
        'sobre' => 'Sobre mí',
        'proyectos' => 'Proyectos',
        'contacto' => 'Contacto',
        
        // Datos que se muestran a la par de los iconos de la izquierda
        'correo' => 'bernalalejandro1302@gmail.com',
        'telefono' => '6427-7676',
        'ubicacion' => 'Jiquilisco, Usulután, El Salvador',
        
        // Sección del formulario (Derecha)
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
        
        // Estado
        'msg_exito' => '¡Reporte enviado con éxito!',
        'msg_error' => 'Por favor, llena todos los campos.',
        'explorar' => 'Explorar',
        'redes' => 'Redes sociales'
    ],
    'en' => [
        'titulo_pestana' => 'Contact | Cristopher Bernal',
        'meta_desc' => 'Get in touch with Cristopher Bernal, QA Tester in training.',
        'meta_keywords' => 'Contact, Cristopher Bernal, QA Tester, Quality Assurance, El Salvador',
        'inicio' => 'Home',
        'sobre' => 'About me',
        'proyectos' => 'Projects',
        'contacto' => 'Contact',
        
        // Datos en inglés
        'correo' => 'bernalalejandro1302@gmail.com',
        'telefono' => '6427-7676',
        'ubicacion' => 'Jiquilisco, Usulutan, El Salvador',
        
        // Formulario
        'enviname' => 'Send me a message',
        'completar' => 'Complete the form and I will get back to you shortly.',
        'lbl_nombre' => 'NAME',
        'lbl_correo' => 'EMAIL ADDRESS',
        'lbl_asunto' => 'SUBJECT',
        'lbl_mensaje' => 'MESSAGE',
        'ph_nombre' => 'Your full name',
        'ph_correo' => 'you@example.com',
        'ph_asunto' => 'How can I help you?',
        'ph_mensaje' => 'Tell me about your project...',
        'btn_enviar' => 'Send message',
        
        'msg_exito' => 'Message sent successfully!',
        'msg_error' => 'Please fill in all fields.',
        'explorar' => 'Explore',
        'redes' => 'Social Media'
    ]
];

$t = $textos[$lang];
$pagina_actual = basename($_SERVER['PHP_SELF']);

// Procesamiento del formulario
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
            <h1 style="margin-top: 0; margin-bottom: 15px; font-size: 2rem; color: #ffffff;">¡Hablemos!</h1>
            <p style="color: #b0b3b8; line-height: 1.6; margin-bottom: 40px; font-size: 1.05rem;">
                Estoy abierto a oportunidades laborales, proyectos de automatización/testing manual o simplemente a conectar con entusiastas de la tecnología. Si buscas asegurar que tu software funcione sin fallos, ¡escríbeme!
            </p>
            
            <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 25px;">
                <div style="width: 50px; height: 50px; background: rgba(0, 123, 255, 0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #007bff; font-size: 1.2rem;">
                    <i class="fas fa-envelope"></i>
                </div>
                <div>
                    <span style="font-size: 0.8rem; font-weight: bold; color: #8c9096; display: block; letter-spacing: 1px;">CORREO</span>
                    <a href="mailto:<?php echo $t['correo']; ?>" style="color: #ffffff; text-decoration: none; font-size: 1.05rem; font-weight: 500;"><?php echo $t['correo']; ?></a>
                </div>
            </div>

            <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 25px;">
                <div style="width: 50px; height: 50px; background: rgba(0, 123, 255, 0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #007bff; font-size: 1.2rem;">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <div>
                    <span style="font-size: 0.8rem; font-weight: bold; color: #8c9096; display: block; letter-spacing: 1px;">TELÉFONO</span>
                    <a href="tel:<?php echo $t['telefono']; ?>" style="color: #ffffff; text-decoration: none; font-size: 1.05rem; font-weight: 500;"><?php echo $t['telefono']; ?></a>
                </div>
            </div>

            <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 40px;">
                <div style="width: 50px; height: 50px; background: rgba(0, 123, 255, 0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #007bff; font-size: 1.2rem;">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div>
                    <span style="font-size: 0.8rem; font-weight: bold; color: #8c9096; display: block; letter-spacing: 1px;">UBICACIÓN</span>
                    <span style="color: #ffffff; font-size: 1.05rem; font-weight: 500;"><?php echo $t['ubicacion']; ?></span>
                </div>
            </div>
        </div>

        <div style="display: flex; gap: 15px;">
            <a href="https://www.linkedin.com/in/cristopher-alejandro-bernal-chávez-245189381" target="_blank" class="btn-portafolio btn-blanco" style="padding: 10px 20px; font-size: 0.9rem; margin: 0; text-decoration: none;">
                <i class="fab fa-linkedin"></i> LinkedIn
            </a>
            <a href="mailto:<?php echo $t['correo']; ?>" class="btn-portafolio btn-blanco" style="padding: 10px 20px; font-size: 0.9rem; margin: 0; opacity: 0.8; text-decoration: none;">
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

            <button type="submit" class="btn-portafolio btn-azul" style="border: none; cursor: pointer; padding: 16px; font-size: 1rem; font-weight: bold; width: 100%; margin-top: 10px; display: flex; align-items: center; justify-content: center; gap: 10px; border-radius: 8px;">
                <i class="fas fa-paper-plane"></i> <?php echo $t['btn_enviar']; ?>
            </button>
        </form>
    </section>
</main>

<footer>
    <div style="display: flex; justify-content: space-around; max-width: 900px; margin: 0 auto; flex-wrap: wrap; gap: 20px;">
        <div class="footer-col" style="text-align: left; min-width: 150px;">
            <h3 style="margin-bottom: 15px; color: white;">Explorar</h3>
            <a href="index.php?lang=<?php echo $lang; ?>" style="color: white; text-decoration: none; opacity: 0.8; display: block; margin-bottom: 8px;">Inicio</a>
            <a href="sobre-mi.php?lang=<?php echo $lang; ?>" style="color: white; text-decoration: none; opacity: 0.8; display: block; margin-bottom: 8px;">Sobre mí</a>
            <a href="proyectos.php?lang=<?php echo $lang; ?>" style="color: white; text-decoration: none; opacity: 0.8; display: block;">Proyectos</a>
        </div>
        <div class="footer-col" style="text-align: left; min-width: 150px;">
            <h3 style="margin-bottom: 15px; color: white;">Redes sociales</h3>
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