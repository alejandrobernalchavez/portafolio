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

// Tus datos de contacto personales
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
        /* Estilos específicos para maquetar el diseño de la plantilla */
        .wrapper-contacto {
            display: flex;
            gap: 40px;
            max-width: 1140px;
            margin: 40px auto;
            padding: 0 20px;
            flex-wrap: wrap;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .col-info {
            flex: 1;
            min-width: 320px;
            background: #ffffff;
            padding: 45px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
            text-align: left;
            position: relative;
        }
        .col-form {
            flex: 1.2;
            min-width: 350px;
            background: #ffffff;
            padding: 45px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
            text-align: left;
        }
        .h1-contacto {
            font-size: 2.3rem;
            font-weight: 700;
            color: #1e293b;
            line-height: 1.2;
            margin-bottom: 20px;
        }
        .p-contacto {
            color: #64748b;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 35px;
        }
        .item-contacto {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 25px;
        }
        .icono-contacto {
            background-color: #eff6ff;
            color: #2563eb;
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            flex-shrink: 0;
        }
        .info-detalles span {
            display: block;
        }
        .info-detalles .label {
            font-weight: 700;
            font-size: 0.8rem;
            color: #1e293b;
            letter-spacing: 0.5px;
        }
        .info-detalles .subtext {
            font-size: 0.85rem;
            color: #64748b;
            margin-top: 2px;
        }
        .info-detalles .dato-real {
            font-size: 0.9rem;
            color: #2563eb;
            font-weight: 500;
            margin-top: 1px;
            text-decoration: none;
        }
        .btn-linkedin {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #ffffff;
            color: #2563eb;
            border: 1px solid #e2e8f0;
            padding: 10px 24px;
            border-radius: 25px;
            font-weight: 600;
            font-size: 0.9rem;
            text-decoration: none;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.02);
            margin-top: 15px;
            transition: all 0.2s ease;
        }
        .btn-linkedin:hover {
            background: #f8fafc;
            border-color: #cbd5e1;
        }
        .form-header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 30px;
        }
        .icono-msg {
            background: #f1f5f9;
            color: #2563eb;
            width: 44px;
            height: 44px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
        }
        .form-group-row {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }
        .form-group {
            flex: 1;
            min-width: 200px;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }
        .form-group-full {
            display: flex;
            flex-direction: column;
            gap: 8px;
            margin-bottom: 20px;
        }
        .form-label {
            font-size: 0.75rem;
            font-weight: 700;
            color: #475569;
            letter-spacing: 0.5px;
        }
        .form-input {
            width: 100%;
            padding: 14px 16px;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            font-size: 0.9rem;
            color: #334155;
            background: #ffffff;
            box-sizing: border-box;
            transition: border-color 0.2s;
        }
        .form-input:focus {
            outline: none;
            border-color: #2563eb;
        }
        .btn-submit {
            width: 100%;
            background: #2563eb;
            color: #ffffff;
            border: none;
            padding: 16px;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.2);
            transition: background 0.2s;
        }
        .btn-submit:hover {
            background: #1d4ed8;
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

<main class="wrapper-contacto">
    
    <section class="col-info">
        <h1 class="h1-contacto"><?php echo $t['h1']; ?></h1>
        <p class="p-contacto"><?php echo $t['p1']; ?></p>
        
        <div class="item-contacto">
            <div class="icono-contacto">
                <i class="fas fa-envelope"></i>
            </div>
            <div class="info-detalles">
                <span class="label"><?php echo $t['lbl_correo']; ?></span>
                <span class="subtext"><?php echo $t['sub_correo']; ?></span>
                <a href="mailto:<?php echo $mi_correo; ?>" class="dato-real"><?php echo $mi_correo; ?></a>
            </div>
        </div>

        <div class="item-contacto">
            <div class="icono-contacto">
                <i class="fas fa-phone-alt"></i>
            </div>
            <div class="info-detalles">
                <span class="label"><?php echo $t['lbl_telefono']; ?></span>
                <span class="subtext"><?php echo $t['sub_telefono']; ?></span>
                <a href="tel:+503<?php echo $mi_telefono; ?>" class="dato-real"><?php echo $mi_telefono; ?></a>
            </div>
        </div>

        <div class="item-contacto">
            <div class="icono-contacto">
                <i class="fas fa-map-marker-alt"></i>
            </div>
            <div class="info-detalles">
                <span class="label"><?php echo $t['lbl_ubicacion']; ?></span>
                <span class="subtext"><?php echo $mi_ubicacion; ?></span>
            </div>
        </div>

        <a href="https://www.linkedin.com/in/cristopher-alejandro-bernal-chávez-245189381" target="_blank" class="btn-linkedin">
            <i class="fab fa-linkedin"></i> LinkedIn
        </a>
    </section>
    
    <section class="col-form">
        <div class="form-header">
            <div class="icono-msg">
                <i class="fas fa-comment-alt"></i>
            </div>
            <div>
                <h2 style="font-size: 1.25rem; font-weight: 700; color: #1e293b; margin: 0;"><?php echo $t['titulo_form']; ?></h2>
                <p style="font-size: 0.85rem; color: #64748b; margin: 2px 0 0 0;"><?php echo $t['sub_form']; ?></p>
            </div>
        </div>
        
        <form action="#" method="POST">
            <div class="form-header-logo" style="float: right; margin-top: -75px;">
                <img src="img/logoportafolio.png" alt="Logo" style="width: 55px; opacity: 0.9;">
            </div>
            <div style="clear: both;"></div>

            <div class="form-group-row">
                <div class="form-group">
                    <label class="form-label"><?php echo $t['lbl_nombre']; ?></label>
                    <input type="text" class="form-input" placeholder="<?php echo $t['placeholder_nombre']; ?>" required>
                </div>
                <div class="form-group">
                    <label class="form-label"><?php echo $t['lbl_correo_form']; ?></label>
                    <input type="email" class="form-input" placeholder="<?php echo $t['placeholder_correo']; ?>" required>
                </div>
            </div>

            <div class="form-group-full">
                <label class="form-label"><?php echo $t['lbl_asunto']; ?></label>
                <input type="text" class="form-input" placeholder="<?php echo $t['placeholder_asunto']; ?>" required>
            </div>

            <div class="form-group-full">
                <label class="form-label"><?php echo $t['lbl_mensaje']; ?></label>
                <textarea class="form-input" rows="5" placeholder="<?php echo $t['placeholder_mensaje']; ?>" required style="resize: vertical;"></textarea>
            </div>

            <button type="submit" class="btn-submit">
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