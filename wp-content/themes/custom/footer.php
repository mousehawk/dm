
<footer id="footer" class="mobile" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

			
			
	<div class="copyright fullwidth">
		<div class="row">
			<div class="column small-12">
				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('contact')) : else :  endif; ?>
			</div>
		</div>
		<div class="row">
			<div class="column small-12">
				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('copyright')) : else :  endif; ?>
			</div>
		</div>
	</div>


</footer>
		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
