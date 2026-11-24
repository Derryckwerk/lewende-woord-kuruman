<?php
/**
 * Fallback template (inner pages are added later).
 *
 * @package lewendewoord
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main class="site-main site-main--page">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class( 'glass page__content' ); ?>>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</article>
		<?php endwhile; ?>
	<?php else : ?>
		<article class="glass page__content">
			<h1>Nie gevind nie</h1>
			<p>Hierdie bladsy bestaan nie.</p>
		</article>
	<?php endif; ?>
</main>

<?php
get_footer();
