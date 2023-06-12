const body = document.querySelector("body");
const navbar = document.querySelector(".navigation");
const menu = document.querySelector(".menu-nav");
const mobileBtn = document.querySelector(".mobile-btn");
const cMobileBtn = document.querySelector(".close-mobile-btn");
const spanTeks = document.querySelector(".faq-icon");

var menuItems = document.querySelectorAll(".menu-nav li a");

menuItems.forEach(function (item) {
  item.addEventListener("click", function (event) {
    var menuIcon = document.querySelector(".menu-nav");
    mobileBtn.classList.remove("hidden");
    menuIcon.classList.remove("active");

    event.preventDefault();
    const target = document.querySelector(this.getAttribute("href"));
    const offset = target.offsetTop;

    window.scrollTo({
      top: offset,
      behavior: "smooth",
    });
  });
});

mobileBtn.onclick = () => {
  menu.classList.add("active");
  mobileBtn.classList.add("hidden");
  body.classList.add("disabled-scroll");
};

cMobileBtn.onclick = () => {
  menu.classList.remove("active");
  mobileBtn.classList.remove("hidden");
  body.classList.remove("disabled-scroll");
};

window.onscroll = () => {
  this.scrollY > 100
    ? navbar.classList.add("sticky")
    : navbar.classList.remove("sticky");
};

function toggleFAQ(el) {
  var faq = el.parentElement;
  var answer = el.nextElementSibling;

  var otherFAQs = document.querySelectorAll(".faq-list");
  otherFAQs.forEach(function (faqItem) {
    var question = faqItem.querySelector(".faq-question");
    var answer = faqItem.querySelector(".faq-answer");
    var icon = faqItem.querySelector(".faq-icon");

    if (faqItem === faq) {
      question.classList.toggle("show");
      answer.classList.toggle("show");
      if (answer.style.maxHeight) {
        answer.style.maxHeight = null;
        icon.innerText = "add";
      } else {
        answer.style.maxHeight = answer.scrollHeight + "px";
        icon.innerText = "remove";
      }
    } else {
      question.classList.remove("show");
      answer.classList.remove("show");
      answer.style.maxHeight = null;
      icon.innerText = "add";
    }
  });
}
