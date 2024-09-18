<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kapitech Agency</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://kit.fontawesome.com/385c38e2c5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="background-container">
        <!-- Logo tetap berada di luar ul.navbar -->
        <div class="logo-container">
            <a href="index.php">
                <img src="images/Logo KTA - Blak BG.png" alt="Kapitech Logo" class="logo">
            </a>
        </div>

        <button class="hamburger" onclick="toggleMenu()">
            <i class="fa fa-bars"></i>
        </button>

        <ul class="navbar">
            <li><a href="work.php">Work</a></li>
            <li><a href="agency.php">Agency</a></li>
            <div class="dropdown">
                <button class="dropbtn">Services
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="#">Web</a>
                    <a href="#">Design</a>
                    <a href="#">Photography</a>
                </div>
            </div>
            <li><a href="about.asp">News</a></li>
            <li class="contact"><a href="about.asp">Contact</a></li>
        </ul>
    </div>

    <div class="slider-container">
        <div class="slider">
            <div class="slide">
                <img src="images/download.jpeg" alt="Image 1">
                <div class="text">
                    <h2>Pertamina</h2>
                    <p>Web Design / Branding / UI/UX / Graphic Design</p>
                </div>
            </div>
            <div class="slide">
                <img src="images/th (1).jpeg" alt="Image 2">
                <div class="text">
                    <h2>Another Project</h2>
                    <p>Description of the second project.</p>
                </div>
            </div>
            <div class="slide">
                <img src="images/th.jpeg" alt="Image 2">
                <div class="text">
                    <h2>Pertamini</h2>
                    <p>Description of the second project.</p>
                </div>
            </div>
        </div>
        <div class="navigation">
            <i class="prev fa-solid fa-chevron-left"></i>
            <i class="next fa-solid fa-chevron-right"></i>
        </div>
    </div>

    <div>
        
    </div>


    <script src="js/slider.js"></script>
    <script src="js/hamburgerMenu.js"></script>
</body>

</html>