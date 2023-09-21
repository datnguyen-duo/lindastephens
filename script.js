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
});
