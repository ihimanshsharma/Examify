// animations.js

document.addEventListener('DOMContentLoaded', function () {
    // Example of adding a fade-in effect on page load for certain elements
    const elements = document.querySelectorAll('.fade-in');
    elements.forEach(element => {
        element.classList.add('animate__animated', 'animate__fadeIn'); // Add animation classes from Animate.css
    });

    // Example of scroll-triggered animation
    const scrollElements = document.querySelectorAll('.scroll-trigger');
    window.addEventListener('scroll', function () {
        scrollElements.forEach(element => {
            if (element.getBoundingClientRect().top < window.innerHeight) {
                element.classList.add('animate__animated', 'animate__fadeInUp'); // Slide up animation
            }
        });
    });
});
