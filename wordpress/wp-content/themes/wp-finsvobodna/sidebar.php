<div class="right page-right">
                <div id="sidebar">
                    <ul>
                        <li id="search-4" class="widget-container widget_search">
                            <h3 class="widget-title">ПОИСК ПО САЙТУ</h3>
                            <form id="searchform" class="searchform" method="get" action="<?php echo home_url(); ?>" role="search">
                              <input class="screen-reader-text" type="search" name="s" placeholder="Поиск по сайту">
                              <button id="searchsubmit" class="search-submit" type="submit" role="button"><?php _e( 'Поиск', 'wpeasy' ); ?></button>
                            </form><!-- /search -->
                            <!-- <form role="search" method="get" id="searchform" class="searchform" action="http://blog.fin-svoboda.com/">
                                <div>
                                    <label class="screen-reader-text" for="s">Найти:</label>
                                    <input type="text" value="" name="s" id="s">
                                    <input type="submit" id="searchsubmit" value="Поиск">
                                </div>
                            </form> -->
                        </li>
                        <li id="nav_menu-4" class="widget-container widget_nav_menu">
                            <h3 class="widget-title">Рубрики</h3>
                            <div class="menu-rubriki-container">
                            <?php wpeSideNav(); ?>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- right -->
