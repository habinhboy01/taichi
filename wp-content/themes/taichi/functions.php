<?php
// Thêm ảnh đại diện
add_theme_support('post-thumbnails');

function my_custom_wc_theme_support()
{

    add_theme_support('woocommerce');

    add_theme_support('wc-product-gallery-lightbox');

    add_theme_support('wc-product-gallery-slider');
    // add_theme_support('wc-product-gallery-zoom');
}
add_action('after_setup_theme', 'my_custom_wc_theme_support');

// Tạo menu
function m_register_menu()
{
	register_nav_menus(
		array(
			'menu-1' => __('sidebar Menu'),
		)
	);
}
add_action('init', 'm_register_menu');

// Logo
function m_logo_web($wp_customize)
{
	$wp_customize->add_section(
		'logo',
		array(
			'title' => 'Logo',
			'description' => 'logo',
			'priority' => 25
		)
	);

	$wp_customize->add_setting('Logo', array('default' => ''));
	$wp_customize->add_control(
		new WP_Customize_Image_Control($wp_customize, 'Logo', array(
			'label' => 'Logo',
			'section' => 'logo',
			'settings' => 'Logo'
		))
	);
}
add_action('customize_register', 'm_logo_web');


// custom footer
function footer($wp_customize)
{
	$wp_customize->add_section(
		'footer',
		array(
			'title' => 'footer',
			'description' => 'footer',
		)
	);

	$wp_customize->add_setting('footer_setting', array('default' => ''));
	$wp_customize->add_control(
		'footer_control',
		array(
			'type' => 'text',
			'section' => 'footer',
			'settings' => 'footer_setting'
		)
	);
}
add_action('customize_register', 'footer');

function footer_2($wp_customize)
{
	$wp_customize->add_section(
		'footer_2',
		array(
			'title' => 'footer_2',
			'description' => 'footer_2',
		)
	);

	$wp_customize->add_setting('footer_setting_2', array('default' => ''));
	$wp_customize->add_control(
		'footer_control_2',
		array(
			'type' => 'text',
			'section' => 'footer',
			'settings' => 'footer_setting_2'
		)
	);
}
add_action('customize_register', 'footer_2');

function footer_3($wp_customize)
{
	$wp_customize->add_section(
		'footer_3',
		array(
			'title' => 'footer_3',
			'description' => 'footer_3',
		)
	);

	$wp_customize->add_setting('footer_setting_3', array('default' => ''));
	$wp_customize->add_control(
		'footer_control_3',
		array(
			'type' => 'text',
			'section' => 'footer',
			'settings' => 'footer_setting_3'
		)
	);
}
add_action('customize_register', 'footer_3');

function footer_4($wp_customize)
{
	$wp_customize->add_section(
		'footer_4',
		array(
			'title' => 'footer_4',
			'description' => 'footer_4',
		)
	);

	$wp_customize->add_setting('footer_setting_4', array('default' => ''));
	$wp_customize->add_control(
		'footer_control_4',
		array(
			'type' => 'text',
			'section' => 'footer',
			'settings' => 'footer_setting_4'
		)
	);
}
add_action('customize_register', 'footer_4');

function footer_5($wp_customize)
{
	$wp_customize->add_section(
		'footer_5',
		array(
			'title' => 'footer_5',
			'description' => 'footer_5',
		)
	);

	$wp_customize->add_setting('footer_setting_5', array('default' => ''));
	$wp_customize->add_control(
		'footer_control_5',
		array(
			'type' => 'text',
			'section' => 'footer',
			'settings' => 'footer_setting_5'
		)
	);
}
add_action('customize_register', 'footer_5');

function footer_6($wp_customize)
{
	$wp_customize->add_section(
		'footer_6',
		array(
			'title' => 'footer_6',
			'description' => 'footer_6',
		)
	);

	$wp_customize->add_setting('footer_setting_6', array('default' => ''));
	$wp_customize->add_control(
		'footer_control_6',
		array(
			'type' => 'text',
			'section' => 'footer',
			'settings' => 'footer_setting_6'
		)
	);
}
add_action('customize_register', 'footer_6');

function footer_7($wp_customize)
{
	$wp_customize->add_section(
		'footer_5',
		array(
			'title' => 'footer_7',
			'description' => 'footer_7',
		)
	);

	$wp_customize->add_setting('footer_setting_7', array('default' => ''));
	$wp_customize->add_control(
		'footer_control_7',
		array(
			'type' => 'text',
			'section' => 'footer',
			'settings' => 'footer_setting_7'
		)
	);
}
add_action('customize_register', 'footer_7');

// thay đổi đơn vi tiền 

/**
 Change a currency symbol đ to VND
 */
add_filter('woocommerce_currency_symbol', 'change_existing_currency_symbol', 10, 2); 
function change_existing_currency_symbol( $currency_symbol, $currency ) {
switch( $currency ) {
case 'VND': $currency_symbol = 'VND'; break;
}
return $currency_symbol;
}

// sửa nut add to cart

add_filter( 'woocommerce_product_add_to_cart_text' , 'custom_woocommerce_product_add_to_cart_text' );
 
/**
 * custom_woocommerce_template_loop_add_to_cart
*/
function custom_woocommerce_product_add_to_cart_text() {
	global $product;
	
	$product_type = $product->product_type;
	
	switch ( $product_type ) {
		case 'external':
			return __( 'Buy product', 'woocommerce' );
		break;
		case 'grouped':
			return __( 'View products', 'woocommerce' );
		break;
		case 'simple':
			return __( 'Thêm giỏ hàng', 'woocommerce' );
		break;
		case 'variable':
			return __( 'Select options', 'woocommerce' );
		break;
		default:
			return __( 'Read more', 'woocommerce' );
	}
	
}

// xóa input trong checkout

add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
function custom_override_checkout_fields( $fields ) {
     unset($fields['billing']['billing_company']);
     unset($fields['billing']['billing_country']);
     unset($fields['billing']['billing_postcode']);
     return $fields;
}