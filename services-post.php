
<?php 
	/*
	Template name: Услуги
	Template Post Type: services1
	
	*/
	get_header( 'post' )
 ?>
   <div id="main">
               <div class="page_title transparent disable_title">
                  <div class="container">
                     <div class="breadcrumbs">
                        <!-- Breadcrumb NavXT 6.4.0 -->
                        <span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="Go to Consulting WP - Miami - Insurance." href="<?php echo home_url(); ?>" class="home">Главная</a></span><span><i class="fa fa-angle-right"></i></span>
                        <span property="itemListElement" typeof="ListItem">
                           <a property="item" typeof="WebPage" title="Go to Services." href="<?php echo home_url('/services'); ?>" class="stm_service-root post post-stm_service"><span property="name">Услуги</span></a>
                           <meta property="position" content="2">
                        </span>
                        <span><i class="fa fa-angle-right"></i></span>
                        <span property="itemListElement" typeof="ListItem">
                           <span property="name"><?php the_title() ?></span>
                           <meta property="position" content="3">
                        </span>
                     </div>
                  </div>
               </div>
               <div class="container">
                  <div class="content-area">
                     <article id="post-571" class="post-571 stm_service type-stm_service status-publish has-post-thumbnail hentry">
                        <div class="entry-content consulting_elementor_wrapper">
                           <div class="vc_row wpb_row vc_row-fluid vc_custom_1452687555475">
                              <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-9 vc_col-md-9">
                                 <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                       <div class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1611997181345">
                                          <figure class="wpb_wrapper vc_figure">
                                             <div class="vc_single_image-wrapper vc_box_border_grey">
                                             	<?php 
                                             	the_post_thumbnail()
                                             	 ?>
                                             	
                                             </div>
                                          </figure>
                                       </div>
                                       <div class="vc_custom_heading text_align_left">
                                          <h2 style="text-align: left" class="consulting-custom-title"><?php the_title() ?></h2>
                                       </div>
                                       <div class="wpb_text_column wpb_content_element  vc_custom_1456123311085">
                                          <div class="wpb_wrapper">
                                                <?php the_content() ?>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>

                              <!-- right-sidebar started -->
                               <?php get_template_part( 'template-parts/right-sidebar', get_post_type() );  ?>
                              <!-- right-sidebar ended -->

                           </div>
                           
                           <div class="vc_row-full-width vc_clearfix"></div>
                        </div>
                     </article>
                     <!-- #post-## -->
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