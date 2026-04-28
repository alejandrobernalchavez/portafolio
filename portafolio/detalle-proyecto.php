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
    ],
    'en' => [
        'atras' => 'BACK',
        'siguiente' => 'next',
        'inicio' => 'Back to home',
        'goodburger' => [
            'titulo' => 'Goodburger:',
            'desc' => 'It is a web application for a hamburger restaurant; it was also a 2024 activity in which I played the role of frontend programmer.'
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
            <p id="texto-descripcion" class="descripcion-larga" style="font-size: 1.8rem; line-height: 1.4;">
                <?php echo $p['desc']; ?>
            </p>
            <img id="imagen-galeria" src="" alt="Captura" class="img-proyecto-detalle" style="display: none;">
        </div>
    <?php else: ?>
        <p>Proyecto no encontrado.</p>
    <?php endif; ?>

    <div style="display: flex; justify-content: space-between; margin-top: 50px; align-items: center;">
        <a href="proyectos.php?lang=<?php echo $lang; ?>" class="btn-navegacion-flecha atras-flecha">
             <?php echo $t['atras']; ?>
        </a>

        <a href="proyectos.php?lang=<?php echo $lang; ?>" id="btn-volver-inicio" class="btn-inicio-central">
            <?php echo $t['inicio']; ?>
        </a>
        
        <button onclick="navegarGaleria()" class="btn-navegacion-flecha siguiente-flecha" style="border:none; cursor:pointer;">
            <?php echo $t['siguiente']; ?>
        </button>
    </div>
</main>

<script>
    let paso = 0; // 0 es texto, 1-14 son imágenes
    const totalImagenes = 14;
    
    const texto = document.getElementById('texto-descripcion');
    const imagen = document.getElementById('imagen-galeria');
    const btnVolver = document.getElementById('btn-volver-inicio');

    function navegarGaleria() {
        paso++;

        if (paso === 1) {
            // Ocultar texto y mostrar la primera imagen (g1.png)
            if(texto) texto.style.display = 'none';
            imagen.style.display = 'inline-block';
            imagen.src = `img/g${paso}.png`;
            
            // Aparece el botón de en medio
            btnVolver.style.display = 'inline-block';
        } else if (paso <= totalImagenes) {
            // Ir cambiando de g2 a g14
            imagen.src = `img/g${paso}.png`;
        } else {
            // Opcional: Reiniciar o avisar que terminó
            alert("Fin de las capturas.");
        }
    }
</script>

</body>
</html>