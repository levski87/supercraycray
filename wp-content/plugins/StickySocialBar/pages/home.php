<?php
global $wpdb;	
if(isset($_GET['act']) && $_GET['act']=="edit")
{
	$id=$_GET['id'];
	if($id)
	{
		$mylink = $wpdb->get_row("SELECT * FROM ".$wpdb->prefix."shareit WHERE id=$id");
		?>	
		<form  class="edit" action="?page=<?php echo $_GET['page']; ?>" method="post">
		<label for="update_name">Widget name</label>
		<br/>
		<input type="text" name="update_name" value="<?php echo $mylink->name;  ?>" />
		
		
		<label for="update_code">Code:</label><br/>
		<br/>
		<textarea name="update_code"  rows=5><?php echo $mylink->big; ?></textarea><br/><br/>
		<input type="hidden" name="update_id" value="<?php echo $id; ?>" />
		<input type="submit" value="Update" />
		<a href="?page=<?php echo $_GET['page']; ?>"><input type="button" value="Cancel" /></a>
		</form>
<?php	
	}
}
else{

		if(isset($_GET['act']) && $_GET['act']=="addnew")
		{
		?>
			<form action="?page=<?php echo $_GET['page']; ?>" method="post">
			<input type="text" name="add_name"  />
			<label for="add_name">Name</label><br/>
			<label for="add_code" >Code:</label><br/>
			<textarea name="add_code"  rows=5></textarea><br/><br/>
			<input type="submit" value="Add" />
			<a href="?page=<?php echo $_GET['page']; ?>"><input type="button" value="Cancel" /></a>
			
			<?php
		}
		else{

				if(isset($_POST['update_name']) && isset($_POST['update_code']) ){
					$update_name=$_POST['update_name'];
					$update_code=$_POST['update_code'];
					$update_id=$_POST['update_id'];
					echo "<span class='updated'>Settings updated</span>";	
					$update = "UPDATE ".$wpdb->prefix."shareit SET name='$update_name', big='$update_code' WHERE id=$update_id";
					mysql_query($update) or die(mysql_error());
				}
				if(isset($_POST['add_name']) && isset($_POST['add_code']) && $_POST['add_name']!="" && $_POST['add_code']!=""){
					$add_name=$_POST['add_name'];
					$add_code=$_POST['add_code'];
					$table_name = $wpdb->prefix . "shareit"; 
					$pos_query = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."shareit ORDER BY position DESC LIMIT 1");
					$max=0;
					foreach($pos_query as $result1){
						$max=$result1->position+1;
					}
					$rows_affected = $wpdb->insert( $table_name, array( 'enabled' => '1', 'name' => $add_name, 'position' => $max, 'big' => stripslashes($add_code)) );
				}
					
				if(isset($_POST['enabled']))
				{
				$enabled = $_POST['enabled'];
				if($enabled)
				{
				$keys=array_keys($enabled, "on");

					foreach ($enabled as $change) {

						foreach($keys as $nr)
						{
							if($change=="on")
							{
								$query = "UPDATE ".$wpdb->prefix."shareit SET enabled =0, position=0 WHERE id =" . $nr;
								mysql_query($query) or die('Error, insert query failed');
							}
						}
					}
				}
				}
				
				if(isset($_POST['disabled']))
				{
				$disabled = $_POST['disabled'];
				if($disabled)
				{
				$keys1=array_keys($disabled, "on");

					foreach ($disabled as $change1) {

						foreach($keys1 as $nr1)
						{
							if($change1=="on")
							{
								if(isset($_POST['senable']) && $_POST['senable']=="Enable")
								{
									$pos_query = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."shareit ORDER BY position DESC LIMIT 1");
									$max=0;
									foreach($pos_query as $result1){
										$max=$result1->position+1;
										}
									$query1 = "UPDATE ".$wpdb->prefix."shareit SET enabled =1, position=$max WHERE id =" . $nr1;
								}
								else if	(isset($_POST['sdelete']) && $_POST['sdelete']=="Delete")
									$query1 = "DELETE FROM ".$wpdb->prefix."shareit WHERE id =" . $nr1;
								mysql_query($query1) or die(mysql_error());
							}
						}
					}
				}
				}


				?>

				
							
						<div id="buttons_active">
						
							<form action="?page=<?php echo $_GET['page']; ?>" method="post">
							<span class="desc2">Drag and drop to order the items (auto save)</span>		
							<ul>
								<?php	
								$query  = "SELECT * FROM ".$wpdb->prefix."shareit WHERE enabled=1 ORDER BY position ASC";
								$result = mysql_query($query);
										
								while($row = mysql_fetch_array($result, MYSQL_ASSOC))
								{
								?>
									<li id="recordsArray_<?php echo $row['id']; ?>">
										<input type="checkbox" name="enabled[<?php echo $row['id']; ?>]">
										<div class="item_wrapper">
											<div class="item_icon">
												<?php echo $row['big']; ?>
											</div>
											<div class="item_name">
												<?php echo $row['name']; ?>
											</div>
											<div class="item_edit">
												<div class="item_edit_btn">
													<a href="?page=<?php echo $_GET['page']; ?>&act=edit&id=<?php echo $row['id']; ?>">
											<input class="edit" type="button" value="Edit" />
										</a>
												</div>
												<div class="item_edit_sort">
												</div>
											</div>
									</div>
									</li>
								<?php } ?>	
								
							</ul>
							<div class="btn_bottom"><input type="submit" class="button" value="Disable" />	
								<a href="?page=<?php echo $_GET['page']; ?>&act=addnew"><input class="button" type="button" value="Add new" /></a></div>
							</form>
								</div>
								<div id="buttons_inactive">
								<span class="inactive">Inactive buttons</span>
								<form action="?page=<?php echo $_GET['page']; ?>" method="post">
								<ul>	
								<?php							
								$query  = "SELECT * FROM ".$wpdb->prefix."shareit WHERE enabled=0 ORDER BY position ASC";
								$result = mysql_query($query);										
								while($row = mysql_fetch_array($result, MYSQL_ASSOC))
								{
								?>
<li>
										<input type="checkbox" name="disabled[<?php echo $row['id']; ?>]">
										<div class="item_wrapper">
											<div class="item_icon">
												<?php echo $row['big']; ?>
											</div>
											<div class="item_name">
												<?php echo $row['name']; ?>
											</div>
											
									</div>
									</li>

								<?php } ?>
							</ul>
								<div class="btn_bottom"><input name="senable" type="submit" class="button" value="Enable" />	
								<input name="sdelete" type="submit" class="button" value="Delete" /></div>
								</form>
								</div>

								
					
						
						 
						

	
<?php 
	}
} ?>	
 
