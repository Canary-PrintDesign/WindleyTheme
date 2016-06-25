function onScroll() {
  $('body').toggleClass('past-scroll-top', $(window).scrollTop() > 0);
}

$(window).on('scroll', onScroll);

$(function() {
  onScroll();
});
