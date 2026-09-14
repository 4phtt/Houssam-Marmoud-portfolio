<?php
$name = "Houssam";
$job = "Creative Designer & Developer";

$projects = [
    [
        "title" => "HAIQ",
        "category" => "Branding",
        "image" => "images/project1.jpg",
        "description" => "Création d'une identité visuelle moderne et originale."
    ],
    [
        "title" => "Creative Website",
        "category" => "Web Design",
        "image" => "images/project2.jpg",
        "description" => "Conception d'un site web moderne, dynamique et responsive."
    ],
    [
        "title" => "Social Media",
        "category" => "Graphic Design",
        "image" => "images/project3.jpg",
        "description" => "Création de contenus visuels pour les réseaux sociaux."
    ]
];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $name ?> — Portfolio</title>

    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body>

<!-- CURSOR -->
<div class="cursor"></div>

<!-- NAVBAR -->
<header>

    <div class="logo">
        H<span>.</span>
    </div>

    <nav>
        <a href="#home">Accueil</a>
        <a href="#about">À propos</a>
        <a href="#projects">Projets</a>
        <a href="#skills">Compétences</a>
        <a href="#contact">Contact</a>
    </nav>

    <a href="#contact" class="nav-button">
        Let's talk ↗
    </a>

</header>


<!-- HERO -->
<section id="home" class="hero">

    <div class="hero-content">

        <p class="small-title">
            ✦ PORTFOLIO / 2026
        </p>

        <h1>
            Je transforme<br>
            <span>les idées</span> en<br>
            expériences.
        </h1>

        <p class="hero-description">
            Designer créatif & développeur passionné par la création
            d'expériences digitales modernes, originales et mémorables.
        </p>

        <div class="hero-buttons">

            <a href="#projects" class="primary-button">
                Voir mes projets ↗
            </a>

            <a href="#about" class="secondary-button">
                En savoir plus
            </a>

        </div>

    </div>

    <div class="hero-visual">

        <div class="circle"></div>

        <div class="floating-card card-1">
            DESIGN
        </div>

        <div class="floating-card card-2">
            CODE
        </div>

        <div class="floating-card card-3">
            ✦ CREATE
        </div>

        <div class="profile-circle">
            <img src="images/profile.jpg" alt="Profile">
        </div>

    </div>

</section>


<!-- MARQUEE -->
<div class="marquee">

    <div class="marquee-content">
        DESIGN ✦ DEVELOPMENT ✦ CREATIVITY ✦ BRANDING ✦ MOTION ✦
        DESIGN ✦ DEVELOPMENT ✦ CREATIVITY ✦ BRANDING ✦ MOTION ✦
    </div>

</div>


<!-- ABOUT -->
<section id="about" class="section about">

    <div class="section-number">
        01 / ABOUT
    </div>

    <div class="about-content">

        <h2>
            Je crée des choses<br>
            qui <span>attirent l'attention.</span>
        </h2>

        <p>
            Je suis un créatif passionné par le design, le développement
            web et la communication visuelle. Mon objectif est de créer
            des projets qui ne sont pas seulement beaux, mais également
            utiles et mémorables.
        </p>

        <p>
            J'aime expérimenter avec les couleurs, les animations,
            la typographie et les nouvelles technologies.
        </p>

    </div>

</section>


<!-- PROJECTS -->
<section id="projects" class="section projects">

    <div class="section-number">
        02 / PROJECTS
    </div>

    <div class="projects-header">

        <h2>
            Selected<br>
            <span>Works.</span>
        </h2>

        <p>
            Une sélection de projets réalisés avec passion.
        </p>

    </div>


    <div class="project-grid">

        <?php foreach ($projects as $project): ?>

            <article class="project-card">

                <div class="project-image">

                    <img
                        src="<?= $project['image'] ?>"
                        alt="<?= $project['title'] ?>"
                    >

                    <div class="project-overlay">
                        View project ↗
                    </div>

                </div>

                <div class="project-info">

                    <div>
                        <h3><?= $project['title'] ?></h3>

                        <p>
                            <?= $project['description'] ?>
                        </p>
                    </div>

                    <span>
                        <?= $project['category'] ?>
                    </span>

                </div>

            </article>

        <?php endforeach; ?>

    </div>

</section>


<!-- SKILLS -->
<section id="skills" class="section skills">

    <div class="section-number">
        03 / SKILLS
    </div>

    <h2>
        What I<br>
        <span>do.</span>
    </h2>


    <div class="skills-grid">

        <div class="skill">
            <span>01</span>
            <h3>UI / UX Design</h3>
            <p>
                Interfaces modernes et expériences utilisateur
                intuitives.
            </p>
        </div>

        <div class="skill">
            <span>02</span>
            <h3>Web Development</h3>
            <p>
                Sites web rapides, responsive et interactifs.
            </p>
        </div>

        <div class="skill">
            <span>03</span>
            <h3>Branding</h3>
            <p>
                Identités visuelles fortes et cohérentes.
            </p>
        </div>

        <div class="skill">
            <span>04</span>
            <h3>Motion Design</h3>
            <p>
                Animations et interactions pour donner vie aux projets.
            </p>
        </div>

    </div>

</section>


<!-- CONTACT -->
<section id="contact" class="contact">

    <p class="small-title">
        04 / CONTACT
    </p>

    <h2>
        Let's create<br>
        something <span>great.</span>
    </h2>

    <a href="mailto:contact@example.com" class="email">
        contact@example.com ↗
    </a>

</section>


<!-- FOOTER -->
<footer>

    <div>
        © 2026 <?= $name ?>
    </div>

    <div class="socials">
        <a href="#">Instagram</a>
        <a href="#">LinkedIn</a>
        <a href="#">Behance</a>
    </div>

</footer>


<script src="script.js"></script>

</body>
</html>