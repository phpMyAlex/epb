<?php get_header(); ?>
			<div id="slider">
				<?php if( class_exists( 'LenSlider' ) ) {LenSlider::lenslider_output_slider( 'yf2007a79c5' );}?>
			</div>
			<?php the_content(); ?>
		</div>
<?php get_footer(); ?>