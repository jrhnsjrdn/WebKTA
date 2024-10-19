<!DOCTYPE html>
<html lang="en">

<?php include 'pages/header.php'; ?>

<body>
    <div class="background-container-home">
        <!-- Logo tetap berada di luar ul.navbar -->
        <div class="logo-container">
            <a href="index.php">
                <img src="images/Logo KTA - Blak BG.png" alt="Kapitech Logo" class="logo">
            </a>
        </div>

        <?php include 'pages/navbar.php'; ?>

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

        <div class="about">
            <p>Kapitech is a leading digital agency based on Jakarta, Indonesia.
                offering a wide range of services to help businesses to thrive in the digital landscape.
                With our commitment to inovation, creativity and delivering exceptional results, we are the ideal partner for companies seeking personalized and effective digital solutions.
                <a href="agency.php">See Our Work ></a>
            </p>
            <p><a href="agency.php">About KTA&reg; ></a></p>
        </div>
        <div class="clients">
            <h2>Our Clients</h2>
            <div class="client-container">
                <div class="client">
                    <img src="images/Clients Logo/Pertamina.PNG" alt="Client 1">
                    <img src="images/Clients Logo/Navees.WEBP" alt="Client 2">
                    <img src="images/Clients Logo/Markplus.PNG" alt="Client 3">
                    <img src="images/Clients Logo/Logo SAP.png" alt="Client 4">
                    <img src="images/Clients Logo/Logo INA Solusi Indonesia.png" alt="Client 5">
                    <img src="images/Clients Logo/Bank BTN.PNG" alt="Client 6">
                    <img src="images/Clients Logo/Logo SAP.png" alt="Client 4">
                    <img src="images/Clients Logo/Logo INA Solusi Indonesia.png" alt="Client 5">
                    <img src="images/Clients Logo/Bank BTN.PNG" alt="Client 6">
                    <img src="images/Clients Logo/Pertamina.PNG" alt="Client 1">
                    <img src="images/Clients Logo/Navees.WEBP" alt="Client 2">
                    <img src="images/Clients Logo/Markplus.PNG" alt="Client 3">
                    <img src="images/Clients Logo/Logo SAP.png" alt="Client 4">
                    <img src="images/Clients Logo/Logo INA Solusi Indonesia.png" alt="Client 5">
                    <img src="images/Clients Logo/Bank BTN.PNG" alt="Client 6">
                    <img src="images/Clients Logo/Logo SAP.png" alt="Client 4">
                    <img src="images/Clients Logo/Logo INA Solusi Indonesia.png" alt="Client 5">
                    <img src="images/Clients Logo/Bank BTN.PNG" alt="Client 6">
                </div>
            </div>
        </div>
        <div class="services">
            <h2>Our Services</h2>
            <div class="service-container">
                <div class="service">
                    <input type="radio" id="button1" name="btn" checked>
                    <input type="radio" id="button2" name="btn">
                    <input type="radio" id="button3" name="btn">
                    <input type="radio" id="button4" name="btn">

                    <button class="btn" onclick="selectButton('para1')">Button 1</button>
                    <button class="btn" onclick="selectButton('para2')">Button 2</button>
                    <button class="btn" onclick="selectButton('para3')">Button 3</button>
                    <button class="btn" onclick="selectButton('para4')">Button 4</button>
                </div>
                <div class="paragraph">
                    <p class="content" id="para1">
                        We specialize in developing top-tier websites through the incorporation of contemporary design methodologies. The integration of mobile-first principles and seamless web experiences is imperative for the triumph of your online initiative. Our team is committed to upholding bespoke originality while placing a strong emphasis on responsive design, meticulously optimizing your website for various devices and interfaces. The end result will be a new website designed to allure coveted target audiences,
                        enhance user engagement, stimulate sales, and ultimately elevate the brand value of your business.</p>
                    <p class="content" id="para2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit pariatur sunt assumenda laboriosam, eveniet dicta accusantium iure obcaecati numquam alias veniam perspiciatis modi adipisci fugit maxime quasi, praesentium eius quo rem itaque veritatis incidunt possimus? Harum doloremque reprehenderit neque, nisi qui, architecto inventore molestiae quam provident et voluptatum? Neque, voluptatem..</p>
                    <p class="content" id="para3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo blanditiis, aperiam esse voluptatem, cupiditate quam laudantium fuga alias et culpa quaerat in ipsa mollitia, similique nostrum veniam expedita. Aperiam obcaecati facilis doloribus animi earum asperiores aspernatur perspiciatis autem est maxime dolor, dolore atque et rem delectus optio veritatis illo! Ipsum!</p>
                    <p class="content" id="para4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis quibusdam, ea ea quo, minima neque, magnam repudiandae numquam dicta voluptatum perspiciatis quidem ratione quisquam. Quo, placeat repellendus? Cumque, molestias! Officiis, iure? Suscipit, architecto nemo repellendus voluptatum </p>
                </div>
            </div>
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

        <div class="row">
            <div class="column">
                <div class="card">
                    <img src="images/Client Porto/1.jpg">
                    <h2>Pertamina</h2>
                    <h3>App Design / Branding / Graphic Design / Packaging Design / UI/UX / Web Design</h3>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="images/Client Porto/75.jpg">
                    <h2>Navees</h2>
                    <h3>Lorem ipsum dolor sit amet.</h3>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="images/Client Porto/Frame 3.jpg">
                    <h2>Bank BTN</h2>
                    <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="images/Client Porto/Frame 36.jpg">
                    <h2>Markplus</h2>
                    <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum!</h3>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="images/Client Porto/Frame 4.jpg">
                    <h2>BKKBN</h2>
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                </div>
            </div>
            <div class="navigation-card">
                <i class="prevCard fa-solid fa-chevron-left"></i>
                <i class="nextCard fa-solid fa-chevron-right"></i>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="js/hamburgerMenu.js"></script>
    <script src="js/serviceParagraphContent.js"></script>
    <script src="js/cardSlider.js"></script>
</body>

</html>