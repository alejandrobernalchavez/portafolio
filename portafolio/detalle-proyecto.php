<?php
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'es';
$proyecto_id = isset($_GET['proyecto']) ? $_GET['proyecto'] : '';

// NORMALIZACIÓN: Si el ID es 'periodico', lo tratamos internamente como 'comunicado'
if ($proyecto_id === 'periodico') {
    $proyecto_id = 'comunicado';
}

// Diccionario de contenidos de proyectos
$detalles = [
    'es' => [
        'atras' => 'ATRÁS',
        'siguiente' => 'SIGUIENTE',
        'inicio_btn' => 'Volver a proyectos',
        'ver_repo' => 'Ver Código en GitHub',
        'nav_inicio' => 'Inicio',
        'nav_sobre' => 'Sobre mí',
        'nav_proyectos' => 'Proyectos',
        'no_encontrado' => 'Proyecto no encontrado.',
        'volver_proyectos' => 'Volver a Proyectos',
        'etiqueta_tech' => 'Tecnologías',
        'etiqueta_rol' => 'Rol:',
        'goodburger' => [
            'titulo' => 'GoodBurger',
            'desc' => 'GoodBurger es una página web orientada al sector de comida rápida, diseñada para presentar de forma atractiva e intuitiva la oferta de un restaurante. La plataforma permite a los usuarios explorar el menú, conocer los productos disponibles y acceder a información relevante como promociones y datos de contacto.',
            'repo' => 'https://github.com/GersonDanielGuerrero/Progra-III-2024',
            'tech' => [
                'Mi Rol' => 'QA Tester',
                'Tecnologías' => 'Python, JS, Vue, Node, Bootstrap, HTML, CSS, MySQL'
            ]
        ],
        'donamiga' => [
            'titulo' => 'DonAmiga',
            'desc' => 'DonAmiga es una plataforma digital de donaciones diseñada para conectar a personas con causas sociales de forma transparente, segura y accesible. A través del uso de tecnología blockchain, garantiza la trazabilidad de cada aporte realizado.',
            'repo' => 'https://github.com/GersonDanielGuerrero/Donamiga',
            'tech' => [
                'Mi Rol' => 'QA Tester',
                'Tecnologías' => 'Javascript, HTML, PHP, CSS, Vue'
            ]
        ],
        'comunicado' => [
            'titulo' => 'Periódico Digital',
            'desc' => 'Periódico Digital es una plataforma web informativa diseñada para la publicación y difusión de noticias de manera rápida, organizada y accesible. El sistema facilita la gestión de artículos, así como la organización por secciones, adaptándose a las necesidades del entorno digital.',
            'repo' => 'https://github.com/JosueInge/Enginer-Team',
            'tech' => [
                'Mi Rol' => 'QA Tester',
                'Tecnologías' => 'Bootstrap, Javascript, HTML, PHP, CSS'
            ]
        ],
    ],
    'en' => [
        'atras' => 'BACK',
        'siguiente' => 'NEXT',
        'inicio_btn' => 'Back to projects',
        'ver_repo' => 'View Code on GitHub',
        'nav_inicio' => 'Home',
        'nav_sobre' => 'About me',
        'nav_proyectos' => 'Projects',
        'no_encontrado' => 'Project not found.',
        'volver_proyectos' => 'Back to Projects',
        'etiqueta_tech' => 'Technologies',
        'etiqueta_rol' => 'Role:',
        'goodburger' => [
            'titulo' => 'GoodBurger',
            'desc' => 'A fast-food web platform designed to present a restaurant\'s menu in an attractive and intuitive way. I served as a QA Tester for this project.',
            'repo' => 'https://github.com/GersonDanielGuerrero/Progra-III-2024',
            'tech' => [ 'My Role' => 'QA Tester', 'Technologies' => 'Python, JS, Vue, Node, Bootstrap, HTML, CSS, MySQL' ]
        ],
        'donamiga' => [
            'titulo' => 'DonAmiga',
            'desc' => 'Digital donation platform with blockchain technology. I ensured software quality as a QA Tester.',
            'repo' => 'https://github.com/GersonDanielGuerrero/Donamiga',
            'tech' => [ 'My Role' => 'QA Tester', 'Technologies' => 'Javascript, HTML, PHP, CSS, Vue' ]
        ],
        'comunicado' => [
            'titulo' => 'Digital Newspaper',
            'desc' => 'An informative web platform for news publishing. I served as the QA Tester.',
            'repo' => 'https://github.com/JosueInge/Enginer-Team',
            'tech' => [ 'My Role' => 'QA Tester', 'Technologies' => 'Bootstrap, Javascript, HTML, PHP, CSS' ]
        ]
    ]
];

$t = $detalles[$lang];
$p = isset($t[$proyecto_id]) ? $t[$proyecto_id] : null;
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $p ? $p['titulo'] : 'Proyecto'; ?> | Portafolio</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

