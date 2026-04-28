<?php
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'es';
$proyecto_id = isset($_GET['proyecto']) ? $_GET['proyecto'] : '';

// Diccionario de contenidos de proyectos
$detalles = [
    'es' => [
        'atras' => 'ATRAS',
        'siguiente' => 'SIGUIENTE',
        'goodburger' => [
            'titulo' => 'Goodburger:',
            'desc' => 'Es una aplicación web para un restaurante de hamburguesas; también fue una actividad del 2024 en el cual desempeñé el rol de programador frontend.'
        ],
        // Puedes agregar más proyectos aquí
    ],
    'en' => [
        'atras' => 'BACK',
        'siguiente' => 'NEXT',
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
        <h1 style="text-decoration: underline; margin-bottom: 20px;"><?php echo $p['titulo']; ?></h1>
        <p class="descripcion-larga" style="font-size: 1.8rem; line-height: 1.4;">
            <?php echo $p['desc']; ?>
        </p>
    <?php else: ?>
        <p>Proyecto no encontrado.</p>
    <?php endif; ?>

    <div style="display: flex; justify-content: space-between; margin-top: 50px; align-items: center;">
        <a href="proyectos.php?lang=<?php echo $lang; ?>" class="btn-navegacion-flecha">
            <i class="fas fa-arrow-left"></i> <?php echo $t['atras']; ?>
        </a>
        
        <a href="#" class="btn-navegacion-flecha">
            <?php echo $t['siguiente']; ?> <i class="fas fa-arrow-right"></i>
        </a>
    </div>
</main>

</body>
</html>