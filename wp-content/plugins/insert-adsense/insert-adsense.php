<?php

/*
Plugin Name: Insert Adsense
Version: 2.0
Plugin URI: http://www.yuyuh.com/soft/insert-adsense/
Author: yuyuh
Author URI: http://www.yuyuh.com
Plugin Description: Insert advertisements where you want.
*/

/*	Copyright 2011  yuyuh  (email : mail@yuyuh.com)

    This program is free software; you can redistribute it
    under the terms of the GNU General Public License version 2,
    as published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
*/

$insert_adsense = "2.0";

function showads1()
{
    $ads_enc_value_1 = get_option('adsensecode1');
    $ads_dec_value_1 = html_entity_decode($ads_enc_value_1, ENT_COMPAT);

    if(!empty($ads_dec_value_1))
    {
        $output .= " $ads_dec_value_1";
    }
    return $output;
}
add_shortcode('adsenseyu1', 'showads1');

function showads2()
{
    $ads_enc_value_2 = get_option('adsensecode2');
    $ads_dec_value_2 = html_entity_decode($ads_enc_value_2, ENT_COMPAT);

    if(!empty($ads_dec_value_2))
    {
        $output .= " $ads_dec_value_2";
    }
    return $output;
}
add_shortcode('adsenseyu2', 'showads2');

function showads3()
{
    $ads_enc_value_3 = get_option('adsensecode3');
    $ads_dec_value_3 = html_entity_decode($ads_enc_value_3, ENT_COMPAT);
	$supportyu3 = '<a href="http://www.yuyuh.com/soft/insert-adsense/"><small>ads in wordpress</small></a>';
	if(!empty($ads_dec_value_3))
    {
        $output .= " $ads_dec_value_3.$supportyu3";
		
    }
    return $output ;
}
add_shortcode('adsenseyu3', 'showads3');

function showads4()
{
    $ads_enc_value_4 = get_option('adsensecode4');
    $ads_dec_value_4 = html_entity_decode($ads_enc_value_4, ENT_COMPAT);

    if(!empty($ads_dec_value_4))
    {
        $output .= " $ads_dec_value_4";
    }
    return $output;
}
add_shortcode('adsenseyu4', 'showads4');

function showads5()
{
    $ads_enc_value_5 = get_option('adsensecode5');
    $ads_dec_value_5 = html_entity_decode($ads_enc_value_5, ENT_COMPAT);

    if(!empty($ads_dec_value_5))
    {
        $output .= " $ads_dec_value_5";
    }
    return $output;
}
add_shortcode('adsenseyu5', 'showads5');

function showads6()
{
    $ads_enc_value_6 = get_option('adsensecode6');
    $ads_dec_value_6 = html_entity_decode($ads_enc_value_6, ENT_COMPAT);

    if(!empty($ads_dec_value_6))
    {
        $output .= " $ads_dec_value_6";
    }
    return $output;
}
add_shortcode('adsenseyu6', 'showads6');

function showads7()
{
    $ads_enc_value_7 = get_option('adsensecode7');
    $ads_dec_value_7 = html_entity_decode($ads_enc_value_7, ENT_COMPAT);
	$supportyu = '<a href="http://jobs.yuyuh.com/"><small>jobs</small></a>';

    if(!empty($ads_dec_value_7))
    {
        $output .= " $ads_dec_value_7.$supportyu";
    }
    return $output;
}
add_shortcode('adsenseyu7', 'showads7');

// Displays Simple Ad ads Options menu
function ads_add_option_page() {
    if (function_exists('add_options_page')) {
        add_options_page('Insert AdSense', 'Insert AdSense', 8, __FILE__, 'admin_page');
    }
}

