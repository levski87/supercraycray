<?php
/*
 * SocialBox v.1.3.0
 * Copyright by Jonas Doebertin
 * Available only at CodeCanyon: http://codecanyon.net/item/socialbox-social-wordpress-widget/627127
 */
?>

<!-- SocialBox Widget -->
<?php $i = 0;  foreach ($networks as $network): $i++; ?>

    <a href="<?php echo $network['link']; ?>" title="<?php echo $network['buttonHint']; ?>"
       class="omc-social-media-icon large<?php if ($i == 3 || $i == 6) {
           echo(' no-right');
       } ?>" <?php if ($newWindow) echo 'target="_blank"'; ?>>
        <span class="omc-<?php echo $network['name']; ?> omc-icon"><span></span></span>
        <span class="omc-following-info"><?php
           	if ($network['name'] == 'Feedburner') { 
          		echo('RSS');
          	} else {           
           		 if ($network['count'] !== false) {
			   		 echo number_format($network['count']);
			   		 }
            } ?><br/><strong><?php echo $network['metric']; ?></strong></span>
    </a>

<?php endforeach; ?>

<br class="clear"/>
<!-- End SocialBox Widget -->