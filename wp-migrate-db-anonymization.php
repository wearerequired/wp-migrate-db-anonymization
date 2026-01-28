<?php
/**
 * Plugin Name: WP Migrate Anonymization
 * Plugin URI: https://github.com/wearerequired/wp-migrate-db-anonymization
 * Description: An extension to WP Migrate and WP Migrate Pro that anonymizes user data.
 * Version: 0.4.0
 * Requires at least: 6.8
 * Requires PHP: 8.3
 * Author: required
 * Author URI: https://required.com
 * Update URI: false
 * Text Domain: wp-migrate-db-anonymization
 * License: GPL v3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.txt
 *
 * Copyright (c) 2018 Delicious Brains. All rights reserved.
 * Copyright (c) 2026 required (email: info@required.com)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2 or, at
 * your discretion, any later version, as published by the Free
 * Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Bootstrap autoloader.
if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';
}

/**
 * The main function responsible for returning the one true Mergebot
 * instance to functions everywhere.
 */
function wpmdb_anonymize() {
	$version = '0.4.0';
	return WPMDB\Anonymization\Plugin::get_instance( __FILE__, $version );
}

// Initialize the plugin.
wpmdb_anonymize();
