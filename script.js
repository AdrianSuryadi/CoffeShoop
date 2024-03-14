const header = document.querySelector("header");
function fixedNavbar() {
  header.classList.toggle("scroll", window.pageYOffset > 0);
}
fixedNavbar();
window.addEventListener("scroll".fixedNavbar);

let menu = document.querySelector("#menu-btn");
let userbtn = document.querySelector("#user-Btn");

menu.addEventListener("click", function () {
  let nav = document.querySelector(".navbar");
  nav.classList.toggle("active");
});
userbtn.addEventListener("click", function () {
  let userBox = document.querySelector(".user-box");
  userBox.classList.toggle(".active");
});
/*--home slider--*/
("use strict");
const leftArrow = document.querySelector(".left-arrow .bx bx-left-arrow-alt"),
  rightArrow = document.querySelector(".right-arrow .bx bx-right-arrow-alt"),
  slider = document.querySelector(".home-section");
/*scrool to right*/
function scrollRight() {
  if (slider.scrollWidth - slider.clientWidth === slider.scrollLeft) {
    slider.scrollTo({
      left: 0,
      behavior: "smooth",
    });
  } else {
    slider.scrollBy({
      left: window.innerWidth,
      behavior: "smooth",
    });
  }
}
/*scrool to left */
function scrollLeft() {
  slider.scrollBy({
    left: window.innerWidth,
    behavior: "smooth",
  });
}
let timerId = setInterval(scrollRight, 7000);
/*reset times*/
function resetTimer() {
  clearInterval(timerId);
  timerId = setInterval(scrollRight, 7000);
}
/*scrool event*/
slider.addEventListener("click", function (ev) {
  if (ev.target === rightArrow) {
    scrollRight();
    resetTimer();
  }
});

let slides = document.querySelectorAll(".testimonial-item");
let index = 0;

function nextSlide() {
  slides[index].classList.remove("active");
  index = (index + 1) % slides.length;
  slides[index].classList.add("active");
}

function prevSlide() {
  slides[index].classList.remove("active");
  index = (index - 1 + slides.length) % slides.length;
  slides[index].classList.add("active");
}
