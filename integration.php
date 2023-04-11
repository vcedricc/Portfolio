<?php
  include("./templates/php/header-services.php");
  include("./templates/php/next-links.php");
?>

<main>

    <section class="about-page" id="offer">
        <div class="home-img">
            <img src="images/integration.png" alt="Portrait">
        </div>
        <div class="about-content-page">
            <h2 class="heading"><span>Intégration</span> web</h2>
            <p>Vous êtes un designer ou une entreprise et vous avez déjà une maquette de site web qui représente fidèlement votre vision de l'apparence de votre site.
            </p>
            <p>Maintenant, vous cherchez un professionnel qui peut intégrer cette maquette en un site Web fonctionnel. Je suis là pour répondre à votre besoin.
            </p>
            <p>Je vous garantie une intégration soignée et fidèle à votre maquette, afin de vous offrir un site Web esthétique et efficace.
            </p>
            <p>Vous pouvez compter sur moi pour vous offrir une prestation de qualité.
            Contactez-moi aujourd'hui pour discuter de votre projet d'intégration Web.            </p>
            <div class="price">
                <p>
                A partir de 1.550,00 €
                </p>
            </div>
        </div>
      </section>

      <?php echo $lien7; ?>

      <section class="about" id="content">
        <div class="about-content-page">
            <h2 class="heading"><span>Contenu</span> de l'offre</span></h2>
            <p>L'offre <b><span>Intégration Web</span></b> contient les étapes de conception suivantes :
            <p>1/ Un premier rendez-vous pour une prise de contact, discuter des objectifs et de la faisabilité de votre projet.
            </p>
            <p>2/ Un second rendez-vous (à votre initiative) pour confirmer vos objectifs, la prise en compte de votre projet (validation du devis) et me remettre les fichiers fournis par votre designer.
            </p>
            <p>3/ L'intégration et le développement :<br>
                - intégration des éléments visuels (HTML et CSS) ;<br>
                - intégration des animations (JavaScript) ;<br>
                - intégration de vos visuels (photos, vidéos).      
            </p>
            <p>4/ Le déploiement et référencement :<br>
                - intégration des fichiers et balises de codes nécessaires au référencement ;<br>
                - intégration d'une page d'erreur 404 ; <br>
                - déploiement de votre site Web sur votre hébergement Web ;<br>
                - indexation des pages sur le moteur de recherche Google.<br>
            </p>
            <p>Modalités de paiements : 30% à la validation du devis, le restant au déploiement du site Web.

            </p>
        </div>
        <div class="front-img">
            <img src="./images/frontend.png" alt="frontend">
        </div> 
    </section>

    <?php echo $lien8; ?>

    <section class="about-page" id="advice">
        <div class="about-img">
            <img src="./images/algo.png" alt="bujinkan">
        </div>
        <div class="about-content-page advice-title">
            <h2 class="heading"><span>Pré-requis</span></h2>
            <p>- Faire établir une maquette, le logo et les visuels du site par un designer.<br>
            - Avoir choisi un hébergeur de site Web et un nom de domaine.<br>
            - Prévoir la rédaction des textes à intégrer dans votre site Web.
            </p>
            <h2 class="heading">Conseils</h2>
            <p>Afin que votre site soit conçu de manière totalement optimal il est conseillé :
                <br>
                - de transmettre des photos (ou vidéos) de qualités professionnelles ;<br>
            </p>
            <p>En cas de besoins je peux vous conseiller un photographe professionnelle et/ou un designer.

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