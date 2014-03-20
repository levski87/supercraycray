<?php
/**
 * @package Sticky Social Bar
 */
/*
Plugin Name: Sticky Social  Bar
Plugin URI: http://pixelgrade.com/sticky-social-bar
Description: Interactive WordPress plugin for adding cusomized social newtork buttons
Version: 1.4.1
Author: Pixel Grade 
Author URI: http://pixelgrade.com/
License: GPLv2 or later

 * *************************************************************************

  Copyright (C) 2012 PixelGrade

  This program is free software: you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation, either version 3 of the License, or
  (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program.  If not, see <http://www.gnu.org/licenses/>.

 * *************************************************************************
 
*/

function shareit_install() {
   global $wpdb;
   $table_name = $wpdb->prefix . "shareit";     
   $sql = "CREATE TABLE " . $table_name . " (
	  id mediumint(9) NOT NULL AUTO_INCREMENT,
	  enabled int(1) NOT NULL,
	  name VARCHAR(80) NOT NULL,
	  position mediumint(9) NOT NULL,
	  big text NOT NULL,
	  UNIQUE KEY id (id)
    );";
	
	add_option('shareit_linkback',0);
	add_option('stick_to_left', 1);
	add_option('shareit_posts', 1);
	add_option('shareit_pages', 0);
	add_option('shareit_home', 0);
	add_option('shareit_offset','-115');
	add_option('shareit_top','200');
	add_option('shareit_width','75');
	add_option('shareit_theme',"default.css");
	add_option('shareit_align',1);
	
   require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
   dbDelta($sql);
   $facebook="<iframe src=\"http://www.facebook.com/plugins/like.php?href=[url]&layout=box_count&show_faces=false&width=60&action=like&colorscheme=light&height=65\" scrolling=\"no\" frameborder=\"0\" style=\"border:none; overflow:hidden; width:54px; height:65px;\" allowTransparency=\"true\"></iframe>";
   $twitter="<a href=\"http://twitter.com/share\" class=\"twitter-share-button\" data-count=\"vertical\" data-via=\"[twitter]\">Tweet</a><script type=\"text/javascript\" src=\"http://platform.twitter.com/widgets.js\"></script>"; 
   $shareit="<script type=\"text/javascript\" src=\"http://w.sharethis.com/button/buttons.js\"></script><span class=\"st_facebook_vcount\" displayText=\"Share\"></span><span class=\"st_email\" displayText=\"Email\"></span><span class=\"st_sharethis\" displayText=\"Share\"></span>";
   $digg="<script type=\"text/javascript\">(function() {var s = document.createElement('SCRIPT'), s1 = document.getElementsByTagName('SCRIPT')[0]; s.type = 'text/javascript'; s.async = true; s.src = 'http://widgets.digg.com/buttons.js'; s1.parentNode.insertBefore(s, s1); })();</script><a class=\"DiggThisButton DiggMedium\"></a>";
   $reedit="<script type=\"text/javascript\" src=\"http://reddit.com/static/button/button2.js\"></script>";
   $dzone="<script language=\"javascript\" src=\"http://widgets.dzone.com/links/widgets/zoneit.js\"></script>";
   $stumbleupon="<script src=\"http://www.stumbleupon.com/hostedbadge.php?s=5\"></script>";
   $email="<a style=\"    
    float: left;
    font-size: 10px;
    line-height: 13px;
    padding:0;
    margin:0;
    text-align: center;
    text-decoration: none; width:64px;\" href=\"mailto:?subject=[url]\" class=\"sharebar-button email\">
    <img style=\"background: none repeat scroll 0 0 transparent;
    clear: both;
    margin: 0 auto;
    padding: 0;
    width: 54px;\" src=".plugins_url('/img/mail.png', __FILE__)." />Share by Email</a>";
   $gplus="<script type=\"text/javascript\" src=\"http://apis.google.com/js/plusone.js\"></script><g:plusone size=\"tall\"></g:plusone>";
   $pinit="<a href=\"http://pinterest.com/USERNAME/\"><img style='background:none;margin:0;padding:0' src=\"http://passets-cdn.pinterest.com/images/big-p-button.png\" width=\"61\" height=\"61\" alt=\"Follow Me on Pinterest\" /></a>";
   $linkin="<script src=\"http://platform.linkedin.com/in.js\" type=\"text/javascript\"></script><script type=\"IN/Share\" data-url=\"[url]\" data-counter=\"top\"></script>";
   $chimein="<a name=\"compose-chime-btn\" class=\"compose-chime-btn compose-chime-btn32\" href=\"http://chime.in\"><span>Chime.in</span></a><script src=\"http://chime.in/partners/chimeinbutton.js\"></script>";
   
   $rows_affected = $wpdb->insert( $table_name, array( 'enabled' => '1', 'name' => 'facebook', 'position' => '1', 'big' => $facebook) );
   $rows_affected = $wpdb->insert( $table_name, array( 'enabled' => '1', 'name' => 'twitter', 'position' => '2', 'big' => $twitter) );
   $rows_affected = $wpdb->insert( $table_name, array( 'enabled' => '1', 'name' => 'Google Plus', 'position' => '3', 'big' => $gplus) );
   $rows_affected = $wpdb->insert( $table_name, array( 'enabled' => '0', 'name' => 'share', 'position' => '4', 'big' => $shareit) );
   $rows_affected = $wpdb->insert( $table_name, array( 'enabled' => '0', 'name' => 'digg', 'position' => '5', 'big' => $digg) );
   $rows_affected = $wpdb->insert( $table_name, array( 'enabled' => '0', 'name' => 'reedit', 'position' => '6', 'big' => $reedit) );
   $rows_affected = $wpdb->insert( $table_name, array( 'enabled' => '0', 'name' => 'dzone', 'position' => '7', 'big' => $dzone) );
   $rows_affected = $wpdb->insert( $table_name, array( 'enabled' => '0', 'name' => 'stumbleupon', 'position' => '8', 'big' => $stumbleupon) );
   $rows_affected = $wpdb->insert( $table_name, array( 'enabled' => '0', 'name' => 'Pin it', 'position' => '9', 'big' => $pinit) );
   $rows_affected = $wpdb->insert( $table_name, array( 'enabled' => '0', 'name' => 'LinkIn', 'position' => '10', 'big' => $linkin) );
   $rows_affected = $wpdb->insert( $table_name, array( 'enabled' => '0', 'name' => 'email', 'position' => '11', 'big' => $email) );
   $rows_affected = $wpdb->insert( $table_name, array( 'enabled' => '0', 'name' => 'Chime.in', 'position' => '12', 'big' => $chimein) );
   
   
}
function shareit_replace($input){
	global $post;
	$code = array('[title]','[url]','[author]');
  $url = get_permalink();
  if (is_home()) {
    $url = network_site_url( '/' );
  }
	$values = array($post->post_title,$url,get_the_author());
	return str_replace($code,$values,$input);
}


