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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="footer.css">

    <link rel="stylesheet" href="css/cursor.css"> <!-- Added cursor.css -->
    <!----Font awesome cdn  font icon css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
<div id="fade-content">
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
                        <li><a href="Acceuil.php" class="active">Acceuil</a></li>
                        <li><a href="Portfolio.php">Portfolio</a></li>
                        <li><a href="Resume.php">Resume</a></li>
                        <li><a href="Ápropos.php">Á propos</a></li>
                        <li><a href="Contact.php">Contact</a></li>
                    </ul>
                </nav>
                <style>  
                    #container3D {
                      position: fixed; /* Makes the 3D background fixed */
                      top: 5cm;
                      left: 0;
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
                    #fade-content {
    opacity: 0; /* Start fully transparent */
    transition: opacity 6s ease-in-out; /* Fade duration */
}
                </style> 
            </header>
            <audio id="myAudio" src="opening.mp3"></audio>

            <div class="container">
                 <div class="hero-pic">
                    <img src="images/main.png" alt="profile pic">
                 </div>
                 <div class="hero-text">
                    <div id="container3D"></div>
                    <div id="content">
                    <h5>Hi I'm <span class="input">Computer Engineer</span></h5>
                    <h1 class="h1">Youness Elmorabet</h1>
                    <p >My name is Youness Elmorabet, and I am a third-year computer science student at the Université Privée de Fès. 
                        Passionate about networks and new technologies,
                         I strive to turn this passion into solid skills to meet the demands of the professional world.
                    </p>

                    <div class="btn-group">
                        <a href="Resume.pdf" class="btn active" id="downloadResume">Download CV</a>
                        <a href="ContactCard.pdf" class="btn active" id="downloadCard">Contact Card</a>
                    </div>

                    <div class="social">
                        <a href="https://www.instagram.com/youness_elmorabett/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/youness-elmorabet-1761aa339/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="https://www.facebook.com/youness.elmorabet.33" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://github.com/younesselmorabet" target="_blank"><i class="fa-brands fa-github"></i></a>
                    </div>
                    </div>
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
</div>

     <!---typed js for typing text effect-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.min.js"></script>
     <script>
        // Sélectionner le bouton de téléchargement du CV
        const downloadResumeBtn = document.getElementById("downloadResume");
    
        // Ajouter un gestionnaire d'événements au clic
        downloadResumeBtn.addEventListener("click", function (event) {
            // Empêche l'action par défaut (facultatif)
            event.preventDefault();
    
            // Logique de téléchargement ou action supplémentaire
            console.log("Téléchargement du CV lancé");
    
            // Déclenche le téléchargement du fichier
            const link = document.createElement("a");
            link.href = "Resume.pdf"; // Lien vers le fichier
            link.download = "Resume.pdf"; // Nom du fichier téléchargé
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        });
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
     <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script> 
    // Get the audio element
const audio = document.getElementById('myAudio');

// Play the audio when the page loads
window.onload = function() {
    audio.play().catch(function(error) {
        console.error('Error playing audio:', error);
    });
}
</script>
<script>
window.addEventListener('load', () => {
    const content = document.getElementById('fade-content');
    content.style.opacity = 1; // Fade in when the page loads
});
</script>

</body>
</html>

