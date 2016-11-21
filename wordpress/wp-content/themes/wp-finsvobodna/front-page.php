<?php /* Template Name: Home */ get_header(); ?>
    <div class="block" id="video-app">
        <div class="center">
            <div class="left">
                <h3>Посмотрите приветственное видео</h3>
                <div class="video">
                </div>
            </div>
            <div class="right">
                <h3>1000+ инструкций по бизнесу</h3>
                <a href="http://join.bizcase-lab.ru/inc/#a_aid=j2811_2016&amp;a_bid=8f393cf6&amp;chan=blog_banner_glav" target="_blank">
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
                <div class="navigation-container">
                    <div id="navigation"><span class="page-numbers current">1</span>
                        <a class="page-numbers" href="http://blog.fin-svoboda.com/page/2">2</a>
                        <a class="page-numbers" href="http://blog.fin-svoboda.com/page/3">3</a>
                        <a class="page-numbers" href="http://blog.fin-svoboda.com/page/4">4</a>
                        <span class="page-numbers dots">…</span>
                        <a class="page-numbers" href="http://blog.fin-svoboda.com/page/103">103</a>
                        <a class="next page-numbers" href="http://blog.fin-svoboda.com/page/2">Вперед</a></div>
                </div>
            </div><!-- left-page -->
        <div class="right page-right">
                <div id="sidebar">
                    <ul>
                        <li id="banner-2" class="widget-container news-of-the-month">
                            <h3 class="widget-title">Новость месяца.</h3>
                            <div class="textwidget">
                                <center>
                                    <a href="http://join.bizcase-lab.ru/schedule/">
                                    </a>
                                    <p style="font-size: 16px; color: #000;"><a href="http://join.bizcase-lab.ru/schedule/">Расписание онлайн встреч на 2016 год &gt;&gt;<u> </u> </a></p>
                                </center>
                            </div>
                        </li>
                        <li id="text-43" class="widget-container widget_text">
                            <div class="textwidget">
                                <a href="http://blog.fin-svoboda.com/?p=15945" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/45424356.jpg"></a>
                            </div>
                        </li>
                        <li id="text-23" class="widget-container widget_text">
                            <h3 class="widget-title">Следуй за мной</h3>
                            <div class="textwidget">
                                <center>
                                    <!-- VK Widget -->
                                    <div id="vk_subscribe" style="height: 22px; width: 100%; background: none;">
                                    </div>
                                </center>
                            </div>
                        </li>
                        <li id="text-41" class="widget-container widget_text">
                            <h3 class="widget-title">Перископ</h3>
                            <div class="textwidget">
                                <center>
                                </center>
                            </div>
                        </li>
                        <li id="text-40" class="widget-container widget_text">
                            <div class="textwidget">
                                <center>

                                    <!-- VK Widget -->
                                    <div id="vk_groups" style="height: 400px; width: 220px; background: none;">
                                    </div>

                                </center>
                            </div>
                        </li>
                        <li id="search-4" class="widget-container widget_search">
                            <h3 class="widget-title">ПОИСК ПО САЙТУ</h3>
                            <form role="search" method="get" id="searchform" class="searchform" action="http://blog.fin-svoboda.com/">
                                <div>
                                    <label class="screen-reader-text" for="s">Найти:</label>
                                    <input type="text" value="" name="s" id="s">
                                    <input type="submit" id="searchsubmit" value="Поиск">
                                </div>
                            </form>
                        </li>
                        <li id="nav_menu-4" class="widget-container widget_nav_menu">
                            <h3 class="widget-title">Рубрики</h3>
                            <div class="menu-rubriki-container">
                                <ul id="menu-rubriki" class="menu">
                                    <li id="menu-item-13463" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-13463"><a href="http://blog.fin-svoboda.com/novosti">Новости</a></li>
                                    <li id="menu-item-14690" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-14690"><a href="http://blog.fin-svoboda.com/geroy-goda">Герой Года</a></li>
                                    <li id="menu-item-13465" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-13465"><a href="http://blog.fin-svoboda.com/schastlivaya-korova">Счастливая Корова</a></li>
                                    <li id="menu-item-12420" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12420"><a href="http://blog.fin-svoboda.com/email-marketing">Email маркетинг</a></li>
                                    <li id="menu-item-12422" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12422"><a href="http://blog.fin-svoboda.com/mobilnye-prilozheniya">Мобильные приложения</a></li>
                                    <li id="menu-item-12458" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12458"><a href="http://blog.fin-svoboda.com/rassylka-vyxodnogo-dnya">Рассылка выходного дня</a></li>
                                    <li id="menu-item-12421" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12421"><a href="http://blog.fin-svoboda.com/investicii">Инвестиции</a></li>
                                    <li id="menu-item-12423" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12423"><a href="http://blog.fin-svoboda.com/ispaniya">Испания</a></li>
                                    <li id="menu-item-12424" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-12424"><a href="http://blog.fin-svoboda.com/vebinary-2">Вебинары</a></li>
                                    <li id="menu-item-14877" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-14877"><a href="http://blog.fin-svoboda.com/kino-so-smyslom">Кино со смыслом</a></li>
                                </ul>
                            </div>
                        </li>
                        <li id="text-38" class="widget-container widget_text">
                            <h3 class="widget-title">Инстаграм</h3>
                            <div class="textwidget">
                                <!-- INSTANSIVE WIDGET -->

                            </div>
                        </li>
                        <li id="text-39" class="widget-container widget_text">
                            <div class="textwidget">
                                <center>
                                    <a href="http://freevideokr.j.mihailgavrilov.e-autopay.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/freevideo220х330.gif"></a>
                                </center>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- right -->
            <div class="clear"></div>
       </div><!-- center -->
    </div><!-- block -->
    <div class="block" id="bottom">
        <div class="center bot-block">
            <span>Евгений Ходченков:</span>
            <p>«Проехал 39 стран, управляя
                <br> 5-ю бизнесами с Айфона.
                <br> На этом блоге делюсь только
                <br>
                <strong>практическими</strong> наработками в бизнесе»</p>
            <div>
              <i></i>
              <a target="_blank" href="https://my.leadpages.net/leadbox/146526673f72a2%3A14b0e849eb46dc/5716216131878912/" data-leadbox="https://my.leadpages.net/leadbox/146526673f72a2%3A14b0e849eb46dc/5716216131878912/" data-leadbox-id="146526673f72a2:14b0e849eb46dc">Получить видео</a>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>
