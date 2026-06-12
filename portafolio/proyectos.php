<?php
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'es';

$textos = [
    'es' => [
        'titulo_pestana' => 'Proyectos | Cristopher Bernal',
        'inicio' => 'Inicio',
        'sobre' => 'Sobre mí',
        'proyectos' => 'Proyectos',
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
$pagina_actual = basename($_SERVER['PHP_SELF']);
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
        .proyecto-link {
            text-decoration: none;
            color: inherit;
            display: block;
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

<main class="contenedor-sobre-mi">
    <h1><?php echo $t['h1']; ?></h1>
    <p class="descripcion-larga"><?php echo $t['desc']; ?></p>

    <section class="seccion-detalle">
        
        <a href="detalle-proyecto.php?proyecto=goodburger&lang=<?php echo $lang; ?>" class="proyecto-link">
            <div class="timeline-item">
                <p class="texto-principal"><strong>🍔 <?php echo $t['p1_titulo']; ?></strong></p>
                <p class="texto-secundario">
                    <?php echo $t['p1_desc']; ?> 
                    <br><em><?php echo $t['ver_detalle']; ?>...</em>
                </p>
            </div>
        </a>

        <a href="detalle-proyecto.php?proyecto=periodico&lang=<?php echo $lang; ?>" class="proyecto-link">
            <div class="timeline-item">
                <p class="texto-principal"><strong>📰 <?php echo $t['p2_titulo']; ?></strong></p>
                <p class="texto-secundario">
                    <?php echo $t['p2_desc']; ?>
                    <br><em><?php echo $t['ver_detalle']; ?>...</em>
                </p>
            </div>
        </a>

        <a href="detalle-proyecto.php?proyecto=donamiga&lang=<?php echo $lang; ?>" class="proyecto-link">
            <div class="timeline-item">
                <p class="texto-principal"><strong>🤝 <?php echo $t['p3_titulo']; ?></strong></p>
                <p class="texto-secundario">
                    <?php echo $t['p3_desc']; ?>
                    <br><em><?php echo $t['ver_detalle']; ?>...</em>
                </p>
            </div>
        </a>

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