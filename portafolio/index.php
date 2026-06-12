<?php
// 1. Lógica de detección de idioma
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'es';

// 2. Diccionario de textos optimizado con Mensajes de Impacto (Contacto Agregado)
$textos = [
    'es' => [
        'titulo_pestana' => 'Cristopher Bernal | QA Tester en formación',
        'meta_desc' => 'Portafolio profesional de Cristopher Bernal, QA Tester en formación e Ingeniero en Sistemas. Especializado en asegurar la calidad de software y optimizar la experiencia de usuario.',
        'meta_keywords' => 'QA Tester, Aseguramiento de Calidad, Cristopher Bernal, Ingeniería en Sistemas, Portafolio QA, UGB, Pruebas de software, El Salvador',
        'inicio' => 'Inicio',
        'sobre' => 'Sobre mí',
        'proyectos' => 'Proyectos',
        'contacto' => 'Contacto', // <-- Agregado para traducción
        'h1' => 'CRISTOPHER BERNAL',
        'h2' => 'QA Tester en formación',
        'h3' => 'Garantizando la excelencia técnica y optimizando la experiencia del usuario final.',
        'desc' => 'Estudiante de 4° año de <strong>Ingeniería en Sistemas Computacionales</strong> en la UGB. Apasionado por el aseguramiento de calidad, el diseño de pruebas funcionales y la detección temprana de fallos para transformar software común en productos de alta confiabilidad.',
        'btn_conocer' => 'Conocer más',
        'btn_cv' => 'Descargar CV',
        'cv_path' => 'cv/cv-espanol.pdf',
        'explorar' => 'Explorar',
        'redes' => 'Redes sociales'
    ],
    'en' => [
        'titulo_pestana' => 'Cristopher Bernal | Junior QA Tester',
        'meta_desc' => 'Professional portfolio of Cristopher Bernal, QA Tester in training and Systems Engineer. Specialized in software quality assurance and optimizing user experience.',
        'meta_keywords' => 'QA Tester, Quality Assurance, Cristopher Bernal, Systems Engineering, QA Portfolio, UGB, Software testing, El Salvador',
        'inicio' => 'Home',
        'sobre' => 'About me',
        'proyectos' => 'Projects',
        'contacto' => 'Contact', // <-- Agregado para traducción
        'h1' => 'CRISTOPHER BERNAL',
        'h2' => 'QA Tester in training',
        'h3' => 'Ensuring technical excellence and optimizing the end-user experience.',
        'desc' => '4th-year <strong>Computer Systems Engineering</strong> student at UGB. Passionate about quality assurance, functional testing design, and early bug detection to transform standard software into highly reliable products.',
        'btn_conocer' => 'Learn more',
        'btn_cv' => 'Download CV',
        'cv_path' => 'cv/cv-ingles.pdf',
        'explorar' => 'Explore',
        'redes' => 'Social Media'
    ]
];

$t = $textos[$lang];
$pagina_actual = basename($_SERVER['PHP_SELF']);
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
        <a href="index.php?lang=<?php echo $lang; ?>" class="<?php echo ($pagina_actual == 'index.php' || $pagina_actual == '') ? 'active' : ''; ?>">
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

<main class="contenedor">
    <div class="perfil">
        <img src="img/_LUI0053-2.jpeg" alt="Cristopher Bernal - QA Tester">
    </div>

    <div class="info">
        <h1><?php echo $t['h1']; ?></h1>
        <h2><?php echo $t['h2']; ?></h2>
        <h3 style="color: var(--color-texto-suave); margin-bottom: 20px; font-weight: 500; font-size: 1.3rem;"><?php echo $t['h3']; ?></h3>

        <p class="descripcion" style="line-height: 1.6; color: #4e5154;">
            <?php echo $t['desc']; ?>
        </p>

        <div class="actions">
            <a href="sobre-mi.php?lang=<?php echo $lang; ?>" class="btn-portafolio btn-azul">
                <i class="fas fa-search"></i> <?php echo $t['btn_conocer']; ?>
            </a>
            <a href="<?php echo $t['cv_path']; ?>" download class="btn-portafolio btn-blanco">
                <i class="fas fa-file-download"></i> <?php echo $t['btn_cv']; ?>
            </a>
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
            <a href="proyectos.php?lang=<?php echo $lang; ?>" style="color: white; text-decoration: none; opacity: 0.8; display: block; margin-bottom: 8px;">
                <?php echo $t['proyectos']; ?>
            </a>
            <a href="contacto.php?lang=<?php echo $lang; ?>" style="color: white; text-decoration: none; opacity: 0.8; display: block;">
                <?php echo $t['contacto']; ?>
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