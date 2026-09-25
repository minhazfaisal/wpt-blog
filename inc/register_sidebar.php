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
  // recent posts
	register_sidebar( array(
		'name'          => __( 'Recent Posts', 'wpt1' ),
		'id'            => 'sb_recent_posts',
		'description'   => __( 'Will show recent posts.', 'wpt1' ),
		'before_widget' => '<aside class="single_sidebar_widget popular_post_widget">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget_title">',
		'after_title'   => '</h4>',
	) );
  // tag widget
	register_sidebar( array(
		'name'          => __( 'Tags', 'wpt1' ),
		'id'            => 'sb_tag',
		'description'   => __( 'Will show tags.', 'wpt1' ),
		'before_widget' => '<aside class="single_sidebar_widget tag_cloud_widget"><ul class="list">',
		'after_widget'  => '</ul></aside>',
		'before_title'  => '<h4 class="widget_title">',
		'after_title'   => '</h4>',
	) );
  // gallery widget
	register_sidebar( array(
		'name'          => __( 'Gallery', 'wpt1' ),
		'id'            => 'sb_gallery',
		'description'   => __( 'Will show gallery.', 'wpt1' ),
		'before_widget' => '<aside class="single_sidebar_widget instagram_feeds"><ul class="instagram_row flex-wrap">',
		'after_widget'  => '</ul></aside>',
		'before_title'  => '<h4 class="widget_title">',
		'after_title'   => '</h4>',
	) );
  // video widget
	register_sidebar( array(
		'name'          => __( 'Video', 'wpt1' ),
		'id'            => 'sb_video',
		'description'   => __( 'Will show video.', 'wpt1' ),
		'before_widget' => '<aside class="single_sidebar_widget newsletter_widget">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget_title">',
		'after_title'   => '</h4>',
	) );

}
add_action( 'widgets_init', 'wpt1_widgets' );

?>
