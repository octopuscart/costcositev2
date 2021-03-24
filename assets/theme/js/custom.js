setTimeout(function () {
    jQuery(".hc-nav-trigger").attr("aria-label", "Mobile Menu");
    jQuery(".owl-dot").attr("aria-label", "Dot Navigation");
    jQuery("#mobilepopup").attr("aria-label", "Mobile Popup");
    jQuery(".hc-nav-trigger").removeAttr("aria-controls");


});



$(".service-card-prb2").owlCarousel({items: 4, loop: !0, autoplay: !0, margin: 20, nav: !1, dots: !1, autoplayTimeout: 3500, autoplayHoverPause: !0, smartSpeed: 2e3, responsive: {0: {items: 1}, 520: {items: 2}, 768: {items: 3}, 1200: {items: 3}, 1400: {items: 3}, 1600: {items: 3}}});