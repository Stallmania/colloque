const burger = document.querySelector(".burger");

const closedCercle = document.querySelector(".closed-cercle");
const displayCercle = document.querySelector(".displayCercle");

const right = document.querySelector(".right");
const displayMenu = document.querySelector(".displayMenu");

    
burger.addEventListener("click", () => {
        closedCercle.classList.toggle("displayCercle",true);
        closedCercle.classList.toggle("open-cercle");

        right.classList.toggle("displayMenu",true);
        right.classList.toggle("open-menu");
    });