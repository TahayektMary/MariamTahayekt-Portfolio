<?php
// Informations du portfolio
$name = "Mariam Tahayekt";
$job = "Développeuse Web";
$email = "votreemail@gmail.com";

$skills = [
    "HTML5",
    "CSS3",
    "JavaScript",
    "PHP",
    "MySQL",
    "Bootstrap"
];

$projects = [
    [
        "title" => "Annovia",
        "description" => "Plateforme web professionnelle de gestion et publication d'annonces.",
        "technology" => "PHP, MySQL, HTML, CSS"
    ],
    [
        "title" => "Portfolio Personnel",
        "description" => "Portfolio responsive permettant de présenter mes compétences et mes projets.",
        "technology" => "HTML, CSS, JavaScript"
    ],
    [
        "title" => "Application de Gestion",
        "description" => "Application permettant de gérer les utilisateurs et les différentes opérations administratives.",
        "technology" => "PHP, MySQL"
    ]
];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($name); ?> | Portfolio</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

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
            background: #f8f9fa;
            color: #212529;
        }

        /* NAVBAR */

        .navbar {
            background: #111827;
        }

        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
            color: #ffffff !important;
        }

        .nav-link {
            color: #d1d5db !important;
            margin-left: 15px;
            transition: 0.3s;
        }

        .nav-link:hover {
            color: #6366f1 !important;
        }


        /* HERO */

        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;

            background: linear-gradient(
                    135deg,
                    #111827,
                    #1e293b
            );

            color: white;
        }

        .hero h1 {
            font-size: 60px;
            font-weight: 700;
        }

        .hero h1 span {
            color: #818cf8;
        }

        .hero h2 {
            font-size: 28px;
            margin: 20px 0;
            color: #cbd5e1;
        }

        .hero p {
            font-size: 18px;
            color: #94a3b8;
            max-width: 600px;
        }

        .btn-main {
            background: #6366f1;
            color: white;
            padding: 12px 25px;
            border-radius: 8px;
            border: none;
            text-decoration: none;
            margin-right: 10px;
            display: inline-block;
            transition: 0.3s;
        }

        .btn-main:hover {
            background: #4f46e5;
            color: white;
            transform: translateY(-3px);
        }

        .btn-outline-main {
            border: 2px solid #6366f1;
            color: white;
            padding: 10px 25px;
            border-radius: 8px;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn-outline-main:hover {
            background: #6366f1;
            color: white;
        }


        /* SECTIONS */

        section {
            padding: 90px 0;
        }

        .section-title {
            font-size: 38px;
            font-weight: 700;
            margin-bottom: 50px;
            text-align: center;
        }

        .section-title span {
            color: #6366f1;
        }


        /* ABOUT */

        .about-box {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.07);
        }


        /* SKILLS */

        #skills {
            background: #eef2ff;
        }

        .skill-card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            text-align: center;
            margin-bottom: 20px;
            transition: 0.3s;

            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        }

        .skill-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.10);
        }

        .skill-card i {
            font-size: 40px;
            color: #6366f1;
            margin-bottom: 10px;
        }


        /* PROJECTS */

        .project-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            margin-bottom: 30px;
            height: 100%;

            box-shadow: 0 8px 25px rgba(0,0,0,0.08);

            transition: 0.3s;
        }

        .project-card:hover {
            transform: translateY(-8px);
        }

        .project-top {
            height: 180px;

            background: linear-gradient(
                    135deg,
                    #6366f1,
                    #8b5cf6
            );

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .project-top i {
            font-size: 70px;
            color: white;
        }

        .project-content {
            padding: 25px;
        }

        .project-content h3 {
            font-weight: 700;
        }

        .technology {
            color: #6366f1;
            font-size: 14px;
            font-weight: bold;
        }


        /* CONTACT */

        #contact {
            background: #111827;
            color: white;
        }

        .contact-box {
            max-width: 700px;
            margin: auto;
        }

        .form-control {
            padding: 13px;
            margin-bottom: 15px;
            border-radius: 8px;
        }


        /* FOOTER */

        footer {
            background: #030712;
            color: #9ca3af;
            text-align: center;
            padding: 25px 10px;
        }

        .social-links a {
            color: white;
            font-size: 25px;
            margin: 0 10px;
            transition: 0.3s;
        }

        .social-links a:hover {
            color: #6366f1;
        }


        /* RESPONSIVE */

        @media(max-width:768px) {

            .hero {
                text-align: center;
            }

            .hero h1 {
                font-size: 42px;
            }

            .hero h2 {
                font-size: 23px;
            }

            .hero p {
                margin: auto;
                margin-bottom: 30px;
            }
        }

    </style>

