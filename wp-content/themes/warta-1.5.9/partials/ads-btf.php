<?php // MOBILE ADs below arrows ?>
<?php if ($userAgent->isMobile() && !$userAgent->isTablet() && ($page < $numpages)) : ?>
    <!-- Size: 336x280 -->
    <!-- 336x280 -->
    <div style="text-align: center;">
        <div style="display: inline-block;">
            <div style="font-size: 10px;">Advertisement</div>
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <ins class="adsbygoogle"
                        style="display:inline-block;width:336px;height:280px"
                        data-ad-client="ca-pub-4528087481844577"
                        data-ad-slot="5947354244"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
        </div>
     </div>

    <?php // TABLET ADs below arrows ?>
<?php elseif ($userAgent->isTablet() && ($page < $numpages)) : ?>
    <!-- Size: 336x280 -->
    <!-- 336x280 -->
    <div style="text-align: center;">
        <div style="display: inline-block;">
            <div style="font-size: 10px;">Advertisement</div>
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <ins class="adsbygoogle"
                        style="display:inline-block;width:336px;height:280px"
                        data-ad-client="ca-pub-4528087481844577"
                        data-ad-slot="5947354244"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
        </div>
     </div>

    <?php // DESKTOP ADs below arrows ?>
<?php elseif ($page < $numpages) : ?>
    <!-- Size: 336x280 -->
    <!-- 336x280 -->
    <div style="text-align: center;">
        <div style="display: inline-block;">
            <div style="font-size: 10px;">Advertisement</div>
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <ins class="adsbygoogle"
                        style="display:inline-block;width:336px;height:280px"
                        data-ad-client="ca-pub-4528087481844577"
                        data-ad-slot="5947354244"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
        </div>
     </div>
<?php endif; ?>

