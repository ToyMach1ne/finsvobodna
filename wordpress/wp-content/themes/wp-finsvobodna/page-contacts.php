<?php /* Template Name: Contacts */ get_header(); ?>
<div class="block" id="contact">
      <div class="center">

          <div class="content">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <p><?php the_content(); ?></p>
          <?php endwhile; endif; ?>
<p><a href="#"><?php the_field('email'); ?></a></p>
            <div class="clear"></div>
            <p>Я в социальных сетях:</p>
            <ul class="social">
              <li><a target="_blank" href="#">Вконтакте</a></li>
              <li><a target="_blank" href="#">Instagram</a></li>
              <li><a target="_blank" href="#">Facebook</a></li>
              <li><a target="_blank" href="#">Twitter</a></li>
              <div class="clear"></div>
            </ul>
          </div>
              </div>
    </div>
