<?php
    include("inc/head.php");
?>
    <!-- home section design -->
    <section class="home" id="home">
        <div class="home-content">
            <h3>Hello, It's Me</h3>
            <h1>Fırat Işıldak</h1>
            <h3>And I'm a <span class="multiple-text"></span></h3>
            <?php
            $menuItems2 = array();
            $result2 = $db->query("SELECT * FROM introduction");
            if ($result2->rowCount() > 0) {
                while ($row = $result2->fetch(PDO::FETCH_ASSOC)) {
                    $menuItem2 = array("id"=>$row["introductionID"], "write" => $row["introductionWrite"]);
                    $menuItems2[] = $menuItem2;
                }
            } else {
                echo "Veritabanında hiç veri bulunamadı.";
            }
            foreach ($menuItems2 as $item) {
                echo '<p>' . $item["write"] . '</p>';
            }
            ?>

            <div class="social-media">
                <a href="https://www.instagram.com/firatisildak1/"><i class="fa-brands fa-square-instagram"></i></a>
                <a href="https://www.linkedin.com/in/fırat-işıldak-608176250/"><i class="fa-brands fa-linkedin social"></i></a>
                <a href="https://github.com/yazilimcifirat"><i class="fa-brands fa-github social"></i></a>

            </div>
            <a href="#" class="btn">Download CV</a>
        </div>
        <div class="home-img">
            <img src="img/ProfilFoto.png" alt="">
        </div>
    </section>
    <!-- about section design -->
    <section class="about" id="about">
        <div class="about-img">
            <img src="img/ProfilFoto.png" alt="">
        </div>
        <div class="about-content">
            <h2 class="heading">About Me</h2>
            <h3>Frontend Developer</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti veniam ducimus veritatis! Beatae soluta hic aspernatur amet distinctio, quis, voluptate officia ea consequuntur alias necessitatibus tempore tenetur aperiam dignissimos vero.</p>
            <a href="#" class="btn">Read More</a>
        </div>
    </section>
    <section class="services" id="services">
        <h2 class="heading">Blog Posts</h2>
        <div class="services-container">
            <div class="services-box">
                <i class="fa-solid fa-code"></i>
                <h3>Web Developer</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga temporibus, id nobis ad incidunt voluptatum molestias facilis et cumque, voluptatibus consequuntur deserunt dolorem itaque. Officia aliquid pariatur vitae quas voluptas?</p>
                <a href="#" class="btn">Read More</a>
            </div>
            <div class="services-box">
                <i class="fa-solid fa-pen-nib"></i>
                <h3>Graphic Design</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga temporibus, id nobis ad incidunt voluptatum molestias facilis et cumque, voluptatibus consequuntur deserunt dolorem itaque. Officia aliquid pariatur vitae quas voluptas?</p>
                <a href="#" class="btn">Read More</a>
            </div>
            <div class="services-box">
                <i class="fa-solid fa-signal"></i>
                <h3>Digital Marketing</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga temporibus, id nobis ad incidunt voluptatum molestias facilis et cumque, voluptatibus consequuntur deserunt dolorem itaque. Officia aliquid pariatur vitae quas voluptas?</p>
                <a href="#" class="btn">Read More</a>
            </div>
        </div>
    </section>
    <!-- portfolio section design -->
    <section class="portfolio" id="portfolio">
        <h2 class="heading">Latest <span>Project</span></h2>
        <div class="portfolio-container">
            <div class="portfolio-box">
                <img src="img/r3.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus, voluptate! Vero fugit sapiente cupiditate excepturi dolorem quis repellendus soluta id, vel, possimus veniam maxime, maiores delectus totam provident! Porro, officiis.</p>
                    <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="img/r2.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus, voluptate! Vero fugit sapiente cupiditate excepturi dolorem quis repellendus soluta id, vel, possimus veniam maxime, maiores delectus totam provident! Porro, officiis.</p>
                    <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="img/r3.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus, voluptate! Vero fugit sapiente cupiditate excepturi dolorem quis repellendus soluta id, vel, possimus veniam maxime, maiores delectus totam provident! Porro, officiis.</p>
                    <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="img/r4.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus, voluptate! Vero fugit sapiente cupiditate excepturi dolorem quis repellendus soluta id, vel, possimus veniam maxime, maiores delectus totam provident! Porro, officiis.</p>
                    <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="img/r5.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus, voluptate! Vero fugit sapiente cupiditate excepturi dolorem quis repellendus soluta id, vel, possimus veniam maxime, maiores delectus totam provident! Porro, officiis.</p>
                    <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="img/r8.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus, voluptate! Vero fugit sapiente cupiditate excepturi dolorem quis repellendus soluta id, vel, possimus veniam maxime, maiores delectus totam provident! Porro, officiis.</p>
                    <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- contact section design -->
    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me!</span></h2>
        <form action="index.php" method="post">
            <div class="input-box">
                <input type="text" placeholder="Full Name" name="name">
                <input type="email" placeholder="Email Address" name="mailName">
            </div>
            <div class="input-box">
                <input type="number" placeholder="Mobile Number" name="mobilNumber">
                <input type="text" placeholder="Email Subject" name="mailSubject">
            </div>
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message" name="mailText"></textarea>
            <input type="submit" value="Send Message" class="btn">
        </form>
    </section>
    <?php
    include("inc/footer.php");
    ?>
    <!-- scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- typed js -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <!--custom js-->
    <script src="js/script.js"></script>

</body>

</html>