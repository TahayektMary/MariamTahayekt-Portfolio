```php
<?php

$name = "Mariam Tahayekt";
$job = "Développeuse Web";

$projects = [
    [
        "title" => "QuickAnnonce",
        "description" => "Application web de gestion et publication des annonces.",
        "image" => "public/image/quickannonce.png",
        "doc" => "public/doc/quickannonce.pdf",
        "tech" => "PHP • MySQL • JavaScript"
    ],
    [
        "title" => "Annovia",
        "description" => "Plateforme web moderne dédiée aux annonces.",
        "image" => "public/image/annovia.png",
        "doc" => "public/doc/annovia.pdf",
        "tech" => "PHP • MySQL • Bootstrap"
    ],
    [
        "title" => "Portfolio",
        "description" => "Portfolio professionnel présentant mes compétences et réalisations.",
        "image" => "public/image/mariam.jpg",
        "doc" => "public/doc/portfolio.pdf",
        "tech" => "PHP • HTML • CSS"
    ]
];

$skills = ["HTML5", "CSS3", "JavaScript", "PHP", "MySQL", "Bootstrap"];

?>

<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?= $name ?> | Portfolio</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
rel="stylesheet">

<style>

:root{
    --primary:#2563eb;
    --secondary:#7c3aed;
    --dark:#0f172a;
    --text:#64748b;
    --light:#f8fafc;
}

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

html{
    scroll-behavior:smooth;
}

body{
    font-family:Inter,sans-serif;
    color:var(--text);
    background:white;
}

section{
    padding:90px 0;
}

h1,h2,h3,h4{
    color:var(--dark);
    font-weight:700;
}

/* NAVBAR */

.navbar{
    background:rgba(255,255,255,.95);
    backdrop-filter:blur(10px);
    box-shadow:0 2px 15px rgba(0,0,0,.05);
}

.navbar-brand{
    font-size:25px;
    font-weight:800;
    color:var(--dark);
}

.navbar-brand span{
    color:var(--primary);
}

.nav-link{
    color:var(--dark)!important;
    font-weight:500;
    margin-left:15px;
}

.nav-link:hover{
    color:var(--primary)!important;
}

/* HERO */

.hero{
    min-height:100vh;
    display:flex;
    align-items:center;
    background:
    linear-gradient(135deg,#fff,#eff6ff);
}

.hero h1{
    font-size:clamp(42px,6vw,70px);
}

.hero h1 span{
    background:linear-gradient(135deg,var(--primary),var(--secondary));
    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
}

.hero h2{
    font-size:25px;
    margin:20px 0;
}

.hero p{
    max-width:600px;
    line-height:1.8;
}

.btn-main{
    display:inline-block;
    background:linear-gradient(135deg,var(--primary),var(--secondary));
    color:white;
    padding:13px 25px;
    border-radius:10px;
    margin-top:15px;
    transition:.3s;
}

.btn-main:hover{
    color:white;
    transform:translateY(-4px);
}

.hero-img{
    width:330px;
    height:330px;
    object-fit:cover;
    border-radius:50%;
    border:7px solid white;
    box-shadow:0 20px 50px rgba(37,99,235,.2);
}

/* TITLES */

.section-title{
    text-align:center;
    margin-bottom:50px;
}

.section-title span{
    color:var(--primary);
}

/* ABOUT */

#about{
    background:var(--light);
}

.about-box{
    background:white;
    padding:35px;
    border-radius:18px;
    box-shadow:0 10px 35px rgba(0,0,0,.06);
}

.about-box p{
    line-height:1.8;
}

/* SKILLS */

.skill{
    padding:20px;
    background:white;
    border:1px solid #e2e8f0;
    border-radius:12px;
    text-align:center;
    transition:.3s;
}

.skill:hover{
    transform:translateY(-6px);
    border-color:var(--primary);
}

.skill i{
    font-size:30px;
    color:var(--primary);
}

/* PROJECTS */

#projects{
    background:var(--light);
}

.project{
    background:white;
    border-radius:18px;
    overflow:hidden;
    height:100%;
    box-shadow:0 8px 25px rgba(0,0,0,.06);
    transition:.4s;
}

.project:hover{
    transform:translateY(-8px);
    box-shadow:0 20px 40px rgba(0,0,0,.12);
}

.project img{
    width:100%;
    height:210px;
    object-fit:cover;
    transition:.4s;
}

.project:hover img{
    transform:scale(1.05);
}

.project-content{
    padding:25px;
}

.project-content p{
    line-height:1.6;
}

.tech{
    color:var(--primary);
    font-size:13px;
    font-weight:600;
    margin:15px 0;
}

.project-link{
    color:var(--primary);
    font-weight:600;
}

.project-link:hover{
    color:var(--secondary);
}

/* CONTACT */

#contact{
    background:var(--dark);
    color:white;
}

#contact h2{
    color:white;
}

.contact-box{
    max-width:650px;
    margin:auto;
}

.form-control{
    margin-bottom:15px;
    padding:13px;
    border-radius:9px;
}

/* FOOTER */

footer{
    background:#020617;
    color:#94a3b8;
    text-align:center;
    padding:25px;
}

.social a{
    color:white;
    font-size:22px;
    margin:0 8px;
}

.social a:hover{
    color:#60a5fa;
}

/* ANIMATION */

.reveal{
    opacity:0;
    transform:translateY(25px);
    transition:.7s;
}

.reveal.show{
    opacity:1;
    transform:translateY(0);
}

@media(max-width:768px){

    .hero{
        text-align:center;
        padding-top:120px;
    }

    .hero p{
        margin:auto;
    }

    .hero-img{
        width:250px;
        height:250px;
        margin-top:50px;
    }

}

</style>
</head>


<body>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg fixed-top">

<div class="container">

<a class="navbar-brand" href="#">
Mariam<span>.</span>
</a>

<button class="navbar-toggler"
data-bs-toggle="collapse"
data-bs-target="#menu">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav ms-auto">

<li><a class="nav-link" href="#home">Accueil</a></li>
<li><a class="nav-link" href="#about">À propos</a></li>
<li><a class="nav-link" href="#skills">Compétences</a></li>
<li><a class="nav-link" href="#projects">Projets</a></li>
<li><a class="nav-link" href="#contact">Contact</a></li>

</ul>

</div>
</div>
</nav>


<!-- HERO -->

<section class="hero" id="home">

<div class="container">

<div class="row align-items-center">

<div class="col-lg-7 reveal">

<p>Bonjour, je suis</p>

<h1>
<?= $name ?>
<br>
<span><?= $job ?></span>
</h1>

<h2>Créative • Passionnée • Développeuse</h2>

<p>
Je conçois des sites web et des applications modernes,
simples et adaptés aux besoins des utilisateurs.
</p>

<a href="#projects" class="btn-main">
Découvrir mes projets
<i class="bi bi-arrow-right"></i>
</a>

</div>


<div class="col-lg-5 text-center reveal">

<img src="public/image/mariam.jpg"
class="hero-img"
alt="<?= $name ?>">

</div>

</div>
</div>
</section>


<!-- ABOUT -->

<section id="about">

<div class="container">

<h2 class="section-title">
À <span>propos</span>
</h2>

<div class="about-box reveal">

<h3>Qui suis-je ?</h3>

<p>
Je suis <?= $name ?>, développeuse web passionnée
par la création de solutions digitales modernes.
</p>

<p>
J'aime transformer les idées en projets fonctionnels,
esthétiques et faciles à utiliser.
</p>

</div>

</div>
</section>


<!-- SKILLS -->

<section id="skills">

<div class="container">

<h2 class="section-title">
Mes <span>compétences</span>
</h2>

<div class="row g-4">

<?php foreach($skills as $skill): ?>

<div class="col-md-4 col-6">

<div class="skill reveal">

<i class="bi bi-code-slash"></i>

<h5 class="mt-3">
<?= $skill ?>
</h5>

</div>

</div>

<?php endforeach; ?>

</div>
</div>
</section>


<!-- PROJECTS -->

<section id="projects">

<div class="container">

<h2 class="section-title">
Mes <span>projets réalisés</span>
</h2>

<div class="row g-4">

<?php foreach($projects as $project): ?>

<div class="col-lg-4 col-md-6">

<div class="project reveal">

<img src="<?= $project['image'] ?>"
alt="<?= $project['title'] ?>">

<div class="project-content">

<h3>
<?= $project['title'] ?>
</h3>

<p>
<?= $project['description'] ?>
</p>

<div class="tech">
<?= $project['tech'] ?>
</div>

<a href="<?= $project['doc'] ?>"
target="_blank"
class="project-link">

Voir le document
<i class="bi bi-arrow-up-right"></i>

</a>

</div>
</div>

</div>

<?php endforeach; ?>

</div>
</div>
</section>


<!-- CONTACT -->

<section id="contact">

<div class="container">

<h2 class="section-title">
Me <span>contacter</span>
</h2>

<div class="contact-box reveal">

<form>

<input
type="text"
class="form-control"
placeholder="Votre nom"
required>

<input
type="email"
class="form-control"
placeholder="Votre email"
required>

<textarea
class="form-control"
rows="5"
placeholder="Votre message"
required></textarea>

<button class="btn-main w-100 border-0">
Envoyer le message
<i class="bi bi-send"></i>
</button>

</form>

</div>

</div>
</section>


<!-- FOOTER -->

<footer>

<div class="social mb-3">

<a href="#">
<i class="bi bi-github"></i>
</a>

<a href="#">
<i class="bi bi-linkedin"></i>
</a>

<a href="#">
<i class="bi bi-instagram"></i>
</a>

</div>

<p>
© <?= date("Y") ?> <?= $name ?> — Tous droits réservés.
</p>

</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>

/* Animation au scroll */

const elements = document.querySelectorAll(".reveal");

function reveal(){

    elements.forEach(el => {

        if(el.getBoundingClientRect().top <
           window.innerHeight - 80){

            el.classList.add("show");

        }

    });

}

window.addEventListener("scroll", reveal);
reveal();

</script>

</body>
</html>
```
