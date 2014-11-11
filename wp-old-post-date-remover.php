<?php
/**
 * Plugin Name: WP Old Post Date Remover
 * Plugin URI: http://benandjacq.com/wordpress-plugin-wp-old-post-date-remover/
 * Description: Remove the date on older posts and pages with no code. You select the number of days! 
 * Version: 2.1
 * Author: Ben Meredith
 * Author URI: http://benandjacq.com/
 * License: GPL2
 */
 /*  Copyright 2014  Ben Meredith  (email : ben@benandjacq.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

include 'OPDR-options.php';

/* The Plugin Class */
defined('ABSPATH') or die("No script kiddies please!");



function wp_OPDR_is_Old_Enough ()
	{
	
		$today = date( 'U' );
		$articledate = get_the_time( 'U' );
		$difference = round( ( $today - $articledate ) / ( 24*60*60 ),0);
		$OPDRinput = get_option( 'opdr_days_to_show_date' );
		            
		        if ( $difference >= $OPDRinput && ( is_single() || is_archive() ) ) {
			wp_enqueue_style( 'remove-style-meta', plugins_url( 'css/OPDRstyle.css', __FILE__ ), false, '1.0', 'all' );
		} else {
			
		}
	};
add_action('loop_start', 'wp_OPDR_is_Old_Enough');	

/* Adds link to settings from plugin list */

function opdr_options_link($links) { 
  $settings_link = '<a href="options-general.php?page=wp_old_post_date_remover">Settings</a>'; 
  array_unshift( $links, $settings_link ); 
  return $links; 
}
 
$plugin = plugin_basename(__FILE__); 
add_filter("plugin_action_links_$plugin", 'opdr_options_link' );

/* Uninstallation -- cleans up any mess we might have made. */

function OPDR_on_uninstall()
{
	delete_option( 'opdr_days_to_show_date' );
	
	
}

register_uninstall_hook(    __FILE__, 'OPDR_on_uninstall' );
