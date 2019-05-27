<?php
$menu_args = array(
	'menu'	=> 'main-menu',
	'menu_class'	=> 'main-menu'
	);

?>

<header>
	<div class="nav">
		<div class="nav-logo">
			<a href="<?php echo bloginfo('url'); ?>">
				<?php get_template_part('templates/svg/jb_logo'); ?>
			</a>
		</div>

		<div class="mobile-toggle">
			MENU <i class="fa fa-bars" aria-hidden="true"></i>
		</div><!-- end .mobile-toggle -->

		<?php wp_nav_menu($args); ?>
	</div><!-- end .nav -->



</header>

<div class="menu-overlay">

	<div class="menu-close">
		<div class="mobile-toggle">
			<?php get_template_part('templates/svg/close'); ?>
		</div>
	</div>

	<nav class="nav-primary">
	      <?php
	      if (has_nav_menu('primary_navigation')) :
	        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
	      endif;
	      ?>

	      <div class="ink_well">
	      	<?php get_template_part('templates/svg/ink_bottle'); ?>
	      </div>
	</nav>
</div>
