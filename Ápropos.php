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
        top: -1cm; /* Updated to move to the top */
        left: 0; /* Updated to align to the left */
        width: 100%;
        height: 100%;
        z-index: 999; /* Sends the 3D model to the background */
        pointer-events: none; /* Prevents interactions with the 3D canvas */
        transform: translateY(-10px); /* Slightly position upwards */
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
            "3d-object 3d-object"
            "bottom-left bottom-right";
        grid-template-columns: 1fr 1fr;
        grid-template-rows: auto auto auto;
        gap: 10px;
        padding: 20px;
    }

    .box {
        background-color: #3a3d3d;
        color: #fff;
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

    .bottom-left {
        grid-area: bottom-left;
    }

    .bottom-right {
        grid-area: bottom-right;
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
                        <li><a href="Resume.php">Resume</a></li>
                        <li><a href="Ápropos.php" class="active">Á propos</a></li>
                        <li><a href="Contact.php">Contact</a></li>
                    </ul>
                </nav>
                <div class="container">
                    <div class="resume-section">
                        <div class="grid-container">
                            <div class="box top-left"><h2 class="h2"> Introduction personnelle</h2><br>
                                <p>
                                    <strong>Je me presente:</strong> Je m'appelle Youness El Morabet, un développeur web 
                                    passionné par la création de solutions numériques innovantes et efficaces.
                                </p>
                            </div>
                            <div id="container3D"></div> <!-- 3D object positioned here -->
                            <div class="box top-right">
                                <h2 class="h2">Compétences et expertise</h2><br>
                                <p>Je suis compétent en informatique et maîtrise plusieurs langages de programmation, notamment C++, JavaScript et Python. Lors de ma dernière mission chez Maroc telecom, j’ai conçu et déployé des modifications sur la base de donnée de la société, ce qui a permis [impact ou résultat].
                                </p>
                            </div>
                            <div class="box bottom-left">
                                
                                    <h2 class="h2">Objectifs professionnels et aspirations</h2><br>
                                    <p>Mon objectif pour les prochaines années est de développer mes compétences techniques tout en évoluant vers un rôle de leadership. Je cherche à contribuer à des projets 
                                        innovants en utilisant des technologies de pointe pour résoudre des problématiques complexes et avoir un impact réel.</p>
                            
                            </div>
                            <div class="box bottom-right">
                                <h2 class="h2">Valeurs et motivation</h2><br>
                                <p>Je suis passionné par l'innovation et le travail en équipe. Ce qui me motive chaque jour, c’est de contribuer à des projets qui apportent
                                     des solutions concrètes et un impact réel sur la société et les utilisateurs.
                                </p>
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
     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.min.js"></script>
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
    <script src="js/hover-effects.js"></script> <!-- Added hover-effects.js -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
