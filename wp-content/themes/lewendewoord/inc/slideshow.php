<?php
/**
 * Homepage slideshow: pulls every image from the FileBird folder
 * "Home page slideshow" (spaces and capitals are ignored) (media library), in natural order (1, 2, ... 10, 11).
 *
 * @package lewendewoord
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Get image attachment IDs in a FileBird folder (spaces and capitals in the name are ignored).
 *
 * @param string $folder_name Folder name, e.g. "Home page slideshow".
 * @param string $order       "title" (natural sort on title: 1, 2, 10) or "id" (upload order).
 * @return int[]
 */
function lw_get_folder_images( $folder_name, $order = 'title' ) {
	global $wpdb;

	$key    = 'lw_ss_' . md5( $folder_name . $order );
	$cached = get_transient( $key );
	if ( ! empty( $cached ) ) {
		return $cached;
	}

	$folders = $wpdb->prefix . 'fbv';
	$links   = $wpdb->prefix . 'fbv_attachment_folder';
	$ids     = array();

	// FileBird must be active and its tables present.
	// phpcs:ignore WordPress.DB.DirectDatabaseQuery
	if ( $wpdb->get_var( $wpdb->prepare( 'SHOW TABLES LIKE %s', $folders ) ) === $folders ) {
		// phpcs:ignore WordPress.DB.DirectDatabaseQuery, WordPress.DB.PreparedSQL.InterpolatedNotPrepared
		$ids = $wpdb->get_col(
			$wpdb->prepare(
				"SELECT l.attachment_id
				 FROM {$links} l
				 INNER JOIN {$folders} f ON f.id = l.folder_id
				 INNER JOIN {$wpdb->posts} p ON p.ID = l.attachment_id
				 WHERE REPLACE(LOWER(f.name), ' ', '') = %s
				   AND p.post_type = 'attachment'
				   AND p.post_mime_type LIKE %s",
				str_replace( ' ', '', strtolower( $folder_name ) ),
				'image/%'
			)
		);
	}

	$ids = array_map( 'intval', $ids );

	if ( 'id' === $order ) {
		sort( $ids );
	} else {
		usort(
			$ids,
			function ( $a, $b ) {
				return strnatcasecmp( get_the_title( $a ), get_the_title( $b ) );
			}
		);
	}

	if ( $ids ) {
		set_transient( $key, $ids, 10 * MINUTE_IN_SECONDS );
	}

	return $ids;
}

/**
 * Homepage slideshow images (FileBird folder "Home page slideshow").
 *
 * @return int[]
 */
function lw_get_slideshow_ids() {
	return lw_get_folder_images( 'Home page slideshow', 'title' );
}

/**
 * Lidmaatskap page slideshow images (FileBird folder "Lidmaatskap page slideshow").
 *
 * @return int[]
 */
function lw_get_lidmaatskap_ids() {
	return lw_get_folder_images( 'Lidmaatskap page slideshow', 'id' );
}

/**
 * Komende gebeure adverts (FileBird folder "Komende gebeure page"), natural order by title (ad1, ad2, ad10).
 *
 * @return int[]
 */
function lw_get_events_ids() {
	return lw_get_folder_images( 'Komende gebeure page', 'title' );
}

/**
 * Clear the cache whenever media changes, so new images appear straight away.
 */
function lw_clear_slideshow_cache() {
	foreach ( array( 'Home page slideshow' => 'title', 'Lidmaatskap page slideshow' => 'id', 'Komende gebeure page' => 'title' ) as $name => $order ) {
		delete_transient( 'lw_ss_' . md5( $name . $order ) );
	}
}
add_action( 'add_attachment', 'lw_clear_slideshow_cache' );
add_action( 'edit_attachment', 'lw_clear_slideshow_cache' );
add_action( 'delete_attachment', 'lw_clear_slideshow_cache' );
// FileBird fires this when an attachment is moved between folders.
add_action( 'fbv_after_set_folder', 'lw_clear_slideshow_cache' );
