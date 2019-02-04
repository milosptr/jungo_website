jQuery(document).ready(function () {
  var sloMovementStrength = 15;
  var sloHeight = sloMovementStrength / jQuery(window).height();
  var sloWidth = sloMovementStrength / jQuery(window).width();
  jQuery("body").mousemove(function (e) {
    var pageX = e.pageX - (jQuery(window).width() / 2);
    var pageY = e.pageY - (jQuery(window).height() / 2);
    var slowX = sloHeight * pageX * -1 - 25;
    var slowY = sloWidth * pageY * -1 - 50;
    // Hero background
    jQuery('.hero-image').css("background-position", slowX + "px     " + slowY + "px");

    parallaxIt(e, ".dots-rect", 10);
    parallaxIt(e, ".line", -20);
    parallaxIt(e, ".circle", -20);
    parallaxIt(e, ".square", -100);
    parallaxIt(e, ".x-rect", 40);
    parallaxIt(e, ".iks", 10);
  });


  // Navigation
  jQuery(".hamburger-button").click(function (e) {
    jQuery('.hamburger').toggleClass("is-active");
    jQuery('#hamburger-menu').toggleClass('open');
    jQuery('.hamburger-button').toggleClass('open');
  });

  jQuery("#hamburger-menu .blur").click(function (e) {
    jQuery('#hamburger-menu').removeClass('open');
    jQuery('.hamburger').removeClass("is-active");
    jQuery('.hamburger-button').removeClass('open');
  });

  // Sticky header
  if (jQuery(window).scrollTop() >= 500)
    jQuery("#navigation").addClass("sticky");

  jQuery(window).scroll(function () {
    var scroll = jQuery(window).scrollTop();

    if (scroll >= 500) {
      jQuery("#navigation").addClass("sticky");
    } else {
      jQuery("#navigation").removeClass("sticky");
    }
  });

  if (window.innerWidth < 1024) {
    jQuery('.flip-container').focus(function () {
      jQuery('.flip-container').removeClass('hover');
      jQuery(this).addClass('hover');
    });
  }

  // end on document ready
});


function parallaxIt(e, target, movement) {
  var $this = $("body");
  var relX = e.pageX - $this.offset().left;
  var relY = e.pageY - $this.offset().top;

  TweenMax.to(target, 1, {
    x: (relX - $this.width() / 2) / $this.width() * movement,
    y: (relY - $this.height() / 2) / $this.height() * movement
  });
}

