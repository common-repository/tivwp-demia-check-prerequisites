<?php
/**
 * Plugin Name: TIVWP-DEMIA Check prerequisites
 * Plugin URI: https://github.com/TIVWP/tivwp-demia-check-prerequisites
 * Description: TIVWP Academia: This plugin will not function unless certain conditions are met.
 * Version: 14.05.07
 * Author: TIV.NET
 * Author URI: http://www.tiv.net
 * License: GPL2
 * Copyright 2014 Gregory Karpinsky (tiv.net), All Rights Reserved
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

if ( version_compare( PHP_VERSION, '5.3.0', '>=' ) ) {
	/**
	 * It's OK to load the main plugin file
	 */
	require_once 'tivwp-demia-check-prerequisites-main.php';
}

else {
	/**
	 * We are running under PHP 5.2.x
	 * Display an admin notice and do nothing.
	 */
	is_admin() && add_action( 'admin_notices', create_function( '', "
	echo '
		<div class=\"error\"><p>
		TIVWP-DEMIA Check prerequisites:
		<strong>This plugin requires PHP 5.3 or later. Please deactivate</strong>.
		</p></div>
	';"
	) );

}

# --- EOF