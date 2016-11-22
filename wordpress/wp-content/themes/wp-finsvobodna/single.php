<?php get_header(); ?>
<div class="block" id="header">
            <div class="center">
                <div id="die">
                    <div class="top"><?php the_field('top_text', 86); ?></div>
                    <div class="bottom">
                        <div class="left"><?php the_field('undertop', 86); ?></div>
                        <div class="right">
                            <i></i><a href="#" target="_blank" data-leadbox="https://my.leadpages.net/leadbox/146526673f72a2%3A14b0e849eb46dc/5716216131878912/" data-leadbox-id="146526673f72a2:14b0e849eb46dc">Получить видео</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
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
        </div>
        <div class="attr">
            <span class="data"><?php the_time('j F Y'); ?></span>|
            <span class="comment-col">Комментариев - 0</span>
            <span class="view">- <?php echo getPostViews(get_the_ID()); ?></span>
        </div>
        <center>
            <a href="http://blog.fin-svoboda.com/blog/telegram-messendzher-novogo-pokoleniya-dlya-vas-i-vashego-biznesa" target="_blank"><img src="http://blog.fin-svoboda.com/wp-content/uploads/2016/07/32645534.jpg"></a>
        </center>
        <ol id="list-comments">
            <div id="respond" class="comment-respond">
                <h3 id="reply-title" class="comment-reply-title">
                  <i>Оставить комментарий</i>
                  <small>
                    <a rel="nofollow" id="cancel-comment-reply-link" href="/rassylka-vyxodnogo-dnya/rvd-istinnaya-cena-muzhskoj-mechty#respond" style="display:none;">Отменить ответ</a>
                  </small>
                </h3>
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
<div class="block" id="bottom">
  <div class="center">
     <span><?php the_field('h1title', 86); ?></span>
      <p><?php the_field('slogan', 86); ?></p>
       <div>
         <i></i>
         <a href="http://blog.fin-svoboda.com/blog/telegram-messendzher-novogo-pokoleniya-dlya-vas-i-vashego-biznesa" target="_blank">Читать меня</a>
       </div>
  </div>
</div>
<?php get_footer(); ?>
