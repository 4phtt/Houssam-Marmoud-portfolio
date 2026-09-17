<?php

$name = "Houssam Marmoud";
$job = "Web Developer";

$modules = [
    ["code" => "M201", "name" => "Préparation d'un projet web"],
    ["code" => "M202", "name" => "Approche agile"],
    ["code" => "M203", "name" => "Gestion des données"],
    ["code" => "M204", "name" => "Développement front-end"],
    ["code" => "M205", "name" => "Développement back-end"],
    ["code" => "M206", "name" => "Création d'une application Cloud native"],
    ["code" => "M207", "name" => "Projet de synthèse"]
];

$projects = [
    [
        "name" => "Portfolio personnel",
        "description" => "Site vitrine responsive présentant mon parcours, mes compétences et mes modules de formation.",
        "tech" => "HTML / CSS / PHP",
        "link" => "#"
    ],
    [
        "name" => "Application de gestion de tâches",
        "description" => "Application web permettant de créer, organiser et suivre des tâches avec une base de données MySQL.",
        "tech" => "PHP / SQL / JavaScript",
        "link" => "#"
    ],
    [
        "name" => "API Cloud native",
        "description" => "API RESTful déployée sur le cloud pour la gestion de données en temps réel.",
        "tech" => "Node.js / Cloud",
        "link" => "#"
    ],
    [
        "name" => "Projet de synthèse",
        "description" => "Projet final regroupant les compétences acquises tout au long de la formation.",
        "tech" => "Full-stack",
        "link" => "#"
    ]
];

?>

<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?= $name ?> | Portfolio</title>

<style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
}

body {
    font-family: Arial, sans-serif;
    background: #f5f5f3;
    color: #111;
}

a {
    text-decoration: none;
    color: inherit;
}


/* NAVBAR */

nav {
    height: 70px;
    padding: 0 8%;

    display: flex;
    align-items: center;
    justify-content: space-between;

    border-bottom: 1px solid #ddd;
    background: #f5f5f3;
}

.logo {
    font-size: 22px;
    font-weight: bold;
}

.menu {
    display: flex;
    gap: 30px;
}

.menu a {
    font-size: 14px;
}

.menu a:hover {
    color: #777;
}


/* HERO */

.hero {
    min-height: 85vh;

    padding: 100px 8%;

    display: flex;
    flex-direction: column;
    justify-content: center;
}

.hero p {
    color: #777;
    margin-bottom: 20px;
}

.hero h1 {
    font-size: clamp(55px, 9vw, 120px);
    line-height: .9;
    letter-spacing: -5px;
    max-width: 1000px;
}

.hero h1 span {
    color: #777;
}

.description {
    margin-top: 35px;

    max-width: 550px;

    line-height: 1.7;

    color: #666;
}


/* BUTTON */

.button {
    display: inline-block;

    margin-top: 30px;

    padding: 14px 22px;

    background: #111;
    color: white;

    border-radius: 3px;

    font-size: 13px;
}

.button:hover {
    background: #444;
}


/* SECTIONS */

section {
    padding: 100px 8%;
}

.title {
    font-size: 12px;
    color: #888;

    margin-bottom: 50px;

    text-transform: uppercase;
    letter-spacing: 2px;
}


/* ABOUT */

.about {
    display: grid;
    grid-template-columns: 30% 70%;

    border-top: 1px solid #ddd;
}

.about-text {
    max-width: 700px;
}

.about-text h2 {
    font-size: 45px;
    margin-bottom: 25px;
}

.about-text p {
    color: #666;

    line-height: 1.8;

    margin-bottom: 15px;
}


/* MODULES */

.modules {
    border-top: 1px solid #ddd;
}

.module {
    display: grid;

    grid-template-columns: 15% 70% 15%;

    align-items: center;

    padding: 28px 0;

    border-top: 1px solid #ddd;

    transition: .3s;
}

.module:last-child {
    border-bottom: 1px solid #ddd;
}

.module:hover {
    padding-left: 15px;
    background: #eeeeeb;
}

.module-code {
    color: #999;

    font-size: 14px;
}

.module-name {
    font-size: 25px;

    font-weight: bold;
}

.module-arrow {
    text-align: right;

    font-size: 20px;

    color: #777;
}

.module:hover .module-arrow {
    color: #111;
}


/* PROJECTS */

.projects {
    border-top: 1px solid #ddd;
}

.projects-grid {
    display: grid;

    grid-template-columns: repeat(2, 1fr);

    gap: 25px;
}

.project-card {
    padding: 35px;

    border: 1px solid #ddd;

    background: #fff;

    transition: .3s;
}

.project-card:hover {
    background: #111;
    color: #fff;
    border-color: #111;
}

.project-name {
    font-size: 24px;

    font-weight: bold;

    margin-bottom: 12px;
}

.project-description {
    font-size: 14px;

    line-height: 1.7;

    color: #666;

    margin-bottom: 20px;
}

.project-card:hover .project-description {
    color: #bbb;
}

.project-footer {
    display: flex;

    align-items: center;

    justify-content: space-between;

    font-size: 12px;

    text-transform: uppercase;

    letter-spacing: 1px;

    color: #999;
}

