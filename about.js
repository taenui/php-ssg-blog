function Popup2__hide() {
    $('html').removeClass('popup-2-actived');
  }
  
  function Popup2__show() {
    $('html').addClass('popup-2-actived');
  }
  
  function Popup2__init() {
    Popup2__show();
    
    setTimeout(Popup2__hide, 3000);
    
  }
  
  Popup2__init();
  
  
  