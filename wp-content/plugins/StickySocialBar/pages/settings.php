<?php
		if(isset($_POST['stickleft']) && $_POST['stickleft']==2)
		{
			echo "<span class='updated'>Settings updated</span>";	
			update_option('stick_to_left', 2 );
		}

		if(isset($_POST['stickleft']) && $_POST['stickleft']==1)
		{
			update_option('stick_to_left', 1 );	
			if(isset($_POST['leftval']) && $_POST['leftval']!="")
			{
				echo "<span class='updated'>Settings updated</span>";	
				update_option('shareit_offset',$_POST['leftval']);
			}
		}			
		if(isset($_POST['topval']) && $_POST['topval']!=null)
		{
			update_option('shareit_top',$_POST['topval']);	
		}
						
	
if (isset($_POST['submited']) && $_POST['submited'] == 'yes') {

	echo "<span class='updated'>Settings updated</span>";	
		if(isset($_POST['set_offset']) && $_POST['set_offset']!="")
			update_option('shareit_offset',$_POST['set_offset']);
		else echo "offset not updated<br>";	
		if(isset($_POST['set_top']) && $_POST['set_top']!="")
			update_option('shareit_top',$_POST['set_top']);	
		else echo "top not updated<br>";		
		if(isset($_POST['set_width']) && $_POST['set_width']!="")
			update_option('shareit_width',$_POST['set_width']);	
		else echo "width not updated";				
	
	$ctheme=$_POST['theme'].".css";
	update_option('shareit_theme',$ctheme);
	
	
	if(isset($_POST['eposts']) && $_POST['eposts']=="on"){
		update_option( 'shareit_posts', 1 ); 
	} else {
		update_option( 'shareit_posts', 0 ); 
	}
	if(isset($_POST['epages']) && $_POST['epages']=="on") {
		update_option( 'shareit_pages', 1 ); 
	} else	{
		update_option( 'shareit_pages', 0 ); 
	}
	if(isset($_POST['ehome']) && $_POST['ehome']=="on") {
		update_option( 'shareit_home', 1 ); 
	} else {
		update_option( 'shareit_home', 0 ); 
	}
	if(isset($_POST['stick_to_left']) && $_POST['stick_to_left']=="on") {
		update_option( 'stick_to_left', 2 ); 
	} else {
		update_option( 'stick_to_left', 1 ); 
	}	
	if(isset($_POST['add_link']) && $_POST['add_link']=="on"){
			update_option('shareit_linkback',1);
	}else{
			update_option('shareit_linkback',0);
	}
	if(isset($_POST['content_align']) && $_POST['content_align']=="on"){
			update_option('shareit_align',1);
	}else{
			update_option('shareit_align',0);
	}
}
$postcheck="";
$pagecheck="";
$homecheck="";
$stickcheck="";
$disabled="";
$addlinkcheck="";
$aligncheck="";

if(get_option('shareit_align')==1) 
{ 
	$aligncheck='checked="checked"'; 
}	
if(get_option('shareit_linkback')==1) 
{ 
	$addlinkcheck='checked="checked"'; 
}	
if(get_option('shareit_posts')==1)
{ 
   $postcheck='checked="checked"'; 
}
 if(get_option('shareit_pages')==1)
{ 
   $pagecheck='checked="checked"'; 
}
 if(get_option('shareit_home')==1) 
{ 
   $homecheck='checked="checked"'; 
}
if(get_option('stick_to_left')==2) 
{ 
   $stickcheck='checked="checked"'; 
   $disabled='disabled="disabled"';
}

	$path= plugin_dir_path( __FILE__ );
	$split=explode("pages",$path);
	$csspath=$split[0]."css";
	$files=scandir($csspath);
	
	
	$args = array( 'numberposts' => '1' );
	$recent_posts = wp_get_recent_posts( $args );

	foreach( $recent_posts as $recent ){
		$link=get_permalink($recent["ID"]);
	}
	
	$findme   = '?';
	$pos = strpos($link, $findme);

	if ($pos === false) {
		$link.="?edit=true";
	} else {
		$link.="&edit=true";
	}
 ?>

		<form name="myform"  method="post" action="?page=<?php echo $_GET['page'] ?>&tab=settings">
		<div class="box box1">
			<h4>Visibility</h4>
			<div class="inner">
				<span class="desc">Show sticky share bar on:</span>
			<span><input type="hidden" name="submited" value="yes" />
				<input type="checkbox" name="eposts" <?php echo $postcheck ?> />
				<label onClick="document.myform.eposts.checked=!(document.myform.eposts.checked)" for="eposts">Enable on posts</label></span>
				
				<span><input type="checkbox" name="epages" <?php echo $pagecheck; ?> />
				<label onClick="document.myform.epages.checked=!(document.myform.epages.checked)" for="epages">Enable on pages</label></span>
				
				<span><input type="checkbox" name="ehome" <?php echo $homecheck; ?> />
				<label onClick="document.myform.ehome.checked=!(document.myform.ehome.checked)" for="ehome">Enable on home page</label></span>
			</div>
			<h4 class="red">Template</h4>
			<div class="inner">
				<input type="text" name="set_width" size="1" value="<?php echo get_option('shareit_width'); ?>"  />
		<label for="set_width">Set the width of the share bar (pixels)</label>
		<label for="theme">Choose theme</label>
		<select name="theme">
			<?php			
			$i=0;
				foreach($files as $theme){
					$i++;
					if($i>2)
					{
						if($theme==get_option('shareit_theme')) $selected='selected="selected"'; else $selected=""; 
						$option=explode(".",$theme);
						echo '<option '.$selected.'>'.$option[0].'</option>';
					}
				}
			?>
		</select> 
			</div>
		</div>
		<div class="box box2">
			<h4>Position</h4>
			<div class="inner">
				<span class="desc">Set the position of the share bar:</span>
				<div class="position">
					<div class="left">
						<span class="desc">Smart way:</span>
							<a href="<?php echo $link ?>" ><input type="button" value="Set the position" name="dnd" /></a>
					</div>
					<div class="right">
						<span class="desc">Manual:</span>
						<span><input type="text" name="set_offset" size="1" value="<?php echo get_option('shareit_offset');?>" <?php echo $disabled;?> />
		<label for="set_offset">Set offset(pixels)</label></span>
		
		<span><input type="text" name="set_top" size="1" value="<?php echo get_option('shareit_top'); ?>" />
		<label for="set_top">Set top (pixels)</label></span>
					</div>
					<div class="bottom">
			<span><input type="checkbox" name="stick_to_left" <?php echo $stickcheck; ?> />
					<label onClick="document.myform.stick_to_left.checked=!(document.myform.stick_to_left.checked)" for="stick_to_left">Stick to left <span>(the widgets will have a fixed position on the left of the screen)</span></label></span>
					
					<span><input  type="checkbox" name="content_align"  <?php echo $aligncheck;?> />
					<label onClick="document.myform.content_align.checked=!(document.myform.content_align.checked)" for="content_align">Align the sidebar vertical to content position</label></span>
					</div>
				</div>
			</div>
		</div>
		<div class="box box3">
			<input type="submit" value="Update">
		</div>
		<div class="box box4">
			<h4>Support</h4>
			<div class="inner">
			<span class="desc">Support us to make even better and easier to use plugins.</span>
			<div>
			<input type="checkbox" name="add_link" <?php echo $addlinkcheck; ?> />
		<label onClick="document.myform.add_link.checked=!(document.myform.add_link.checked)" for="add_link">Add our link on the bottom of the widget(Thanks!)</label>
	</div>
	</div>
		</div>
	
		</form>
    