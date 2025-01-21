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
    <title>Youness E-CV</title>
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/cursor.css"> <!-- Added cursor.css -->
    <link rel="stylesheet" href="css/hover-effects.css"> <!-- Added hover-effects.css -->
    <!----Font awesome cdn  font icon css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<style>  
    #container3D {
        position: fixed; /* Makes the 3D background fixed */
        top: 0; /* Updated to move to the top */
        left: 0; /* Updated to align to the left */
        width: 100%;
        height: 100%;
        z-index: 999; /* Sends the 3D model to the background */
        pointer-events: none; /* Prevents interactions with the 3D canvas */
    }
    
    #content {
        position: relative; /* Keeps the text content above the background */
        padding: 20px;
        max-width: 1400px;
        margin: 0 auto;
        line-height: 1.5;
    }
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: #cce7f0;
    }

    .grid-container {
            display: grid;
            grid-template-areas:
                "top-left top-right"
                "middle-left middle-right"
                "bottom-left bottom-right"
                "extra-left extra-right";
            grid-template-columns: 1fr 1fr;
            grid-template-rows: auto auto auto auto;
            gap: 10px;
            padding: 20px;}

    .box {
        background-color: #3a3d3d;
        color: #040404;
        padding: 20px;
        text-align: center;
        font-size: 16px;
        border: 1px solid #000000;
        border-radius: 8px;
    }

    .top-left {
        grid-area: top-left;
    }

    .top-right {
        grid-area: top-right;
    }

    .middle-left {
        grid-area: middle-left;
    }

    .middle-right {
        grid-area: middle-right;
    }

    .bottom-left {
        grid-area: bottom-left;
    }

    .bottom-right {
        grid-area: bottom-right;
    }

    .extra-left {
        grid-area: extra-left;
    }

    .extra-right {
        grid-area: extra-right;
    }
