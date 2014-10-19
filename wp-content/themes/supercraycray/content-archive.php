<?php
/**
 * The template for displaying Archive posts.
 *
 * @package Warta
 */

global $friskamax_warta, $friskamax_warta_var;
?>
<script type="text/javascript" src=<?php echo get_template_directory_uri() . '/js/jquery-2.1.1.min.js'?>></script>
<script type="text/javascript" src=<?php echo get_template_directory_uri() . "/js/jquery.fittext.js"?>></script>
</header><!--header-->

<div id="content">
        <div class="container">
                <div class="row">
                        <main id="main-content" class="col-lg-12" role="main">
                                <div class="row">
<?php                                   $friskamax_warta_var['sidebar_counter'] = 0;
                                        dynamic_sidebar('archive-before-content-section');  ?>                    
                                </div>
                                        <div class="row" id='inf-content-scroll'>
<?php   
                                        /**
                                         * Gets posts in rows of 3
                                         */
                                        if ( have_posts() ) : 
                                                while ( have_posts() ) : ?>
                                                                <?php for ($i=0; $i<3; $i++):?>
                                                                         <?php the_post();?>
                                                        
                                                                        <?php get_template_part( 'content', isset($friskamax_warta['archive_layout']) ? $friskamax_warta['archive_layout'] : 1 );?>
                                                                <?php endfor; ?>
                                                <?php endwhile; ?>
                                                </div>
<?php                                   else : 
                                                get_template_part( 'content', 'none' ); 
                                        endif; 
?>
                                <div class="row aside">
<?php                                   $friskamax_warta_var['sidebar_counter'] = 0;
                                        dynamic_sidebar('archive-after-content-section'); ?>
                                </div>

<?php                           warta_paging_nav(); ?>
                        </main>

<?php                   get_sidebar(); ?>
                </div>
        </div>
        <!-- Return to Top -->
<a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>


<!-- ICON NEEDS FONT AWESOME FOR CHEVRON UP ICON -->
<link href=<?php get_template_directory_uri() .  '/css/font-awesome.css'?> rel="stylesheet">
</div><!--#content-->
<script>
// ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 200) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
</script>


<?php 
get_footer();