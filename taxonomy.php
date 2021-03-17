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

                              <!-- right-sidebar started -->
                               <?php get_template_part( 'template-parts/right-sidebar-news', get_post_type() );  ?>
                               <!-- right-sidebar ended -->

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
