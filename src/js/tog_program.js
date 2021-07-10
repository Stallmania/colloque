const intervenant = document.querySelector(".test")
const list = document.querySelectorAll("ul")
const listClosd = document.querySelectorAll(".closedList")


intervenant.addEventListener("click", () => {
    list.classList.toggle("listClosd");
})