/**
 * Homepage slideshow: auto-advances, arrows, dots, keyboard and swipe.
 */
( function () {
	'use strict';

	var reduceMotion = window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches;

	Array.prototype.forEach.call( document.querySelectorAll( '[data-slideshow]' ), init );

	function init( root ) {
	var slides = Array.prototype.slice.call( root.querySelectorAll( '.slideshow__slide' ) );
	var dotsWrap = root.querySelector( '.slideshow__dots' );
	var interval = parseInt( root.getAttribute( 'data-interval' ), 10 ) || 6000;
	var current = 0;
	var timer = null;
	var dots = [];

	function show( index ) {
		current = ( index + slides.length ) % slides.length;
		slides.forEach( function ( slide, i ) {
			var active = i === current;
			slide.classList.toggle( 'is-active', active );
			slide.setAttribute( 'aria-hidden', active ? 'false' : 'true' );
		} );
		dots.forEach( function ( dot, i ) {
			dot.classList.toggle( 'is-active', i === current );
			dot.setAttribute( 'aria-current', i === current ? 'true' : 'false' );
		} );
	}

	function start() {
		if ( reduceMotion || slides.length < 2 ) {
			return;
		}
		stop();
		timer = window.setInterval( function () {
			show( current + 1 );
		}, interval );
	}

	function stop() {
		if ( timer ) {
			window.clearInterval( timer );
			timer = null;
		}
	}

	if ( slides.length < 2 ) {
		root.classList.add( 'is-single' );
		return;
	}

	slides.forEach( function ( slide, i ) {
		var dot = document.createElement( 'button' );
		dot.type = 'button';
		dot.className = 'slideshow__dot';
		dot.setAttribute( 'aria-label', 'Gaan na skyfie ' + ( i + 1 ) );
		dot.addEventListener( 'click', function () {
			show( i );
			start();
		} );
		dotsWrap.appendChild( dot );
		dots.push( dot );
	} );

	root.querySelector( '.slideshow__arrow--prev' ).addEventListener( 'click', function () {
		show( current - 1 );
		start();
	} );
	root.querySelector( '.slideshow__arrow--next' ).addEventListener( 'click', function () {
		show( current + 1 );
		start();
	} );

	root.addEventListener( 'mouseenter', stop );
	root.addEventListener( 'mouseleave', start );
	root.addEventListener( 'focusin', stop );
	root.addEventListener( 'focusout', start );

	root.addEventListener( 'keydown', function ( e ) {
		if ( e.key === 'ArrowLeft' ) {
			show( current - 1 );
		} else if ( e.key === 'ArrowRight' ) {
			show( current + 1 );
		}
	} );

	// Touch swipe.
	var startX = null;
	root.addEventListener(
		'touchstart',
		function ( e ) {
			startX = e.touches[ 0 ].clientX;
		},
		{ passive: true }
	);
	root.addEventListener( 'touchend', function ( e ) {
		if ( startX === null ) {
			return;
		}
		var dx = e.changedTouches[ 0 ].clientX - startX;
		if ( Math.abs( dx ) > 40 ) {
			show( dx < 0 ? current + 1 : current - 1 );
			start();
		}
		startX = null;
	} );

	show( 0 );
	start();
	}
} )();