</style> 
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
                        <li><a href="Portfolio.php">Portfolio</a></li>
                        <li><a href="Resume.php" class="active">Resume</a></li>
                        <li><a href="Ápropos.php">Á propos</a></li>
                        <li><a href="Contact.php">Contact</a></li>
                    </ul>
                </nav>
                <div class="container">
                    <div class="resume-section">
                        <div class="grid-container">
                            <div class="box top-left"><h2 class="h1">Experience</h2>
                                <h3 class="h2">Morabelec Nador — Store Manager</h3>
                                <p>
                                    <strong>Description du poste:</strong> En tant que gestionnaire de magasin chez Morabelc,
                                    j'étais responsable de la gestion quotidienne du magasin, assurant un service client
                                    exceptionnel et optimisant les opérations de vente.
                                </p>
                                <h3 class="h2">Concentrix Fès — Agent de Service Client</h3>
                                <p>
                                    <strong>Support Technique chez l'opérateur téléphonique Bouygues Télécom</strong><br>
                                </p>
                            </div>
                            <div class="box top-right">
                                <h2 class="h1">Diplômes</h2>
                                <h3 class="h2">Abdelkrim Alkhatabi, Nador — Niveau Bac</h3>
                                <p>
                                    Je suis diplômé du lycée Abdelkrim Alkhatbi en 2022 avec un baccalauréat en sciences physiques.
                                </p>
                                
                                </ul>
                            </div>
                            <div id="container3D"></div> <!-- 3D object positioned here -->
                            <div class="box bottom-left">
                                
                                    <h2 class="h1">projets <i class="fa-solid fa-diagram-project"></i></h2>
                                    <h3 class="h2">MyFit Fes Gyms Site</h3>
                                    <p>Développement d'un site interactif répertoriant les salles de sport de Fès avec filtres
                                         avancés (Node.js, JavaScript, carte interactive).</p>
                                    <h3 class="h2">TicTacToe Against AI Game</h3>
                                    <p>Jeu de Tic-Tac-Toe avec IA imbattable utilisant l'algorithme Minimax (Python, console).</p>
                                    <h3 class="h2">Tren Gym</h3>
                                    <p>Plateforme web pour salle de sport avec gestion d'abonnements et contenu personnalisé 
                                        (HTML, CSS, JavaScript, Node.js).</p>
                                    <h3 class="h2">Vegan And Herbal Cosmetics</h3>
                                    <p>Site de vente de cosmétiques sous WordPress/WooCommerce, 
                                        design responsive et SEO optimisé.</p>
                            </div>
                            <div class="box bottom-right">
                                <h2 class="h1">Languages <i class="fa-solid fa-language"></i></h2>
                                <div class="language-bar">
                                    <div>
                                        <span class="h2">French</span>
                                        <div class="bar"><div class="progress" style="width: 90%;"></div></div>
                                    </div>
                                    <div>
                                        <span class="h2">English</span>
                                        <div class="bar"><div class="progress" style="width: 75%;"></div></div>
                                    </div>
                                    <div>
                                        <span class="h2">Arabic</span>
                                        <div class="bar"><div class="progress" style="width: 100%;"></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="box middle-right">
                                <h2 class="h1">Compétences</h2>
                                <p>
                                    <strong>Techniques :</strong> HTML (90%), CSS (85%), JavaScript (70%) <br>
                                    <strong>Soft Skills :</strong> Gestion de projet, Communication, Travail en équipe <br>
                                    <strong>Visualisation : </strong>Barres de progression et badges
                                </p>
                            </div><div class="box middle-left">
                                <ul>
                                    <h2 class="h1">Skills</h2>
                                    <li>Web Development: HTML, CSS, JavaScript</li>
                                    <li>Networking: TCP/IP, Network Configuration</li>
                                    <li>Tools: Git, XAMPP, VS Code</li>
                                </ul>
                            </div><div class="box extra-right">
                                <h2 class="h1">Certification</h2>
                                <h3 class="h2">Python Certified Entry-Level Programmer (PCEP)</h3>
                                <ul>
                                    <li>Institution : Python Institute</li>
                                    <li>Année d'obtention : 2021</li>
                                    <li>Détails : Certification officielle pour programmeur Python débutant,
                                         validant des compétences de base en programmation Python.</li>
                                </ul>
                                <h3 class="h2">Microsoft Office Specialist (MOS)</h3>
                                <ul>
                                    <li>Institution : Microsoft</li>
                                    <li>Année d'obtention : 2022</li>
                                    <li>Détails : Certification validant la maîtrise des outils
                                         bureautiques Microsoft (Word, Excel, PowerPoint, etc.).</li>
                            </div><div class="box extra-left">
                                <h2 class="h1">Centres d'Intérêts</h2>
                                
                                <h3 class="h2">Sport d'équipe <i class="fa-solid fa-basketball"></i></h3>
                                <p>Passionné par les sports d’équipe, j'apprécie le travail en
                                     collaboration et le développement de stratégies collectives.</p>
                                <h3 class="h2">Lecture <i class="fa-solid fa-book"></i></h3>
                                <p>Passionné de lecture, particulièrement dans les domaines de la technologie et
                                     du développement personnel, ce qui m’aide à élargir mes connaissances et à rester informé.</p>
                                <h3 class="h2">Voyages <i class="fa-solid fa-plane"></i></h3>
                                <p>Découvrir de nouvelles cultures et relever des défis, 
                                    ce qui nourrit ma curiosité et mon adaptabilité.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
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
    <!---typed js for typing text effect-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.min.js"></script>
    <script>
        /** creating button click show hide navbar **/
        var togglebtn=document.querySelector(".togglebtn");
        var nav=document.querySelector(".navlinks");
        var links=document.querySelector(".navlinks li");

        togglebtn.addEventListener("click", function(){
            this.classList.toggle("click");
            nav.classList.toggle("open");
        })

        var typed=new Typed(".input",{
            strings:["Web Developer"],
            typedSpeed:200,
            backSpeed:100,
            loop:true
        })
    </script>
    <script type="module" src="js/main.js"></script>
    <script src="js/cursor.js"></script> <!-- Added cursor.js -->
    <script src="js/hover-effects.js"></script> <!-- Added hover-effects.js -->
</body>
</html>
