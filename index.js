// JS carousel
const firstExperience = document.querySelector('.experience');
console.log(firstExperience);
const carouselItems = document.querySelectorAll('.experience');
let currentIndex = 0;

firstExperience.classList.add('active');

function showItem(index) {
    carouselItems[currentIndex].classList.remove('active');
    currentIndex = (index + carouselItems.length) % carouselItems.length;
    carouselItems[currentIndex].classList.add('active');
}

function prevItem() {
    showItem(currentIndex - 1);
}

function nextItem() {
    showItem(currentIndex + 1);
}

const prevButton = document.querySelector('.prev-button');
const nextButton = document.querySelector('.next-button');

prevButton.addEventListener('click', prevItem);
nextButton.addEventListener('click', nextItem);

// JS plus - moins
const whatIDo = document.querySelectorAll('.whatIDo');
const btnText = document.querySelectorAll('.learnmore');

for (let i = 0; i < whatIDo.length; i++) {
    btnText[i].addEventListener('click', () => {
        if (whatIDo[i].style.display === 'block') {
            btnText[i].innerHTML = 'En savoir plus...';
            whatIDo[i].style.display = 'none';
        } else {
            btnText[i].innerHTML = 'moins...';
            whatIDo[i].style.display = 'block';
        }
    });
}
