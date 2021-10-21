<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/gblessylva/
 * @since             1.0.0
 * @package           Sermon_bible_passage
 *
 * @wordpress-plugin
 * Plugin Name:       Sermon with Bible Passage
 * Plugin URI:        https://github.com/gblessylva/
 * Description:       Sermon with bible passage plugin allows you to add sermons to your WordPress site. It also allows you to easily display the sermons
 * Version:           1.0.0
 * Author:            gblessylva
 * Author URI:        https://github.com/gblessylva/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       sermon_bible_passage
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
define( 'SERMON_BIBLE_PASSAGE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-sermon_bible_passage-activator.php
 */
function activate_sermon_bible_passage() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sermon_bible_passage-activator.php';
	Sermon_bible_passage_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-sermon_bible_passage-deactivator.php
 */
function deactivate_sermon_bible_passage() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sermon_bible_passage-deactivator.php';
	Sermon_bible_passage_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_sermon_bible_passage' );
register_deactivation_hook( __FILE__, 'deactivate_sermon_bible_passage' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-sermon_bible_passage.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_sermon_bible_passage() {

	$plugin = new Sermon_bible_passage();
	$plugin->run();

}
run_sermon_bible_passage();
