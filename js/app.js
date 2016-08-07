jQuery(function($) {
  function toggleSubNav(e) {
    e.preventDefault();
    $(this).parent().toggleClass('active');
  }

  function closeOnClickOutside(e) {
    if($(e.target).closest('.menu').length === 0) {
      $('.menu-item-has-children').removeClass('active');
    }
  }

  function closeMenuOnSCroll() {
    $('.menu-item-has-children').removeClass('active');
  }

  function toggleActive(e) {
    e.preventDefault();
    var selector = $(e.currentTarget).data('toggle');
    $(selector).toggleClass('active');
  }

  function onScroll() {
    $('body').toggleClass('past-scroll-top', $(window).scrollTop() > 0);
  }

  $(window).on('scroll', onScroll);
  onScroll();

  $(document.body).on('click', '.menu-item-has-children > a', toggleSubNav);
  $(document.body).on('click', closeOnClickOutside);
  $(document.body).on('click', '[data-toggle]', toggleActive);
});
