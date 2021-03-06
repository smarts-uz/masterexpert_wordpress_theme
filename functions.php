<?php 
	
	if( function_exists('acf_add_options_page') ) {
			acf_add_options_page();
			acf_add_options_page_sub_page('Header');
			acf_add_options_page_sub_page('Footer');

			acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));

		}



	add_action('wp_enqueue_scripts', 'theme_styles');
	add_action('wp_enqueue_scripts', 'theme_scripts');
	add_theme_support( 'post-thumbnails' );
	add_action( 'after_setup_theme', 'myMenu');

	add_theme_support( 'custom-logo' );

	function myMenu(){
	register_nav_menus( [
		'header_menu' => 'Главное меню',
	] );
} 


	function theme_styles() {
		wp_enqueue_style('styles', get_stylesheet_uri());
		wp_enqueue_style('style-main', get_template_directory_uri() . '/assets/style.css', array(), time());
		wp_enqueue_style('style-swiper', 'https://unpkg.com/swiper/swiper-bundle.css');
		
	}

	function theme_scripts() {
		wp_enqueue_script('countdown_jquery', get_template_directory_uri() . '/assets/jquery.min.js', array(), false );
		wp_enqueue_script('stm_jquery.countdown-js', get_template_directory_uri() . '/assets/jquery.countdown.js', array(), false, true  );
		wp_enqueue_script('main_js', get_template_directory_uri() . '/assets/main.js', array(), false, true  );
		wp_enqueue_script('wc-cart-fragments-js', get_template_directory_uri() . '/assets/cart-fragments.min.js', array(), false, true  );
		wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/bootstrap.min.js', array(), false, true  );
		wp_enqueue_script('select2-js', get_template_directory_uri() . '/assets/select2.full.min.js', array(), false, true  );
		wp_enqueue_script('consulting-custom-js', get_template_directory_uri() . '/assets/custom.js', array(), false, true  );
		wp_enqueue_script('stm_hb_scripts-js', get_template_directory_uri() . '/assets/app.js', array(), false, true  );
		wp_enqueue_script('stm_hb_scripts_sticky-js', get_template_directory_uri() . '/assets/sticky.js', array(), false, true  );
		wp_enqueue_script('wp-embed-js', get_template_directory_uri() . '/assets/wp-embed.min.js', array(), false, true  );
		wp_enqueue_script('wpb_composer_front_js-js', get_template_directory_uri() . '/assets/js_composer_front.min.js', array(), false, true  );

		wp_enqueue_script('countUp-js', get_template_directory_uri() . '/assets/countUp.min.js', array(), false, true  );
		wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/slick.min.js' );
		wp_enqueue_script('jquery.cookie-js', get_template_directory_uri() . '/assets/jquery.cookie.min.js', array(), false, true  );

		wp_enqueue_script('js-swiper', 'https://unpkg.com/swiper/swiper-bundle.js', array(), false, true  );
		wp_enqueue_script('my-script', get_template_directory_uri() . '/assets/myScript.js', array(), false, true  );


		wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/9cf2cb994e.js', array(), false, true  );

	}


	add_action( 'init', 'register_post_types' );
			function register_post_types(){
				register_post_type( 'services1', [
					'label'  => null,
					'labels' => [
						'name'               => 'Услуги', // основное название для типа записи
						'singular_name'      => 'Услуга', // название для одной записи этого типа
						'add_new'            => 'Добавить услугу', // для добавления новой записи
						'add_new_item'       => 'Добавление услуги', // заголовка у вновь создаваемой записи в админ-панели.
						'edit_item'          => 'Редактирование услуги', // для редактирования типа записи
						'new_item'           => 'Новое услуга', // текст новой записи
						'view_item'          => 'Смотреть услугу', // для просмотра записи этого типа.
						'search_items'       => 'Искать в услугах', // для поиска по этим типам записи
						'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
						'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
						'parent_item_colon'  => '', // для родителей (у древовидных типов)
						'menu_name'          => 'Услуги', // название меню
					],
					'description'         => '',
					'public'              => true,
					'publicly_queryable'  => true, // зависит от public
					'exclude_from_search' => true, // зависит от public
					'show_ui'             => true, // зависит от public
					'show_in_nav_menus'   => true, // зависит от public
					'show_in_menu'        => true, // показывать ли в меню адмнки
					'show_in_admin_bar'   => true, // зависит от show_in_menu
					'show_in_rest'        => true, // добавить в REST API. C WP 4.7
					'rest_base'           => null, // $post_type. C WP 4.7
					'menu_position'       => 4,
					'menu_icon'           => 'dashicons-admin-customizer',
					//'capability_type'   => 'post',
					//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
					//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
					'hierarchical'        => true,
					'supports'            => [ 'title', 'editor', 'thumbnail', 'custom-fields', 'excerpt'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
					'taxonomies'          => [],
					'has_archive'         => false,
					'rewrite'             => true,
					'query_var'           => true,
				] );
			}

		add_action( 'init', 'register_post_types2' );
		function register_post_types2(){
			register_post_type( 'master_expert1', [
				'label'  => null,
				'labels' => [
					'name'               => 'Компаний', // основное название для типа записи
					'singular_name'      => 'Компания', // название для одной записи этого типа
					'add_new'            => 'Добавить компанию', // для добавления новой записи
					'add_new_item'       => 'Добавление компании', // заголовка у вновь создаваемой записи в админ-панели.
					'edit_item'          => 'Редактирование компании', // для редактирования типа записи
					'new_item'           => 'Новое компания', // текст новой записи
					'view_item'          => 'Смотреть компанию', // для просмотра записи этого типа.
					'search_items'       => 'Искать в компания', // для поиска по этим типам записи
					'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
					'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
					'parent_item_colon'  => '', // для родителей (у древовидных типов)
					'menu_name'          => 'Компании', // название меню
				],
				'description'         => '',
				'public'              => true,
				'publicly_queryable'  => true, // зависит от public
				'exclude_from_search' => true, // зависит от public
				'show_ui'             => true, // зависит от public
				'show_in_nav_menus'   => true, // зависит от public
				'show_in_menu'        => true, // показывать ли в меню адмнки
				'show_in_admin_bar'   => true, // зависит от show_in_menu
				'show_in_rest'        => true, // добавить в REST API. C WP 4.7
				'rest_base'           => null, // $post_type. C WP 4.7
				'menu_position'       => 5,
				'menu_icon'           => 'dashicons-buddicons-buddypress-logo',
				//'capability_type'   => 'post',
				//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
				//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
				'hierarchical'        => true,
				'supports'            => [ 'title', 'editor', 'thumbnail', 'custom-fields', 'excerpt'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
				'taxonomies'          => [],
				'has_archive'         => false,
				'rewrite'             => true,
				'query_var'           => true,
			] );
		}

		add_action( 'init', 'register_post_types3' );
		function register_post_types3(){
			register_post_type( 'pump', [
				'label'  => null,
				'labels' => [
					'name'               => 'Навыки', // основное название для типа записи
					'singular_name'      => 'Навык', // название для одной записи этого типа
					'add_new'            => 'Добавить навык', // для добавления новой записи
					'add_new_item'       => 'Добавление навыков', // заголовка у вновь создаваемой записи в админ-панели.
					'edit_item'          => 'Редактирование навыков', // для редактирования типа записи
					'new_item'           => 'Новые навыки', // текст новой записи
					'view_item'          => 'Смотреть навыки', // для просмотра записи этого типа.
					'search_items'       => 'Искать в навыки', // для поиска по этим типам записи
					'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
					'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
					'parent_item_colon'  => '', // для родителей (у древовидных типов)
					'menu_name'          => 'Навыки', // название меню
				],
				'description'         => '',
				'public'              => true,
				'publicly_queryable'  => true, // зависит от public
				'exclude_from_search' => true, // зависит от public
				'show_ui'             => true, // зависит от public
				'show_in_nav_menus'   => true, // зависит от public
				'show_in_menu'        => true, // показывать ли в меню адмнки
				'show_in_admin_bar'   => true, // зависит от show_in_menu
				'show_in_rest'        => true, // добавить в REST API. C WP 4.7
				'rest_base'           => null, // $post_type. C WP 4.7
				'menu_position'       => 6,
				'menu_icon'           => 'dashicons-image-filter',
				//'capability_type'   => 'post',
				//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
				//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
				'hierarchical'        => true,
				'supports'            => [ 'title', 'editor', 'thumbnail', 'custom-fields', 'excerpt'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
				'taxonomies'          => [],
				'has_archive'         => false,
				'rewrite'             => true,
				'query_var'           => true,
			] );
		}


		add_action( 'init', 'register_post_types4' );
		function register_post_types4(){
			register_post_type( 'how_this_work', [
				'label'  => null,
				'labels' => [
					'name'               => 'КЭР', // основное название для типа записи
					'singular_name'      => 'КЭР', // название для одной записи этого типа
					'add_new'            => 'Добавить КЭР', // для добавления новой записи
					'add_new_item'       => 'Добавление КЭР', // заголовка у вновь создаваемой записи в админ-панели.
					'edit_item'          => 'Редактирование КЭР', // для редактирования типа записи
					'new_item'           => 'Новые КЭР', // текст новой записи
					'view_item'          => 'Смотреть КЭР', // для просмотра записи этого типа.
					'search_items'       => 'Искать в КЭР', // для поиска по этим типам записи
					'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
					'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
					'parent_item_colon'  => '', // для родителей (у древовидных типов)
					'menu_name'          => 'КЭР', // название меню
				],
				'description'         => '',
				'public'              => true,
				'publicly_queryable'  => true, // зависит от public
				'exclude_from_search' => true, // зависит от public
				'show_ui'             => true, // зависит от public
				'show_in_nav_menus'   => true, // зависит от public
				'show_in_menu'        => true, // показывать ли в меню адмнки
				'show_in_admin_bar'   => true, // зависит от show_in_menu
				'show_in_rest'        => true, // добавить в REST API. C WP 4.7
				'rest_base'           => null, // $post_type. C WP 4.7
				'menu_position'       => 7,
				'menu_icon'           => 'dashicons-table-row-after',
				//'capability_type'   => 'post',
				//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
				//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
				'hierarchical'        => true,
				'supports'            => [ 'title', 'editor', 'thumbnail', 'custom-fields', 'excerpt'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
				'taxonomies'          => [],
				'has_archive'         => false,
				'rewrite'             => true,
				'query_var'           => true,
			] );
		}

		add_action( 'init', 'register_post_types5' );
		function register_post_types5(){
			register_post_type( 'counter', [
				'label'  => null,
				'labels' => [
					'name'               => 'Счётчики', // основное название для типа записи
					'singular_name'      => 'Счётчик', // название для одной записи этого типа
					'add_new'            => 'Добавить счётчики', // для добавления новой записи
					'add_new_item'       => 'Добавление счётчики', // заголовка у вновь создаваемой записи в админ-панели.
					'edit_item'          => 'Редактирование счётчики', // для редактирования типа записи
					'new_item'           => 'Новые счётчики', // текст новой записи
					'view_item'          => 'Смотреть счётчики', // для просмотра записи этого типа.
					'search_items'       => 'Искать в счётчики', // для поиска по этим типам записи
					'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
					'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
					'parent_item_colon'  => '', // для родителей (у древовидных типов)
					'menu_name'          => 'Счётчики', // название меню
				],
				'description'         => '',
				'public'              => true,
				'publicly_queryable'  => true, // зависит от public
				'exclude_from_search' => true, // зависит от public
				'show_ui'             => true, // зависит от public
				'show_in_nav_menus'   => true, // зависит от public
				'show_in_menu'        => true, // показывать ли в меню адмнки
				'show_in_admin_bar'   => true, // зависит от show_in_menu
				'show_in_rest'        => true, // добавить в REST API. C WP 4.7
				'rest_base'           => null, // $post_type. C WP 4.7
				'menu_position'       => 8,
				'menu_icon'           => 'dashicons-clipboard',
				//'capability_type'   => 'post',
				//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
				//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
				'hierarchical'        => true,
				'supports'            => [ 'title', 'editor', 'thumbnail', 'custom-fields', 'excerpt'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
				'taxonomies'          => [],
				'has_archive'         => false,
				'rewrite'             => true,
				'query_var'           => true,
			] );
		}

add_action( 'init', 'register_post_types6' );
		function register_post_types6(){
			register_post_type( 'testimonials', [
				'label'  => null,
				'labels' => [
					'name'               => 'Отзывы', // основное название для типа записи
					'singular_name'      => 'Отзыв', // название для одной записи этого типа
					'add_new'            => 'Добавить отзыв', // для добавления новой записи
					'add_new_item'       => 'Добавление отзыва', // заголовка у вновь создаваемой записи в админ-панели.
					'edit_item'          => 'Редактирование отзыва', // для редактирования типа записи
					'new_item'           => 'Новые отзывы', // текст новой записи
					'view_item'          => 'Смотреть отзыв', // для просмотра записи этого типа.
					'search_items'       => 'Искать в отзывах', // для поиска по этим типам записи
					'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
					'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
					'parent_item_colon'  => '', // для родителей (у древовидных типов)
					'menu_name'          => 'Отзывы', // название меню
				],
				'description'         => '',
				'public'              => true,
				'publicly_queryable'  => true, // зависит от public
				'exclude_from_search' => true, // зависит от public
				'show_ui'             => true, // зависит от public
				'show_in_nav_menus'   => true, // зависит от public
				'show_in_menu'        => true, // показывать ли в меню адмнки
				'show_in_admin_bar'   => true, // зависит от show_in_menu
				'show_in_rest'        => true, // добавить в REST API. C WP 4.7
				'rest_base'           => null, // $post_type. C WP 4.7
				'menu_position'       => 8,
				'menu_icon'           => 'dashicons-groups',
				//'capability_type'   => 'post',
				//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
				//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
				'hierarchical'        => true,
				'supports'            => [ 'title', 'editor', 'thumbnail', 'custom-fields', 'excerpt'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
				'taxonomies'          => [],
				'has_archive'         => false,
				'rewrite'             => true,
				'query_var'           => true,
			] );
		}

		add_action( 'init', 'register_post_types7' );
		function register_post_types7(){
			register_post_type( 'news', [
				'label'  => null,
				'labels' => [
					'name'               => 'Новости', // основное название для типа записи
					'singular_name'      => 'Новости', // название для одной записи этого типа
					'add_new'            => 'Добавить новости', // для добавления новой записи
					'add_new_item'       => 'Добавление новости', // заголовка у вновь создаваемой записи в админ-панели.
					'edit_item'          => 'Редактирование новости', // для редактирования типа записи
					'new_item'           => 'Новые новости', // текст новой записи
					'view_item'          => 'Смотреть новости', // для просмотра записи этого типа.
					'search_items'       => 'Искать в новости', // для поиска по этим типам записи
					'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
					'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
					'parent_item_colon'  => '', // для родителей (у древовидных типов)
					'menu_name'          => 'Новости', // название меню
				],
				'description'         => '',
				'public'              => true,
				'publicly_queryable'  => true, // зависит от public
				'exclude_from_search' => true, // зависит от public
				'show_ui'             => true, // зависит от public
				'show_in_nav_menus'   => true, // зависит от public
				'show_in_menu'        => true, // показывать ли в меню адмнки
				'show_in_admin_bar'   => true, // зависит от show_in_menu
				'show_in_rest'        => true, // добавить в REST API. C WP 4.7
				'rest_base'           => null, // $post_type. C WP 4.7
				'menu_position'       => 10,
				'menu_icon'           => 'dashicons-admin-site-alt',
				//'capability_type'   => 'post',
				//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
				//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
				'hierarchical'        => true,
				'supports'            => [ 'title', 'editor', 'thumbnail', 'custom-fields', 'excerpt'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
				'taxonomies'          => [],
				'has_archive'         => false,
				'rewrite'             => true,
				'query_var'           => true,
			] );
		}

