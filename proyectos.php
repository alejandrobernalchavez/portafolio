<?php
// 1. Lógica de detección de idioma de forma segura
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'es';
if (!in_array($lang, ['es', 'en'])) {
    $lang = 'es';
}

// 2. Diccionario de textos optimizado con la pestaña Logros
$textos = [
    'es' => [
        'titulo_pestana' => 'Proyectos | Cristopher Bernal',
        'inicio' => 'Inicio',
        'sobre' => 'Sobre mí',
        'proyectos' => 'Proyectos',
        'logros' => 'Logros', // <-- Agregado
        'contacto' => 'Contacto',
        'h1' => 'Mis Proyectos',
        'desc' => 'Una selección de los trabajos más relevantes en los que he participado, aplicando metodologías de desarrollo y aseguramiento de calidad.',
        'ver_detalle' => 'Ver detalles del proyecto',
        'explorar' => 'Explorar',
        'redes' => 'Redes sociales',
        // Traducciones de Proyectos
        'p1_titulo' => 'Goodburger',
        'p1_desc' => 'Aplicación web para un restaurante de hamburguesas.',
        'p2_titulo' => 'Periódico Digital',
        'p2_desc' => 'Plataforma de noticias digital enfocada en la gestión de contenidos.',
        'p3_titulo' => 'Donamiga',
        'p3_desc' => 'Proyecto social enfocado en la gestión de donaciones y ayuda comunitaria.'
    ],
    'en' => [
        'titulo_pestana' => 'Projects | Cristopher Bernal',
        'inicio' => 'Home',
        'sobre' => 'About me',
        'proyectos' => 'Projects',
        'logros' => 'Achievements', // <-- Agregado
        'contacto' => 'Contact',
        'h1' => 'My Projects',
        'desc' => 'A selection of the most relevant works I have participated in, applying development and quality assurance methodologies.',
        'ver_detalle' => 'View project details',
        'explorar' => 'Explore',
        'redes' => 'Social Media',
        // Project Translations
        'p1_titulo' => 'Goodburger',
        'p1_desc' => 'Web application for a burger restaurant.',
        'p2_titulo' => 'Digital Newspaper',
        'p2_desc' => 'Digital news platform focused on content management.',
        'p3_titulo' => 'Donamiga',
        'p3_desc' => 'Social project focused on donation management and community help.'
    ]
];

$t = $textos[$lang];

// Obtener de forma dinámica el nombre del archivo actual
$pagina_actual = basename($_SERVER['PHP_SELF']);
if ($pagina_actual == '') {
    $pagina_actual = 'proyectos.php';
}
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($t['titulo_pestana'], ENT_QUOTES, 'UTF-8'); ?></title>
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
        <a href="logros.php?lang=<?php echo $lang; ?>" class="<?php echo ($pagina_actual == 'logros.php') ? 'active' : ''; ?>">
            <i class="fas fa-trophy"></i> <?php echo $t['logros']; ?>
        </a>
        <a href="contacto.php?lang=<?php echo $lang; ?>" class="<?php echo ($pagina_actual == 'contacto.php') ? 'active' : ''; ?>">
            <i class="fas fa-envelope"></i> <?php echo $t['contacto']; ?>
        </a>
    </div>

    <div class="idiomas">
        <i class="fas fa-language"></i>
        <a href="<?php echo $pagina_actual; ?>?lang=es" class="<?php echo ($lang == 'es') ? 'lang-active' : ''; ?>">ES</a>
        <span>|</span>
        <a href="<?php echo $pagina_actual; ?>?lang=en" class="<?php echo ($lang == 'en') ? 'lang-active' : ''; ?>">EN</a>
    </div>
</nav>

<div class="logo-container">
    <img src="img/logoportafolio.png" alt="Logo Portafolio" class="logo-inicio">
</div>

