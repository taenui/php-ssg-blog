function Popup1__hide() {
    $('html').removeClass('popup-1-actived');
  }
  
  function Popup1__show() {
    $('html').addClass('popup-1-actived');
  }
  
  function Popup1__init() {
    $('.popup-1 > .main > .content > .body > .btn-close, .popup-1').click(Popup1__hide);
    
    $('.popup-1 > .main').click(function() {
      return false;
    })
  
    // Popup1__show(); 와 다르게 아래 코드는 1초 뒤에 실행됨
    setTimeout(Popup1__show, 1000);
  }
  
  Popup1__init();