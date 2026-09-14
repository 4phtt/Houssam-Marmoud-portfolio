```php
<?php

$name = "HOUSSAM";

$projects = [
    [
        "number" => "01",
        "title" => "HAIQ",
        "category" => "BRANDING",
        "description" => "Identité visuelle moderne et créative."
    ],
    [
        "number" => "02",
        "title" => "NOVA",
        "category" => "WEB DESIGN",
        "description" => "Expérience digitale immersive et interactive."
    ],
    [
        "number" => "03",
        "title" => "VISION",
        "category" => "UI / UX",
        "description" => "Interface minimaliste pensée pour l'utilisateur."
    ]
];

?>

<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?= $name ?> — Creative Portfolio</title>

<style>

/* =========================
   RESET
========================= */

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

html{
    scroll-behavior:smooth;
}

body{
    background:#080808;
    color:#f5f5f5;
    font-family:Arial, Helvetica, sans-serif;
    overflow-x:hidden;
}

a{
    text-decoration:none;
    color:inherit;
}


/* =========================
   CUSTOM CURSOR
========================= */

.cursor{
    position:fixed;
    width:18px;
    height:18px;

    border:1px solid #c8ff00;
    border-radius:50%;

    pointer-events:none;
    z-index:9999;

    transform:translate(-50%,-50%);

    transition:
        width .2s,
        height .2s,
        background .2s;
}


/* =========================
   NAVBAR
========================= */

nav{
    position:fixed;
    top:0;
    left:0;

    width:100%;

    padding:25px 7%;

    display:flex;
    justify-content:space-between;
    align-items:center;

    z-index:1000;

    background:rgba(8,8,8,.75);
    backdrop-filter:blur(15px);

    border-bottom:1px solid #181818;
}

.logo{
    font-size:25px;
    font-weight:900;
    letter-spacing:-2px;
}

.logo span{
    color:#c8ff00;
}

.menu{
    display:flex;
    gap:35px;
}

.menu a{
    font-size:12px;
    color:#777;

    transition:.3s;
}

.menu a:hover{
    color:#c8ff00;
}

.contact-btn{
    padding:11px 20px;

    border:1px solid #333;
    border-radius:30px;

    font-size:12px;

    transition:.3s;
}

.contact-btn:hover{
    background:#c8ff00;
    color:#000;
}


/* =========================
   HERO
========================= */

.hero{
    min-height:100vh;

    padding:150px 8% 80px;

    display:flex;
    flex-direction:column;
    justify-content:center;

    position:relative;
}

.hero-small{
    color:#777;
    font-size:11px;
    letter-spacing:4px;

    margin-bottom:30px;
}

.hero h1{
    font-size:clamp(60px,11vw,170px);

    line-height:.82;

    letter-spacing:-10px;

    max-width:1200px;
}

.hero h1 span{
    color:#c8ff00;
}

.hero-text{
    margin-top:45px;

    max-width:500px;

    color:#777;

    line-height:1.7;

    font-size:15px;
}

.hero-buttons{
    display:flex;
    gap:15px;

    margin-top:35px;
}

.btn{
    padding:15px 25px;

    border-radius:30px;

    font-size:12px;
}

.btn-main{
    background:#c8ff00;
    color:#000;
}

.btn-outline{
    border:1px solid #333;
}


/* =========================
   DECORATION
========================= */

.hero-circle{
    position:absolute;

    width:420px;
    height:420px;

    right:7%;
    top:50%;

    transform:translateY(-50%);

    border:1px solid #222;

    border-radius:50%;

    animation:rotate 15s linear infinite;
}

.hero-circle:before{

    content:"";

    position:absolute;

    width:12px;
    height:12px;

    background:#c8ff00;

    border-radius:50%;

    top:30px;
    left:50%;

}

.hero-circle:after{

    content:"CREATIVE • DESIGN • CODE • ";

    position:absolute;

    width:100%;
    height:100%;

    display:flex;
    align-items:center;
    justify-content:center;

    color:#333;

    font-size:11px;

    letter-spacing:3px;

}


/* =========================
   FLOATING WORDS
========================= */

.floating{
    position:absolute;

    padding:12px 18px;

    border:1px solid #333;

    border-radius:30px;

    font-size:10px;

    background:#111;

    animation:float 3s ease-in-out infinite;
}

.f1{
    right:25%;
    top:25%;
}

.f2{
    right:5%;
    bottom:20%;
    animation-delay:1s;
}

.f3{
    right:30%;
    bottom:15%;
    background:#c8ff00;
    color:#000;
    animation-delay:2s;
}


/* =========================
   MARQUEE
========================= */

.marquee{
    border-top:1px solid #222;
    border-bottom:1px solid #222;

    overflow:hidden;

    white-space:nowrap;

    padding:25px 0;
}

.marquee-track{
    display:inline-block;

    animation:marquee 18s linear infinite;

    font-size:20px;

    letter-spacing:5px;
}

.marquee span{
    color:#c8ff00;
}


/* =========================
   GENERAL SECTION
========================= */

section{
    padding:150px 8%;
}

.label{
    color:#555;

    font-size:10px;

    letter-spacing:4px;

    margin-bottom:70px;
}

.section-title{
    font-size:clamp(50px,8vw,110px);

    line-height:.9;

    letter-spacing:-6px;
}

.section-title span{
    color:#c8ff00;
}


/* =========================
   ABOUT
========================= */

.about{
    display:grid;

    grid-template-columns:30% 70%;
}

.about-text{
    max-width:750px;
}

.about-text p{
    color:#888;

    line-height:1.9;

    font-size:17px;

    margin-bottom:25px;
}


/* =========================
   PROJECTS
========================= */

.projects-header{

    display:flex;

    justify-content:space-between;

    align-items:end;

    margin-bottom:70px;

}

.projects-header p{
    color:#666;

    max-width:250px;

    line-height:1.6;
}

.project{
    border-top:1px solid #292929;

    padding:45px 0;

    display:grid;

    grid-template-columns:10% 35% 40% 15%;

    align-items:center;

    transition:.4s;

    cursor:pointer;
}

.project:last-child{
    border-bottom:1px solid #292929;
}

.project:hover{
    padding-left:25px;
    padding-right:25px;

    background:#101010;
}

.project-number{
    color:#555;

    font-size:12px;
}

.project-title{
    font-size:50px;

    letter-spacing:-3px;
}

.project-category{
    color:#c8ff00;

    font-size:11px;

    letter-spacing:2px;
}

.project-description{
    color:#666;

    font-size:13px;

    margin-top:8px;
}

.project-arrow{
    font-size:30px;

    text-align:right;

    transition:.3s;
}

.project:hover .project-arrow{
    transform:translateX(10px);
    color:#c8ff00;
}


/* =========================
   SKILLS
========================= */

.skills{
    background:#c8ff00;

    color:#000;
}

.skills .label{
    color:#333;
}

.skills .section-title span{
    color:#000;
}

.skills-grid{
    margin-top:80px;

    display:grid;

    grid-template-columns:repeat(2,1fr);

    border-top:1px solid #000;
}

.skill{
    padding:45px 20px;

    border-bottom:1px solid #000;
}

.skill:nth-child(odd){
    border-right:1px solid #000;
}

.skill-number{
    font-size:11px;
}

.skill h3{
    font-size:30px;

    margin:30px 0 15px;

    letter-spacing:-1px;
}

.skill p{
    max-width:400px;

    line-height:1.6;

    font-size:14px;
}


/* =========================
   CONTACT
========================= */

.contact{
    min-height:80vh;

    display:flex;

    flex-direction:column;

    justify-content:center;
}

.contact h2{
    font-size:clamp(60px,10vw,150px);

    line-height:.85;

    letter-spacing:-8px;
}

.contact h2 span{
    color:#c8ff00;
}

.email{
    margin-top:60px;

    font-size:20px;

    width:max-content;

    border-bottom:1px solid #c8ff00;

    padding-bottom:8px;

    transition:.3s;
}

.email:hover{
    color:#c8ff00;
}


/* =========================
   FOOTER
========================= */

footer{
    border-top:1px solid #222;

    padding:30px 8%;

    display:flex;

    justify-content:space-between;

    color:#555;

    font-size:11px;
}

.socials{
    display:flex;

    gap:25px;
}

.socials a:hover{
    color:#c8ff00;
}


/* =========================
   ANIMATIONS
========================= */

@keyframes rotate{

    from{
        transform:translateY(-50%) rotate(0);
    }

    to{
        transform:translateY(-50%) rotate(360deg);
    }

}

@keyframes float{

    0%,100%{
        transform:translateY(0);
    }

    50%{
        transform:translateY(-20px);
    }

}

@keyframes marquee{

    from{
        transform:translateX(0);
    }

    to{
        transform:translateX(-50%);
    }

}


/* =========================
   SCROLL ANIMATION
========================= */

.reveal{
    opacity:0;

    transform:translateY(60px);

    transition:
        opacity 1s ease,
        transform 1s ease;
}

.reveal.active{
    opacity:1;

    transform:translateY(0);
}


/* =========================
   RESPONSIVE
========================= */

@media(max-width:900px){

    .menu{
        display:none;
    }

    .hero-circle{
        opacity:.3;

        width:300px;
        height:300px;

        right:-80px;
    }

    .floating{
        display:none;
    }

    .about{
        grid-template-columns:1fr;
        gap:50px;
    }

    .projects-header{
        display:block;
    }

    .projects-header p{
        margin-top:30px;
    }

    .project{
        grid-template-columns:15% 60% 25%;
    }

    .project-description{
        display:none;
    }

    .project-title{
        font-size:35px;
    }

    .skills-grid{
        grid-template-columns:1fr;
    }

    .skill:nth-child(odd){
        border-right:none;
    }

    footer{
        flex-direction:column;
        gap:20px;
    }

}

@media(max-width:500px){

    .hero h1{
        font-size:65px;

        letter-spacing:-5px;
    }

    .hero-circle{
        width:250px;
        height:250px;
    }

    section{
        padding:100px 6%;
    }

    .project{
        grid-template-columns:15% 65% 20%;
    }

    .project-title{
        font-size:28px;
    }

    .project-arrow{
        font-size:20px;
    }

}


/* =========================
   SELECTION
========================= */

::selection{
    background:#c8ff00;
    color:#000;
}

</style>

</head>


<body>


<!-- CURSOR -->

<div class="cursor"></div>


<!-- NAVIGATION -->

<nav>

    <div class="logo">
        H<span>.</span>
    </div>

    <div class="menu">

        <a href="#home">HOME</a>

        <a href="#about">ABOUT</a>

        <a href="#projects">PROJECTS</a>

        <a href="#skills">SKILLS</a>

    </div>

    <a href="#contact" class="contact-btn">
        CONTACT ↗
    </a>

</nav>


<!-- HERO -->

<section class="hero" id="home">

    <div class="hero-circle"></div>

    <div class="floating f1">
        DESIGN
    </div>

    <div class="floating f2">
        DEVELOPMENT
    </div>

    <div class="floating f3">
        ✦ CREATE
    </div>


    <div class="hero-small">
        CREATIVE PORTFOLIO / 2026
    </div>

    <h1>
        I MAKE<br>
        <span>IDEAS</span><br>
        REAL.
    </h1>

    <p class="hero-text">
        Designer créatif & développeur web.
        Je transforme les idées simples en expériences
        digitales modernes, interactives et mémorables.
    </p>

    <div class="hero-buttons">

        <a href="#projects" class="btn btn-main">
            EXPLORE MY WORK ↗
        </a>

        <a href="#contact" class="btn btn-outline">
            LET'S TALK
        </a>

    </div>

</section>


<!-- MARQUEE -->

<div class="marquee">

    <div class="marquee-track">

        DESIGN <span>✦</span>
        DEVELOPMENT <span>✦</span>
        CREATIVITY <span>✦</span>
        BRANDING <span>✦</span>
        UI/UX <span>✦</span>

        DESIGN <span>✦</span>
        DEVELOPMENT <span>✦</span>
        CREATIVITY <span>✦</span>
        BRANDING <span>✦</span>
        UI/UX <span>✦</span>

    </div>

</div>


<!-- ABOUT -->

<section class="about reveal" id="about">

    <div class="label">
        01 / ABOUT ME
    </div>

    <div class="about-text">

        <h2 class="section-title">
            MORE THAN<br>
            JUST <span>DESIGN.</span>
        </h2>

        <br><br>

        <p>
            Je suis un créatif passionné par le design,
            le développement web et les expériences digitales.
        </p>

        <p>
            J'aime mélanger créativité et technologie
            pour créer des projets qui attirent l'attention
            et racontent une histoire.
        </p>

        <p>
            Pour moi, un bon design n'est pas seulement
            quelque chose de beau. Il doit avoir une identité,
            une fonction et une émotion.
        </p>

    </div>

</section>


<!-- PROJECTS -->

<section id="projects" class="reveal">

    <div class="label">
        02 / SELECTED WORK
    </div>

    <div class="projects-header">

        <h2 class="section-title">
            MY<br>
            <span>PROJECTS.</span>
        </h2>

        <p>
            Quelques projets imaginés,
            conçus et développés avec passion.
        </p>

    </div>


    <?php foreach($projects as $project): ?>

        <div class="project">

            <div class="project-number">
                <?= $project["number"] ?>
            </div>

            <div>

                <div class="project-title">
                    <?= $project["title"] ?>
                </div>

                <div class="project-description">
                    <?= $project["description"] ?>
                </div>

            </div>

            <div class="project-category">
                <?= $project["category"] ?>
            </div>

            <div class="project-arrow">
                ↗
            </div>

        </div>

    <?php endforeach; ?>

</section>


<!-- SKILLS -->

<section class="skills reveal" id="skills">

    <div class="label">
        03 / EXPERTISE
    </div>

    <h2 class="section-title">
        WHAT<br>
        I <span>DO.</span>
    </h2>


    <div class="skills-grid">

        <div class="skill">

            <div class="skill-number">
                01
            </div>

            <h3>
                UI / UX DESIGN
            </h3>

            <p>
                Création d'interfaces modernes,
                intuitives et centrées sur l'utilisateur.
            </p>

        </div>


        <div class="skill">

            <div class="skill-number">
                02
            </div>

            <h3>
                WEB DEVELOPMENT
            </h3>

            <p>
                Développement de sites rapides,
                responsives et interactifs.
            </p>

        </div>


        <div class="skill">

            <div class="skill-number">
                03
            </div>

            <h3>
                BRANDING
            </h3>

            <p>
                Création d'identités visuelles
                fortes et reconnaissables.
            </p>

        </div>


        <div class="skill">

            <div class="skill-number">
                04
            </div>

            <h3>
                CREATIVE DESIGN
            </h3>

            <p>
                Concepts visuels originaux,
                affiches, réseaux sociaux et contenus digitaux.
            </p>

        </div>

    </div>

</section>


<!-- CONTACT -->

<section class="contact reveal" id="contact">

    <div class="label">
        04 / GET IN TOUCH
    </div>

    <h2>
        HAVE AN<br>
        <span>IDEA?</span>
    </h2>

    <a href="mailto:houssam@example.com" class="email">
        houssam@example.com ↗
    </a>

</section>


<!-- FOOTER -->

<footer>

    <div>
        © 2026 <?= $name ?> — ALL RIGHTS RESERVED
    </div>

    <div class="socials">

        <a href="#">
            INSTAGRAM
        </a>

        <a href="#">
            LINKEDIN
        </a>

        <a href="#">
            BEHANCE
        </a>

    </div>

</footer>


<script>

/* =========================
   CURSOR
========================= */

const cursor = document.querySelector(".cursor");

document.addEventListener("mousemove", function(e){

    cursor.style.left = e.clientX + "px";
    cursor.style.top = e.clientY + "px";

});


/* =========================
   CURSOR HOVER
========================= */

const links = document.querySelectorAll("a, .project");

links.forEach(link => {

    link.addEventListener("mouseenter", () => {

        cursor.style.width = "45px";
        cursor.style.height = "45px";

        cursor.style.background = "rgba(200,255,0,.15)";

    });

    link.addEventListener("mouseleave", () => {

        cursor.style.width = "18px";
        cursor.style.height = "18px";

        cursor.style.background = "transparent";

    });

});


/* =========================
   SCROLL REVEAL
========================= */

const revealElements =
document.querySelectorAll(".reveal");

const observer =
new IntersectionObserver(

    function(entries){

        entries.forEach(entry => {

            if(entry.isIntersecting){

                entry.target.classList.add("active");

            }

        });

    },

    {
        threshold:.15
    }

);

revealElements.forEach(element => {

    observer.observe(element);

});


/* =========================
   3D PROJECT EFFECT
========================= */

const projects =
document.querySelectorAll(".project");

projects.forEach(project => {

    project.addEventListener("mousemove", function(e){

        const rect =
        project.getBoundingClientRect();

        const x =
        e.clientX - rect.left;

        const percent =
        (x / rect.width - .5) * 10;

        project.style.transform =
        `perspective(800px)
         rotateY(${percent}deg)`;

    });

    project.addEventListener("mouseleave", function(){

        project.style.transform =
        "perspective(800px) rotateY(0deg)";

    });

});


/* =========================
   DYNAMIC TITLE
========================= */

const titles = [
    "CREATIVE PORTFOLIO",
    "DESIGN × CODE",
    "WELCOME TO MY WORLD"
];

let titleIndex = 0;

setInterval(() => {

    titleIndex++;

    if(titleIndex >= titles.length){
        titleIndex = 0;
    }

    document.title =
    "HOUSSAM — " + titles[titleIndex];

}, 2500);

</script>


</body>

</html>
```
