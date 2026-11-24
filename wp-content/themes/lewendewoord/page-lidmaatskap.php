<?php
/**
 * Page template: Lidmaatskap (applies automatically to the page with slug "lidmaatskap").
 *
 * The form is a placeholder for now (see assets/js/lidmaatskap.js).
 *
 * @package lewendewoord
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$slides = lw_get_lidmaatskap_ids();

// "Photo 4" (title "4") is used as the hero decoration; fall back to the first slide.
$hero_id = 0;
foreach ( $slides as $sid ) {
	if ( '4' === trim( get_the_title( $sid ) ) ) {
		$hero_id = $sid;
		break;
	}
}
if ( ! $hero_id && $slides ) {
	$hero_id = $slides[0];
}
// Verse shown under the slideshow (edit here).
$verse_text = 'Julle is dus nie meer vreemdelinge en bywoners nie, maar medeburgers van die gelowiges en lede van die huisgesin van God.';
$verse_ref  = 'Efesiërs 2:19';

$hero_url = $hero_id ? wp_get_attachment_image_url( $hero_id, 'full' ) : '';
?>

<main class="site-main wie lid">

	<!-- Hero -->
	<section class="wie-hero"<?php echo $hero_url ? ' style="--wie-hero-bg: url(\'' . esc_url( $hero_url ) . '\');"' : ''; ?>>
		<div class="wie-hero__inner">
			<p class="eyebrow"><span class="eyebrow__dot" aria-hidden="true"></span>WELKOM BY DIE FAMILIE</p>
			<h1 class="wie-hero__title">LIDMAATSKAP</h1>
			<p class="wie-hero__tagline">Raak deel van ons <span class="script">Lewende Woord</span> familie</p>
		</div>
	</section>

	<!-- Form + slideshow -->
	<section class="lid-grid">

		<div class="lid-form glass">
			<h2 class="section-heading section-heading--left"><span>LIDMAATSKAP-VORM</span></h2>
			<p class="lid-form__intro">Vul die vorm hieronder in om deel te word van ons gemeente. Sodra ons jou vorm ontvang het, stuur ons vir jou ’n bevestigings-e-pos.</p>

			<form id="lid-form" class="form" novalidate>

				<fieldset class="form__group">
					<legend>Oor jou</legend>
					<div class="form__row">
						<div class="field">
							<label for="lid-voornaam">Voornaam <span class="req" aria-hidden="true">*</span></label>
							<input id="lid-voornaam" name="voornaam" type="text" autocomplete="given-name" required placeholder="Jou voornaam">
						</div>
						<div class="field">
							<label for="lid-van">Van <span class="req" aria-hidden="true">*</span></label>
							<input id="lid-van" name="van" type="text" autocomplete="family-name" required placeholder="Jou van">
						</div>
					</div>
					<div class="field">
						<label for="lid-epos">E-posadres <span class="req" aria-hidden="true">*</span></label>
						<input id="lid-epos" name="epos" type="email" autocomplete="email" required placeholder="naam@voorbeeld.com">
					</div>
					<div class="form__row form__row--phone">
						<div class="field">
							<label for="lid-foon">Foonnommer <span class="req" aria-hidden="true">*</span></label>
							<input id="lid-foon" name="foon" type="tel" autocomplete="tel" required placeholder="084 000 0000">
						</div>
						<div class="field">
							<label for="lid-foontipe">Tipe nommer</label>
							<select id="lid-foontipe" name="foontipe">
								<option>Selfoon</option>
								<option>Huis</option>
								<option>Werk</option>
								<option>Ander</option>
							</select>
						</div>
					</div>
				</fieldset>

				<fieldset class="form__group">
					<legend>Waar is jy op hierdie stadium?</legend>
					<div class="choices">
						<label class="choice">
							<input type="radio" name="stadium" value="besoeker" required>
							<span class="choice__box">
								<span class="choice__title">Besoeker</span>
								<span class="choice__text">Ek is slegs ’n besoeker en wil nie op hierdie stadium meer inligting ontvang nie.</span>
							</span>
						</label>
						<label class="choice">
							<input type="radio" name="stadium" value="bywoner">
							<span class="choice__box">
								<span class="choice__title">Bywoner</span>
								<span class="choice__text">Ek is ’n bywoner. Nog nie besluit oor my geestelike tuiste nie, maar geniet dit hier.</span>
							</span>
						</label>
						<label class="choice">
							<input type="radio" name="stadium" value="betrokke">
							<span class="choice__box">
								<span class="choice__title">Betrokke raak</span>
								<span class="choice__text">Ek wil graag betrokke raak by die Lewende Woord Kuruman Familie.</span>
							</span>
						</label>
					</div>
				</fieldset>

				<div class="field">
					<label for="lid-boodskap">Iets wat jy met ons wil deel? <span class="opt">(opsioneel)</span></label>
					<textarea id="lid-boodskap" name="boodskap" rows="3" placeholder="Vrae, gebedsversoeke of ’n boodskap vir ons…"></textarea>
				</div>

				<div class="form__actions">
					<button class="btn btn--gold" type="submit">
						<svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M2 21 23 12 2 3v7l15 2-15 2v7Z"/></svg>
						STUUR AAN
					</button>
				</div>

			</form>
		</div>

		<div class="lid-gallery">
			<div class="slideshow slideshow--gallery" data-slideshow data-interval="5500" role="region" aria-roledescription="carousel" aria-label="Foto’s van ons gemeente" tabindex="0">
				<div class="slideshow__track">
					<?php foreach ( $slides as $i => $id ) : ?>
						<div class="slideshow__slide<?php echo 0 === $i ? ' is-active' : ''; ?>" role="group" aria-roledescription="slide" aria-label="<?php echo esc_attr( ( $i + 1 ) . ' van ' . count( $slides ) ); ?>">
							<?php
							// Soft blurred copy fills the frame; the full, uncropped photo sits on top.
							echo wp_get_attachment_image(
								$id,
								'medium',
								false,
								array(
									'class'       => 'slideshow__bg',
									'alt'         => '',
									'aria-hidden' => 'true',
									'loading'     => 'lazy',
								)
							);
							echo wp_get_attachment_image(
								$id,
								'large',
								false,
								array(
									'class'    => 'slideshow__img',
									'alt'      => 'Foto van ons gemeente',
									'loading'  => 0 === $i ? 'eager' : 'lazy',
									'sizes'    => '(max-width: 1100px) 100vw, 640px',
									'decoding' => 'async',
								)
							);
							?>
						</div>
					<?php endforeach; ?>
				</div>

				<?php if ( count( $slides ) > 1 ) : ?>
					<button class="slideshow__arrow slideshow__arrow--prev" type="button" aria-label="Vorige foto">
						<svg viewBox="0 0 24 24" aria-hidden="true"><path fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" d="m15 5-7 7 7 7"/></svg>
					</button>
					<button class="slideshow__arrow slideshow__arrow--next" type="button" aria-label="Volgende foto">
						<svg viewBox="0 0 24 24" aria-hidden="true"><path fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" d="m9 5 7 7-7 7"/></svg>
					</button>
					<div class="slideshow__dots"></div>
				<?php endif; ?>
			</div>

			<figure class="verse glass">
				<span class="verse__mark" aria-hidden="true">&ldquo;</span>
				<blockquote class="verse__text"><?php echo esc_html( $verse_text ); ?></blockquote>
				<span class="verse__line" aria-hidden="true"></span>
				<figcaption class="verse__ref"><?php echo esc_html( $verse_ref ); ?></figcaption>
			</figure>
		</div>

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
