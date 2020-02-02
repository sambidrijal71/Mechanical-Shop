jQuery(function($){
	var images = new Array( 'http://example.com/wp-content/uploads/2018/06/background-image-1.jpg', 'http://example.com/wp-content/uploads/2018/06/background-image-2.jpg' );
 
	$.backstretch( images, { duration: parseInt( 2000 ) , fade: parseInt( 100 ) } );
});