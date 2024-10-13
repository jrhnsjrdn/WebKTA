<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>

<body>
    <div class="background-container-home">
        <!-- Logo tetap berada di luar ul.navbar -->
        <div class="logo-container">
            <a href="index.php">
                <img src="images/Logo KTA - Blak BG.png" alt="Kapitech Logo" class="logo">
            </a>
        </div>

        <?php include 'navbar.php'; ?>

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
                    <img src="images/th.jpeg" alt="Image 3">
                    <div class="text">
                        <h2>Pertamini</h2>
                        <p>Description of the third project.</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="images/bunglon.jpeg" alt="Image 4">
                    <div class="text">
                        <h2>pianoman</h2>
                        <p>Description of the aopkdpakwopaw project.</p>
                    </div>
                </div>
            </div>
            <div class="navigation">
                <i class="prev fa-solid fa-chevron-left"></i>
                <i class="next fa-solid fa-chevron-right"></i>
            </div>

            <script src="js/slider.js"></script>
        </div>

        <div class="contact-container">
            <div class="title">
                <h1>Get In Touch with KTA&reg;</h1>
            </div>
            <div class="input-info">
                <form action="/action_page.php">
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">
                    <input type="text" id="lname" name="lastname" placeholder="Email..">
                    <input type="text" id="lname" name="lastname" placeholder="Tell us about your project..">
                </form>
            </div>
            <div class="interest-button-pick">
                <h5>I'm Interested in...</h5>
                <button type="button">abc</button>
            </div>
            <div class="send-button">
                <button type="submit">Send</button>
            </div>
        </div>

        <div class="about">
            <p>Kapitech is a leading digital agency based on Jakarta, Indonesia.
                offering a wide range of services to help businesses to thrive in the digital landscape.
                With our commitment to inovation, creativity and delivering exceptional results, we are the ideal partner for companies seeking personalized and effective digital solutions.
                <a href="agency.php">See Our Work ></a>
            </p>
            <p><a href="agency.php">About KTA&reg; ></a></p>
        </div>

        <div class="services">
            <h2>Our Services</h2>
            <div class="service-container">
                <div class="service">
                    <h3>Web Development</h3>
                </div>
                <div class="service">
                    <h3>Branding & Identity</h3>
                </div>
                <div class="service">
                    <h3>UI/UX Design</h3>
                </div>
                <div class="service">
                    <h3>3D Event Model</h3>
                </div>
            </div>
        </div>

        <?php include 'footer.php'; ?>

        <script src="js/hamburgerMenu.js"></script>
</body>

</html>