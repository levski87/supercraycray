<?php
/**
 * @package Warta
 */

global $friskamax_warta;

$hide_featured_image    = get_post_meta( get_the_ID(), 'friskamax_hide_featured_image_main', true );
$hide_post_meta_main    = get_post_meta( get_the_ID(), 'friskamax_hide_post_meta_main', true );

$rest_content           = '';
$featured_media         = warta_match_featured_media('^', $rest_content);
preg_match('/^\[carousel.+?ids="([0-9 ,]+?)".*?\]/is', get_the_content(), $matches_carousel); 

$warta_review_box       = new Warta_Review_Box();
$userAgent = new Mobile_Detect();
global $page, $pages, $numpages;
?>

<?php /* get ads for above the fold */ ?>
<?php /* render_partial('partials/ads-atf', ['page' => $page, 'numpages' => $numpages, 'userAgent' => $userAgent]); */ ?>
<?php render_partial('partials/ads-dfp-atf'); ?>

<article id="post-<?php the_ID(); ?>" style="border-bottom: none !important;" 
<?php   post_class(
                'article-large entry-content clearfix ' . 
                (!get_the_content() ? 'no-padding-bottom no-border-bottom' : '') 
        ); 
?>>    
<?php   // Featured image
        if( has_post_thumbnail() && !$hide_featured_image ) :  
                warta_featured_image( array( 'page' => 'singular' ) ); ?>      
                <div class="margin-bottom-15"></div>      
<?php   // No featured image
        else :            
                if( !$hide_post_meta_main ) {
                        //echo '<hr class="no-margin-top">';                
                       // echo warta_post_meta();                
                        //echo '<hr>';
                }                 
        endif;
        // Link pages
        // Go to www.addthis.com/dashboard to customize your tools
?>
        <div class="addthis_sharing_toolbox"></div>

<?php
        // Review box & content
        if( $warta_review_box->position() == 'top' ) { 
                $format = get_post_format();
                
                if($format == 'audio' || $format == 'video' && !!$featured_media) {
                        echo    "<div class='featured-media'>{$featured_media}</div>" .
                                '<div class="margin-bottom-15"></div>';

                        $warta_review_box->display();

                        $rest_content = apply_filters( 'the_content', $rest_content );
                        $rest_content = str_replace( ']]>', ']]&gt;', $rest_content );

                        echo $rest_content;
                } elseif($format == 'gallery' && !!$matches_carousel) {
                        $content = str_replace( $matches_carousel[0], '', get_the_content());
                        $content = apply_filters( 'the_content', $content );
                        $content = str_replace( ']]>', ']]&gt;', $content );

                        echo do_shortcode( $matches_carousel[0] );                        
                        $warta_review_box->display(); 
                        echo $content;
                } else {
                        $warta_review_box->display();
                        the_content();
                }
        } else if( $warta_review_box->position() == 'bottom' ) {
                the_content();
                $warta_review_box->display();
        } else {
               the_content(); 
        } 
        
 ?>
</article>

<?php // Link Pages // ?>
<?php $maxpages = $wp_query->max_num_pages; ?>

<?php if ($numpages > 1) : ?>
    <div class="page-link-container" style="text-align: center !important;">
        <?php
        // This shows the Previous link
        wp_link_pages( array( 'before' => '<div class="page-link-nextprev" style="display: inline-block !important;">',
                              'after' => '</div>', 'previouspagelink' => '<span class="previous">Back</span>', 'nextpagelink' => '',
                              'next_or_number' => 'next' ) );
        ?>


        <div class="page-count" style="display: inline-block !important;">
            <?php echo( $page.' of '.count($pages) ); ?>
        </div>
        <?php
        // This shows the Next link
        wp_link_pages( array( 'before' => '<div class="page-link-nextprev" style="display: inline-block !important;">', 'after' => '</div>', 'previouspagelink' => '',
                              'nextpagelink' => '<span class="next">Next</span>', 'next_or_number' => 'next' ) );
        ?>
    </div>
<?php endif; ?>

    <div class="sswpds-social-wrap col-lg-6 col-lg-offset-3" style="padding: 17px 0px;">
        <a href="<?php echo esc_url('http://www.facebook.com/sharer.php?u='
            .get_permalink()); ?>" target="_blank">
            <i class="fa fa-facebook-square"></i> Share on Facebook
        </a>
    </div>

<hr>

<?php /* get ads for below the fold */ ?>

<?php /* render_partial('partials/ads-btf', ['page' => $page, 'numpages' => $numpages, 'userAgent' => $userAgent]); */ ?>
<?php render_partial('partials/ads-dfp-btf'); ?>


<?php get_template_part('partials/content', 'ad'); ?>

    <div style="margin-top: 20px;">
        <?php comments_template('/comments-facebook.php'); ?>
    </div>

<?php if ($page > 3) : ?>
    <div class="col-md-4 col-xs-12 floating-share-bar">
        <div class="fb-share-button col-xs-7 text-center" style="border-radius: 5px; background-color: #2a5697; padding: 4px 6px; font-size: 23px">
            <a href id="fb-floating-share">
                <i class="fa fa-facebook-square"></i> Share
            </a>
        </div>
        <div class="fb-like-button col-xs-4 col-xs-offset-1 text-center">
            <div class="fb-like" data-href="https://www.facebook.com/supercraycray" data-layout="button_count"
                 data-action="like" data-show-faces="false" data-share="false"></div>
        </div>
    </div>
    <script>
        jQuery(document).ready(function() {
            jQuery('#fb-floating-share').click(function() {
                event.preventDefault();
                FB.ui({
                    method: 'share',
                    href: '<?php echo get_permalink(); ?>'
                },
                function(response) {});
            })
        })
    </script>
<?php endif ?>

<?php if ($page = 2 { ?>
<!-- /38082785/SuperCrayCray_OOP -->
<div id='div-gpt-ad-1442452357030-0'>
<script type='text/javascript'>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1442452357030-0'); });
</script>
</div>
<?php } ?>

<?php get_footer(); ?>
