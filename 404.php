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
        <!-- content -->
        <div class="col-lg-12">   
          <div class="details">
            <h2 class="text-center">404</h2>
            <p class="text-center">The page you are looking for does not exist.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- footer start -->
<?php get_footer(); ?>