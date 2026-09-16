<?php
header("Content-Type: text/html; charset=UTF-8");
?>
<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mariam Tahayekt — Développeuse Web & Digital</title>
    
    <!-- Google Fonts & Font Awesome Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

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
            --accent-soft: rgba(99, 102, 241, 0.1);
            --border: #e2e8f0;
            --border-dark: #1e293b;
            --radius-lg: 16px;
            --radius-md: 12px;
            --radius-sm: 8px;
            --shadow-sm: 0 2px 4px rgba(0,0,0,0.05);
            --shadow-md: 0 10px 25px -5px rgba(0,0,0,0.05), 0 8px 10px -6px rgba(0,0,0,0.01);
            --shadow-lg: 0 20px 30px -10px rgba(99, 102, 241, 0.15);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        body {
            background-color: var(--bg-light);
            color: var(--text-main);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* --- Global Components --- */
        .container {
            max-width: 1200px;
            margin: 0 auto;
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
            letter-spacing: -0.025em;
        }

        .section-title p {
            color: var(--text-muted);
            margin-top: 0.5rem;
            font-size: 1.05rem;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.85rem;
            font-weight: 600;
            background: var(--accent-soft);
            color: var(--accent);
            margin-bottom: 1rem;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.85rem 1.75rem;
            border-radius: var(--radius-md);
            font-weight: 600;
            font-size: 0.95rem;
            text-decoration: none;
            transition: var(--transition);
            cursor: pointer;
            border: none;
        }

        .btn-primary {
            background: var(--accent);
            color: #ffffff;
            box-shadow: 0 4px 14px rgba(99, 102, 241, 0.35);
        }

        .btn-primary:hover {
            background: var(--accent-hover);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(99, 102, 241, 0.45);
        }

        .btn-secondary {
            background: #ffffff;
            color: var(--text-main);
            border: 1px solid var(--border);
        }

        .btn-secondary:hover {
            background: #f1f5f9;
            transform: translateY(-2px);
        }

        .btn-sm {
            padding: 0.5rem 1rem;
            font-size: 0.85rem;
            border-radius: var(--radius-sm);
        }

        /* --- Navigation --- */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            z-index: 1000;
            border-bottom: 1px solid rgba(226, 232, 240, 0.8);
            transition: var(--transition);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 80px;
        }

        .logo {
            font-weight: 800;
            font-size: 1.4rem;
            color: var(--primary);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .logo span {
            color: var(--accent);
        }

        .nav-links {
            display: flex;
            gap: 1.8rem;
            list-style: none;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--text-muted);
            font-weight: 500;
            font-size: 0.95rem;
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
            color: var(--primary);
            cursor: pointer;
        }

        /* --- Hero Section --- */
        .hero {
            padding-top: 10rem;
            padding-bottom: 6rem;
            background: radial-gradient(circle at 90% 10%, rgba(99, 102, 241, 0.08) 0%, transparent 40%);
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 4rem;
            align-items: center;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1.15;
            color: var(--primary);
            letter-spacing: -0.03em;
            margin-bottom: 1rem;
        }

        .hero-subtitle {
            font-size: 1.35rem;
            color: var(--accent);
            font-weight: 600;
            margin-bottom: 1.25rem;
        }

        .hero-description {
            font-size: 1.1rem;
            color: var(--text-muted);
            margin-bottom: 2rem;
            max-width: 540px;
        }

        .hero-buttons {
            display: flex;
            gap: 1rem;
            margin-bottom: 2.5rem;
            flex-wrap: wrap;
        }

        .social-links {
            display: flex;
            gap: 1rem;
        }

        .social-btn {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: #ffffff;
            border: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-main);
            text-decoration: none;
            transition: var(--transition);
        }

        .social-btn:hover {
            background: var(--accent);
            color: #ffffff;
            border-color: var(--accent);
            transform: translateY(-3px);
        }

        .hero-image-wrapper {
            position: relative;
            display: flex;
            justify-content: center;
        }

        .hero-image-card {
            position: relative;
            width: 320px;
            height: 380px;
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-lg);
            border: 4px solid #ffffff;
        }

        .hero-image-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* --- About Section --- */
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .about-text p {
            color: var(--text-muted);
            margin-bottom: 1.25rem;
            font-size: 1.05rem;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
        }

        .stat-card {
            background: #ffffff;
            padding: 1.75rem;
            border-radius: var(--radius-md);
            border: 1px solid var(--border);
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
        }

        .stat-card:hover {
            border-color: var(--accent);
            transform: translateY(-4px);
            box-shadow: var(--shadow-md);
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 800;
            color: var(--accent);
            margin-bottom: 0.25rem;
        }

        .stat-label {
            font-size: 0.95rem;
            color: var(--text-muted);
            font-weight: 500;
        }

        /* --- Skills Section --- */
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
            gap: 1.5rem;
        }

        .skill-card {
            background: #ffffff;
            padding: 1.5rem;
            border-radius: var(--radius-md);
            border: 1px solid var(--border);
            display: flex;
            align-items: center;
            gap: 1.25rem;
            transition: var(--transition);
        }

        .skill-card:hover {
            border-color: var(--accent);
            box-shadow: var(--shadow-md);
            transform: translateY(-3px);
        }

        .skill-icon {
            width: 50px;
            height: 50px;
            border-radius: var(--radius-sm);
            background: var(--accent-soft);
            color: var(--accent);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }

        .skill-info h3 {
            font-size: 1.05rem;
            font-weight: 700;
            color: var(--primary);
        }

        /* --- Projects & Cards Section --- */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
            gap: 2rem;
        }

        .project-card {
            background: #ffffff;
            border-radius: var(--radius-lg);
            overflow: hidden;
            border: 1px solid var(--border);
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            display: flex;
            flex-direction: column;
        }

        .project-card:hover {
            transform: translateY(-6px);
            box-shadow: var(--shadow-md);
            border-color: rgba(99, 102, 241, 0.4);
        }

        .project-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            background: #e2e8f0;
        }

        .project-content {
            padding: 1.75rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .project-title {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: var(--primary);
        }

        .project-desc {
            color: var(--text-muted);
            font-size: 0.95rem;
            margin-bottom: 1.5rem;
            flex-grow: 1;
        }

        .tech-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
        }

        .tag {
            background: #f1f5f9;
            color: var(--text-muted);
            padding: 0.25rem 0.65rem;
            border-radius: 6px;
            font-size: 0.75rem;
            font-weight: 600;
        }

        /* --- TD Section --- */
        .td-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 2rem;
        }

        .td-card {
            background: #ffffff;
            border-radius: var(--radius-lg);
            border: 1px solid var(--border);
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
        }

        .td-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-md);
            border-color: var(--accent);
        }

        .td-preview-img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-bottom: 1px solid var(--border);
        }

        .td-body {
            padding: 1.5rem;
        }

        .td-type {
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--accent);
            margin-bottom: 0.25rem;
        }

        .td-title {
            font-size: 1.15rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: var(--primary);
        }

        .td-desc {
            font-size: 0.9rem;
            color: var(--text-muted);
            margin-bottom: 1.25rem;
        }

        .td-actions {
            display: flex;
            gap: 0.75rem;
            flex-wrap: wrap;
        }

        /* --- Timeline Section --- */
        .timeline {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }

        .timeline::before {
            content: '';
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
            margin-bottom: 2.5rem;
            width: 50%;
            padding-right: 2.5rem;
        }

        .timeline-item:nth-child(even) {
            margin-left: 50%;
            padding-right: 0;
            padding-left: 2.5rem;
        }

        .timeline-dot {
            position: absolute;
            right: -8px;
            top: 0;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: var(--accent);
            border: 4px solid #ffffff;
            box-shadow: var(--shadow-sm);
        }

        .timeline-item:nth-child(even) .timeline-dot {
            right: auto;
            left: -8px;
        }

        .timeline-content {
            background: #ffffff;
            padding: 1.5rem;
            border-radius: var(--radius-md);
            border: 1px solid var(--border);
            box-shadow: var(--shadow-sm);
        }

        .timeline-date {
            font-size: 0.85rem;
            font-weight: 700;
            color: var(--accent);
            margin-bottom: 0.25rem;
        }

        .timeline-title {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 0.25rem;
        }

        .timeline-subtitle {
            font-size: 0.9rem;
            color: var(--text-muted);
        }

        /* --- Contact Section --- */
        .contact-card-wrapper {
            background: #ffffff;
            border-radius: var(--radius-lg);
            border: 1px solid var(--border);
            box-shadow: var(--shadow-md);
            padding: 3rem;
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            gap: 3rem;
        }

        .contact-info-list {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .contact-info-item {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .contact-icon {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: var(--accent-soft);
            color: var(--accent);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
        }

        .form-group {
            margin-bottom: 1.25rem;
        }

        .form-label {
            display: block;
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 0.4rem;
            color: var(--primary);
        }

        .form-control {
            width: 100%;
            padding: 0.8rem 1rem;
            border-radius: var(--radius-sm);
            border: 1px solid var(--border);
            outline: none;
            transition: var(--transition);
            font-size: 0.95rem;
        }

        .form-control:focus {
            border-color: var(--accent);
            box-shadow: 0 0 0 3px var(--accent-soft);
        }

        textarea.form-control {
            resize: vertical;
            min-height: 120px;
        }

        /* --- Footer --- */
        footer {
            background: var(--bg-dark);
            color: var(--text-light);
            padding: 3rem 0;
            text-align: center;
            border-top: 1px solid var(--border-dark);
        }

        /* --- Responsive Design --- */
        @media (max-width: 992px) {
            .hero-grid, .about-grid, .contact-card-wrapper {
                grid-template-columns: 1fr;
            }

            .hero {
                text-align: center;
            }

            .hero-content h1 {
                font-size: 2.75rem;
            }

            .hero-description {
                margin: 0 auto 2rem auto;
            }

            .hero-buttons {
                justify-content: center;
            }

            .social-links {
                justify-content: center;
            }

            .timeline::before {
                left: 20px;
            }

            .timeline-item, .timeline-item:nth-child(even) {
                width: 100%;
                padding-left: 3rem;
                padding-right: 0;
                margin-left: 0;
            }

            .timeline-dot, .timeline-item:nth-child(even) .timeline-dot {
                left: 12px;
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                position: absolute;
                top: 80px;
                left: 0;
                width: 100%;
                background: #ffffff;
                flex-direction: column;
                padding: 2rem;
                gap: 1.5rem;
                border-bottom: 1px solid var(--border);
                display: none;
                box-shadow: var(--shadow-md);
            }

            .nav-links.active {
                display: flex;
            }

            .mobile-toggle {
                display: block;
            }

            .section {
                padding: 4rem 0;
            }
        }
    </style>
</head>
<body>

    <!-- Header Navigation -->
    <nav class="navbar">
        <div class="container nav-container">
            <a href="#" class="logo">
                <i class="fa-solid fa-code"></i> Mariam<span>.dev</span>
            </a>
            <button class="mobile-toggle" id="mobileMenuBtn" aria-label="Toggle Menu">
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

    <!-- 1. Hero Section -->
    <section class="hero">
        <div class="container hero-grid">
            <div class="hero-content">
                <span class="badge"><i class="fa-solid fa-circle-dot"></i> Disponible pour stage / projets</span>
                <h1>Mariam Tahayekt</h1>
                <div class="hero-subtitle">Étudiante en Développement Digital</div>
                <p class="hero-description">
                    Passionnée par le développement web moderne, la création d'interfaces intuitives et la résolution de problèmes complexes à travers un code propre et efficace.
                </p>
                <div class="hero-buttons">
                    <a href="#projects" class="btn btn-primary"><i class="fa-solid fa-briefcase"></i> Voir mes projets</a>
                    <a href="/doc/CV-Mariam-Tahayekt.pdf" target="_blank" class="btn btn-secondary"><i class="fa-solid fa-download"></i> Télécharger mon CV</a>
                </div>
                <div class="social-links">
                    <a href="https://github.com" target="_blank" class="social-btn" aria-label="GitHub"><i class="fa-brands fa-github"></i></a>
                    <a href="https://linkedin.com" target="_blank" class="social-btn" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="mailto:contact@mariamtahayekt.dev" class="social-btn" aria-label="Email"><i class="fa-regular fa-envelope"></i></a>
                </div>
            </div>
            <div class="hero-image-wrapper">
                <div class="hero-image-card">
                    <img src="/image/mariam.jpg" alt="Mariam Tahayekt" onerror="this.src='https://via.placeholder.com/320x380?text=Mariam+Tahayekt'">
                </div>
            </div>
        </div>
    </section>

    <!-- 2. À Propos Section -->
    <section id="about" class="section">
        <div class="container">
            <div class="section-title">
                <h2>À Propos de moi</h2>
                <p>Découvrez mon profil, mon parcours et ma passion pour le web</p>
            </div>
            <div class="about-grid">
                <div class="about-text">
                    <p>
                        Actuellement étudiante en <strong>Développement Digital</strong>, je me spécialise dans le développement d'applications web modernes et réactives. Mon objectif est d'acquérir une solide expertise technique tout en concevant des expériences utilisateur fluides et esthétiques.
                    </p>
                    <p>
                        Curieuse et rigoureuse, j'accorde une grande importance à la qualité du code, à l'architecture logicielle et aux meilleures pratiques du secteur. Je suis toujours en quête de nouveaux défis techniques à relever.
                    </p>
                </div>
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-number">05+</div>
                        <div class="stat-label">Projets Réalisés</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number">08+</div>
                        <div class="stat-label">Technologies Maîtrisées</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number">10+</div>
                        <div class="stat-label">TD & Travaux Pratiques</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number">100%</div>
                        <div class="stat-label">Engagement & Passion</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Compétences Section -->
    <section id="skills" class="section" style="background: #f1f5f9;">
        <div class="container">
            <div class="section-title">
                <h2>Compétences Techniques</h2>
                <p>Les technologies et outils que j'utilise au quotidien</p>
            </div>
            <div class="skills-grid">
                <div class="skill-card">
                    <div class="skill-icon"><i class="fa-brands fa-html5"></i></div>
                    <div class="skill-info">
                        <h3>HTML5</h3>
                        <p style="font-size:0.8rem; color:var(--text-muted);">Sémantique & Accessibilité</p>
                    </div>
                </div>
                <div class="skill-card">
                    <div class="skill-icon"><i class="fa-brands fa-css3-alt"></i></div>
                    <div class="skill-info">
                        <h3>CSS3</h3>
                        <p style="font-size:0.8rem; color:var(--text-muted);">Flexbox, Grid, Animations</p>
                    </div>
                </div>
                <div class="skill-card">
                    <div class="skill-icon"><i class="fa-brands fa-js"></i></div>
                    <div class="skill-info">
                        <h3>JavaScript</h3>
                        <p style="font-size:0.8rem; color:var(--text-muted);">ES6+, DOM, Async/Fetch</p>
                    </div>
                </div>
                <div class="skill-card">
                    <div class="skill-icon"><i class="fa-brands fa-php"></i></div>
                    <div class="skill-info">
                        <h3>PHP</h3>
                        <p style="font-size:0.8rem; color:var(--text-muted);">Backend & API REST</p>
                    </div>
                </div>
                <div class="skill-card">
                    <div class="skill-icon"><i class="fa-solid fa-database"></i></div>
                    <div class="skill-info">
                        <h3>SQL / MySQL</h3>
                        <p style="font-size:0.8rem; color:var(--text-muted);">Conception & Requêtes</p>
                    </div>
                </div>
                <div class="skill-card">
                    <div class="skill-icon"><i class="fa-solid fa-diagram-project"></i></div>
                    <div class="skill-info">
                        <h3>UML</h3>
                        <p style="font-size:0.8rem; color:var(--text-muted);">Modélisation & Diagrammes</p>
                    </div>
                </div>
                <div class="skill-card">
                    <div class="skill-icon"><i class="fa-brands fa-git-alt"></i></div>
                    <div class="skill-info">
                        <h3>Git / GitHub</h3>
                        <p style="font-size:0.8rem; color:var(--text-muted);">Versionning & Collaboration</p>
                    </div>
                </div>
                <div class="skill-card">
                    <div class="skill-icon"><i class="fa-solid fa-mobile-screen"></i></div>
                    <div class="skill-info">
                        <h3>Responsive Design</h3>
                        <p style="font-size:0.8rem; color:var(--text-muted);">Mobile First & Adaptive</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Projets Réalisés Section -->
    <section id="projects" class="section">
        <div class="container">
            <div class="section-title">
                <h2>Projets Réalisés</h2>
                <p>Une sélection de mes travaux récents hébergés sur GitHub</p>
            </div>
            <div class="projects-grid">
                
                <!-- Projet 1 -->
                <div class="project-card">
                    <img src="https://images.unsplash.com/photo-1557821552-17105176677c?auto=format&fit=crop&w=600&q=80" alt="QuickAnnonces" class="project-img">
                    <div class="project-content">
                        <h3 class="project-title">QuickAnnonces</h3>
                        <p class="project-desc">Plateforme web dynamique de publication et de recherche d'petites annonces en ligne avec système de gestion d'utilisateurs.</p>
                        <div class="tech-tags">
                            <span class="tag">PHP</span>
                            <span class="tag">MySQL</span>
                            <span class="tag">JavaScript</span>
                            <span class="tag">CSS3</span>
                        </div>
                        <div style="display: flex; gap: 0.5rem; margin-top: auto;">
                            <a href="https://github.com/mariamtahayekt/QuickAnnonces" target="_blank" class="btn btn-secondary btn-sm" style="width: 100%; justify-content: center;">
                                <i class="fa-brands fa-github"></i> Voir sur GitHub
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Projet 2 -->
                <div class="project-card">
                    <img src="/image/mariam.jpg" alt="Portfolio Personnel" class="project-img" style="object-position: top;">
                    <div class="project-content">
                        <h3 class="project-title">Portfolio Personnel</h3>
                        <p class="project-desc">Site vitrine professionnel modern, performant et entièrement responsive, hébergé sur Vercel.</p>
                        <div class="tech-tags">
                            <span class="tag">HTML5</span>
                            <span class="tag">CSS3</span>
                            <span class="tag">PHP</span>
                            <span class="tag">Vercel</span>
                        </div>
                        <div style="display: flex; gap: 0.5rem; margin-top: auto;">
                            <a href="https://github.com/mariamtahayekt/Portfolio" target="_blank" class="btn btn-secondary btn-sm" style="width: 100%; justify-content: center;">
                                <i class="fa-brands fa-github"></i> Voir sur GitHub
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Projet 3 -->
                <div class="project-card">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=600&q=80" alt="Application Web" class="project-img">
                    <div class="project-content">
                        <h3 class="project-title">Gestionnaire de Tâches</h3>
                        <p class="project-desc">Application web interactive permettant la gestion de projets et la planification efficace des tâches quotidiennes.</p>
                        <div class="tech-tags">
                            <span class="tag">JavaScript</span>
                            <span class="tag">HTML/CSS</span>
                            <span class="tag">Local storage</span>
                        </div>
                        <div style="display: flex; gap: 0.5rem; margin-top: auto;">
                            <a href="https://github.com/mariamtahayekt" target="_blank" class="btn btn-secondary btn-sm" style="width: 100%; justify-content: center;">
                                <i class="fa-brands fa-github"></i> Voir sur GitHub
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 5. Mini-projets & Documentations Section -->
    <section id="mini-projets" class="section" style="background: #f1f5f9;">
        <div class="container">
            <div class="section-title">
                <h2>Mini-projets & Documentations</h2>
                <p>Documents techniques, analyses UML et rapports d'applications web</p>
            </div>
            <div class="projects-grid">

                <!-- Card Document UML Immobilière -->
                <div class="project-card">
                    <div style="height: 160px; background: linear-gradient(135deg, var(--bg-dark), #1e293b); display: flex; align-items: center; justify-content: center; color: var(--accent);">
                        <i class="fa-solid fa-diagram-project" style="font-size: 3.5rem;"></i>
                    </div>
                    <div class="project-content">
                        <span class="badge" style="width: fit-content;"><i class="fa-solid fa-file-pdf"></i> Documentation / UML</span>
                        <h3 class="project-title">Atelier UML — Agence Immobilière</h3>
                        <p class="project-desc">
                            Conception et modélisation UML complète pour une application web de gestion immobilière (diagrammes de classes, cas d'utilisation et de séquences).
                        </p>
                        <div class="tech-tags">
                            <span class="tag">UML</span>
                            <span class="tag">Conception Web</span>
                            <span class="tag">Analyse</span>
                        </div>
                        
                        <div style="display: flex; gap: 0.5rem; margin-top: auto; flex-wrap: wrap;">
                            <a href="/doc/Tahayekt_Mariam_Atelier UML_immobilière.pdf" target="_blank" class="btn btn-primary btn-sm">
                                <i class="fa-solid fa-eye"></i> Consulter
                            </a>
                            <a href="/doc/Tahayekt_Mariam_Atelier UML_immobilière.pdf" download="Tahayekt_Mariam_Atelier UML_immobilière.pdf" class="btn btn-secondary btn-sm">
                                <i class="fa-solid fa-download"></i> Télécharger DOC
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Futurs Mini-projets -->
                <div class="project-card">
                    <div style="height: 160px; background: linear-gradient(135deg, var(--bg-dark), #1e293b); display: flex; align-items: center; justify-content: center; color: var(--accent);">
                        <i class="fa-solid fa-laptop-code" style="font-size: 3.5rem;"></i>
                    </div>
                    <div class="project-content">
                        <span class="badge" style="width: fit-content;"><i class="fa-solid fa-code"></i> Application Web</span>
                        <h3 class="project-title">Mini-Projet Application Web</h3>
                        <p class="project-desc">
                            Rapport technique et cahier des charges d'une application web dynamique avec architecture MVC et base de données.
                        </p>
                        <div class="tech-tags">
                            <span class="tag">PHP</span>
                            <span class="tag">MySQL</span>
                            <span class="tag">Documentation</span>
                        </div>
                        <div style="display: flex; gap: 0.5rem; margin-top: auto;">
                            <a href="#" class="btn btn-secondary btn-sm" style="opacity: 0.6; pointer-events: none;">
                                <i class="fa-solid fa-clock"></i> En cours de rédaction
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 6. TD & Travaux Pratiques Section -->
    <section id="td" class="section">
        <div class="container">
            <div class="section-title">
                <h2>Mes TD & Travaux Pratiques</h2>
                <p>Consultez et téléchargez mes travaux académiques</p>
            </div>
            <div class="td-grid">
                
                <!-- TD 1 (Image) -->
                <div class="td-card">
                    <img src="/image/td1.jpeg" alt="TD 1" class="td-preview-img" onerror="this.src='https://via.placeholder.com/400x180?text=Aper%C3%A7u+TD+1'">
                    <div class="td-body">
                        <div class="td-type">Exercice Pratique / Image</div>
                        <h3 class="td-title">TD 1 — Structure & Styles</h3>
                        <p class="td-desc">Intégration d'une maquette responsive complète avec HTML5 et CSS Grid.</p>
                        <div class="td-actions">
                            <a href="/image/td1.jpeg" target="_blank" class="btn btn-primary btn-sm"><i class="fa-solid fa-eye"></i> Voir le TD</a>
                            <a href="/image/td1.jpeg" download class="btn btn-secondary btn-sm"><i class="fa-solid fa-download"></i> Télécharger</a>
                        </div>
                    </div>
                </div>

                <!-- Document PDF 1 -->
                <div class="td-card">
                    <div style="height:180px; background:var(--bg-dark); display:flex; align-items:center; justify-content:center; color:var(--accent);">
                        <i class="fa-solid fa-file-pdf" style="font-size: 3.5rem;"></i>
                    </div>
                    <div class="td-body">
                        <div class="td-type">Document PDF</div>
                        <h3 class="td-title">TD 2 — Algorithmique & SQL</h3>
                        <p class="td-desc">Exercices pratiques sur la conception de bases de données et requêtes SQL complexes.</p>
                        <div class="td-actions">
                            <a href="/doc/TD2-SQL.pdf" target="_blank" class="btn btn-primary btn-sm"><i class="fa-solid fa-folder-open"></i> Ouvrir</a>
                            <a href="/doc/TD2-SQL.pdf" download class="btn btn-secondary btn-sm"><i class="fa-solid fa-download"></i> Télécharger</a>
                        </div>
                    </div>
                </div>

                <!-- Document PDF 2 -->
                <div class="td-card">
                    <div style="height:180px; background:var(--bg-dark); display:flex; align-items:center; justify-content:center; color:var(--accent);">
                        <i class="fa-solid fa-file-code" style="font-size: 3.5rem;"></i>
                    </div>
                    <div class="td-body">
                        <div class="td-type">Document PDF / Rapport</div>
                        <h3 class="td-title">TP 1 — Dynamic Forms PHP</h3>
                        <p class="td-desc">Mise en place de formulaires sécurisés avec validation des données côté serveur en PHP.</p>
                        <div class="td-actions">
                            <a href="/doc/TP1-PHP.pdf" target="_blank" class="btn btn-primary btn-sm"><i class="fa-solid fa-folder-open"></i> Ouvrir</a>
                            <a href="/doc/TP1-PHP.pdf" download class="btn btn-secondary btn-sm"><i class="fa-solid fa-download"></i> Télécharger</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 7. Parcours / Formation Section -->
    <section id="timeline" class="section" style="background: #f1f5f9;">
        <div class="container">
            <div class="section-title">
                <h2>Parcours & Formation</h2>
                <p>Mon cheminement académique et mes étapes d'apprentissage</p>
            </div>
            <div class="timeline">
                
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-date">2024 — Présent</div>
                        <h3 class="timeline-title">Formation en Développement Digital</h3>
                        <p class="timeline-subtitle">Spécialisation Développement Web & Mobile</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-date">2023 — 2024</div>
                        <h3 class="timeline-title">Baccalauréat Scientifique</h3>
                        <p class="timeline-subtitle">Option Sciences Physiques — Mention Bien</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 8. Contact Section -->
    <section id="contact" class="section">
        <div class="container">
            <div class="section-title">
                <h2>Me Contacter</h2>
                <p>Un projet, une question ou une opportunité ? N'hésitez pas à me laisser un message.</p>
            </div>
            <div class="contact-card-wrapper">
                <div>
                    <h3 style="font-size: 1.5rem; font-weight: 700; color: var(--primary);">Restons en contact</h3>
                    <p style="color: var(--text-muted); margin-top: 0.5rem;">Je suis disponible pour toute opportunité de stage ou de collaboration académique.</p>
                    
                    <div class="contact-info-list">
                        <div class="contact-info-item">
                            <div class="contact-icon"><i class="fa-solid fa-envelope"></i></div>
                            <div>
                                <div style="font-size: 0.8rem; color: var(--text-muted);">Email</div>
                                <div style="font-weight: 600;">contact@mariamtahayekt.dev</div>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <div class="contact-icon"><i class="fa-brands fa-github"></i></div>
                            <div>
                                <div style="font-size: 0.8rem; color: var(--text-muted);">GitHub</div>
                                <div style="font-weight: 600;">github.com/mariamtahayekt</div>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <div class="contact-icon"><i class="fa-brands fa-linkedin-in"></i></div>
                            <div>
                                <div style="font-size: 0.8rem; color: var(--text-muted);">LinkedIn</div>
                                <div style="font-weight: 600;">linkedin.com/in/mariamtahayekt</div>
                            </div>
                        </div>
                    </div>
                </div>

                <form onsubmit="event.preventDefault(); alert('Message envoyé avec succès!');">
                    <div class="form-group">
                        <label class="form-label">Nom complet</label>
                        <input type="text" class="form-control" placeholder="Votre nom" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Adresse email</label>
                        <input type="email" class="form-control" placeholder="votre@email.com" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Message</label>
                        <textarea class="form-control" placeholder="Votre message..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width: 100%; justify-content: center;">
                        <i class="fa-solid fa-paper-plane"></i> Envoyer
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- 9. Footer -->
    <footer>
        <div class="container">
            <p>© 2026 Mariam Tahayekt — Tous droits réservés.</p>
        </div>
    </footer>

    <!-- Client-Side JavaScript -->
    <script>
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const navLinks = document.getElementById('navLinks');

        mobileMenuBtn.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            const icon = mobileMenuBtn.querySelector('i');
            if(navLinks.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-xmark');
            } else {
                icon.classList.remove('fa-xmark');
                icon.classList.add('fa-bars');
            }
        });

        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
                const icon = mobileMenuBtn.querySelector('i');
                if (icon) {
                    icon.classList.remove('fa-xmark');
                    icon.classList.add('fa-bars');
                }
            });
        });
    </script>
</body>
</html>