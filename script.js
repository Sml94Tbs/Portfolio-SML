 let section = document.querySelectorAll('section');
let navlink = document.querySelectorAll('header nav a');

window.onscroll = () => {
    section.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');
        if (top >= offset && top < offset + height) {
            navlink.forEach(links => {
                links.classList.remove('act');
                document.querySelector('header nav a [href*=' + id + ']').classList.add('act');
            });
        }
    });
};

/*--- Scrolling---*/

let header = document.querySelector('header');

header.classList.toggle('sticky', window.scrollY > 100);

/* Shesh */

let menuIcon = document.querySelector('#menu-icon');
let nav = document.querySelector('.navbar');

menuIcon.onclick = () => {
    menuIcon.classList.toggle('bx-x');
    nav.classList.toggle('act');
}

/* Sheesh fin */

menuIcon.classList.remove('bx-x');
nav.classList.remove('act');

ScrollReveal({
    reset: true,
    distance: '80px',
    duration: 2000,
    delay: 200,
});

ScrollReveal().reveal('.acceuil-contenu, .heading', { origin: 'top' });
ScrollReveal().reveal('.card-container, .   -box, .contact form, .travo h3, .type-moon h2, .skill p, .portfolio h4 ', { origin: 'bottom' });
ScrollReveal().reveal('.acceuil-contenu h1, .stage-content iframe, .type-moon iframe, .stage h4, .site.a', { origin: 'left' });
ScrollReveal().reveal('.acceuil-contenu p, .about-contenu, .stage-content h2, .stage-content p, .stage-mission ul, .stage-review ul', { origin: 'right' });

const typed = new Typed('.multiple-text', {
    strings: ['étudiant', 'developper'],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 1000,
    loop: true
});
