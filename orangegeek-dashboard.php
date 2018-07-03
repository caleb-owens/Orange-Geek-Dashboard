<?php
/*
Plugin Name: Orange Geek Dashboard
Plugin URI: https://orangegeek.com
description: WordPress plugin for Orange Geek Hosting
Author: Caleb Owens
*/

add_action('admin_menu','og_menu');

function og_menu(){
    add_options_page('Orange Geek Dashboard', 'Orange Geek Dashboard', 'manage_options','og-dashboard', 'og_options');
}

function og_options(){
    if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	echo '<div class="wrap">';
	echo '<p>Here is where the form would go if I actually had options.</p>';
	echo '</div>';
}

?>