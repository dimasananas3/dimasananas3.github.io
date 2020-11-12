$(document).ready(function(){
  
  $('.section-home-slider__slider').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 960,
        settings: {
          slidesToShow: 2,
        }
      },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
      }
    }
    ]
  });

  $('.section-about-slider__slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1
  });

  $('.section-blog__slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1
  });
  
  $('.nav-close-menu').click(function(e) {
    e.preventDefault();
    $('.navbar-collapse').removeClass('show');
    $('body').css('overflow','visible');
  });
  $('.navbar-btn').click(function(e) {
    e.preventDefault();
    $('.navbar-collapse').addClass('show');
    $('body').css('overflow','hidden');
  });
});
