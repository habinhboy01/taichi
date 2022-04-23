<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div class="row" id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
	
		<?php
		/**
		 * Hook: woocommerce_before_single_product_summary.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
		?>
	

	<div class="col-md-7 text6">
		<p class="text9">Nhà phát hành: <?php echo wc_get_product_category_list($product->get_id()) ?></p>
		<h1><?php the_title(); ?></h1>
		<p class="text5"><?php echo number_format($product->get_regular_price());?> VND</p>
		<p><?php the_content();?></p>
		
		<?php
			global $product;

			if ( ! $product->is_purchasable() ) {
				return;
			}

			echo wc_get_stock_html( $product ); // WPCS: XSS ok.

			if ( $product->is_in_stock() ) : ?>

			<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>
			<p class="text7">Số lượng: </p>
			<form class="quantity-button cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
				<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

				<?php
				do_action( 'woocommerce_before_add_to_cart_quantity' );

				woocommerce_quantity_input(
					array(
						'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
						'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
						'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
					)
				);

				do_action( 'woocommerce_after_add_to_cart_quantity' );
				?>

				<button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="single_add_to_cart_button button button1 alt">Thêm vào giỏ hàng</button>

				<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
			</form>

			<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>

		<?php endif; ?>
	</div>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
