<?php
/**
 * Plugin Name:       Emoji Fix
 * Plugin URI:        https://github.com/JosKlever/emoji-fix
 * Description:       This plugin is used to fix a bug in WordPress when using emojis.
 * Version:           1.0
 * Requires at least: 4.2
 * Requires PHP:      7.0
 * Author:            Jos Klever
 * Author URI:        https://joskleverwebsupport.nl/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */
add_filter( 'wp_insert_post_data', function( $data, $postarr ) {
if ( ! empty( $data['post_content'] ) ) {
    $data['post_content'] = wp_encode_emoji( $data['post_content'] );
}
return $data;
}, 99, 2 );
