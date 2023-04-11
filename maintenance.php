<?php
  include("./templates/php/header-services.php");
  include("./templates/php/next-links.php");
?>

<main>

    <section class="about-page" id="offer">
        <div class="home-img">
            <img src="images/settings.png" alt="Portrait">
        </div>
        <div class="about-content-page">
            <h2 class="heading"><span>Maintenance</span> web</h2>
            <p>Vous avez un site Web fonctionnel, mais vous n'avez pas le temps ni les compétences techniques nécessaires pour le maintenir régulièrement à jour.
            </p>
            <p>Vous avez des mises-à-jour régulières de vos textes ou photos à faire ou vous êtes préoccupé par les risques de sécurité et les éventuelles erreurs qui pourraient affecter la performance de votre site Web.
            </p>
            <p>Je suis là pour vous aider et effectuer les mises-à-jour et procéder aux contrôles de sécurité pour prévenir les risques de failles ou de bugs.
            </p>
            <p>Je vous propose un service de maintenance Web rapide, efficace et abordable pour garantir le bon fonctionnement et les mises-à-jour de votre site Web.
              <br>
              Contactez-moi dès maintenant pour vous soulager de ces tâches techniques.            </p>
            <div class="price">
                <p>
                A partir de 250,00 €/année
                </p>
            </div>
        </div>
      </section>

      <?php echo $lien7; ?>

      <section class="about" id="content">
        <div class="about-content-page">
            <h2 class="heading"><span>Contenu</span> de l'offre</span></h2>
            <p>L'offre <b><span>Maintenance Web</span></b> contient les étapes suivantes :
            <p>1/ Un rendez-vous pour une prise de contact et discuter de vos besoins en termes de maintenance.
            </p>
            <p>2/ La maintenance et les mises-à-jour de votre site Web (offre de base comprenant 5 interventions sur l'année).
            </p>
            <p>Modalité de paiement : totalité à la signature.

            </p>
        </div>
        <div class="front-img">
            <img src="./images/prevent.png" alt="frontend">
        </div> 
    </section>

    <?php echo $lien8; ?>

    <section class="about-page" id="advice">
        <div class="about-img">
            <img src="./images/security.png" alt="bujinkan">
        </div>
        <div class="about-content-page advice-title">
            <h2 class="heading"><span>Pré-requis</span></h2>
            <p>- Préparer les éléments nécessaires pour se connecter au ftp (ou à votre CMS) et à la base de données de votre site Web (si existante).<br>
            </p>
            <h2 class="heading">Conseils</h2>
            <p>- Préparer bien vos textes et photos à modifier avant de me les faires parvenir.
            <br>
            - Préparer, en cas de besoin, les éléments de connexion à votre compte d'hébergement.
          </p>
            <a href="./index.php#contact" class="btn">Vous souhaitez me contacter ?</a>
        </div>
    </section>

    <?php echo $lien9; ?>

    <section class="services end-page" id="opinion">
        <h2 class="heading">Quelques <span>avis clients</span></h2>

        <div class="services-container">

          <div class="services-box">
            <img class="opinion-img" src="./images/musiqueencreuse.png" alt="musiqueencreuse">
            <h3>Lydie Rougeron</h3>
            <h2>musiqueencreuse.free.fr</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
            </p>
          </div>

          <div class="services-box">
            <img class="opinion-img" src="./images/portfolio-default.png" alt="default">
            <h3>Votre avis clients</h3>
            <h2>l'adresse de votre site</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
            </p>
          </div>

          <div class="services-box">
          <img class="opinion-img" src="./images/portfolio-default.png" alt="default">
          <h3>Votre avis client</h3>
          <h2>l'adresse de votre site</h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
            </p>
          </div>

        </div>
      </section>

</main>

<?php
  include("./templates/php/footer.php");
?>

<!-- scroll reveal (animation) -->
<script src="https://unpkg.com/scrollreveal"></script>

<!-- Script JavaScript -->
<script src="./templates/js/script.js"></script>

</body>

</html>