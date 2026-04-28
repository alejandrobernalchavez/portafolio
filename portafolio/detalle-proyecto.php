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
            'titulo' => 'Goodburger:',
            'desc' => 'Es una aplicación web para un restaurante de hamburguesas; también fue una actividad del 2024 en el cual desempeñé el rol de programador frontend.'
        ],
        'donamiga' => [
            'titulo' => 'DonAmiga:',
            'desc' => 'DonAmiga es una plataforma digital de donaciones diseñada para conectar a personas con causas sociales de forma transparente, segura y accesible. A través del uso de tecnología blockchain, permite crear, gestionar y dar seguimiento a campañas solidarias, garantizando la trazabilidad de cada aporte realizado. Su enfoque centrado en el usuario facilita la exploración de campañas, el monitoreo del progreso y la interacción entre donantes, promoviendo confianza y compromiso. DonAmiga busca impulsar el impacto social mediante una experiencia moderna, confiable y orientada a la colaboración.',
            'repo' => 'https://github.com/GersonDanielGuerrero/Donamiga',
            'tech' => [
                'Frontend' => 'Vue.js, HTML, CSS, JavaScript',
                'Backend' => 'Django (API REST), Fetch API',
                'Base de Datos' => 'SQL Server',
                'Blockchain' => 'Blockchain (registro y trazabilidad)'
            ]
        ],
    ],
    'en' => [
        'atras' => 'BACK',
        'siguiente' => 'next',
        'inicio' => 'Back to home',
        'goodburger' => [
            'titulo' => 'Goodburger:',
            'desc' => 'It is a web application for a hamburger restaurant; it was also a 2024 activity in which I played the role of frontend programmer.'
        ],
        'donamiga' => [
            'titulo' => 'DonAmiga:',
            'desc' => 'DonAmiga is a digital donation platform designed to connect people with social causes in a transparent, secure, and accessible way. Through the use of blockchain technology, it allows creating, managing, and tracking solidarity campaigns, guaranteeing the traceability of each contribution made.',
            'repo' => 'https://github.com/GersonDanielGuerrero/Donamiga',
            'tech' => [
                'Frontend' => 'Vue.js, HTML, CSS, JavaScript',
                'Backend' => 'Django (API REST), Fetch API',
                'Database' => 'SQL Server',
                'Blockchain' => 'Blockchain (registration and traceability)'
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
    <style>
        /* Estilos específicos para la ficha técnica y GitHub */
        .tech-container {
            background: #f8f9fa;
            border: 1px solid #dadce0;
            border-radius: 12px;
            padding: 25px;
            margin: 20px auto;
            text-align: left;
            max-width: 800px;
        }
        .tech-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 15px;
            margin-bottom: 25px;
        }
        .tech-item h4 {
            color: var(--color-acento);
            font-size: 14px;
            margin-bottom: 5px;
            text-transform: uppercase;
        }
        .tech-item p {
            font-size: 15px;
            color: var(--color-texto-suave);
        }
        .btn-github {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background-color: #24292e;
            color: white !important;
            padding: 12px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: background 0.3s;
        }
        .btn-github:hover { background-color: #444; }
    </style>
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
        <button onclick="retrocederGaleria()" id="btn-atras" class="btn-navegacion-flecha atras-flecha" style="border:none; cursor:pointer;">
             <?php echo $t['atras']; ?>
        </button>

        <a href="proyectos.php?lang=<?php echo $lang; ?>" id="btn-volver-inicio" class="btn-inicio-central" style="display: none;">
            <?php echo $t['inicio']; ?>
        </a>
        
        <button onclick="navegarGaleria()" id="btn-siguiente" class="btn-navegacion-flecha siguiente-flecha" style="border:none; cursor:pointer;">
            <?php echo $t['siguiente']; ?>
        </button>
    </div>
</main>

<script>
    const urlParams = new URLSearchParams(window.location.search);
    const proyectoActual = urlParams.get('proyecto');

    let paso = 0; 
    let totalImagenes = (proyectoActual === 'donamiga') ? 3 : 14;
    let prefijo = (proyectoActual === 'donamiga') ? 'd' : 'g';
    
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