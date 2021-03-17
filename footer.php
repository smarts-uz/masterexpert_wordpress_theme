  <footer id="footer" class="stm_footer style_3">
            <div class="container footer-top">
               <div class="row">
                  <div class="col-md-6">
                     <div class="footer_logo">
                      <img src="<?php echo get_template_directory_uri() ?>/assets/outlined-logo.png">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="socials">
                        <ul>
                           <li>
                              <a href="https://www.facebook.com/masterexpert.uz" target="_blank" class="social-facebook">
                              <i class="fa fa-facebook"></i>
                              </a>
                           </li>
                           <li>
                              <a href="https://www.facebook.com/masterexpert.uz" target="_blank" class="social-twitter">
                              <i class="fa fa-twitter"></i>
                              </a>
                           </li>
                           <li>
                              <a href="https://www.facebook.com/masterexpert.uz" target="_blank" class="social-instagram">
                              <i class="fa fa-instagram"></i>
                              </a>
                           </li>
                           <li>
                              <a href="https://www.facebook.com/masterexpert.uz" target="_blank" class="social-youtube">
                              <i class="fa fa-youtube"></i>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="widgets_row">
               <div class="container">
                  <div class="footer_widgets">

                     <div class="row">
                        <ul class="nav">
                          <?php dynamic_sidebar( 'bottom_sidebar' ); ?>
                           <li>
                               <h4 class="widget_title no_stripe">Последние новости</h4>
                              <ul id="menu-quick-links" class="menu">
                                    <?php 
                                             
                                                 // параметры по умолчанию
                                                $posts = get_posts( array(
                                                   'numberposts' => 5,
                                                   'category'    => 0,
                                                   'orderby'     => 'date',
                                                   'order'       => 'DESC',
                                                   'post_type'   => 'news',
                                                   'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                                                ) );


                                                foreach( $posts as $post ){
                                                   setup_postdata($post);
                                                   ?>
                                    <li id="menu-item-7666" class="menu-item menu-item-type-post_type_archive menu-item-object-stm_event menu-item-7666"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
                                       <?php
                                             }
                                             wp_reset_postdata(); // сброс
                                        ?>
                                    
                                 </ul>
                           </li>
                        </ul>

                     </div>


                  </div>
               </div>
            </div>
         </footer>
      </div>
   
     
     <?php 
     wp_footer()
      ?>
   </body>
  
</html>