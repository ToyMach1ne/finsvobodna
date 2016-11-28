<?php /* Template Name: Home */ get_header(); ?>
<div class="block" id="header">
        <div class="center">
            <h1><?php the_field('h1title'); ?></h1>
            <p><?php the_field('slogan'); ?></p>
        </div>
    </div>
    <div class="block" id="page">
        <div class="center content-block">
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
                          <div class="ya-share2" data-services="vkontakte,facebook,gplus,twitter"></div>
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
    <?php get_footer(); ?>
