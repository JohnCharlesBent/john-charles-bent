<footer>

	<div class="footer-branding__name">
		<div>John</div>
			<div class="footer-wave_line">
				<?php get_template_part('templates/svg/wave'); ?>
			</div>
		<div>Bent</div>
	</div>

	<?php
		$email = get_field('email', 'options');
		$email = 'mailto:'.$email;
		$github = get_field('github', 'options');
	?>

	<div class="footer-branding__social-media">
		<div class="social-title">Stay Connected</div>

		<div class="icons">
			<a href="<?php echo $email; ?>" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></a>
			<a href="<?php echo $github; ?>" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
		</div>

	</div>

</footer>
