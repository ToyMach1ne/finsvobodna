<?php get_header(); ?>

<!-- <div class="block" id="header">
            <div class="center">
            </div>
        </div> -->
        <div class="block" id="page">
    <div class="center">
        <div class="left page-left">
            <h1 class="title"><?php the_title(); ?></h1>
        </div>
        <div class="clear"></div>
        <div class="left page-left">
        <div class="content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
            <div class="clear"></div>
            <div class="sharing">
<div data-background-alpha="0.0" data-buttons-color="#FFFFFF" data-counter-background-color="#ffffff" data-share-counter-size="12" data-top-button="false" data-share-counter-type="common" data-share-style="1" data-mode="share" data-like-text-enable="false" data-mobile-view="true" data-icon-color="#ffffff" data-orientation="horizontal" data-text-color="#000000" data-share-shape="round-rectangle" data-sn-ids="fb.vk.tw.ok." data-share-size="30" data-background-color="#ffffff" data-preview-mobile="false" data-mobile-sn-ids="fb.vk.tw.wh.ok.vb." data-pid="1600365" data-counter-background-alpha="1.0" data-following-enable="false" data-exclude-show-more="false" data-selection-enable="false" class="uptolike-buttons" ></div>
            </div>
        </div>
        <div class="attr">
            <span class="data"><?php the_time('j F Y'); ?></span>|
            <span class="comment-col">Комментариев - 0</span>
            <span class="view">- <?php echo getPostViews(get_the_ID()); ?></span>
        </div>
        <ol id="list-comments">
            <div id="respond" class="comment-respond">
                <?php echo do_shortcode('[contact-form-7 id="101" title="single page form"]'); ?>
            </div>
            <!-- #respond -->
            <div class="clear"></div>
        </ol>
    </div>
    <?php get_sidebar(); ?>
    <div class="clear"></div>
</div>
</div>
<?php get_footer(); ?>
