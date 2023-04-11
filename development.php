<?php
  include("./templates/php/header-services.php");
  include("./templates/php/next-links.php");
?>

<main>

    <section class="about-page" id="offer">
        <div class="home-img">
            <img src="images/dev.png" alt="Portrait">
        </div>
        <div class="about-content-page">
            <h2 class="heading"><span>Dévelopement</span> web</h2>
            <p>Je suis convaincu que votre site Web est l'un des éléments les plus importants de votre présence en ligne. C'est votre vitrine digitale et souvent le premier point de contact avec vos clients potentiels.
            Il est donc essentiel qu'il soit à la hauteur de vos attentes et qu'il corresponde à l'image de votre entreprise ou association. 
            </p>
            <p>Avec ce service de conception personnalisée, vous pouvez être sûr que je prendrai le temps d'analyser vos objectifs, ainsi que de comprendre votre public cible pour créer un site Web qui se distingue.
            </p>
            <p>Je vais concevoir un site Web moderne et facile à utiliser qui reflète votre identité et vous aidera à atteindre vos objectifs.
            </p>
            <p>Vous pouvez compter sur moi pour vous offrir un site web sur mesure de haute qualité et répondant à vos attentes.
            </p>
            <p>            Contactez-moi aujourd'hui pour discuter de votre projet de site web personnalisé.      
            </p>
            <div class="price">
                <p>
                A partir de 1.950,00 €
                </p>
            </div>
        </div>
      </section>

      <?php echo $lien7; ?>

      <section class="about" id="content">
        <div class="about-content-page">
            <h2 class="heading"><span>Contenu</span> de l'offre</span></h2>
            <p>L'offre <b><span>Développement Web</span></b> contient les étapes de conception suivantes :
            <p>1/ Un premier rendez-vous pour une prise de contact, discuter des objectifs et de la faisabilité de votre projet.
            </p>
            <p>2/ Un second rendez-vous (à votre initiative) pour confirmer vos objectifs et la prise en compte de votre projet (validation du devis).
            </p>
            <p>3/ Le travail de votre identité visuelle : <br>
                - définition de la charte graphique du site Web (polices d'écritures, couleurs,...); <br>
                - maquettage du site Web (qui nécessitera d'être validé par vos soins).<br>
            </p>
            <p>4/ L'intégration et le développement :<br>
                - intégration des éléments visuels (HTML et CSS) ;<br>
                - intégration des animations (JavaScript) ;<br>
                - intégration de vos visuels (photos, vidéos).      
            </p>
            <p>5/ Le déploiement et référencement :<br>
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
            <p>- Faire une liste de quelques sites qui vous plaisent (qui sera à me remettre lors des rendez-vous).<br>
            Cela dans l'objectif de saisir au mieux vos goûts et l'esthétique souhaitée pour votre projet.<br>
            - Avoir choisi un hébergeur de site Web et un nom de domaine.<br>
            - Prévoir la rédaction des textes à intégrer dans votre site Web.
            </p>
            <h2 class="heading">Conseils</h2>
            <p>Afin que votre site soit conçu de manière totalement optimal il est conseillé :
                <br>
                - de transmettre des photos (ou vidéos) de qualités professionnelles ;<br>
                - de transmettre des logos et visuels travailler par un designer ;<br>
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
            <h3>Votre avis client</h3>
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