.project-card:hover .project-footer {
    color: #ccc;
}

.project-arrow {
    font-size: 18px;
}


/* SKILLS */

.skills {
    border-top: 1px solid #ddd;
}

.skills-list {
    display: grid;

    grid-template-columns: repeat(2, 1fr);

    max-width: 800px;
}

.skill {
    padding: 25px 0;

    border-bottom: 1px solid #ddd;

    font-size: 18px;
}


/* CONTACT */

.contact {
    background: #111;
    color: white;

    text-align: center;
}

.contact .title {
    color: #777;
}

.contact h2 {
    font-size: clamp(50px, 8vw, 100px);

    letter-spacing: -4px;
}

.contact p {
    color: #aaa;

    margin-top: 20px;
}

.contact a {
    display: inline-block;

    margin-top: 30px;

    color: white;

    text-decoration: underline;
}


/* FOOTER */

footer {
    background: #111;

    color: #666;

    padding: 30px 8%;

    border-top: 1px solid #333;

    display: flex;

    justify-content: space-between;

    font-size: 12px;
}


/* RESPONSIVE */

@media (max-width: 700px) {

    .menu {
        display: none;
    }

    .hero {
        padding-top: 70px;
    }

    .hero h1 {
        letter-spacing: -3px;
    }

    .about {
        grid-template-columns: 1fr;

        gap: 40px;
    }

    .module {
        grid-template-columns: 20% 65% 15%;
    }

    .module-name {
        font-size: 18px;
    }

    .projects-grid {
        grid-template-columns: 1fr;
    }

    .skills-list {
        grid-template-columns: 1fr;
    }

    footer {
        flex-direction: column;

        gap: 10px;
    }

}

</style>

</head>


<body>


<!-- NAVIGATION -->

<nav>

    <div class="logo">
        <?= $name ?>
    </div>

    <div class="menu">

        <a href="#about">
            About
        </a>

        <a href="#modules">
            Modules
        </a>

        <a href="#projects">
            Projects
        </a>

        <a href="#skills">
            Skills
        </a>

        <a href="#contact">
            Contact
        </a>

    </div>

</nav>


<!-- HERO -->

<div class="hero">

    <p>
        HELLO, I'M <?= strtoupper($name) ?>
    </p>

    <h1>

        <?= $job ?><br>

        

    </h1>

    <p class="description">

        Bienvenue sur mon portfolio.
        Découvrez mon parcours, mes compétences
        et les différents modules étudiés dans ma formation
        en développement web.

    </p>

    <div>

        <a href="#modules" class="button">

            Voir mes modules →

        </a>

    </div>

</div>


<!-- ABOUT -->

<section class="about" id="about">

    <div class="title">

        01 — About

    </div>

    <div class="about-text">

        <h2>

            À propos de moi.

        </h2>

        <p>

            Je suis passionné par le développement web
            et les nouvelles technologies.

        </p>

        <p>

            Ma formation me permet de développer mes compétences
            dans la conception, le développement et la gestion
            de projets web.

        </p>

    </div>

</section>


<!-- MODULES -->

<section class="modules" id="modules">

    <div class="title">

        02 — Modules de formation

    </div>


    <?php foreach ($modules as $module): ?>

        <div class="module">

            <div class="module-code">

                <?= $module["code"] ?>

            </div>

            <div class="module-name">

                <?= $module["name"] ?>

            </div>

            <div class="module-arrow">

                →

            </div>

        </div>

    <?php endforeach; ?>


</section>


<!-- PROJECTS -->

<section class="projects" id="projects">

    <div class="title">

        03 — Projets

    </div>

    <div class="projects-grid">

        <?php foreach ($projects as $project): ?>

            <a href="<?= $project['link'] ?>" class="project-card">

                <div class="project-name">

                    <?= $project["name"] ?>

                </div>

                <div class="project-description">

                    <?= $project["description"] ?>

                </div>

                <div class="project-footer">

                    <span>

                        <?= $project["tech"] ?>

                    </span>

                    <span class="project-arrow">

                        →

                    </span>

                </div>

            </a>

        <?php endforeach; ?>

    </div>

</section>


<!-- SKILLS -->

<section class="skills" id="skills">

    <div class="title">

        04 — Skills

    </div>

    <div class="skills-list">

        <div class="skill">
            HTML / CSS
        </div>

        <div class="skill">
            JavaScript
        </div>

        <div class="skill">
            PHP
        </div>

        <div class="skill">
            SQL / Database
        </div>

        <div class="skill">
            Git / GitHub
        </div>

        <div class="skill">
            Cloud & Web Development
        </div>

    </div>

</section>


<!-- CONTACT -->

<section class="contact" id="contact">

    <div class="title">

        05 — Contact

    </div>

    <h2>

        Let's work<br>
        together.

    </h2>

    <p>

        Vous avez un projet ou une idée ?

    </p>

    <a href="mailto:houssam@example.com">

        houssam@example.com

    </a>

</section>


<!-- FOOTER -->

<footer>

    <span>

        © 2026 <?= $name ?>

    </span>

    <span>

        Portfolio

    </span>

</footer>


</body>

</html>