<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Warta
 */
global $friskamax_warta, $friskamax_warta_var;

$friskamax_warta_var['page']      = 'singular';
$friskamax_warta_var['html_id']   = 'blog-detail';

get_header();

?>
<!-- Please call pinit.js only once per page -->
<script type="text/javascript" async  data-pin-color="red" data-pin-height="28" data-pin-hover="true" src="//assets.pinterest.com/js/pinit.js"></script>
<!-- Luminate Ad -->


</header>



<?php
warta_page_title(
    get_post_format() == 'aside' ? '': get_the_title(),
    get_the_category_list( _x( ' / ', 'Used between category list items.', 'warta' ) )
);
?>

<div id="content" style="padding-bottom: 20px;">
    <div class="container">
        <div class="row">
            <main id="main-content" class="col-md-8" role="main">
                <div class="row"><?php dynamic_sidebar('singular-before-content-section'); ?></div>
                <?php while (have_posts()) :
                    the_post();

                    // Content
                    if ($postFormat = get_post_format()) :

                        switch ($postFormat) {
                            case 'video':
                                get_template_part('content', 'single-video');
                                break;
                            case 'noad':
                                get_template_part('content', 'single-noad');
                                break;
                        }

                    else :

                        get_template_part( 'content', 'single' );
                    endif; ?>

                    <?php if( isset( $friskamax_warta['singular_author_info'] ) && !!$friskamax_warta['singular_author_info'] ) : ?>
                    <section class="widget author">

                        <!--widget title-->
                        <?php if(isset($friskamax_warta['singular_author_info_title']) && !!$friskamax_warta['singular_author_info_title']) : ?>
                            <header class="clearfix">
                                <h4><?php echo strip_tags( $friskamax_warta['singular_author_info_title'] ) ?></h4>
                            </header>
                        <?php endif ?>

                        <!--avatar-->
                        <a href ="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))) ?>"
                           class="avatar" title="<?php echo esc_attr( sprintf( __('View all posts by %s', 'warta'), get_the_author() ) ) ?>">
                            <?php echo get_avatar( get_the_author_meta( 'ID' ), 75 ) ?>
                            <div class="image-light"></div>
                        </a>

                        <!--Author's Name-->
                        <span class="name"><?php echo get_the_author_link() ?></span>
                        <br>

                        <!--Author's Bio-->
                        <p><?php echo get_the_author_meta('description') ?></p>

                        <!--Author's social media links-->
                        <ul class="social clearfix">
                            <?php foreach ($friskamax_warta_var['social_media'] as $key => $value) :
                                $url = get_the_author_meta( "friskamax_{$key}" );
                                if( !empty($url) ) : ?>
                                    <li>
                                        <a href="<?php echo esc_url( get_the_author_meta( "friskamax_{$key}" ) ) ?>" title="<?php echo $value ?>">
                                            <i class="sc-sm sc-<?php echo $key ?>"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </section>
                <?php endif; ?>

                    <div class="row"><?php dynamic_sidebar('singular-after-content-section'); ?></div>
                    <?php if( isset( $friskamax_warta['singular_related'] ) && !!$friskamax_warta['singular_related'] ) : ?>
                    <?php warta_related_posts(); ?>

                <?php endif; ?>
                <?php endwhile; ?>

            </main>
            <?php /* @TODO removed sidebar from this id temp fix */ if (get_the_ID() != 7846) : ?>
                <?php get_sidebar(); ?>
            <?php endif; ?>
        </div>
    </div>
</div><!--#content-->

