```php
<?php

$name = "Houssam";
$job = "Designer & Web Developer";

$projects = [
    ["name" => "HAIQ", "type" => "Branding"],
    ["name" => "Portfolio", "type" => "Web Design"],
    ["name" => "Creative App", "type" => "UI / UX"]
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


/* NAVBAR */

nav {
    height: 70px;
    padding: 0 8%;

    display: flex;
    align-items: center;
    justify-content: space-between;

    border-bottom: 1px solid #ddd;
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
    text-decoration: none;
    color: #111;
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
    max-width: 900px;
}

.hero h1 span {
    color: #777;
}

.hero .description {
    margin-top: 35px;
    max-width: 500px;

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

    text-decoration: none;

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


/* PROJECTS */

.projects {
    border-top: 1px solid #ddd;
}

.project {
    display: grid;

    grid-template-columns: 10% 50% 30% 10%;

    align-items: center;

    padding: 30px 0;

    border-top: 1px solid #ddd;

    transition: .3s;
}

.project:last-child {
    border-bottom: 1px solid #ddd;
}

.project:hover {
    padding-left: 15px;
}

.project-number {
    color: #999;
}

.project-name {
    font-size: 28px;
    font-weight: bold;
}

.project-type {
    color: #777;
    font-size: 13px;
}

.arrow {
    text-align: right;
    font-size: 20px;
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

    .project {
        grid-template-columns: 15% 55% 30%;
    }

    .project-type {
        display: none;
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

        <a href="#about">About</a>

        <a href="#projects">Projects</a>

        <a href="#skills">Skills</a>

        <a href="#contact">Contact</a>

    </div>

</nav>


<!-- HERO -->

<div class="hero">

    <p>
        HELLO, I'M <?= strtoupper($name) ?>
    </p>

    <h1>
        <?= $job ?><br>
        <span>based in Morocco.</span>
    </h1>

    <p class="description">
        Je crée des designs simples, modernes et efficaces
        et je développe des expériences web adaptées aux besoins
        des utilisateurs.
    </p>

    <div>
        <a href="#projects" class="button">
            Voir mes projets →
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
            Design with purpose.
        </h2>

        <p>
            Je suis passionné par le design et le développement web.
            J'aime transformer des idées en projets simples,
            clairs et agréables à utiliser.
        </p>

        <p>
            Mon approche est basée sur la simplicité,
            la créativité et l'attention aux détails.
        </p>

    </div>

</section>


<!-- PROJECTS -->

<section class="projects" id="projects">

    <div class="title">
        02 — Projects
    </div>


    <?php foreach ($projects as $index => $project): ?>

        <div class="project">

            <div class="project-number">
                0<?= $index + 1 ?>
            </div>

            <div class="project-name">
                <?= $project["name"] ?>
            </div>

            <div class="project-type">
                <?= $project["type"] ?>
            </div>

            <div class="arrow">
                →
            </div>

        </div>

    <?php endforeach; ?>

</section>


<!-- SKILLS -->

<section class="skills" id="skills">

    <div class="title">
        03 — Skills
    </div>

    <div class="skills-list">

        <div class="skill">
            UI / UX Design
        </div>

        <div class="skill">
            Graphic Design
        </div>

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
            Branding
        </div>

    </div>

</section>


<!-- CONTACT -->

<section class="contact" id="contact">

    <div class="title">
        04 — Contact
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
```