function shareit_reset(){
	global $wpdb;
	$table = $wpdb->prefix."shareit";
	delete_option('shareit_theme');
	delete_option('shareit_posts');
	delete_option('shareit_pages');
	delete_option('shareit_home');
	delete_option('shareit_offset');
	delete_option('shareit_top');
	delete_option('shareit_width');
	delete_option('stick_to_left');
	delete_option('shareit_linkback');
	delete_option('shareit_align');
	$wpdb->query("DROP TABLE IF EXISTS $table");
}
function shareit_admin_init() {
        wp_register_script( 'shareit_jqueryui', plugins_url('/js/jqueryui.js', __FILE__) );
        wp_register_script( 'shareit_js', plugins_url('/js/shareit.js', __FILE__) );		
}
function shareit_menu(){
        $page = add_submenu_page( 'options-general.php', // The parent page of this menu
                                  __( 'Sticky Social  Bar', 'shareIt' ), // The Menu Title
                                  __( 'Sticky Social  Bar', 'shareIt' ), // The Page title
								'manage_options', // The capability required for access to this item
								'shareit-options', // the slug to use for the page in the URL
                                  'shareit_manage_menu' // The function to call to render the page
                               );

        /* Using registered $page handle to hook script load */
        add_action('admin_print_styles-' . $page, 'shareit_admin_styles');
   
}
function shareit_admin_styles() {	
        wp_enqueue_script( 'shareit_jqueryui' );
        wp_enqueue_script( 'shareit_js' );		
    }
