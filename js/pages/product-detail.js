jQuery(function($) {
  $('.project-photos .gallery-carousel').flickity({
    imagesLoaded: true,
    pageDots: false,
    wrapAround: true
  });

  $('.modal .gallery-carousel').flickity({
    imagesLoaded: true,
    pageDots: false,
    wrapAround: true,
    setGallerySize: false
  });

  var pageGallery = $('.project-photos .gallery-carousel').data('flickity');
  var modalGallery = $('.modal .gallery-carousel').data('flickity');
  var pickSlide = function() {
    var cellIndex = $(this).index();
    pageGallery.select(cellIndex, true, true);
  }
  var showSelectedThumb = function() {
    var selectedIndex = pageGallery.selectedIndex;
    $('.gallery-thumb').removeClass('is-selected')
      .eq(selectedIndex).addClass('is-selected');
  }
  var showModal = function(event, pointer, cellElement, cellIndex) {
    $(document.body).addClass('modal-open');
    var carousel = $('.modal').addClass('open');
    modalGallery.selectCell(cellIndex, true, true);
    modalGallery.resize();
  };
  var closeModal = function(e) {
    if(!$(e.target).is('.modal, .close')) return;
    e.preventDefault();
    $(document.body).removeClass('modal-open');
    $('.modal').removeClass('open');
  };

  pageGallery.on('select', showSelectedThumb);
  pageGallery.on('staticClick', showModal);
  $('.gallery-navigation').on('click', '.gallery-thumb', pickSlide);
  $(document.body).on('click', '.modal', closeModal);
  $('.modal .close').on('click', closeModal);
});
