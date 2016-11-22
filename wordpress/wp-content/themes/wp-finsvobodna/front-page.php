<?php /* Template Name: Home */ get_header(); ?>
<div class="block" id="header">
        <div class="center">
            <h1><?php the_field('h1title'); ?></h1>
            <p><?php the_field('slogan'); ?></p>
            <div id="die">
                <div class="left">
                  <a target="_blank" href="#" data-leadbox="https://my.leadpages.net/leadbox/146526673f72a2%3A14b0e849eb46dc/5716216131878912/" data-leadbox-id="146526673f72a2:14b0e849eb46dc">Получить доступ</a>
                </div>
                <div class="right"><?php the_field('nearbutton'); ?></div>
                <div class="clear"></div>
                <i></i>
                <span><?php the_field('underslogan'); ?></span>
            </div>
        </div>
    </div>
    <div class="block" id="video-app">
        <div class="center">
            <div class="left">
                <h3>Посмотрите приветственное видео</h3>
                <div class="video">
                </div>
            </div>
            <div class="right">
                <h3>1000+ инструкций по бизнесу</h3>
                <a href="#" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/img/2.jpg"></a>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="block" id="page">
        <div class="center">
            <div class="left page-left">
                <h1 class="title">Блог автора</h1>
                <div id="list-blog">
                    <?php query_posts("cat=8"); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="item" id="post-16166">
                        <h2>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <div class="attr">
                            <span class="data"><?php the_time('j F Y'); ?></span>|
                            <span class="comment-col">Комментариев - 0</span>|
                            <span class="view">- <?php echo getPostViews(get_the_ID()); ?></span>
                        </div>
                        <p class="excerpt"><?php wpeExcerpt('wpeExcerpt40'); ?></p>
                        <div class="sharing">
                        </div>
                    </div>
                    <?php endwhile; endif; ?>
                    <?php wp_reset_query(); ?>
                </div><!-- list-blog -->

            </div><!-- left-page -->
            <?php get_sidebar(); ?>
            <div class="clear"></div>
       </div><!-- center -->
    </div><!-- block -->
    <div class="block" id="bottom">
        <div class="center bot-block">
            <span><?php the_field('h1title'); ?></span>
            <p><?php the_field('slogan'); ?></p>
            <div>
              <i></i>
              <a target="_blank" href="#" data-leadbox="https://my.leadpages.net/leadbox/146526673f72a2%3A14b0e849eb46dc/5716216131878912/" data-leadbox-id="146526673f72a2:14b0e849eb46dc">Получить видео</a>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>
