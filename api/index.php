```php
<?php
header("Content-Type: text/html; charset=UTF-8");
?>
<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mariam Tahayekt — Développeuse Web & Digital</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>

        :root {
            --bg-dark: #0a0f1d;
            --bg-card: #131b2e;
            --bg-light: #f8fafc;

            --text-main: #0f172a;
            --text-muted: #64748b;
            --text-light: #94a3b8;

            --primary: #0f172a;
            --accent: #6366f1;
            --accent-hover: #4f46e5;
            --accent-soft: rgba(99,102,241,.10);

            --border: #e2e8f0;
            --border-dark: #1e293b;

            --radius-lg: 18px;
            --radius-md: 12px;
            --radius-sm: 8px;

            --shadow-sm: 0 2px 5px rgba(0,0,0,.05);
            --shadow-md: 0 10px 25px -5px rgba(0,0,0,.08);
            --shadow-lg: 0 20px 40px -10px rgba(99,102,241,.18);

            --transition: all .3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background: var(--bg-light);
            color: var(--text-main);
            line-height: 1.6;
            overflow-x: hidden;
        }

        a {
            color: inherit;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 0 1.5rem;
        }

        .section {
            padding: 6rem 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3.5rem;
        }

        .section-title h2 {
            font-size: 2.25rem;
            font-weight: 800;
            color: var(--primary);
        }

        .section-title p {
            color: var(--text-muted);
            margin-top: .5rem;
        }

        /* =========================
           BADGES
        ========================= */

        .badge {
            display: inline-flex;
            align-items: center;
            gap: .4rem;
            padding: .35rem .8rem;
            border-radius: 999px;
            font-size: .8rem;
            font-weight: 700;
            background: var(--accent-soft);
            color: var(--accent);
            margin-bottom: 1rem;
        }

        /* =========================
           BUTTONS
        ========================= */

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: .5rem;

            padding: .85rem 1.5rem;
            border-radius: var(--radius-md);

            font-weight: 600;
            font-size: .9rem;

            text-decoration: none;
            border: none;
            cursor: pointer;

            transition: var(--transition);
        }

        .btn-primary {
            background: var(--accent);
            color: white;
            box-shadow: 0 5px 15px rgba(99,102,241,.3);
        }

        .btn-primary:hover {
            background: var(--accent-hover);
            transform: translateY(-2px);
        }

        .btn-secondary {
            background: white;
            color: var(--text-main);
            border: 1px solid var(--border);
        }

        .btn-secondary:hover {
            background: #f1f5f9;
            transform: translateY(-2px);
        }

        .btn-sm {
            padding: .55rem .9rem;
            font-size: .8rem;
        }

        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;

            background: rgba(255,255,255,.9);
            backdrop-filter: blur(12px);

            z-index: 1000;
            border-bottom: 1px solid var(--border);
        }

        .nav-container {
            height: 80px;

            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            text-decoration: none;
            font-size: 1.4rem;
            font-weight: 800;

            display: flex;
            align-items: center;
            gap: .5rem;
        }

        .logo span {
            color: var(--accent);
        }

        .nav-links {
            display: flex;
            gap: 1.5rem;
            list-style: none;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--text-muted);
            font-size: .9rem;
            font-weight: 600;
            transition: var(--transition);
        }

        .nav-links a:hover {
            color: var(--accent);
        }

        .mobile-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* =========================
           HERO
        ========================= */

        .hero {
            padding-top: 10rem;
            padding-bottom: 6rem;

            background:
                radial-gradient(
                    circle at 90% 10%,
                    rgba(99,102,241,.1),
                    transparent 40%
                );
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.2fr .8fr;
            gap: 4rem;
            align-items: center;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1.15;
            margin-bottom: 1rem;
        }

        .hero-subtitle {
            font-size: 1.3rem;
            color: var(--accent);
            font-weight: 700;
            margin-bottom: 1.2rem;
        }

        .hero-description {
            max-width: 560px;
            color: var(--text-muted);
            font-size: 1.05rem;
            margin-bottom: 2rem;
        }

        .hero-buttons {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            margin-bottom: 2rem;
        }

        .social-links {
            display: flex;
            gap: .8rem;
        }

        .social-btn {
            width: 42px;
            height: 42px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: white;
            border: 1px solid var(--border);
            border-radius: 50%;

            text-decoration: none;
            transition: var(--transition);
        }

        .social-btn:hover {
            background: var(--accent);
            color: white;
            transform: translateY(-3px);
        }

        .hero-image-wrapper {
            display: flex;
            justify-content: center;
        }

        .hero-image-card {
            width: 320px;
            height: 380px;

            overflow: hidden;
            border-radius: var(--radius-lg);
            border: 5px solid white;

            box-shadow: var(--shadow-lg);
        }

        .hero-image-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* =========================
           ABOUT
        ========================= */

        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .about-text p {
            color: var(--text-muted);
            margin-bottom: 1.2rem;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(2,1fr);
            gap: 1.2rem;
        }

        .stat-card {
            background: white;
            padding: 1.5rem;
            border: 1px solid var(--border);
            border-radius: var(--radius-md);
            transition: var(--transition);
        }

        .stat-card:hover {
            transform: translateY(-4px);
            border-color: var(--accent);
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 800;
            color: var(--accent);
        }

        .stat-label {
            color: var(--text-muted);
            font-size: .9rem;
        }

        /* =========================
           SKILLS
        ========================= */

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill,minmax(240px,1fr));
            gap: 1.5rem;
        }

        .skill-card {
            background: white;
            padding: 1.5rem;
            border: 1px solid var(--border);
            border-radius: var(--radius-md);

            display: flex;
            align-items: center;
            gap: 1rem;

            transition: var(--transition);
        }

        .skill-card:hover {
            transform: translateY(-4px);
            border-color: var(--accent);
        }

        .skill-icon {
            width: 50px;
            height: 50px;

            flex-shrink: 0;

            display: flex;
            align-items: center;
            justify-content: center;

            background: var(--accent-soft);
            color: var(--accent);

            border-radius: var(--radius-sm);

            font-size: 1.4rem;
        }

        .skill-info h3 {
            font-size: 1rem;
        }

        .skill-info p {
            color: var(--text-muted);
            font-size: .78rem;
        }

        /* =========================
           PROJECTS
        ========================= */

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill,minmax(320px,1fr));
            gap: 2rem;
        }

        .project-card {
            background: white;
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            overflow: hidden;

            display: flex;
            flex-direction: column;

            box-shadow: var(--shadow-sm);
            transition: var(--transition);
        }

        .project-card:hover {
            transform: translateY(-6px);
            box-shadow: var(--shadow-md);
            border-color: var(--accent);
        }

        .project-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            background: #e2e8f0;
        }

        .project-content {
            padding: 1.5rem;

            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .project-title {
            font-size: 1.2rem;
            margin-bottom: .5rem;
        }

        .project-desc {
            color: var(--text-muted);
            font-size: .9rem;
            margin-bottom: 1.3rem;
        }

        .tech-tags {
            display: flex;
            flex-wrap: wrap;
            gap: .4rem;
            margin-bottom: 1.3rem;
        }

        .tag {
            background: #f1f5f9;
            color: var(--text-muted);
            padding: .3rem .6rem;
            border-radius: 6px;
            font-size: .72rem;
            font-weight: 700;
        }

        /* =========================
           TD / TP
        ========================= */

        .td-section {
            background: #f1f5f9;
        }

        .td-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill,minmax(300px,1fr));
            gap: 2rem;
        }

        .td-card {
            background: white;
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            overflow: hidden;

            box-shadow: var(--shadow-sm);

            transition: var(--transition);
        }

        .td-card:hover {
            transform: translateY(-6px);
            box-shadow: var(--shadow-md);
            border-color: var(--accent);
        }

        .td-preview {
            position: relative;
            height: 200px;
            overflow: hidden;
            background: #e2e8f0;
        }

        .td-preview img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .4s ease;
        }

        .td-card:hover .td-preview img {
            transform: scale(1.05);
        }

        .pdf-preview {
            height: 200px;

            display: flex;
            align-items: center;
            justify-content: center;

            background:
                linear-gradient(
                    135deg,
                    #0a0f1d,
                    #1e293b
                );

            color: var(--accent);
        }

        .pdf-preview i {
            font-size: 4rem;
        }

        .td-body {
            padding: 1.5rem;
        }

        .td-type {
            font-size: .72rem;
            font-weight: 800;
            color: var(--accent);
            text-transform: uppercase;
            letter-spacing: .05em;
            margin-bottom: .4rem;
        }

        .td-title {
            font-size: 1.1rem;
            font-weight: 800;
            margin-bottom: .5rem;
        }

        .td-desc {
            color: var(--text-muted);
            font-size: .85rem;
            margin-bottom: 1.2rem;
        }

        .td-actions {
            display: flex;
            gap: .6rem;
            flex-wrap: wrap;
        }

        /* =========================
           TIMELINE
        ========================= */

        .timeline {
            position: relative;
            max-width: 850px;
            margin: auto;
        }

        .timeline::before {
            content: "";

            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;

            width: 2px;
            background: var(--border);

            transform: translateX(-50%);
        }

        .timeline-item {
            position: relative;
            width: 50%;

            padding-right: 2.5rem;
            margin-bottom: 2.5rem;
        }

        .timeline-item:nth-child(even) {
            margin-left: 50%;
            padding-right: 0;
            padding-left: 2.5rem;
        }

        .timeline-dot {
            position: absolute;

            right: -8px;
            top: 5px;

            width: 16px;
            height: 16px;

            background: var(--accent);
            border: 4px solid white;
            border-radius: 50%;
        }

        .timeline-item:nth-child(even) .timeline-dot {
            right: auto;
            left: -8px;
        }

        .timeline-content {
            background: white;
            padding: 1.5rem;

            border-radius: var(--radius-md);
            border: 1px solid var(--border);

            box-shadow: var(--shadow-sm);

            transition: var(--transition);
        }

        .timeline-content:hover {
            border-color: var(--accent);
            transform: translateY(-3px);
        }

        .timeline-date {
            color: var(--accent);
            font-size: .8rem;
            font-weight: 800;
            margin-bottom: .3rem;
        }

        .timeline-title {
            font-size: 1rem;
            font-weight: 800;
        }

        .timeline-subtitle {
            color: var(--text-muted);
            font-size: .85rem;
            margin-top: .3rem;
        }

        /* =========================
           CONTACT
        ========================= */

        .contact-card {
            background: white;
            padding: 3rem;

            border-radius: var(--radius-lg);
            border: 1px solid var(--border);

            box-shadow: var(--shadow-md);

            display: grid;
            grid-template-columns: 1fr 1.2fr;
            gap: 3rem;
        }

        .contact-list {
            margin-top: 2rem;

            display: flex;
            flex-direction: column;
            gap: 1.3rem;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .contact-icon {
            width: 44px;
            height: 44px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 50%;

            background: var(--accent-soft);
            color: var(--accent);
        }

        .form-group {
            margin-bottom: 1.2rem;
        }

        .form-label {
            display: block;
            font-size: .85rem;
            font-weight: 700;
            margin-bottom: .4rem;
        }

        .form-control {
            width: 100%;

            padding: .8rem 1rem;

            border: 1px solid var(--border);
            border-radius: var(--radius-sm);

            outline: none;
            font-size: .9rem;
        }

        .form-control:focus {
            border-color: var(--accent);
            box-shadow: 0 0 0 3px var(--accent-soft);
        }

        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        /* =========================
           FOOTER
        ========================= */

        footer {
            background: var(--bg-dark);
            color: var(--text-light);

            padding: 3rem 0;

            text-align: center;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media(max-width:992px) {

            .hero-grid,
            .about-grid,
            .contact-card {
                grid-template-columns: 1fr;
            }

            .hero {
                text-align: center;
            }

            .hero-description {
                margin-left: auto;
                margin-right: auto;
            }

            .hero-buttons,
            .social-links {
                justify-content: center;
            }

            .timeline::before {
                left: 20px;
            }

            .timeline-item,
            .timeline-item:nth-child(even) {
                width: 100%;
                margin-left: 0;

                padding-left: 3rem;
                padding-right: 0;
            }

            .timeline-dot,
            .timeline-item:nth-child(even) .timeline-dot {
                left: 12px;
                right: auto;
            }
        }

        @media(max-width:768px) {

            .nav-links {
                position: absolute;

                top: 80px;
                left: 0;

                width: 100%;

                background: white;

                display: none;
                flex-direction: column;

                padding: 2rem;

                box-shadow: var(--shadow-md);
            }

            .nav-links.active {
                display: flex;
            }

            .mobile-toggle {
                display: block;
            }

            .hero-content h1 {
                font-size: 2.6rem;
            }

            .section {
                padding: 4rem 0;
            }

            .contact-card {
                padding: 2rem 1.5rem;
            }
        }

    </style>
</head>

<body>

<!-- =========================
     NAVBAR
========================= -->

<nav class="navbar">

    <div class="container nav-container">

        <a href="#" class="logo">
            <i class="fa-solid fa-code"></i>
            Mariam<span>.dev</span>
        </a>

        <button
            class="mobile-toggle"
            id="mobileMenuBtn"
            aria-label="Menu">

            <i class="fa-solid fa-bars"></i>

        </button>

        <ul class="nav-links" id="navLinks">

            <li><a href="#about">À propos</a></li>
            <li><a href="#skills">Compétences</a></li>
            <li><a href="#projects">Projets</a></li>
            <li><a href="#mini-projets">Mini-Projets</a></li>
            <li><a href="#td">TD & TP</a></li>
            <li><a href="#timeline">Parcours</a></li>
            <li><a href="#contact">Contact</a></li>

        </ul>

    </div>

</nav>


<!-- =========================
     HERO
========================= -->

<section class="hero">

    <div class="container hero-grid">

        <div class="hero-content">

            <span class="badge">
                <i class="fa-solid fa-circle-dot"></i>
                Disponible pour stage / projets
            </span>

            <h1>Mariam Tahayekt</h1>

            <div class="hero-subtitle">
                Étudiante en Développement Digital
            </div>

            <p class="hero-description">
                Passionnée par le développement web moderne,
                la création d'interfaces intuitives et la résolution
                de problèmes complexes à travers un code propre et efficace.
            </p>

            <div class="hero-buttons">

                <a href="#projects" class="btn btn-primary">
                    <i class="fa-solid fa-briefcase"></i>
                    Voir mes projets
                </a>

                <a
                    href="/doc/CV-Mariam-Tahayekt.pdf"
                    target="_blank"
                    class="btn btn-secondary">

                    <i class="fa-solid fa-file-pdf"></i>
                    Voir mon CV
                </a>

            </div>

            <div class="social-links">

                <a
                    href="https://github.com/mariamtahayekt"
                    target="_blank"
                    class="social-btn">

                    <i class="fa-brands fa-github"></i>

                </a>

                <a
                    href="https://linkedin.com"
                    target="_blank"
                    class="social-btn">

                    <i class="fa-brands fa-linkedin-in"></i>

                </a>

                <a
                    href="mailto:contact@mariamtahayekt.dev"
                    class="social-btn">

                    <i class="fa-regular fa-envelope"></i>

                </a>

            </div>

        </div>


        <div class="hero-image-wrapper">

            <div class="hero-image-card">

                <img
                    src="/image/mariam.jpg"
                    alt="Mariam Tahayekt"
                    onerror="this.style.display='none';">

            </div>

        </div>

    </div>

</section>


<!-- =========================
     ABOUT
========================= -->

<section id="about" class="section">

    <div class="container">

        <div class="section-title">

            <h2>À Propos de moi</h2>

            <p>
                Découvrez mon profil, mon parcours et ma passion pour le web
            </p>

        </div>


        <div class="about-grid">

            <div class="about-text">

                <p>
                    Actuellement étudiante en
                    <strong>Développement Digital</strong>,
                    je me spécialise dans le développement d'applications
                    web modernes et réactives.
                </p>

                <p>
                    Mon objectif est d'acquérir une solide expertise
                    technique tout en concevant des expériences utilisateur
                    fluides et esthétiques.
                </p>

                <p>
                    Curieuse et rigoureuse, j'accorde une grande importance
                    à la qualité du code, à la conception logicielle et
                    aux bonnes pratiques du développement web.
                </p>

            </div>


            <div class="stats-grid">

                <div class="stat-card">
                    <div class="stat-number">05+</div>
                    <div class="stat-label">
                        Projets réalisés
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-number">08+</div>
                    <div class="stat-label">
                        Technologies utilisées
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-number">10+</div>
                    <div class="stat-label">
                        TD & Travaux pratiques
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-number">100%</div>
                    <div class="stat-label">
                        Motivation
                    </div>
                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     SKILLS
========================= -->

<section
    id="skills"
    class="section"
    style="background:#f1f5f9;">

    <div class="container">

        <div class="section-title">

            <h2>Compétences Techniques</h2>

            <p>
                Les technologies et outils que j'utilise
            </p>

        </div>


        <div class="skills-grid">

            <div class="skill-card">

                <div class="skill-icon">
                    <i class="fa-brands fa-html5"></i>
                </div>

                <div class="skill-info">
                    <h3>HTML5</h3>
                    <p>Sémantique & Accessibilité</p>
                </div>

            </div>


            <div class="skill-card">

                <div class="skill-icon">
                    <i class="fa-brands fa-css3-alt"></i>
                </div>

                <div class="skill-info">
                    <h3>CSS3</h3>
                    <p>Flexbox, Grid, Responsive</p>
                </div>

            </div>


            <div class="skill-card">

                <div class="skill-icon">
                    <i class="fa-brands fa-js"></i>
                </div>

                <div class="skill-info">
                    <h3>JavaScript</h3>
                    <p>DOM, ES6+, Fetch</p>
                </div>

            </div>


            <div class="skill-card">

                <div class="skill-icon">
                    <i class="fa-brands fa-php"></i>
                </div>

                <div class="skill-info">
                    <h3>PHP</h3>
                    <p>Backend & Applications Web</p>
                </div>

            </div>


            <div class="skill-card">

                <div class="skill-icon">
                    <i class="fa-solid fa-database"></i>
                </div>

                <div class="skill-info">
                    <h3>SQL / MySQL</h3>
                    <p>Base de données & Requêtes</p>
                </div>

            </div>


            <div class="skill-card">

                <div class="skill-icon">
                    <i class="fa-solid fa-diagram-project"></i>
                </div>

                <div class="skill-info">
                    <h3>UML</h3>
                    <p>Modélisation & Conception</p>
                </div>

            </div>


            <div class="skill-card">

                <div class="skill-icon">
                    <i class="fa-brands fa-git-alt"></i>
                </div>

                <div class="skill-info">
                    <h3>Git / GitHub</h3>
                    <p>Versioning & Collaboration</p>
                </div>

            </div>


            <div class="skill-card">

                <div class="skill-icon">
                    <i class="fa-solid fa-mobile-screen"></i>
                </div>

                <div class="skill-info">
                    <h3>Responsive Design</h3>
                    <p>Mobile First & Adaptive</p>
                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     PROJECTS
========================= -->

<section id="projects" class="section">

    <div class="container">

        <div class="section-title">

            <h2>Projets Réalisés</h2>

            <p>
                Une sélection de mes travaux
            </p>

        </div>


        <div class="projects-grid">


            <!-- PROJECT 1 -->

            <div class="project-card">

                <img
                    src="https://images.unsplash.com/photo-1557821552-17105176677c?auto=format&fit=crop&w=600&q=80"
                    alt="QuickAnnonces"
                    class="project-img">

                <div class="project-content">

                    <h3 class="project-title">
                        QuickAnnonces
                    </h3>

                    <p class="project-desc">
                        Plateforme web dynamique permettant
                        la publication et la recherche de petites
                        annonces en ligne.
                    </p>

                    <div class="tech-tags">

                        <span class="tag">PHP</span>
                        <span class="tag">MySQL</span>
                        <span class="tag">JavaScript</span>
                        <span class="tag">CSS3</span>

                    </div>

                    <a
                        href="https://github.com/mariamtahayekt/QuickAnnonces"
                        target="_blank"
                        class="btn btn-secondary btn-sm">

                        <i class="fa-brands fa-github"></i>
                        Voir sur GitHub

                    </a>

                </div>

            </div>


            <!-- PROJECT 2 -->

            <div class="project-card">

                <img
                    src="/image/mariam.jpg"
                    alt="Portfolio Personnel"
                    class="project-img"
                    style="object-position:top;">

                <div class="project-content">

                    <h3 class="project-title">
                        Portfolio Personnel
                    </h3>

                    <p class="project-desc">
                        Portfolio professionnel moderne,
                        responsive et conçu pour présenter
                        mes projets, compétences et travaux académiques.
                    </p>

                    <div class="tech-tags">

                        <span class="tag">HTML5</span>
                        <span class="tag">CSS3</span>
                        <span class="tag">PHP</span>
                        <span class="tag">Vercel</span>

                    </div>

                    <a
                        href="https://github.com/mariamtahayekt"
                        target="_blank"
                        class="btn btn-secondary btn-sm">

                        <i class="fa-brands fa-github"></i>
                        Voir sur GitHub

                    </a>

                </div>

            </div>


            <!-- PROJECT 3 -->

            <div class="project-card">

                <img
                    src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=600&q=80"
                    alt="Gestionnaire de tâches"
                    class="project-img">

                <div class="project-content">

                    <h3 class="project-title">
                        Gestionnaire de Tâches
                    </h3>

                    <p class="project-desc">
                        Application web interactive permettant
                        de gérer les projets et les tâches quotidiennes.
                    </p>

                    <div class="tech-tags">

                        <span class="tag">JavaScript</span>
                        <span class="tag">HTML/CSS</span>
                        <span class="tag">Local Storage</span>

                    </div>

                    <a
                        href="https://github.com/mariamtahayekt"
                        target="_blank"
                        class="btn btn-secondary btn-sm">

                        <i class="fa-brands fa-github"></i>
                        Voir sur GitHub

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     MINI PROJECTS
========================= -->

<section
    id="mini-projets"
    class="section"
    style="background:#f1f5f9;">

    <div class="container">

        <div class="section-title">

            <h2>Mini-Projets & Documentations</h2>

            <p>
                Documents techniques, analyses UML et travaux pratiques
            </p>

        </div>


        <div class="projects-grid">


            <div class="project-card">

                <div
                    style="
                    height:160px;
                    background:linear-gradient(135deg,#0a0f1d,#1e293b);
                    display:flex;
                    align-items:center;
                    justify-content:center;
                    color:#6366f1;">

                    <i
                        class="fa-solid fa-diagram-project"
                        style="font-size:3.5rem;">
                    </i>

                </div>


                <div class="project-content">

                    <span class="badge">

                        <i class="fa-solid fa-file-pdf"></i>
                        Documentation / UML

                    </span>

                    <h3 class="project-title">
                        Atelier UML — Agence Immobilière
                    </h3>

                    <p class="project-desc">
                        Conception et modélisation UML complète
                        pour une application web de gestion immobilière.
                    </p>

                    <div class="tech-tags">

                        <span class="tag">UML</span>
                        <span class="tag">Analyse</span>
                        <span class="tag">Conception Web</span>

                    </div>

                    <div style="display:flex;gap:.5rem;flex-wrap:wrap;">

                        <a
                            href="/doc/Tahayekt_Mariam_Atelier_UML_immobiliere.pdf"
                            target="_blank"
                            class="btn btn-primary btn-sm">

                            <i class="fa-solid fa-eye"></i>
                            Consulter

                        </a>

                        <a
                            href="/doc/Tahayekt_Mariam_Atelier_UML_immobiliere.pdf"
                            download
                            class="btn btn-secondary btn-sm">

                            <i class="fa-solid fa-download"></i>
                            Télécharger

                        </a>

                    </div>

                </div>

            </div>


            <div class="project-card">

                <div
                    style="
                    height:160px;
                    background:linear-gradient(135deg,#0a0f1d,#1e293b);
                    display:flex;
                    align-items:center;
                    justify-content:center;
                    color:#6366f1;">

                    <i
                        class="fa-solid fa-laptop-code"
                        style="font-size:3.5rem;">
                    </i>

                </div>

                <div class="project-content">

                    <span class="badge">

                        <i class="fa-solid fa-code"></i>
                        Application Web

                    </span>

                    <h3 class="project-title">
                        Mini-Projet Application Web
                    </h3>

                    <p class="project-desc">
                        Rapport technique et cahier des charges
                        d'une application web dynamique.
                    </p>

                    <div class="tech-tags">

                        <span class="tag">PHP</span>
                        <span class="tag">MySQL</span>
                        <span class="tag">MVC</span>

                    </div>

                    <a
                        href="#"
                        class="btn btn-secondary btn-sm"
                        style="opacity:.6;pointer-events:none;">

                        <i class="fa-solid fa-clock"></i>
                        En cours de rédaction

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     TD & TP
========================= -->

<section id="td" class="section td-section">

    <div class="container">

        <div class="section-title">

            <span class="badge">
                <i class="fa-solid fa-graduation-cap"></i>
                Travaux académiques
            </span>

            <h2>
                Mes TD & Travaux Pratiques
            </h2>

            <p>
                Une sélection de mes exercices, TD, TP et documents académiques.
            </p>

        </div>


        <div class="td-grid">


            <!-- TD 1 IMAGE -->

            <div class="td-card">

                <div class="td-preview">

                    <img
                        src="/image/td1.jpeg"
                        alt="TD 1">

                </div>

                <div class="td-body">

                    <div class="td-type">
                        Exercice pratique
                    </div>

                    <h3 class="td-title">
                        TD 1 — Structure & Styles
                    </h3>

                    <p class="td-desc">
                        Travail pratique portant sur la structure
                        HTML5, les styles CSS et la conception
                        d'une interface responsive.
                    </p>

                    <div class="td-actions">

                        <a
                            href="/image/td1.jpeg"
                            target="_blank"
                            class="btn btn-primary btn-sm">

                            <i class="fa-solid fa-eye"></i>
                            Voir le TD

                        </a>

                        <a
                            href="/image/td1.jpeg"
                            download
                            class="btn btn-secondary btn-sm">

                            <i class="fa-solid fa-download"></i>
                            Télécharger

                        </a>

                    </div>

                </div>

            </div>


            <!-- TD 2 PDF -->

            <div class="td-card">

                <div class="pdf-preview">

                    <i class="fa-solid fa-file-pdf"></i>

                </div>

                <div class="td-body">

                    <div class="td-type">
                        Document PDF
                    </div>

                    <h3 class="td-title">
                        TD 2 — Algorithmique & SQL
                    </h3>

                    <p class="td-desc">
                        Exercices pratiques sur la conception
                        de bases de données et les requêtes SQL.
                    </p>

                    <div class="td-actions">

                        <a
                            href="/doc/TD2-SQL.pdf"
                            target="_blank"
                            class="btn btn-primary btn-sm">

                            <i class="fa-solid fa-folder-open"></i>
                            Ouvrir

                        </a>

                        <a
                            href="/doc/TD2-SQL.pdf"
                            download
                            class="btn btn-secondary btn-sm">

                            <i class="fa-solid fa-download"></i>
                            Télécharger

                        </a>

                    </div>

                </div>

            </div>


            <!-- TP 1 PDF -->

            <div class="td-card">

                <div class="pdf-preview">

                    <i class="fa-solid fa-file-code"></i>

                </div>

                <div class="td-body">

                    <div class="td-type">
                        TP / Rapport PDF
                    </div>

                    <h3 class="td-title">
                        TP 1 — Dynamic Forms PHP
                    </h3>

                    <p class="td-desc">
                        Mise en place de formulaires dynamiques
                        avec validation des données en PHP.
                    </p>

                    <div class="td-actions">

                        <a
                            href="/doc/TP1-PHP.pdf"
                            target="_blank"
                            class="btn btn-primary btn-sm">

                            <i class="fa-solid fa-folder-open"></i>
                            Ouvrir

                        </a>

                        <a
                            href="/doc/TP1-PHP.pdf"
                            download
                            class="btn btn-secondary btn-sm">

                            <i class="fa-solid fa-download"></i>
                            Télécharger

                        </a>

                    </div>

                </div>

            </div>


            <!-- UML -->

            <div class="td-card">

                <div class="pdf-preview">

                    <i class="fa-solid fa-diagram-project"></i>

                </div>

                <div class="td-body">

                    <div class="td-type">
                        UML / Modélisation
                    </div>

                    <h3 class="td-title">
                        Atelier UML — Immobilier
                    </h3>

                    <p class="td-desc">
                        Diagrammes UML réalisés dans le cadre
                        d'un exercice de conception d'une
                        application immobilière.
                    </p>

                    <div class="td-actions">

                        <a
                            href="/doc/Tahayekt_Mariam_Atelier_UML_immobiliere.pdf"
                            target="_blank"
                            class="btn btn-primary btn-sm">

                            <i class="fa-solid fa-eye"></i>
                            Consulter

                        </a>

                        <a
                            href="/doc/Tahayekt_Mariam_Atelier_UML_immobiliere.pdf"
                            download
                            class="btn btn-secondary btn-sm">

                            <i class="fa-solid fa-download"></i>
                            Télécharger

                        </a>

                    </div>

                </div>

            </div>


            <!-- FUTUR TD -->

            <div class="td-card">

                <div class="pdf-preview">

                    <i class="fa-solid fa-folder-plus"></i>

                </div>

                <div class="td-body">

                    <div class="td-type">
                        Prochainement
                    </div>

                    <h3 class="td-title">
                        Autres TD & TP
                    </h3>

                    <p class="td-desc">
                        D'autres travaux académiques seront
                        ajoutés prochainement à cette section.
                    </p>

                    <div class="td-actions">

                        <span
                            class="btn btn-secondary btn-sm"
                            style="opacity:.6;">

                            <i class="fa-solid fa-clock"></i>
                            À venir

                        </span>

                    </div>

                </div>

            </div>


        </div>

    </div>

</section>


<!-- =========================
     PARCOURS
========================= -->

<section id="timeline" class="section">

    <div class="container">

        <div class="section-title">

            <h2>Parcours & Formation</h2>

            <p>
                Mon parcours académique et mes expériences de formation
            </p>

        </div>


        <div class="timeline">


            <!-- CERTIFICAT SOLICODE -->

            <div class="timeline-item">

                <div class="timeline-dot"></div>

                <div class="timeline-content">

                    <div class="timeline-date">
                        2025
                    </div>

                    <h3 class="timeline-title">
                        Certificat en Développement Digital
                    </h3>

                    <p class="timeline-subtitle">
                        Centre Solicode — Tanger
                    </p>

                    <p
                        style="
                        color:#64748b;
                        font-size:.85rem;
                        margin-top:.5rem;">

                        Formation en développement digital,
                        programmation web et technologies numériques.

                    </p>

                </div>

            </div>


            <!-- FORMATION ACTUELLE -->

            <div class="timeline-item">

                <div class="timeline-dot"></div>

                <div class="timeline-content">

                    <div class="timeline-date">
                        2024 — Présent
                    </div>

                    <h3 class="timeline-title">
                        Formation en Développement Digital
                    </h3>

                    <p class="timeline-subtitle">
                        Spécialisation Développement Web & Mobile
                    </p>

                </div>

            </div>


            <!-- BAC -->

            <div class="timeline-item">

                <div class="timeline-dot"></div>

                <div class="timeline-content">

                    <div class="timeline-date">
                        2023 — 2024
                    </div>

                    <h3 class="timeline-title">
                        Baccalauréat Scientifique
                    </h3>

                    <p class="timeline-subtitle">
                        Option Sciences Physiques — Mention Bien
                    </p>

                </div>

            </div>


        </div>

    </div>

</section>


<!-- =========================
     CONTACT
========================= -->

<section id="contact" class="section">

    <div class="container">

        <div class="section-title">

            <h2>Me Contacter</h2>

            <p>
                Un projet, une question ou une opportunité ?
            </p>

        </div>


        <div class="contact-card">


            <div>

                <h3 style="font-size:1.5rem;">
                    Restons en contact
                </h3>

                <p
                    style="
                    color:var(--text-muted);
                    margin-top:.5rem;">

                    Je suis disponible pour les stages,
                    projets académiques et opportunités
                    de collaboration.

                </p>


                <div class="contact-list">


                    <div class="contact-item">

                        <div class="contact-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>

                        <div>

                            <div
                                style="
                                font-size:.75rem;
                                color:var(--text-muted);">

                                Email

                            </div>

                            <strong>
                                contact@mariamtahayekt.dev
                            </strong>

                        </div>

                    </div>


                    <div class="contact-item">

                        <div class="contact-icon">
                            <i class="fa-brands fa-github"></i>
                        </div>

                        <div>

                            <div
                                style="
                                font-size:.75rem;
                                color:var(--text-muted);">

                                GitHub

                            </div>

                            <strong>
                                github.com/mariamtahayekt
                            </strong>

                        </div>

                    </div>


                    <div class="contact-item">

                        <div class="contact-icon">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </div>

                        <div>

                            <div
                                style="
                                font-size:.75rem;
                                color:var(--text-muted);">

                                LinkedIn

                            </div>

                            <strong>
                                linkedin.com/in/mariamtahayekt
                            </strong>

                        </div>

                    </div>


                </div>

            </div>


            <form
                onsubmit="
                event.preventDefault();
                alert('Message envoyé avec succès !');
                ">

                <div class="form-group">

                    <label class="form-label">
                        Nom complet
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        placeholder="Votre nom"
                        required>

                </div>


                <div class="form-group">

                    <label class="form-label">
                        Adresse email
                    </label>

                    <input
                        type="email"
                        class="form-control"
                        placeholder="votre@email.com"
                        required>

                </div>


                <div class="form-group">

                    <label class="form-label">
                        Message
                    </label>

                    <textarea
                        class="form-control"
                        placeholder="Votre message..."
                        required>
                    </textarea>

                </div>


                <button
                    type="submit"
                    class="btn btn-primary"
                    style="width:100%;">

                    <i class="fa-solid fa-paper-plane"></i>
                    Envoyer

                </button>

            </form>


        </div>

    </div>

</section>


<!-- =========================
     FOOTER
========================= -->

<footer>

    <div class="container">

        <p>
            © 2026 Mariam Tahayekt — Tous droits réservés.
        </p>

    </div>

</footer>


<!-- =========================
     JAVASCRIPT
========================= -->

<script>

    const mobileMenuBtn =
        document.getElementById("mobileMenuBtn");

    const navLinks =
        document.getElementById("navLinks");


    mobileMenuBtn.addEventListener("click", () => {

        navLinks.classList.toggle("active");

        const icon =
            mobileMenuBtn.querySelector("i");

        if (navLinks.classList.contains("active")) {

            icon.classList.remove("fa-bars");
            icon.classList.add("fa-xmark");

        } else {

            icon.classList.remove("fa-xmark");
            icon.classList.add("fa-bars");

        }

    });


    document
        .querySelectorAll(".nav-links a")
        .forEach(link => {

            link.addEventListener("click", () => {

                navLinks.classList.remove("active");

                const icon =
                    mobileMenuBtn.querySelector("i");

                icon.classList.remove("fa-xmark");
                icon.classList.add("fa-bars");

            });

        });

</script>

</body>
</html>
```
