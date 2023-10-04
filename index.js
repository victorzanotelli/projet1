// JS carousel experience
const firstExperience = document.querySelector('.experience');
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

// JS carousel formation
const firstFormation = document.querySelector('.formation');
console.log(firstFormation);
const carouselItemsF = document.querySelectorAll('.formation');
let currentIndexF = 0;

firstFormation.classList.add('active');

function showItemF(indexF) {
    carouselItemsF[currentIndexF].classList.remove('active');
    currentIndexF = (indexF + carouselItemsF.length) % carouselItemsF.length;
    carouselItemsF[currentIndexF].classList.add('active');
}

function prevItemF() {
    showItemF(currentIndexF - 1);
}

function nextItemF() {
    showItemF(currentIndexF + 1);
}

const prevButtonF = document.querySelector('.prev-buttonF');
const nextButtonF = document.querySelector('.next-buttonF');

prevButtonF.addEventListener('click', prevItemF);
nextButtonF.addEventListener('click', nextItemF);
// quand je clique sur le menu, apparition navbar
// je selectionne et stock les elements
const icon = document.querySelector(".fa-bars");
const list = document.querySelector(".nav-list-mobile");
// je soumet l'élément
icon.addEventListener("click", function () {
    list.classList.toggle("list-visible");
    icon.classList.toggle("incon-visible");
})
