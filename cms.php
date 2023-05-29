<?php
  include("./templates/php/header-services.php");
  include("./templates/php/next-links.php");
?>

<main>

    <section class="about-page" id="offer">
        <div class="home-img">
            <img src="images/wordpress.png" alt="Portrait">
        </div>
        <div class="about-content-page">
            <h2 class="heading">Installation de <span>CMS</span></h2>
            <p>Si vous cherchez à créer un site Web facilement configurable et personnalisable par vos soins, nous avons la solution idéale pour vous. 
                Je vous propose l'installation et la configuration de deux des CMS les plus populaires : Wordpress ou Prestashop.
            </p>
            <p>Le CMS, ou système de gestion de contenu, est un outil qui vous permet de créer et de gérer votre site Web sans avoir besoin de connaissances techniques approfondies. Vous pouvez facilement ajouter du contenu, modifier le design, ajouter des fonctionnalités et bien plus encore, tout cela à partir d'une interface simple et intuitive.
            </p>
            <p>L'installation et la configuration de votre CMS seront prises en charge, et je m'assurerai que tout est configuré de manière optimale pour répondre à vos besoins spécifiques. Vous pourrez ainsi bénéficier d'un site Web fonctionnel, sans avoir à vous soucier de la technologie sous-jacente.
            </p>
            <p>Toutefois, il est a noté que l'aspect esthétique et les animations de votre site Web seront limités par les possibilités du CMS. 
            </p>
            <p>Je serais ravi de vous aider à créer un site Web qui répond à vos besoins et à vos attentes.
            </p>
            <div class="price">
                <p>
                A partir de 550,00 €
                </p>
            </div>
        </div>
      </section>

      <?php echo $lien7; ?>

      <section class="about" id="content">
        <div class="about-content-page">
            <h2 class="heading"><span>Contenu</span> de l'offre</span></h2>
            <p>L'offre <b><span>Installation de CMS</span></b> contient les étapes de conception suivantes :
            <p>1/ Un premier rendez-vous pour une prise de contact, discuter des objectifs et de la faisabilité de votre projet.
            </p>
            <p>2/ Un second rendez-vous (à votre initiative) pour confirmer vos objectifs et la prise en compte de votre projet (validation du devis).
            </p>
            <p>3/ Le travail de votre identité visuelle : <br>
                - définition de la charte graphique du site Web (polices d'écritures, couleurs,...); <br>
            </p>
            <p>4/ L'intégration :<br>
                - mise en page des éléments visuels ;<br>
                - intégration des animations ;<br>
                - intégration de vos visuels (photos, vidéos).      
            </p>
            <p>5/ Le déploiement et référencement :<br>
                - déploiement de votre site Web sur votre hébergement Web ;<br>
                - indexation des pages sur le moteur de recherche Google.<br>
            </p>
            <p>Modalités de paiements : 30% à la validation du devis, le restant au déploiement du site Web.

            </p>
        </div>
        <div class="front-img">
            <img src="./images/dashboardWordpress.png" alt="frontend">
        </div> 
    </section>

    <?php echo $lien8; ?>

    <section class="about-page" id="advice">
        <div class="about-img">
            <img src="./images/workWordpress.png" alt="bujinkan">
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
                - de transmettre des logos et visuels travailler par un designer.<br>
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
            <img class="opinion-img" src="./images/kaleidea.png" alt="kaleidea">
            <h3>Aurélie</h3>
            <h2>www.kaleidea.fr</h2>
            <p>Merci Cédric pour ta patience et ton professionnalisme. Ce n'est pas toujours simple d'expliquer à l'autre ce que l'on souhaite. Mais Cédric a su parfaitement mettre en forme mes envies et me créer un site qui aujourd'hui est référençable et protégé. Merci beaucoup pour tout le temps consacré à la réalisation de mon site internet. Une grande épine en moins pour moi. Je recommande à 100%.
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