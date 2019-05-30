<?php
// Home Page
?>
	<div class="grid">
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

	<div class="about">
		<?php get_template_part('templates/about'); ?>
	</div>
