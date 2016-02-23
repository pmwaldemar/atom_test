(function( $ ){

  var randomColor = function () {
    return 'rgb('+(Math.floor(Math.random()*256))+','+(Math.floor(Math.random()*256))+','+(Math.floor(Math.random()*256))+')';
  };

  var randomContentColor = function(){
    $( '.content-section' ).css('color', randomColor() );
  };

window.setInterval( randomContentColor, 50);

  $( document ).on( 'click', '.content-section', randomContentColor);
})(jQuery);
