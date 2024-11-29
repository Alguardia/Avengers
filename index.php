<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anthony Stark - Développeur Fullstack</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
<nav>
        <div class="nav-content">
            <div class="logo">A.S</div>
            <div class="nav-links">
                <a href="index.php" class="active">Accueil</a>
                <a href="about.php">À propos</a>
                <a href="contact.php">Contact</a>
                <a href="login.php">Login</a>
            </div>
        </div>
    </nav>

    <main>
        <section class="hero">
            <div class="hero-content">
                <h1>Anthony Stark</h1>
                <h2>Développeur Fullstack & Innovateur</h2>
                <p>Créateur de solutions technologiques avancées</p>
                <button class="download-btn">
                    <a class="download2-btn" href="CV-Anthony_STARK.pdf">
                    Télécharger CV
                    </a>
                </button>
            </div>
        </section>

        <section id="education">
            <h2>Parcours</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <h3>Master en Sécurité Informatique</h3>
                    <p>École Supérieure d'Ingénierie Numérique - 2022</p>
                </div>
                <div class="timeline-item">
                    <h3>Bachelor en Développement Full Stack</h3>
                    <p>Institut Technologique de Digital Innovation - 2020</p>
                </div>
            </div>
        </section>

        <section class="projects">
            <h2>Projets Innovants</h2>
            <div class="project-grid">
                <div class="project-card" onclick="window.location.href='projects/jarvis.php'">
                    <h3>J.A.R.V.I.S</h3>
                    <p>Assistant virtuel intelligent pour la gestion de projet</p>
                    <span class="tech-stack">Node.js • AI • API</span>
                </div>
                <div class="project-card" onclick="window.location.href='projects/mark.php'">
                    <h3>Mark Framework</h3>
                    <p>Framework JavaScript hautement performant</p>
                    <span class="tech-stack">JavaScript • WebAssembly</span>
                </div>
                <div class="project-card" onclick="window.location.href='projects/ultron.php'">
                    <h3>Projet Ultron</h3>
                    <p>Système de sécurité automatisé</p>
                    <span class="tech-stack">Python • Machine Learning</span>
                </div>
                <div class="project-card" onclick="window.location.href='projects/friday.php'">
                    <h3>F.R.I.D.A.Y</h3>
                    <p>Interface de gestion de tâches intelligente</p>
                    <span class="tech-stack">React • Node.js</span>
                </div>
                <div class="project-card" onclick="window.location.href='projects/jerico.php'">
                    <h3>Jerico</h3>
                    <p>assistant virtuel conçu pour la gestion des missions</p>
                    <span class="tech-stack">React • Node.js</span>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>© 2024 Anthony Stark. Tous droits réservés.</p>
    </footer>
</body>
</html>