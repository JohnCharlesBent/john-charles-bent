<?php
$link = get_post_permalink();
$post_type = get_post_type();
$featured_title = get_the_title();
?>
<div class="grid-item <?php echo $post_type; ?> featured-project" data-category="<?php echo $post_type  ?>">
	<a href="<?php echo $link; ?>">
		<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo $featured_title. ' thumbnail'; ?>" />

	<div class="overlay">
		<div class="project-name">
			<?php echo $featured_title; ?>
		</div>
	<?php if(is_front_page()): ?>
		<div class="post_type">
			Tag: <?php echo $post_type; ?>
		</div>
	<?php endif;?>
		<div class="btn">
				view this project <i class="fa fa-angle-right" aria-hidden="true"></i>
		</div>
	</div>
	</a>
</div><!-- end .grid-item -->
