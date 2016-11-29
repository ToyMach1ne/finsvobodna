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
    <!-- SCRIPTS -->
    <script id="twitter-wjs" src="<?php echo get_template_directory_uri(); ?>/js/widgets.js"></script>
    <script id="facebook-jssdk" src="<?php echo get_template_directory_uri(); ?>/js/sdk.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-migrate.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/leadbox-764.js"></script>
    <!-- Put this script tag to the <head> of your page -->

   <script src="<?php echo get_template_directory_uri(); ?>/js/instansive.js"></script>
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
    <!-- Powered by WPtouch: 3.2.4.1 -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
    <script type="text/javascript">
    /* <![CDATA[ */
    var pollsL10n = {
        "ajax_url": "http:\/\/blog.fin-svoboda.com\/wp-admin\/admin-ajax.php",
        "text_wait": "Your last request is still being processed. Please wait a while ...",
        "text_valid": "Please choose a valid poll answer.",
        "text_multiple": "Maximum number of choices allowed: ",
        "show_loading": "1",
        "show_fading": "1"
    };
    /* ]]> */
    </script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/polls-js.js"></script>
    <script type="text/javascript">
    (window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=TYN/44XLYfPVG*3Hwp0hEEH5mMD5qRClNXbWFnY0/0SmVE4tO50aMV1m38S3bCw2GKWa5/AS5e4S9kHqiHz89pCXvufTS/racCsB8equd2IZGTphZKeLSJDZRiUoAne3O4GyTkci9n/FFXYbQMwVokRfEZBIFxEKECkSc8Tx*2k-';
    </script>
    <script charset="UTF-8" src="<?php echo get_template_directory_uri(); ?>/js/893cd11a1988a6c58df28a5c519d7a37_0.js" async=""></script>
<script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
<script src="//yastatic.net/share2/share.js"></script>
<script type="text/javascript">(function(w,doc) {
if (!w.__utlWdgt ) {
    w.__utlWdgt = true;
    var d = doc, s = d.createElement('script'), g = 'getElementsByTagName';
    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
    s.src = ('https:' == w.location.protocol ? 'https' : 'http')  + '://w.uptolike.com/widgets/v1/uptolike.js';
    var h=d[g]('body')[0];
    h.appendChild(s);
}})(window,document);
</script>


    <!-- END OF SCRIPTS -->

    <div style="position: absolute; right: 0px; left: 0px; bottom: 0px; top: 0px; z-index: 2147483646; background: black; width: 100%; opacity: 0.5; display: none; height: 4528px;"></div>
    <?php wp_footer(); ?>
</body>

</html>
