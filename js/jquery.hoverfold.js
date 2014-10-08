( function( $ ) {
	
	$.fn.hoverfold = function( args ) {
		this.each( function() {
			$('.view', this).each( function() {
				var $item 	= $( this ),
					img		= $item.children( 'img' ).attr( 'src' ),
					struct	= '<div class="slice s1">';
						struct	+='<div class="slice s2">';
							struct	+='<div class="slice s3">';
								struct	+='<div class="slice s4">';
									struct	+='<div class="slice s5">';
									struct	+='</div>';
								struct	+='</div>';
							struct	+='</div>';
						struct	+='</div>';
					struct	+='</div>';
					
				var $struct = $( struct );
				
				$item.find( 'img' ).remove().end().append( $struct ).find( 'div.slice' ).css( 'background-image', 'url(' + img + ')' ,'width:320px','height:200px').prepend( $( '<span class="overlay" ></span>' ) );
				
			} );
			
		});

	};

} )( jQuery );