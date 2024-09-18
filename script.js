
let currentSlide = 0;

const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length;

document.querySelector('.next').addEventListener('click', () => {
    goToSlide(currentSlide + 1);
});

document.querySelector('.prev').addEventListener('click', () => {
    goToSlide(currentSlide - 1);
});

function goToSlide(slideIndex) {
    slides[currentSlide].style.transform = `translateX(-${slideIndex * 100}%)`;
    currentSlide = (slideIndex + totalSlides) % totalSlides;
    slides[currentSlide].style.transform = `translateX(-${slideIndex * 100}%)`;
}
