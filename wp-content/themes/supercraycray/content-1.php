<?php
/**
 * @package Warta
 */

global $friskamax_warta;
$featured_media         = warta_match_featured_media();
$matches_blockquote     = warta_match_quote();
$match_image            = warta_match_image();
$match_gallery          = warta_match_gallery();

$format                 = get_post_format();
$display_more           = NULL;
$no_image               = !has_post_thumbnail() ? 'no-image' : '';

// Get no-image class
switch ($format) {
        case 'image':
                $no_image = !has_post_thumbnail() && !$match_image ? 'no-image' : '';
                break;
        case 'gallery':
                $no_image = !has_post_thumbnail() && !$match_gallery ? 'no-image' : '';
                break;
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( "col-sm-4 article-large $no_image" ); ?>>
<?php   // Display featured image and title
        if( has_post_thumbnail() ) :?> 
                <div class="frame thick clearfix">

                        <a href="<?php the_permalink(); ?>" 
                           title="<?php the_title() ?>">
                                <div class='home-image-container-small'>
<?php                                   echo get_the_post_thumbnail( NULL, array(350,190) ); ?>
                                        <div class='home-image-overlay-small'>text</div>
                                </div>
                        </a><!--thumbnail image-->
                </div><!--.frame-->                            
<?php   else:
                switch ($format) :
                        case 'audio':
                        case 'video':
                        case 'image':
                        case 'gallery': ?>
<?php                           echo warta_post_meta();
                                if( !!$featured_media ) : ?>
                                        <div class="featured-media"><?php echo $featured_media ?></div>
<?php                           endif; 
                                break;
                        case 'aside':                 
                                echo '<hr class="no-margin">';
                                echo warta_post_meta();            
                                break;
                        default: ?>
                                <a href="<?php the_permalink() ?>" class="title"><h4><?php the_title() ?></h4></a>
<?php                           echo warta_post_meta();
                                break;
                endswitch; 
        endif;?>                             
</article>