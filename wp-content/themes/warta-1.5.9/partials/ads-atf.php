<?php // MOBILE ADs ?>
<?php if ($userAgent->isMobile() && ($page < $numpages) && !$userAgent->isTablet()) : ?>
    <!-- Size: 300x100 || 320x50 -->
    <!-- Supercraycracy_mobile_top -->
    <div style="text-align: center;">
        <div style="display: inline-block;">
        <div id="div-gpt-ad-1415463844615-0">
            <div style="font-size: 10px;">Advertisement
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:inline-block;width:320px;height:100px"
     data-ad-client="ca-pub-4528087481844577"
     data-ad-slot="2955883840"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
        </div>
        </div>
    </div>
    <?php // TABLET ADs ?>
<?php elseif ($userAgent->isTablet() && ($page < $numpages)) : ?>
    <!-- Size: 728x90 -->
    <!-- leaderboard -->
    <div style="text-align: center;">
        <div style="display: inline-block;">
            <div style="font-size: 10px;">Advertisement
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <ins class="adsbygoogle"
                            style="display:inline-block;width:728px;height:90px"
                            data-ad-client="ca-pub-4528087481844577"
                            data-ad-slot="2271573049"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
        </div>
        </div>
    </div>
    <?php // DESKTOP ADs ?>
<?php elseif ($page < $numpages) :?>
    <!-- Size: 728x90 -->
    <!-- leaderboard -->
    <div style="text-align: center;">
        <div style="display: inline-block;">
            <div style="font-size: 10px;">Advertisement
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <ins class="adsbygoogle"
                            style="display:inline-block;width:728px;height:90px"
                            data-ad-client="ca-pub-4528087481844577"
                            data-ad-slot="2271573049"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
        </div>
        </div>
    </div>
<?php endif; ?>
