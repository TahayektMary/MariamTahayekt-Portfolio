```php
<?php

$name = "Mariam Tahayekt";
$job = "Développeuse Web";
$email = "votreemail@gmail.com";

/*
|--------------------------------------------------------------------------
| LIENS
|--------------------------------------------------------------------------
*/

$github = "#";
$linkedin = "#";
$instagram = "#";


/*
|--------------------------------------------------------------------------
| COMPÉTENCES
|--------------------------------------------------------------------------
*/

$skills = [
    [
        "name" => "HTML5",
        "icon" => "bi-filetype-html",
        "level" => "90%"
    ],
    [
        "name" => "CSS3",
        "icon" => "bi-filetype-css",
        "level" => "85%"
    ],
    [
        "name" => "JavaScript",
        "icon" => "bi-filetype-js",
        "level" => "75%"
    ],
    [
        "name" => "PHP",
        "icon" => "bi-filetype-php",
        "level" => "85%"
    ],
    [
        "name" => "MySQL",
        "icon" => "bi-database",
        "level" => "80%"
    ],
    [
        "name" => "Bootstrap",
        "icon" => "bi-bootstrap",
        "level" => "85%"
    ]
];


/*
|--------------------------------------------------------------------------
| PROJETS
|--------------------------------------------------------------------------
|
| IMPORTANT :
| Remplace les noms des images/PDF par les vrais noms
| qui existent dans :
|
| public/image/
| public/doc/
|
*/

$projects = [

    [
        "title" => "QuickAnnonce",
        "category" => "Application Web",
        "description" =>
            "Application web permettant aux utilisateurs de publier, consulter et gérer des annonces de manière simple et efficace.",
        "image" => "public/image/quickannonce.png",
        "document" => "public/doc/quickannonce.pdf",
        "technologies" => ["PHP", "MySQL", "HTML", "CSS", "JavaScript"]
    ],

    [
        "title" => "Annovia",
        "category" => "Projet Web",
        "description" =>
            "Plateforme web professionnelle destinée à la gestion et à la publication d'annonces.",
        "image" => "public/image/annovia.png",
        "document" => "public/doc/annovia.pdf",
        "technologies" => ["PHP", "MySQL", "Bootstrap"]
    ],

    [
        "title" => "Portfolio Professionnel",
        "category" => "Portfolio",
        "description" =>
            "Portfolio personnel moderne présentant mes compétences, mes projets, mes réalisations et mon parcours.",
        "image" => "public/image/mariam.jpg",
        "document" => "public/doc/portfolio.pdf",
        "technologies" => ["PHP", "HTML", "CSS", "Bootstrap"]
    ]

];

?>

<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <meta name="description"
          content="Portfolio professionnel de <?= htmlspecialchars($name); ?>">

    <meta name="author"
          content="<?= htmlspecialchars($name); ?>">

    <title>
        <?= htmlspecialchars($name); ?> | Portfolio
    </title>


    <!-- Google Fonts -->

    <link rel="preconnect"
          href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@500;600;700;800&display=swap"
          rel="stylesheet">


    <!-- Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">


    <!-- Bootstrap Icons -->

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <style>

        /* =====================================================
           VARIABLES
        ===================================================== */

        :root {

            --primary: #2563eb;

            --primary-dark: #1d4ed8;

            --secondary: #7c3aed;

            --dark: #0f172a;

            --dark-2: #1e293b;

            --text: #475569;

            --muted: #94a3b8;

            --light: #f8fafc;

            --white: #ffffff;

            --border: #e2e8f0;

            --gradient:
                linear-gradient(
                    135deg,
                    #2563eb,
                    #7c3aed
                );

            --shadow:
                0 20px 50px rgba(15, 23, 42, 0.08);

        }


        /* =====================================================
           GLOBAL
        ===================================================== */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        html {
            scroll-behavior: smooth;
        }


        body {

            font-family: "Inter", sans-serif;

            background: var(--white);

            color: var(--text);

            overflow-x: hidden;

            transition:
                background 0.3s ease,
                color 0.3s ease;

        }


        h1,
        h2,
        h3,
        h4,
        h5 {

            font-family: "Poppins", sans-serif;

            color: var(--dark);

        }


        a {
            text-decoration: none;
        }


        section {
            padding: 100px 0;
        }


        .container {
            max-width: 1180px;
        }


        /* =====================================================
           PRELOADER
        ===================================================== */

        #preloader {

            position: fixed;

            inset: 0;

            background: white;

            display: flex;

            align-items: center;

            justify-content: center;

            z-index: 9999;

            transition: opacity 0.5s ease;

        }


        .loader {

            width: 50px;

            height: 50px;

            border: 4px solid #e2e8f0;

            border-top-color: var(--primary);

            border-radius: 50%;

            animation: spin 1s linear infinite;

        }


        @keyframes spin {

            to {
                transform: rotate(360deg);
            }

        }


        /* =====================================================
           NAVBAR
        ===================================================== */

        .navbar {

            background: rgba(255,255,255,0.92);

            backdrop-filter: blur(15px);

            border-bottom: 1px solid rgba(226,232,240,0.7);

            transition: 0.3s;

            padding: 18px 0;

        }


        .navbar.scrolled {

            padding: 12px 0;

            box-shadow:
                0 5px 25px rgba(15,23,42,0.08);

        }


        .navbar-brand {

            font-family: "Poppins";

            font-size: 25px;

            font-weight: 800;

            color: var(--dark);

        }


        .navbar-brand span {
            color: var(--primary);
        }


        .nav-link {

            color: #475569 !important;

            font-weight: 500;

            margin-left: 20px;

            position: relative;

            transition: 0.3s;

        }


        .nav-link:hover,
        .nav-link.active {

            color: var(--primary) !important;

        }


        .nav-link::after {

            content: "";

            position: absolute;

            left: 0;

            bottom: -8px;

            width: 0;

            height: 2px;

            background: var(--primary);

            transition: 0.3s;

        }


        .nav-link:hover::after,
        .nav-link.active::after {

            width: 100%;

        }


        .theme-btn {

            border: none;

            background: #eff6ff;

            color: var(--primary);

            width: 40px;

            height: 40px;

            border-radius: 50%;

            margin-left: 20px;

            transition: 0.3s;

        }


        .theme-btn:hover {

            transform: rotate(20deg);

            background: var(--primary);

            color: white;

        }


        /* =====================================================
           HERO
        ===================================================== */

        .hero {

            min-height: 100vh;

            display: flex;

            align-items: center;

            position: relative;

            overflow: hidden;

            background:

                radial-gradient(
                    circle at 10% 20%,
                    rgba(37,99,235,0.10),
                    transparent 30%
                ),

                radial-gradient(
                    circle at 90% 80%,
                    rgba(124,58,237,0.10),
                    transparent 30%
                ),

                #ffffff;

        }


        .hero-content {

            position: relative;

            z-index: 2;

        }


        .hero-badge {

            display: inline-flex;

            align-items: center;

            gap: 8px;

            background: #eff6ff;

            color: var(--primary);

            padding: 9px 16px;

            border-radius: 30px;

            font-size: 14px;

            font-weight: 600;

            margin-bottom: 25px;

        }


        .hero-badge span {

            width: 8px;

            height: 8px;

            background: #22c55e;

            border-radius: 50%;

            animation: pulse 1.5s infinite;

        }


        @keyframes pulse {

            0% {
                box-shadow: 0 0 0 0 rgba(34,197,94,0.5);
            }

            70% {
                box-shadow: 0 0 0 10px rgba(34,197,94,0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(34,197,94,0);
            }

        }


        .hero h1 {

            font-size: clamp(42px, 6vw, 72px);

            line-height: 1.1;

            font-weight: 800;

            margin-bottom: 20px;

        }


        .hero h1 span {

            background: var(--gradient);

            -webkit-background-clip: text;

            -webkit-text-fill-color: transparent;

        }


        .hero h2 {

            font-size: 25px;

            color: var(--text);

            font-weight: 600;

            margin-bottom: 20px;

        }


        .hero p {

            max-width: 650px;

            font-size: 17px;

            line-height: 1.8;

            color: var(--text);

            margin-bottom: 30px;

        }


        .hero-buttons {

            display: flex;

            gap: 15px;

            flex-wrap: wrap;

        }


        .btn-primary-custom {

            background: var(--gradient);

            color: white;

            padding: 13px 25px;

            border-radius: 10px;

            font-weight: 600;

            border: none;

            display: inline-flex;

            align-items: center;

            gap: 8px;

            transition: 0.3s;

            box-shadow:
                0 10px 25px rgba(37,99,235,0.20);

        }


        .btn-primary-custom:hover {

            color: white;

            transform: translateY(-4px);

            box-shadow:
                0 15px 30px rgba(37,99,235,0.30);

        }


        .btn-secondary-custom {

            border: 1px solid var(--border);

            color: var(--dark);

            background: white;

            padding: 12px 25px;

            border-radius: 10px;

            font-weight: 600;

            display: inline-flex;

            align-items: center;

            gap: 8px;

            transition: 0.3s;

        }


        .btn-secondary-custom:hover {

            border-color: var(--primary);

            color: var(--primary);

            transform: translateY(-4px);

        }


        /* Hero visual */

        .hero-visual {

            position: relative;

            display: flex;

            justify-content: center;

            align-items: center;

        }


        .hero-circle {

            width: 390px;

            height: 390px;

            border-radius: 50%;

            background: var(--gradient);

            padding: 8px;

            animation: floating 5s ease-in-out infinite;

        }


        .hero-circle-inner {

            width: 100%;

            height: 100%;

            border-radius: 50%;

            background: #eef2ff;

            display: flex;

            align-items: center;

            justify-content: center;

            overflow: hidden;

        }


        .hero-circle-inner img {

            width: 100%;

            height: 100%;

            object-fit: cover;

        }


        .floating-card {

            position: absolute;

            background: white;

            padding: 15px 20px;

            border-radius: 14px;

            box-shadow: var(--shadow);

            display: flex;

            align-items: center;

            gap: 12px;

            font-weight: 600;

            color: var(--dark);

        }


        .floating-card i {

            color: var(--primary);

            font-size: 25px;

        }


        .floating-card.one {

            top: 10%;

            left: 0;

        }


        .floating-card.two {

            bottom: 10%;

            right: 0;

        }


        @keyframes floating {

            0%,100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-15px);
            }

        }


        /* =====================================================
           SECTION HEADER
        ===================================================== */

        .section-header {

            text-align: center;

            max-width: 700px;

            margin: 0 auto 60px;

        }


        .section-label {

            color: var(--primary);

            font-size: 14px;

            font-weight: 700;

            text-transform: uppercase;

            letter-spacing: 2px;

            margin-bottom: 10px;

        }


        .section-header h2 {

            font-size: 42px;

            font-weight: 800;

            margin-bottom: 15px;

        }


        .section-header h2 span {

            color: var(--primary);

        }


        .section-header p {

            line-height: 1.8;

        }


        /* =====================================================
           ABOUT
        ===================================================== */

        #about {

            background: var(--light);

        }


        .about-card {

            background: white;

            border: 1px solid var(--border);

            border-radius: 20px;

            padding: 40px;

            box-shadow: var(--shadow);

        }


        .about-card h3 {

            font-size: 28px;

            margin-bottom: 20px;

        }


        .about-card p {

            line-height: 1.9;

            margin-bottom: 15px;

        }


        .about-info {

            margin-top: 25px;

            display: grid;

            grid-template-columns: repeat(2,1fr);

            gap: 15px;

        }


        .info-item {

            padding: 15px;

            border-radius: 10px;

            background: #f8fafc;

        }


        .info-item small {

            display: block;

            color: var(--muted);

            margin-bottom: 5px;

        }


        .info-item strong {

            color: var(--dark);

        }


        /* =====================================================
           STATS
        ===================================================== */

        .stats {

            padding: 40px 0;

            background: var(--gradient);

        }


        .stat {

            text-align: center;

            color: white;

        }


        .stat h3 {

            color: white;

            font-size: 40px;

            font-weight: 800;

        }


        .stat p {

            color: rgba(255,255,255,0.8);

            margin: 0;

        }


        /* =====================================================
           SKILLS
        ===================================================== */

        .skill-card {

            background: white;

            border: 1px solid var(--border);

            padding: 30px;

            border-radius: 18px;

            height: 100%;

            transition: 0.35s;

        }


        .skill-card:hover {

            transform: translateY(-8px);

            box-shadow: var(--shadow);

            border-color: #bfdbfe;

        }


        .skill-icon {

            width: 55px;

            height: 55px;

            background: #eff6ff;

            color: var(--primary);

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 12px;

            font-size: 27px;

            margin-bottom: 20px;

        }


        .skill-card h4 {

            font-size: 19px;

            margin-bottom: 15px;

        }


        .progress {

            height: 7px;

            background: #e2e8f0;

            border-radius: 10px;

        }


        .progress-bar {

            background: var(--gradient);

            border-radius: 10px;

        }


        .skill-percent {

            font-size: 13px;

            color: var(--muted);

            float: right;

        }


        /* =====================================================
           PROJECTS
        ===================================================== */

        #projects {

            background: var(--light);

        }


        .filter-buttons {

            display: flex;

            justify-content: center;

            flex-wrap: wrap;

            gap: 10px;

            margin-bottom: 45px;

        }


        .filter-btn {

            border: 1px solid var(--border);

            background: white;

            color: var(--text);

            padding: 9px 18px;

            border-radius: 30px;

            font-weight: 500;

            cursor: pointer;

            transition: 0.3s;

        }


        .filter-btn:hover,
        .filter-btn.active {

            background: var(--primary);

            color: white;

            border-color: var(--primary);

        }


        .project-card {

            background: white;

            border: 1px solid var(--border);

            border-radius: 20px;

            overflow: hidden;

            height: 100%;

            transition: 0.4s;

        }


        .project-card:hover {

            transform: translateY(-10px);

            box-shadow:
                0 25px 50px rgba(15,23,42,0.12);

        }


        .project-image {

            position: relative;

            height: 230px;

            overflow: hidden;

            background: #e2e8f0;

        }


        .project-image img {

            width: 100%;

            height: 100%;

            object-fit: cover;

            transition: 0.5s;

        }


        .project-card:hover .project-image img {

            transform: scale(1.08);

        }


        .project-overlay {

            position: absolute;

            inset: 0;

            background:
                rgba(15,23,42,0.75);

            display: flex;

            align-items: center;

            justify-content: center;

            opacity: 0;

            transition: 0.4s;

        }


        .project-card:hover .project-overlay {

            opacity: 1;

        }


        .project-view {

            background: white;

            color: var(--dark);

            padding: 11px 18px;

            border-radius: 10px;

            font-weight: 600;

            display: inline-flex;

            align-items: center;

            gap: 8px;

            transform: translateY(15px);

            transition: 0.4s;

        }


        .project-card:hover .project-view {

            transform: translateY(0);

        }


        .project-content {

            padding: 25px;

        }


        .project-category {

            color: var(--primary);

            font-size: 13px;

            font-weight: 700;

            text-transform: uppercase;

            letter-spacing: 1px;

        }


        .project-content h3 {

            font-size: 23px;

            margin: 8px 0 12px;

        }


        .project-content p {

            line-height: 1.7;

            font-size: 15px;

        }


        .technologies {

            display: flex;

            flex-wrap: wrap;

            gap: 6px;

            margin: 18px 0;

        }


        .technologies span {

            background: #eff6ff;

            color: var(--primary);

            padding: 6px 10px;

            border-radius: 20px;

            font-size: 12px;

            font-weight: 600;

        }


        .project-link {

            color: var(--primary);

            font-weight: 600;

            display: inline-flex;

            align-items: center;

            gap: 8px;

            transition: 0.3s;

        }


        .project-link:hover {

            color: var(--secondary);

            gap: 12px;

        }


        /* =====================================================
           CONTACT
        ===================================================== */

        #contact {

            background: var(--dark);

        }


        #contact .section-header h2 {

            color: white;

        }


        #contact .section-header p {

            color: #94a3b8;

        }


        .contact-card {

            background: #1e293b;

            border: 1px solid #334155;

            border-radius: 20px;

            padding: 40px;

        }


        .contact-item {

            display: flex;

            align-items: center;

            gap: 15px;

            margin-bottom: 25px;

        }


        .contact-icon {

            width: 50px;

            height: 50px;

            border-radius: 12px;

            background: rgba(37,99,235,0.15);

            color: #60a5fa;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 22px;

        }


        .contact-item h5 {

            color: white;

            font-size: 16px;

            margin-bottom: 3px;

        }


        .contact-item p {

            color: #94a3b8;

            margin: 0;

        }


        .form-control {

            background: #0f172a;

            border: 1px solid #334155;

            color: white;

            padding: 13px 15px;

            border-radius: 10px;

            margin-bottom: 15px;

        }


        .form-control:focus {

            background: #0f172a;

            color: white;

            border-color: #60a5fa;

            box-shadow: none;

        }


        .form-control::placeholder {

            color: #64748b;

        }


        /* =====================================================
           FOOTER
        ===================================================== */

        footer {

            background: #020617;

            color: #64748b;

            padding: 30px 0;

        }


        .social-links {

            display: flex;

            justify-content: center;

            gap: 12px;

            margin-bottom: 15px;

        }


        .social-links a {

            width: 42px;

            height: 42px;

            border-radius: 50%;

            background: #0f172a;

            color: white;

            display: flex;

            align-items: center;

            justify-content: center;

            transition: 0.3s;

        }


        .social-links a:hover {

            background: var(--primary);

            transform: translateY(-4px);

        }


        footer p {
            text-align: center;
            margin: 0;
        }


        /* =====================================================
           SCROLL TOP
        ===================================================== */

        #scrollTop {

            position: fixed;

            right: 25px;

            bottom: 25px;

            width: 45px;

            height: 45px;

            border: none;

            border-radius: 50%;

            background: var(--primary);

            color: white;

            display: none;

            align-items: center;

            justify-content: center;

            cursor: pointer;

            z-index: 1000;

            box-shadow:
                0 10px 25px rgba(37,99,235,0.3);

        }


        #scrollTop.show {

            display: flex;

        }


        /* =====================================================
           REVEAL ANIMATION
        ===================================================== */

        .reveal {

            opacity: 0;

            transform: translateY(30px);

            transition: all 0.7s ease;

        }


        .reveal.active {

            opacity: 1;

            transform: translateY(0);

        }


        /* =====================================================
           DARK MODE
        ===================================================== */

        body.dark {

            background: #020617;

            color: #cbd5e1;

        }


        body.dark h1,
        body.dark h2,
        body.dark h3,
        body.dark h4,
        body.dark h5 {

            color: white;

        }


        body.dark .navbar {

            background: rgba(2,6,23,0.92);

            border-color: #1e293b;

        }


        body.dark .navbar-brand {

            color: white;

        }


        body.dark .nav-link {

            color: #cbd5e1 !important;

        }


        body.dark .hero {

            background: #020617;

        }


        body.dark #about,
        body.dark #projects {

            background: #0f172a;

        }


        body.dark .about-card,
        body.dark .skill-card,
        body.dark .project-card,
        body.dark .btn-secondary-custom,
        body.dark .filter-btn {

            background: #111827;

            border-color: #1e293b;

            color: #cbd5e1;

        }


        body.dark .info-item {

            background: #0f172a;

        }


        body.dark .info-item strong {

            color: white;

        }


        body.dark .project-content p {

            color: #94a3b8;

        }


        body.dark .theme-btn {

            background: #1e293b;

        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 991px) {

            .hero {

                padding-top: 130px;

                text-align: center;

            }


            .hero p {

                margin-left: auto;

                margin-right: auto;

            }


            .hero-buttons {

                justify-content: center;

            }


            .hero-visual {

                margin-top: 70px;

            }


            .nav-link {

                margin-left: 0;

                padding: 10px 0;

            }


            .theme-btn {

                margin-left: 0;

                margin-top: 10px;

            }

        }


        @media (max-width: 576px) {

            section {

                padding: 75px 0;

            }


            .hero-circle {

                width: 280px;

                height: 280px;

            }


            .floating-card {

                padding: 10px 14px;

                font-size: 12px;

            }


            .floating-card.one {

                left: -10px;

            }


            .floating-card.two {

                right: -10px;

            }


            .section-header h2 {

                font-size: 32px;

            }


            .about-card,
            .contact-card {

                padding: 25px;

            }


            .about-info {

                grid-template-columns: 1fr;

            }

        }

    </style>

</head>


<body>


<!-- =====================================================
     PRELOADER
===================================================== -->

<div id="preloader">

    <div class="loader"></div>

</div>



<!-- =====================================================
     NAVBAR
===================================================== -->

<nav class="navbar navbar-expand-lg fixed-top">

    <div class="container">

        <a class="navbar-brand"
           href="#home">

            Mariam<span>.</span>

        </a>


        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu">

            <span class="navbar-toggler-icon"></span>

        </button>


        <div class="collapse navbar-collapse"
             id="navbarMenu">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">

                    <a class="nav-link active"
                       href="#home">

                        Accueil

                    </a>

                </li>


                <li class="nav-item">

                    <a class="nav-link"
                       href="#about">

                        À propos

                    </a>

                </li>


                <li class="nav-item">

                    <a class="nav-link"
                       href="#skills">

                        Compétences

                    </a>

                </li>


                <li class="nav-item">

                    <a class="nav-link"
                       href="#projects">

                        Projets

                    </a>

                </li>


                <li class="nav-item">

                    <a class="nav-link"
                       href="#contact">

                        Contact

                    </a>

                </li>


                <li class="nav-item">

                    <button id="themeToggle"
                            class="theme-btn">

                        <i class="bi bi-moon-fill"></i>

                    </button>

                </li>

            </ul>

        </div>

    </div>

</nav>



<!-- =====================================================
     HERO
===================================================== -->

<section class="hero"
         id="home">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-7">

                <div class="hero-content reveal">

                    <div class="hero-badge">

                        <span></span>

                        Disponible pour de nouveaux projets

                    </div>


                    <h1>

                        Bonjour, je suis
                        <br>

                        <span>
                            <?= htmlspecialchars($name); ?>
                        </span>

                    </h1>


                    <h2>

                        <?= htmlspecialchars($job); ?>

                    </h2>


                    <p>

                        Je conçois et développe des solutions web
                        modernes, performantes et adaptées aux
                        besoins des utilisateurs. Découvrez mon
                        parcours, mes compétences et les projets
                        que j'ai réalisés.

                    </p>


                    <div class="hero-buttons">

                        <a href="#projects"
                           class="btn-primary-custom">

                            Découvrir mes projets

                            <i class="bi bi-arrow-down"></i>

                        </a>


                        <a href="#contact"
                           class="btn-secondary-custom">

                            Me contacter

                            <i class="bi bi-send"></i>

                        </a>

                    </div>

                </div>

            </div>


            <div class="col-lg-5">

                <div class="hero-visual reveal">

                    <div class="hero-circle">

                        <div class="hero-circle-inner">

                            <img src="public/image/mariam.jpg"
                                 alt="Photo de <?= htmlspecialchars($name); ?>">

                        </div>

                    </div>


                    <div class="floating-card one">

                        <i class="bi bi-code-slash"></i>

                        <span>
                            Web Development
                        </span>

                    </div>


                    <div class="floating-card two">

                        <i class="bi bi-laptop"></i>

                        <span>
                            Projets Web
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =====================================================
     ABOUT
===================================================== -->

<section id="about">

    <div class="container">

        <div class="section-header reveal">

            <div class="section-label">
                À propos
            </div>

            <h2>
                Qui <span>suis-je ?</span>
            </h2>

            <p>
                Découvrez mon parcours et ma passion pour
                le développement web.
            </p>

        </div>


        <div class="about-card reveal">

            <div class="row align-items-center">

                <div class="col-lg-7">

                    <h3>
                        Une passion pour la création digitale
                    </h3>


                    <p>

                        Je suis <?= htmlspecialchars($name); ?>,
                        développeuse web passionnée par la création
                        de sites et d'applications modernes.

                    </p>


                    <p>

                        J'aime transformer des idées en solutions
                        digitales simples, efficaces et agréables
                        à utiliser. Chaque projet représente pour
                        moi une opportunité d'apprendre, d'améliorer
                        mes compétences et de proposer une solution
                        adaptée aux besoins du client.

                    </p>


                    <a href="#contact"
                       class="btn-primary-custom mt-3">

                        Collaborons ensemble

                        <i class="bi bi-arrow-right"></i>

                    </a>

                </div>


                <div class="col-lg-5 mt-4 mt-lg-0">

                    <div class="about-info">

                        <div class="info-item">

                            <small>
                                Nom
                            </small>

                            <strong>
                                <?= htmlspecialchars($name); ?>
                            </strong>

                        </div>


                        <div class="info-item">

                            <small>
                                Domaine
                            </small>

                            <strong>
                                Développement Web
                            </strong>

                        </div>


                        <div class="info-item">

                            <small>
                                Technologies
                            </small>

                            <strong>
                                PHP / JS / MySQL
                            </strong>

                        </div>


                        <div class="info-item">

                            <small>
                                Disponibilité
                            </small>

                            <strong>
                                Disponible
                            </strong>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =====================================================
     STATS
===================================================== -->

<div class="stats">

    <div class="container">

        <div class="row">

            <div class="col-md-3 col-6 mb-4 mb-md-0">

                <div class="stat">

                    <h3>
                        <span class="counter"
                              data-target="10">
                            0
                        </span>+
                    </h3>

                    <p>
                        Projets réalisés
                    </p>

                </div>

            </div>


            <div class="col-md-3 col-6 mb-4 mb-md-0">

                <div class="stat">

                    <h3>
                        <span class="counter"
                              data-target="6">
                            0
                        </span>+
                    </h3>

                    <p>
                        Technologies
                    </p>

                </div>

            </div>


            <div class="col-md-3 col-6">

                <div class="stat">

                    <h3>
                        <span class="counter"
                              data-target="100">
                            0
                        </span>%
                    </h3>

                    <p>
                        Motivation
                    </p>

                </div>

            </div>


            <div class="col-md-3 col-6">

                <div class="stat">

                    <h3>
                        <span class="counter"
                              data-target="24">
                            0
                        </span>/7
                    </h3>

                    <p>
                        Créativité
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>



<!-- =====================================================
     SKILLS
===================================================== -->

<section id="skills">

    <div class="container">

        <div class="section-header reveal">

            <div class="section-label">
                Compétences
            </div>

            <h2>
                Mes <span>compétences</span>
            </h2>

            <p>

                Les principales technologies et outils
                que j'utilise dans mes projets.

            </p>

        </div>


        <div class="row g-4">

            <?php foreach ($skills as $skill): ?>

                <div class="col-lg-4 col-md-6">

                    <div class="skill-card reveal">

                        <div class="skill-icon">

                            <i class="bi <?= $skill['icon']; ?>"></i>

                        </div>


                        <h4>

                            <?= htmlspecialchars($skill['name']); ?>

                            <span class="skill-percent">

                                <?= $skill['level']; ?>

                            </span>

                        </h4>


                        <div class="progress">

                            <div class="progress-bar"
                                 style="width: <?= $skill['level']; ?>">
                            </div>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>



<!-- =====================================================
     PROJECTS
===================================================== -->

<section id="projects">

    <div class="container">

        <div class="section-header reveal">

            <div class="section-label">
                Portfolio
            </div>

            <h2>
                Mes <span>projets réalisés</span>
            </h2>

            <p>

                Découvrez une sélection de mes travaux.
                Cliquez sur un projet pour consulter
                sa documentation.

            </p>

        </div>


        <!-- FILTER -->

        <div class="filter-buttons reveal">

            <button class="filter-btn active"
                    data-filter="all">

                Tous

            </button>


            <button class="filter-btn"
                    data-filter="Application Web">

                Applications Web

            </button>


            <button class="filter-btn"
                    data-filter="Projet Web">

                Projets Web

            </button>


            <button class="filter-btn"
                    data-filter="Portfolio">

                Portfolio

            </button>

        </div>


        <!-- PROJECT CARDS -->

        <div class="row g-4"
             id="projectsContainer">

            <?php foreach ($projects as $project): ?>

                <div class="col-lg-4 col-md-6 project-item"
                     data-category="<?= htmlspecialchars($project['category']); ?>">

                    <div class="project-card reveal">


                        <!-- IMAGE -->

                        <div class="project-image">

                            <img
                                src="<?= htmlspecialchars($project['image']); ?>"
                                alt="<?= htmlspecialchars($project['title']); ?>"
                                onerror="this.src='https://via.placeholder.com/800x500?text=Projet';"
                            >


                            <!-- OVERLAY -->

                            <div class="project-overlay">

                                <a
                                    href="<?= htmlspecialchars($project['document']); ?>"
                                    target="_blank"
                                    class="project-view">

                                    <i class="bi bi-file-earmark-pdf"></i>

                                    Voir le document

                                </a>

                            </div>

                        </div>


                        <!-- CONTENT -->

                        <div class="project-content">

                            <div class="project-category">

                                <?= htmlspecialchars($project['category']); ?>

                            </div>


                            <h3>

                                <?= htmlspecialchars($project['title']); ?>

                            </h3>


                            <p>

                                <?= htmlspecialchars($project['description']); ?>

                            </p>


                            <!-- TECHNOLOGIES -->

                            <div class="technologies">

                                <?php foreach ($project['technologies'] as $technology): ?>

                                    <span>

                                        <?= htmlspecialchars($technology); ?>

                                    </span>

                                <?php endforeach; ?>

                            </div>


                            <!-- DOCUMENT -->

                            <a
                                href="<?= htmlspecialchars($project['document']); ?>"
                                target="_blank"
                                class="project-link">

                                Consulter le projet

                                <i class="bi bi-arrow-up-right"></i>

                            </a>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>



<!-- =====================================================
     CONTACT
===================================================== -->

<section id="contact">

    <div class="container">

        <div class="section-header reveal">

            <div class="section-label"
                 style="color:#60a5fa;">

                Contact

            </div>

            <h2>
                Travaillons <span>ensemble</span>
            </h2>

            <p>

                Vous avez un projet ou une idée ?
                N'hésitez pas à me contacter.

            </p>

        </div>


        <div class="contact-card reveal">

            <div class="row">

                <div class="col-lg-5 mb-4 mb-lg-0">


                    <div class="contact-item">

                        <div class="contact-icon">

                            <i class="bi bi-envelope"></i>

                        </div>

                        <div>

                            <h5>
                                Email
                            </h5>

                            <p>
                                <?= htmlspecialchars($email); ?>
                            </p>

                        </div>

                    </div>


                    <div class="contact-item">

                        <div class="contact-icon">

                            <i class="bi bi-code-slash"></i>

                        </div>

                        <div>

                            <h5>
                                GitHub
                            </h5>

                            <p>
                                Mes projets et réalisations
                            </p>

                        </div>

                    </div>


                    <div class="contact-item">

                        <div class="contact-icon">

                            <i class="bi bi-linkedin"></i>

                        </div>

                        <div>

                            <h5>
                                LinkedIn
                            </h5>

                            <p>
                                Mon profil professionnel
                            </p>

                        </div>

                    </div>

                </div>


                <div class="col-lg-7">

                    <form
                        id="contactForm"
                        method="POST"
                        action="mailto:<?= htmlspecialchars($email); ?>"
                        enctype="text/plain"
                    >

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
                            placeholder="Votre adresse email"
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
                            rows="5"
                            class="form-control"
                            placeholder="Votre message..."
                            required
                        ></textarea>


                        <button
                            type="submit"
                            class="btn-primary-custom w-100 justify-content-center">

                            Envoyer le message

                            <i class="bi bi-send"></i>

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =====================================================
     FOOTER
===================================================== -->

<footer>

    <div class="container">

        <div class="social-links">

            <a href="<?= htmlspecialchars($github); ?>"
               target="_blank"
               aria-label="GitHub">

                <i class="bi bi-github"></i>

            </a>


            <a href="<?= htmlspecialchars($linkedin); ?>"
               target="_blank"
               aria-label="LinkedIn">

                <i class="bi bi-linkedin"></i>

            </a>


            <a href="<?= htmlspecialchars($instagram); ?>"
               target="_blank"
               aria-label="Instagram">

                <i class="bi bi-instagram"></i>

            </a>

        </div>


        <p>

            © <?= date("Y"); ?>

            <?= htmlspecialchars($name); ?>

            — Tous droits réservés.

        </p>

    </div>

</footer>



<!-- =====================================================
     SCROLL TOP
===================================================== -->

<button id="scrollTop">

    <i class="bi bi-arrow-up"></i>

</button>



<!-- =====================================================
     BOOTSTRAP JS
===================================================== -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>



<script>

/* =====================================================
   PRELOADER
===================================================== */

window.addEventListener("load", function () {

    const preloader = document.getElementById("preloader");

    setTimeout(() => {

        preloader.style.opacity = "0";

        setTimeout(() => {

            preloader.style.display = "none";

        }, 500);

    }, 400);

});



/* =====================================================
   NAVBAR SCROLL
===================================================== */

window.addEventListener("scroll", function () {

    const navbar =
        document.querySelector(".navbar");

    if (window.scrollY > 50) {

        navbar.classList.add("scrolled");

    } else {

        navbar.classList.remove("scrolled");

    }

});



/* =====================================================
   ACTIVE NAVIGATION
===================================================== */

const sections =
    document.querySelectorAll("section");

const navLinks =
    document.querySelectorAll(".nav-link");


window.addEventListener("scroll", () => {

    let current = "";

    sections.forEach(section => {

        const sectionTop =
            section.offsetTop - 150;

        if (window.scrollY >= sectionTop) {

            current = section.getAttribute("id");

        }

    });


    navLinks.forEach(link => {

        link.classList.remove("active");

        if (
            link.getAttribute("href") === "#" + current
        ) {

            link.classList.add("active");

        }

    });

});



/* =====================================================
   REVEAL ANIMATION
===================================================== */

function revealElements() {

    const reveals =
        document.querySelectorAll(".reveal");

    reveals.forEach(element => {

        const windowHeight =
            window.innerHeight;

        const elementTop =
            element.getBoundingClientRect().top;

        if (elementTop < windowHeight - 80) {

            element.classList.add("active");

        }

    });

}


window.addEventListener(
    "scroll",
    revealElements
);

revealElements();



/* =====================================================
   PROJECT FILTER
===================================================== */

const filterButtons =
    document.querySelectorAll(".filter-btn");

const projectItems =
    document.querySelectorAll(".project-item");


filterButtons.forEach(button => {

    button.addEventListener("click", function () {

        filterButtons.forEach(btn => {

            btn.classList.remove("active");

        });

        this.classList.add("active");


        const filter =
            this.getAttribute("data-filter");


        projectItems.forEach(item => {

            const category =
                item.getAttribute("data-category");


            if (
                filter === "all" ||
                category === filter
            ) {

                item.style.display = "block";

                setTimeout(() => {

                    item.style.opacity = "1";
                    item.style.transform = "scale(1)";

                }, 50);

            } else {

                item.style.opacity = "0";
                item.style.transform = "scale(0.9)";

                setTimeout(() => {

                    item.style.display = "none";

                }, 300);

            }

        });

    });

});



/* =====================================================
   COUNTERS
===================================================== */

let countersStarted = false;


function startCounters() {

    if (countersStarted) return;

    const stats =
        document.querySelector(".stats");

    if (!stats) return;


    const position =
        stats.getBoundingClientRect().top;


    if (position < window.innerHeight - 100) {

        countersStarted = true;


        const counters =
            document.querySelectorAll(".counter");


        counters.forEach(counter => {

            const target =
                Number(counter.dataset.target);

            let current = 0;

            const increment =
                target / 50;


            const updateCounter = () => {

                current += increment;


                if (current < target) {

                    counter.textContent =
                        Math.ceil(current);

                    requestAnimationFrame(
                        updateCounter
                    );

                } else {

                    counter.textContent =
                        target;

                }

            };


            updateCounter();

        });

    }

}


window.addEventListener(
    "scroll",
    startCounters
);

startCounters();



/* =====================================================
   DARK MODE
===================================================== */

const themeToggle =
    document.getElementById("themeToggle");


themeToggle.addEventListener("click", function () {

    document.body.classList.toggle("dark");


    const icon =
        this.querySelector("i");


    if (
        document.body.classList.contains("dark")
    ) {

        icon.classList.remove("bi-moon-fill");

        icon.classList.add("bi-sun-fill");

    } else {

        icon.classList.remove("bi-sun-fill");

        icon.classList.add("bi-moon-fill");

    }

});



/* =====================================================
   SCROLL TOP
===================================================== */

const scrollTop =
    document.getElementById("scrollTop");


window.addEventListener("scroll", function () {

    if (window.scrollY > 500) {

        scrollTop.classList.add("show");

    } else {

        scrollTop.classList.remove("show");

    }

});


scrollTop.addEventListener("click", function () {

    window.scrollTo({

        top: 0,

        behavior: "smooth"

    });

});



/* =====================================================
   CLOSE MOBILE MENU
===================================================== */

const mobileLinks =
    document.querySelectorAll(".nav-link");

const navbarCollapse =
    document.querySelector(".navbar-collapse");


mobileLinks.forEach(link => {

    link.addEventListener("click", () => {

        if (
            navbarCollapse.classList.contains("show")
        ) {

            new bootstrap.Collapse(
                navbarCollapse
            ).hide();

        }

    });

});

</script>


</body>

</html>
```
