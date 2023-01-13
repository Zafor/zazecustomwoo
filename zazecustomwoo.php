<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://zaforiqbal.com
 * @since             1.0.0
 * @package           Zazecustomwoo
 *
 * @wordpress-plugin
 * Plugin Name:       Zaze Custom Woo
 * Plugin URI:        https://zaforiqbal.com/zazecustomwoo
 * Description:       Custom WooCommerce Functions for Az-Ai.
 * Version:           1.0.0
 * Author:            Zafor Iqbal
 * Author URI:        https://zaforiqbal.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       zazecustomwoo
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'ZAZECUSTOMWOO_VERSION', '1.0.0' );

/**
*  Hide prices on all categories
*/

function zaze_hide_prices_on_all_categories( $price, $product ) {
	if ( is_product_category() ) {
	return ''; // Empty string = no price!
	}
	
	return $price;
	}
	
	add_filter( 'woocommerce_get_price_html', 'zaze_hide_prices_on_all_categories', 10, 2 );