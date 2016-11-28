<?php get_header(); ?>
<div class="block" id="header">
            <div class="center">
            </div>
        </div>
        <div class="block" id="page">
    <div class="center">
        <div class="left page-left">
            <h1 class="title">[РВД] Истинная цена мужской мечты.</h1>
        </div>
        <div class="clear"></div>
        <div class="left page-left">
        <div class="content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <p><?php the_content(); ?></p>
          <?php endwhile; endif; ?>
            <div class="clear"></div>
            <div class="sharing">
              <div class="ya-share2" data-services="vkontakte,facebook,gplus,twitter"></div>
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
