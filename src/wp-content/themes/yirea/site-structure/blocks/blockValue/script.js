// const counters = document.querySelectorAll(".counter");
// const speed = 300;
// counters.forEach((counter) => {
//   const updateCount = () => {
//     const target = parseInt(+counter.getAttribute("data-target"));
//     const count = parseInt(+counter.innerText);
//     const increment = Math.trunc(target / speed);
//     if (count < target) {
//       counter.innerText = count + increment;
//       setTimeout(updateCount, 1);
//     } else {
//       count.innerText = target;
//     }
//   };
//   updateCount();
// });

function countData() {
  var fx = function fx() {
    $(".counter").each(function (i, el) {
      var data = parseInt(this.dataset.n, 10);
      var props = {
        from: {
          count: 0,
        },
        to: {
          count: data,
        },
      };
      $(props.from).animate(props.to, {
        duration: 2000 * 1,
        step: function (now, fx) {
          $(el).text(Math.ceil(now));
        },
        complete: function () {
          if (el.dataset.sym !== undefined) {
            el.textContent = el.textContent.concat(el.dataset.sym);
          }
        },
      });
    });
  };
  var reset = function reset() {
    // console.log($(this).scrollTop())
    if ($(this).scrollTop() > 100) {
      $(this).off("scroll");
      fx();
    }
  };
  $(window).on("scroll", reset);
}
