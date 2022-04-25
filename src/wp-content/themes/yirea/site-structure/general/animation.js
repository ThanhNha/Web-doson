gsap.core.globals("ScrollTrigger", ScrollTrigger);

// ScrollTrigger.defaults({
//   toggleActions: "restart pause resume pause"
// });

// gsap.utils.toArray("section").forEach((panel, i) => {
//     ScrollTrigger.create({
//       trigger: panel,
//       // start: "top top",
//       duration: 1,
//       // pin: true,
//       // markers: true,
//       // pinSpacing: false
//     });
// });
function parallax() {
  if ($(".fade-in-content p").length) {
    gsap.utils.toArray(".fade-in-content p").forEach((text, i) => {
      // Fade in
      gsap.from(text, {
        opacity: 0,
        duration: 3,
        ease: "none",
        scrollTrigger: {
          trigger: text,
          start: "top 90%",
          end: "top 90%",
          //   markers: true,
          scrub: 1,
        },
      });
    });
  }
}
function buttonAnimation() {
  const allBoops = document.querySelectorAll(".btn, .btn-2, .btn-3");
  // console.log(allBoops);

  allBoops.forEach((boop) => {
    boop.addEventListener("mouseover", () => {
      boop.classList.add("boop");
      console.log(boop);
      boop.addEventListener("animationend", () => {
        boop.classList.remove("boop");
      });
    });
  });
}
