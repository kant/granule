<?php
/**
 * Theme Functions Engine.
 *
 * This file is simply used as a wrapper to load other files that do all the
 * work.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * @package Granule
 * @subpackage Template
 * @author Ben Gillbanks <ben@prothemedesign.com>
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU Public License
 */

/**
 * DESIGN CHECKLIST
 * ---
 * test for possible text widows (titles, descriptions etc)
 * check letter-spacing - especially on large and small text
 */

/**
 * TODO BEFORE SUBMISSION
 * ---
 * test theme with and without jetpack
 * test theme with and without infinite scroll
 * delete unused scripts
 * delete unused customizer controls
 * delete unused svgs
 * theme tags
 * theme description
 * screenshot.png (880 x 660)
 * check custom header size
 * check sticky styles
 * Add some subtle animations for added delight.
 * test custom header, with and without
 * responsive styles
 * set content_width (in granule_content_width and granule_after_setup_theme)
 * theme_colors
 * Remove "Dev: 1" from style.scss so that packages get build properly.
 * check custom page template styles
 * check custom logo properties are appropriate
 * rtl.css - "gulp rtl --theme granule"
 * change google font slugs so they match the font names (in granule_fonts() inc/wordpress.php and inc/wpcom.php)
 * theme scan
 * test site logo
 * test block colours
 * readme.txt
 * test hiding header and description through customizer works
 * test logo is still visible when you hide the header text
 * test custom header
 * test custom backgrounds
 * remove granule_widgets_overlay_body_class function there are no widgets in an overlay
 * check all registered menus are being used
 * check sidebar names and that sidebar display conditions match the sidebars they display
 * test print styles
 * go through required accessibility items - https://make.wordpress.org/themes/handbook/review/accessibility/required/
 * Test css on http://cssstats.com/ and make sure things look sensible.
 */

// WordPress specific functionality (actions and filters).
require get_parent_theme_file_path( 'inc/wordpress.php' );

// Add backwards compatability functions.
require get_parent_theme_file_path( 'inc/compat.php' );

// Custom header.
require get_parent_theme_file_path( 'inc/custom-header.php' );

// Reusable Template Functions.
require get_parent_theme_file_path( 'inc/template-tags.php' );

// Jetpack specific functionality (if Jetpack is enabled).
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_parent_theme_file_path( 'inc/jetpack.php' );
}

// Custom Custmomizer control that adds a category dropdown select box.
require get_parent_theme_file_path( 'inc/class-granule-category-dropdown-custom-control.php' );

// Custom Customizer control that adds a drag and drop system for rearranging
// content.
require get_parent_theme_file_path( 'inc/class-granule-dragdrop-list-control.php' );

// Custom Custmomizer control that adds a custom dropdown select box.
require get_parent_theme_file_path( 'inc/class-granule-dropdown-custom-control.php' );

// Customizer controls for setting theme properties.
require get_parent_theme_file_path( 'inc/customizer.php' );

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_parent_theme_file_path( 'inc/woocommerce.php' );
}
