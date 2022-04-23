<?php
/*
Template Name: Home page
*/
get_header(); ?>

<!-- thân bài -->
	
	<div class="container layout">
		<?php
			$orderby = 'ID';
			$order = 'asc';
			$hide_empty = false ;
			$cat_args = array(
			    'orderby'    => $orderby,
			    'order'      => $order,
			    'hide_empty' => $hide_empty,
			);
			 
			$product_categories = get_terms( 'product_cat', $cat_args );
			 
			if( !empty($product_categories) ){
			    echo '
			 
			<ul class="trademark list-img">';
			    foreach ($product_categories as $key => $category) {
			        echo '
			 
			<li>';				
			        echo '<a href="'.get_term_link($category).'" >';
			        $thumbnail_id = get_woocommerce_term_meta($category->term_id, 'thumbnail_id', true);
			        // get the image URL for parent category
			        $image = wp_get_attachment_url($thumbnail_id);
			        // print the IMG HTML for parent category
			        echo "<img src='{$image}' alt='' />";
			        echo '</a>';
			        echo '</li>';
			    }
			    echo '</ul>
			 
			 
			';
			}
								
		?>

		<p class="text1"><?php echo get_field('content_news'); ?></p>
		<hr>
	</div>

	<div class="container">
		<?php
			$orderby = 'ID';
			$order = 'asc';
			$hide_empty = false ;
			$cat_args = array(
			    'orderby'    => $orderby,
			    'order'      => $order,
			    'hide_empty' => $hide_empty,
			);
			 
			$product_categories = get_terms( 'product_cat', $cat_args );
			 
			if( !empty($product_categories) ){
			    echo '
			 
			<ul class="trademark">';
			    foreach ($product_categories as $key => $category) {
			        echo '
			 
			<li>';				
			        echo '<a href="'.get_term_link($category).'" >';
			        $thumbnail_id = get_woocommerce_term_meta($category->term_id, 'thumbnail_id', true);
			        // get the image URL for parent category
			        $image = wp_get_attachment_url($thumbnail_id);
			        // print the IMG HTML for parent category
			        echo "<img src='{$image}' alt='' />";
			        echo '</a>';
			        echo '</li>';
			    }
			    echo '</ul>
			 
			 
			';
			}
								
		?>
						
		<div class="row layout-product">
			<?php
			$vnkings = new WP_Query(array(
			'post_type'=>'product',
			'post_status'=>'publish',			
			'orderby' => 'post_date',
			'order' => 'DSC',
			'posts_per_page'=> '8'));
			?>
			<?php while ($vnkings->have_posts()) : $vnkings->the_post(); ?>
	            <div class="col-lg-3 col-12">
	                <a href="<?php the_permalink(); ?>">
	                     <?php the_post_thumbnail(); ?>
	                </a>
					<h1 class="text-category"><?php echo wc_get_product_category_list($product->get_id()) ?></h1>
	                <p class="text2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
	                <p class="text3"><?php echo $product->get_price_html(); ?></p>
	             </div>
			<?php endwhile ; wp_reset_query() ;?>

	    </div>
	</div>
	

<?php get_footer(); ?>
