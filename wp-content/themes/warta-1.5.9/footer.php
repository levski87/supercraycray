<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Warta
 */

// Get $friskamax_warta global variables
global $friskamax_warta, $friskamax_warta_var;
?>

    <footer>
        
        <!-- MAIN FOOTER
        ==================================================================== -->
        <div id="footer-main">

            <div class="container">

                <div class="row">                    
                    
                    <?php 
                        if      ( $friskamax_warta_var['page'] === 'home' && dynamic_sidebar( 'home-footer-section' ) ) : 
                        elseif  ( $friskamax_warta_var['page'] === 'archive' && dynamic_sidebar( 'archive-footer-section' ) ) : 
                        elseif  ( $friskamax_warta_var['page'] === 'singular' && dynamic_sidebar( 'singular-footer-section' ) ) : 
                        elseif  ( $friskamax_warta_var['page'] === 'page' && dynamic_sidebar( 'page-footer-section' ) ) : 
                        elseif  ( dynamic_sidebar('default-footer-section') ) :    
                        endif; 
                    ?>

                </div><!--.row-->

            </div><!--.container-->

        </div><!--#footer-main-->
        
        <div id="footer-bottom">                
            <div class="container">                
                        <p><?php echo isset( $friskamax_warta['footer_text'] ) ?  $friskamax_warta['footer_text'] : '' ?></p>                
                        <?php wp_nav_menu( array( 'theme_location' => 'footer', 'depth' => 1, 'container' => FALSE ) ); ?>                
            </div><!--.container-->            
        </div><!--#footer-bottom-->
            
    </footer><!-- footer -->

<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '530133350452307',
            xfbml      : true,
            version    : 'v2.1'
        });
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<div id="fb-root"></div>


<script type='text/javascript'>
(function(){
  var spoutjs=document.createElement('script'),firstjs=document.getElementsByTagName('script')[0];
  spoutjs.async=1;
  spoutjs.src='//cdn.spoutable.com/9aae0955-48d6-4214-b69b-e7ce1ab6a109/spoutable.js';
  firstjs.parentNode.insertBefore(spoutjs,firstjs)
})();
</script>



<?php wp_footer(); ?>

<?php //gumgum ?>
<?php if (!is_home()) : ?>
    <script>ggv2id='e466273c';</script>
    <script src="//g2.gumgum.com/javascripts/ggv2.js"></script>

    <script type="text/javascript" src="http://interyield.jmp9.com/InterYield/bindevent.do?e=click&affiliate=supercraycray&subid=scc&ecpm=0&debug=false&snoozeMinutes=1&adCountIntervalHours=24&maxAdCountsPerInterval=6&pop=under&attributionDisabled=true"></script>
<?php endif; ?>
</body>
</html>
