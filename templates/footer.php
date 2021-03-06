<?php
	$email = get_field('email', 'options');
	$email = 'mailto:'.$email;
	$github = get_field('github', 'options');
?>

<footer>

	<div class="footer-branding__name">

			<div class="footer-wave_line">
				<?php get_template_part('templates/svg/wave'); ?>
			</div>
			<?php get_template_part('templates/svg/jb_logo'); ?>
			<div class="footer-wave_line">
				<?php get_template_part('templates/svg/wave'); ?>
			</div>

			<div class="footer-branding__social-media">
				<div class="social-title">Stay Connected</div>
				<div class="icons">
					<a href="<?php echo $email; ?>" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></a>
					<a href="<?php echo $github; ?>" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
					<a href="https://www.linkedin.com/in/john-b-b8a3a486/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
				</div>
			</div>

	</div>





</footer>