</head>

<body>


<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">

    <div class="container">

        <a class="navbar-brand" href="#">
            MT.
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu">

            <span class="navbar-toggler-icon"></span>

        </button>


        <div class="collapse navbar-collapse"
             id="navbarMenu">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="#home">
                        Accueil
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#about">
                        À propos
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#skills">
                        Compétences
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#projects">
                        Projets
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#contact">
                        Contact
                    </a>
                </li>

            </ul>

        </div>

    </div>

</nav>



<!-- HERO -->

<section class="hero" id="home">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-8">

                <p>Bonjour, je suis</p>

                <h1>
                    <?= htmlspecialchars($name); ?>
                </h1>

                <h2>
                    <?= htmlspecialchars($job); ?>
                </h2>

                <p>
                    Passionnée par le développement web,
                    je crée des interfaces modernes,
                    professionnelles et adaptées aux besoins
                    des utilisateurs.
                </p>

                <div class="mt-4">

                    <a href="#projects"
                       class="btn-main">

                        Voir mes projets

                    </a>

                    <a href="#contact"
                       class="btn-outline-main">

                        Me contacter

                    </a>

                </div>

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


        <div class="about-box">

            <div class="row align-items-center">

                <div class="col-lg-8">

                    <h3>Qui suis-je ?</h3>

                    <p class="mt-3">

                        Je suis une développeuse passionnée
                        par la création de sites web et
                        d'applications modernes.

                    </p>

                    <p>

                        Je travaille principalement avec
                        HTML, CSS, JavaScript, PHP et MySQL.
                        Mon objectif est de développer des
                        solutions simples, efficaces et
                        professionnelles.

                    </p>

                    <a href="#contact"
                       class="btn-main mt-3">

                        Travaillons ensemble

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- SKILLS -->

<section id="skills">

    <div class="container">

        <h2 class="section-title">

            Mes <span>compétences</span>

        </h2>


        <div class="row">

            <?php foreach ($skills as $skill): ?>

                <div class="col-lg-4 col-md-6">

                    <div class="skill-card">

                        <i class="bi bi-code-slash"></i>

                        <h4>

                            <?= htmlspecialchars($skill); ?>

                        </h4>

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

            Mes <span>projets</span>

        </h2>


        <div class="row">

            <?php foreach ($projects as $project): ?>

                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="project-card">

                        <div class="project-top">

                            <i class="bi bi-laptop"></i>

                        </div>

                        <div class="project-content">

                            <h3>

                                <?= htmlspecialchars($project['title']); ?>

                            </h3>

                            <p>

                                <?= htmlspecialchars($project['description']); ?>

                            </p>

                            <p class="technology">

                                <?= htmlspecialchars($project['technology']); ?>

                            </p>

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


        <div class="contact-box">

            <form method="POST" action="">

                <input
                    type="text"
                    name="name"
                    class="form-control"
                    placeholder="Votre nom"
                    required
                >

                <input
                    type="email"
                    name="email"
                    class="form-control"
                    placeholder="Votre email"
                    required
                >

                <input
                    type="text"
                    name="subject"
                    class="form-control"
                    placeholder="Sujet"
                    required
                >

                <textarea
                    name="message"
                    class="form-control"
                    rows="5"
                    placeholder="Votre message"
                    required
                ></textarea>

                <button
                    type="submit"
                    class="btn-main w-100">

                    <i class="bi bi-send"></i>
                    Envoyer le message

                </button>

            </form>

        </div>

    </div>

</section>



<!-- FOOTER -->

<footer>

    <div class="social-links mb-3">

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

        © <?= date("Y"); ?>
        <?= htmlspecialchars($name); ?>

        - Tous droits réservés.

    </p>

</footer>



<!-- Bootstrap JS -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

</body>
</html>