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
        'p1' => 'Estoy abierto a oportunidades laborales, proyectos de automatización/testing manual o simplemente a conectar con entusiastas de la tecnología. Si buscas asegurar que tu software funcione sin fallos, ¡escríbeme!',
        'lbl_correo' => 'CORREO',
        'lbl_telefono' => 'TELÉFONO',
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
        'p1' => 'I am open to job opportunities, automation/manual testing projects, or simply connecting with technology enthusiasts. If you want to ensure your software runs bug-free, write to me!',
        'lbl_correo' => 'EMAIL',
        'lbl_telefono' => 'PHONE',
        'lbl_ubicacion' => 'LOCATION',
        'titulo_form' => 'Send me a message',
        'sub_form' => 'Fill out the form and I will get back to you as soon as possible.',
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

// Tus datos personales fijos
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

<main class="contenedor-sobre-mi" style="max-width: 1100px; margin: 0 auto; padding: 20px;">
    <div style="display: flex; gap: 30px; flex-wrap: wrap; margin-top: 20px;">
        
        <div class="seccion-detalle" style="flex: 1; min-width: 300px; padding: 30px; background: white; border-radius: 12px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); text-align: left;">
            <h1 style="margin-bottom: 20px; font-size: 2rem; color: #333;"><?php echo $t['h1']; ?></h1>
            <p class="descripcion-larga" style="color: #666; font-size: 0.95rem; line-height: 1.6; margin-bottom: 40px;"><?php echo $t['p1']; ?></p>
            
            <div style="display: flex; align-items: flex-start; gap: 15px; margin-bottom: 25px;">
                <div style="background-color: rgba(0, 123, 255, 0.1); padding: 12px; border-radius: 8px; color: #007bff;">
                    <i class="fas fa-envelope" style="font-size: 1.2rem;"></i>
                </div>
                <div>
                    <span style="font-weight: bold; font-size: 0.75rem; color: #888; letter-spacing: 1px; display: block; margin-bottom: 4px;"><?php echo $t['lbl_correo']; ?></span>
                    <a href="mailto:<?php echo $mi_correo; ?>" style="color: #333; text-decoration: none; font-size: 0.95rem; font-weight: 500; word-break: break-all;"><?php echo $mi_correo; ?></a>
                </div>
            </div>

            <div style="display: flex; align-items: flex-start; gap: 15px; margin-bottom: 25px;">
                <div style="background-color: rgba(0, 123, 255, 0.1); padding: 12px; border-radius: 8px; color: #007bff;">
                    <i class="fas fa-phone-alt" style="font-size: 1.2rem;"></i>
                </div>
                <div>
                    <span style="font-weight: bold; font-size: 0.75rem; color: #888; letter-spacing: 1px; display: block; margin-bottom: 4px;"><?php echo $t['lbl_telefono']; ?></span>
                    <a href="tel:+503<?php echo $mi_telefono; ?>" style="color: #333; text-decoration: none; font-size: 0.95rem; font-weight: 500;"><?php echo $mi_telefono; ?></a>
                </div>
            </div>

            <div style="display: flex; align-items: flex-start; gap: 15px; margin-bottom: 40px;">
                <div style="background-color: rgba(0, 123, 255, 0.1); padding: 12px; border-radius: 8px; color: #007bff;">
                    <i class="fas fa-map-marker-alt" style="font-size: 1.2rem;"></i>
                </div>
                <div>
                    <span style="font-weight: bold; font-size: 0.75rem; color: #888; letter-spacing: 1px; display: block; margin-bottom: 4px;"><?php echo $t['lbl_ubicacion']; ?></span>
                    <span style="color: #333; font-size: 0.95rem; font-weight: 500; display: block;"><?php echo $mi_ubicacion; ?></span>
                </div>
            </div>

            <div style="display: flex; gap: 15px;">
                <a href="https://www.linkedin.com/in/cristopher-alejandro-bernal-chávez-245189381" target="_blank" class="btn-portafolio" style="padding: 10px 20px; font-size: 0.85rem; text-decoration: none; display: flex; align-items: center; gap: 8px; background: #007bff; color: white; border-radius: 6px;">
                    <i class="fab fa-linkedin"></i> LinkedIn
                </a>
                <a href="mailto:<?php echo $mi_correo; ?>" class="btn-portafolio btn-blanco" style="padding: 10px 20px; font-size: 0.85rem; text-decoration: none; display: flex; align-items: center; gap: 8px; border: 1px solid #ddd; color: #555; border-radius: 6px;">
                    <i class="fas fa-paper-plane"></i> Correo directo
                </a>
            </div>
        </div>
        
        <div class="seccion-detalle" style="flex: 1.2; min-width: 320px; padding: 30px; background: white; border-radius: 12px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); text-align: left;">
            <h2 style="font-size: 1.5rem; color: #333; margin-bottom: 5px;"><?php echo $t['titulo_form']; ?></h2>
            <p style="color: #777; font-size: 0.9rem; margin-bottom: 25px;"><?php echo $t['sub_form']; ?></p>
            
            <form action="#" method="POST" style="display: flex; flex-direction: column; gap: 20px;">
                <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                    <div style="flex: 1; min-width: 200px;">
                        <label style="font-weight: bold; font-size: 0.75rem; color: #666; display: block; margin-bottom: 8px;"><?php echo $t['lbl_nombre']; ?></label>
                        <input type="text" placeholder="<?php echo $t['placeholder_nombre']; ?>" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 6px; font-size: 0.9rem; background: #f9f9f9; box-sizing: border-box;">
                    </div>
                    <div style="flex: 1; min-width: 200px;">
                        <label style="font-weight: bold; font-size: 0.75rem; color: #666; display: block; margin-bottom: 8px;"><?php echo $t['lbl_correo_form']; ?></label>
                        <input type="email" placeholder="<?php echo $t['placeholder_correo']; ?>" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 6px; font-size: 0.9rem; background: #f9f9f9; box-sizing: border-box;">
                    </div>
                </div>

                <div>
                    <label style="font-weight: bold; font-size: 0.75rem; color: #666; display: block; margin-bottom: 8px;"><?php echo $t['lbl_asunto']; ?></label>
                    <input type="text" placeholder="<?php echo $t['placeholder_asunto']; ?>" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 6px; font-size: 0.9rem; background: #f9f9f9; box-sizing: border-box;">
                </div>

                <div>
                    <label style="font-weight: bold; font-size: 0.75rem; color: #666; display: block; margin-bottom: 8px;"><?php echo $t['lbl_mensaje']; ?></label>
                    <textarea rows="5" placeholder="<?php echo $t['placeholder_mensaje']; ?>" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 6px; font-size: 0.9rem; background: #f9f9f9; resize: vertical; box-sizing: border-box;"></textarea>
                </div>

                <button type="submit" class="btn-portafolio" style="background: #007bff; color: white; border: none; padding: 14px; border-radius: 6px; font-size: 1rem; font-weight: bold; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 10px; margin-top: 10px;">
                    <i class="fas fa-paper-plane"></i> <?php echo $t['btn_enviar']; ?>
                </button>
            </form>
        </div>

    </div>
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