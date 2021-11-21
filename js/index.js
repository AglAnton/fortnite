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
    dots: true,
    prevArrow: '<button class="slick-btn prev"><img src="img/btn-prev.png"></button>',
    nextArrow: '<button class="slick-btn next"><img src="img/btn-next.png"></button>',
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        }
      },
      {
        breakpoint: 575,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  // Увеличение отзывов
  $('.review-block').on('mouseover', function() {
    if ($(window).width() <= 991) return;

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
    if ($(window).width() <= 991) return;

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

  // Меню
  $('body').on('click', '.nav-button:not(.open)', function(){
    let $this = $(this);
    $this.toggleClass('open');
    $('.nav-mini').toggleClass('open');
    setTimeout(() => {
      $('body').one('click', function() {
        $this.removeClass('open');
        $('.nav-mini').removeClass('open');
      });
    });
  });
});