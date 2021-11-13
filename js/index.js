$(document).ready(function(){
  // Плавный переход
  $("body").on("click", "a", function (event) {
    event.preventDefault();
    var id  = $(this).attr('href'),
        top = $(id).offset().top;
    $('body,html').animate({scrollTop: top}, 300);
  });

  // Слайдер тренеров
  $('.slider-coach').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    prevArrow: '<button class="slick-btn prev"><img src="../img/btn-prev.png"></button>',
    nextArrow: '<button class="slick-btn next"><img src="../img/btn-next.png"></button>',
  });

  // Увеличение отзывов
  $('.review-block').on('mouseover', function() {
    $(this).css('transform', 'scale(1.2)');
    $(this).parent().nextAll().each((i, el) => {
      $(el).find('.review-block').css({
        transform: 'translate(25px)',
      });
    });
    $(this).parent().prevAll().each((i, el) => {
      $(el).find('.review-block').css({
        transform: 'translate(-25px)',
      });
    });
  });
  $('.review-block').on('mouseout', function() {
    $('.review-block').css({
      transform: 'scale(1)',
      transformOrigin: 'center',
      transform: 'translate(0px)',
    });
  });

  // Кнопка наверх
  $(window).on("scroll", function() {
    let height = $(window).height();
    if ($(window).scrollTop() > height) {
      $('.btn-top').show({
        duration: 'fast',
        complete: () => {
          $('.btn-top').css('transition', '0.2s');
        }
      });
    } else {
      $('.btn-top').hide({
        duration: 'fast',
        complete: () => {
          $('.btn-top').css('transition', '0s');
        }
      });
    }
  });
});