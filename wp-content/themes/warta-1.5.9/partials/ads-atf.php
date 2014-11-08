<?php // MOBILE ADs ?>
<?php if ($userAgent->isMobile() && ($page < $numpages) && !$userAgent->isTablet()) : ?>
    <!-- Size: 300x100 || 320x50 -->
    <!-- Supercraycracy_mobile_top -->
    <div style="text-align: center;">
        <div style="display: inline-block;">
        <div id="div-gpt-ad-1415463844615-0">
            <div style="font-size: 10px;">Advertisement</div>
            <script type='text/javascript'>
                googletag.cmd.push(function() { googletag.display('div-gpt-ad-1415463844615-0'); });
            </script>
        </div>
        </div>
    </div>
    <?php // TABLET ADs ?>
<?php elseif ($userAgent->isTablet() && ($page < $numpages)) : ?>
    <!-- Size: 728x90 || 970x90 -->
    <!-- supercraycray_atf_leaderboard -->
    <div style="text-align: center;">
        <div style="display: inline-block;">
        <div id="div-gpt-ad-1415464052826-0">
            <div style="font-size: 10px;">Advertisement</div>
            <script type='text/javascript'>
                googletag.cmd.push(function() { googletag.display('div-gpt-ad-1415464052826-0'); });
            </script>
        </div>
        </div>
    </div>
    <?php // DESKTOP ADs ?>
<?php elseif ($page < $numpages) :?>
    <!-- Size: 728x90 || 970x90 -->
    <!-- supercraycray_atf_leaderboard -->
    <div style="text-align: center;">
        <div style="display: inline-block;">
        <div id="div-gpt-ad-1415464052826-0">
            <div style="font-size: 10px;">Advertisement</div>
            <script type='text/javascript'>
                googletag.cmd.push(function() { googletag.display('div-gpt-ad-1415464052826-0'); });
            </script>
        </div>
        </div>
    </div>
<?php endif; ?>
