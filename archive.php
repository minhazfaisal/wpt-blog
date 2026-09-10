<!-- header start -->
<?php get_header(); ?>

  <section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div class="banner_content d-md-flex justify-content-between align-items-center">
          <div class="mb-3 mb-md-0">
            <!-- <h2>Blog</h2> -->
            <?php the_archive_title( '<h2>', '</h2>' );?>
            <!-- <p>Very us move be blessed multiply night</p> -->
             <?php the_archive_description( '<p>', '</p>' ); ?>
          </div>
          <!-- <div class="page_link">
            <a href="index.html">Home</a>
            <a href="blog.html">Blog </a>
          </div> -->
          <div class="page_link">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Blog</a>
            <a href="<?php the_permalink(); ?>"><?php single_cat_title(); ?></a>
          </div>


        </div>
      </div>
    </div>
  </section>

  <section class="blog_area section_gap">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mb-5 mb-lg-0">
          <div class="blog_left_sidebar">
            <!-- blog item start -->
            <?php
            if ( have_posts() ) :
              while ( have_posts() ) : the_post();
            ?>
            <article class="blog_item">
              <div class="blog_item_img">
                <!-- featured image -->
                <a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
                  <?php the_post_thumbnail('large', array('class' => 'card-img rounded-0')); ?>
                </a>
                <!-- <img class="card-img rounded-0" src="<?php echo get_template_directory_uri(); ?>/img/blog/main-blog/m-blog-1.jpg" alt=""> -->
                <!-- date -->
                <?php 
                  $a_y = get_the_time( 'Y' ); 
                  $a_m = get_the_time( 'm' ); 
                  $a_d = get_the_time( 'd' ); 
                ?>
                <a href="<?php echo esc_url( get_day_link( $a_y, $a_m, $a_d ) ); ?>" class="blog_item_date">
                  <h3><?php echo get_the_time('d'); ?></h3>
                  <p><?php echo get_the_time('M'); ?></p>
                </a>
                <!-- <a href="#" class="blog_item_date">
                  <h3>15</h3>
                  <p>Jan</p>
                </a> -->
              </div>
              <div class="blog_details">
                <!-- blog title -->
                <a class="d-inline-block" href="<?php the_permalink(); ?>">
                  <?php the_title( '<h2>', '</h2>' ); ?>
                </a>
                <!-- <a class="d-inline-block" href="single-blog.html">
                  <h2>Google inks pact for new 35-storey office</h2>
                </a> -->
                <!-- excerpt -->
                <?php the_excerpt(); ?>
                <!-- <p>That dominion stars lights dominion divide years for fourth have don't stars is that he earth it first without heaven in place seed it second morning saying.</p> -->
                <!-- category, comments. -->
                <ul class="blog-info-link">
                  <li>
                    <a href="#">
                      <i class="ti-user"></i> <?php the_category( ', ' ); ?>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="ti-comments"></i> <?php comments_number( 'No Comments', '1 Comment', '% Comments' ); ?>
                    </a>
                  </li>
                </ul>
                <!-- <ul class="blog-info-link">
                  <li><a href="#"><i class="ti-user"></i> Travel, Lifestyle</a></li>
                  <li><a href="#"><i class="ti-comments"></i> 03 Comments</a></li>
                </ul> -->
              </div>
            </article>
            <?php 
              endwhile;
            endif;
            ?>
            <!-- blog item end -->
            <nav class="blog-pagination justify-content-center d-flex">
              <!-- pagination -->
              <ul class="pagination">
                <?php
                  the_posts_pagination( array(
                    'mid_size'  => 2,
                    // 'end_size'  => 1,
                    'prev_text' => __( '<span class="ti-arrow-left"></span>', 'wpt1' ),
                    'next_text' => __( '<span class="ti-arrow-right"></span>', 'wpt1' ),
                  ));
                ?>
              </ul>
              <!-- <ul class="pagination">
                <li class="page-item">
                  <a href="#" class="page-link" aria-label="Previous">
                    <span aria-hidden="true">
                      <span class="ti-arrow-left"></span>
                    </span>
                  </a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link">1</a>
                </li>
                <li class="page-item active">
                  <a href="#" class="page-link">2</a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link" aria-label="Next">
                    <span aria-hidden="true">
                      <span class="ti-arrow-right"></span>
                    </span>
                  </a>
                </li>
              </ul> -->
            </nav>
          </div>
        </div>
        <!-- sidebar start -->
        <div class="col-lg-4">
          <?php get_sidebar(); ?>
        </div>
        <!-- sidebar end -->

      </div>
    </div>
  </section>

<!-- footer start -->
<?php get_footer(); ?>