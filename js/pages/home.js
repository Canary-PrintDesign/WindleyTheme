function onScroll() {
  $('body').toggleClass('at-scroll-top', $(window).scrollTop() === 0);
}

$(window).on('scroll', onScroll);
onScroll();
