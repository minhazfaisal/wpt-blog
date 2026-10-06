<?php
/**
 * Template Name: Page with sidebar
 * @package WPTB2
 * @since 1.0.0
 */

?>
<!-- header start -->
<?php get_header(); ?>

  <section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div class="banner_content d-md-flex justify-content-between align-items-center">
          <div class="mb-3 mb-md-0">
            <h1><?php the_title(); ?></h1>
          </div>
          <div class="page_link">
            <?php echo mj_wp_breadcrumb(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="blog_area section_gap">
    <div class="container">
      <div class="row">
        <!-- content1 -->
        <div class="col-lg-8 mb-5 mb-lg-0">
          <div class="details">
            <?php
              if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                  if ( trim( get_the_content() ) !== '' ) :
                    the_content();
                  else :
                    echo esc_html__( 'No content here', 'wpt1' );
                  endif;
                endwhile;
              else :
                echo esc_html__( 'Page not found', 'wpt1' );
              endif;
            ?>
          </div>
        </div>
        <!-- sidebar -->
        <div class="col-lg-4">
          <?php get_sidebar(); ?>
        </div>

      </div>
    </div>
  </section>

<!-- footer start -->
<?php get_footer(); ?>