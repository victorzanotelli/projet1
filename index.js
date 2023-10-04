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

// JS carouselRef
const firstReference = document.querySelector('.references');
console.log(firstReference);
const carouselItemsR = document.querySelectorAll('.references');
let currentIndexR = 0;

firstReference.classList.add('active');

function showItemR(indexR) {
    carouselItemsR[currentIndexR].classList.remove('active');
    currentIndexR = (indexR + carouselItemsR.length) % carouselItemsR.length;
    carouselItemsR[currentIndexR].classList.add('active');
}

function prevItemR() {
    showItemR(currentIndexR - 1);
}

function nextItemR() {
    showItemR(currentIndexR + 1);
}

const prevButtonR = document.querySelector('.prev-buttonR');
const nextButtonR = document.querySelector('.next-buttonR');

prevButtonR.addEventListener('click', prevItemR);
nextButtonR.addEventListener('click', nextItemR);