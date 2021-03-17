  <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">


                        <div class="sidebar-area default_widgets">
                            <?php dynamic_sidebar( 'right_sidebar_for_news' ); ?>
                          <!--  <aside id="search-3" class="widget widget_search">
                              <h5 class="widget_title">Search</h5>
                              <form method="get" class="search-form" action="https://consulting.stylemixthemes.com/miami/">
                                 <input type="search" class="form-control" placeholder="Search..." value="" name="s">
                                 <button type="submit"><i class="fa fa-search"></i></button>
                              </form>
                           </aside>
                           <aside id="archives-3" class="widget widget_archive">
                              <h5 class="widget_title">Archive</h5>
                              <ul>
                                 <li><a href="https://consulting.stylemixthemes.com/miami/2021/01/">January 2021</a></li>
                              </ul>
                           </aside> -->

                           <aside id="media_gallery-2" class="widget widget_media_gallery">
                              <div id="gallery-1" class="gallery galleryid-745 gallery-columns-3 gallery-size-thumbnail">

                               <?php 
                                  // параметры по умолчанию
                                 $posts = get_posts( array(
                                    'numberposts' => 6,
                                    'category'    => 0,
                                    'orderby'     => 'date',
                                    'order'       => 'DESC',
                                    'post_type'   => 'news',
                                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                                 ) );


                                 foreach( $posts as $post ){
                                    setup_postdata($post);
                                    ?>
                                 <figure class="gallery-item">
                                    <div class="gallery-icon landscape">
                                       <a href="<?php the_permalink() ?>">
                                         <?php the_post_thumbnail('', $attr);
                                                $title_for_news = get_the_title();
                                                $attr = array(
                                                   'title'   => $title_for_news,
                                                );
                                          ?></a>
                                    </div>
                                 </figure>
                                <?php
                                    }
                                    wp_reset_postdata(); // сброс
                               ?>
                              </div>
                           </aside>
                           <aside id="text-4" class="widget widget_text">
                              <ul class="nav">
                                    <?php dynamic_sidebar( 'right_sidebar_for_news_text' ); ?>
                                 </ul>
                             <!--  <h5 class="widget_title">But first, there’s something different…</h5>
                              <div class="textwidget">
                                 
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                              </div> -->
                           </aside>
                        </div>


                     </div> 
                     <script type="text/javascript">
                        const formS = document.querySelector('form#searchform');
                        const inputS = formS.querySelector('input[type=text]');
                        inputS.setAttribute('placeholder', 'Что ищете ...');
                     </script>