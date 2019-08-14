<?php /* Template Name: O4L Custom Homepage */

get_header(); 
?>

<div id="custom-content-area">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div id="main" role="main">

		<div id="post-<?php the_ID(); ?>" role="div">
				<?php the_content(); ?>
		</div> <!-- end div -->

		<?php endwhile; endif; ?>

	</div> <!-- end #main -->

</div> <!-- end #custom-content-area -->