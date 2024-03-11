'use strict';

const images = document.querySelectorAll('.card-image');
const card = document.querySelector('.card__container');
const prevBtn = document.querySelectorAll('.prev-btn');
const nextBtn = document.querySelectorAll('.next-btn');

images.forEach((image) => {
    let fact;

    image.addEventListener("mouseenter", function() {
        fact = this.nextElementSibling;
        fact.classList.remove('hidden');

        fact.addEventListener('mouseleave', function() {
            fact.classList.add('hidden');
        })
    });
});


prevBtn.forEach((btn) => {
    btn.addEventListener('click', function() {
        const cardWidth = card.clientWidth + 24;
        this.nextElementSibling.scrollLeft -= cardWidth;
    })
})

nextBtn.forEach((btn) => {
    btn.addEventListener('click', function() {
        const cardWidth = card.clientWidth + 24;
        this.previousElementSibling.scrollLeft += cardWidth;
    })
})
