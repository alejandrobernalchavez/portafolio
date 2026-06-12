<?php
// 1. Lógica de detección de idioma
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'es';

// 2. Diccionario de textos optimizado para Contacto
$textos = [
    'es' => [
        'titulo_pestana' => 'Contacto | Cristopher Bernal',
        'meta_desc' => 'Ponte en contacto con Cristopher Bernal, QA Tester en formación. Formulario de contacto para propuestas laborales y colaboraciones.',
        'meta_keywords' => 'Contacto, Cristopher Bernal, QA Tester, Contratar QA, El Salvador, Desarrollo de software',
        'inicio' => 'Inicio',
        'sobre' => 'Sobre mí',
        'proyectos' => 'Proyectos',
        'contacto' => 'Contacto',
        'h1' => 'Contacto',
        'desc' => '¿Tienes alguna propuesta laboral, duda o proyecto en mente? Escríbeme y me pondré en contacto contigo lo antes posible.',
        'lbl_nombre' => 'Nombre Completo',
        'lbl_correo' => 'Correo Electrónico',
        'lbl_mensaje' => 'Mensaje',
        'btn_enviar' => 'Enviar Mensaje',
        'ph_nombre' => 'Ingresa tu nombre...',
        'ph_correo' => 'ejemplo@correo.com',
        'ph_mensaje' => 'Escribe tu mensaje aquí...',
        'msg_exito' => '¡Gracias! Tu mensaje ha sido enviado correctamente.',
        'msg_error' => 'Por favor, llena todos los campos correctamente.',
        'explorar' => 'Explorar',
        'redes' => 'Redes sociales'
    ],
    'en' => [
        'titulo_pestana' => 'Contact | Cristopher Bernal',
        'meta_desc' => 'Get in touch with Cristopher Bernal, QA Tester in training. Contact form for job proposals and collaborations.',
        'meta_keywords' => 'Contact, Cristopher Bernal, QA Tester, Hire QA, El Salvador, Software development',
        'inicio' => 'Home',
        'sobre' => 'About me',
        'proyectos' => 'Projects',
        'contacto' => 'Contact',
        'h1' => 'Contact Me',
        'desc' => 'Do you have a job proposal, question, or project in mind? Write to me, and I will get back to you as soon as possible.',
        'lbl_nombre' => 'Full Name',
        'lbl_correo' => 'Email Address',
        'lbl_mensaje' => 'Message',
        'btn_enviar' => 'Send Message',
        'ph_nombre' => 'Enter your name...',
        'ph_correo' => 'example@mail.com',
        'ph_mensaje' => 'Write your message here...',
        'msg_exito' => 'Thank you! Your message has been sent successfully.',
        'msg_error' => 'Please fill out all fields correctly.',
        'explorar' => 'Explore',
        'redes' => 'Social Media'
    ]
];

$t = $textos[$lang];
$pagina_actual = basename($_SERVER['PHP_SELF']);

// 3. Lógica de procesamiento del formulario
$mensaje_estado = '';
$clase_estado = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_SPECIAL_CHARS);
    $correo = filter_input(INPUT_POST, 'correo', FILTER_VALIDATE_EMAIL);
    $mensaje = filter_input(INPUT_POST, 'mensaje', FILTER_SANITIZE_SPECIAL_CHARS);

    if ($nombre && $correo && $mensaje) {
        // AQUÍ EN PRODUCCIÓN SE PUEDE CONFIGURAR EL ENVÍO DE EMAIL REAL
        // mail("alejogevara27@gmail.com", "Nuevo mensaje de Portafolio de: $nombre", $mensaje, "From: $correo");
        
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

<main class="contenedor-sobre-mi">
    <h1 style="margin-bottom: 20px;"><?php echo $t['h1']; ?></h1>
    <p class="descripcion-larga" style="margin-bottom: 40px;"><?php echo $t['desc']; ?></p>

    <section class="seccion-detalle" style="max-width: 600px; margin: 0 auto; text-align: left;">
        
        <?php if (!empty($mensaje_estado)): ?>
            <div class="<?php echo $clase_estado; ?>" style="padding: 15px; margin-bottom: 20px; border-radius: 5px; font-weight: bold; text-align: center;">
                <?php echo $mensaje_estado; ?>
            </div>
        <?php endif; ?>

        <form action="contacto.php?lang=<?php echo $lang; ?>" method="POST" style="display: flex; flex-direction: column; gap: 20px;">
            <div style="display: flex; flex-direction: column; gap: 8px;">
                <label for="nombre" style="font-weight: bold; color: white;"><?php echo $t['lbl_nombre']; ?>:</label>
                <input type="text" id="nombre" name="nombre" placeholder="<?php echo $t['ph_nombre']; ?>" required style="padding: 12px; border-radius: 5px; border: 1px solid #ccc; font-size: 1rem; width: 100%; box-sizing: border-box;">
            </div>

            <div style="display: flex; flex-direction: column; gap: 8px;">
                <label for="correo" style="font-weight: bold; color: white;"><?php echo $t['lbl_correo']; ?>:</label>
                <input type="email" id="correo" name="correo" placeholder="<?php echo $t['ph_correo']; ?>" required style="padding: 12px; border-radius: 5px; border: 1px solid #ccc; font-size: 1rem; width: 100%; box-sizing: border-box;">
            </div>

            <div style="display: flex; flex-direction: column; gap: 8px;">
                <label for="mensaje" style="font-weight: bold; color: white;"><?php echo $t['lbl_mensaje']; ?>:</label>
                <textarea id="mensaje" name="mensaje" rows="6" placeholder="<?php echo $t['ph_mensaje']; ?>" required style="padding: 12px; border-radius: 5px; border: 1px solid #ccc; font-size: 1rem; width: 100%; box-sizing: border-box; resize: vertical;"></textarea>
            </div>

            <button type="submit" class="btn-portafolio btn-azul" style="border: none; cursor: pointer; padding: 15px; font-size: 1rem; font-weight: bold; width: 100%; margin-top: 10px;">
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
                <a href="mailto:alejogevara27@gmail.com">
                    <img src="img/email.png" alt="Email" style="width: 30px; height: 30px; border-radius: 5px;">
                </a>
            </div>
        </div>
    </div>
    <p class="copy">© 2026 Cristopher Bernal. Todos los derechos reservados.</p>
</footer>

</body>
</html>