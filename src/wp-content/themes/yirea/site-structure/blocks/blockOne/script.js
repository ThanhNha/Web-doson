function blockOne() {
  if ($("#property").length) {
    $("#property").select2({
      minimumResultsForSearch: -1,
    });
  }
  if ($("#property-sale").length) {
    $("#property-sale").select2({
      minimumResultsForSearch: -1,
    });
  }
  if ($("#property-rent").length) {
    $("#property-rent").select2({
      minimumResultsForSearch: -1,
    });
  }
  if ($("#location").length) {
    $("#location").select2({
      minimumResultsForSearch: -1,
    });
  }
  if ($("#location-sale").length) {
    $("#location-sale").select2({
      minimumResultsForSearch: -1,
    });
  }
  if ($("#location-rent").length) {
    $("#location-rent").select2({
      minimumResultsForSearch: -1,
    });
  }
  if ($("#investor").length) {
    $("#investor").select2({
      minimumResultsForSearch: -1,
    });
  }
  if ($("#investor-sale").length) {
    $("#investor-sale").select2({
      minimumResultsForSearch: -1,
    });
  }
  if ($("#investor-rent").length) {
    $("#investor-rent").select2({
      minimumResultsForSearch: -1,
    });
  }

  function showFilter() {
    const tabs = document.querySelectorAll(".btn-top");
    const panes = document.querySelectorAll(".filter-bone");
    if (tabs.length || panes.length) {
      tabs[0].classList.add("active");
      panes[0].classList.add("active");

      tabs.forEach((elem, i) => {
        elem.addEventListener("click", (e) => {
          $("#blockOne .btn-top").removeClass("active");
          $("#blockOne .filter-bone").removeClass("active");

          elem.classList.add("active");
          panes[i].classList.add("active");
        });
      });
    }
  }
  showFilter();
}
