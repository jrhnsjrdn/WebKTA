const slider = document.querySelector('.slider');
const slides = document.querySelectorAll('.slide');
const prev = document.querySelector('.prev');
const next = document.querySelector('.next');
let currentIndex = 0;

function showSlide(index) {
    if (index >= slides.length) {
        currentIndex = 0;
    } else if (index < 0) {
        currentIndex = slides.length - 1;
    }
    slider.style.transform = `translateX(-${currentIndex * 100}%)`;
}

next.addEventListener('click', () => {
    currentIndex++;
    showSlide(currentIndex);
});

prev.addEventListener('click', () => {
    currentIndex--;
    showSlide(currentIndex);
});
