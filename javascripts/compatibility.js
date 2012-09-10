var Compatibility = window.Compatibility || {};

( function( Compatibility, $ ) {
	
	/* ----------------------
	BACKGROUND SIZE SUPPORT
	---------------------- */
	Compatibility.BGSize = (function() {
		
		var container_styles = {
			'position': 'fixed',
			'z-index': '-1',
			'top': 0,
			'left': 0,
			'width': '100%',
			'height': '100%',
			'text-align': 'center',
			'overflow': 'hidden'
		};
		
		return {
			updateImageRatio: function( bg ) {
				var image = bg.find( 'img' ).width( 'auto' ).height( 'auto' ), // Reset dimensions
					image_ratio = image.width() / image.height(),
					view_ratio = $( window ).width() / $( window ).height();
					
				if( view_ratio < image_ratio )
					image.height( '100%' );
				else
					image.width( '100%' );
			},
			create: function() {
				var img = $('body').css('background-image').split('url(')[1].split(')')[0].replace( /\"/g, '' ),
					build = $( '<div id="background_image" />' ).html( $( '<img />' ).attr( 'src', img ) );
				
				build.css( container_styles ).prependTo( 'body' ); // cover
				Compatibility.BGSize.updateImageRatio( build );
				$( window ).resize( function() {
					Compatibility.BGSize.updateImageRatio( build );
				} ); 
			},
			destroy: function() {
				$( '#background_image' ).remove();
			}
		}
		
	})();
	
	/* ----------
	RGBA SUPPORT
	---------- */
	Compatibility.RGBA = ( function() {
		
		return {
			getIEFilter: function( hex, opacity ) {
				var ieOpacity = opacity == 0 ? '00' : Math.floor(parseFloat(opacity) / 100 * 255).toString(16);
				return 'progid:DXImageTransform.Microsoft.Gradient(GradientType=1, StartColorStr="#' + ieOpacity + hex + '", EndColorStr="#' + ieOpacity + hex + '")';
			},
			update: function( set ) {
				$.each( set, function( i, e ) {
					$( e.selector ).css( { 'background-color': Compatibility.RGBA.getIEFilter( e.hex, e.opacity ) } );
				} )
			}
		}
		
	} )();
	
} )( Compatibility, jQuery );