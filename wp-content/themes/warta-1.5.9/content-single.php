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
<?php render_partial('partials/ads-atf', ['page' => $page, 'numpages' => $numpages, 'userAgent' => $userAgent]); ?>

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

<?php render_partial('partials/ads-btf', ['page' => $page, 'numpages' => $numpages, 'userAgent' => $userAgent]); ?>


<?php get_template_part('partials/content', 'ad'); ?>

    <div style="margin-top: 20px;">
        <?php comments_template('/comments-facebook.php'); ?>
    </div>

<div id="ac_delayedModal-widgetcontent"><div id="contentad49142"></div></div>
<script type="text/javascript">
    function delayedpopModal_open(){if(document.getElementById("ac_49142")){var e=document.getElementById("ac_delayedModal-widgetcontent").innerHTML;delayedpopModal.open({content:e})}else setTimeout("delayedpopModal_open();",120)}var delayedpopModal=function(){var e,t,n={},d=document.createElement("div"),o=document.createElement("div"),i=document.createElement("div"),l=document.createElement("div"),c=document.createElement("div"),a={width:"auto",height:"auto",lock:!1,hideClose:!1,closeAfter:0,openCallback:function(){},closeCallback:!1,hideOverlay:!1};return n.open=function(s){e=function(){n.center()},l.innerHTML=s.content&&!s.ajaxContent?s.content:"",o.style.width=a.width,o.style.height=a.height,n.center(),(a.lock||a.hideClose)&&(c.style.visibility="hidden"),a.hideOverlay||(d.style.visibility="visible"),o.style.visibility="visible",document.onkeypress=function(e){27===e.keyCode&&a.lock!==!0&&n.close()},c&&(c.onclick=function(){return a.hideClose?!1:void n.close()}),d&&(d.onclick=function(){return a.lock?!1:void n.close()}),window.addEventListener?(window.addEventListener("resize",e,!1),window.addEventListener("gestureend",function(){window.setTimeout("delayedpopModal.center()",250)},!1),window.addEventListener("orientationchange",function(){window.setTimeout("delayedpopModal.center()",250)},!1)):window.attachEvent&&window.attachEvent("onresize",e),i.onmousedown=function(){return!1},a.closeAfter>0&&(t=window.setTimeout(function(){n.close()},1e3*a.closeAfter)),a.openCallback&&a.openCallback()},n.close=function(){l.innerHTML="",d.setAttribute("style",""),d.style.cssText="",d.style.visibility="hidden",o.setAttribute("style",""),o.style.cssText="",o.style.visibility="hidden",i.style.cursor="default",c.setAttribute("style",""),c.style.cssText="",t&&window.clearTimeout(t),a.closeCallback&&a.closeCallback(),window.removeEventListener?window.removeEventListener("resize",e,!1):window.detachEvent&&window.detachEvent("onresize",e)},n.widget=function(){var e={id:"457c9552-4b33-417c-bb4d-1460abe7c989",d:"eW91bmdjb25zLmNvbQ==",wid:"49142",cb:(new Date).getTime()},t="";for(var n in e)t+=n+"="+e[n]+"&";t=t.substring(0,t.length-1);var d=document.createElement("script");d.type="text/javascript",d.src="http://api.content.ad/Scripts/widget.aspx?"+t,d.async=!0,document.getElementById("contentad49142").appendChild(d)},n.center=function(){var e=document.createElement("div");e.style.visibility="hidden",e.style.width="100px",e.style.msOverflowStyle="scrollbar",document.body.appendChild(e);var t=e.offsetWidth;e.style.overflow="scroll";var n=document.createElement("div");n.style.width="100%",e.appendChild(n);var i=n.offsetWidth;e.parentNode.removeChild(e);var l=t-i,c=Math.max(window.innerHeight,document.documentElement.scrollHeight),a=Math.max(o.clientWidth,o.offsetWidth),s=Math.max(o.clientHeight,o.offsetHeight),r=0,u=0,m=0,y=0;"number"==typeof window.innerWidth?(r=window.innerWidth-l,u=window.innerHeight):document.documentElement&&document.documentElement.clientWidth&&(r=document.documentElement.clientWidth-l,u=document.documentElement.clientHeight),"number"==typeof window.pageYOffset?(y=window.pageYOffset,m=window.pageXOffset):document.body&&document.body.scrollLeft?(y=document.body.scrollTop,m=document.body.scrollLeft):document.documentElement&&document.documentElement.scrollLeft&&(y=document.documentElement.scrollTop,m=document.documentElement.scrollLeft),o.style.top=Math.max(0,u/2-s/2)+"px",o.style.left=Math.max(0,r/2-a/2)+"px",d.style.height=u+"px",d.style.width="100%",navigator.userAgent.match(/iPad/i)&&(o.style.position="absolute",o.style.top=y+u/2-s/2+"px",o.style.left=m+r/2-a/2+"px",d.style.height=c+"px")},d.setAttribute("id","ac_delayedModal-overlay"),o.setAttribute("id","ac_delayedModal-container"),i.setAttribute("id","ac_delayedModal-header"),l.setAttribute("id","ac_delayedModal-content"),c.setAttribute("id","ac_delayedModal-close"),i.appendChild(c),o.appendChild(i),o.appendChild(l),d.style.visibility="hidden",o.style.visibility="hidden",document.body.appendChild(d),document.body.appendChild(o),n}();setTimeout("delayedpopModal.widget();",179e3),setTimeout("delayedpopModal_open();",18e4);
</script>

<?php if ($page > 3) : ?>
    <?php
    /*
    ?>
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
    */
    ?>
<?php endif ?>