
<?php 
	/*
	Template name: Отзывы страница
	
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
         <article id="post-324" class="post-324 page type-page status-publish hentry">
            <div class="entry-content">
               <div class="vc_row wpb_row vc_row-fluid vc_custom_1452077539315">
                  <div class="wpb_column vc_column_container vc_col-sm-12">
                     <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                           <div class="stm_testimonials cols_2 style_2">

                                    <?php
                                       $posts = get_posts( array(
                                          'numberposts' => -1,
                                          'category'    => 0,
                                          'orderby'     => 'date',
                                          'order'       => 'ASC',
                                          'post_type'   => 'testimonials',
                                          'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                                       ) );

                                       foreach( $posts as $post ){
                                          setup_postdata($post);
                                          ?>


                              <div class="item">
                                 <div class="testimonial">
                                   <?php the_content() ?>
                                    <i class="far fa-comments"></i>
                                 </div>
                                 <div class="testimonial-info clearfix">
                                    <div class="testimonial-image">
                                       <?php the_post_thumbnail() ?>
                                       
                                    <div class="testimonial-text">
                                       <div class="name"><?php the_title() ?></div>
                                       <div class="company">
                                         <?php the_excerpt() ?>                       
                                       </div>
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
         </article>
      </div>
   </div>
   <!--.container-->
</div>
</div>
<!--.content_wrapper-->

</div>
<!--#wrapper-->



<?php 
	get_footer()
 ?>