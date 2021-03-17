<?php 
	
	add_action('wp_enqueue_scripts', 'theme_styles');
	add_action('wp_enqueue_scripts', 'theme_scripts');
	add_theme_support( 'post-thumbnails' );
	add_action( 'after_setup_theme', 'myMenu');

	add_theme_support( 'custom-logo' );

	add_action( 'widgets_init', 'register_my_widgets' );
	add_action( 'widgets_init', 'register_my_widgets2' );
	add_action( 'widgets_init', 'register_my_widgets3' );
	add_action( 'widgets_init', 'register_my_widgets4' );
	add_action( 'widgets_init', 'register_my_widgets5' );
	add_action( 'widgets_init', 'register_my_widgets6' );


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


	function register_my_widgets(){

	register_sidebar( array(
		'name'          => 'Bottom sidebar',
		'id'            => "bottom_sidebar",
		'description'   => 'Это нижний сайдбар',
	
	) );
}

	function register_my_widgets2(){

	register_sidebar( array(
		'name'          => 'Top sidebar',
		'id'            => "top_sidebar",
		'description'   => 'Это верхний сайдбар',
	
	) );
}

	function register_my_widgets3(){

	register_sidebar( array(
		'name'          => 'Right sidebar',
		'id'            => "right_sidebar",
		'description'   => 'Это правый сайдбар',
		'class'         => 'wpb_wrapper',
		
	) );
}

	function register_my_widgets4(){

		register_sidebar( array(
			'name'          => 'Right sidebar of presentation',
			'id'            => "right_sidebar_of_ppt",
			'description'   => 'Это правый сайдбар для презентации',
			
		) );
	}

function register_my_widgets5(){
	register_sidebar( array(
		'name'          => 'Right sidebar for news',
		'id'            => "right_sidebar_for_news",
		'description'   => '',
		'class'         => '',
		'before_widget' => '<aside id="" class="widget %2$s">',
		'after_widget'  => "</aside>\n",
		'before_title'  => '<h5 class="widget_title">',
		'after_title'   => "</h5>\n",
		'before_sidebar' => '', // WP 5.6
		'after_sidebar'  => '', // WP 5.6
	) );
}

