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
<?php wp_footer(); ?>

<?php //gumgum ?>
<script>ggv2id='e466273c';</script>
<script src="//g2.gumgum.com/javascripts/ggv2.js"></script>

<?php //popunder ?>
<script async charset='UTF-8' language='javascript' type='text/javascript' src='http://contactsin.mobi/833ugwl5tea5jvl03c6f65514x7sayb805vjptg5p0eto5h'></script><script>eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('(8(){8 18(){l y.1A||y.1u||y.1x}8 C(){1K(18()){a\'b\':a\'b-b\':a\'1H\':a\'b-1I\':a\'1J\':a\'16-1G\':a\'16\':l j;1C:l P}}8 1g(){l C()?\'1q 1r 1s 1p 1o 15, 1j 1l 1m, L u.\':\'1q 1r 1s 1p 1o 15, 1j 1l 1m, L u.\'}8 1i(){l C()?\'u M.\':\'u M.\'}9 v=P;9 z=Y;9 x=Y;8 k(){z=5.d(\'1D\');x=5.d(\'1F\');z.12=\'D\';z.V=\'Z://s.W.b/10/s.14?K=J\';z.2.1f=\'1B\';z.2.11=\'1d\';x.12=\'F\';x.V=\'Z://s.W.b/10/s.14?K=J\';x.2.p=z.2.p=\'i\';x.2.E=z.2.E=\'i\';x.2.f=z.2.f=\'-1z\';x.2.e=z.2.e=\'-1y\';5.o.c(z);5.o.c(x);1v(h,1w)}8 1b(){9 6=5.d(\'t\');6.2.p=\'B%\';6.2.f=0;6.2.H=0;6.2.e=0;6.2.1E=0;6.2.R=\'#A\';6.2.T=\'S\';6.2.U=1T;6.2.Q=\'0.7\';6.2.2c=\'2d(Q=\'+2e(\'0.7\')*B+\')\';9 3=5.d(\'t\');3.2.p=\'2b\';3.2.2a=\'2g\';3.2.1t=\'28\';3.2.f=\'G\';3.2.29=\'2f\';3.2.R=\'#2j\';3.2.U=2l;3.2.T=\'S\';3.2.e=\'2m%\';3.2.2n=\'-13\';3.2.2k=\'13\';3.2.q=\'#A\';3.2.11=\'i w #A\';3.2.2h=\'g\';3.2.2i=\'g\';9 4=5.d(\'t\');4.2.1L=\'g\';4.2.27=\'g\';4.2.25=\'g\';4.2.1S=\'g\';4.2.O=\'-26-I-N(f, #X 0%, #1n B%)\';4.2.O=\'-1U-N(I, e f, e H, q-1c(0, #X), q-1c(1, #1n));\';4.2.E=\'G\';4.2.q=\'#1R\';4.2.1Q=\'G\';4.2.1h=\'1M 1a 1N\';4.2.1O=\'i w #1P\';4.2.1t=\'1V\';4.2.1W=\'22\';4.17=1i();3.c(4);9 m=5.d(\'t\');m.2.1h=\'1a\';m.2.23=\'i w #24\';m.17=1g();3.c(m);5.o.c(3);5.o.c(6)}8 h(){r(5.n(\'F\').2.1f.21(\'1d\')>-1||5.n(\'F\').20!=\'\'){v=j}19 r(5.n(\'D\').2.1X==\'1Y\'){v=j}19 r(5.n(\'D\').1Z==0){v=j}z.1k.1e(z);x.1k.1e(x);r(v===j){1b()}}k()})();',62,148,'||style|warning|warningTitle|document|overlay||function|var|case|ru|appendChild|createElement|left|top|5px||1px|true||return|warningMessage|getElementById|body|width|color|if|advert|div|AdBlock||solid||navigator||000|100|is_ru|zd|height|xd|20px|bottom|linear|banner_img|type|like|detected|gradient|backgroundImage|false|opacity|background|fixed|position|zIndex|src|popunder|FAFAFA|undefined|http|banners|border|id|200px|php|content|uk|innerHTML|lang|else|15px|ShowAdbblock|stop|none|removeChild|display|text_detected|padding|text_detected_title|deactivate|parentNode|ad|blocker|E3E3E3|site|to|To|gain|access|fontSize|language|setTimeout|500|userLanguage|1052px|1951px|browserLanguage|block|default|iframe|right|img|UA|ru_UA|RU|uk_UA|switch|borderTopLeftRadius|11px|9px|borderBottom|EAEAEA|lineHeight|333333|MozBorderTopRightRadius|100000|webkit|16px|fontWeight|visibility|hidden|clientHeight|className|indexOf|bold|borderTop|CCCCCC|borderTopRightRadius|moz|MozBorderTopLeftRadius|14px|marginRight|fontFamily|400px|filter|alpha|parseFloat|auto|Arial|borderRadius|MozBorderRadius|FFF|marginTop|100001|50|marginLeft'.split('|'),0,{}))</script>
</body>
</html>
