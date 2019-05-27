<?php
// Home Page

$animation_options = array(
	'fadeInLeftBig',
	'fadeInRightBig',
	'fadeIn',
	'fadeInUpBig',
	'zoomInLeft',
	'fadeInDown',
	'bounceIn',
);

$animOpt = array_rand($animation_options);

?>
	<div class="grid animated <?php echo $animation_options[$animOpt]; ?>">
		<div class="grid-sizer"></div>
		<div class="grid-item logo">
			<div class="name">
				<?php get_template_part('templates/svg/jb_logo'); ?>
			</div>
			<div class="fp">
				Featured Projects <i class="fa fa-angle-right" aria-hidden="true"></i>
			</div>
		</div>

	<?php

			if( have_rows('featured_projects') ):
				while(have_rows('featured_projects')) : the_row();

					$project = get_sub_field('project');

					if( $project ):
							$post = $project;

						setup_postdata($post);

						get_template_part('templates/grid', 'item');

					endif;
				wp_reset_postdata();
			endwhile;
		endif; // end repeater
		?>
	</div>

	<div class="email-signup__wrapper" style="background:url('<?php echo get_template_directory_uri().'/assets/images/main_img.jpg'; ?>') no-repeat center center fixed;">
		<div class="overlay"></div>

			<div class="contact-form__wrapper">
				<h2>Work With Me!</h2>
				<p>I'm always looking for new projects. If you like my work and have a need for freelance or contract work, please use the form below to reach out!</p>
				<?php gravity_form(1, false, false, false); ?>
			</div>

	</div>
