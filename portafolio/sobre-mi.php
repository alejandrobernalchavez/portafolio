<?php
// 1. Lógica de detección de idioma
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'es';

// 2. Diccionario de textos
$textos = [
    'es' => [
        'titulo_pestana' => 'Sobre mí | Cristopher Bernal',
        'inicio' => 'Inicio',
        'sobre' => 'Sobre mí',
        'h1' => 'Sobre mí',
        'p1' => 'Soy estudiante de <strong>Ingeniería en Sistemas Computacionales</strong> y QA Tester apasionado por la excelencia técnica. Mi enfoque va más allá de encontrar fallos; busco optimizar la experiencia del usuario final garantizando que cada línea de código cumpla con los más altos estándares de calidad y funcionalidad.',
        'p2' => 'Me especializo en el ciclo de vida de pruebas, desde la detección temprana de errores hasta la mejora continua. Mi formación técnica me permite colaborar estrechamente con equipos de desarrollo, aportando una visión analítica y detallista en cada proyecto.',
        'formacion' => 'Formación Académica',
        'ing' => 'Ingeniería en Sistemas Computacionales',
        'uni_nombre' => 'Universidad Gerardo Barrios (UGB)',
        'uni_fecha' => '2023 - a la fecha (4° año, VII Ciclo)',
        'bach' => 'Bachillerato Técnico Vocacional en Contaduría',
        'bach_nombre' => 'Instituto Nacional de Jiquilisco (INJ)',
        'bach_fecha' => '2020 - 2022',
        'habilidades' => 'Habilidades de Especialización',
        'btn_cv' => 'Descargar CV',
        'cv_path' => 'cv/cv-espanol.pdf',
        'footer_doc' => 'Documentación',
        'footer_redes' => 'Redes sociales'
    ],
    'en' => [
        'titulo_pestana' => 'About Me | Cristopher Bernal',
        'inicio' => 'Home',
        'sobre' => 'About me',
        'h1' => 'About Me',
        'p1' => 'I am a <strong>Computer Systems Engineering</strong> student and a QA Tester passionate about technical excellence. My focus goes beyond finding bugs; I aim to optimize the end-user experience by ensuring every line of code meets the highest standards of quality and functionality.',
        'p2' => 'I specialize in the testing lifecycle, from early bug detection to continuous improvement. My technical background allows me to collaborate closely with development teams, providing an analytical and detailed perspective to every project.',
        'formacion' => 'Academic Background',
        'ing' => 'Computer Systems Engineering',
        'uni_nombre' => 'Gerardo Barrios University (UGB)',
        'uni_fecha' => '2023 - Present (4th Year, 7th Semester)',
        'bach' => 'Technical High School Diploma in Accounting',
        'bach_nombre' => 'National Institute of Jiquilisco (INJ)',
        'bach_fecha' => '2020 - 2022',
        'habilidades' => 'Specialized Skills',
        'btn_cv' => 'Download CV',
        'cv_path' => 'cv/cv-ingles.pdf',
        'footer_doc' => 'Documentation',
        'footer_redes' => 'Social Media'
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
</head>
<body>

<nav class="navbar">
    <div class="pestañas">
        <a href="index.php?lang=<?php echo $lang; ?>" class="<?php echo (strpos($pagina_actual, 'index') !== false) ? 'active' : ''; ?>">
            <i class="fas fa-home"></i> <?php echo $t['inicio']; ?>
        </a>
        <a href="sobre-mi.php?lang=<?php echo $lang; ?>" class="<?php echo (strpos($pagina_actual, 'sobre-mi') !== false) ? 'active' : ''; ?>">
            <i class="fas fa-user"></i> <?php echo $t['sobre']; ?>
        </a>
    </div>

    <div class="idiomas">
        <i class="fas fa-language"></i>
        <a href="?lang=es" class="<?php echo ($lang == 'es') ? 'lang-active' : ''; ?>">ES</a>
        <span>|</span>
        <a href="?lang=en" class="<?php echo ($lang == 'en') ? 'lang-active' : ''; ?>">EN</a>
    </div>
</nav>

<main>
    <section class="contenedor-sobre-mi">
        <h1><?php echo $t['h1']; ?></h1>
        <p class="descripcion-larga"><?php echo $t['p1']; ?></p>
        <p class="descripcion-larga"><?php echo $t['p2']; ?></p>

        <div class="seccion-detalle">
            <h2 class="subtitulo-seccion"><?php echo $t['formacion']; ?></h2>
            <div class="timeline">
                <div class="timeline-item">
                    <p class="texto-principal"><?php echo $t['ing']; ?></p>
                    <p class="texto-secundario"><?php echo $t['uni_nombre']; ?> | <?php echo $t['uni_fecha']; ?></p>
                </div>
                <div class="timeline-item">
                    <p class="texto-principal"><?php echo $t['bach']; ?></p>
                    <p class="texto-secundario"><?php echo $t['bach_nombre']; ?> | <?php echo $t['bach_fecha']; ?></p>
                </div>
            </div>
        </div>

        <div class="seccion-detalle">
            <h2 class="subtitulo-seccion"><?php echo $t['habilidades']; ?></h2>
            <div class="contenedor-cards">
                <div class="card">🧩 Testing Manual</div>
                <div class="card">✅ Pruebas Funcionales</div>
                <div class="card">📄 Documentación de Errores</div>
                <div class="card">🛠️ Azure DevOps</div>
                <div class="card">🗄️ SQL Básico</div>
                <div class="card">💻 HTML / CSS</div>
            </div>
        </div>

        <div style="margin-top: 40px;">
            <a href="<?php echo $t['cv_path']; ?>" download class="idiomas" style="display: inline-flex; text-decoration: none; padding: 12px 25px;">
                <i class="fas fa-file-download" style="margin-right: 10px;"></i> <?php echo $t['btn_cv']; ?>
            </a>
        </div>
    </section>
</main>

<footer>
    <div class="footer-contenido">
        <div class="footer-col">
            <h3><?php echo $t['footer_doc']; ?></h3>
            <a href="cv/cv-ingles.pdf" download style="color: inherit; text-decoration: none; opacity: 0.8; display: block; margin-bottom: 8px;">CV Inglés</a>
            <a href="cv/cv-espanol.pdf" download style="color: inherit; text-decoration: none; opacity: 0.8; display: block;">CV Español</a>
        </div>

        <div class="footer-col">
            <h3><?php echo $t['footer_redes']; ?></h3>
            <div class="redes">
                <a href="https://www.linkedin.com/in/cristopher-alejandro-bernal-chávez-245189381" target="_blank">
                    <img src="img/linkedin.jpg" alt="LinkedIn">
                </a>
                <a href="https://github.com/alejandrobernalchavez" target="_blank">
                    <img src="img/github.png" alt="GitHub">
                </a>
                <a href="mailto:alejogevara27@gmail.com">
                    <img src="img/email.png" alt="Email">
                </a>
            </div>
        </div>
    </div>
    <p class="copy">© 2026 Cristopher Bernal. Todos los derechos reservados.</p>
</footer>

</body>
</html>