<nav class="navbar">
    <div class="pestañas">
        <a href="index.php?lang=<?php echo $lang; ?>"><i class="fas fa-home"></i> <?php echo $t['nav_inicio']; ?></a>
        <a href="sobre-mi.php?lang=<?php echo $lang; ?>"><i class="fas fa-user"></i> <?php echo $t['nav_sobre']; ?></a>
        <a href="proyectos.php?lang=<?php echo $lang; ?>" class="active"><i class="fas fa-code"></i> <?php echo $t['nav_proyectos']; ?></a>
    </div>

    <div class="idiomas">
        <i class="fas fa-language"></i>
        <a href="?proyecto=<?php echo $_GET['proyecto']; ?>&lang=es" class="<?php echo ($lang == 'es') ? 'lang-active' : ''; ?>">ES</a>
        <span>|</span>
        <a href="?proyecto=<?php echo $_GET['proyecto']; ?>&lang=en" class="<?php echo ($lang == 'en') ? 'lang-active' : ''; ?>">EN</a>
    </div>
</nav>

<div class="logo-container">
    <img src="img/logoportafolio.png" alt="Logo" class="logo-inicio">
</div>

<main class="contenedor-sobre-mi">
    
    <?php if ($p): ?>
        <h1 id="titulo-dinamico" style="text-decoration: underline; margin-bottom: 30px;"><?php echo $p['titulo']; ?></h1>
        
        <div id="visor-contenido">
            <div id="texto-descripcion">
                <p class="descripcion-larga">
                    <?php echo $p['desc']; ?>
                </p>

                <div class="tech-card-modern">
                    <h3 class="tech-titulo-central"><?php echo $t['etiqueta_tech']; ?></h3>
                    
                    <div class="tech-lista-columnas">
                        <?php 
                        $tech_string = $p['tech']['Tecnologías'] ?? $p['tech']['Technologies'];
                        $lista_tech = explode(', ', $tech_string); 
                        foreach ($lista_tech as $item): 
                        ?>
                            <div class="tech-bullet-item">
                                <span class="bullet">•</span> <?php echo $item; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="tech-footer-row">
                        <div class="rol-destacado">
                            <strong><?php echo $t['etiqueta_rol']; ?></strong> 
                            <?php echo $p['tech']['Mi Rol'] ?? $p['tech']['My Role']; ?>
                        </div>
                        
                        <?php if (isset($p['repo'])): ?>
                            <a href="<?php echo $p['repo']; ?>" target="_blank" class="btn-github-modern">
                                <i class="fab fa-github"></i> <?php echo $t['ver_repo']; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <img id="imagen-galeria" src="" alt="Captura" class="img-proyecto-detalle" style="display: none;">
        </div>

        <div class="navegacion-proyectos">
            <button onclick="retrocederGaleria()" id="btn-atras" class="btn-navegacion-flecha atras-flecha">
                 <?php echo $t['atras']; ?>
            </button>

            <a href="proyectos.php?lang=<?php echo $lang; ?>" id="btn-volver-inicio" class="btn-inicio-central">
                <?php echo $t['inicio_btn']; ?>
            </a>
            
            <button onclick="navegarGaleria()" id="btn-siguiente" class="btn-navegacion-flecha siguiente-flecha">
                <?php echo $t['siguiente']; ?>
            </button>
        </div>

    <?php else: ?>
        <div class="error-container">
            <i class="fas fa-exclamation-triangle"></i>
            <p><?php echo $t['no_encontrado']; ?></p>
            <a href="proyectos.php?lang=<?php echo $lang; ?>" class="btn-portafolio btn-azul"><?php echo $t['volver_proyectos']; ?></a>
        </div>
    <?php endif; ?>
</main>

<footer>
    <p class="copy">© 2026 Cristopher Bernal. Todos los derechos reservados.</p>
</footer>

<script>
    const urlParams = new URLSearchParams(window.location.search);
    let proyectoActual = urlParams.get('proyecto');

    if (proyectoActual === 'periodico') { proyectoActual = 'comunicado'; }

    let paso = 0; 
    let totalImagenes = 0;
    let prefijo = '';

    if (proyectoActual === 'donamiga') { totalImagenes = 3; prefijo = 'd'; } 
    else if (proyectoActual === 'goodburger') { totalImagenes = 14; prefijo = 'g'; } 
    else if (proyectoActual === 'comunicado') { totalImagenes = 4; prefijo = 'c'; }
    
    const texto = document.getElementById('texto-descripcion');
    const imagen = document.getElementById('imagen-galeria');
    const btnVolver = document.getElementById('btn-volver-inicio');
    const btnSiguiente = document.getElementById('btn-siguiente');

    function navegarGaleria() { if (paso < totalImagenes) { paso++; actualizarVisor(); } }

    function retrocederGaleria() {
        if (paso > 0) { paso--; actualizarVisor(); } 
        else { window.location.href = "proyectos.php?lang=<?php echo $lang; ?>"; }
    }

    function actualizarVisor() {
        if (paso === 0) {
            texto.style.display = 'block';
            imagen.style.display = 'none';
            btnVolver.style.display = 'none';
        } else {
            texto.style.display = 'none';
            imagen.style.display = 'block';
            imagen.src = `img/${prefijo}${paso}.jpeg`;
            btnVolver.style.display = 'inline-block';
        }
        btnSiguiente.style.visibility = (paso === totalImagenes) ? 'hidden' : 'visible';
    }
</script>

</body>
</html>