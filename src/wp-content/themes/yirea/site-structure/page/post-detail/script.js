function relatedSlider() {
    $sliderPostDetail = $("#single #related .splideRelated");
    if ($sliderPostDetail.length > 0) {
        var splideRelated = document.getElementsByClassName("splideRelated");
        for (var i = 0, len = splideRelated.length; i < len; i++) {
            new Splide(splideRelated[i], {
                autoWidth: false,
                arrows: true,
                pagination: false,
                breakpoints: {
                    375: {
                        autoWidth: true,
                    },
                    480: {
                        autoWidth: true,
                        perPage:1,
                    },
                    550: {
                        autoWidth: true,
                        perPage: 1,
                        gap: "10px",
                    },
                    768: {
                        autoWidth: true,
                        perPage: 1,
                        gap: "10px",
                    },
                    2560: {
                        autoWidth: true,
                        destroy: true, // or 'completely'
                    }
                },
            }).mount();
        }
    }
}

function stickeyIcons() {
    var parentHeight = $('.wp-block-columns').height();
    $(window).scroll(function() {
        if ($(this).scrollTop() > parentHeight) {
          $('.at-custom-sidebar-btns').hide();
        } else {
          $('.at-custom-sidebar-btns').fadeIn();
        }
      });
}