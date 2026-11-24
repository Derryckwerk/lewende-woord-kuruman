<?php
/**
 * Page template: Bydrae (applies automatically to the page with slug "bydrae").
 *
 * @package lewendewoord
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

// Banking details (edit here).
$bank = array(
	array( 'Rekeninghouer', 'Lewende Woord Kuruman', false ),
	array( 'Bank en tak', 'FNB, Kuruman', false ),
	array( 'Rekeningnommer', '63090432203', true ),
);
?>

<main class="site-main wie bydrae">

	<!-- Hero -->
	<section class="wie-hero" style="--wie-hero-bg: url('<?php echo lw_image( 'bydrae/bydrae.png' ); ?>');">
		<div class="wie-hero__inner">
			<p class="eyebrow"><span class="eyebrow__dot" aria-hidden="true"></span>SAAI IN DIE KONINKRYK IN</p>
			<h1 class="wie-hero__title">BYDRAE</h1>
		</div>
	</section>

	<!-- Intro + banking details -->
	<section class="give-grid">

		<div class="give-intro glass">
			<h2 class="section-heading section-heading--left"><span>BAIE DANKIE</span></h2>
			<p class="kicker">Vir jou bydrae</p>
			<p>Jou bydrae help Lewende Woord om ’n verskil in baie mense se lewens te maak. Dit stel ons in staat om lig te bring en hoop te gee, van Kuruman tot in die wye omgewing.</p>
			<p>Baie dankie vir jou gehoorsaamheid en ondersteuning.</p>
			<p class="invite">Gebruik asseblief die bankbesonderhede hiernaas.</p>
		</div>

		<div class="bank glass">
			<div class="bank__head">
				<svg class="bank__icon" viewBox="0 0 48 48" aria-hidden="true"><g fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M4 18 24 6l20 12H4Z"/><path d="M9 22v14m10-14v14m10-14v14m10-14v14M5 40h38"/></g></svg>
				<h2>BANKBESONDERHEDE</h2>
			</div>
			<dl class="bank__list">
				<?php foreach ( $bank as $row ) : ?>
					<div class="bank__row">
						<dt><?php echo esc_html( $row[0] ); ?></dt>
						<dd>
							<span class="bank__value<?php echo $row[2] ? ' bank__value--num' : ''; ?>"><?php echo esc_html( $row[1] ); ?></span>
							<?php if ( $row[2] ) : ?>
								<button class="copy" type="button" data-copy="<?php echo esc_attr( $row[1] ); ?>">
									<svg class="icon" viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M16 1H4a2 2 0 0 0-2 2v14h2V3h12V1Zm3 4H8a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2Zm0 16H8V7h11v14Z"/></svg>
									<span class="copy__label">Kopieer</span>
								</button>
							<?php endif; ?>
						</dd>
					</div>
				<?php endforeach; ?>
			</dl>
		</div>

	</section>

	<!-- Thank you line -->
	<section class="thanks">
		<span class="thanks__line" aria-hidden="true"></span>
		<p>Baie dankie vir jou bydrae</p>
		<span class="thanks__line" aria-hidden="true"></span>
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
