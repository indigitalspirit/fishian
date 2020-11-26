<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package fishian
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function fishian_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'fishian_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function fishian_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'fishian_pingback_header' );



/**
 * Add custom fields (phone, address, email, social media) on admin-menu page
 *
 */
function fishian_add_info_fields_to_admin_page(){


	//$option_name = 'fishian_phone_field';

	$options_names = array(
		'fishian_phone_field',
		'fishian_shedule_field',
		'fishian_address_field',
		'fishian_mail_field',
		'fishian_whatsapp_field',
		'fishian_vk_field',
		'fishian_header_info_first',
		'fishian_header_info_second',
		'fishian_header_info_third',
		'fishian_header_icon_first',
		'fishian_header_icon_second',
		'fishian_header_icon_third',
		'fishian_checkout_field'
	);

	for($i = 0; $i < count($options_names); $i++ ) {
			// регистрируем опцию
			register_setting( 'general', $options_names[$i] );
			// добавляем поле

			switch ($options_names[$i]) {
				case 'fishian_phone_field':
					$this_option_name = "Телефон";
					break;

				case 'fishian_shedule_field':
					$this_option_name = "Режим работы";
					break;

				case 'fishian_address_field':
					$this_option_name = "Адрес";
					break;

				case 'fishian_mail_field':
					$this_option_name = "E-mail";
					break;

				case 'fishian_whatsapp_field':
					$this_option_name = "Ссылка на чат WhatsApp";
					break;

				case 'fishian_vk_field':
					$this_option_name = "Ссылка на группу в vk";
					break;

				case 'fishian_footer_info_field':
					$this_option_name = "Текст в нижнем меню под логотипом";
					break;

				case 'fishian_header_info_first':
					$this_option_name = "Текст в хедере 1";
					break;

				case 'fishian_header_info_second':
					$this_option_name = "Текст в хедере 2";
					break;

				case 'fishian_header_info_third':
					$this_option_name = "Текст в хедере 3";
					break;

				case 'fishian_header_icon_first':
					$this_option_name = "Иконка в хедере 1";
					break;

				case 'fishian_header_icon_second':
					$this_option_name = "Иконка в хедере 2";
					break;

				case 'fishian_header_icon_third':
					$this_option_name = "Иконка в хедере 3";
					break;
					
				case 'fishian_checkout_field':
					$this_option_name = "Сообщение на странице оформления заказа";
					break;
			}

			add_settings_field( 
				"$options_names[$i]" . '_id', 
				"$this_option_name", 
				'fishian_extra_fields_callback', 
				'general', 
				'default', 
				array( 
					'id' => "$options_names[$i]" . '_id', 
					'option_name' => "$options_names[$i]"
				)
			);
	}

	
}

function fishian_extra_fields_callback( $val ){
	$id = $val['id'];
	$option_name = $val['option_name'];

	if( ($id === 'fishian_footer_info_field_id') //|| 
			// ($id === 'fishian_header_info_first_id') || 
			// ($id === 'fishian_header_info_second_id') || 
			// ($id === 'fishian_header_info_third_id')
	 	) {
	?>

		<textarea rows="10" cols="45" name="<?echo $option_name ?>" id="<? echo $id ?>" class="regular-text code"><? echo esc_attr( get_option($option_name) );?></textarea>

	<? }
		else
	{
	?>
	
		<input type="text" name="<?echo $option_name ?>" id="<? echo $id ?>" value="<? echo esc_attr( get_option($option_name) ) ?>" class="regular-text code" >

	<?
	}
}
add_action('admin_menu', 'fishian_add_info_fields_to_admin_page');