<main class="contenedor-sobre-mi">
    <h1><?php echo htmlspecialchars($t['h1'], ENT_QUOTES, 'UTF-8'); ?></h1>
    <p class="descripcion-larga"><?php echo htmlspecialchars($t['desc'], ENT_QUOTES, 'UTF-8'); ?></p>

    <section class="seccion-detalle">
        
        <a href="detalle-proyecto.php?proyecto=goodburger&lang=<?php echo $lang; ?>" class="proyecto-link">
            <div class="timeline-item">
                <p class="texto-principal"><strong>🍔 <?php echo htmlspecialchars($t['p1_titulo'], ENT_QUOTES, 'UTF-8'); ?></strong></p>
                <p class="texto-secundario">
                    <?php echo htmlspecialchars($t['p1_desc'], ENT_QUOTES, 'UTF-8'); ?> 
                    <br><em><?php echo htmlspecialchars($t['ver_detalle'], ENT_QUOTES, 'UTF-8'); ?>...</em>
                </p>
            </div>
        </a>

        <a href="detalle-proyecto.php?proyecto=periodico&lang=<?php echo $lang; ?>" class="proyecto-link">
            <div class="timeline-item">
                <p class="texto-principal"><strong>📰 <?php echo htmlspecialchars($t['p2_titulo'], ENT_QUOTES, 'UTF-8'); ?></strong></p>
                <p class="texto-secundario">
                    <?php echo htmlspecialchars($t['p2_desc'], ENT_QUOTES, 'UTF-8'); ?>
                    <br><em><?php echo htmlspecialchars($t['ver_detalle'], ENT_QUOTES, 'UTF-8'); ?>...</em>
                </p>
            </div>
        </a>

        <a href="detalle-proyecto.php?proyecto=donamiga&lang=<?php echo $lang; ?>" class="proyecto-link">
            <div class="timeline-item">
                <p class="texto-principal"><strong>🤝 <?php echo htmlspecialchars($t['p3_titulo'], ENT_QUOTES, 'UTF-8'); ?></strong></p>
                <p class="texto-secundario">
                    <?php echo htmlspecialchars($t['p3_desc'], ENT_QUOTES, 'UTF-8'); ?>
                    <br><em><?php echo htmlspecialchars($t['ver_detalle'], ENT_QUOTES, 'UTF-8'); ?>...</em>
                </p>
            </div>
        </a>

    </section>
</main>

<footer>
    <div class="footer-wrapper">
        <div class="footer-col-links">
            <h3><?php echo $t['explorar']; ?></h3>
            <a href="index.php?lang=<?php echo $lang; ?>"><?php echo $t['inicio']; ?></a>
            <a href="sobre-mi.php?lang=<?php echo $lang; ?>"><?php echo $t['sobre']; ?></a>
            <a href="proyectos.php?lang=<?php echo $lang; ?>"><?php echo $t['proyectos']; ?></a>
            <a href="logros.php?lang=<?php echo $lang; ?>"><?php echo $t['logros']; ?></a> <a href="contacto.php?lang=<?php echo $lang; ?>"><?php echo $t['contacto']; ?></a>
        </div>

        <div class="footer-col-socials">
            <h3><?php echo $t['redes']; ?></h3>
            <div class="social-icons-container">
                <a href="https://www.linkedin.com/in/cristopher-alejandro-bernal-chávez-245189381" target="_blank" rel="noopener noreferrer">
                    <img src="img/linkedin.jpg" alt="LinkedIn" class="img-social">
                </a>
                <a href="https://github.com/alejandrobernalchavez" target="_blank" rel="noopener noreferrer">
                    <img src="img/github.png" alt="GitHub" class="img-social">
                </a>
                <a href="mailto:bernalalejandro1302@gmail.com">
                    <img src="img/email.png" alt="Email" class="img-social">
                </a>
            </div>
        </div>
    </div>
    <p class="copy">© 2026 Cristopher Bernal. Todos los derechos reservados.</p>
</footer>

</body>
</html>