<?php 
	/*
	Template name: Статьи категория
	
	*/
	get_header( 'post' )	
?>
     <div id="main">
               <div class="page_title transparent disable_title">
                  <div class="container">
                     <div class="breadcrumbs">
                        <!-- Breadcrumb NavXT 6.4.0 -->
                        <span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="Go to Consulting WP - Miami - Insurance." href="<?php echo home_url() ?>" class="home">Главная</a></span><span><i class="fa fa-angle-right"></i></span>
                        <span property="itemListElement" typeof="ListItem">
                           <span property="name">Статьи</span>
                           <meta property="position" content="2">
                        </span>
                     </div>
                  </div>
               </div>
               <div class="container">
                  <div class="row">
                     <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="col_in __padd-right">
                           <div class="posts_list with_sidebar">
                              <ul class="post_list_ul no-paginate">

                                              <?php 
                                                 // параметры по умолчанию
                                                $posts = get_posts( array(
                                                   'numberposts' => -1,
                                                   'category'    => 0,
                                                   'orderby'     => 'date',
                                                   'order'       => 'ASC',
                                                   'post_type'   => 'news',
                                                   'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                                                ) );

                                                foreach( $posts as $post ){
                                                   setup_postdata($post);
                                                   ?>


                                             <li id="post-135" class="stm_post_info post-135 post type-post status-publish format-standard has-post-thumbnail hentry category-competitive-research-analysis tag-401k tag-online-services tag-portfolios">
                                                <h4 class="stripe_2"><?php the_title() ?></h4>
                                                <div class="stm_post_details clearfix">
                                                   <ul class="clearfix">
                                                      <li class="post_date">
                                                         <i class="fa fa fa-clock-o"></i>
                                                       <?php the_time('j F Y'); ?>
                                                      </li>
                                                      <li class="post_by">Опубликовал: <span><?php the_author() ?></span></li>
                                                      <li class="post_cat">Категории: <span><?php the_terms( get_the_ID(), 'news_articles', '', ', ', '') ?></span>
                                                      </li>
                                                   </ul>
                                                  <!--  <div class="comments_num">
                                                      <a href="https://consulting.stylemixthemes.com/miami/2021/01/30/harvest-great-ideas-from-your-companys-best-assets/#respond"><i class="fa fa-comment-o"></i>No Comments </a>
                                                   </div> -->
                                                </div>
                                                <div class="post_thumbnail">
                                                   <?php the_post_thumbnail() ?>
                                                </div>
                                                <div class="post_excerpt">
                                                   <?php the_excerpt() ?>
                                                </div>
                                                <div class="post_read_more">
                                                   <a class="button bordered icon_right" href="<?php the_permalink() ?>">
                                                   Читать полностью         <i class="fa fa-chevron-right"></i>
                                                   </a>
                                                </div>
                                             </li>
                                
                              
                                 <?php
                                    }
                                    wp_reset_postdata(); // сброс
                                  ?>
                                
                               
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
                        <div class="sidebar-area default_widgets">
                           <aside id="search-3" class="widget widget_search">
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
                           </aside>
                           <aside id="media_gallery-2" class="widget widget_media_gallery">
                              <div id="gallery-1" class="gallery galleryid-745 gallery-columns-3 gallery-size-thumbnail">
                                 <figure class="gallery-item">
                                    <div class="gallery-icon landscape">
                                       <a href="https://consulting.stylemixthemes.com/miami/contact-us/statistics_bg-1-1-700x660/"><img width="150" height="150" src="./news – Consulting WP – Miami – Insurance_files/statistics_bg-1-1-700x660-1-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" srcset="https://consulting.stylemixthemes.com/miami/wp-content/uploads/sites/49/2021/01/statistics_bg-1-1-700x660-1-150x150.jpg 150w, https://consulting.stylemixthemes.com/miami/wp-content/uploads/sites/49/2021/01/statistics_bg-1-1-700x660-1-50x50.jpg 50w, https://consulting.stylemixthemes.com/miami/wp-content/uploads/sites/49/2021/01/statistics_bg-1-1-700x660-1-320x320.jpg 320w, https://consulting.stylemixthemes.com/miami/wp-content/uploads/sites/49/2021/01/statistics_bg-1-1-700x660-1-300x300.jpg 300w, https://consulting.stylemixthemes.com/miami/wp-content/uploads/sites/49/2021/01/statistics_bg-1-1-700x660-1-100x100.jpg 100w" sizes="(max-width: 150px) 100vw, 150px"></a>
                                    </div>
                                 </figure>
                                 <figure class="gallery-item">
                                    <div class="gallery-icon landscape">
                                       <a href="https://consulting.stylemixthemes.com/miami/2021/01/22/within-the-construction-industry-as-their-overdraft/news-grid-5-1110x550/"><img width="150" height="150" src="./news – Consulting WP – Miami – Insurance_files/news-grid-5-1110x550-1-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" srcset="https://consulting.stylemixthemes.com/miami/wp-content/uploads/sites/49/2016/01/news-grid-5-1110x550-1-150x150.jpg 150w, https://consulting.stylemixthemes.com/miami/wp-content/uploads/sites/49/2016/01/news-grid-5-1110x550-1-50x50.jpg 50w, https://consulting.stylemixthemes.com/miami/wp-content/uploads/sites/49/2016/01/news-grid-5-1110x550-1-320x320.jpg 320w, https://consulting.stylemixthemes.com/miami/wp-content/uploads/sites/49/2016/01/news-grid-5-1110x550-1-300x300.jpg 300w, https://consulting.stylemixthemes.com/miami/wp-content/uploads/sites/49/2016/01/news-grid-5-1110x550-1-100x100.jpg 100w" sizes="(max-width: 150px) 100vw, 150px"></a>
                                    </div>
                                 </figure>
                                 <figure class="gallery-item">
                                    <div class="gallery-icon landscape">
                                       <a href="https://consulting.stylemixthemes.com/miami/2021/01/30/seven-weeks-working-pro-bono-with-a-national-charity/news-list-1-1110x550/"><img width="150" height="150" src="./news – Consulting WP – Miami – Insurance_files/news-list-1-1110x550-1-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" srcset="https://consulting.stylemixthemes.com/miami/wp-content/uploads/sites/49/2016/01/news-list-1-1110x550-1-150x150.jpg 150w, https://consulting.stylemixthemes.com/miami/wp-content/uploads/sites/49/2016/01/news-list-1-1110x550-1-50x50.jpg 50w, https://consulting.stylemixthemes.com/miami/wp-content/uploads/sites/49/2016/01/news-list-1-1110x550-1-320x320.jpg 320w, https://consulting.stylemixthemes.com/miami/wp-content/uploads/sites/49/2016/01/news-list-1-1110x550-1-300x300.jpg 300w, https://consulting.stylemixthemes.com/miami/wp-content/uploads/sites/49/2016/01/news-list-1-1110x550-1-100x100.jpg 100w" sizes="(max-width: 150px) 100vw, 150px"></a>
                                    </div>
                                 </figure>
                                 <figure class="gallery-item">
                                    <div class="gallery-icon landscape">
                                       <a href="https://consulting.stylemixthemes.com/miami/contact-us/building-1/"><img width="150" height="150" src="./news – Consulting WP – Miami – Insurance_files/building-1-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" srcset="https://consulting.stylemixthemes.com/miami/wp-content/uploads/sites/49/2021/01/building-1-150x150.jpg 150w, https://consulting.stylemixthemes.com/miami/wp-content/uploads/sites/49/2021/01/building-1-50x50.jpg 50w, https://consulting.stylemixthemes.com/miami/wp-content/uploads/sites/49/2021/01/building-1-320x320.jpg 320w, https://consulting.stylemixthemes.com/miami/wp-content/uploads/sites/49/2021/01/building-1-300x300.jpg 300w, https://consulting.stylemixthemes.com/miami/wp-content/uploads/sites/49/2021/01/building-1-100x100.jpg 100w" sizes="(max-width: 150px) 100vw, 150px"></a>
                                    </div>
                                 </figure>
                                 <figure class="gallery-item">
                                    <div class="gallery-icon landscape">
                                       <a href="https://consulting.stylemixthemes.com/miami/works/focus-on-core-delivers-growth-for-retailer-2/work-2-360x190/"><img width="150" height="150" src="./news – Consulting WP – Miami – Insurance_files/work-2-360x190-1-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" srcset="https://consulting.stylemixthemes.com/miami/wp-content/uploads/sites/49/2019/11/work-2-360x190-1-150x150.jpg 150w, https://consulting.stylemixthemes.com/miami/wp-content/uploads/sites/49/2019/11/work-2-360x190-1-50x50.jpg 50w, https://consulting.stylemixthemes.com/miami/wp-content/uploads/sites/49/2019/11/work-2-360x190-1-100x100.jpg 100w" sizes="(max-width: 150px) 100vw, 150px"></a>
                                    </div>
                                 </figure>
                                 <figure class="gallery-item">
                                    <div class="gallery-icon landscape">
                                       <a href="https://consulting.stylemixthemes.com/miami/works/applying-commercial-excellence-in-chemicals/our-work-4-1-350x195/"><img width="150" height="150" src="./news – Consulting WP – Miami – Insurance_files/our-work-4-1-350x195-1-150x150.jpg" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" srcset="https://consulting.stylemixthemes.com/miami/wp-content/uploads/sites/49/2016/01/our-work-4-1-350x195-1-150x150.jpg 150w, https://consulting.stylemixthemes.com/miami/wp-content/uploads/sites/49/2016/01/our-work-4-1-350x195-1-50x50.jpg 50w, https://consulting.stylemixthemes.com/miami/wp-content/uploads/sites/49/2016/01/our-work-4-1-350x195-1-100x100.jpg 100w" sizes="(max-width: 150px) 100vw, 150px"></a>
                                    </div>
                                 </figure>
                              </div>
                           </aside>
                           <aside id="text-4" class="widget widget_text">
                              <h5 class="widget_title">But first, there’s something different…</h5>
                              <div class="textwidget">
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                              </div>
                           </aside>
                        </div>
                     </div>
                  </div>
               </div>
               <!--.container-->
            </div>
            <!--#main-->

            <?php 
            get_footer()
             ?>
