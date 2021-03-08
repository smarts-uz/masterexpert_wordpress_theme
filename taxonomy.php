<?php 

	get_header( 'post' )	
?>
   <style>
      .content h5 {
         margin-bottom: 5px;
      }
      .content small {
         display: flex;
         align-items: center;
      }
      .content small p {
         margin-bottom: 0;
      }
   </style>
 <div id="main">
               <div class="page_title">
                  <div class="container">
                     <div class="breadcrumbs">
                        <!-- Breadcrumb NavXT 6.4.0 -->
                        <span typeof="v:Breadcrumb">
                           <a rel="v:url" property="v:title" title="Go to Consulting WP - Miami - Insurance." href="<?php echo home_url(); ?>" class="home">Главная</a>
                        </span><span><i class="fa fa-angle-right"></i></span>
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

                                     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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
                                                   <small>
                                                      <p>Категория: </p>
                                                   <span> <?php the_terms( get_the_ID(), 'news_articles', '', ', ', '') ?></span>
                                                   </small>
                                                   <?php 
	                                                the_excerpt() ?>
                                                   <a class="read_more" href="<?php echo the_permalink() ?>">
                                                   <span>Посмотреть</span>
                                                   <i class="fa fa-chevron-right"></i>
                                                   </a>
                                                </div>
                                             </div>
                                          </div>
                                          <a href=""><?php next_posts_link() ?></a>
									<?php endwhile; else : ?>
										<p>Записей нет.</p>

									<?php endif; ?>


	                                            

											  


                                       

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
                                                      <div class="vc_custom_heading vc_custom_1612169907318 text_align_left">
                                                         <div style="font-size: 16px;color: #002e5b;text-align: left;font-weight:700" class="consulting-custom-title">how can we help you?</div>
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
                                          <div class="vc_row wpb_row vc_row-fluid vc_custom_1451998133493">
                                             <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                   <div class="wpb_wrapper">
                                                      <div class="vc_btn3-container vc_btn3-left vc_custom_1452752737760"><button class="vc_general vc_btn3 vc_btn3-size-lg vc_btn3-shape-rounded vc_btn3-style-flat vc_btn3-block vc_btn3-icon-left vc_btn3-color-theme_style_1"><i class="vc_btn3-icon fa fa-file-pdf-o"></i> Company presentation</button></div>
                                                      <div class="stm_testimonials cols_1 style_1">
                                                         <div class="item">
                                                            <div class="testimonial">
                                                               <p>Consulting WP really helped us achieve our financial goals. The slick presentation along with fantastic readability ensures that our financial standing is stable.</p>
                                                            </div>
                                                            <div class="testimonial-info clearfix">
                                                               <div class="testimonial-image"><img width="50" height="50" src="./Services – Consulting WP – Miami – Insurance_files/testimonial-2-1-320x320-1-50x50.jpg" class="attachment-consulting-image-50x50-croped size-consulting-image-50x50-croped wp-post-image" alt="" loading="lazy" srcset="https://consulting.stylemixthemes.com/miami/wp-content/uploads/sites/49/2016/01/testimonial-2-1-320x320-1-50x50.jpg 50w, https://consulting.stylemixthemes.com/miami/wp-content/uploads/sites/49/2016/01/testimonial-2-1-320x320-1-150x150@2x.jpg 300w, https://consulting.stylemixthemes.com/miami/wp-content/uploads/sites/49/2016/01/testimonial-2-1-320x320-1-150x150.jpg 150w, https://consulting.stylemixthemes.com/miami/wp-content/uploads/sites/49/2016/01/testimonial-2-1-320x320-1-100x100.jpg 100w, https://consulting.stylemixthemes.com/miami/wp-content/uploads/sites/49/2016/01/testimonial-2-1-320x320-1.jpg 320w" sizes="(max-width: 50px) 100vw, 50px"></div>
                                                               <div class="testimonial-text">
                                                                  <div class="name">Amanda Seyfried</div>
                                                                  <div class="company">
                                                                     Sales &amp; Marketing, Alien Ltd.                            
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="vc_wp_posts wpb_content_element">
                                                         <aside class="widget widget_recent_entries">
                                                            <h5 class="widget_title">recent news</h5>
                                                            <ul>
                                                               <li>
                                                                  <a href="https://consulting.stylemixthemes.com/miami/2021/01/30/harvest-great-ideas-from-your-companys-best-assets/">Harvest great ideas from your company’s best assets</a>
                                                                  <span class="post-date">January 30, 2021</span>
                                                               </li>
                                                               <li>
                                                                  <a href="https://consulting.stylemixthemes.com/miami/2021/01/30/three-social-media-hacks-for-the-busy-entrepreneur/">Three Social Media Hacks for the Busy Entrepreneur</a>
                                                                  <span class="post-date">January 30, 2021</span>
                                                               </li>
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
