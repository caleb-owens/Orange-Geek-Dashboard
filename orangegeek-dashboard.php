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
    ?>
        <script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: 'edda6b38-06ce-4180-ad78-0b2cbf944ed3', f: true }); done = true; } }; })();</script>
    <?php
}

?>