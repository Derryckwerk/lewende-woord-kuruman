<?php
/**
 * Page template: Kontak Ons (applies automatically to the page with slug "kontak-ons").
 *
 * The form is a placeholder for now (see assets/js/kontak.js).
 *
 * @package lewendewoord
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$map_url = 'https://www.google.com/maps/search/?api=1&query=' . rawurlencode( 'Duikerweg 28, Kuruman' );

$ic = array(
	'pin'      => '<path fill="currentColor" d="M12 2a7 7 0 0 0-7 7c0 5.2 7 13 7 13s7-7.8 7-13a7 7 0 0 0-7-7Zm0 9.5A2.5 2.5 0 1 1 14.5 9 2.5 2.5 0 0 1 12 11.5Z"/>',
	'building' => '<path fill="currentColor" d="M4 21V4a1 1 0 0 1 1-1h9a1 1 0 0 1 1 1v6h4a1 1 0 0 1 1 1v10h-2v-9h-3v9H4Zm3-14v2h2V7H7Zm4 0v2h2V7h-2ZM7 12v2h2v-2H7Zm4 0v2h2v-2h-2ZM7 16v2h2v-2H7Zm4 0v2h2v-2h-2Z"/>',
	'phone'    => '<path fill="currentColor" d="M6.6 10.8a15 15 0 0 0 6.6 6.6l2.2-2.2a1 1 0 0 1 1-.25 11.4 11.4 0 0 0 3.6.57 1 1 0 0 1 1 1V20a1 1 0 0 1-1 1A17 17 0 0 1 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1 11.4 11.4 0 0 0 .57 3.6 1 1 0 0 1-.25 1Z"/>',
	'mail'     => '<path fill="currentColor" d="M3 5h18a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Zm9 7.2L4.6 7H19.4L12 12.2Zm0 2L4 8.6V17h16V8.6l-8 5.6Z"/>',
	'user'     => '<path fill="currentColor" d="M12 12a5 5 0 1 0-5-5 5 5 0 0 0 5 5Zm0 2c-3.3 0-9 1.7-9 5v2h18v-2c0-3.3-5.7-5-9-5Z"/>',
	'subject'  => '<path fill="currentColor" d="M4 5h16v2H4V5Zm0 6h16v2H4v-2Zm0 6h10v2H4v-2Z"/>',
	'message'  => '<path fill="currentColor" d="M4 3h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H8l-5 4V5a2 2 0 0 1 1-2Z"/>',
	'clock'    => '<path fill="currentColor" d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2Zm1 5v5.4l4.2 2.5-1 1.6L11 13V7h2Z"/>',
	'send'     => '<path fill="currentColor" d="M2 21 23 12 2 3v7l15 2-15 2v7Z"/>',
	'facebook' => '<path fill="currentColor" d="M24 12a12 12 0 1 0-13.9 11.9v-8.4h-3V12h3V9.4c0-3 1.8-4.7 4.5-4.7 1.3 0 2.7.2 2.7.2v3h-1.5c-1.5 0-2 .9-2 1.9V12h3.4l-.5 3.5h-2.9v8.4A12 12 0 0 0 24 12Z"/>',
	'youtube'  => '<path fill="currentColor" d="M23.5 6.2a3 3 0 0 0-2.1-2.1C19.5 3.6 12 3.6 12 3.6s-7.5 0-9.4.5A3 3 0 0 0 .5 6.2 31 31 0 0 0 0 12a31 31 0 0 0 .5 5.8 3 3 0 0 0 2.1 2.1c1.9.5 9.4.5 9.4.5s7.5 0 9.4-.5a3 3 0 0 0 2.1-2.1A31 31 0 0 0 24 12a31 31 0 0 0-.5-5.8ZM9.6 15.6V8.4l6.2 3.6Z"/>',
	'arrow'    => '<path fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-6-6 6 6-6 6"/>',
);
$svg = function ( $name, $class = 'icon' ) use ( $ic ) {
	return '<svg class="' . esc_attr( $class ) . '" viewBox="0 0 24 24" aria-hidden="true">' . $ic[ $name ] . '</svg>'; // phpcs:ignore WordPress.Security.EscapeOutput
};
?>

<main class="site-main wie kontak">

	<!-- Hero: text + team photo -->
	<section class="k-hero">
		<div class="k-hero__copy">
			<p class="eyebrow"><span class="eyebrow__dot" aria-hidden="true"></span>ONS HOOR GRAAG VAN JOU!</p>
			<h1 class="k-hero__title">KONTAK ONS</h1>
			<div class="glass k-hero__intro">
				<p>Lewende Woord Kuruman is <strong>altyd bly om van jou te hoor</strong>. Skakel ons gerus direk, of vul die vorm hieronder in. Ons antwoord so gou as moontlik.</p>
			</div>
			<div class="k-hero__actions">
				<a class="btn btn--teal" href="tel:0842529491">
					<span class="roundicon" aria-hidden="true"><?php echo $svg( 'phone', '' ); // phpcs:ignore ?></span>
					BEL ONS
				</a>
				<a class="btn btn--outline" href="mailto:admin@lewendewoordkur.com">
					<?php echo $svg( 'mail' ); // phpcs:ignore ?>
					STUUR ’N E-POS
				</a>
			</div>
		</div>

		<figure class="k-team">
			<img src="<?php echo lw_image( 'diespan/alltogether.png' ); ?>" alt="Die Lewende Woord Kuruman-span" width="751" height="500">
			<figcaption>Ons span is net ’n skakel of ’n e-pos weg</figcaption>
		</figure>
	</section>

	<!-- Contact cards -->
	<section class="k-cards">
		<article class="k-card glass">
			<span class="k-card__glyph"><?php echo $svg( 'pin' ); // phpcs:ignore ?></span>
			<h2>KERK</h2>
			<p>Duikerweg 28, Kuruman</p>
			<a class="k-card__link" href="<?php echo esc_url( $map_url ); ?>" target="_blank" rel="noopener">Kry aanwysings <?php echo $svg( 'arrow', 'icon icon--sm' ); // phpcs:ignore ?></a>
		</article>
		<article class="k-card glass">
			<span class="k-card__glyph"><?php echo $svg( 'building' ); // phpcs:ignore ?></span>
			<h2>KANTOOR</h2>
			<p>Einde van Kalahari Straat,<br>op Sediba Academy se terrein</p>
		</article>
		<article class="k-card glass">
			<span class="k-card__glyph"><?php echo $svg( 'phone' ); // phpcs:ignore ?></span>
			<h2>FOON</h2>
			<p><a href="tel:0842529491">084 252 9491</a></p>
		</article>
		<article class="k-card glass">
			<span class="k-card__glyph"><?php echo $svg( 'mail' ); // phpcs:ignore ?></span>
			<h2>E-POS</h2>
			<p><a href="mailto:admin@lewendewoordkur.com">admin@lewendewoordkur.com</a></p>
		</article>
	</section>

	<!-- Form + side info -->
	<section class="k-grid">

		<div class="k-form glass">
			<h2 class="section-heading section-heading--left"><span>STUUR ’N BOODSKAP</span></h2>
			<p class="k-form__intro">Het jy ’n vraag, gebedsversoek of ’n boodskap vir ons? Laat weet ons hier.</p>

			<form id="kontak-form" class="form" novalidate>
				<div class="field field--icon">
					<label for="k-naam">Naam en van <span class="req" aria-hidden="true">*</span></label>
					<div class="field__wrap">
						<?php echo $svg( 'user', 'icon field__icon' ); // phpcs:ignore ?>
						<input id="k-naam" name="naam" type="text" autocomplete="name" required placeholder="Jou naam en van">
					</div>
				</div>
				<div class="form__row">
					<div class="field field--icon">
						<label for="k-epos">E-pos <span class="req" aria-hidden="true">*</span></label>
						<div class="field__wrap">
							<?php echo $svg( 'mail', 'icon field__icon' ); // phpcs:ignore ?>
							<input id="k-epos" name="epos" type="email" autocomplete="email" required placeholder="naam@voorbeeld.com">
						</div>
					</div>
					<div class="field field--icon">
						<label for="k-foon">Foonnommer <span class="opt">(opsioneel)</span></label>
						<div class="field__wrap">
							<?php echo $svg( 'phone', 'icon field__icon' ); // phpcs:ignore ?>
							<input id="k-foon" name="foon" type="tel" autocomplete="tel" placeholder="084 000 0000">
						</div>
					</div>
				</div>
				<div class="field field--icon">
					<label for="k-opskrif">Opskrif <span class="req" aria-hidden="true">*</span></label>
					<div class="field__wrap">
						<?php echo $svg( 'subject', 'icon field__icon' ); // phpcs:ignore ?>
						<input id="k-opskrif" name="opskrif" type="text" required placeholder="Waaroor gaan dit?">
					</div>
				</div>
				<div class="field field--icon">
					<label for="k-boodskap">Boodskap <span class="req" aria-hidden="true">*</span></label>
					<div class="field__wrap field__wrap--area">
						<?php echo $svg( 'message', 'icon field__icon' ); // phpcs:ignore ?>
						<textarea id="k-boodskap" name="boodskap" rows="5" required placeholder="Tik jou boodskap hier…"></textarea>
					</div>
				</div>
				<div class="form__actions">
					<button class="btn btn--gold" type="submit">
						<?php echo $svg( 'send' ); // phpcs:ignore ?>
						STUUR BOODSKAP
					</button>
				</div>
			</form>
		</div>

		<aside class="k-side">
			<div class="k-hours glass">
				<span class="k-card__icon"><?php echo $svg( 'clock' ); // phpcs:ignore ?></span>
				<div>
					<h2>KANTOORURE</h2>
					<p class="k-hours__time"><strong>Maandag tot Donderdag</strong><br>08:00 – 14:00</p>
					<p class="k-hours__note"><strong>NB:</strong> Die kantoor is gesluit gedurende skoolvakansies, maar ons dienste gaan soos gewoonlik voort.</p>
				</div>
			</div>

			<div class="k-service glass">
				<span class="k-card__icon k-card__icon--red"><?php echo $svg( 'pin' ); // phpcs:ignore ?></span>
				<div>
					<h2>SONDAGDIENS</h2>
					<p class="k-service__time">09:30</p>
					<p>Duikerweg 28, Kuruman</p>
				</div>
			</div>

			<div class="k-social glass" style="--k-social-bg: url('<?php echo lw_image( 'kontakons/image.png' ); ?>');">
				<div class="k-social__content">
					<h2>VOLG ONS</h2>
					<p>Bly op hoogte van wat by Lewende Woord gebeur.</p>
					<ul>
						<li><a href="https://www.facebook.com/lewendewoordkuruman/" target="_blank" rel="noopener"><?php echo $svg( 'facebook' ); // phpcs:ignore ?><span>Facebook</span></a></li>
						<li><a href="https://www.youtube.com/@lewendewoordkuruman-1" target="_blank" rel="noopener"><?php echo $svg( 'youtube' ); // phpcs:ignore ?><span>YouTube</span></a></li>
					</ul>
				</div>
			</div>
		</aside>

	</section>

</main>

<?php
get_footer();
