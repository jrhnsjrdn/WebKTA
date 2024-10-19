// Select the container that holds the cards
const row = document.querySelector('.row');

// Select the previous and next buttons
const prevBtn = document.querySelector('.prevCard');
const nextBtn = document.querySelector('.nextCard');

// Function to handle the 'Next' button click (scroll right)
nextBtn.addEventListener('click', () => {
    row.scrollBy({ left: 500, behavior: 'smooth' }); // Adjust '300' based on how much you want to scroll
});

// Function to handle the 'Previous' button click (scroll left)
prevBtn.addEventListener('click', () => {
    row.scrollBy({ left: -500, behavior: 'smooth' }); // Adjust '-300' based on how much you want to scroll
});