function admin_page() {

    global $var_insert_adsense;

    if (isset($_POST['ads_update']))
    {
        echo '<div id="message" class="updated fade"><p><strong>';
		
		$tmpCode1 = htmlentities(stripslashes($_POST['adsensecode1']), ENT_COMPAT);
        update_option('adsensecode1', $tmpCode1);
		
		$tmpCode2 = htmlentities(stripslashes($_POST['adsensecode2']) , ENT_COMPAT);
        update_option('adsensecode2', $tmpCode2);
		
		$tmpCode3 = htmlentities(stripslashes($_POST['adsensecode3']) , ENT_COMPAT);
        update_option('adsensecode3', $tmpCode3);
		
		$tmpCode4 = htmlentities(stripslashes($_POST['adsensecode4']) , ENT_COMPAT);
        update_option('adsensecode4', $tmpCode4);
		
		$tmpCode5 = htmlentities(stripslashes($_POST['adsensecode5']) , ENT_COMPAT);
        update_option('adsensecode5', $tmpCode5);

		$tmpCode6 = htmlentities(stripslashes($_POST['adsensecode6']) , ENT_COMPAT);
        update_option('adsensecode6', $tmpCode6);
		
		$tmpCode7 = htmlentities(stripslashes($_POST['adsensecode7']) , ENT_COMPAT);
        update_option('adsensecode7', $tmpCode7);
		
        echo 'Adsense/Advertisement Codes Updated!';
        echo '</strong></p></div>';
    }

    ?>

    <div class=wrap>
    <h1> Insert Ads </h1>
    <p>You can paste your Google AdSense codes or other advertiser codes in the boxes below. The symbol of tool bar button for that code is shown besides that. On clicking that button a short code will be added at the place of your cursor in the post.<br/> Adding an advertisement at right place in post can do miracles resulting in much more clicks.</p>
    
    <form method="post" action="<?php echo $_SERVER["REQUEST_URI"]; ?>">
    <input type="hidden" name="ads_update" id="ads_update" value="true" />

    <fieldset class="options">
    <legend><strong>Paste your Advertisement/Adsense unit codes below</strong></legend>
	<br/>
    <table width="100%" border="0" cellspacing="0" cellpadding="6">

    <tr valign="top"><td width="35%" align="left">
    <strong>Ads-Unit Code 1:</strong><br/>
    Tool Bar Button to add this code in post - <br/><br/>
    <center><img src="<?php echo get_bloginfo('wpurl').'/wp-content/plugins/insert-adsense/adimage1.png'?>" width="30" height="30" /></center>
    </td>
    <td colspan="2" align="left">
      <textarea name="adsensecode1" rows="6" cols="70"><?php echo get_option('adsensecode1'); ?></textarea>
    </td></tr>
    
  	<tr valign="top"><td>
    <strong>Ads-Unit Code 2:</strong><br/>
    Tool Bar Button to add this code in post - <br/><br/>
    <center><img src="<?php echo get_bloginfo('wpurl').'/wp-content/plugins/insert-adsense/adimage2.png'?>" width="30" height="30" /></center>
    </td>
    <td colspan="2" align="left">
      <textarea name="adsensecode2" rows="6" cols="70"><?php echo get_option('adsensecode2'); ?></textarea>
    </td></tr>

    <tr valign="top"><td>
    <strong>Ads-Unit 3:</strong><br/>
    Tool Bar Button to add this code in post - <br/><br/>
    <center><img src="<?php echo get_bloginfo('wpurl').'/wp-content/plugins/insert-adsense/adimage3.png'?>" width="30" height="30" /></center>
    </td>
    <td colspan="2" align="left">
      <textarea name="adsensecode3" rows="6" cols="70"><?php echo get_option('adsensecode3'); ?></textarea>
    </td></tr>

    <tr valign="top"><td>
    <strong>Ads-Unit Code 4:</strong><br/>
    Tool Bar Button to add this code in post - <br/><br/>
    <center><img src="<?php echo get_bloginfo('wpurl').'/wp-content/plugins/insert-adsense/adimage4.png'?>" width="30" height="30" /></center>
    </td>
    <td colspan="2" align="left">
      <textarea name="adsensecode4" rows="6" cols="70"><?php echo get_option('adsensecode4'); ?></textarea>
    </td></tr>
    
    <tr valign="top"><td>
    <strong>Ads-Unit Code 5:</strong><br/>
    Tool Bar Button to add this code in post - <br/><br/>
    <center><img src="<?php echo get_bloginfo('wpurl').'/wp-content/plugins/insert-adsense/adimage5.png'?>" width="30" height="30" /></center>
    </td>
    <td colspan="2" align="left">
      <textarea name="adsensecode5" rows="6" cols="70"><?php echo get_option('adsensecode5'); ?></textarea>
    </td></tr>
    <tr><td colspan="3" align="left"> <br/><strong>Buttons below will add your code on left or right side of post content.</strong><br/>      
       Advertisement codes below will be added in a table i.e. on clicking Ads Code 6 button a table will be added in your post with Adv code in left, and you can write your post content in right cell of table. Similarly Ads Code
    7 will add advertisement on right side of your content.<br/></td></tr>
    <tr valign="top"><td>
    <strong>Ads-Unit Code 6:</strong><br/>
    Tool Bar Button to add this code in post - <br/><br/>
    <center><img src="<?php echo get_bloginfo('wpurl').'/wp-content/plugins/insert-adsense/adimage6.png'?>" width="30" height="30" /></center>
    </td>
    <td align="left">
      <textarea name="adsensecode6" rows="6" cols="70"><?php echo get_option('adsensecode6'); ?></textarea>
    </td>
    <td align="left">This Ad-Unit will be added on left of your post content</td>
    </tr>
    
    <tr valign="top"><td>
    <strong>Ads-Unit Code 7:</strong><br/>
    Tool Bar Button to add this code in post - <br/><br/>
    <center><img src="<?php echo get_bloginfo('wpurl').'/wp-content/plugins/insert-adsense/adimage7.png'?>" width="30" height="30" /></center>
    </td>
    <td align="left">
      <textarea name="adsensecode7" rows="6" cols="70"><?php echo get_option('adsensecode7'); ?></textarea>
    </td>
    <td align="left">This Ad-Unit will be added on right of your post content</td>
    </tr>
    </table>
    </fieldset>

    <div class="submit">
        <input type="submit" name="ads_update" value="<?php _e('Update options'); ?> &raquo;" />
    </div>

    </form>
    <h4>If you think this plugin is helping you earn more, please consider to support me. There are various ways in which you can do this:</h4>
    <table width="90%">
  <tr>
    <td>Donate Via Paypal</td>
    <td><form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form></td>
  </tr>
</table>
    <p>A link from your blog to www.yuyuh.com is highly appreciated. <br/><small>(Please note that adding the Ad-unit Codes 3 & 7 also add a powered by link to yuyuh.com in bottom. If you don't want to place that link, please don't use Ad-unit Codes 3 and 7. Other codes will show only your ads and nothing else.)</small></p>
    <p>Plugin by <a href="http://http://www.yuyuh.com/soft/insert-adsense/">yuyuh</a>. </p>
    <p><small>Visit yuyuh.com for <a href="http://www.yuyuh.com/">work and entertainment</a>. </small> </p>
</div><?php
}

//add_filter('the_content', 'wp_ads_process');

// Insert the ads_add_option_page in the 'admin_menu'
add_action('admin_menu', 'ads_add_option_page');


// add button in tiny mce
add_action('init', 'add_button');
function add_button() {  
   if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
   {  
     add_filter('mce_external_plugins', 'add_plugin');  
     add_filter('mce_buttons', 'register_button');  
   }  
}  
function register_button($buttons) {  
   array_push($buttons, "|,adv1,adv2,adv3,adv4,adv5,adv6,adv7,|");  
   return $buttons;  
}  

function add_plugin($plugin_array) {  
   $plugin_array['adsenseyu'] = get_bloginfo('wpurl').'/wp-content/plugins/insert-adsense/showads.js';
   return $plugin_array;  
} 

?>
