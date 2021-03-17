 <div class="wpb_column vc_column_container vc_col-sm-3 vc_hidden-sm vc_hidden-xs">
                                 <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                       <div class="stm_sidebar">
                                          <div class="vc_row wpb_row vc_row-fluid">
                                             <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                   <div class="wpb_wrapper">
                                                      <div class="vc_wp_custommenu wpb_content_element"></div>
                                                      <div class="vc_btn3-container vc_btn3-left vc_custom_1452752737760">
                                                         <ul class="nav">
                                                             <?php dynamic_sidebar( 'right_sidebar_of_ppt' ); ?>
                                                         </ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="vc_row wpb_row vc_row-fluid third_bg_color vc_custom_1452056597103">
                                             <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner vc_custom_1452056633692">
                                                   <div class="wpb_wrapper">
                                                      <ul class="nav">
                                                       <?php dynamic_sidebar( 'right_sidebar' ); ?>
                                                      </ul>
                                                      <div class="vc_btn3-container vc_btn3-inline"><button class="pum-trigger popmake-485 vc_general vc_btn3 vc_btn3-size-sm vc_btn3-shape-rounded vc_btn3-style-flat vc_btn3-icon-left vc_btn3-color-white">
                                                         <i class="vc_btn3-icon fa fa-phone-square"></i> получить консультацию
                                                      </button>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="vc_row wpb_row vc_row-fluid vc_custom_1451998133493">
                                             <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                   <div class="wpb_wrapper">
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
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>