<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/gblessylva/
 * @since      1.0.0
 *
 * @package    Sermon_bible_passage
 * @subpackage Sermon_bible_passage/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Sermon_bible_passage
 * @subpackage Sermon_bible_passage/includes
 * @author     gblessylva <gblessylva@gmail.com>
 */
class Sermon_bible_passage_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'sermon_bible_passage',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