<div id="ac_delayedModal-widgetcontent"><div id="contentad49142"></div></div>
<script type="text/javascript">
    function delayedpopModal_open(){if(document.getElementById("ac_49142")){var e=document.getElementById("ac_delayedModal-widgetcontent").innerHTML;delayedpopModal.open({content:e})}else setTimeout("delayedpopModal_open();",120)}var delayedpopModal=function(){var e,t,n={},d=document.createElement("div"),o=document.createElement("div"),i=document.createElement("div"),l=document.createElement("div"),c=document.createElement("div"),a={width:"auto",height:"auto",lock:!1,hideClose:!1,closeAfter:0,openCallback:function(){},closeCallback:!1,hideOverlay:!1};return n.open=function(s){e=function(){n.center()},l.innerHTML=s.content&&!s.ajaxContent?s.content:"",o.style.width=a.width,o.style.height=a.height,n.center(),(a.lock||a.hideClose)&&(c.style.visibility="hidden"),a.hideOverlay||(d.style.visibility="visible"),o.style.visibility="visible",document.onkeypress=function(e){27===e.keyCode&&a.lock!==!0&&n.close()},c&&(c.onclick=function(){return a.hideClose?!1:void n.close()}),d&&(d.onclick=function(){return a.lock?!1:void n.close()}),window.addEventListener?(window.addEventListener("resize",e,!1),window.addEventListener("gestureend",function(){window.setTimeout("delayedpopModal.center()",250)},!1),window.addEventListener("orientationchange",function(){window.setTimeout("delayedpopModal.center()",250)},!1)):window.attachEvent&&window.attachEvent("onresize",e),i.onmousedown=function(){return!1},a.closeAfter>0&&(t=window.setTimeout(function(){n.close()},1e3*a.closeAfter)),a.openCallback&&a.openCallback()},n.close=function(){l.innerHTML="",d.setAttribute("style",""),d.style.cssText="",d.style.visibility="hidden",o.setAttribute("style",""),o.style.cssText="",o.style.visibility="hidden",i.style.cursor="default",c.setAttribute("style",""),c.style.cssText="",t&&window.clearTimeout(t),a.closeCallback&&a.closeCallback(),window.removeEventListener?window.removeEventListener("resize",e,!1):window.detachEvent&&window.detachEvent("onresize",e)},n.widget=function(){var e={id:"457c9552-4b33-417c-bb4d-1460abe7c989",d:"eW91bmdjb25zLmNvbQ==",wid:"49142",cb:(new Date).getTime()},t="";for(var n in e)t+=n+"="+e[n]+"&";t=t.substring(0,t.length-1);var d=document.createElement("script");d.type="text/javascript",d.src="http://api.content.ad/Scripts/widget.aspx?"+t,d.async=!0,document.getElementById("contentad49142").appendChild(d)},n.center=function(){var e=document.createElement("div");e.style.visibility="hidden",e.style.width="100px",e.style.msOverflowStyle="scrollbar",document.body.appendChild(e);var t=e.offsetWidth;e.style.overflow="scroll";var n=document.createElement("div");n.style.width="100%",e.appendChild(n);var i=n.offsetWidth;e.parentNode.removeChild(e);var l=t-i,c=Math.max(window.innerHeight,document.documentElement.scrollHeight),a=Math.max(o.clientWidth,o.offsetWidth),s=Math.max(o.clientHeight,o.offsetHeight),r=0,u=0,m=0,y=0;"number"==typeof window.innerWidth?(r=window.innerWidth-l,u=window.innerHeight):document.documentElement&&document.documentElement.clientWidth&&(r=document.documentElement.clientWidth-l,u=document.documentElement.clientHeight),"number"==typeof window.pageYOffset?(y=window.pageYOffset,m=window.pageXOffset):document.body&&document.body.scrollLeft?(y=document.body.scrollTop,m=document.body.scrollLeft):document.documentElement&&document.documentElement.scrollLeft&&(y=document.documentElement.scrollTop,m=document.documentElement.scrollLeft),o.style.top=Math.max(0,u/2-s/2)+"px",o.style.left=Math.max(0,r/2-a/2)+"px",d.style.height=u+"px",d.style.width="100%",navigator.userAgent.match(/iPad/i)&&(o.style.position="absolute",o.style.top=y+u/2-s/2+"px",o.style.left=m+r/2-a/2+"px",d.style.height=c+"px")},d.setAttribute("id","ac_delayedModal-overlay"),o.setAttribute("id","ac_delayedModal-container"),i.setAttribute("id","ac_delayedModal-header"),l.setAttribute("id","ac_delayedModal-content"),c.setAttribute("id","ac_delayedModal-close"),i.appendChild(c),o.appendChild(i),o.appendChild(l),d.style.visibility="hidden",o.style.visibility="hidden",document.body.appendChild(d),document.body.appendChild(o),n}();setTimeout("delayedpopModal.widget();",179e3),setTimeout("delayedpopModal_open();",18e4);
</script>

<?php get_footer(); ?>