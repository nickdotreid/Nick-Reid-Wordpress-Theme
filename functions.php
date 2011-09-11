<?php

function add_nickreid_css(){
	?>
	<link rel="stylesheet" type="text/css" media="all" href="/wp-content/themes/nickreid-2011-thematic/assets/css/nickreid.css" />
	
	<script type="text/javascript" src="/wp-content/themes/nickreid-2011-thematic/assets/js/page.js" ></script>
	<?php
}
add_action('wp_head','add_nickreid_css');

function add_nickreid_header(){
	if(!function_exists('dynamic_sidebar') || !dynamic_sidebar( 'Nick Reid Header' )){
	//	echo "Nick Reid Header contents go here";
	}
}
add_action('thematic_header','add_nickreid_header');

function add_nickreid_footer(){
	if(!function_exists('dynamic_sidebar') || !dynamic_sidebar( 'Nick Reid Footer' )){
		echo "Nick Reid Footer contents go here";
	}
}
add_action('thematic_footer','add_nickreid_footer');

function nickreid_init(){
	if(function_exists('add_image_size')){ 
		add_image_size( 'category-thumb', 300, 9999 );
		add_image_size( 'featured-thumb', 0, 150, true );
	}
	
	if ( function_exists('register_sidebar') ){
		register_sidebar(array(
			'name' => 'Nick Reid Header',
			'description' => 'Widgetized Header // All widgets in the dark gray area.',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		));
		
		register_sidebar(array(
			'name' => 'Nick Reid Footer',
			'description' => 'Widgetized Footer // All widgets in the dark gray area.',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
		));

		register_sidebar(array(
			'name' => 'Home Page Widgets',
			'description' => 'Widgets to be shown on the home page.',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		));
		
	}
}
add_action( 'widgets_init', 'nickreid_init' );

?>