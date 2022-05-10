<?php get_header();?>
<!-- Start Search box -->
<div class="section-title mx-auto my-4 text-center text-uppercase">
	<h3>Search Coupons</h3>
</div>
<div class="searchform-section text-center mx-auto">
	<?php get_search_form(); ?>
</div>
<!-- End Search box -->
<!-- Start Course Categories -->
<div class="section-title mx-auto my-4 text-center text-uppercase">
	<h3>Coupons Categories</h3>
</div>
<div class="container text-center mt-3">
	<?php
	// Get the taxonomy's terms
	$terms = get_terms(
		array(
			'taxonomy'   => 'coupon_type',
			'hide_empty' => false,
		)
	);
	//print_r($terms);
	// Check if any term exists
	if ( ! empty( $terms ) && is_array( $terms ) ) {
		// Run a loop and print them all
		foreach ( $terms as $term ) { ?>
			<span class="fs-6 m-1 text-white badge rounded-pill bg-warning">
				<a class="text-dark text-decoration-none"
				href="<?php echo esc_url( get_term_link( $term ) ) ?>">
				<?php echo $term->name; ?>
			</a></span><?php
		}
	}
	/*$categories = get_categories( array(
		'orderby' => 'name',
		'order'   => 'ASC'
	) );
	
	foreach( $categories as $category ) {
		$category_link = sprintf( 
			'<a class="text-dark text-decoration-none" href="%1$s" alt="%2$s">%3$s</a>',
			esc_url( get_category_link( $category->term_id ) ),
			esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
			esc_html( $category->name )
		);
		
		echo '<span class="text-white badge rounded-pill bg-warning">' . sprintf( esc_html__( '%s', 'textdomain' ), $category_link ) . '</span> ';
	} */
	
	?>
</div>
<!-- End Course Categories -->
<!-- Start Latest Coupons -->
<div class="section-title mx-auto my-4 text-center text-uppercase">
	<h3>Latest Coupons</h3>
</div>
<div class="container">
	<div class="row">
	<?php 
			// set the "paged" parameter (use 'page' if the query is on a static front page)
			$paged = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : '1';
			
			$coupon_arguments = array(
				'nopaging'               => false,
				'paged'                  => $paged,
				'post_type' => 'coupon',
				'posts_per_page' => 16
			);
			$coupons = new WP_Query($coupon_arguments);
			// The Loop
		if ( $coupons->have_posts() ) {
			
			while($coupons -> have_posts()){
				$coupons->the_post();
			
		?>
		
		<div class="col-md-3 col-lg-3 col-sm-12 mb-2">
			<div class="card">
				<img src="<?php the_field('image_url'); ?>" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title"><?php the_title(); ?></h5>
					<div class="d-grid">
						<a href="<?php the_permalink();?>" class="text-uppercase btn btn-dark">Get Coupon</a>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
	
	<div class="d-flex justify-content-between">
		<div class="fs-3"><?php previous_posts_link( '« Previous' ); ?></div>
		<div class="fs-3"><?php next_posts_link( 'Next »', $coupons->max_num_pages );?></div>
	</div>
	<?php } else {
		// no posts found
		echo '<h3>No Coupons Found</h3>';
	}
	?>
	</div>
</div>
<?php wp_reset_postdata(); ?>
<section class="container pt-5">
	<div class="section-title mx-auto my-4 text-center text-uppercase">
		<h3>Contact us</h3>
		<h6>You can send your course coupon or any message by filling below form</h6>
	</div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <?php 
                    echo do_shortcode('[wpforms id="59"]');
                ?>
            </div>
        </div>
    </div>
</section>
<!-- End Latest Coupons -->
<?php get_footer();?>