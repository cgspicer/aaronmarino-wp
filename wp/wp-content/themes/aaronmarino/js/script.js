$(document).ready( function(){
  // aaronmarino.com
  // @author Coran Spicer

  // initialize the dropdown menus
  if ( $('.menu-item-has-children').length > 0 ) {
    $('.menu-item-has-children').each( function(){
      var $submenu = $(this).find('ul.sub-menu');
      var link = $(this).children('a')[0];
      TweenMax.set( $submenu, { 'height': 0, 'opacity' : 0 } );
      $submenu.on( 'mouseover', function(e){
        console.log( 'wtf' );
        $submenu.addClass('active');
        $(link).unbind('mouseleave');
        $submenu.one( 'mouseleave', function(e){
          $submenu.removeClass('active');
          TweenMax.to( $submenu, 1, { 'height': 'auto', 'opacity' : 0, 'onComplete' : function(){
            TweenMax.set( $submenu, { 'display' : 'none' });
          } } );
        });
      });
      $(link).on( 'mouseover', function(e){
        TweenMax.set( $submenu, { 'display' : 'block' });
        TweenMax.to( $submenu, 1, {  'height': 'auto', 'opacity' : 1 } );
        $(link).one('mouseleave', function(e){
          setTimeout( function() {
            if ( !$submenu.hasClass('active') ) {
              TweenMax.to( $submenu, 1, { 'height': 'auto', 'opacity' : 0, 'onComplete' : function(){
                TweenMax.set( $submenu, { 'display' : 'none' });
              } });
            }
          }, 500 );
        });
      });
    });
  }

});