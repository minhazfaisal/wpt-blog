<?php
/*
category siedebar widget
*/
function wpt1_widgets() {
  // category
	register_sidebar( array(
		'name'          => __( 'Sidebar Post Category', 'wpt1' ),
		'id'            => 'sb_category',
		'description'   => __( 'Will show category.', 'wpt1' ),
		'before_widget' => '<aside class="single_sidebar_widget post_category_widget"><ul class="list cat-list">',
		'after_widget'  => '</ul></aside>',
		'before_title'  => '<h4 class="widget_title">',
		'after_title'   => '</h4>',
	) );
  // recent posts
	register_sidebar( array(
		'name'          => __( 'Sidebar Recent Posts', 'wpt1' ),
		'id'            => 'sb_recent_posts',
		'description'   => __( 'Will show recent posts.', 'wpt1' ),
		'before_widget' => '<aside class="single_sidebar_widget popular_post_widget">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget_title">',
		'after_title'   => '</h4>',
	) );
  // tag widget
	register_sidebar( array(
		'name'          => __( 'Sidebar Tags', 'wpt1' ),
		'id'            => 'sb_tag',
		'description'   => __( 'Will show tags.', 'wpt1' ),
		'before_widget' => '<aside class="single_sidebar_widget tag_cloud_widget"><ul class="list">',
		'after_widget'  => '</ul></aside>',
		'before_title'  => '<h4 class="widget_title">',
		'after_title'   => '</h4>',
	) );
  // gallery widget
	register_sidebar( array(
		'name'          => __( 'Sidebar Gallery', 'wpt1' ),
		'id'            => 'sb_gallery',
		'description'   => __( 'Will show gallery.', 'wpt1' ),
		'before_widget' => '<aside class="single_sidebar_widget instagram_feeds"><ul class="instagram_row flex-wrap">',
		'after_widget'  => '</ul></aside>',
		'before_title'  => '<h4 class="widget_title">',
		'after_title'   => '</h4>',
	) );
  // video widget
	register_sidebar( array(
		'name'          => __( 'Sidebar Video', 'wpt1' ),
		'id'            => 'sb_video',
		'description'   => __( 'Will show video.', 'wpt1' ),
		'before_widget' => '<aside class="single_sidebar_widget newsletter_widget">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget_title">',
		'after_title'   => '</h4>',
	) );

	// footer pages widget
	register_sidebar( array(
		'name'          => __( 'Footer 1: Pages', 'wpt1' ),
		'id'            => 'footer_pages',
		'description'   => __( 'Will show footer pages.', 'wpt1' ),
		'before_widget' => '<div class="col-lg-2 col-md-6 single-footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
	// footer quick links widget
	register_sidebar( array(
		'name'          => __( 'Footer 2: Quick Links', 'wpt1' ),
		'id'            => 'footer_quick_links',
		'description'   => __( 'Will show footer quick links.', 'wpt1' ),
		'before_widget' => '<div class="col-lg-2 col-md-6 single-footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
	// footer features widget
	register_sidebar( array(
		'name'          => __( 'Footer 3: Features', 'wpt1' ),
		'id'            => 'footer_features',
		'description'   => __( 'Will show footer features.', 'wpt1' ),
		'before_widget' => '<div class="col-lg-2 col-md-6 single-footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
	// footer resources widget
	register_sidebar( array(
		'name'          => __( 'Footer 4: Resources', 'wpt1' ),
		'id'            => 'footer_resources',
		'description'   => __( 'Will show footer resources.', 'wpt1' ),
		'before_widget' => '<div class="col-lg-2 col-md-6 single-footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );

}
add_action( 'widgets_init', 'wpt1_widgets' );

?>
