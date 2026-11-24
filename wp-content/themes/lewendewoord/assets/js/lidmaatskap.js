/**
 * Lidmaatskap form – PLACEHOLDER.
 * Validates the fields in the browser but does not send anything yet.
 * Replace the "submit" handler with a real submission (e.g. Church Center, a form plugin or admin-ajax) later.
 */
( function () {
	'use strict';

	var form = document.getElementById( 'lid-form' );
	if ( ! form ) {
		return;
	}

	form.addEventListener( 'submit', function ( e ) {
		e.preventDefault();

		if ( ! form.checkValidity() ) {
			form.classList.add( 'was-validated' );
			form.reportValidity();
			return;
		}

		// Placeholder: nothing is sent yet. Add the real submission here.
	} );
} )();
