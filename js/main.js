(function($) {
  "use strict";

  // Preloader
  $(window).on("load", function() {
    if ($("#preloader").length) {
      $("#preloader")
        .delay(100)
        .fadeOut("slow", function() {
          $(this).remove();
        });
    }
  });

  // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $(".back-to-top").fadeIn("slow");
    } else {
      $(".back-to-top").fadeOut("slow");
    }
  });
  $(".back-to-top").click(function() {
    $("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");
    return false;
  });

  var nav = $("nav");
  var navHeight = nav.outerHeight();

  /*--/ ScrollReveal /Easy scroll animations for web and mobile browsers /--*/
  window.sr = ScrollReveal();
  sr.reveal(".foo", { duration: 1000, delay: 15 });

  /*--/ Carousel owl /--*/
  $("#carousel").owlCarousel({
    loop: true,
    margin: -1,
    items: 1,
    nav: true,
    navText: [
      '<i class="ion-ios-arrow-back" aria-hidden="true"></i>',
      '<i class="ion-ios-arrow-forward" aria-hidden="true"></i>'
    ],
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true
  });

  /*--/ Animate Carousel /--*/
  $(".intro-carousel").on("translate.owl.carousel", function() {
    $(".intro-content .intro-title")
      .removeClass("zoomIn animated")
      .hide();
    $(".intro-content .intro-price")
      .removeClass("fadeInUp animated")
      .hide();
    $(".intro-content .intro-title-top, .intro-content .spacial")
      .removeClass("fadeIn animated")
      .hide();
  });

  $(".intro-carousel").on("translated.owl.carousel", function() {
    $(".intro-content .intro-title")
      .addClass("zoomIn animated")
      .show();
    $(".intro-content .intro-price")
      .addClass("fadeInUp animated")
      .show();
    $(".intro-content .intro-title-top, .intro-content .spacial")
      .addClass("fadeIn animated")
      .show();
  });

  /*--/ Navbar Collapse /--*/
  $(".navbar-toggle-box-collapse").on("click", function() {
    $("body")
      .removeClass("box-collapse-closed")
      .addClass("box-collapse-open");
  });
  $(".close-box-collapse, .click-closed").on("click", function() {
    $("body")
      .removeClass("box-collapse-open")
      .addClass("box-collapse-closed");
    $(".menu-list ul").slideUp(700);
  });

  /*--/ Navbar Menu Reduce /--*/
  $(window).trigger("scroll");
  $(window).bind("scroll", function() {
    var pixels = 50;
    var top = 1200;
    if ($(window).scrollTop() > pixels) {
      $(".navbar-default").addClass("navbar-reduce");
      $(".navbar-default").removeClass("navbar-trans");
    } else {
      $(".navbar-default").addClass("navbar-trans");
      $(".navbar-default").removeClass("navbar-reduce");
    }
    if ($(window).scrollTop() > top) {
      $(".scrolltop-mf").fadeIn(1000, "easeInOutExpo");
    } else {
      $(".scrolltop-mf").fadeOut(1000, "easeInOutExpo");
    }
  });

  /*--/ Property owl --*/
  $("#property-carousel").owlCarousel({
    loop: true,
    margin: 30,
    responsive: {
      0: {
        items: 1
      },
      769: {
        items: 2
      },
      992: {
        items: 3
      }
    }
  });

  /*--/ Property owl owl /--*/
  $("#property-single-carousel").owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    navText: [
      '<i class="ion-ios-arrow-back" aria-hidden="true"></i>',
      '<i class="ion-ios-arrow-forward" aria-hidden="true"></i>'
    ],
    responsive: {
      0: {
        items: 1
      }
    }
  });

  /*--/ News owl /--*/
  $("#new-carousel").owlCarousel({
    loop: true,
    margin: 30,
    responsive: {
      0: {
        items: 1
      },
      769: {
        items: 2
      },
      992: {
        items: 3
      }
    }
  });

  /*--/ Testimonials owl /--*/
  $("#testimonial-carousel").owlCarousel({
    margin: 0,
    autoplay: true,
    nav: true,
    animateOut: "fadeOut",
    animateIn: "fadeInUp",
    navText: [
      '<i class="ion-ios-arrow-back" aria-hidden="true"></i>',
      '<i class="ion-ios-arrow-forward" aria-hidden="true"></i>'
    ],
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1
      }
    }
  });
})(jQuery);

/*--/ Modal /--*/

$("#signup").on("show.bs.modal", function(event) {
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("whatever"); // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this);
  modal.find(".modal-title").text("New message to " + recipient);
  modal.find(".modal-body input").val(recipient);
});

$("#login").on("show.bs.modal", function(event) {
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("whatever"); // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this);
  modal.find(".modal-title").text("New message to " + recipient);
  modal.find(".modal-body input").val(recipient);
});

/*--/ Tooltip /--*/
$(function() {
  $('[data-toggle="tooltip"]').tooltip();
});

/*--/ Show User /--*/
function showUser(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp = new XMLHttpRequest();
    } else {
      // code for IE6, IE5
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "getuser.php?q=" + str, true);
    xmlhttp.send();
  }
}
