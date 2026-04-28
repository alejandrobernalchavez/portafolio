<?php
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'es';
$proyecto_id = isset($_GET['proyecto']) ? $_GET['proyecto'] : '';

// Diccionario de contenidos de proyectos
$detalles = [
    'es' => [
        'atras' => 'ATRAS',
        'siguiente' => 'siguiente',
        'inicio' => 'Volver a inicio',
        'goodburger' => [
            'titulo' => 'GoodBurger:',
            'desc' => 'GoodBurger es una página web orientada al sector de comida rápida, diseñada para presentar de forma atractiva e intuitiva la oferta de un restaurante. La plataforma permite a los usuarios explorar el menú, conocer los productos disponibles y acceder a información relevante como promociones y datos de contacto. Su enfoque está centrado en brindar una experiencia visual agradable y fácil de usar, facilitando la navegación y mejorando la interacción del cliente con el negocio.',
            'repo' => 'https://github.com/GersonDanielGuerrero/Progra-III-2024',
            'tech' => [
                'Mi Rol' => 'QA Tester',
                'Tecnologías' => 'Python, JS, Vue, Node, Bootstrap, HTML, CSS, MySQL'
            ]
        ],
        'donamiga' => [
            'titulo' => 'DonAmiga:',
            'desc' => 'DonAmiga es una plataforma digital de donaciones diseñada para conectar a personas con causas sociales de forma transparente, segura y accesible. A través del uso de tecnología blockchain, permite crear, gestionar y dar seguimiento a campañas solidarias, garantizando la trazabilidad de cada aporte realizado. En este proyecto, desempeñé el rol de QA Tester, asegurando la calidad y el correcto funcionamiento de cada módulo.',
            'repo' => 'https://github.com/GersonDanielGuerrero/Donamiga',
            'tech' => [
                'Mi Rol' => 'QA Tester',
                'Tecnologías' => 'Javascript, HTML, PHP, CSS, Vue',
                'Blockchain' => 'Registro y trazabilidad de donaciones'
            ]
        ],
        'comunicado' => [
            'titulo' => 'Periódico Digital:',
            'desc' => 'Periódico Digital es una plataforma web informativa diseñada para la publicación y difusión de noticias de manera rápida, organizada y accesible. Permite a los usuarios consultar contenidos actualizados en distintas categorías como actualidad, tecnología, deportes y cultura, ofreciendo una experiencia de lectura clara y estructurada. El sistema facilita la gestión de artículos, así como la organización por secciones, adaptándose a las necesidades del entorno digital.',
            'repo' => 'https://github.com/JosueInge/Enginer-Team',
            'tech' => [
                'Mi Rol' => 'QA Tester',
                'Tecnologías' => 'Bootstrap, Javascript, HTML, PHP, CSS'
            ]
        ],
    ],
    'en' => [
        'atras' => 'BACK',
        'siguiente' => 'next',
        'inicio' => 'Back to home',
        'goodburger' => [
            'titulo' => 'GoodBurger:',
            'desc' => 'A fast-food web platform designed to present a restaurant\'s menu in an attractive and intuitive way. I served as a QA Tester for this project.',
            'repo' => 'https://github.com/GersonDanielGuerrero/Progra-III-2024',
            'tech' => [
                'My Role' => 'QA Tester',
                'Technologies' => 'Python, JS, Vue, Node, Bootstrap, HTML, CSS, MySQL'
            ]
        ],
        'donamiga' => [
            'titulo' => 'DonAmiga:',
            'desc' => 'Digital donation platform with blockchain technology for secure social impact. I ensured software quality as a QA Tester.',
            'repo' => 'https://github.com/GersonDanielGuerrero/Donamiga',
            'tech' => [
                'My Role' => 'QA Tester',
                'Technologies' => 'Javascript, HTML, PHP, CSS, Vue'
            ]
        ],
        'comunicado' => [
            'titulo' => 'Digital Newspaper:',
            'desc' => 'An informative web platform for fast and organized news publishing. It features article management and section organization. I served as the QA Tester.',
            'repo' => 'https://github.com/JosueInge/Enginer-Team',
            'tech' => [
                'My Role' => 'QA Tester',
                'Technologies' => 'Bootstrap, Javascript, HTML, PHP, CSS'
            ]
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
    <title><?php echo $p ? $p['titulo'] : 'Proyecto'; ?></title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

<nav class="navbar">
    <div class="pestañas">
        <a href="index.php?lang=<?php echo $lang; ?>"><i class="fas fa-home"></i> Inicio</a>
        <a href="sobre-mi.php?lang=<?php echo $lang; ?>"><i class="fas fa-user"></i> Sobre mí</a>
        <a href="proyectos.php?lang=<?php echo $lang; ?>" class="active"><i class="fas fa-code"></i> Proyectos</a>
    </div>
</nav>

<div class="logo-container">
    <img src="img/logoportafolio.png" alt="Logo" class="logo-inicio">
</div>

<main class="contenedor-sobre-mi" style="text-align: center; display: flex; flex-direction: column; justify-content: center; min-height: 70vh;">
    
    <?php if ($p): ?>
        <h1 id="titulo-dinamico" style="text-decoration: underline; margin-bottom: 20px;"><?php echo $p['titulo']; ?></h1>
        
        <div id="visor-contenido">
            <div id="texto-descripcion">
                <p class="descripcion-larga" style="font-size: 1.2rem; line-height: 1.6; max-width: 800px; margin: 0 auto 30px;">
                    <?php echo $p['desc']; ?>
                </p>

                <?php if (isset($p['tech'])): ?>
                <div class="tech-container">
                    <div class="tech-grid">
                        <?php foreach ($p['tech'] as $categoria => $info): ?>
                            <div class="tech-item">
                                <h4><?php echo $categoria; ?></h4>
                                <p><?php echo $info; ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <?php if (isset($p['repo'])): ?>
                        <a href="<?php echo $p['repo']; ?>" target="_blank" class="btn-github">
                            <i class="fab fa-github"></i> Ver Código en GitHub
                        </a>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </div>

            <img id="imagen-galeria" src="" alt="Captura" class="img-proyecto-detalle" style="display: none; max-width: 100%; height: auto; border: 2px solid #000; margin: 0 auto;">
        </div>
    <?php else: ?>
        <p>Proyecto no encontrado.</p>
    <?php endif; ?>

    <div style="display: flex; justify-content: space-between; margin-top: 50px; align-items: center; width: 100%; max-width: 900px; margin-left: auto; margin-right: auto;">
        <button onclick="retrocederGaleria()" id="btn-atras" class="btn-navegacion-flecha atras-flecha">
             <?php echo $t['atras']; ?>
        </button>

        <a href="proyectos.php?lang=<?php echo $lang; ?>" id="btn-volver-inicio" class="btn-inicio-central">
            <?php echo $t['inicio']; ?>
        </a>
        
        <button onclick="navegarGaleria()" id="btn-siguiente" class="btn-navegacion-flecha siguiente-flecha">
            <?php echo $t['siguiente']; ?>
        </button>
    </div>
</main>

<script>
    const urlParams = new URLSearchParams(window.location.search);
    const proyectoActual = urlParams.get('proyecto');

    let paso = 0; 
    let totalImagenes = 0;
    let prefijo = '';

    // Configuración dinámica de imágenes
    if (proyectoActual === 'donamiga') {
        totalImagenes = 3;
        prefijo = 'd';
    } else if (proyectoActual === 'goodburger') {
        totalImagenes = 14;
        prefijo = 'g';
    } else if (proyectoActual === 'comunicado') {
        totalImagenes = 4;
        prefijo = 'c';
    }
    
    const texto = document.getElementById('texto-descripcion');
    const imagen = document.getElementById('imagen-galeria');
    const btnVolver = document.getElementById('btn-volver-inicio');
    const btnSiguiente = document.getElementById('btn-siguiente');

    function navegarGaleria() {
        if (paso < totalImagenes) {
            paso++;
            actualizarVisor();
        }
    }

    function retrocederGaleria() {
        if (paso > 0) {
            paso--;
            actualizarVisor();
        } else {
            window.location.href = "proyectos.php?lang=<?php echo $lang; ?>";
        }
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