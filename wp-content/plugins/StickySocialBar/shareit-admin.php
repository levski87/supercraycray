<?php
/**
 * @package SocialStickyBar
 */
?>

<?php
$selectedTab = 'home';


if(isset($_GET['tab'])) {
	$selectedTab = $_GET['tab'];
}

$tabs = array(
     'home' => __('Buttons', 'share-it'),
     'settings' => __('Settings', 'share-it'),
    
);
?>
     <h1 class="sticky_bar">Sticky Social Bar</h1>
               <input type="hidden" name="active_tab" id="active_tab" value="<?php echo $selectedTab; ?>" />
               <ul id="share_it_tabs">
               <?php foreach ( $tabs as $tab => $name ) : ?>
                    <li id="share_it_<?php echo $tab; ?>" class="share-it">
                         <a href="#top" onclick="share_it_show_tab('<?php echo $tab; ?>')"><?php echo $name; ?></a>
                    </li>
               <?php endforeach; ?>
               </ul>

               <div id="share_wrapper">
               <?php foreach ( $tabs as $tab => $name ) : ?>
                         <div id="share_it_box_<?php echo $tab; ?>" class="shareboxes" style="display:none">
                    <?php require_once('pages/' . $tab . '.php');  ?>
						</div>
               <?php endforeach; ?>
				</div>
 </div> 			





