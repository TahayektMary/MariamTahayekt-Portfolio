<?php
$projects = [
    [
        "title" => "TD 1 - UML",
        "category" => "UML",
        "image" => "public/image/td1.png",
        "doc" => "public/doc/td1.pdf"
    ]
];

$skills = [
    "HTML / CSS",
    "PHP",
    "JavaScript",
    "MySQL",
    "UML",
    "Git & GitHub"
];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mariam Tahayekt | Portfolio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>
        * {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f8fafc;
            color: #172033;
        }

        /* NAVBAR */
        .navbar {
            background: white;
            box-shadow: 0 2px 15px rgba(0,0,0,.08);
        }

        .navbar-brand {
            color: #2563eb !important;
            font-weight: bold;
        }

        .nav-link {
            color: #172033 !important;
            margin-left: 15px;
        }

        .nav-link:hover {
            color: #2563eb !important;
        }

        /* HERO */
        .hero {
            min-height: 90vh;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, #eff6ff, #ffffff);
        }

        .hero h1 {
            font-size: 50px;
            font-weight: 700;
        }

        .hero h1 span {
            color: #2563eb;
        }

        .hero p {
            color: #64748b;
            font-size: 18px;
        }

        .profile {
            width: 270px;
            height: 270px;
            object-fit: cover;
            border-radius: 50%;
            border: 6px solid white;
            box-shadow: 0 10px 30px rgba(0,0,0,.15);
        }

        .btn-main {
            background: #2563eb;
            color: white;
            padding: 12px 25px;
            border-radius: 8px;
            text-decoration: none;
            display: inline-block;
        }

        .btn-main:hover {
            background: #172033;
            color: white;
        }

        /* SECTIONS */
        section {
            padding: 80px 0;
        }

        .title {
            text-align: center;
            margin-bottom: 45px;
        }

        .title h2 {
            font-weight: bold;
        }

        .title span {
            color: #2563eb;
        }

        /* SKILLS */
        .skill {
            background: white;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,.06);
        }

        .skill:hover {
            transform: translateY(-4px);
            transition: .3s;
        }

        /* PROJECTS */
        .project {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,.08);
            transition: .3s;
            height: 100%;
        }

        .project:hover {
            transform: translateY(-8px);
        }

        .project img {
            width: 100%;
            height: 220px;
            object-fit: cover;
        }

        .project-content {
            padding: 20px;
        }

        .project-content small {
            color: #2563eb;
            font-weight: bold;
        }

        .project-content h3 {
            margin: 8px 0 18px;
        }

        .btn-doc {
            background: #2563eb;
            color: white;
            text-decoration: none;
            padding: 10px 18px;
            border-radius: 7px;
            display: inline-block;
        }

        .btn-doc:hover {
            background: #172033;
            color: white;
        }

        /* CONTACT */
        .contact {
            background: #172033;
            color: white;
            text-align: center;
        }

        .contact p {
            color: #cbd5e1;
        }

        /* FOOTER */
        footer {
            background: #0f172a;
            color: white;
            text-align: center;
            padding: 20px;
        }

        @media (max-width: 768px) {
            .hero {
                text-align: center;
            }

            .hero h1 {
                font-size: 38px;
            }

            .profile {
                width: 220px;
                height: 220px;
                margin-top: 30px;
            }
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">

        <a class="navbar-brand" href="#">
            Mariam Tahayekt
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menu">
            ☰
        </button>

        <div class="collapse navbar-collapse" id="menu">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="#home">Accueil</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#about">À propos</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#skills">Compétences</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#projects">Projets</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>

            </ul>

        </div>
    </div>
</nav>


<!-- HERO -->
<section class="hero" id="home">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-7">

                <p>Bonjour, je suis</p>

                <h1>
                    Mariam <span>Tahayekt</span>
                </h1>

                <h3>Développeuse Web</h3>

                <p>
                    Étudiante passionnée par le développement web,
                    la programmation et la conception des systèmes.
                </p>

                <a href="#projects" class="btn-main">
                    Voir mes projets
                </a>

            </div>

            <div class="col-md-5 text-center">

                <img src="public/image/mariam.jpg"
                     class="profile"
                     alt="Mariam Tahayekt">

            </div>

        </div>

    </div>

</section>


<!-- ABOUT -->
<section id="about">

    <div class="container">

        <div class="title">
            <h2>À <span>propos</span></h2>
        </div>

        <div class="row justify-content-center">

            <div class="col-md-8 text-center">

                <p>
                    Je suis Mariam Tahayekt, étudiante et passionnée
                    par le développement web et les nouvelles technologies.
                </p>

                <p>
                    Je m'intéresse particulièrement à la création
                    d'applications web, aux bases de données et à UML.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- SKILLS -->
<section id="skills">

    <div class="container">

        <div class="title">
            <h2>Mes <span>compétences</span></h2>
        </div>

        <div class="row">

            <?php foreach ($skills as $skill): ?>

                <div class="col-md-4">
                    <div class="skill">
                        <?= $skill ?>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<!-- PROJECTS -->
<section id="projects">

    <div class="container">

        <div class="title">

            <h2>Mes <span>projets & TD</span></h2>

            <p>
                Découvrez mes travaux pratiques et mes réalisations.
            </p>

        </div>

        <div class="row g-4">

            <?php foreach ($projects as $project): ?>

                <div class="col-md-6 col-lg-4">

                    <div class="project">

                        <img src="<?= $project['image'] ?>"
                             alt="<?= $project['title'] ?>">

                        <div class="project-content">

                            <small>
                                <?= $project['category'] ?>
                            </small>

                            <h3>
                                <?= $project['title'] ?>
                            </h3>

                            <a href="<?= $project['doc'] ?>"
                               target="_blank"
                               class="btn-doc">

                                Voir le document →

                            </a>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<!-- CONTACT -->
<section id="contact" class="contact">

    <div class="container">

        <h2>Contactez-moi</h2>

        <p>
            Pour toute question, collaboration ou opportunité.
        </p>

        <a href="mailto:mariam@email.com"
           class="btn btn-light">

            Envoyer un email

        </a>

    </div>

</section>


<!-- FOOTER -->
<footer>

    © <?= date("Y") ?> Mariam Tahayekt — Portfolio

</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

</body>
</html>