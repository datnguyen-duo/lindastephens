document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".has-slideout").forEach((container) => {
    var button = container.querySelectorAll("button"),
      close = container.querySelectorAll(".close"),
      slide = container.querySelectorAll(".slide-out"),
      prev = container.querySelectorAll(".prev"),
      next = container.querySelectorAll(".next"),
      x = 0;

    button.forEach((btn, i) => {
      btn.addEventListener("click", function () {
        slide[i].classList.add("active");
        x = i;
      });
    });

    prev.forEach((btn) => {
      btn.addEventListener("click", function () {
        x--;
        slide.forEach((slideClass) => {
          slideClass.classList.remove("active");
        });

        if (x < 0) {
          x = slide.length - 1;
        }
        console.log(x);
        slide[x].classList.add("active");
      });
    });

    next.forEach((btn) => {
      btn.addEventListener("click", function () {
        x++;
        slide.forEach((slideClass) => {
          slideClass.classList.remove("active");
        });

        if (x > slide.length - 1) {
          x = 0;
        }

        slide[x].classList.add("active");
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

window.addEventListener("load", () => {
  gsap.registerPlugin(ScrollTrigger);

  gsap.utils.toArray(".pattern-1, .pattern-2, .pattern-3").forEach((el, i) => {
    gsap.to(el, {
      yPercent: -30,
      scrollTrigger: {
        trigger: el,
        scrub: 1.1,
        start: i == 0 ? "top 10%" : null,
      },
    });
  });
});
