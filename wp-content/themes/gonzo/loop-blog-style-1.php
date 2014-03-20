<?php 
if ( have_posts() ) : while ( have_posts() ) : the_post(); 
$omc_review_enable =  get_post_meta(get_the_ID(), 'omc_review_enable', true);
$omc_final_score =  get_post_meta(get_the_ID(), 'omc_final_score', true);
$omc_final_percentage = $omc_final_score * 20 ;
$format = get_post_format();
if ( false === $format )
$format = 'standard';
?>			
	
	<article class="omc-blog-one" id="post-<?php the_ID(); ?>">	

    <?php 
      global $h_sticky;
      global $displayed;
      $home_page = get_option ('shareit_home', 0);
      if (!$displayed and $h_sticky && $home_page == 1) {
        echo $h_sticky;
        $displayed = true;
      } 
    ?>	

		<?php $category = get_the_category(); ?>
		
		<div class="float-left perc-40">
		<?php 
		/*<h3 class="omc-blog-one-cat">
					<a class="cat_link" href="<?php echo home_url(); echo ('/?cat='.$category[0]->term_id); ?>"><?php echo $category[0]->cat_name; ?></a>
				</h3>
				
		*/
		?>
		
		<a href="<?php the_permalink();?>" >
			
			<?php if ($format == 'video' || $format == 'audio') { ?><span class="module-a-video-icon-big omc-blog2-icon"></span><?php } ?>

			<?php if (has_post_thumbnail()) { 
			
				//the_post_thumbnail('blog-one', array('class' => 'omc-image-blog-one')); 
				the_post_thumbnail('blog-one-rect', array('class' => 'omc-image-blog-one-rect'));
				
			} else {
			
				echo('<img src="'.get_template_directory_uri().'/images/no-image-blog-one.png" class="omc-image-blog-one-rect" alt="no image" />');
				
			} ?>
			
		</a>
		</div>
		<div class="float-left perc-60">
			<h2 class="omc-blog-one-heading">
			
				<a class="blog-entry-title" href="<?php the_permalink();?>"><?php the_title();?></a>
			
				<?php if ($omc_review_enable == 1) { ?>
				
					<span class="omc-module-a-stars-under leading-article"><span class="omc-module-a-stars-over leading-article" style="width:<?php echo $omc_final_percentage; ?>%"></span></span>
						
				<?php } ?>	
			
			</h2>
			
			<p class="omc-date-time-one"><b><?php _e('Published on', 'gonzo'); ?></b> <?php the_time('F jS, Y') ?> |  <em><?php _e('by', 'gonzo'); ?> <?php the_author() ?></em></p>
				
			<p class="omc-blog-one-exceprt"><?php wpe_excerpt('blog_3', 'wpe_excerptmore'); ?>... <a href="<?php the_permalink(); ?>"><b><?php _e('Read More', 'gonzo');?></b></a> <span class="omc-rarr"  >&rarr;</span></p>
			
		</div>
		<br class="clear" />
		
	</article>
	
<?php endwhile; endif; ?>

<?php kriesi_pagination();  wp_reset_query(); ?>