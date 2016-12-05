<!DOCTYPE html>
<html lang="ru-RU" style="min-height: 100%;">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

    <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

    <!--[if IE]>
      <link rel="stylesheet" type="text/css" href="http://blog.fin-svoboda.com/wp-content/themes/evgeniy-hodchenkov/ie.css" />
    <![endif]-->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="block" id="top">
    <div class="center">
        <div class="left logo">
            <a href="<?php echo home_url(); ?>">Илья Коровин</a>
        </div>
        <div class="left menu">
            <?php wpeHeadNav(); ?>
        </div>
        <div class="clear"></div>
    </div>
</div>

