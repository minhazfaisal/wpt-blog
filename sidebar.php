<!-- sidebar start -->
<div class="blog_right_sidebar">
  <!-- search -->
  <aside class="single_sidebar_widget search_widget">
    <!-- <form action="#">
      <div class="form-group">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Search Keyword">
          <div class="input-group-append">
            <button class="btn" type="button"><i class="ti-search"></i></button>
          </div>
        </div>
      </div>
      <button class="main_btn rounded-0 w-100" type="submit">Search</button>
    </form> -->
    <?php get_search_form(); ?>
  </aside>
  <!-- category -->
  <aside class="single_sidebar_widget post_category_widget">
    <h4 class="widget_title">Category</h4>
    <ul class="list cat-list">
      <li>
        <a href="#" class="d-flex">
          <p>Resaurant food</p>
          <p>(37)</p>
        </a>
      </li>
      <li>
        <a href="#" class="d-flex">
          <p>Inspiration</p>
          <p>(21)</p>
        </a>
      </li>
    </ul>
  </aside>
  <!-- post -->
  <aside class="single_sidebar_widget popular_post_widget">
    <h3 class="widget_title">Recent Post</h3>
    <div class="media post_item">
      <img src="<?php echo get_template_directory_uri(); ?>/img/blog/popular-post/post1.jpg" alt="post">
      <div class="media-body">
        <a href="single-blog.html">
          <h3>From life was you fish...</h3>
        </a>
        <p>January 12, 2019</p>
      </div>
    </div>
  </aside>
  <!-- tag- -->
  <aside class="single_sidebar_widget tag_cloud_widget">
    <h4 class="widget_title">Tag Clouds</h4>
    <ul class="list">
      <li>
        <a href="#">restaurant</a>
      </li>
      <li>
        <a href="#">life style</a>
      </li>
      <li>
        <a href="#">design</a>
      </li>
      <li>
        <a href="#">illustration</a>
      </li>
    </ul>
  </aside>
  <!-- instagram -->
  <aside class="single_sidebar_widget instagram_feeds">
    <h4 class="widget_title">Instagram Feeds</h4>
    <ul class="instagram_row flex-wrap">
      <li>
        <a href="#">
          <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/instagram/widget-i5.png" alt="">
        </a>
      </li>
      <li>
        <a href="#">
          <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/instagram/widget-i6.png" alt="">
        </a>
      </li>
    </ul>
  </aside>
  <!-- newsletter -->
  <aside class="single_sidebar_widget newsletter_widget">
    <h4 class="widget_title">Newsletter</h4>
    <form action="#">
      <div class="form-group">
        <input type="email" class="form-control" placeholder="Enter email" required>
      </div>
      <button class="main_btn rounded-0 w-100" type="submit">Subscribe</button>
    </form>
  </aside>
</div>
<!-- sidebar end -->
