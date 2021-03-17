<?php 
	/*
	Template name: Новости категория
	
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
                           <span property="name">Новости</span>
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
                              <ul class="post_list_ul no-paginate only_news">

                                              <?php 
                                                 // параметры по умолчанию
                                                $posts = get_posts( array(
                                                   'numberposts' => -1,
                                                   'category'    => 0,
                                                   'orderby'     => 'date',
                                                   'order'       => 'ASC',
                                                   'post_type'   => 'news',
                                                   'category' => '-3',
                                                   'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                                                ) );


                                                foreach( $posts as $post ){
                                                   setup_postdata($post);

                                              // $args = array('post_type' => 'news');
                                              // $query = new WP_Query($args);
                                              // while($query -> have_posts()) :$query -> the_post();
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
                                                   Читать полностью<i class="fa fa-chevron-right"></i>
                                                   </a>
                                                </div>
                                             </li>
                                              
                                 <?php
                                //  endwhile;
                                    }
                                    wp_reset_postdata(); // сброс
                                  ?>

                                
                           </div>
                        </div>
                    
                     </div>
                   
                       <!-- right-sidebar started -->
                               <?php get_template_part( 'template-parts/right-sidebar-news', get_post_type() );  ?>
                        <!-- right-sidebar ended -->

                  </div>
               </div>
               <!--.container-->
            </div>
            <!--#main-->


            <?php 
            get_footer()
             ?>