function shareit_manage_menu() {	
		?>
		<link rel="stylesheet" type="text/css" href="<?php echo plugins_url('style.css', __FILE__) ?>" /> 
		<?php
	 include 'shareit-admin.php';
}

function my_action_callback(){
	global $wpdb;
	$action = mysql_real_escape_string($_POST['secaction']); 
	$updateRecordsArray 	= $_POST['recordsArray'];

	if ($action == "updateRecordsListings"){
	$listingCounter = 1;
	foreach ($updateRecordsArray as $recordIDValue) {
		$query = "UPDATE ".$wpdb->prefix."shareit SET position = " . $listingCounter . " WHERE id = " . $recordIDValue;
		mysql_query($query) or die('Error, insert query failed');
		$listingCounter = $listingCounter + 1;	
	}
	
	echo '<pre>';
	echo "Positions modified:";
				$query2  = "SELECT * FROM ".$wpdb->prefix."shareit ORDER BY position ASC";
				$result = mysql_query($query2);
						
				while($row = mysql_fetch_array($result, MYSQL_ASSOC))
				{
					echo "<br>" . $row['position'] . " ". $row['name'];					
				}
	
	echo '</pre>';
	echo 'Positions are automatically saved in the database';
}
die(); 
}

function shareit_output(){
	global $post;
	$shareit_hide = get_post_meta($post->ID, 'shareit_hide', true);
	//check if edit mode and if is not edit mode set the margin left according to the offset saved
	if (current_user_can('manage_options') && isset($_GET['edit']) && $_GET['edit']=="true")
		$marginleft="";
	else
		$marginleft=get_option('shareit_offset');
	if(get_option('stick_to_left')==2) $id='<ul id="shareit" class="shareit-left" name="stickysocial">'; else $id='<ul id="shareit" name="stickysocial" style="margin-left:'.$marginleft.'px;">';
	if(empty($shareit_hide)) {
		global $wpdb;
		$str = $id;
		$results = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."shareit WHERE enabled=1 ORDER BY position, id ASC");
		foreach($results as $result) { $str .= '<li>'.shareit_replace($result->big).'</li>'; }
		if(get_option('shareit_linkback')==1) $str .='<li class="linkback"><a href="http://pixelgrade.com/">PixeGrade</a></li>'; 
		$str .= '</ul>';
		return $str;
	}
}
function shareit_ui_print(){
	if(!is_admin()) wp_register_script('shareit-ui-script', plugins_url('/js/jqueryui.js', __FILE__),array('jquery'));
	wp_print_scripts('shareit-ui-script');
	?>
			<div class="edit_true"><form action="<?php echo get_admin_url(); ?>/options-general.php?page=shareit-options&tab=settings" name="updatepos" method="post">
			<input type="hidden" name="leftval" />
			<input type="hidden" name="topval" />
			<input type="hidden" name="stickleft" />
			<input type="hidden" name="sticklefttop" />
			<input type="hidden" name="diferenta" />
			<div class="cancel"><a href="<?php echo get_admin_url(); ?>/options-general.php?page=shareit-options&tab=settings"><input type="button" value="Cancel" /></a></div>
			<div class="update"><input size="33" type="submit" value="update" /></div>
			<link rel="stylesheet" type="text/css" href="<?php echo plugins_url('style.css', __FILE__) ?>" /> 
			<script type="text/javascript">
				
				jQuery(document).ready(function($) { 							
				var shareit = $('#shareit');
				$('<span class="overlay_edit"></span>').insertBefore('#shareit > li:first-child');
				marginl=$(shareit).parent().offset().left;
				$(shareit).css('marginLeft',marginl+"px");
				if(<?php echo get_option('stick_to_left')?>==1)
					$(shareit).css('left',<?php echo get_option('shareit_offset');?>+"px"); //if you are in edit mode leftpos margin left is overrrided and set the left saved previously

							$(shareit).draggable({
								start: function() {
								},
								drag: function() {
								},
								stop: function() {
									var left = $('#shareit').css('left').replace("px", "");											
									var top = $(shareit).css('top').replace("px","");
								if($(shareit).offset().left<5)
								{	
									$(shareit).addClass('shareit-left');	
									$(shareit).css({'left': 0-marginl,
									});
									
									document.updatepos.stickleft.value=2;
									
								} else {
									$(shareit).removeClass('shareit-left');	
									document.updatepos.stickleft.value=1;
									document.updatepos.diferenta.value=0;	
								}
								//the left value considering the static margin left (offset of the parent to the screen) is sent
									document.updatepos.leftval.value=Math.round(left);
									document.updatepos.topval.value=Math.round(top);
								}
							});

					});
			</script>	
		</div>

	<?php
}


