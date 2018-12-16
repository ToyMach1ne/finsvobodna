<div class="block" id="footer">
        <div class="center footer-block">
            <div class="left">
              <?php wpeFootNav(); ?>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div id="agreement-with-dispatch">
        <div class="formss">
            <div class="header-x">lesnica_vverh</div>
            <div class="content" id="agreement-with-dispatch-data">
            </div>
            <a class="close">Закрыть</a>
        </div>
    </div>
    <div id="privacy-policy">
        <div class="formss">
            <div class="header-x"></div>
            <div class="content" id="privacy-policy-data">
            </div>
            <a class="close">Закрыть</a>
        </div>
    </div>
    <div id="denial-of-responsibility">
        <div class="formss">
            <div class="header-x"></div>
            <div class="content" id="denial-of-responsibility-data">
            </div>
            <a class="close">Закрыть</a>
        </div>
    </div>
      <?php wp_footer(); ?>
    <script>
    $(document).ready(function() {

        $('#list-blog .item').hover(
            function() {
                $(this).addClass('hover');
            },
            function() {
                $(this).removeClass('hover');
            });

        $(".emersion-x, #footer .agreement li a").click(function() {
            $("#" + $(this).attr('rel')).fadeIn(400);
            return false;
        });

        $('.close').click(function() {
            $(this).parent().parent().fadeOut(400);
        });

        $(".content a").find("img").parent().addClass("emersion");
        $("a.emersion, a[rel=emersion]").fancybox({
            'padding': 0,
            'opacity': true,
            'transitionIn': 'elastic',
            'transitionOut': 'elastic',
            'hideOnOverlayClick': true,
            'hideOnContentClick': true
        });

    });
    </script>
    <script type="text/javascript">(function(w,doc) {
      if (!w.__utlWdgt ) {
          w.__utlWdgt = true;
          var d = doc, s = d.createElement('script'), g = 'getElementsByTagName';
          s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
          s.src = 'https://w.uptolike.com/widgets/v1/uptolike.js';
          var h=d[g]('body')[0];
          h.appendChild(s);
      }})(window,document);
    </script>

    <div style="position: absolute; right: 0px; left: 0px; bottom: 0px; top: 0px; z-index: 2147483646; background: black; width: 100%; opacity: 0.5; display: none; height: 4528px;"></div>
    <?php wp_footer(); ?>
</body>

</html>
