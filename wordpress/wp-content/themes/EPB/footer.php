		</div>
		<div id="right">
			<?php 
                if (function_exists('dynamic_sidebar') && dynamic_sidebar('right')) : 
                    else : 
            ?>
            <?php endif; ?>
		</div>
		<div id="footer">
			<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
			<span>Copyright &copy; <?php echo date('Y'); ?> - Eva's Petite Bakery</span>
			<div id="social">
				<img src="<?php bloginfo('template_url'); ?>/images/facebook.png" width="36" height="36" alt="Facebook">
				<img src="<?php bloginfo('template_url'); ?>/images/twitter.png" width="36" height="36" alt="Twitter">
				<img src="<?php bloginfo('template_url'); ?>/images/blog.png" width="36" height="36" alt="Blog">
				<img src="<?php bloginfo('template_url'); ?>/images/instagram.png" width="36" height="36" alt="Instagram">
			</div>
		</div>
	</div>
	<?php wp_footer(); ?>
</body>
</html>