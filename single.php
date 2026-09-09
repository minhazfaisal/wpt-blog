<!-- header start -->
<?php get_header(); ?>

  <section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div class="banner_content d-md-flex justify-content-between align-items-center">
          <div class="mb-3 mb-md-0">
            <h2>Blog Details</h2>
            <p>Very us move be blessed multiply night</p>
          </div>
          <div class="page_link">
            <a href="index.html">Home</a>
            <a href="blog.html">Blog </a>
            <a href="single-blog.html">Blog Details</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="blog_area single-post-area section_gap">
    <div class="container">
      <div class="row">
        <!-- single post start -->
        <div class="col-lg-8 posts-list">
          <?php
          if (have_posts()) :
            while (have_posts()) : the_post();
          ?>
          <div class="single-post">
            
            <div class="feature-img">
              <!-- <img class="img-fluid" src="img/blog/main-blog/m-blog-1.jpg" alt=""> -->
              <?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
            </div>

            <div class="blog_details">
              <!-- <h2>Second divided from form fish beast made every of seas
              all gathered us saying he our</h2> -->
              <h2><?php the_title( '<h2>', '</h2>' ); ?></h2>
              <ul class="blog-info-link mt-3 mb-4">
                <li><a href="#"><i class="ti-user"></i> <?php the_category( ', ' ); ?></a></li>
                <!-- <li><a href="#"><i class="ti-user"></i> Travel, Lifestyle</a></li> -->
                <li><a href="#"><i class="ti-comments"></i> <?php comments_number( 'No Comments', '1 Comment', '% Comments' ); ?></a></li>
                <!-- <li><a href="#"><i class="ti-comments"></i> 03 Comments</a></li> -->
              </ul>
              <!-- <p class="excert">
                MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower
              </p>
              <p>
                MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually
              </p> -->
              <?php the_content(); ?>
            </div>

          </div>

          <div class="navigation-top">
            <div class="d-sm-flex justify-content-between text-center">
              <p class="like-info"><span class="align-middle"><i class="ti-heart"></i></span> Lily and 4 people like this</p>
              <div class="col-sm-4 text-center my-2 my-sm-0">
                <p class="comment-count"><span class="align-middle"><i class="ti-comment"></i></span> 06 Comments</p>
              </div>
              <ul class="social-icons">
                <!-- <li><a href="#"><i class="ti-facebook"></i></a></li>
                <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                <li><a href="#"><i class="ti-dribbble"></i></a></li>
                <li><a href="#"><i class="ti-wordpress"></i></a></li> -->
                <li>
                  <a href="<?php echo esc_url( add_query_arg('u', get_permalink(), 'https://www.facebook.com/sharer/sharer.php' )); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php echo esc_attr( 'Share "' . get_the_title() . '" on Facebook' ); ?>"> <i class="ti-facebook" aria-hidden="true"></i>
                  </a>
                </li>
                <li>
                  <a target="_blank" href="http://twitter.com/intent/tweet?text=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>"><i class="ti-twitter"></i></a>
                </li>
                <li>
                  <a href="https://www.instagram.com/yourusername/" target="_blank" rel="noopener noreferrer" aria-label="Visit us on Instagram"> <i class="ti-instagram" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="<?php echo esc_url( add_query_arg( 'url', get_permalink(), 'https://www.linkedin.com/sharing/share-offsite/' )); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php echo esc_attr( 'Share "' . get_the_title() . '" on LinkedIn' ); ?>"> <i class="ti-linkedin" aria-hidden="true"></i></a>
                </li>
              </ul>
            </div>
            <div class="navigation-area">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                  <div class="thumb">
                    <a href="#">
                      <img class="img-fluid" src="img/blog/prev.jpg" alt="">
                    </a>
                  </div>
                  <div class="arrow">
                    <a href="#">
                      <span class="ti-arrow-left text-white"></span>
                    </a>
                  </div>
                  <div class="detials">
                    <p>Prev Post</p>
                    <a href="#">
                      <h4>Space The Final Frontier</h4>
                    </a>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                  <div class="detials">
                    <p>Next Post</p>
                    <a href="#">
                      <h4>Telescopes 101</h4>
                    </a>
                  </div>
                  <div class="arrow">
                    <a href="#">
                      <span class="ti-arrow-right text-white"></span>
                    </a>
                  </div>
                  <div class="thumb">
                    <a href="#">
                      <img class="img-fluid" src="img/blog/next.jpg" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="blog-author">
            <div class="media align-items-center">
              <!-- <img src="img/blog/author.png" alt=""> -->
              <?php echo get_avatar( get_the_author_meta( 'ID' ), 150 ); ?>
              <div class="media-body">
                <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ), get_the_author_meta( 'user_email' ), get_the_author_meta( 'user_url' ) ); ?>">
                  <h4><?php echo get_the_author( 'display_name' ); ?></h4>
                </a>
                <p><?php echo get_the_author_meta( 'description', get_the_author_meta( 'ID' ) ); ?></p>
              </div>
            </div>
          </div>
          <!--<div class="comments-area">
             <h4>05 Comments</h4>
            <div class="comment-list">
              <div class="single-comment justify-content-between d-flex">
                <div class="user justify-content-between d-flex">
                  <div class="thumb">
                    <img src="img/blog/c1.png" alt="">
                  </div>
                  <div class="desc">
                    <p class="comment">
                      Multiply sea night grass fourth day sea lesser rule open subdue female fill which them Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                    </p>
                    <div class="d-flex justify-content-between">
                      <div class="d-flex align-items-center">
                        <h5>
                          <a href="#">Emilly Blunt</a>
                        </h5>
                        <p class="date">December 4, 2017 at 3:12 pm </p>
                      </div>
                      <div class="reply-btn">
                        <a href="#" class="btn-reply text-uppercase">reply</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="comment-list">
              <div class="single-comment justify-content-between d-flex">
                <div class="user justify-content-between d-flex">
                  <div class="thumb">
                    <img src="img/blog/c2.png" alt="">
                  </div>
                  <div class="desc">
                    <p class="comment">
                      Multiply sea night grass fourth day sea lesser rule open subdue female fill which them Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                    </p>
                    <div class="d-flex justify-content-between">
                      <div class="d-flex align-items-center">
                        <h5>
                          <a href="#">Emilly Blunt</a>
                        </h5>
                        <p class="date">December 4, 2017 at 3:12 pm </p>
                      </div>
                      <div class="reply-btn">
                        <a href="#" class="btn-reply text-uppercase">reply</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> 
          </div>-->
          <div class="comment-form">
            <!-- <h4>Leave a Reply</h4> -->
            <!-- <form class="form-contact comment_form" action="#" id="commentForm">
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="main_btn">Send Message</button>
              </div>
            </form> -->
            <?php
              if ( comments_open() || get_comments_number() ) :
                comments_template();
              endif;
            ?>
          </div>
          <?php
              endwhile;
            endif;
          ?>
        </div>
        <!-- single post end -->

        <!-- single post start -->
        <!-- <div class="col-lg-8 posts-list">
          
          <div class="single-post">
            
            <div class="feature-img">
              <img class="img-fluid" src="img/blog/main-blog/m-blog-1.jpg" alt="">
            </div>

            <div class="blog_details">
              <h2>Second divided from form fish beast made every of seas
              all gathered us saying he our</h2>
              <ul class="blog-info-link mt-3 mb-4">
                <li><a href="#"><i class="ti-user"></i> Travel, Lifestyle</a></li>
                <li><a href="#"><i class="ti-comments"></i> 03 Comments</a></li>
              </ul>
              <p class="excert">
                MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower
              </p>
              <p>
                MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually
              </p>-
            </div>

          </div>

          <div class="navigation-top">
            <div class="d-sm-flex justify-content-between text-center">
              <p class="like-info"><span class="align-middle"><i class="ti-heart"></i></span> Lily and 4 people like this</p>
              <div class="col-sm-4 text-center my-2 my-sm-0">
                <p class="comment-count"><span class="align-middle"><i class="ti-comment"></i></span> 06 Comments</p>
              </div>
              <ul class="social-icons">
                <li><a href="#"><i class="ti-facebook"></i></a></li>
                <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                <li><a href="#"><i class="ti-dribbble"></i></a></li>
                <li><a href="#"><i class="ti-wordpress"></i></a></li>
              </ul>
            </div>
            <div class="navigation-area">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                  <div class="thumb">
                    <a href="#">
                      <img class="img-fluid" src="img/blog/prev.jpg" alt="">
                    </a>
                  </div>
                  <div class="arrow">
                    <a href="#">
                      <span class="ti-arrow-left text-white"></span>
                    </a>
                  </div>
                  <div class="detials">
                    <p>Prev Post</p>
                    <a href="#">
                      <h4>Space The Final Frontier</h4>
                    </a>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                  <div class="detials">
                    <p>Next Post</p>
                    <a href="#">
                      <h4>Telescopes 101</h4>
                    </a>
                  </div>
                  <div class="arrow">
                    <a href="#">
                      <span class="ti-arrow-right text-white"></span>
                    </a>
                  </div>
                  <div class="thumb">
                    <a href="#">
                      <img class="img-fluid" src="img/blog/next.jpg" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="blog-author">
            <div class="media align-items-center">
              <img src="img/blog/author.png" alt="">
              <div class="media-body">
                <a href="#">
                  <h4>Harvard milan</h4>
                </a>
                <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he our dominion twon Second divided from</p>
              </div>
            </div>
          </div>
          <div class="comments-area">
            <h4>05 Comments</h4>
            <div class="comment-list">
              <div class="single-comment justify-content-between d-flex">
                <div class="user justify-content-between d-flex">
                  <div class="thumb">
                    <img src="img/blog/c1.png" alt="">
                  </div>
                  <div class="desc">
                    <p class="comment">
                      Multiply sea night grass fourth day sea lesser rule open subdue female fill which them Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                    </p>
                    <div class="d-flex justify-content-between">
                      <div class="d-flex align-items-center">
                        <h5>
                          <a href="#">Emilly Blunt</a>
                        </h5>
                        <p class="date">December 4, 2017 at 3:12 pm </p>
                      </div>
                      <div class="reply-btn">
                        <a href="#" class="btn-reply text-uppercase">reply</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="comment-list">
              <div class="single-comment justify-content-between d-flex">
                <div class="user justify-content-between d-flex">
                  <div class="thumb">
                    <img src="img/blog/c2.png" alt="">
                  </div>
                  <div class="desc">
                    <p class="comment">
                      Multiply sea night grass fourth day sea lesser rule open subdue female fill which them Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                    </p>
                    <div class="d-flex justify-content-between">
                      <div class="d-flex align-items-center">
                        <h5>
                          <a href="#">Emilly Blunt</a>
                        </h5>
                        <p class="date">December 4, 2017 at 3:12 pm </p>
                      </div>
                      <div class="reply-btn">
                        <a href="#" class="btn-reply text-uppercase">reply</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="comment-form">
            <h4>Leave a Reply</h4>
            <form class="form-contact comment_form" action="#" id="commentForm">
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="main_btn">Send Message</button>
              </div>
            </form>
          </div>
        </div> -->
        <!-- single post end -->

        <!-- sidebar start -->
        <div class="col-lg-4">
          <?php get_sidebar(); ?>
        </div>
        <!-- sidebar end -->

      </div>
    </div>
  </section>


]<!-- footer start -->
<?php get_footer(); ?>