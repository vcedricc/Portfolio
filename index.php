<?php
  include("./templates/php/header.php");
  include("./templates/php/next-links.php");
?>

    <main>
      <!-- Presentation -->
      <section class="home" id="home">
        <div class="home-content">
          <h3>Bonjour, je m'appelle</h3>
          <h1>Cédric Varésano</h1>
          <h3>et je suis <span class="multiple-text"></span></h3>
          <p>Mon objectif : faire de votre site Web une expérience inoubliable pour vos utilisateurs !</p>
          <div class="social-media">
            <!-- <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-twitter'></i></a>
            <a href="#"><i class='bx bxl-instagram-alt'></i></a>
            <a href="#"><i class='bx bxl-linkedin'></i></a> 
            -->
          </div>
          <!-- <a href="about.php" class="btn">En savoir plus sur moi</a> 
          -->
        </div>

        <div class="home-img">
          <img src="images/home.jpg" alt="Portrait">
        </div>
      </section>

      <?php echo $lien1; ?>
      

      <!-- About me -->
      <section class="about" id="about">
        <div class="about-img">
          <img src="./images/symbol.png" alt="Symbolique de programmation">
        </div>

        <div class="about-content">
          <h2 class="heading">A propos <span>de moi</span></h2>
          <h3>Développeur Frontend</h3>
          <p>Bienvenue sur mon site dédié à la création de sites Web ! Je suis Cédric Varésano, un développeur passionné et motivé pour réaliser vos projets et ainsi donnez une valeur ajouté à votre entreprise ou association.
          </p>
          <p>Mon objectif est de travailler en étroite collaboration avec vous afin de comprendre vos besoins et créer un site Web qui réponde à vos attentes. Pour cela, je mets mes compétences à votre disposition pour réaliser un site Web moderne, fonctionnel et personnalisé.
          </p>
          <p>Si vous souhaitez en découvrir plus à mon sujet, n'hésitez pas à cliquer sur le bouton ci-dessous. Vous trouverez une présentation détaillée, ainsi que mes compétences techniques.
          </p>
          <a href="about.php#pro" class="btn">En savoir plus...</a>
        </div>
      </section>

      <?php echo $lien2; ?>

      <!-- Services -->

      <section class="services" id="services">
        <h2 class="heading">Mes <span>services</span></h2>

        <div class="services-container">

          <div class="services-box">
            <i class='bx bx-code-alt'></i>
            <h3>Développement web</h3>
            <p>Vous souhaitez une conception totalement personnalisée de A à Z, afin de créer un site Web moderne et fonctionnel
            </p>
            <a href="./development.php#offer" class="btn">En savoir plus...</a>
          </div>

          <div class="services-box">
            <i class='bx bx-code-block'></i>
            <h3>Intégration web</h3>
            <p>Vous souhaitez créer un site Web fidèle à une maquette composée par un webdesigner
            </p>
            <a href="./integration.php#offer" class="btn">En savoir plus...</a>
          </div>

          <div class="services-box">
            <i class='bx bx-extension'></i>
            <h3>Maintenance de site</h3>
            <p>Vous avez un site web existant, mais vous avez besoin d'aide pour le maintenir à jour et en bon état de fonctionnement
            </p>
            <a href="./maintenance.php#offer" class="btn">En savoir plus...</a>
          </div>

          <div class="services-box">
            <i class='bx bxl-wordpress'></i>
            <h3>Installation de CMS</h3>
            <p>Vous souhaitez un site Web simple et configurable par vos soins, je vous propose l'installation et la configuration de votre CMS (Wordpress ou Prestashop)
            </p>
            <a href="./cms.php#offer" class="btn">En savoir plus...</a>
          </div>

        </div>
      </section>

      <?php echo $lien3; ?>

      <!-- Portfolio -->

      <section class="portfolio" id="portfolio">
        <h2 class="heading">Mes derniers <span>projets</span></h2>

        <div class="portfolio-container">
            <div class="portfolio-box">
              <img src="./images/unc23.png" alt="Portfolio3">
              <div class="portfolio-layer">
                <h4>UNC 23</h4>
                <p>Conception de site web</p>              </p>
                <a href="http://unc23.free.fr/" target="_blank"><i class='bx bx-link-external'></i></a>
              </div>
            </div>

            <div class="portfolio-box">
              <img src="./images/musiqueencreuse.png" alt="Portfolio - musiqueencreuse.free.fr">
              <div class="portfolio-layer">
              <h4>Lydie Rougeron</h4>
              <p>Conception de site web</p>              
              <a href="http://musiqueencreuse.free.fr/" target="_blank"><i class='bx bx-link-external'></i></a>
              </div>
            </div>

            <div class="portfolio-box">
              <img src="./images/kaleidea.png" alt="Portfolio - kaleidea.fr">
              <div class="portfolio-layer">
              <h4>Kaleidea</h4>
              <p>Installation Wordpress (CMS)</p>              
              <a href="https://kaleidea.fr/" target="_blank"><i class='bx bx-link-external'></i></a>
              </div>
            </div>

            <div class="portfolio-box">
              <img src="./images/artsenbois.png" alt="Portfolio - www.artsenbois.fr">
              <div class="portfolio-layer">
              <h4>Arts en Bois</h4>
              <p>Installation Prestashop (CMS)</p>              
              <a href="https://www.artsenbois.fr/" target="_blank"><i class='bx bx-link-external'></i></a>
              </div>
            </div>

            <div class="portfolio-box">
              <img src="./images/portfolio-default.png" alt="Portfolio - default">
              <div class="portfolio-layer">
              <h4>En cours de conception</h4>
              <p></p>              
              <!--<a href="#" target="_blank"><i class='bx bx-link-external'></i></a>-->
              </div>
            </div>

            <div class="portfolio-box">
              <img src="./images/portfolio-default.png" alt="Portfolio - default">
              <div class="portfolio-layer">
              <h4>En cours de conception</h4>
              <p></p>
              <!--<a href="#" target="_blank"><i class='bx bx-link-external'></i></a>-->
              </div>
            </div>
        </div>
      </section>

      <?php echo $lien4; ?>

      <!-- Contact -->

      <section class="contact end-page" id="contact">
        <h2 class="heading">Me <span>Contacter</span></h2>

        <form action="./templates/php/send.php" target="_blank" method="post" role="form">
          <div class="input-box">
            <input type="text" name="name" id="name" placeholder="Votre identité (nom et prénom et/ou raison sociale)" required>
            <input type="email" name="email" id="email" placeholder="Votre adresse e-mail" required>
          </div>
          <div class="input-box">
            <!--<input type="number" name="phone" id="phone" placeholder="Numéro de téléphone">-->
            <input type="text" name="subject" id="subject" placeholder="Objet de votre message" required>
          </div>
          <textarea name="message" id="message" cols="30" rows="10" placeholder="Votre message" required></textarea>
          <input type="submit" value="Envoyer" class="btn">
        </form>
      </section>

    </main>
    
    <?php
      include("./templates/php/footer.php");
    ?>

    <!-- scroll reveal (animation) -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- Typed.js (multiple text)-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.js"></script>
    
    <!-- Script JavaScript -->
    <script src="./templates/js/script.js"></script>

</body>

</html>