<?php
/*
* Template Name: Fullwidth page
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php couponsite_post_thumbnail(); ?>

</article><!-- #post-<?php the_ID(); ?> -->