function shareit_activate($content){
	if (current_user_can('manage_options') && isset($_GET['edit']) && $_GET['edit']=="true")
	{
			add_action('wp_footer','shareit_ui_print');
	}
  $display_frontpage = get_option ('shareit_home', 0);
  $display_posts = get_option ('shareit_posts', 0);
  $display_pages = get_option ('shareit_pages', 0);

	$str=shareit_output();
	$newcontent = $content;
	if ( is_front_page() && $display_frontpage == 1 || is_page() &&  $display_pages == 1 || is_single() && $display_posts == 1) {
		$newcontent=$str.$newcontent;
  }

	return $newcontent;
	
}
function shareit_header()
{	
	$theme="/css/".get_option('shareit_theme');
	echo '<link rel="stylesheet" media="screen" type="text/css" href="'.plugins_url($theme, __FILE__).'" />';
}
function shareit_init(){
	if(!is_admin()) wp_register_script('shareit-script', plugins_url('/js/sharefront.js', __FILE__),array('jquery'));
}
function shareit_print_script() {
	wp_print_scripts('shareit-script');
	if(get_option('stick_to_left')==1)
		$pos="right";
	if(get_option('stick_to_left')==2)
		$pos="left";
	?>
	<script type="text/javascript">jQuery(document).ready(function($) { 
	$("#shareit").shareit({swidth:<?php echo get_option('shareit_width')+0; ?>,alignVertical:<?php echo get_option('shareit_align'); ?>,top:<?php echo get_option('shareit_top'); ?>,position:'<?php echo $pos;?>',leftOffset:'<?php echo get_option('shareit_offset'); ?>'}); });
	</script>
	<?php
}

function shareit_custom_boxes() {
    add_meta_box( 'Shareit', 'Shareit Settings', 'shareit_options', 'post', 'side', 'low');
    add_meta_box( 'Shareit', 'Shareit Settings', 'shareit_options', 'page', 'side', 'low');
}
function shareit_options(){
	global $post;
	$shareit_hide = get_post_meta($post->ID, 'shareit_hide', true); ?>
	<p>
		<input name="shareit_hide" id="shareit_hide" type="checkbox" <?php checked(true, $shareit_hide, true) ?> />
		<label for="shareit_hide">Disable Shareit on this post?</label>
	</p>
	<?php
}

function shareit_save_options($post_id) {
	if (!isset($_POST['shareit_hide']) || empty($_POST['shareit_hide'])) {
		delete_post_meta($post_id, 'shareit_hide');
		return;
	}
	$post = get_post($post_id);
	if (!$post || $post->post_type == 'revision') return;
	update_post_meta($post_id, 'shareit_hide', true);
}


add_action('add_meta_boxes', 'shareit_custom_boxes');
register_activation_hook(__FILE__,'shareit_install');
register_deactivation_hook( __FILE__, 'shareit_reset' );
add_action('init', 'shareit_init');
add_action('wp_footer', 'shareit_print_script');
add_action('wp_head', 'shareit_header');
add_action( 'admin_init', 'shareit_admin_init' );
add_action('admin_menu', 'shareit_menu');
add_action('wp_ajax_my_action', 'my_action_callback');
add_filter('the_content', 'shareit_activate');

//for the_excerpt we need to remove our filter because it filters HTML automatically
add_filter('get_the_excerpt', 'no_share_links', 5);
function no_share_links( $content ) {
     remove_filter('the_content', 'shareit_activate');
     return $content;
} 
add_action('draft_post', 'shareit_save_options');
add_action('publish_post', 'shareit_save_options');
add_action('save_post', 'shareit_save_options');
?>