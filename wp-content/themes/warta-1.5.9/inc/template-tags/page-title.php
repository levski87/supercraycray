<?php
/**
 * Print page title
 * 
 * @package Warta
 */

if( !function_exists('warta_page_title') ) :
/**
 * Print page title
 * 
 * @param string $primary   Title
 * @param string $secondary Subtitle
 * @param boolean $one_line TRUE if want to display 1 line and false if 2 lines
 */
function warta_page_title( $primary, $secondary, $one_line = false ) {
?> 

    <div id="title">
        <div class="image-light"></div>
        <div class="container">
        <div style="text-align:center !important">
          <div id="contentad33215"></div>
<script type="text/javascript">
    (function() {
        var params =
        {
            id: "2c5d04ad-d7d4-4e84-9ee9-c45ee9c579c5",
            d:  "c3VwZXJjcmF5Y3JheS5jb20=",
            wid: "33215",
            cb: (new Date()).getTime()
        };

        var qs="";
        for(var key in params){qs+=key+"="+params[key]+"&"}
        qs=qs.substring(0,qs.length-1);
        var s = document.createElement("script");
        s.type= 'text/javascript';
        s.src = "http://api.content.ad/Scripts/widget.aspx?" + qs;
        s.async = true;
        document.getElementById("contentad33215").appendChild(s);
    })();
</script>
</div>
            <div class="title-container col-md-12">
                
                <?php if($one_line) : ?>
                
                    <h1>
                        <?php if( !empty($secondary) ) : ?>
                            <span class="secondary"><?php echo $secondary ?></span>
                        <?php endif ?>
                            
                        <?php if( !empty($primary) ) : ?>
                            <span class="primary"><?php echo $primary ?></span>
                        <?php endif ?>
                    </h1>
                
                <?php elseif (is_single()) : ?>
                
                    <?php if( !empty($primary) ) : ?>
                        <h1 class="primary" style="color: black !important; float:right;" ><?php echo $primary ?></h1>
                    <?php endif ?>
                    
                <?php else : ?>       
                <?php endif ?>
                    
            </div>
        </div>
    </div>

    <?php
}
endif; // warta_page_title


