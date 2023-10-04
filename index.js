let whatIDo = document.querySelectorAll(".whatIDo");
let btnText = document.querySelectorAll(".learnmore");

for (let i = 0; i < whatIDo.length; i++) {
    btnText[i].addEventListener('click', () => {
        if (whatIDo[i].style.display === "inline") {
            btnText[i].innerHTML = "En savoir plus...";
            whatIDo[i].style.display = "none";
        } else {
            btnText[i].innerHTML = "moins...";
            whatIDo[i].style.display = "inline";
        }
    })
}

// quand je clique sur le menu, apparition navbar
// je selectionne et stock les elements
const icon = document.querySelector(".fa-bars");
const list = document.querySelector(".nav-list-mobile");
// je soumet l'élément
icon.addEventListener("click", function () {
    list.classList.toggle("list-visible");
    icon.classList.toggle("incon-visible");
})
