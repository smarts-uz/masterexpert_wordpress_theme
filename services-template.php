<?php 
	/*
	Template name: Услуги категория
	
	*/
	get_header( 'post' )	
?>
 <div id="main">
               <div class="page_title">
                  <div class="container">
                     <div class="breadcrumbs">
                        <!-- Breadcrumb NavXT 6.4.0 -->
                        <span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="Go to Consulting WP - Miami - Insurance." href="<?php echo home_url(); ?>" class="home">Главная</a></span><span><i class="fa fa-angle-right"></i></span>
                        <span property="itemListElement" typeof="ListItem">
                           <span property="name"><?php the_title() ?></span>
                           <meta property="position" content="2">
                        </span>
                     </div>
                     <h1 class="h2"><?php the_title() ?></h1>
                  </div>
               </div>
               <div class="container">
                  <div class="content-area">
                     <article id="post-558" class="post-558 page type-page status-publish hentry">
                        <div class="entry-content">
                           <div class="vc_row wpb_row vc_row-fluid vc_custom_1452687555475">
                              <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-9 vc_col-md-9">
                                 <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                       <div class="stm_services style_1 cols_3">

                                       		 <?php 
                                       	 // параметры по умолчанию
											$posts = get_posts( array(
												'numberposts' => -1,
												'category'    => 0,
												'orderby'     => 'date',
												'order'       => 'ASC',
												'post_type'   => 'services1',
												'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
											) );

											foreach( $posts as $post ){
												setup_postdata($post);
												?>


	                                             <div class="item">
                                             <div class="item_wr">
                                                <div class="item_thumbnail">
                                                   <a href="<?php echo the_permalink() ?>">
                                                   	<?php 
	                                             	the_post_thumbnail()
	                                             	 ?>
                                                   </a>
                                                </div>
                                                <div class="content">
                                                   <h5><a href="<?php echo the_permalink() ?>"> <?php the_title() ?></a></h5>
                                                   <?php the_excerpt() ?>
                                                   <a class="read_more" href="<?php echo the_permalink() ?>">
                                                   <span>Посмотреть</span>
                                                   <i class="fa fa-chevron-right"></i>
                                                   </a>
                                                </div>
                                             </div>
                                          </div>

											    <?php
												}
												wp_reset_postdata(); // сброс
		                                      	 ?>


                                       

                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="wpb_column vc_column_container vc_col-sm-3 vc_hidden-sm vc_hidden-xs">
                                 <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                       <div class="stm_sidebar">
                                          <div class="vc_row wpb_row vc_row-fluid third_bg_color vc_custom_1452056597103">
                                             <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner vc_custom_1452056633692">
                                                   <div class="wpb_wrapper">

                                                         <ul class="nav">
                                                          <?php dynamic_sidebar( 'right_sidebar' ); ?>
                                                         </ul>
                                                      <div class="vc_btn3-container vc_btn3-inline"><button class="pum-trigger popmake-485 vc_general vc_btn3 vc_btn3-size-sm vc_btn3-shape-rounded vc_btn3-style-flat vc_btn3-icon-left vc_btn3-color-white"><i class="vc_btn3-icon fa fa-phone-square"></i> получить консультацию</button></div>

                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="vc_row wpb_row vc_row-fluid vc_custom_1451998133493">
                                             <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                   <div class="wpb_wrapper">
                                                      <div class="vc_btn3-container vc_btn3-left vc_custom_1452752737760">
                                                         
                                                          <ul class="nav">
                                                             <?php dynamic_sidebar( 'right_sidebar_of_ppt' ); ?>
                                                         </ul>

                                                      </div>
                                                      <div class="stm_testimonials cols_1 style_1">

                                                         <?php 
                                                             // параметры по умолчанию
                                                            $posts = get_posts( array(
                                                               'numberposts' => 1,
                                                               'category'    => 0,
                                                               'orderby'     => 'date',
                                                               'order'       => 'DESC',
                                                               'post_type'   => 'testimonials',
                                                               'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                                                            ) );


                                                            foreach( $posts as $post ){
                                                               setup_postdata($post);
                                                               ?>
                                                             <div class="item">
                                                            <div class="testimonial">
                                                               <p><?php //$content_full = get_the_content();
                                                                        //$content = mb_substr($content_full, 0, 300);
                                                                       // echo $content;
                                                                        the_content();
                                                                  ?></p>
                                                            </div>
                                                            <div class="testimonial-info clearfix">
                                                               <div class="testimonial-image">
                                                                  <?php the_post_thumbnail() ?>
                                                                </div>
                                                               <div class="testimonial-text">
                                                                  <div class="name"><?php the_title() ?></div>
                                                                  <div class="company">
                                                                    <?php the_excerpt() ?>                         
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <?php
                                                               }
                                                               wp_reset_postdata(); // сброс
                                                          ?>

                                                      </div>
                                                      <div class="vc_wp_posts wpb_content_element">
                                                         <aside class="widget widget_recent_entries">
                                                            <h5 class="widget_title">Последние новости</h5>
                                                            <ul>
                                                                 <?php 
                                                                      // параметры по умолчанию
                                                                     $posts = get_posts( array(
                                                                        'numberposts' => 2,
                                                                        'category'    => 0,
                                                                        'order'       => 'DESC',
                                                                        'post_type'   => 'news',
                                                                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                                                                     ) );


                                                                     foreach( $posts as $post ){
                                                                        setup_postdata($post);
                                                                        ?>
                                                               <li>
                                                                  <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                                                                  <span class="post-date"><?php the_time('j F Y'); ?></span>
                                                               </li>

                                                                <?php
                                                                  }
                                                                  wp_reset_postdata(); // сброс
                                                                ?>

                                                            </ul>
                                                         </aside>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </article>
                  </div>
               </div>
               <!--.container-->
            </div>

            <?php 
            get_footer()
             ?>
