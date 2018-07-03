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
	
    ?>
        <script type="text/javascript" src="https://s3.amazonaws.com/assets.freshdesk.com/widget/freshwidget.js"></script>
        <style type="text/css" media="screen, projection">
            @import url(https://s3.amazonaws.com/assets.freshdesk.com/widget/freshwidget.css); 
        </style> 
        <iframe title="Feedback Form" class="freshwidget-embedded-form" id="freshwidget-embedded-form" src="https://support.orangegeek.com/widgets/feedback_widget/new?&widgetType=embedded&formTitle=Create+a+Ticket+&submitTitle=Submit+Ticket&submitThanks=Thank+you+for+submitting+a+ticket+to+Orange+Geek.&screenshot=No" scrolling="no" height="500px" width="100%" frameborder="0" ></iframe>
         
        <script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: 'edda6b38-06ce-4180-ad78-0b2cbf944ed3', f: true }); done = true; } }; })();</script>
    <?php
}

?>