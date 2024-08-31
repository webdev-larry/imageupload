const navMenu = document.getElementById("nav-menu"),
  navToggle = document.getElementById("nav-toggle"),
  navItem = document.querySelectorAll(".nav__item"),
  header = document.getElementById("header");

// open and close menu
navToggle.addEventListener("click", () => {
  navMenu.classList.toggle("nav__menu--open");
  changeIcon();
});

// close the menu when the user clicks the nav links
navItem.forEach((item) => {
  item.addEventListener("click", () => {
    if (navMenu.classList.contains("nav__menu--open")) {
      navMenu.classList.remove("nav__menu--open");
    }
    changeIcon();
  });
});

// Change nav toggle icon
function changeIcon() {
  if (navMenu.classList.contains("nav__menu--open")) {
    navToggle.classList.replace("ri-menu-3-line", "ri-close-line");
  } else {
    navToggle.classList.replace("ri-close-line", "ri-menu-3-line");
  }
}

// Testimonial Slide

// const testimonialSlide = new Swiper(".testimonial__wrapper", {
//   loop: true,
//   spaceBetween: 30,
//   centeredSlides: true,
//   effect: "coverflow",
//   grabCursor: true,
//   slidesPerView: 1,
//   coverflowEffect: {
//     rotate: 50,
//     stretch: 0,
//     depth: 100,
//     modifier: 1,
//     slideShadows: true,
//   },
//   pagination: {
//     el: ".swiper-pagination",
//     clickable: true,
//   },

//   breakpoints: {
//     520: {
//       slidesPerView: "auto",
//     },
//   },
// });

// header scroll animation
window.addEventListener("scroll", () => {
  if (window.scrollY > 40) {
    header.classList.add("header--scroll");
  } else {
    header.classList.remove("header--scroll");
  }
});

// ScrollReveal animations
const sr = ScrollReveal({
  duration: 2000,
  distance: "100px",
  delay: 400,
  reset: false,
});

sr.reveal(".hero__content, .about__content");
sr.reveal(".hero__img", { origin: "top" });

sr.reveal(
  ".hero__info-wrapper, .skills__title, .skills__content, .qualification__name, .qualification__item, .service__card, .project__content, .testimonial__wrapper, .footer__content",
  {
    delay: 500,
    interval: 100,
  }
);

sr.reveal(".qualification__footer-text, .contact__content", {
  origin: "left",
});

sr.reveal(".qualification__footer .btn, .contact__btn", { origin: "right" });



const forms = document.querySelector(".right"),
  pwShowHide = document.querySelectorAll(".eye-icon");
pwShowHide.forEach((eyeIcon) => {
  eyeIcon.addEventListener("click", () => {
    let pwFields =
      eyeIcon.parentElement.parentElement.querySelectorAll(".password");

    pwFields.forEach((password) => {
      if (password.type === "password") {
        password.type = "text";
        eyeIcon.classList.replace("bx-hide", "bx-show");
        return;
      }
      password.type = "password";
      eyeIcon.classList.replace("bx-show", "bx-hide");
    });
  });
});

//greet user
var welcome;
var date = new Date();
var hour = date.getHours();
var minute = date.getMinutes();
var second = date.getSeconds();
if (minute < 10) {
  minute = "0" + minute;
}
if (second < 10) {
  second = "0" + second;
}
if (hour < 12) {
  welcome = "Good Morning";
} else if (hour < 17) {
  welcome = "Good Afternoon";
} else {
  welcome = "Good Evening";
}
document.getElementById("h1").innerHTML = welcome + "</font>";

//the bread crumb function

$(".breadcrumbs li a").each(function () {
  var breadWidth = $(this).width();

  if (
    $(this).parent("li").hasClass("active") ||
    $(this).parent("li").hasClass("first")
  ) {
  } else {
    $(this).css("width", 75 + "px");

    $(this).mouseover(function () {
      $(this).css("width", breadWidth + "px");
    });

    $(this).mouseout(function () {
      $(this).css("width", 75 + "px");
    });
  }
});

