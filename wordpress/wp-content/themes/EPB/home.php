<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div id="slider">
				<?php echo ctslider_slider_template( '5' ); ?>
			</div>
			<?php the_content(); ?>
		<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer(); ?>