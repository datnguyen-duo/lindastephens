document.addEventListener("DOMContentLoaded", function () {
  document
    .querySelector("#sec__002 button")
    .addEventListener("click", function () {
      document.querySelector(".about__container").classList.add("active");
    });

  document
    .querySelector("#sec__002 .close")
    .addEventListener("click", function () {
      document.querySelector(".about__container").classList.remove("active");
    });

  var serviceToggles = document.querySelectorAll("#sec__004 ul li"),
    serviceBox = document.querySelectorAll("#sec__004 .service-box");

  serviceToggles.forEach((toggle, i) => {
    toggle.addEventListener("click", function () {
      serviceToggles.forEach((toggleClass) => {
        toggleClass.classList.remove("active");
      });

      toggle.classList.add("active");
      serviceBox.forEach((box) => {
        box.classList.remove("active");
      });
      serviceBox[i].classList.add("active");
    });
  });
});
