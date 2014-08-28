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

        <!---GUM GUM -->
        <script type="text/javascript">ggv2id='e466273c';</script>
        <script type="text/javascript" src="http://g2.gumgum.com/javascripts/ggv2.js"></script>
        
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

<?php wp_footer(); ?>
</body>
</html>