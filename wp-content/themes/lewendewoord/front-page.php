<?php
/**
 * Homepage template.
 *
 * @package lewendewoord
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$lw_slides = lw_get_slideshow_ids();
?>

<main class="site-main">

	<section class="hero">
		<div class="hero__copy">
			<h1 class="hero__title"><span class="hero__dot" aria-hidden="true"></span>WELKOM</h1>
			<p class="hero__tagline">Een in <span class="script">liefde.</span> Een in <span class="script">hart.</span> Een in <span class="script">doel.</span></p>

			<div class="glass intro">
				<p><strong>Lewende Woord</strong> is ’n Vernuwingsgemeente. Ons streef om eensgesind te wees - een in Liefde, een in Hart en een in Doel (Fil 2:2).</p>
				<p>Ons beleef die werk van die Heilige Gees op ’n kragtige manier, en verkondig die boodskap van genade oral.</p>
			</div>

			<div class="hero__actions">
				<a class="btn btn--teal" href="#">
					<span class="roundicon" aria-hidden="true"><svg viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-6-6 6 6-6 6"/></svg></span>
					ONTDEK MEER
				</a>
				<a class="btn btn--outline" href="#">
					<svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M7 2v2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-2V2h-2v2H9V2H7Zm-2 8h14v10H5V10Zm2 2v2h2v-2H7Zm4 0v2h2v-2h-2Zm4 0v2h2v-2h-2Zm-8 4v2h2v-2H7Zm4 0v2h2v-2h-2Z"/></svg>
					BEPLAN JOU BESOEK
				</a>
			</div>
		</div>

		<div class="slideshow" data-slideshow data-interval="6000" role="region" aria-roledescription="carousel" aria-label="Foto’s van ons gemeente" tabindex="0">
			<div class="slideshow__track">
				<?php foreach ( $lw_slides as $i => $id ) : ?>
					<div class="slideshow__slide<?php echo 0 === $i ? ' is-active' : ''; ?>" role="group" aria-roledescription="slide" aria-label="<?php echo esc_attr( ( $i + 1 ) . ' van ' . count( $lw_slides ) ); ?>">
						<?php
						echo wp_get_attachment_image(
							$id,
							'large',
							false,
							array(
								'class'    => 'slideshow__img',
								'loading'  => 0 === $i ? 'eager' : 'lazy',
								'sizes'    => '(max-width: 900px) 100vw, 760px',
								'decoding' => 'async',
							)
						);
						?>
					</div>
				<?php endforeach; ?>
			</div>

			<?php if ( count( $lw_slides ) > 1 ) : ?>
				<button class="slideshow__arrow slideshow__arrow--prev" type="button" aria-label="Vorige foto">
					<svg viewBox="0 0 24 24" aria-hidden="true"><path fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" d="m15 5-7 7 7 7"/></svg>
				</button>
				<button class="slideshow__arrow slideshow__arrow--next" type="button" aria-label="Volgende foto">
					<svg viewBox="0 0 24 24" aria-hidden="true"><path fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" d="m9 5 7 7-7 7"/></svg>
				</button>
				<div class="slideshow__dots"></div>
			<?php endif; ?>
		</div>
	</section>

	<section class="about-row">
		<div class="about">
			<h2 class="about__title"><span>LEWENDE WOORD KURUMAN</span></h2>
			<p class="about__sub">WIE IS ONS?</p>
			<p class="about__text">Almal in die <strong>Kuruman-gemeenskap</strong> is welkom by Lewende Woord.<br>
			Ons fokus op die Woord, liefdevolle verhoudings, aanbidding,<br>
			Bybel-gebaseerde onderrig, die werk van die Heilige Gees<br>
			en die opbou van ’n Koninkryk-gerigte gemeente.</p>

			<div class="cards">
				<a class="glass card" href="<?php echo esc_url( home_url( '/bedieninge/' ) ); ?>">
					<svg class="card__icon" viewBox="0 0 48 48" aria-hidden="true"><path fill="none" stroke="currentColor" stroke-width="2.4" stroke-linejoin="round" d="M24 12C19 8 11 7 3 8v29c8-1 16 0 21 4 5-4 13-5 21-4V8c-8-1-16 0-21 4Zm0 0v29M7 12v21m34-21v21"/></svg>
					<span class="card__line"></span>
					<h3>ONS BEDIENINGE</h3>
					<p>Groei saam in Christus</p>
					<span class="card__arrow" aria-hidden="true"><svg viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M6 12h12m-5-5 5 5-5 5"/></svg></span>
				</a>
				<a class="glass card" href="<?php echo esc_url( home_url( '/komende-gebeure/' ) ); ?>">
					<svg class="card__icon" viewBox="0 0 48 48" aria-hidden="true"><path fill="none" stroke="currentColor" stroke-width="2.4" stroke-linejoin="round" d="M6 8h36v36H6V8Zm0 10h36M14 3v8m20-8v8"/><g fill="currentColor"><rect x="12" y="23" width="4" height="4"/><rect x="20" y="23" width="4" height="4"/><rect x="28" y="23" width="4" height="4"/><rect x="12" y="31" width="4" height="4"/><rect x="20" y="31" width="4" height="4"/><rect x="28" y="31" width="4" height="4"/><rect x="36" y="23" width="2" height="4"/></g></svg>
					<span class="card__line"></span>
					<h3>KOMENDE GEBEURE</h3>
					<p>Wees deel van ons gemeente</p>
					<span class="card__arrow" aria-hidden="true"><svg viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M6 12h12m-5-5 5 5-5 5"/></svg></span>
				</a>
				<a class="glass card" href="#">
					<svg class="card__icon" viewBox="0 0 48 48" aria-hidden="true"><g fill="none" stroke="currentColor" stroke-width="2.4" stroke-linejoin="round"><circle cx="24" cy="12" r="5"/><circle cx="9" cy="19" r="4"/><circle cx="39" cy="19" r="4"/><path d="M14 40v-6a10 10 0 0 1 20 0v6H14Z"/><path d="M2 36v-4a7 7 0 0 1 9-6m35 10v-4a7 7 0 0 0-9-6"/></g></svg>
					<span class="card__line"></span>
					<h3>SKAKEL IN</h3>
					<p>Maak ’n verskil saam</p>
					<span class="card__arrow" aria-hidden="true"><svg viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M6 12h12m-5-5 5 5-5 5"/></svg></span>
				</a>
			</div>
		</div>

		<aside class="service" style="--lw-service-bg: url('<?php echo lw_image( 'home/Sunrise Cross Over Misty Mountains.png' ); ?>');">
			<h2 class="service__title">SONDAGDIENS</h2>
			<span class="service__line" aria-hidden="true"></span>
			<p class="service__time">09:30</p>
			<p class="service__address">
				<svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M12 2a7 7 0 0 0-7 7c0 5.2 7 13 7 13s7-7.8 7-13a7 7 0 0 0-7-7Zm0 9.5A2.5 2.5 0 1 1 14.5 9 2.5 2.5 0 0 1 12 11.5Z"/></svg>
				Duikerweg 28, Kuruman
			</p>
		</aside>
	</section>

</main>

<?php
get_footer();
