( function( $ ) {

	$( document ).ready( function() {		

		$( '.menu-icon-picker-btn' ).on( 'click', function( e ) {

			e.preventDefault();

			var iconPickerVal = $( this ).val();

			if( iconPickerVal == '' ) {
				$( this ).parents( '.menu-icon-field' ).find( '.menu-icon-holder' ).html( '' );
			} else {
				var icon = "<i class='fa "+iconPickerVal+"'></i>";
				$( this ).parents( '.menu-icon-field' ).find( '.menu-icon-holder' ).html( icon );
			}

			$( this ).parents( '.menu-icon-field' ).find( '.menu-icon-input' ).val( iconPickerVal );
		} );

		$( '.menu-remove-icon' ).on( 'click', function( e ) {

			e.preventDefault();

			$( this ).parents( '.menu-icon-field' ).find( '.menu-icon-input' ).val( '' );

			$( this ).parents( '.menu-icon-field' ).find( '.menu-icon-holder' ).html( '' );

		} );

		$( '.menu-select-icon' ).on( 'click', function( e ) {

			e.preventDefault();

			$( this ).parents( '.menu-icon-field' ).find( '.menu-icons-picker-wrapper' ).toggle();

		} );

	} );

} ) ( jQuery );