function MySlider__init(no) {
    var mySwiper = new Swiper(".my-slider-" + no + " .swiper-container", {
      pagination: {
        el: ".my-slider-" + no + " .swiper-pagination",
        clickable: true
      },
      autoplay: {
        delay: 3000,
        disableOnInteraction: false
      }
    });
  }
  
  function MySliderType2__init(no) {
    var swiper = new Swiper(".my-slider-" + no + " .swiper-container", {
      loop: true,
      loopFillGroupWithBlank: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      },
      slidesPerView: 3,
      spaceBetween: 0.35,
      loop: true,
      watchSlidesVisibility: true,
      autoplay: {
        delay: 4000,
        disableOnInteraction: false
      }
    });
  }
  
  MySlider__init(1);
  MySlider__init(3)
  MySliderType2__init(2);
  
  
  
  var a = 0;
  
  $('.swiper-pagination-bullet:nth-child(6)').click(function() {
  
  
  
    var oTop = $('#counter').offset().top - window.innerHeight;
  
    if (a == 0 && $(window).scrollTop() > oTop) {
  
      $('.counter-value').each(function() {
  
        var $this = $(this),
  
          countTo = $this.attr('data-count3');
  
        $({
  
          countNum: $this.text()
  
        }).animate({
  
            countNum: countTo
  
          },
  
          {
  
            duration: 2000,
  
            easing: 'swing',
  
            step: function() {
  
              $this.text(Math.floor(this.countNum));
  
            },
  
            complete: function() {
  
              $this.text(this.countNum);
  
            }
  
          });
  
      });
  
      a = 1;
  
    }
  
  });
  
  