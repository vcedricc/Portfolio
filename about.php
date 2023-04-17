<?php
  include("./templates/php/header-about.php");
  include("./templates/php/next-links.php");
?>

<main>

    <section class="about-page" id="pro">
        <div class="about-img-page">
            <img src="./images/home.jpg" alt="portrait">
        </div>
        <div class="about-content-page">
            <h2 class="heading">Quel est mon <span>profil professionnel ?</span></h2>
            <p>Je me présente, je m'appelle Cédric Varésano, je suis développeur frontend. Avec mon expérience et une passion débordante, je suis prêt à relever tous les défis.
            </p>
            <p>Grâce à mes compétences en HTML, CSS, JavaScript, je suis en mesure de réaliser des sites web dynamiques, réactifs et élégants. De plus, je suis compétent avec le frameworks React, ce qui me permet de créer des sites web plus sophistiqués et complexes.
            </p>
            <p>Je suis toujours à votre écoute pour comprendre vos besoins et objectifs. Mon but est de fournir des services de qualité pour créer des sites web personnalisés qui répondent à vos besoins. J'ai travaillé sur de nombreux projets, ce qui m'a permis de développer une approche axée sur les résultats et la satisfaction.
            </p>
            <p>Si vous cherchez un développeur Web frontend expérimenté pour créer votre site internet, n'hésitez pas à me contacter. Je suis disponible pour discuter de vos projets et trouver les solutions les plus adaptées à vos besoins.
            </p>
            <a href="./index.php#contact" class="btn">Me contacter</a>
        </div>
    </section>

    <?php echo $lien5; ?>

    <section class="about" id="front">
        <div class="about-content-page">
            <h2 class="heading">Qu'est-ce qu'un <span>développeur frontend ?</span></h2>
            <p>Un développeur Frontend est un professionnel de l'informatique spécialisé dans la création et la mise en œuvre de l'interface utilisateur (UI) des sites Web et des applications Web. Les développeurs Frontend sont responsables de la conception, de la mise en page et de l'interaction utilisateur de la partie visible d'un site Web ou d'une application.
            </p>
            <p>Les principales tâches d'un développeur Frontend incluent :<br> 
            - la création de la structure de la page ; <br>
            - l'écriture de code HTML, CSS et JavaScript ; <br>
            - la conception d'interfaces utilisateur responsives (c'est-à-dire compatible sur tout écran, de l'ordinateur de bureau jusqu'au smartphone) et interactives ; <br>
            - l'intégration de contenu multimédia (comme des images ou des vidéos) ; <br>
            - et l'optimisation de la performance et de la compatibilité entre navigateurs.
            </p>
            <p>En somme, les développeurs Frontend sont des professionnels qui jouent un rôle essentiel dans la création de sites Web et d'applications modernes, en veillant à ce que l'expérience utilisateur soit optimale et que l'interface soit esthétique et intuitive.
            </p>
        </div>
        <div class="front-img">
            <img src="./images/frontend.png" alt="frontend">
        </div> 
    </section>

    <?php echo $lien6; ?>

    <section class="about-page end-page" id="perso">
        <div class="about-img">
            <img src="./images/bujinkan.png" alt="bujinkan">
        </div>
        <div class="about-content-page">
            <h2 class="heading">Qui suis-je <span>en quelques mots ?</span></h2>
            <p>Mon parcours ne se limite pas qu'à l'informatique. Avant d'être développeur de site Web, j'ai eu différentes vies professionnelles. J'ai notamment été militaire, agent spécialisé dans la petite enfance, puis clerc de notaire.
            </p>
            <p>Je me passionne pour la lecture et les arts martiaux. J'ai une vie associative assez soutenue puisque je suis bénévole au sein de la bibliothéque de ma Commune, pratiquant de Yoseikan Budo, enseignant en self-defense et Bujinkan Budo Taijutsu (dont je suis titulaire du 4° DAN Japon) et membre du comité d'administration de l'Union Nationale des Combattant du département de la Creuse.
            </p>
            <p>En plus de tout ça, je prends des cours de violon, et à l'occasion, j'aime aussi me poser devant un bon jeu vidéo.
            </p>
            <a href="./index.php#contact" class="btn">Vous souhaitez me contacter ?</a>
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