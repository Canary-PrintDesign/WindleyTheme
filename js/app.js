function toggleSubNav(e) {
  e.preventDefault();
  $(this).parent().toggleClass('active');
}

function closeOnClickOutside(e) {
  if($(e.target).closest('.menu').length === 0) {
    $('.menu-item-has-children').removeClass('active');
    e.preventDefault();
  }
}

function closeMenuOnSCroll() {
  $('.menu-item-has-children').removeClass('active');
}

$(function() {
  $(document.body).on('click', '.menu-item-has-children > a', toggleSubNav);
  $(document.body).on('click', closeOnClickOutside);
});