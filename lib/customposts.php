<?php

// Illustration Post Type

$args = array(
  		'labels'	=>	array(
  			'name'			=> _x('Illustration', 'post type general name'),
  			'singular name' => _x('Illustration', 'post type singular name'),
  			'add_new'		=> _x('Add New', 'Illustration'),
  			'add_new_item'	=> __('Add Work'),
  			'edit_item'		=> __('Edit Work'),
  			'new_item'		=> __('New Illustration Piece'),
  			'view_item'		=> __('View Illustration'),
  			'search_item'	=> __('Search Illustration'),
  			'not_found'		=> __('No Illustration Piece Was Found'),
  			'not_found_in_trash'	=> __('Nothing Found In Trash'),
  			'parent_item_color'	=> ''
					),
	'supports'			=>	array( 'title', 'editor', 'author', 'revisions', 'thumbnail', 'custom-fields' ),
	'menu_position'	=>	5,
	'public'				=>	true,
  'has_archive'  => true
);
register_post_type( 'illustration', $args );

// Visual Art Post Type

$args = array(
  		'labels'	=>	array(
  			'name'			=> _x('Art', 'post type general name'),
  			'singular name' => _x('Art', 'post type singular name'),
  			'add_new'		=> _x('Add New', 'Art'),
  			'add_new_item'	=> __('Add Work'),
  			'edit_item'		=> __('Edit Work'),
  			'new_item'		=> __('New Art Project'),
  			'view_item'		=> __('View Art Project'),
  			'search_item'	=> __('Search Art'),
  			'not_found'		=> __('No Art Project Was Found'),
  			'not_found_in_trash'	=> __('Nothing Found In Trash'),
  			'parent_item_color'	=> ''
					),
	'supports'			=>	array( 'title', 'editor', 'author', 'revisions', 'thumbnail', 'custom-fields' ),
	'menu_position'	=>	6,
	'public'				=>	true,
  'has_archive'   => true
);
register_post_type( 'art', $args );

// Design Post Type

$args = array(
  		'labels'	=>	array(
  			'name'			=> _x('Design | Dev', 'post type general name'),
  			'singular name' => _x('Design', 'post type singular name'),
  			'add_new'		=> _x('Add New', 'Design'),
  			'add_new_item'	=> __('Add Work'),
  			'edit_item'		=> __('Edit Work'),
  			'new_item'		=> __('New Design Project'),
  			'view_item'		=> __('View Design Project'),
  			'search_item'	=> __('Search Design'),
  			'not_found'		=> __('No Design Project Was Found'),
  			'not_found_in_trash'	=> __('Nothing Found In Trash'),
  			'parent_item_color'	=> ''
					),
	'supports'			=>	array( 'title', 'editor', 'author', 'revisions', 'thumbnail', 'custom-fields' ),
	'menu_position'	=>	7,
	'public'				=>	true,
  'has_archive'   => true
);
register_post_type( 'design', $args );

// Comics Post Type

$args = array(
  		'labels'	=>	array(
  			'name'			=> _x('Comics', 'post type general name'),
  			'singular name' => _x('Comic', 'post type singular name'),
  			'add_new'		=> _x('Add New', 'Comic'),
  			'add_new_item'	=> __('Add Work'),
  			'edit_item'		=> __('Edit Work'),
  			'new_item'		=> __('New Comic'),
  			'view_item'		=> __('View Comic'),
  			'search_item'	=> __('Search Comics'),
  			'not_found'		=> __('No Comic Was Found'),
  			'not_found_in_trash'	=> __('Nothing Found In Trash'),
  			'parent_item_color'	=> ''
					),
	'supports'			=>	array( 'title', 'editor', 'author', 'revisions', 'thumbnail', 'custom-fields' ),
	'menu_position'	=>	7,
	'public'				=>	true,
  'has_archive'   => true
);
register_post_type( 'comics', $args );


$args = array(
      'labels'  =>  array(
        'name'      => _x('Daily Drawing', 'post type general name'),
        'singular name' => _x('Daily Drawing', 'post type singular name'),
        'add_new'   => _x('Add New', 'Drawing'),
        'add_new_item'  => __('Add Drawing'),
        'edit_item'   => __('Edit Drawing'),
        'new_item'    => __('New Drawing'),
        'view_item'   => __('View Drawing'),
        'search_item' => __('Search Comics'),
        'not_found'   => __('No Drawing Was Found'),
        'not_found_in_trash'  => __('Nothing Found In Trash'),
        'parent_item_color' => ''
          ),
  'supports'      =>  array( 'title', 'editor', 'author', 'revisions', 'thumbnail', 'custom-fields' ),
  'menu_position' =>  7,
  'public'        =>  true,
  'has_archive'   => true
);
register_post_type( 'daily_drawing', $args );

?>