function register_my_widgets6(){

		register_sidebar( array(
			'name'          => 'Right sidebar for news for text',
			'id'            => "right_sidebar_for_news_text",
			'description'   => 'Это правый сайдбар для новостей для текста',
			'before_widget' => '<aside id="" class="widget %2$s">',
		'after_widget'  => "</aside>\n",
		'before_title'  => '<h5 class="widget_title">',
		'after_title'   => "</h5>\n",
			
		) );
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
				'exclude_from_search' => false, // зависит от public
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
				'supports'            => [ 'title', 'editor', 'thumbnail', 'custom-fields', 'excerpt', 'author', 'page-attributes'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
				'taxonomies'          => ['news_article'],
				'has_archive'         => false,
				'rewrite'             => true,
				'query_var'           => true,
			] );
		}

		add_action( 'init', 'register_post_types8' );
		function register_post_types8(){
			register_post_type( 'our_command', [
				'label'  => null,
				'labels' => [
					'name'               => 'Наша комманда', // основное название для типа записи
					'singular_name'      => 'Персонал', // название для одной записи этого типа
					'add_new'            => 'Добавить персонал', // для добавления новой записи
					'add_new_item'       => 'Добавление персонала', // заголовка у вновь создаваемой записи в админ-панели.
					'edit_item'          => 'Редактирование персонала', // для редактирования типа записи
					'new_item'           => 'Новый персонал', // текст новой записи
					'view_item'          => 'Смотреть персонала', // для просмотра записи этого типа.
					'search_items'       => 'Искать в персоналах', // для поиска по этим типам записи
					'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
					'not_found_in_trash' => 'Не найдено в персоналах', // если не было найдено в корзине
					'parent_item_colon'  => '', // для родителей (у древовидных типов)
					'menu_name'          => 'Наша комманда', // название меню
				],
				'description'         => '',
				'public'              => true,
				'publicly_queryable'  => true, // зависит от public
				'exclude_from_search' => false, // зависит от public
				'show_ui'             => true, // зависит от public
				'show_in_nav_menus'   => true, // зависит от public
				'show_in_menu'        => true, // показывать ли в меню адмнки
				'show_in_admin_bar'   => true, // зависит от show_in_menu
				'show_in_rest'        => true, // добавить в REST API. C WP 4.7
				'rest_base'           => null, // $post_type. C WP 4.7
				'menu_position'       => 11,
				'menu_icon'           => 'dashicons-id-alt',
				//'capability_type'   => 'post',
				//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
				//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
				'hierarchical'        => true,
				'supports'            => [ 'title', 'editor', 'thumbnail', 'custom-fields', 'excerpt', 'author', 'page-attributes'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
				'taxonomies'          => ['news_article'],
				'has_archive'         => false,
				'rewrite'             => true,
				'query_var'           => true,
			] );
		}

		add_action( 'init', 'register_post_types9' );
		function register_post_types9(){
			register_post_type( 'sliders', [
				'label'  => null,
				'labels' => [
					'name'               => 'Слайдер', // основное название для типа записи
					'singular_name'      => 'Слайд', // название для одной записи этого типа
					'add_new'            => 'Добавить слайд', // для добавления новой записи
					'add_new_item'       => 'Добавление слайда', // заголовка у вновь создаваемой записи в админ-панели.
					'edit_item'          => 'Редактирование слайда', // для редактирования типа записи
					'new_item'           => 'Новый слайд', // текст новой записи
					'view_item'          => 'Смотреть слайд', // для просмотра записи этого типа.
					'search_items'       => 'Искать в слайдах', // для поиска по этим типам записи
					'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
					'not_found_in_trash' => 'Не найдено в слайдах', // если не было найдено в корзине
					'parent_item_colon'  => '', // для родителей (у древовидных типов)
					'menu_name'          => 'Слайдер', // название меню
				],
				'description'         => '',
				'public'              => true,
				'publicly_queryable'  => true, // зависит от public
				'exclude_from_search' => false, // зависит от public
				'show_ui'             => true, // зависит от public
				'show_in_nav_menus'   => true, // зависит от public
				'show_in_menu'        => true, // показывать ли в меню адмнки
				'show_in_admin_bar'   => true, // зависит от show_in_menu
				'show_in_rest'        => true, // добавить в REST API. C WP 4.7
				'rest_base'           => null, // $post_type. C WP 4.7
				'menu_position'       => 11,
				'menu_icon'           => 'dashicons-format-gallery',
				//'capability_type'   => 'post',
				//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
				//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
				'hierarchical'        => true,
				'supports'            => [ 'title', 'editor', 'thumbnail', 'custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
				'taxonomies'          => ['news_article'],
				'has_archive'         => false,
				'rewrite'             => true,
				'query_var'           => true,
			] );
		}

			add_action( 'init', 'register_post_types10' );
		function register_post_types10(){
			register_post_type( 'vacancies', [
				'label'  => null,
				'labels' => [
					'name'               => 'Вакансии', // основное название для типа записи
					'singular_name'      => 'Вакансия', // название для одной записи этого типа
					'add_new'            => 'Добавить вакансию', // для добавления новой записи
					'add_new_item'       => 'Добавление вакансии', // заголовка у вновь создаваемой записи в админ-панели.
					'edit_item'          => 'Редактирование вакансии', // для редактирования типа записи
					'new_item'           => 'Новая вакансия', // текст новой записи
					'view_item'          => 'Смотреть вакансию', // для просмотра записи этого типа.
					'search_items'       => 'Искать в вакансиях', // для поиска по этим типам записи
					'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
					'not_found_in_trash' => 'Не найдено в вакансиях', // если не было найдено в корзине
					'parent_item_colon'  => '', // для родителей (у древовидных типов)
					'menu_name'          => 'Вакансии', // название меню
				],
				'description'         => '',
				'public'              => true,
				'publicly_queryable'  => true, // зависит от public
				'exclude_from_search' => false, // зависит от public
				'show_ui'             => true, // зависит от public
				'show_in_nav_menus'   => true, // зависит от public
				'show_in_menu'        => true, // показывать ли в меню адмнки
				'show_in_admin_bar'   => true, // зависит от show_in_menu
				'show_in_rest'        => true, // добавить в REST API. C WP 4.7
				'rest_base'           => null, // $post_type. C WP 4.7
				'menu_position'       => 12,
				'menu_icon'           => 'dashicons-money',
				//'capability_type'   => 'post',
				//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
				//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
				'hierarchical'        => true,
				'supports'            => [ 'title', 'editor', 'thumbnail', 'custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
				'taxonomies'          => ['news_article'],
				'has_archive'         => false,
				'rewrite'             => true,
				'query_var'           => true,
			] );
		}


		add_action( 'init', 'register_post_types11' );
		function register_post_types11(){
			register_post_type( 'banks', [
				'label'  => null,
				'labels' => [
					'name'               => 'Банк', // основное название для типа записи
					'singular_name'      => 'Банк', // название для одной записи этого типа
					'add_new'            => 'Добавить банк', // для добавления новой записи
					'add_new_item'       => 'Добавление банка', // заголовка у вновь создаваемой записи в админ-панели.
					'edit_item'          => 'Редактирование банка', // для редактирования типа записи
					'new_item'           => 'Новый бакн', // текст новой записи
					'view_item'          => 'Смотреть бакн', // для просмотра записи этого типа.
					'search_items'       => 'Искать в бакнах', // для поиска по этим типам записи
					'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
					'not_found_in_trash' => 'Не найдено в бакнах', // если не было найдено в корзине
					'parent_item_colon'  => '', // для родителей (у древовидных типов)
					'menu_name'          => 'Банки', // название меню
				],
				'description'         => '',
				'public'              => true,
				'publicly_queryable'  => true, // зависит от public
				'exclude_from_search' => false, // зависит от public
				'show_ui'             => true, // зависит от public
				'show_in_nav_menus'   => true, // зависит от public
				'show_in_menu'        => true, // показывать ли в меню адмнки
				'show_in_admin_bar'   => true, // зависит от show_in_menu
				'show_in_rest'        => true, // добавить в REST API. C WP 4.7
				'rest_base'           => null, // $post_type. C WP 4.7
				'menu_position'       => 13,
				'menu_icon'           => 'dashicons-building',
				//'capability_type'   => 'post',
				//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
				//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
				'hierarchical'        => true,
				'supports'            => [ 'title', 'editor', 'thumbnail', 'custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
				'taxonomies'          => ['news_article'],
				'has_archive'         => false,
				'rewrite'             => true,
				'query_var'           => true,
			] );
		}



		// хук для регистрации
add_action( 'init', 'create_taxonomy' );
function create_taxonomy(){

	// список параметров: wp-kama.ru/function/get_taxonomy_labels
	register_taxonomy( 'news_articles', [ 'news' ], [
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => [
			'name'              => 'Категории',
			'singular_name'     => 'Категория',
			'search_items'      => 'Искать в категории',
			'all_items'         => 'Все категории',
			'view_item '        => 'Посмотреть категории',
			'parent_item'       => 'Родитель категорий',
			'parent_item_colon' => 'Родитель категорий:',
			'edit_item'         => 'Изенить категорию',
			'update_item'       => 'Обновить категорию',
			'add_new_item'      => 'Добавить новую категорию',
			'new_item_name'     => 'Новое имя категории',
			'menu_name'         => 'Категории',
		],
		'description'           => 'Категории в основном чтобы разделить новости и статьи', // описание таксономии
		'public'                => true,
		// 'publicly_queryable'    => null, // равен аргументу public
		// 'show_in_nav_menus'     => true, // равен аргументу public
		// 'show_ui'               => true, // равен аргументу public
		// 'show_in_menu'          => true, // равен аргументу show_ui
		// 'show_tagcloud'         => true, // равен аргументу show_ui
		// 'show_in_quick_edit'    => null, // равен аргументу show_ui
		'hierarchical'          => false,

		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
		'show_in_rest'          => null, // добавить в REST API
		'rest_base'             => null, // $taxonomy
		// '_builtin'              => false,
		//'update_count_callback' => '_update_post_term_count',
	] );
}
