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
<div data-background-alpha="0.0" data-buttons-color="#FFFFFF" data-counter-background-color="#ffffff" data-share-counter-size="12" data-top-button="false" data-share-counter-type="common" data-share-style="1" data-mode="share" data-like-text-enable="false" data-mobile-view="true" data-icon-color="#ffffff" data-orientation="horizontal" data-text-color="#000000" data-share-shape="round-rectangle" data-sn-ids="fb.vk.tw.ok." data-share-size="30" data-background-color="#ffffff" data-preview-mobile="false" data-mobile-sn-ids="fb.vk.tw.wh.ok.vb." data-pid="1600365" data-counter-background-alpha="1.0" data-following-enable="false" data-exclude-show-more="false" data-selection-enable="false" class="uptolike-buttons" ></div>
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
