<?php
/*
Plugin Name: WP Migrate DB Anonymization
Plugin URI: https://deliciousbrains.com/wp-migrate-db-pro/
Description: An extension to WP Migrate DB and WP Migrate DB Pro that anonymizes user data.
Author: Delicious Brains
Version: 0.3.4
Author URI: https://deliciousbrains.com
Network: True
*/

// Copyright (c) 2018 Delicious Brains. All rights reserved.
//
// Released under the GPL license
// http://www.opensource.org/licenses/gpl-license.php
//
// **********************************************************************
// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
// **********************************************************************

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Bootstrap autoloader
if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

/**
 * The main function responsible for returning the one true Mergebot
 * instance to functions everywhere.
 */
function wpmdb_anonymize() {
	// Namespaced class name as variable so it can be parsed in < PHP 5.3
	$class   = 'WPMDB\\Anonymization\\Plugin';
	$version = '0.3.4';

	return call_user_func( array( $class, 'get_instance' ), __FILE__, $version );
}

// Initialize the plugin
wpmdb_anonymize();
