<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fishian_widgets_init() {

  register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'fishian' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'fishian' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Боковое меню на внутренних страницах сайта', 'fishian' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'fishian' ),
			'before_widget' => '<div class="single-sidebar">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="sidebar-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Боковое меню на страницах блога', 'fishian' ),
			'id'            => 'sidebar-blog',
			'description'   => esc_html__( 'Add widgets here.', 'fishian' ),
			'before_widget' => '<div class="single-sidebar">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="sidebar-title">',
			'after_title'   => '</h3>',
		)
	);
	
	
	register_sidebar( array(
		'name'          => esc_html__( 'Сайдбар магазина', 'fishian' ),
		'id'            => 'sidebar-shop',
		'description'   => esc_html__( 'Add widgets here.', 'fishian' ),
		'before_widget' => '<div class="single-sidebar">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="sidebar-title">',
		'after_title'   => '</h3>',
	) );


	register_sidebar( array(
		'name'          => 'Подвал блок с логотипом',
		'id'            => 'footer-logo',
		'before_widget' => '<div class="about-block footer-logo">',
		'after_widget'  => '</div>',
		//'before_title'  => '<h4 class="footer-widget-title mt-sm-20 mb-sm-10">',
		//'after_title'   => '</h4>',
	) );


	register_sidebar( array(
		'name'          => 'Подвал блок левый',
		'id'            => 'footer-1',
		'before_widget' => '<div class="widget-block widget-block_group-item">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-widget-title mt-sm-20 mb-sm-10">',
		'after_title'   => '</h4>',
	) );

	

	register_sidebar( array(
		'name'          => 'Подвал блок центр',
		'id'            => 'footer-2',
		'before_widget' => '<div class="widget-block widget-block_group-item">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-widget-title mt-sm-20 mb-sm-10">',
		'after_title'   => '</h4>',
  ) );
  
	register_sidebar( array(
		'name'          => 'Подвал блок правый',
		'id'            => 'footer-3',
		'before_widget' => '<div class="widget-block widget-block_group-item">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-widget-title mt-sm-20 mb-sm-10">',
		'after_title'   => '</h4>',
  ) );
  
  // register_sidebar( array(
	// 	'name'          => 'Подвал блок контактов',
	// 	'id'            => 'footer-contacts',
	// 	'before_widget' => '<div class="widget-block widget-block_contacts">',
	// 	'after_widget'  => '</div>',
	// 	'before_title'  => '<h4 class="footer-widget-title mt-sm-20 mb-sm-10">',
	// 	'after_title'   => '</h4>',
	// ) );




}
add_action( 'widgets_init', 'fishian_widgets_init' );
