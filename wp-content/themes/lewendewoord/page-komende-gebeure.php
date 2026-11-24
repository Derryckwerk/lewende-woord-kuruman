<?php
/**
 * Page template: Komende Gebeure (applies automatically to the page with slug "komende-gebeure").
 *
 * Every image in the FileBird folder "Komende gebeure page" is shown as an advert.
 *
 * @package lewendewoord
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$ads = lw_get_events_ids();
?>

<main class="site-main wie gebeure">

	<!-- Hero -->
	<section class="wie-hero" style="--wie-hero-bg: url('<?php echo lw_image( 'komendegebeure/15.jpg' ); ?>');">
		<div class="wie-hero__inner">
			<p class="eyebrow"><span class="eyebrow__dot" aria-hidden="true"></span>WEES DEEL VAN ONS GEMEENTE</p>
			<h1 class="wie-hero__title">KOMENDE GEBEURE</h1>
		</div>
	</section>

	<!-- Adverts -->
	<section class="ads" aria-label="Komende gebeure">
		<?php if ( $ads ) : ?>
			<?php foreach ( $ads as $id ) : ?>
				<?php
				$meta = wp_get_attachment_metadata( $id );
				$w    = isset( $meta['width'] ) ? (int) $meta['width'] : 0;
				$full = wp_get_attachment_image_url( $id, 'full' );
				?>
				<figure class="ad"<?php echo $w ? ' style="--ad-w: ' . esc_attr( $w ) . 'px;"' : ''; ?>>
					<a class="ad__frame" href="<?php echo esc_url( $full ); ?>" target="_blank" rel="noopener" aria-label="Maak die advertensie groter">
						<?php
						echo wp_get_attachment_image(
							$id,
							'full',
							false,
							array(
								'class'    => 'ad__img',
								'alt'      => 'Advertensie vir ’n komende gebeurtenis',
								'loading'  => 'lazy',
								'sizes'    => '(max-width: 1400px) 92vw, 1340px',
								'decoding' => 'async',
							)
						);
						?>
					</a>
				</figure>
			<?php endforeach; ?>
		<?php else : ?>
			<div class="ads__empty glass">
				<svg class="ads__empty-icon" viewBox="0 0 48 48" aria-hidden="true"><path fill="none" stroke="currentColor" stroke-width="2.4" stroke-linejoin="round" d="M6 8h36v36H6V8Zm0 10h36M14 3v8m20-8v8"/></svg>
				<p>Daar is tans geen komende gebeure nie. Kyk gerus weer binnekort!</p>
			</div>
		<?php endif; ?>
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
