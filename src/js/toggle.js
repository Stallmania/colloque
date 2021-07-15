const burger = document.querySelector(".burger");

var rectangle = document.querySelector(".rectangle");
var mediaQ = document.querySelector(".mediaQ");

    
burger.addEventListener("click", () => {
        rectangle.classList.toggle("openRectangle");
        mediaQ.classList.toggle("mediaNav");
    });