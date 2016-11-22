<!DOCTYPE html>
<html lang="ru-RU" style="min-height: 100%;">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://blog.fin-svoboda.com/xmlrpc.php?rsd">
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://blog.fin-svoboda.com/wp-includes/wlwmanifest.xml">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- /all in one seo pack -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>
    <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <!--[if IE]>
      <link rel="stylesheet" type="text/css" href="http://blog.fin-svoboda.com/wp-content/themes/evgeniy-hodchenkov/ie.css" />
    <![endif]-->
    <!--
    <script type="text/javascript" src="/js/jquery-1.7.1.min.js"></script>
        -->
    <!--<script type="text/javascript" src="http://blog.fin-svoboda.com/wp-content/themes/evgeniy-hodchenkov/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="fb-root" class=" fb_reset">
        <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
        </div>
        <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
            <div></div>
        </div>
    </div>
    <div class="block" id="top">
        <div class="center">
            <div class="left logo">
                <a href="<?php echo home_url(); ?>">Евгений Ходченков. Личный блог об удаленном бизнесе.</a>
            </div>
            <div class="left menu">
                <?php wpeHeadNav(); ?>
            </div>
            <div class="right social">
                <ul class="social">
                    <li><a target="_blank" href="http://vk.com/jackson2811">Вконтакте</a></li>
                    <li><a target="_blank" href="http://instagram.com/e_hodchenkov">Instagram</a></li>
                    <li><a target="_blank" href="http://www.periscope.tv/e_hodchenkov">Facebook</a></li>
                    <li><a target="_blank" href="http://telegram.me/hodchenkov">Twitter</a></li>
                    <div class="clear"></div>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>

