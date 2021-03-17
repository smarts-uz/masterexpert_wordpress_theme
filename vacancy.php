
<?php 
	/*
	Template name: Вакансии
	
	*/
	get_header( 'post' )
 ?>
      
      <div id="wrapper">
         <div id="fullpage" class="content_wrapper">
          
            <div id="main">
               <div class="page_title transparent disable_title">
                  <div class="container">
                     <div class="breadcrumbs">
                        <!-- Breadcrumb NavXT 6.4.0 -->
                        <span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="Go to Consulting WP - Miami - Insurance." href="<?php echo home_url() ?>" class="home">Главная</a></span>
                        <span><i class="fa fa-angle-right"></i></span>
                        <span property="itemListElement" typeof="ListItem">
                          <span property="name"><?php the_title() ?></span>
                           <meta property="position" content="2">
                        </span>
                      
                     </div>
                  </div>
               </div>
               <div class="container">
                  <div class="content-area">
                     <article id="post-435" class="post-435 stm_careers type-stm_careers status-publish hentry">
                        <div class="entry-content consulting_elementor_wrapper">
                           <div class="vc_row wpb_row vc_row-fluid vc_custom_1452687555475">
                              <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-9 vc_col-md-9">
                                 <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                       <div class="vc_custom_heading text_align_left">
                                          <h2 style="text-align: left" class="consulting-custom-title"><?php the_title() ?></h2>
                                       </div>

                                     <?php the_content() ?>
                                     	

                                 		<?php 
		                                     // параметры по умолчанию
		                                    $posts = get_posts( array(
		                                       'numberposts' => -1,
		                                       'category'    => 0,
		                                       'orderby'     => 'date',
		                                       'order'       => 'ASC',
		                                       'post_type'   => 'vacancies',
		                                       'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
		                                    ) );

		                                    foreach( $posts as $post ){
		                                       setup_postdata($post);
		                                       ?>
		                                      
								      	<div class="vacancy_about_wr  vc_custom_1453112586637">
											<div class="about_vacantion">
											<div class="info">
												<div class="icon">
													<i class="fas fa-suitcase"></i>
												</div>
												<div class="text">Вакансия: <strong><?php the_field('vacancy_name') ?></strong></div>
											</div>
											<div class="info">
												<div class="icon">
													<i class="fas fa-atlas"></i>
												</div>
												<div class="text">Место расположения: <strong><?php the_field('vacancy_geo') ?></strong></div>
											</div>
											<div class="info">
												<div class="icon">
													<i class="fas fa-school"></i>
												</div>
												<div class="text">Образование: <strong><?php the_field('vacancy_edu') ?></strong></div>
											</div>
											<div class="info">
												<div class="icon">
													<i class="fas fa-wallet"></i>
												</div>
												<div class="text">Заработная плата: <strong><?php the_field('vacancy_salary') ?></strong></div>
											</div>
											</div>
										</div>

										<div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1453114022217">
											

										   <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1453114022217">

										   	<?php
											if( get_field('is_opportunities') ) {
											   ?>
										   	<div class="wpb_column vc_column_container vc_col-sm-6">
										      <div class="vc_column-inner">
										         <div class="wpb_wrapper">
										            <div class="wpb_text_column wpb_content_element  vc_custom_1456121948446">
										               <div class="wpb_wrapper">
										                  <h4 class="no_stripe">Возможности, которые вы получите с нами:</h4>
										                  <ul style="color: #222222; font-size: 13px; line-height: 22px;">
										                  		<?php the_field('vacancy_opportunities') ?>
										                  </ul>
										               </div>
										            </div>
										         </div>
										      </div>
										   </div>
											   <?php
											}
											?>

											<?php
											if( get_field('is_requirements') ) {
											   ?>
										   	<div class="wpb_column vc_column_container vc_col-sm-6">
										      <div class="vc_column-inner">
										         <div class="wpb_wrapper">
										            <div class="wpb_text_column wpb_content_element  vc_custom_1456121948446">
										               <div class="wpb_wrapper">
										                  <h4 class="no_stripe">Вашими основными задачами будут: </h4>
										                  <ul style="color: #222222; font-size: 13px; line-height: 22px;">
										                  		<?php the_field('vacancy_aims') ?>
										                  </ul>
										               </div>
										            </div>
										         </div>
										      </div>
										   </div>
											   <?php
											}
											?>

										      <div class="wpb_column vc_column_container vc_col-sm-6">
										         <div class="vc_column-inner">
										            <div class="wpb_wrapper">
										               <div class="wpb_text_column wpb_content_element  vc_custom_1456121948446">
										                  <div class="wpb_wrapper">
										                     <h4 class="no_stripe">Требования к соискателю:</h4>
										                     <ul style="color: #222222; font-size: 13px; line-height: 22px;">
										                     	<?php the_field('vacancy_requirements') ?> 
										                       <!--  <li>Закупка, учет, хранение канцелярский товаров, их инвентаризация и организация выдачи работникам;</li>
										                        <li>Документальный оборот: оформление, регистрация, а также хранение документов;</li>
										                        <li>Оформление платежных документов;</li>
										                        <li>Грамотно вести деловую переписку;</li>
										                        <li>Проводить телефонные переговоры с клиентами.</li> -->
										                     </ul>
										                  </div>
										               </div>
										            </div>
										         </div>
										      </div>
										      <div class="wpb_column vc_column_container vc_col-sm-6">
										         <div class="vc_column-inner">
										            <div class="wpb_wrapper">
										               <div class="wpb_text_column wpb_content_element  vc_custom_1456122016220">
										                  <div class="wpb_wrapper">
										                     <h4 class="no_stripe">Обязанности:</h4>
										                     <ul>
										                     	<?php the_field('vacancy_responsibility') ?>
										                      <!--   <li>Активно продавать наши услуги;</li>
										                        <li>Принимать и обрабатывать входящие обращения клиентов;</li>
										                        <li>Подбирать оптимальные кредитные программы банков для клиентов компании;</li>
										                        <li>Проводить переговоры, заключать договора с клиентами;</li>
										                        <li>Формировать и анализировать пакет документов, сопровождать клиента на всех этапах сотрудничества;</li>
										                        <li>Вести отчетность.</li> -->
										                     </ul>
										                  </div>
										               </div>
										            </div>
										         </div>
										      </div>
										      <div class="wpb_column vc_column_container vc_col-sm-6">
										         <div class="vc_column-inner">
										            <div class="wpb_wrapper">
										               <div class="wpb_text_column wpb_content_element  vc_custom_1456121948446">
										                  <div class="wpb_wrapper">
										                     <h4 class="no_stripe">Условия работы:</h4>
										                     <ul style="color: #222222; font-size: 13px; line-height: 22px;">
										                     	<?php the_field('vacancy_conditions') ?>
										                        <!-- <li>Взаимодействие с текущими клиентами и партнерами;</li>
										                        <li>Перспектива быстрого карьерного и профессионального роста;</li>
										                        <li>Офис, оборудованный всем необходимым для комфортной работы;</li>
										                        <li>График работы с 09:00-18:00;</li>
										                        <li>5 дневная рабочая неделя;</li>
										                        <li>Молодой и дружный коллектив.</li>
										                        <li>Трудоустройство согласно Трудовому кодексу.</li> -->
										                     </ul>
										                  </div>
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