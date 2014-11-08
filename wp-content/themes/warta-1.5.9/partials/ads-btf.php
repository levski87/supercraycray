<?php // MOBILE ADs below arrows ?>
<?php if ($userAgent->isMobile() && !$userAgent->isTablet() && ($page < $numpages)) : ?>
    <!-- Size: 300x250 || 336x280 -->
    <!-- supercraycray_box_btf -->
    <div style="text-align: center;">
        <div style="display: inline-block;">
            <div id="div-gpt-ad-1415464267782-0">
                <div style="font-size: 10px;">Advertisement</div>
                <script type='text/javascript'>
                    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1415464267782-0'); });
                </script>
            </div>
        </div>
    </div>

    <?php // TABLET ADs below arrows ?>
<?php elseif ($userAgent->isTablet() && ($page < $numpages)) : ?>
    <!-- Size: 300x250 || 336x280 -->
    <!-- supercraycray_box_btf -->
    <div style="text-align: center;">
        <div style="display: inline-block;">
            <div id="div-gpt-ad-1415464267782-0">
                <div style="font-size: 10px;">Advertisement</div>
                <script type='text/javascript'>
                    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1415464267782-0'); });
                </script>
            </div>
        </div>
    </div>

    <?php // DESKTOP ADs below arrows ?>
<?php elseif ($page < $numpages) : ?>
    <!-- Size: 300x250 || 336x280 -->
    <!-- supercraycray_box_btf -->
    <div style="text-align: center;">
        <div style="display: inline-block;">
        <div id="div-gpt-ad-1415464267782-0">
            <div style="font-size: 10px;">Advertisement</div>
            <script type='text/javascript'>
                googletag.cmd.push(function() { googletag.display('div-gpt-ad-1415464267782-0'); });
            </script>
        </div>
        </div>
    </div>

<?php endif; ?>