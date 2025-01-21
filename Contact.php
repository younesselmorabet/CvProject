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
    <title>Contact - Youness E-CV</title>
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/cursor.css"> <!-- Added cursor.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
<h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
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
                        <li><a href="Ápropos.php">Á propos</a></li>
                        <li><a href="Contact.php" class="active">Contact</a></li>
                    </ul>
                </nav>
                <style>
        /* General styling for the contact section */
        .contact-section {
            text-align: left;
            font-size: 30px;
            border: 1px solid #000000;
            border-radius: 8px;
            padding: 20px;
            max-width: 1000px;
            margin: 0 auto;
        }

        /* Styling for the form labels and inputs */
        .playfair-display-header {
            display: block;
            margin: 10px 0 5px;
            font-size: 18px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        textarea {
            resize: vertical;
            height: 150px;
        }

        /* Styling for the submit button */
        .btn-group {
            text-align: center;
        }

        .btn {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }

        .btn.active {
            background-color: #0056b3;
        }

        .btn:hover {
            background-color: #004080;
        }
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
                        background-color: #3a3d3d;
                        color: #040404;
                        padding: 20px;
                        text-align: center;
                        font-size: 30px;
                        border: 1px solid #000000;
                        border-radius: 8px;
                    }
                </style> 
            </header>
            <div class="container">
                <div class="contact-section">
                    <div id="container3D"></div>
                    <div id="content">
                        <h1 class="h1">Contact Me</h1>
                        <form id="contact-form" method="POST" action="process_contact.php">
                            <label for="name" class="playfair-display-header">Full Name</label>
                            <input type="text" id="name" name="name" required> <br>
                            <label for="email" class="playfair-display-header">Email</label>
                            <input type="email" id="email" name="email" required> <br>
                            <label for="message" class="playfair-display-header">Message</label>
                            <textarea id="message" name="message" required></textarea> <br>
                            <div class="btn-group">
                                <button type="submit" class="btn active" id="sendMessage">Send Message</button>
                            </div>
                        </form>
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
<p>&copy;2025 Youness El Morabett | All Rights Reserved</p>
</footer>
     
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
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
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>

