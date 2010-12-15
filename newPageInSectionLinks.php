<?php
/*
Plugin Name: New Page in Section Links
Plugin URI: http://www.theoephraim.com/
Description: Simple plug-in that allows user to specify parent_id in links to the new page form
Version: 0.1
Author: Theo Ephraim
Author URI: http://theoephraim.com
Minimum WordPress Version Required: 2.7.0
Tested up to: 2.7.1
*/

add_action("admin_print_scripts", "npisl_hookAdminPrintScripts");
add_action("admin_footer", "npisl_hookAdminFooter");

function npisl_hookAdminPrintScripts(){
	wp_enqueue_script( 'jquery' );
}

function npisl_hookAdminFooter(){
	//only needs to act if on page-new.php
	if ( substr( $_SERVER['SCRIPT_NAME'], strlen( $_SERVER['SCRIPT_NAME'] ) - 12 ) == 'post-new.php' && $_GET['post_type']=='page' && isset($_GET['parent_id']) && is_numeric($_GET['parent_id']) ) {
		//when page loads, use javascript to set the parent_id select to the value passed in the $_GET
		echo '
		<script type="text/javascript">
			jQuery(document).ready(function(){
				jQuery("#parent_id").val('.intval($_GET['parent_id']).').attr("disabled","disabled");
				jQuery("#parent_id").after("<input type=\"hidden\" name=\"parent_id\" value=\"'.intval($_GET['parent_id']).'\"/>");
				jQuery("h2:contains(\"Add New Page\")").text("Add New Page [in \""+jQuery("#parent_id :selected").text()+"\"]"); 
			});
		</script>';	
	}
}

?>