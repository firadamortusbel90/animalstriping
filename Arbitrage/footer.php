</div><!-- Wrapper End -->

<div class="footer">
	<div class="footer-container">
		<div class="footer-copy">
			@ <?php echo date('Y'); ?> <?php echo $blog_title = get_bloginfo('title'); ?>. <a href="http://www.lipode.com/themes/arbitrage" target="_blank">Arbitrage Theme</a> by <a href="http://www.lipode.com" target="_blank">Lipode</a>
		</div>
		<div class="footer-nav">
			<?php wp_nav_menu( array('menu' => 'Footer' )); ?>
		</div>
	</div>
</div>

<?php wp_footer(); ?> 

</body>
</html>