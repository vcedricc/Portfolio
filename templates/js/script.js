/* Icon navbar */

let menuIcon = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menuIcon.onclick = () => {
    menuIcon.classList.toggle('bx-x');
    navbar.classList.toggle('active');
}

/* Links navabar pages*/

const navbarLinks = document.querySelectorAll('.navbar a');

let customLinks = []

switch (window.location.pathname) {

    case '/index.php':
        customLinks = [{
                title: 'Accueil',
                url: './index.php#home'
            },
            {
                title: 'A propos de moi',
                url: './index.php#about'
            },
            {
                title: 'Mes services',
                url: './index.php#services'
            },
            {
                title: 'Mon portfolio',
                url: './index.php#portfolio'
            },
            {
                title: 'Me contacter',
                url: './index.php#contact'
            }
        ];
        break

    case '/cms.php':
        customLinks = [{
                title: '<i class=\'bx bx-left-arrow-alt\'></i>Revenir en arrière',
                url: './index.php#services'
            },
            {
                title: 'Installation de CMS',
                url: './cms.php#offer'
            },
            {
                title: 'Contenu de l\'offre',
                url: './cms.php#content'
            },
            {
                title: 'Pré-requis / Conseils',
                url: './cms.php#advice'
            },
            {
                title: 'Quelques avis clients',
                url: './cms.php#opinion'
            }
        ];
        break

    case '/development.php':
        customLinks = [{
                title: '<i class=\'bx bx-left-arrow-alt\'></i>Revenir en arrière',
                url: './index.php#services'
            },
            {
                title: 'Développement web',
                url: './development.php#offer'
            },
            {
                title: 'Contenu de l\'offre',
                url: './development.php#content'
            },
            {
                title: 'Pré-requis / Conseils',
                url: './development.php#advice'
            },
            {
                title: 'Quelques avis clients',
                url: './development.php#opinion'
            }
        ];
        break

    case '/integration.php':
        customLinks = [{
                title: '<i class=\'bx bx-left-arrow-alt\'></i>Revenir en arrière',
                url: './index.php#services'
            },
            {
                title: 'Intégration web',
                url: './integration.php#offer'
            },
            {
                title: 'Contenu de l\'offre',
                url: './integration.php#content'
            },
            {
                title: 'Pré-requis / Conseils',
                url: './integration.php#advice'
            },
            {
                title: 'Quelques avis clients',
                url: './integration.php#opinion'
            }
        ];
        break

    case '/maintenance.php':
        customLinks = [{
                title: '<i class=\'bx bx-left-arrow-alt\'></i>Revenir en arrière',
                url: './index.php#services'
            },
            {
                title: 'Maintenance web',
                url: './maintenance.php#offer'
            },
            {
                title: 'Contenu de l\'offre',
                url: './maintenance.php#content'
            },
            {
                title: 'Pré-requis / Conseils',
                url: './maintenance.php#advice'
            },
            {
                title: 'Quelques avis clients',
                url: './maintenance.php#opinion'
            }
        ];
        break

    case '/about.php':
        customLinks = [{
                title: '<i class=\'bx bx-left-arrow-alt\'></i>Revenir en arrière',
                url: './index.php#about'
            },
            {
                title: 'Quel est mon profil professionnel ?',
                url: './about.php#pro'
            },
            {
                title: 'Qu\'est-ce qu\'un développeur frontend ?',
                url: './about.php#front'
            },
            {
                title: 'Qui suis-je en quelques mots ?',
                url: './about.php#perso'
            }
        ];
        break

    default:
        customLinks = [{
                title: 'Accueil',
                url: './index.php#home'
            },
            {
                title: 'A propos de moi',
                url: './index.php#about'
            },
            {
                title: 'Mes services',
                url: './index.php#services'
            },
            {
                title: 'Mon portfolio',
                url: './index.php#portfolio'
            },
            {
                title: 'Me contacter',
                url: './index.php#contact'
            }
        ];
        break
}

navbarLinks.forEach((link, index) => {
    link.href = customLinks[index].url;
    link.innerHTML = customLinks[index].title;
});


/* Sections active link */

let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header nav a');

window.onscroll = () => {
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');

        if (top >= offset && top < offset + height) {
            navLinks.forEach(links => {
                links.classList.remove('active');
                document.querySelector('header nav a[href*=' + id + ']').classList.add('active');
            });
        };
    });

    /* Sticky navbar */

    let header = document.querySelector('header');

    header.classList.toggle('sticky', window.scrollY > 100);

    /* remove toggle icon and navbar when click navbar link */

    menuIcon.classList.remove('bx-x');
    navbar.classList.remove('active');

};

/* Scroll reveal */

ScrollReveal({
    reset: true,
    distance: '80px',
    duration: 2000,
    delay: 200
});

ScrollReveal().reveal('.home-content, .heading', { origin: 'top' });
ScrollReveal().reveal('.home-img, .services-container, .portfolio-box, .contact form, .about-content-page, .next', { origin: 'bottom' });
ScrollReveal().reveal('.home-content h1, .about-img, .about-img-page', { origin: 'left' });
ScrollReveal().reveal('.home-img, .home-content p, .about-content, .front-img,', { origin: 'right' });

/* Multiple text */

const typed = new Typed('.multiple-text', {
    strings: ['Développeur Web', 'Développeur Frontend', 'Intégrateur Web'],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 1000,
    loop: true
});