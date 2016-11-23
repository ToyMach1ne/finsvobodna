<?php get_header(); ?>
    <div class="block" id="header">
      <div class="center">
        <div id="die" class="search-page">
          <div class="top">Мы просто создаем лучшие проекты</div>
        </div>
      </div>
    </div>
    <div class="block" id="page">
      <div class="center">
             <div class="left page-left">
                <h1 class="title">Результаты поиска</h1>
                <div id="list-blog">
                     <?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
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
                <?php get_template_part('pagination'); ?>
            </div><!-- left-page -->
            <?php get_sidebar(); ?>
            <div class="clear"></div>
        </div><!-- center -->
    </div><!-- block -->
    <?php get_footer(); ?>
