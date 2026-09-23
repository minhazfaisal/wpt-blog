<?php
/*
category siedebar widget
*/
function wpt1_widgets() {
  // category
	register_sidebar( array(
		'name'          => __( 'category', 'wpt1' ),
		'id'            => 'sb_category',
		'description'   => __( 'Will show category.', 'wpt1' ),
		'before_widget' => '<aside class="single_sidebar_widget post_category_widget"><ul class="list cat-list">',
		'after_widget'  => '</ul></aside>',
		'before_title'  => '<h4 class="widget_title">',
		'after_title'   => '</h4>',
	) );

}
add_action( 'widgets_init', 'wpt1_widgets' );

?>