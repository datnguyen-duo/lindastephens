document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".has-slideout").forEach((container) => {
    var button = container.querySelectorAll("button"),
      close = container.querySelectorAll(".close"),
      slide = container.querySelectorAll(".slide-out");

    button.forEach((btn, i) => {
      btn.addEventListener("click", function () {
        slide[i].classList.add("active");
      });
    });

    close.forEach((btn, i) => {
      btn.addEventListener("click", function () {
        slide[i].classList.remove("active");
      });
    });
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
