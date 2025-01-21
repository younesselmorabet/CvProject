<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Youness E-CV</title>
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/cursor.css"> <!-- Added cursor.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <style>
       .portfolio-slider {
            position: relative;
            overflow: hidden;
            width: 100%;
            max-width: 1200px;
            margin: 50px auto;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            background-color: #007ced; /* Background slightly matching theme */
        }

        .portfolio-slider-container {
            display: flex;
            transition: transform 0.6s ease-in-out;
        }

        .project-card {
            min-width: 100%;
            box-sizing: border-box;
            padding: 20px;
            background-color: #383a3b; /* Card background */
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .project-card img {
            width: 100%;
            max-width: 400px;
            height: auto;
            border-radius: 10px;
            display: block;
            margin: 0 auto;
            transition: transform 0.3s ease;
        }

        .project-card img:hover {
            transform: scale(1.05);
        }

        .project-details {
            text-align: center;
            margin-top: 15px;
        }

        .slider-nav {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }

        .slider-nav button {
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
            border: none;
            padding: 15px;
            cursor: pointer;
            border-radius: 50%;
            transition: background-color 0.3s ease;
        }

        .slider-nav button:hover {
            background-color: rgba(3, 48, 138, 0.8);
        }

        .slider-pagination {
            position: absolute;
            bottom: 15px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
        }

        .slider-pagination span {
            width: 12px;
            height: 12px;
            background-color: rgba(0, 0, 0, 0.3);
            border-radius: 50%;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .slider-pagination span.active {
            background-color: #03308a; /* Active color matches theme */
        }
    </style>
</head>
<body>
    <div class="hero-header">
        <div class="wrapper">
            <header>
                <div class="logo">
                    <i class="fa-solid fa-building"></i>
                    <div class="logo-text">Youness El Morabet</div>
                </div>
                <nav>
                    <div class="togglebtn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <ul class="navlinks">                     
                        <li><a href="Acceuil.php">Acceuil</a></li>
                        <li><a href="Portfolio.php" class="active">Portfolio</a></li>
                        <li><a href="Resume.php">Resume</a></li>
                        <li><a href="Ápropos.php">Á propos</a></li>
                        <li><a href="Contact.php">Contact</a></li>
                    </ul>
                </nav>
            </header>
            <h1 class="h1">My Portfolio</h1>
            <div class="portfolio-slider">
                <div class="portfolio-slider-container">
                    <!-- Example project 1 -->
                    <div class="project-card">
                        <img src="images/HomeMyFit.jpg" alt="Project 1">
                        <div class="project-details">
                            <h2 class="h2">MyFit Fes Gyms Site</h2>
                            <p class="playfair-display-header">Un site web interactif qui répertorie les salles de sport de Fès avec filtres avancés.
                                 Les utilisateurs peuvent rechercher par localisation, type d’activités (yoga, musculation, etc.), budget ou services (coach, piscine). 
                                 Chaque salle dispose d’une fiche détaillée avec photos, horaires et avis. Le site est responsive,
                                  intègre une carte interactive, et utilise Node.js pour le backend et JavaScript pour les filtres dynamiques.</p>
                        </div>
                    </div>
                    <!-- Example project 2 -->
                    <div class="project-card">
                        <img src="images/TicTac.png" alt="Project 2">
                        <div class="project-details">
                            <h2 class="h2">TicTacToe Against Ai Game </h2>
                            <p class="playfair-display-header">Ce projet Python implémente un jeu de Tic-Tac-Toe avec une IA imbattable utilisant l'algorithme Minimax.
                                 L'interface en console affiche une grille 3x3 où le joueur peut affronter l'IA.
                                  L'algorithme analyse toutes les possibilités pour garantir le meilleur coup à chaque tour, rendant l'IA stratégique et optimale.</p>
                        </div>
                    </div>
                    <!-- Example project 3 -->
                    <div class="project-card">
                        <img src="images/TrenGym.png" alt="Project 3">
                        <div class="project-details">
                            <h2 class="h2">Tren Gym (The Gym of Your Dreams)</h2>
                            <p class="playfair-display-header">TrenGym est une plateforme web pour une salle de sport, construite avec HTML, CSS, et JavaScript côté client, et Node.js côté serveur.
                                 Elle permet aux utilisateurs de Découvrir les services et cours disponibles, S’inscrire en ligne et gérer leurs abonnements, 
                                 Accéder à des contenus personnalisés (vidéos, conseils, etc.). Le design est moderne, responsive et optimisé pour une expérience utilisateur fluide.</p>
                        </div>
                    </div>
                    <!-- Example project 4 -->
                    <div class="project-card">
                        <img src="images/DermoLea.png" alt="Project 4">
                        <div class="project-details">
                            <h2 class="h2">Vegan And Herbal Comsetics </h2>
                            <p class="playfair-display-header">Un site WordPress de vente de cosmétiques propose une boutique en ligne élégante et intuitive.
                                 Grâce à WooCommerce, il offre un catalogue organisé (maquillage, soins, cheveux), des fiches produits détaillées, et des options de paiement sécurisées.
                                  Une page d’accueil attrayante met en avant les nouveautés et promotions, tandis qu’un blog beauté inspire et engage les clients.
                                   Le design est responsive, SEO optimisé et intégré aux réseaux sociaux pour une visibilité maximale.</p>
                        </div>
                    </div>
                </div>
                <div class="slider-nav">
                    <button id="prevBtn">&#8249;</button>
                    <button id="nextBtn">&#8250;</button>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">

<div class="waves">
  <div class="wave" id="wave1"></div>
  <div class="wave" id="wave2"></div>
  <div class="wave" id="wave3"></div>
  <div class="wave" id="wave4"></div>
</div>
<ul class="social-icon">
  <li class="social-icon__item"><a class="social-icon__link" href="https://www.facebook.com/youness.elmorabet.33">
      <ion-icon name="logo-facebook"></ion-icon>
    </a></li>
  <li class="social-icon__item"><a class="social-icon__link" href="https://github.com/younesselmorabet">
      <ion-icon name="logo-github"></ion-icon>
    </a></li>
  <li class="social-icon__item"><a class="social-icon__link" href="https://www.linkedin.com/in/youness-elmorabet-1761aa339/">
      <ion-icon name="logo-linkedin"></ion-icon>
    </a></li>
  <li class="social-icon__item"><a class="social-icon__link" href="https://www.instagram.com/youness_elmorabett/">
      <ion-icon name="logo-instagram"></ion-icon>
    </a></li>
</ul>
<ul class="menu">
  <li class="menu__item"><a class="menu__link" href="Acceuil.php">Acceuil</a></li>
  <li class="menu__item"><a class="menu__link" href="Portfolio.php">Portfolio</a></li>
  <li class="menu__item"><a class="menu__link" href="Resume.php">Resume</a></li>
  <li class="menu__item"><a class="menu__link" href="Ápropos.php">Ápropos</a></li>
  <li class="menu__item"><a class="menu__link" href="Contact.php">Contact</a></li>

</ul>
<p>&copy;2025 youness elmorabett | All Rights Reserved</p>
</footer> 
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        const sliderContainer = document.querySelector('.portfolio-slider-container');
        const projects = document.querySelectorAll('.project-card');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const pagination = document.createElement('div');

        let currentIndex = 0;

        // Create pagination dots
        pagination.classList.add('slider-pagination');
        projects.forEach((_, index) => {
            const dot = document.createElement('span');
            dot.dataset.index = index;
            dot.addEventListener('click', () => {
                currentIndex = index;
                updateSlider();
            });
            pagination.appendChild(dot);
        });
        document.querySelector('.portfolio-slider').appendChild(pagination);

        function updateSlider() {
            sliderContainer.style.transform = `translateX(-${currentIndex * 100}%)`;
            document.querySelectorAll('.slider-pagination span').forEach((dot, index) => {
                dot.classList.toggle('active', index === currentIndex);
            });
        }

        prevBtn.addEventListener('click', () => {
            currentIndex = (currentIndex === 0) ? projects.length - 1 : currentIndex - 1;
            updateSlider();
        });

        nextBtn.addEventListener('click', () => {
            currentIndex = (currentIndex === projects.length - 1) ? 0 : currentIndex + 1;
            updateSlider();
        });

        // Initialize active dot
        updateSlider();
    </script>
    <script>
        var togglebtn=document.querySelector(".togglebtn");
        var nav=document.querySelector(".navlinks");
        var links=document.querySelector(".navlinks li");

        togglebtn.addEventListener("click", function(){
            this.classList.toggle("click");
            nav.classList.toggle("open");
        })
    </script>
    <script type="module" src="js/main.js"></script>
    <script src="js/cursor.js"></script> <!-- Added cursor.js -->
</body>
</html>