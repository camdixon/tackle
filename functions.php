<?php
/**
 * Online Advertising
 * @copyright  Copyright (c) Online Advertising. (http://www.on-line-advertising.com)
 * @license    http://www.on-line-advertising.com/license/
 * @author     Online Advertising
 * @version    Release: 1.0
 */
/**  Set Default options : Theme Settings  */

function tm_set_default_options_child()
{ 
	/*  General Settings  */			
	add_option("tmoption_topbar_bkg_opacity","0.5"); // Set your background opacity		
	add_option("tmoption_revslider_alias",'tm_homeslider_tools');
	
	/*  Top Bar Settings  */	
	add_option("tmoption_topbar_bkg_color","ffffff"); // topbar_bkg_color	
	add_option("tmoption_topbar_bkg_opacity","0.15"); // Set your background opacity	
	add_option("tmoption_topbar_text_color","ffffff"); // topbar_text_color
	add_option("tmoption_topbar_link_color","ffffff"); // topbar_link_color
	add_option("tmoption_topbar_link_hover_color","ffcc00"); // topbar_link_hover_color	
	add_option("tmoption_top_menu_bg_color","064070"); // Top menu background color
	add_option("tmoption_topbar_phone_text","Call now"); // set contact text
	add_option("tmoption_topbar_phone","01-2345-678"); // set contact number
		
	/*  Header Settings  */				
	add_option("tmoption_header_bkg_opacity","0.0"); // header background opacity	
		
	/*  Content Settings  */
	add_option("tmoption_hoverlink_color","CE2B2A"); // link hover color
		
	/*  Footer Settings  */	
	add_option("tmoption_footerbkg_color","153B59"); // footer background color
	add_option("tmoption_footerlink_color","88AAC4"); // footer link text color			
}	
add_action('init', 'tm_set_default_options_child'); 

function harvest_load_scripts_child() {		
	wp_enqueue_script( 'harvest_jquery_custom', get_stylesheet_directory_uri() . '/js/megnor/custom.js', array(), '', true);	  				 	
 }
add_action( 'wp_enqueue_scripts', 'harvest_load_scripts_child' );

?>
