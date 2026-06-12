<?php
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'es';

$textos = [
    'es' => [
        'titulo_pestana' => 'Contacto | Cristopher Bernal',
        'meta_desc' => 'Ponte en contacto con Cristopher Bernal, QA Tester en formación.',
        'meta_keywords' => 'Contacto, Cristopher Bernal, QA Tester',
        'inicio' => 'Inicio',
        'sobre' => 'Sobre mí',
        'proyectos' => 'Proyectos',
        'contacto' => 'Contacto',
        'correo' => 'bernalalejandro1302@gmail.com',
        'telefono' => '6427-7676',
        'ubicacion' => 'Jiquilisco, Usulután, El Salvador',
        'enviname' => 'Envíame un mensaje',
        'completar' => 'Completa el formulario y te responderé a la brevedad.',
        'lbl_nombre' => 'NOMBRE',
        'lbl_correo' => 'CORREO ELECTRÓNICO',
        'lbl_asunto' => 'ASUNTO',
        'lbl_mensaje' => 'MENSAJE',
        'ph_nombre' => 'Tu nombre completo',
        'ph_correo' => 'tu@correo.com',
        'ph_asunto' => '¿En qué puedo ayudarte?',
        'ph_mensaje' => 'Cuéntame sobre tu proyecto...',
        'btn_enviar' => 'Enviar mensaje',
        'msg_exito' => '¡Mensaje enviado con éxito!',
        'msg_error' => 'Por favor, llena todos los campos.'
    ],
    'en' => [
        'titulo_pestana' => 'Contact | Cristopher Bernal',
        'meta_desc' => 'Get in touch with Cristopher Bernal.',
        'meta_keywords' => 'Contact, Cristopher Bernal',
        'inicio' => 'Home',
        'sobre' => 'About me',
        'proyectos' => 'Projects',
        'contacto' => 'Contact',
        'correo' => 'bernalalejandro1302@gmail.com',
        'telefono' => '6427-7676',
        'ubicacion' => 'Jiquilisco, Usulutan, El Salvador',
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
        'msg_error' => 'Please fill in all fields.'
    ]
];

$t = $textos[$lang];
$pagina_actual = basename($_SERVER['PHP_SELF']);

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
        </div>
    </section>

    <section style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 15px; padding: 40px; text-align: left; box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.2);">
        <h2 style="margin-top: 0; margin-bottom: 5px; font-size: 1.8rem; color: #ffffff;"><?php echo $t['enviname']; ?></h2>
        <p style="color: #b0b3b8; margin-bottom: 30px; font-size: 0.95rem;"><?php echo $t['completar']; ?></p>

        <form action="contacto.php?lang=<?php echo $lang; ?>" method="POST" style="display: flex; flex-direction: column; gap: 20px;">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px;">
                <div style="display: flex; flex-direction: column; gap: 8px;">
                    <label style="font-size: 0.75rem; font-weight: bold; color: #8c9096;"><?php echo $t['lbl_nombre']; ?></label>
                    <input type="text" name="nombre" placeholder="<?php echo $t['ph_nombre']; ?>" required style="padding: 14px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1); background: rgba(0,0,0,0.2); color: #fff; font-size: 0.95rem; width: 100%;">
                </div>
                <div style="display: flex; flex-direction: column; gap: 8px;">
                    <label style="font-size: 0.75rem; font-weight: bold; color: #8c9096;"><?php echo $t['lbl_correo']; ?></label>
                    <input type="email" name="correo" placeholder="<?php echo $t['ph_correo']; ?>" required style="padding: 14px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1); background: rgba(0,0,0,0.2); color: #fff; font-size: 0.95rem; width: 100%;">
                </div>
            </div>

            <div style="display: flex; flex-direction: column; gap: 8px;">
                <label style="font-size: 0.75rem; font-weight: bold; color: #8c9096;"><?php echo $t['lbl_asunto']; ?></label>
                <input type="text" name="asunto" placeholder="<?php echo $t['ph_asunto']; ?>" required style="padding: 14px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1); background: rgba(0,0,0,0.2); color: #fff; font-size: 0.95rem; width: 100%;">
            </div>

            <div style="display: flex; flex-direction: column; gap: 8px;">
                <label style="font-size: 0.75rem; font-weight: bold; color: #8c9096;"><?php echo $t['lbl_mensaje']; ?></label>
                <textarea name="mensaje" rows="5" placeholder="<?php echo $t['ph_mensaje']; ?>" required style="padding: 14px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.1); background: rgba(0,0,0,0.2); color: #fff; font-size: 0.95rem; width: 100%; resize: vertical;"></textarea>
            </div>

            <button type="submit" class="btn-portafolio btn-azul" style="border: none; cursor: pointer; padding: 16px; font-size: 1rem; font-weight: bold; width: 100%; border-radius: 8px; display: flex; align-items: center; justify-content: center; gap: 10px;">
                <i class="fas fa-paper-plane"></i> <?php echo $t['btn_enviar']; ?>
            </button>
        </form>
    </section>
</main>

<footer>
    <p class="copy" style="text-align: center; margin-top: 40px;">© 2026 Cristopher Bernal. Todos los derechos reservados.</p>
</footer>

</body>
</html>