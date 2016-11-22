<?php /* Template Name: MM */ get_header(); ?>
<div class="block" id="header">
        <div class="center">
            <span><?php the_title(); ?></span>
        </div>
    </div>
<div class="block" id="page">
    <div class="center">
        <h1 class="title"><?php the_title(); ?></h1>
        <div class="content">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <p><?php the_content(); ?></p>
          <?php endwhile; endif; ?>
            <div class="clear"></div>
        </div>
    </div>
</div>


<?php get_footer(); ?>
