<?php
/**
 * Footer Sidebar Template
 *
 * Display the sidebar widgets. Will not output anything if there's no widgets
 * assigned to specified sidebar.
 *
 * A body class is added if the theme has widgets to display here
 * {@see granule_body_class}. This helps with custom css that adjusts the page
 * when no widgets exist.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/#sidebar-php
 *
 * @package Granule
 * @subpackage TemplatePart
 * @author Ben Gillbanks <ben@prothemedesign.com>
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU Public License
 */

	if ( is_active_sidebar( 'sidebar-2' ) ) {
?>

<!-- Sidebar Footer (2) -->

<aside class="footer-widgets sidebar-footer sidebar" role="complementary">

<?php
	dynamic_sidebar( 'sidebar-2' );
?>

</aside>

<?php
	}
