<?php
/**
 * Page template: Bedieninge (applies automatically to the page with slug "bedieninge").
 *
 * @package lewendewoord
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

/*
 * Ministries. Photos live in assets/images/bedieninge/ (ministry) and assets/images/diespan/ (contact person).
 * Fields: name, ministry photo, ministry photo focus (CSS object-position), contact name, phone, contact photo.
 * "Mannebediening" is intentionally left out.
 */
$ministries = array(
	array(
		'name'    => 'AANBIDDINGSPAN',
		'photo'   => 'bedieninge/aanbiddingspan.jpg',
		'focus'   => '50% 45%',
		'zoom'    => 1.7,
		'origin'  => '55% 36%',
		'contact' => 'Pierre Strydom',
		'phone'   => '073 184 0891',
		'avatar'  => 'diespan/Pierre Strydom.png',
	),
	array(
		'name'    => 'DREAM TEAM',
		'photo'   => 'bedieninge/dreamteam.jpg',
		'focus'   => '50% 58%',
		'contact' => 'Johan & Tarien Strydom',
		'phone'   => '078 474 0221',
		'avatar'  => 'bedieninge/johanentarien.png',
	),
	array(
		'name'    => 'KINDERKERK',
		'photo'   => 'bedieninge/kinderkerk.jpg',
		'focus'   => '50% 40%',
		'bright'  => 1.3,
		'contact' => 'Stephan Roets',
		'phone'   => '084 749 1195',
		'avatar'  => 'diespan/Stephan Roets.png',
		'shift'   => '7%', // moves the person to the right inside the shape
	),
	array(
		'name'    => 'JEUG',
		'photo'   => 'bedieninge/jeug.jpg',
		'focus'   => '50% 25%',
		'contact' => 'Arno Janse van Rensburg',
		'phone'   => '061 736 0076',
		'avatar'  => 'diespan/Arno Janse van Rensburg.png',
		'shift'   => '7%',
	),
	array(
		'name'    => 'SELGROEPE',
		'photo'   => 'bedieninge/sellgroep.jpeg',
		'focus'   => '50% 40%',
		'contact' => 'Kerkkantoor',
		'phone'   => '073 526 2722',
		'avatar'  => 'diespan/alltogether.png',
	),
	array(
		'name'    => 'VROUEBEDIENING',
		'photo'   => 'bedieninge/vrouebediening.jpg',
		'focus'   => '50% 50%',
		'contact' => 'Elzaan Janse van Rensburg',
		'phone'   => '073 526 2722',
		'avatar'  => 'diespan/Elzaan Janse van Rensburg.png',
	),
	array(
		'name'    => 'MEDIASPAN',
		'photo'   => 'bedieninge/media.jpg',
		'focus'   => '50% 40%',
		'contact' => 'Stephan Roets',
		'phone'   => '084 749 1195',
		'avatar'  => 'diespan/Stephan Roets.png',
		'shift'   => '7%', // moves the person to the right inside the shape
	),
);

$phone_icon = '<svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M6.6 10.8a15 15 0 0 0 6.6 6.6l2.2-2.2a1 1 0 0 1 1-.25 11.4 11.4 0 0 0 3.6.57 1 1 0 0 1 1 1V20a1 1 0 0 1-1 1A17 17 0 0 1 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1 11.4 11.4 0 0 0 .57 3.6 1 1 0 0 1-.25 1Z"/></svg>';
?>

<main class="site-main wie bed">

	<!-- Hero -->
	<section class="wie-hero" style="--wie-hero-bg: url('<?php echo lw_image( 'bedieninge/betrokke.jpg' ); ?>');">
		<div class="wie-hero__inner">
			<p class="eyebrow"><span class="eyebrow__dot" aria-hidden="true"></span>RAAK BETROKKE</p>
			<h1 class="wie-hero__title">BEDIENINGE</h1>
			<p class="wie-hero__tagline">Kontak ons gerus om vandag nog deel te raak van ’n bediening wat help om die <span class="script">Koninkryk</span> van die Here uit te brei.</p>
		</div>
	</section>

	<!-- Ministry cards -->
	<section class="ministries" aria-label="Bedieninge">
		<?php foreach ( $ministries as $i => $m ) : ?>
			<article class="ministry glass">
				<div class="ministry__photo">
					<img src="<?php echo lw_image( $m['photo'] ); ?>" alt="<?php echo esc_attr( ucfirst( strtolower( $m['name'] ) ) ); ?>" style="object-position: <?php echo esc_attr( $m['focus'] ); ?>;<?php echo ! empty( $m['zoom'] ) ? ' --z: ' . esc_attr( $m['zoom'] ) . '; transform-origin: ' . esc_attr( $m['origin'] ) . ';' : ''; ?><?php echo ! empty( $m['bright'] ) ? ' filter: brightness(' . esc_attr( $m['bright'] ) . ');' : ''; ?>" loading="lazy">
				</div>
				<div class="ministry__avatar">
					<img src="<?php echo lw_image( $m['avatar'] ); ?>" alt="<?php echo esc_attr( $m['contact'] ); ?>"<?php echo ! empty( $m['shift'] ) ? ' style="--ax: ' . esc_attr( $m['shift'] ) . ';"' : ''; ?> loading="lazy">
				</div>
				<div class="ministry__body">
					<h2><?php echo esc_html( $m['name'] ); ?></h2>
					<span class="ministry__line" aria-hidden="true"></span>
					<p class="ministry__label">Kontakpersoon</p>
					<p class="ministry__person"><?php echo esc_html( $m['contact'] ); ?></p>
					<a class="ministry__phone" href="tel:<?php echo esc_attr( preg_replace( '/\s+/', '', $m['phone'] ) ); ?>">
						<?php echo $phone_icon; // phpcs:ignore WordPress.Security.EscapeOutput ?>
						<?php echo esc_html( $m['phone'] ); ?>
					</a>
				</div>
			</article>
		<?php endforeach; ?>
	</section>

	<!-- Contact -->
	<section class="wie-contact">
		<ul class="contact glass">
			<li><strong>Kerk</strong>Duikerweg 28, Kuruman</li>
			<li><strong>Kantoor</strong>Einde van Kalahari Straat,<br>op Sediba Academy se terrein</li>
			<li><strong>Foon</strong><a href="tel:0842529491">084 252 9491</a></li>
			<li><strong>E-pos</strong><a href="mailto:admin@lewendewoordkur.com">admin@lewendewoordkur.com</a></li>
		</ul>
	</section>

</main>

<?php
get_footer();
