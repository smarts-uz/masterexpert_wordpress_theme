  <footer id="footer" class="stm_footer style_3">
            <div class="container footer-top">
               <div class="row">
                  <div class="col-md-6">
                     <div class="footer_logo">
                        <a href="<?php echo home_url(); ?>">
                        <?php the_custom_logo( $blog_id ); ?>
                        </a>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="socials">
                        <ul>
                           <li>
                              <a href="" target="_blank" class="social-facebook">
                              <i class="fa fa-facebook"></i>
                              </a>
                           </li>
                           <li>
                              <a href="" target="_blank" class="social-twitter">
                              <i class="fa fa-twitter"></i>
                              </a>
                           </li>
                           <li>
                              <a href="" target="_blank" class="social-instagram">
                              <i class="fa fa-instagram"></i>
                              </a>
                           </li>
                           <li>
                              <a href="" target="_blank" class="social-youtube">
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
                          <?php dynamic_sidebar( 'top_sidebar' ); ?>
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


                        <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                           <section id="text-2" class="widget widget_text">
                              <h4 class="widget_title no_stripe">ABOUT</h4>
                              <div class="textwidget">
                                 <p>Etsy sartorial godard wolf pok pok swag kale chips chia normcore, tbh tousled four loko woke. Ethical stumptown man braid franzen.</p>
                              </div>
                           </section>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                           <section id="text-3" class="widget widget_text">
                              <h4 class="widget_title no_stripe">CONTACT INFO</h4>
                              <div class="textwidget">
                               
                                 <p>Call-centre: 1 (323) 938-5798<br>
                                    Fax: 1 (888) 637-7262<br>
                                    Email: info@styleixthemes.com
                                 </p>
                                 <p>1840 E Garvey Avenue Street<br>
                                    West Covina, CA 91791, U.S.<br>
                                    Monday – Friday: 9:00am – 9:00pm
                                 </p>
                              </div>
                           </section>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                           <section id="nav_menu-2" class="widget widget_nav_menu">
                              <h4 class="widget_title no_stripe">QUICK LINKS</h4>
                              <div class="menu-quick-links-container">
                                 <ul id="menu-quick-links" class="menu">
                                    <li id="menu-item-7666" class="menu-item menu-item-type-post_type_archive menu-item-object-stm_event menu-item-7666"><a href="https://consulting.stylemixthemes.com/miami/events/">All Events</a></li>
                                    <li id="menu-item-7667" class="menu-item menu-item-type-post_type_archive menu-item-object-stm_staff menu-item-7667"><a href="https://consulting.stylemixthemes.com/miami/staff/">All Staff</a></li>
                                    <li id="menu-item-7668" class="menu-item menu-item-type-post_type_archive menu-item-object-stm_testimonials menu-item-7668"><a href="https://consulting.stylemixthemes.com/miami/testimonials/">All Testimonials</a></li>
                                    <li id="menu-item-7669" class="menu-item menu-item-type-post_type_archive menu-item-object-stm_portfolio menu-item-7669"><a href="https://consulting.stylemixthemes.com/miami/portfolio/">All Portfolio</a></li>
                                    <li id="menu-item-7670" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7670"><a href="https://consulting.stylemixthemes.com/miami/webinars/">Webinars</a></li>
                                    <li id="menu-item-7671" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7671"><a href="https://consulting.stylemixthemes.com/miami/cost-calculator/">Cost Calculator</a></li>
                                    <li id="menu-item-7672" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7672"><a href="https://consulting.stylemixthemes.com/miami/cases-grid/">Cases grid</a></li>
                                    <li id="menu-item-7673" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7673"><a href="https://consulting.stylemixthemes.com/miami/cases-list/">Cases list</a></li>
                                 </ul>
                              </div>
                           </section>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                           <section id="nav_menu-3" class="widget widget_nav_menu">
                              <h4 class="widget_title no_stripe">INFORMATION</h4>
                              <div class="menu-extra-links-container">
                                 <ul id="menu-extra-links" class="menu">
                                    <li id="menu-item-7675" class="menu-item menu-item-type-post_type_archive menu-item-object-stm_service menu-item-7675"><a href="https://consulting.stylemixthemes.com/miami/services/">All Services</a></li>
                                    <li id="menu-item-7676" class="menu-item menu-item-type-post_type_archive menu-item-object-stm_careers menu-item-7676"><a href="https://consulting.stylemixthemes.com/miami/careers_archive/">All Vacancies</a></li>
                                    <li id="menu-item-7677" class="menu-item menu-item-type-post_type_archive menu-item-object-product menu-item-7677"><a href="https://consulting.stylemixthemes.com/miami/shop/">All Products</a></li>
                                    <li id="menu-item-7678" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7678"><a href="https://consulting.stylemixthemes.com/miami/coming-soon/">Coming Soon</a></li>
                                    <li id="menu-item-7679" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7679"><a href="https://consulting.stylemixthemes.com/miami/faq/">FAQ</a></li>
                                    <li id="menu-item-7681" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7681"><a href="https://consulting.stylemixthemes.com/miami/company-overview/careers/">Careers</a></li>
                                    <li id="menu-item-7160" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7160"><a href="https://consulting.stylemixthemes.com/miami/company-overview/our-approach/">Our approach</a></li>
                                    <li id="menu-item-7663" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1024 current_page_item menu-item-7663"><a href="https://consulting.stylemixthemes.com/miami/" aria-current="page">Home</a></li>
                                 </ul>
                              </div>
                           </section>
                        </div> -->
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