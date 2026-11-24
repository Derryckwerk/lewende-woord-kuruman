<?php
/**
 * Site header.
 *
 * @package lewendewoord
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Menu: label => array( url, page slug ). Pages not built yet use "#".
$lw_menu = array(
	'Welkom'          => array( home_url( '/' ), 'front' ),
	'Wie is Ons'      => array( home_url( '/wie-is-ons/' ), 'wie-is-ons' ),
	'Bedieninge'      => array( home_url( '/bedieninge/' ), 'bedieninge' ),
	'Die Span'        => array( home_url( '/die-span/' ), 'die-span' ),
	'Lidmaatskap'     => array( home_url( '/lidmaatskap/' ), 'lidmaatskap' ),
	'Bydrae'          => array( home_url( '/bydrae/' ), 'bydrae' ),
	'Kontak Ons'      => array( home_url( '/kontak-ons/' ), 'kontak-ons' ),
	'Komende Gebeure' => array( home_url( '/komende-gebeure/' ), 'komende-gebeure' ),
);
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> style="--lw-bg: url('<?php echo lw_image( 'home/Sunlit Teal Forest Bokeh.png' ); ?>');">
<?php wp_body_open(); ?>

<header class="site-header">
	<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Lewende Woord Kuruman">
		<img class="brand__logo" src="<?php echo lw_image( 'Lewende Woord Logo transparent no words.png' ); ?>" alt="" width="1536" height="724">
		<span class="brand__name">LEWENDE WOORD<small>KURUMAN</small></span>
	</a>

	<button class="nav-toggle" type="button" aria-expanded="false" aria-controls="primary-nav">
		<span class="screen-reader-text">Menu</span>
		<span class="nav-toggle__bars" aria-hidden="true"></span>
	</button>

	<nav id="primary-nav" class="primary-nav" aria-label="Hoofnavigasie">
		<ul>
			<?php foreach ( $lw_menu as $label => $item ) : ?>
				<?php
				$is_current = ( 'front' === $item[1] ) ? is_front_page() : ( $item[1] && is_page( $item[1] ) );
				?>
				<li>
					<a href="<?php echo esc_url( $item[0] ); ?>"<?php echo $is_current ? ' class="is-active" aria-current="page"' : ''; ?>><?php echo esc_html( $label ); ?></a>
				</li>
			<?php endforeach; ?>
			<li class="nav-cta">
				<a class="btn btn--gold" href="<?php echo esc_url( home_url( '/lidmaatskap/' ) ); ?>">RAAK ’N LID</a>
			</li>
		</ul>
	</nav>

	<a class="btn btn--gold header-cta" href="<?php echo esc_url( home_url( '/lidmaatskap/' ) ); ?>">
		<svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M16 11a3 3 0 1 0-3-3 3 3 0 0 0 3 3Zm-8 0a3 3 0 1 0-3-3 3 3 0 0 0 3 3Zm0 2c-2.3 0-7 1.2-7 3.5V19h14v-2.5C15 14.2 10.3 13 8 13Zm8 0c-.3 0-.6 0-1 .1a4.2 4.2 0 0 1 2 3.4V19h6v-2.5C23 14.2 18.3 13 16 13Z"/></svg>
		RAAK ’N LID
	</a>
</header>
