<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://sunil.com
 * @since             1.0.0
 * @package           Pg_Test
 *
 * @wordpress-plugin
 * Plugin Name:       Playground test
 * Plugin URI:        https://wppb.me
 * Description:       This is a description of the plugin.
 * Version:           1.0.0
 * Author:            sunil
 * Author URI:        https://sunil.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       pg-test
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
define( 'PG_TEST_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-pg-test-activator.php
 */
function activate_pg_test() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-pg-test-activator.php';
	Pg_Test_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-pg-test-deactivator.php
 */
function deactivate_pg_test() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-pg-test-deactivator.php';
	Pg_Test_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_pg_test' );
register_deactivation_hook( __FILE__, 'deactivate_pg_test' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-pg-test.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_pg_test() {

	$plugin = new Pg_Test();
	$plugin->run();

}
run_pg_test();
