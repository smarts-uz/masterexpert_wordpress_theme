
<?php 
	/*
	Template name: Наша команда страница
	
	*/
	get_header( 'post' )
 ?>
 <style>
    .staff_info {
      text-align: center;
    }
    .read_more i {
      font-size: 24px;
    }
    .staff_info p {
      margin-bottom: 5px;
    }
 </style>
   <div id="main">
               <div class="page_title transparent disable_title">
                  <div class="container">
                     <div class="breadcrumbs">
                        <!-- Breadcrumb NavXT 6.4.0 -->
                        <span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="Go to Consulting WP - Miami - Insurance." href="<?php echo home_url(); ?>" class="home">Главная</a></span><span><i class="fa fa-angle-right"></i></span>
                        <span property="itemListElement" typeof="ListItem">
                           <span property="name"><?php the_title() ?></span>
                           <meta property="position" content="3">
                        </span>
                     </div>
                  </div>
               </div>
               <div class="container">
                  <div class="content-area">
                     <article id="post-462" class="post-462 page type-page status-publish hentry">
                        <div class="entry-content">
                           <div class="vc_row wpb_row vc_row-fluid vc_custom_1451991003825">
                              <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-9 vc_col-md-9 add-mobile-space">
                                 <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                       <div class="vc_custom_heading vc_custom_1452247174165 text_align_left">
                                          <h2 style="text-align: left" class="consulting-custom-title"><?php the_title() ?></h2>
                                       </div>
                                       <div class="staff_list grid cols_3 img_default">
                                          <ul class="">

                                              <?php 
                                             
                                                 // параметры по умолчанию
                                                $posts = get_posts( array(
                                                   'numberposts' => -1,
                                                   'category'    => 0,
                                                   'orderby'     => 'date',
                                                   'order'       => 'ASC',
                                                   'post_type'   => 'our_command',
                                                   'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                                                ) );


                                                foreach( $posts as $post ){
                                                   setup_postdata($post);
                                                   ?>

                                             <li>
                                                <div class="staff_image">
                                                  
                                                      <?php the_post_thumbnail() ?>
                                               
                                                 
                                                </div>
                                                <div class="staff_info">
                                                   <h4 class="no_stripe secondary_font_color_hv text_decoration_none">
                                                     <?php the_title(); ?>
                                                   </h4>
                                                   <div class="staff_department">
                                                     <?php the_excerpt() ?>                     
                                                   </div>
                                                   <?php the_content() ?>
                                                   <a class="read_more" href="mailto:<?php the_field('person_email') ?>">
                                                   <i class="far fa-envelope"></i>
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
                              </div>
                              <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-3 vc_col-md-3">
                                 <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                       <div class="stm_sidebar">
                                          <div class="vc_row wpb_row vc_row-fluid vc_custom_1451998133493">
                                             <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                   <div class="wpb_wrapper">
                                                      <div class="vc_wp_custommenu wpb_content_element mb-30"></div>
                                                      <div class="vc_btn3-container vc_btn3-left"><button class="vc_general vc_btn3 vc_btn3-size-lg vc_btn3-shape-rounded vc_btn3-style-flat vc_btn3-block vc_btn3-icon-left vc_btn3-color-theme_style_1"><i class="vc_btn3-icon fa fa-file-pdf-o"></i> Company presentation</button></div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="vc_row wpb_row vc_row-fluid third_bg_color vc_custom_1452056597103">
                                             <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner vc_custom_1452056633692">
                                                   <div class="wpb_wrapper">
                                                      <div class="vc_custom_heading vc_custom_1612169530843 text_align_left">
                                                         <div style="font-size: 16px;color: #002e5b;text-align: left;font-weight:700" class="consulting-custom-title">How can we help you?</div>
                                                      </div>
                                                      <div class="wpb_text_column wpb_content_element  vc_custom_1452575288633">
                                                         <div class="wpb_wrapper">
                                                            <p><span style="font-size: 13px; line-height: 22px;">Contact us at the Consulting WP office nearest to you or submit a business inquiry online.</span></p>
                                                         </div>
                                                      </div>
                                                      <div class="vc_btn3-container vc_btn3-inline"><button class="vc_general vc_btn3 vc_btn3-size-sm vc_btn3-shape-rounded vc_btn3-style-flat vc_btn3-icon-left vc_btn3-color-white"><i class="vc_btn3-icon fa fa-phone-square"></i> contacts</button></div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="vc_row wpb_row vc_row-fluid">
                                             <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                   <div class="wpb_wrapper">
                                                      <div class="stm_testimonials cols_1 style_1">
                                                         <div class="item">
                                                            <div class="testimonial">
                                                               <p>Consulting WP really helped us achieve our financial goals. The slick presentation along with fantastic readability ensures that our financial standing is stable.</p>
                                                            </div>
                                                            <div class="testimonial-info clearfix">
                                                               <div class="testimonial-image"><img width="50" height="50" src="./Our team grid – Consulting WP – Miami – Insurance_files/testimonial-2-1-320x320-1-50x50.jpg" class="attachment-consulting-image-50x50-croped size-consulting-image-50x50-croped wp-post-image" alt="" loading="lazy" srcset="https://consulting.stylemixthemes.com/miami/wp-content/uploads/sites/49/2016/01/testimonial-2-1-320x320-1-50x50.jpg 50w, https://consulting.stylemixthemes.com/miami/wp-content/uploads/sites/49/2016/01/testimonial-2-1-320x320-1-150x150@2x.jpg 300w, https://consulting.stylemixthemes.com/miami/wp-content/uploads/sites/49/2016/01/testimonial-2-1-320x320-1-150x150.jpg 150w, https://consulting.stylemixthemes.com/miami/wp-content/uploads/sites/49/2016/01/testimonial-2-1-320x320-1-100x100.jpg 100w, https://consulting.stylemixthemes.com/miami/wp-content/uploads/sites/49/2016/01/testimonial-2-1-320x320-1.jpg 320w" sizes="(max-width: 50px) 100vw, 50px"></div>
                                                               <div class="testimonial-text">
                                                                  <div class="name">Amanda Seyfried</div>
                                                                  <div class="company">
                                                                     Sales &amp; Marketing, Alien Ltd.                            
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
                                 </div>
                              </div>
                           </div>
                        </div>
                     </article>
                  </div>
               </div>
               <!--.container-->
            </div>
            <!--#main-->
         </div>
         <!--.content_wrapper-->
  
      </div>
      <!--#wrapper-->



<?php 
	get_footer()
 ?>