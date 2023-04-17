
document.querySelector("ul ").addEventListener("click", noneTopMenu);
document.querySelector(".bars__menu").addEventListener("click", noneTopMenu);


var line1__bars = document.querySelector(".line1__bars-menu");
var line2__bars = document.querySelector(".line2__bars-menu");
var line3__bars = document.querySelector(".line3__bars-menu");
var collapse = document.querySelector(".collapse");

/* var displaymobilnonemenu = document.querySelector(".display-mobil-none-menu");
var displaymobilnonemenushow = document.querySelector(".display-mobil-none-menu-show"); */
var topmenu = document.querySelector("#navbarSupportedContent");
function noneTopMenu() {
    collapse.classList.remove("show");
    line1__bars.classList.toggle("line1__bars-menu");
    line2__bars.classList.toggle("line2__bars-menu");
    line3__bars.classList.toggle("line3__bars-menu");
    line1__bars.classList.toggle("activeline1__bars-menu");
    line2__bars.classList.toggle("activeline2__bars-menu");
    line3__bars.classList.toggle("activeline3__bars-menu");
}

