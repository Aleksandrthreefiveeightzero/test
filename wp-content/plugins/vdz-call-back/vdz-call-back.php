<?php
/*
Plugin Name: VDZ Call Back Plugin
Plugin URI:  http://online-services.org.ua
Description: Simple CALL BACK from shortcode with customization
Version:     1.9.4
Author:      VadimZ
Author URI:  http://online-services.org.ua#vdz_call_back
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

define('VDZ_CALL_BACK_VERSION', '1.9.4');
define('VDZ_CALL_BACK_DOMAIN', 'vdz_call_back');
define('VDZ_CALL_BACK_API', 'vdz_info_call_back');

define('VDZ_CALL_BACK_DIR',  plugin_dir_path(__FILE__));
define('VDZ_CALL_BACK_URL',  plugin_dir_url(__FILE__));
define('VDZ_CALL_BACK_FILE',  __FILE__);
define('VDZ_CALL_BACK_DATA_FILE', plugin_dir_path(__FILE__) . 'data' . DIRECTORY_SEPARATOR . 'bkp.db');
define('VDZ_CALL_BACK_LOG_FILE', plugin_dir_path(__FILE__) . 'data' . DIRECTORY_SEPARATOR . 'vdz_cb.log');

//Init plugin
require_once (VDZ_CALL_BACK_DIR . 'includes/vdz_cb_construct.php');



/**
 * This function runs when WordPress completes its upgrade process
 * It iterates through each plugin updated to see if ours is included
 * @param $upgrader_object Array
 * @param $options Array
 */
add_action( 'upgrader_process_complete', function ( $upgrader_object, $options ) {
	// The path to our plugin's main file
	$our_plugin = plugin_basename( __FILE__ );
	// If an update has taken place and the updated type is plugins and the plugins element exists
	if( $options['action'] == 'update' && $options['type'] == 'plugin' && isset( $options['plugins'] ) ) {
		// Iterate through the plugins being updated and check if ours is there
		foreach( $options['plugins'] as $plugin ) {
			if( $plugin == $our_plugin ) {
				// Set a transient to record that our plugin has just been updated
				set_transient( 'vdz_api_updated'.plugin_basename( __FILE__ ), 1 );
			}
		}
	}
}, 10, 2 );

/**
 * Show a notice to anyone who has just updated this plugin
 * This notice shouldn't display to anyone who has just installed the plugin for the first time
 */
add_action( 'admin_notices', function () {
	// Check the transient to see if we've just updated the plugin
	if( get_transient( 'vdz_api_updated'.plugin_basename( __FILE__ ) ) ) {
		
		if(function_exists( 'get_locale') && in_array( get_locale(), array('uk','ru_RU'))){
			echo '<div class="notice notice-success">
					<h4>Поздравляю! Обновление успешно завершено! </h4>
					<h3><a target="_blank" href="https://wordpress.org/support/plugin/vdz-call-back/reviews/?rate=5#new-post">Скажи спасибо и проголосуй (5 звезд) </a> - Мне будет приятно и я пойму, что все делаю правильно</h3>
				  </div>';
		}else{
			echo '<div class="notice notice-success">
					<h4>Congratulations! Update completed successfully!</h4>
					<h3><a target="_blank" href="https://wordpress.org/support/plugin/vdz-call-back/reviews/?rate=5#new-post">Say thanks and vote (5 stars)</a> - I will be glad and understand that doing everything right</h3>
				  </div>';
		}

		delete_transient( 'vdz_api_updated'.plugin_basename( __FILE__ ) );
	}
} );