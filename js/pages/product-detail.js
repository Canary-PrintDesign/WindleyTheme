jQuery(function($) {
  $('.gallery-carousel').flickity({
    imagesLoaded: true,
    pageDots: false,
    wrapAround: true
  });

  var pickSlide = function() {
    var cellIndex = $(this).index();
    pageGallery.select(cellIndex, true, true);
  }
  var showSelectedThumb = function() {
    var selectedIndex = pageGallery.selectedIndex;
    $('.gallery-thumb').removeClass('is-selected')
      .eq(selectedIndex).addClass('is-selected');
  }

  pageGallery.on('select', showSelectedThumb);
  $('.gallery-navigation').on('click', '.gallery-thumb', pickSlide);
});
