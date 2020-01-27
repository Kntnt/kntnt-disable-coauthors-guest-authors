<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt Disable Co-Authors Plus Guest Author
 * Plugin URI:        https://www.kntnt.com/
 * Description:       Disables the guest author feature of Co-Authors Plus.
 * Version:           1.0.0
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */

defined( 'ABSPATH' ) || die;

add_filter( 'coauthors_guest_authors_enabled', '__return_false' );
