<?php
/*
enqueue scripts and styles
*/
require get_template_directory() . '/inc/theme_enqueue.php';

/*
custom menu
*/
require get_template_directory() . '/inc/theme_menu.php';

/*
additional theme support
*/
require get_template_directory() . '/inc/theme_support.php';

// archive.php - archive name or date name display
add_filter( 'get_the_archive_title', function ( $title ) {
	if ( is_category() ) {
		return single_cat_title( '', false );
	}
  if ( is_day() ) {
    return get_the_date( 'F j, Y' );
  }
  return $title;
} );
?>
