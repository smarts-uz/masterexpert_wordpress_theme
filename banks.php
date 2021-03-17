
<?php 
	/*
	Template name: Банки страница
	
	*/
	get_header( 'post' )
 ?>
   <style>
         button:focus {
            outline: none
         }

           .wrapper {
           max-width: 1576px;
           width: 100%;
           margin: auto;
           background: #002e5b;
           border-radius: 0;
           box-shadow: 0px 5px 15px rgba(0, 0, 0, .1);
         }

         .buttonWrapper {
           display: flex;
           flex-flow: row wrap;
           justify-content: center;
         }

         button {
           letter-spacing: 1px;
           border: none;
           padding: 10px;
           background-color: #002e5b;
           color: #fff;
           font-size: 18px;
           cursor: pointer;
           transition: 0.5s;
           font-family: sans-serif;
         }


         button.active {
           background: #5073B6;
         }

        /* .active {
           background-color: #1bcb81;
         }*/

         p {
           text-align: left;
           padding: 10px;
         }

         .vc_tta-panel-body {
           display: none;
           padding: 20px 30px;
         }

         .vc_tta-panel-body.active {
           display: block;
         }
         .stm_contacts_widget.vc_custom_1612145879447.overlay_3.style_1 {
            padding: 10px;
         }
         .stm_contacts_widget.vc_custom_1612145879447.overlay_3.style_1 ul {
            color: #fff;
            list-style: none;
         }

         .stm_contacts_widget.vc_custom_1612145879447.overlay_3.style_1 ul li {
            display: flex;
            align-items: center;
         }
         .stm_contacts_widget h4 {
            text-align: center; 
            font-weight: 400;
         }
         .stm_contacts_widget ul {
            display: flex;
            flex-direction: column;
         }
         .comment-body .comment-text ul, .wpb_text_column ul {
                padding: 0 0 0 10px;
         }

   </style>
   <div id="main">
               <div class="page_title transparent disable_title">
                  <div class="container">
                     <div class="breadcrumbs">
                        <!-- Breadcrumb NavXT 6.4.0 -->
                        <span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="Go to Consulting WP - Miami - Insurance." href="<?php echo home_url(); ?>" class="home">Главная</a></span><span><i class="fa fa-angle-right"></i></span>
                        <span property="itemListElement" typeof="ListItem">
                           <span property="name">Полезная информация</span>
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
                              <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-12 vc_col-md-12">
                                 <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                       <div class="vc_custom_heading text_align_left">
                                          <h2 style="text-align: left" class="consulting-custom-title"><?php the_title() ?></h2>
                                       </div>
                                       <div class="wpb_text_column wpb_content_element  vc_custom_1456123311085">
                                          <div class="wpb_wrapper">
                                                   <div class="wrapper">
                                                     <div class="buttonWrapper">
                                                      
                                                          
                                                          <?php
                                                         $posts = get_posts( array(
                                                            'numberposts' => -1,
                                                            'category'    => 0,
                                                            'orderby'     => 'date',
                                                            'order'       => 'ASC',
                                                            'post_type'   => 'banks',
                                                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                                                         ) );

                                                         foreach( $posts as $post ){
                                                            setup_postdata($post);
                                                            ?>

                                                             <button class="tab-button" data-id="<?php the_field('bank_id') ?>"><?php the_title() ?></button>

                                                               <?php
                                                               }
                                                               wp_reset_postdata(); // сброс
                                                              ?>

                                                     </div>
                                                     <div class="contentWrapper">
                                                       <?php
                                                         $posts = get_posts( array(
                                                            'numberposts' => -1,
                                                            'category'    => 0,
                                                            'orderby'     => 'date',
                                                            'order'       => 'ASC',
                                                            'post_type'   => 'banks',
                                                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                                                         ) );

                                                         foreach( $posts as $post ){
                                                            setup_postdata($post);
                                                            ?>

                                                       

                                                             <div class="vc_tta-panel-body" id="<?php the_field('bank_id') ?>">
                                                               <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1452504967583">
                                                                  <div class="wpb_column vc_column_container vc_col-sm-4">
                                                                     <div class="vc_column-inner">
                                                                        <div class="wpb_wrapper">
                                                                           <div class="wpb_single_image wpb_content_element vc_align_left">
                                                                              <figure class="wpb_wrapper vc_figure">
                                                                                 <div class="vc_single_image-wrapper vc_box_border_grey">
                                                                                    <?php the_post_thumbnail() ?>
                                                                                 </div>
                                                                              </figure>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                                  <div class="wpb_column vc_column_container vc_col-sm-4">
                                                                     <div class="vc_column-inner">
                                                                        <div class="wpb_wrapper">
                                                                           <div class="wpb_gmaps_widget wpb_content_element">
                                                                              <div class="wpb_wrapper">
                                                                                 <div class="wpb_map_wraper">
                                                                                     <?php the_field('geo_gmap_bank') ?>
                                                                                 </div>
                                                                              </div>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                                  <div class="wpb_column vc_column_container vc_col-sm-4">
                                                                     <div class="vc_column-inner">
                                                                        <div class="wpb_wrapper">
                                                                           <div class="stm_contacts_widget vc_custom_1612145879447 overlay_3 style_1">
                                                                              <h4 class="no_stripe">Контакты банка</h4>
                                                                              <ul>
                                                                                 <li>
                                                                                    <div class="icon"><i class="far fa-id-badge"></i></div>
                                                                                    <div class="text">
                                                                                      <?php the_field('license_bank') ?>
                                                                                    </div>
                                                                                 </li>
                                                                                   <li>
                                                                                    <div class="icon"><i class="fas fa-phone-square-alt"></i></div>
                                                                                    <div class="text">
                                                                                      <?php the_field('tel_bank') ?>
                                                                                    </div>
                                                                                 </li>
                                                                                   <li>
                                                                                    <div class="icon"><i class="fas fa-headset"></i></div>
                                                                                    <div class="text">
                                                                                      <?php the_field('private_tel_bank') ?>
                                                                                    </div>
                                                                                 </li>
                                                                                   <li>
                                                                                    <div class="icon"><i class="fas fa-fax"></i></div>
                                                                                    <div class="text">
                                                                                      <?php the_field('fax_bank') ?>
                                                                                    </div>
                                                                                 </li>
                                                                                   <li>
                                                                                    <div class="icon"><i class="fas fa-asterisk"></i></div>
                                                                                    <div class="text">
                                                                                       <a href="<?php the_field('site_bank') ?>" target="_blank">
                                                                                           <?php the_field('site_bank') ?>
                                                                                       </a>
                                                                                    </div>
                                                                                 </li>
                                                                                 <li>
                                                                                    <div class="icon"><i class="far fa-building"></i></div>
                                                                                    <div class="text">
                                                                                        <?php the_field('address_bank') ?>
                                                                                    </div>
                                                                                 </li>
                                                                              </ul>
                                                                           </div>
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
                                 </div>
                              </div>

                             <!-- right-sidebar started -->
                               <?php // get_template_part( 'template-parts/right-sidebar', get_post_type() );  ?>
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

   
           <script>
        const tabs = document.querySelector(".wrapper");
        const tabButton = document.querySelectorAll(".tab-button");
        const contents = document.querySelectorAll(".vc_tta-panel-body");

        tabs.onclick = e => {
        const id = e.target.dataset.id;
        if (id) {
            tabButton.forEach(btn => {
            btn.classList.remove("active");
            });
            e.target.classList.add("active");

            contents.forEach(content => {
            content.classList.remove("active");
            });
            const element = document.getElementById(id);
            element.classList.add("active");
        }
    }

        const mapWraper = document.querySelectorAll('.wpb_map_wraper');
           mapWraper.forEach(item => {
             const frameMapWraper = item.querySelector('iframe');
                 frameMapWraper.setAttribute('height', '330');
                 frameMapWraper.style.cssText = `pointer-events: none`;
           });

           const singleImageWrapper = document.querySelectorAll('.vc_single_image-wrapper');
                 singleImageWrapper.forEach(item => {
                   const image = item.querySelector('img');
                     image.style.cssText = `height: 330px`;
                 });
    </script>
    

<?php 
	get_footer()
 ?>