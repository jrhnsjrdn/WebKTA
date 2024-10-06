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
    // Loop back to the first slide if we reach the end
    if (slideIndex >= totalSlides) {
        slideIndex = 1;
    }
    // Loop back to the last slide if we go below 0
    else if (slideIndex < 0) {
        slideIndex = totalSlides;
    }

    // Position the slides
    slides.forEach((slide, index) => {
        slide.style.transform = `translateX(${(index - slideIndex) * 100}%)`;
    });

    currentSlide = slideIndex;
}