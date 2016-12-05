<?php /* Template Name: Contacts */ get_header(); ?>
  <div class="block" id="page">
    <div class="center">
        <div class="left page-left">
            <h1 class="title"><?php the_title(); ?></h1>
        </div>
        <div class="clear"></div>
        <div class="left page-left">
            <div class="content">
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <p><?php the_content(); ?></p>
              <?php endwhile; endif; ?>
              <div class="clear"></div>
            </div>
        </div>
        <?php get_sidebar(); ?>
        <div class="clear"></div>
    </div><!-- center -->
</div>

<?php get_footer(); ?>
