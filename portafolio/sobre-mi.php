<?php
// 1. Lógica de detección de idioma
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'es';

// 2. Diccionario de textos optimizado
$textos = [
    'es' => [
        'titulo_pestana' => 'Sobre mí | Cristopher Bernal',
        'meta_desc' => 'Conoce el perfil académico, habilidades técnicas e intereses de Cristopher Bernal, QA Tester en formación e Ingeniero en Sistemas Computacionales.',
        'meta_keywords' => 'Sobre mi, Cristopher Bernal, QA Tester, Universidad Gerardo Barrios, UGB, Formación Académica, Habilidades técnicas',
        'inicio' => 'Inicio',
        'sobre' => 'Sobre mí',
        'proyectos' => 'Proyectos',
        'h1' => 'Sobre mí',
        'p1' => 'Soy estudiante de 4° año de <strong>Ingeniería en Sistemas Computacionales</strong> y un apasionado <strong>QA Tester en formación</strong> enfocado en la excelencia técnica. Mi objetivo va más allá de encontrar fallos aislados; busco optimizar la experiencia global del usuario garantizando que los productos de software cumplan con los más altos estándares de calidad, robustez y funcionalidad.',
        'p2' => 'Me especializo en el ciclo de vida de las pruebas (STLC), aportando una perspectiva analítica, rigurosa y orientada al detalle desde las fases tempranas del desarrollo. Mi formación técnica me permite comunicarme de manera fluida y efectiva con equipos multidisciplinarios para asegurar entregas exitosas.',
        'formacion' => 'Formación Académica',
        'ing' => 'Ingeniería en Sistemas Computacionales',
        'uni_nombre' => 'Universidad Gerardo Barrios (UGB)',
        'uni_fecha' => '2021 - a la fecha (4° año, VII Ciclo)',
        'bach' => 'Bachillerato Técnico Vocacional en Contaduría',
        'bach_nombre' => 'Instituto Nacional de Jiquilisco (INJ)',
        'bach_fecha' => '2020 - 2022',
        'habilidades' => 'Habilidades de Especialización',
        
        // Textos para la nueva sección de Intereses
        'intereses_titulo' => 'Intereses y Áreas de Estudio',
        'int_1' => '🤖 Automatización de Pruebas (QA Automation)',
        'int_2' => '🔄 Metodologías Ágiles y Scrum',
        'int_3' => '🔒 Seguridad y Rendimiento del Software',
        'int_4' => '🌐 Arquitectura de APIs y Microservicios',
        
        'btn_cv' => 'Descargar CV',
        'cv_path' => 'cv/cv-espanol.pdf',
        'explorar' => 'Explorar',
        'redes' => 'Redes sociales'
    ],
    'en' => [
        'titulo_pestana' => 'About Me | Cristopher Bernal',
        'meta_desc' => 'Learn about the academic background, technical skills, and interests of Cristopher Bernal, QA Tester in training and Computer Systems Engineer.',
        'meta_keywords' => 'About me, Cristopher Bernal, QA Tester, Gerardo Barrios University, UGB, Academic Background, Technical skills',
        'inicio' => 'Home',
        'sobre' => 'About me',
        'proyectos' => 'Projects',
        'h1' => 'About Me',
        'p1' => 'I am a 4th-year <strong>Computer Systems Engineering</strong> student and a passionate <strong>QA Tester in training</strong> committed to technical excellence. My goal goes beyond finding isolated bugs; I aim to optimize the overall user experience by ensuring software products meet the highest standards of quality, robustness, and functionality.',
        'p2' => 'I specialize in the Software Testing Life Cycle (STLC), bringing an analytical, rigorous, and detail-oriented perspective from the early stages of development. My technical background allows me to communicate fluently and effectively with multidisciplinary teams to ensure successful deliveries.',
        'formacion' => 'Academic Background',
        'ing' => 'Computer Systems Engineering',
        'uni_nombre' => 'Gerardo Barrios University (UGB)',
        'uni_fecha' => '2021 - Present (4th Year, 7th Semester)',
        'bach' => 'Technical High School Diploma in Accounting',
        'bach_nombre' => 'National Institute of Jiquilisco (INJ)',
        'bach_fecha' => '2020 - 2022',
        'habilidades' => 'Specialized Skills',
        
        // Texts for the new Interests section
        'intereses_titulo' => 'Interests & Areas of Study',
        'int_1' => '🤖 QA Test Automation',
        'int_2' => '🔄 Agile Methodologies & Scrum',
        'int_3' => '🔒 Software Security & Performance',
        'int_4' => '🌐 API Architecture & Microservices',
        
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
        <a href="index.php?lang=<?php echo $lang; ?>" class="<?php echo ($pagina_actual == 'index.php') ? 'active' : ''; ?>">
            <i class="fas fa-home"></i> <?php echo $t['inicio']; ?>
        </a>
        <a href="sobre-mi.php?lang=<?php echo $lang; ?>" class="<?php echo ($pagina_actual == 'sobre-mi.php') ? 'active' : ''; ?>">
            <i class="fas fa-user"></i> <?php echo $t['sobre']; ?>
        </a>
        <a href="proyectos.php?lang=<?php echo $lang; ?>" class="<?php echo ($pagina_actual == 'proyectos.php') ? 'active' : ''; ?>">
            <i class="fas fa-code"></i> <?php echo $t['proyectos']; ?>
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
    <h1 style="margin-bottom: 20px;"><?php echo $t['h1']; ?></h1>
    <p class="descripcion-larga"><?php echo $t['p1']; ?></p>
    <p class="descripcion-larga" style="margin-bottom: 40px;"><?php echo $t['p2']; ?></p>

    <section class="seccion-detalle">
        <h2 class="subtitulo-seccion"><?php echo $t['formacion']; ?></h2>
        
        <div class="timeline-item">
            <p class="texto-principal"><?php echo $t['ing']; ?></p>
            <p class="texto-secundario"><?php echo $t['uni_nombre']; ?> | <?php echo $t['uni_fecha']; ?></p>
        </div>

        <div class="timeline-item">
            <p class="texto-principal"><?php echo $t['bach']; ?></p>
            <p class="texto-secundario"><?php echo $t['bach_nombre']; ?> | <?php echo $t['bach_fecha']; ?></p>
        </div>
    </section>

    <section class="seccion-detalle" style="margin-top: 40px;">
        <h2 class="subtitulo-seccion"><?php echo $t['habilidades']; ?></h2>
        <div class="contenedor-cards">
            <div class="card">🧩 Testing Manual</div>
            <div class="card">✅ Pruebas Funcionales</div>
            <div class="card">📄 Documentación de Errores</div>
            <div class="card">🛠️ Azure DevOps</div>
            <div class="card">🗄️ SQL Básico</div>
            <div class="card">💻 HTML / CSS</div>
        </div>
    </section>

    <section class="seccion-detalle" style="margin-top: 40px;">
        <h2 class="subtitulo-seccion"><?php echo $t['intereses_titulo']; ?></h2>
        <div class="contenedor-cards" style="grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));">
            <div class="card" style="background-color: rgba(0, 123, 255, 0.05); border-left: 4px solid #007bff; text-align: left; padding: 15px; font-size: 0.95rem;">
                <?php echo $t['int_1']; ?>
            </div>
            <div class="card" style="background-color: rgba(0, 123, 255, 0.05); border-left: 4px solid #007bff; text-align: left; padding: 15px; font-size: 0.95rem;">
                <?php echo $t['int_2']; ?>
            </div>
            <div class="card" style="background-color: rgba(0, 123, 255, 0.05); border-left: 4px solid #007bff; text-align: left; padding: 15px; font-size: 0.95rem;">
                <?php echo $t['int_3']; ?>
            </div>
            <div class="card" style="background-color: rgba(0, 123, 255, 0.05); border-left: 4px solid #007bff; text-align: left; padding: 15px; font-size: 0.95rem;">
                <?php echo $t['int_4']; ?>
            </div>
        </div>
    </section>

    <div class="actions" style="justify-content: center; margin-top: 40px; margin-bottom: 60px;">
        <a href="<?php echo $t['cv_path']; ?>" download class="btn-portafolio btn-blanco">
            <i class="fas fa-file-download"></i> <?php echo $t['btn_cv']; ?>
        </a>
    </div>
</main>

<footer>
    <div style="display: flex; justify-content: space-around; max-width: 900px; margin: 0 auto; flex-wrap: wrap; gap: 20px;">
        <div class="footer-col" style="text-align: left; min-width: 150px;">
            <h3 style="margin-bottom: 15px; color: white;"><?php echo $t['explorar']; ?></h3>
            <a href="index.php?lang=<?php echo $lang; ?>" style="color: white; text-decoration: none; opacity: 0.8; display: block; margin-bottom: 8px;">
                <?php echo $t['inicio']; ?>
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
                <a href="mailto:alejogevara27@gmail.com">
                    <img src="img/email.png" alt="Email" style="width: 30px; height: 30px; border-radius: 5px;">
                </a>
            </div>
        </div>
    </div>
    <p class="copy">© 2026 Cristopher Bernal. Todos los derechos reservados.</p>
</footer>

</body>
</html>
