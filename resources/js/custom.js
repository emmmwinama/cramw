//     const carouselItems = document.getElementById('carousel-items');
//     let currentIndex = 0;
//     const items = carouselItems.children.length;
//
//     document.getElementById('nextSlide').addEventListener('click', () => {
//     currentIndex = (currentIndex + 1) % items;
//     carouselItems.style.transform = `translateX(-${currentIndex * 100}%)`;
// });
//
//     document.getElementById('prevSlide').addEventListener('click', () => {
//     currentIndex = (currentIndex - 1 + items) % items;
//     carouselItems.style.transform = `translateX(-${currentIndex * 100}%)`;
// }

const carouselItems = document.getElementById('carousel-items');
let currentIndex = 0;
const items = carouselItems.children.length;
const intervalTime = 3000; // 3 seconds
let slideInterval;

// Function to update the slide
function goToSlide(index) {
    currentIndex = index;
    carouselItems.style.transform = `translateX(-${currentIndex * 100}%)`;
}

// Function to go to the next slide
function nextSlide() {
    currentIndex = (currentIndex + 1) % items;
    goToSlide(currentIndex);
}

// Function to go to the previous slide
function prevSlide() {
    currentIndex = (currentIndex - 1 + items) % items;
    goToSlide(currentIndex);
}

// Event listeners for manual control
document.getElementById('nextSlide').addEventListener('click', () => {
    nextSlide();
    resetInterval();
});

document.getElementById('prevSlide').addEventListener('click', () => {
    prevSlide();
    resetInterval();
});

// Auto-slide function
function startSlideShow() {
    slideInterval = setInterval(nextSlide, intervalTime);
}

// Reset the interval when manually sliding
function resetInterval() {
    clearInterval(slideInterval);
    startSlideShow(); // Restart the auto-slide
}

// Start the carousel on page load


/////

document.addEventListener('DOMContentLoaded', function (){
    startSlideShow();
})

