const buttonShow = document.querySelector(".learnmore");
const answer = document.querySelector(".whatIDo")
const clickButton = function () {
    if (answer.classList.toggle(".cache")) {
        buttonShow.textContent = "En savoir plus...";
    } else {
        buttonShow.textContent = "ok";
    }
};
buttonShow.addEventListener("click", clickButton);