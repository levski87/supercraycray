<?php
/**
 * Print page title
 * 
 * @package Warta
 */

if( !function_exists('taboola') ) :
/**
 * Get Taboola
 */
function taboola() {
?> 

<div class="taboola-padding">
    <div id='taboola-below-main-column-mix'>
        <script type="text/javascript">
            window._taboola = window._taboola || [];
            _taboola.push({mode:'thumbs-2r', container:'taboola-below-main-column-mix', placement:'below-main-column', target_type:'mix'});
        </script>
    </div>
</div>
    <?php
}
endif; // warta_page_title