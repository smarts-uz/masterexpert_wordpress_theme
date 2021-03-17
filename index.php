<?php 
	get_header()
 ?>
 <style>
 	.swiper-container2 {
 		width: 100%;
 		height: 100vh;
 	}
 	.swiper-container2 > .swiper-wrapper > .swiper-slide {
 		background-blend-mode: color-burn;
 		background-size: cover;
 		background-repeat: no-repeat;
 		border-radius: 0 30px 0 0;
 		 filter: blur(4px);
 	}

 </style>
			<div id="main">
			   <div class="container">
				  <div class="content-area">
					 <article id="post-1024" class="post-1024 page type-page status-publish hentry">
						<div class="entry-content">
						   <div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1611315786380 vc_row-no-padding" style="position: relative; left: -104.5px; box-sizing: border-box; width: 1349px;">
							  <div class="br-bot-left-lg overflowed wpb_column vc_column_container vc_col-sm-12">
								 <div class="vc_column-inner ">
									<div class="wpb_wrapper">
									   <div class="wpb_revslider_element wpb_content_element">
										   			 <div class="swiper-container2">
													    <div class="swiper-wrapper">
													    	   <?php 
				                                                 // параметры по умолчанию
				                                                $posts = get_posts( array(
				                                                   'numberposts' => -1,
				                                                   'category'    => 0,
				                                                   'orderby'     => 'date',
				                                                   'order'       => 'ASC',
				                                                   'post_type'   => 'sliders',
				                                                   'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
				                                                ) );

				                                                foreach( $posts as $post ){
				                                                   setup_postdata($post);
				                                                   ?>
				                                                  
															      	<div class="swiper-slide" 
														      			 style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>');">
															      	</div>
													     
														       <?php
				                                                   }
				                                                   wp_reset_postdata(); // сброс
				                                              ?>
													     
													    </div>
													    <!-- Add Scrollbar -->
													    <div class="swiper-scrollbar"></div>
													</div>
										   		
									   </div>
									</div>
								 </div>
							  </div>
						   </div>
						   <div class="vc_row-full-width vc_clearfix"></div>
						   <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid vc_custom_1611551946178" style="position: relative; left: -104.5px; box-sizing: border-box; width: 1349px; padding-left: 104.5px; padding-right: 104.5px;">
							  <div class="wpb_column vc_column_container vc_col-sm-12">
								 <div class="vc_column-inner ">
									<div class="wpb_wrapper">
									   <div class="stm_services style_8 cols_4">


										 <?php

										 // параметры по умолчанию
											$posts = get_posts( array(
												'numberposts' => 6,
												'category'    => 0,
												'orderby'     => 'date',
												'order'       => 'DESC',
												'post_type'   => 'services1',
												'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
											) );

											foreach( $posts as $post ){
												setup_postdata($post);
												?>

											  <div class="stm_service">
												 <div class="stm_service__icon">
													<?php the_field('icon_field'); ?>
												 </div>
												 <h3 class="stm_service__title">
													<a href="<?php the_permalink() ?>">
												   <?php the_title() ?> </a>
												 </h3>
												 <div class="stm_service__excerpt base_font_color">
													<p>
													<?php
													the_excerpt() ?>
												</p>
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
						   <div class="vc_row-full-width vc_clearfix"></div>
						   <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid br-top-right vc_custom_1611825982023 vc_row-has-fill" style="position: relative; left: -104.5px; box-sizing: border-box; width: 1349px; padding-left: 104.5px; padding-right: 104.5px;">
							  <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-xs-12">
								 <div class="vc_column-inner vc_custom_1611747504132">
									<div class="wpb_wrapper">
									   <div class="vc_custom_heading vc_custom_1611580710640 text_align_left title_no_stripe">
										  <h3 style="font-size: 40px;color: #ffffff;line-height: 50px;text-align: left;font-weight:600" class="consulting-custom-title">
											<?php the_field('third_block_title');  ?>
										  </h3>
									   </div>
									   <div class="vc_custom_heading vc_custom_1612187645969 text_align_left title_no_stripe">
										  <p style="font-size: 18px;color: rgba(255,255,255,0.7);line-height: 30px;text-align: left;font-weight:400" class="consulting-custom-title">
										  <?php the_field('third_block_excerpt') ?>
											</p>
									   </div>

											 <?php

										 // параметры по умолчанию
											$posts = get_posts( array(
												'numberposts' => 6,
												'category'    => 0,
												'orderby'     => 'date',
												'order'       => 'DESC',
												'post_type'   => 'pump',
												'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
											) );

											foreach( $posts as $post ){
												setup_postdata($post);
												?>



											   <div class="icon_box vc_custom_1612187671920 style_1 icon_left clearfix">
												  <div class="icon  font-color_custom font-color_base_bg" style="width:80px">
													<?php the_field('icon_field_ability'); ?>

												  </div>
												  <div class="icon_text">
													 <h5 style="font-size:20px" class="font-color_secondary no_stripe"><?php the_title() ?></h5>
													 <p>
													 <?php the_excerpt() ?>
													</p>
												  </div>
											   </div>
											
												<?php
											}

											wp_reset_postdata(); // сброс

										  ?>

									</div>
								 </div>
							  </div>
							  <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-xs-12">
								 <div class="vc_column-inner vc_custom_1611747493197">
									<div class="wpb_wrapper">
									   <div class="wpb_single_image wpb_content_element vc_align_left   br-bot-right overflowed">
										  <figure class="wpb_wrapper vc_figure">
											 <div class="vc_single_image-wrapper   vc_box_border_grey">
												<?php 

												$image = get_field('pump_image');

												if( !empty($image) ): ?>

													<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

												<?php endif; ?>
											 </div>
										  </figure>
									   </div>
									</div>
								 </div>
							  </div>
						   </div>
						   <div class="vc_row-full-width vc_clearfix"></div>
						   <div class="vc_row wpb_row vc_row-fluid vc_custom_1611636513351 vc_row-has-fill">
							  <div class="wpb_column vc_column_container vc_col-sm-12">
								 <div class="vc_column-inner ">
									<div class="wpb_wrapper">
									   <div class="vc_custom_heading vc_custom_1612158644941 text_align_center title_no_stripe">
										  <h3 style="font-size: 40px;text-align: center;font-weight:700" class="consulting-custom-title">
										 <?php the_field('fourth_block_title'); ?>
										</h3>
									   </div>
									   <div id="287892" class="steps_box disable-carousel">

										 <?php

										 // параметры по умолчанию
											$posts = get_posts( array(
												'numberposts' => 4,
												'category'    => 0,
												'orderby'     => 'date',
												'order'       => 'ASC',
												'post_type'   => 'how_this_work',
												'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
											) );

											foreach( $posts as $post ){
												setup_postdata($post);
												?>



											 <div class="item">
											 <div class="step_title"><?php the_title() ?></div>
											 <div class="step_description"><?php the_content() ?></div>
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
						   <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid vc_custom_1611642421604 vc_row-has-fill" style="position: relative; left: -104.5px; box-sizing: border-box; width: 1349px; padding-left: 104.5px; padding-right: 104.5px;">
							  <div class="wpb_column vc_column_container vc_col-sm-12">
								 <div class="vc_column-inner ">
									<div class="wpb_wrapper">
									   <div class="vc_custom_heading vc_custom_1612158637855 text_align_center title_no_stripe">
										  <h3 style="font-size: 40px;text-align: center;font-weight:700" class="consulting-custom-title">
											<?php
											the_field('fifth_bl_header');
											 ?>
										  </h3>
									   </div>
									   <div class="stm_zoom_grid_container">
										  <div class="stm_zoom_grid per_row_3">

											 <?php
											$posts = get_posts( array(
												'numberposts' => -1,
												'category'    => 0,
												'orderby'     => 'date',
												'order'       => 'ASC',
												'post_type'   => 'master_expert1',
												'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
											) );

											foreach( $posts as $post ){
												setup_postdata($post);
												?>

											 <div class="stm_zoom_grid__item">
												<div class="single_meeting">
												   <div class="image">
													  <a href="" class="<?php the_field('class_for_popups') ?>">
														<?php
														the_post_thumbnail()
														 ?>
													   </a>
												   </div>
												   <div class="info">
													  <div class="title">
														 <a href="<?php the_permalink() ?>">
															<h3><?php the_title() ?></h3>
														 </a>
													  </div>
													  <div class="zoom_date">
													   <?php the_excerpt() ?>
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
						   <div class="vc_row-full-width vc_clearfix"></div>
						    <?php wp_reset_postdata() ?>

						  <?php get_template_part( 'template-parts/goals', get_post_type() );  ?>

						   <div class="vc_row-full-width vc_clearfix"></div>
						   <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid fixed_bg vc_custom_1611826022574 vc_row-has-fill" style="position: relative; left: -104.5px; box-sizing: border-box; width: 1349px; padding-left: 104.5px; padding-right: 104.5px;">
							  <div class="wpb_column vc_column_container vc_col-sm-12">
								 <div class="vc_column-inner ">
									<div class="wpb_wrapper">
									   <div class="vc_row wpb_row vc_inner vc_row-fluid">
										  <div class="wpb_column vc_column_container vc_col-sm-12">
											 <div class="vc_column-inner">
												<div class="wpb_wrapper">
												   <div class="vc_custom_heading vc_custom_1611666556380 text_align_center title_no_stripe">
													  <h4 style="font-size: 40px;line-height: 50px;text-align: center;font-weight:400" class="consulting-custom-title">
														<!-- <mark>3000+</mark> -->
														 <?php the_field('seventh_block_title') ?>

														 <strong style="display: block"> <?php the_field('seventh_block_bold_title') ?></strong>

													  </h4>
												   </div>
												</div>
											 </div>
										  </div>
									   </div>
									   <div class="vc_row wpb_row vc_inner vc_row-fluid">

											 <?php
											$posts = get_posts( array(
												'numberposts' => 4,
												'category'    => 0,
												'orderby'     => 'date',
												'order'       => 'ASC',
												'post_type'   => 'counter',
												'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
											) );

											foreach( $posts as $post ){
												setup_postdata($post);
												?>

											<div class="wpb_column vc_column_container vc_col-sm-3">
											 <div class="vc_column-inner">
												<div class="wpb_wrapper">
												   <div class="stats_counter style_1 left ">
													  <div class="inner ">
														 <h3 class="no_stripe" id="counter_<?php the_field('countUniqName') ?>">0<span class="stats_counter_suffix"></span></h3>
														 <div class="counter_title"><?php the_title() ?></div>
													  </div>
												   </div>
												   <?php
												  $countMain = get_field('countMainVar');
												   $countDelay = get_field('countDelayVar');
													?>
												   <script type="text/javascript">
													  jQuery(document).ready(function ($) {
														var countMain = +'<?php echo $countMain ?>';
														var countDelay = +'<?php echo $countDelay ?>';
														  var counter_<?php the_field('countUniqName') ?> =
														  new countUp("counter_<?php the_field('countUniqName') ?>", 0, countMain, 0, countDelay, {
															  useEasing: true,
															  useGrouping: false,
															  prefix: '',
															  suffix: '<span class="stats_counter_suffix"></span>'
														  });
														  $(window).scroll(function () {
															  if ($("#counter_<?php the_field('countUniqName') ?>").is_on_screen()) {
																  counter_<?php the_field('countUniqName') ?>.
																  start();
															  }
														  });
													  });
												   </script>
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
						   <div class="vc_row-full-width vc_clearfix"></div>
						   <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid vc_custom_1611721102296 vc_row-has-fill" style="">
							  <div class="wpb_column vc_column_container vc_col-sm-12">
								 <div class="vc_column-inner ">
									<div class="wpb_wrapper">
									   <div class="vc_custom_heading vc_custom_1611729701740 text_align_center title_no_stripe">
										  <h3 style="font-size: 40px;text-align: center;font-weight:600" class="consulting-custom-title"><?php the_field('eight_block_title') ?></h3>
									   </div>
									   <!-- <div class="testimonials_carousel style_6 per_row_3 slick-initialized slick-slider" id="partners_carousel_603c79b5e704a"> -->
									   	<div class="swiper-container">
										  <div class="swiper-wrapper">
											 <!-- <div class="slick-track"> -->
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

														 	
												<div class="swiper-slide">
												   <div class="testimonials_box">
													  <div class="testimonials_box_media">
													  	<?php the_post_thumbnail() ?>
													  </div>
													  <div class="testimonials_box_text">
														 <div class="testimonials_box_text_name"><?php the_title() ?></div>
														 <div class="testimonials_box_text_decs">
															<?php the_excerpt() ?>
														 </div>
													  </div>
												   </div>
												   <div class="testimonials_box_append">
													  <p><?php the_content() ?></p>
												   </div>
												</div>



														<?php
														}
														wp_reset_postdata(); // сброс
														 ?>




												
											 <!-- </div> -->
										  </div>
										 
									   </div>
									    <div class="swiper-button-prev" style=""><i class="fa fa-chevron-left"></i></div>
										  <div class="swiper-button-next" style=""><i class="fa fa-chevron-right"></i></div>
									   <script type="text/javascript">
										  jQuery(document).ready(function ($) {
											  "use strict";
											  var partners_carousel_603c79b5e704a = $("#partners_carousel_603c79b5e704a");
											  var slickRtl = false;

											  if ($('body').hasClass('rtl')) {
												  slickRtl = true;
											  }


											  partners_carousel_603c79b5e704a.
											  slick({
												  rtl: slickRtl,
												  dots: false,
												  infinite: true,
												  arrows: true,prevArrow:"<div class=\"slick_prev\"><i class=\"fa fa-chevron-left\"></i></div>",nextArrow: "<div class=\"slick_next\"><i class=\"fa fa-chevron-right\"></i></div>",                    autoplaySpeed: 5000,
												  autoplay: false,
												  slidesToShow: 3,
												  cssEase: "cubic-bezier(0.455, 0.030, 0.515, 0.955)",
												  responsive: [
													  {
														  breakpoint: 769,
														  settings: {
															  slidesToShow: 1
														  }
													  }
												  ]
											  });
										  });
									   </script>
									</div>
								 </div>
							  </div>
						   </div>
						   <div class="vc_row-full-width vc_clearfix"></div>
						   <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid vc_custom_1611825906736 vc_row-has-fill" style="position: relative; left: -104.5px; box-sizing: border-box; width: 1349px; padding-left: 104.5px; padding-right: 104.5px;">
							  <div class="wpb_column vc_column_container vc_col-sm-3">
								 <div class="vc_column-inner ">
									<div class="wpb_wrapper"></div>
								 </div>
							  </div>
							  <div class="wpb_column vc_column_container vc_col-sm-6">
								 <div class="vc_column-inner ">
									<div class="wpb_wrapper">
									   <div class="vc_custom_heading vc_custom_1612163468620 text_align_center title_no_stripe">
										  <h3 style="font-size: 40px;color: #ffffff;line-height: 46px;text-align: center;font-weight:600" class="consulting-custom-title">
										  	<?php the_field('nineth_block_title') ?>
										  	
										  </h3>
									   </div>
									   <div class="vc_custom_heading vc_custom_1612258597095 text_align_center title_no_stripe">
										  <p style="font-size: 18px;color: #ffffff;line-height: 30px;text-align: center;font-weight:400" class="consulting-custom-title">
										  	<?php the_field('nineth_block_content') ?>
										  </p>
									   </div>
									   <div class="vc_btn3-container vc_btn3-center">
									   	<button class="pum-trigger popmake-500 vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-round vc_btn3-style-classic vc_btn3-color-theme_style_1" href="" title="" target="_blank">
									   		<?php the_field('nineth_block_btn_name') ?>
								   		</button>
									   	</div>
									</div>
								 </div>
							  </div>
							  <div class="wpb_column vc_column_container vc_col-sm-3">
								 <div class="vc_column-inner ">
									<div class="wpb_wrapper"></div>
								 </div>
							  </div>
						   </div>
						   <div class="vc_row-full-width vc_clearfix"></div>
						</div>
					 </article>
				  </div>
			   </div>
			   <!--.container-->
			</div>
			<!--#main-->
		 </div>
		 <!--.content_wrapper-->

	   <?php

	   get_footer()

		?>