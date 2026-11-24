<?php
/**
 * Page template: Die Span (applies automatically to the page with slug "die-span").
 *
 * @package lewendewoord
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$img = function ( $file ) {
	return lw_image( 'diespan/' . $file );
};

// name, role, phone, email, photo file.
$team = array(
	array( 'Pierre Strydom', 'Pastoor / Mannebediening / Aanbidding', '073 184 0891', 'pierre@lewendewoordkur.com', 'Pierre Strydom.png' ),
	array( 'Elidese Strydom', 'Vrouebediening', '084 252 9491', 'elidese@lewendewoordkur.com', 'Elidese Strydom.png' ),
	array( 'Arno Janse van Rensburg', 'Jeugpastoor / Living Youth', '061 736 0076', 'livingyouth@lewendewoordkur.com', 'Arno Janse van Rensburg.png' ),
	array( 'Elzaan Janse van Rensburg', 'Sekretaresse', '073 526 2722', 'admin@lewendewoordkur.com', 'Elzaan Janse van Rensburg.png' ),
	array( 'Stephan Roets', 'Kinderbediening / Tegnies', '084 749 1195', 'kruiskids@lewendewoordkur.com', 'Stephan Roets.png' ),
);

$phone_icon = '<svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M6.6 10.8a15 15 0 0 0 6.6 6.6l2.2-2.2a1 1 0 0 1 1-.25 11.4 11.4 0 0 0 3.6.57 1 1 0 0 1 1 1V20a1 1 0 0 1-1 1A17 17 0 0 1 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1 11.4 11.4 0 0 0 .57 3.6 1 1 0 0 1-.25 1Z"/></svg>';
$mail_icon  = '<svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M3 5h18a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Zm9 7.2L4.6 7H19.4L12 12.2Zm0 2L4 8.6V17h16V8.6l-8 5.6Z"/></svg>';
?>

<main class="site-main wie span">

	<!-- Hero -->
	<section class="wie-hero" style="--wie-hero-bg: url('<?php echo lw_image( 'home/Sunrise Cross Over Misty Mountains.png' ); ?>');">
		<div class="wie-hero__inner">
			<p class="eyebrow"><span class="eyebrow__dot" aria-hidden="true"></span>KOM KUIER GERUS!</p>
			<h1 class="wie-hero__title">DIE VOLTYDSE SPAN</h1>
			<p class="wie-hero__tagline">Ontmoet die mense agter <span class="script">Lewende Woord</span> Kuruman</p>
		</div>
	</section>

	<!-- Office hours -->
	<section class="office glass">
		<svg class="office__icon" viewBox="0 0 48 48" aria-hidden="true"><g fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><circle cx="24" cy="24" r="19"/><path d="M24 12v13l8 5"/></g></svg>
		<div class="office__text">
			<h2>KANTOORURE</h2>
			<p><strong>Maandag tot Donderdag, 08:00 – 14:00.</strong> Die kantoor is gesluit gedurende skoolvakansies.</p>
			<p>Loer gerus in of bel ons met enige navrae.</p>
		</div>
		<a class="btn btn--gold" href="tel:0842529491">
			<?php echo $phone_icon; // phpcs:ignore WordPress.Security.EscapeOutput ?>
			084 252 9491
		</a>
	</section>

	<!-- Team -->
	<section class="team-section">
		<h2 class="section-heading"><span>ONS SPAN</span></h2>
		<div class="team">
			<?php foreach ( $team as $i => $m ) : ?>
				<article class="member glass">
					<div class="member__photo">
						<img src="<?php echo $img( $m[4] ); ?>" alt="<?php echo esc_attr( $m[0] ); ?>" width="284" height="221" loading="lazy">
					</div>
					<div class="member__body">
						<h3><?php echo esc_html( $m[0] ); ?></h3>
						<p class="member__role"><?php echo esc_html( $m[1] ); ?></p>
						<ul class="member__contact">
							<li>
								<?php echo $phone_icon; // phpcs:ignore WordPress.Security.EscapeOutput ?>
								<a href="tel:<?php echo esc_attr( preg_replace( '/\s+/', '', $m[2] ) ); ?>"><?php echo esc_html( $m[2] ); ?></a>
							</li>
							<li>
								<?php echo $mail_icon; // phpcs:ignore WordPress.Security.EscapeOutput ?>
								<a href="mailto:<?php echo esc_attr( $m[3] ); ?>"><?php echo esc_html( $m[3] ); ?></a>
							</li>
						</ul>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
	</section>

	<!-- Group photo -->
	<section class="together">
		<figure class="together__frame">
			<img src="<?php echo $img( 'alltogether.png' ); ?>" alt="Die Lewende Woord Kuruman-span saam" width="751" height="500" loading="lazy">
			<figcaption>Een in liefde. Een in hart. Een in doel.</figcaption>
		</figure>
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
