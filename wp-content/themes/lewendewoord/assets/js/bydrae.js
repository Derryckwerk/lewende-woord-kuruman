/**
 * Bydrae: "Kopieer" button copies the account number to the clipboard.
 */
( function () {
	'use strict';

	Array.prototype.forEach.call( document.querySelectorAll( '.copy[data-copy]' ), function ( btn ) {
		var label = btn.querySelector( '.copy__label' );
		var original = label.textContent;

		btn.addEventListener( 'click', function () {
			var text = btn.getAttribute( 'data-copy' );

			function done() {
				label.textContent = 'Gekopieer!';
				btn.classList.add( 'is-done' );
				window.setTimeout( function () {
					label.textContent = original;
					btn.classList.remove( 'is-done' );
				}, 2000 );
			}

			if ( navigator.clipboard && window.isSecureContext ) {
				navigator.clipboard.writeText( text ).then( done );
				return;
			}

			// Fallback for non-secure contexts (e.g. plain http on a local site).
			var ta = document.createElement( 'textarea' );
			ta.value = text;
			ta.setAttribute( 'readonly', '' );
			ta.style.position = 'fixed';
			ta.style.opacity = '0';
			document.body.appendChild( ta );
			ta.select();
			try {
				document.execCommand( 'copy' );
				done();
			} catch ( err ) {}
			document.body.removeChild( ta );
		} );
	} );
} )();
