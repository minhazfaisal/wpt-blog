==Step 1: Template installing==
index.php, style.css, screenshot.png

Template collect and checking,
1. Install wp, 
2. Update wordpress settings -> permalinks, 
3. create theme folder in wp-content/themes/themefolder
In root theme folder create
index.php 
style.css, 
screenshot.png
4. style.css - add css from doc
5. Copy the template files to theme folder
6. Copy the code -> blog.html to index.php(default blog)
7. Activate the theme

#Core concept
https://developer.wordpress.org/themes/core-concepts/theme-structure/

#style.css - adding css from doc - https://developer.wordpress.org/themes/core-concepts/main-stylesheet/

#screenshot.png - 1200*900px

#index.php - (blog.html codes)

==Step 2: css and js links, blog page, index page==
functions.php, header.php, footer.php 

connecting functions.php, header.php, footer.php, website images
1. functions.php - dynamic css, js links
2. Img links - get_template_directory_uri()
3. header.php - website header 
4. footer.php - website footer
5. body_class to body

#functions.php -> dynamic css and js links - 
wp_enqueue_style(), wp_enqueue_script(),  wp_head(), wp_footer()

#Connect the image - before creating header and footer.php
https://developer.wordpress.org/reference/functions/get_template_directory_uri/
<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" />

#header, footer - header.php, footer.php - 
get_header(), get_footer()

JQuery - to connect wp jquery - wp_enqueue_script('jquery');

Add css and js
https://developer.wordpress.org/themes/core-concepts/custom-functionality/
https://developer.wordpress.org/themes/classic-themes/basics/including-css-javascript/
https://developer.wordpress.org/themes/core-concepts/including-assets/
https://developer.wordpress.org/reference/functions/wp_enqueue_style/
https://developer.wordpress.org/reference/functions/wp_enqueue_script/
https://developer.wordpress.org/reference/functions/wp_enqueue_scripts/

body_class()
<body class="<?php body_class(); ?>">

==Step 3: inc folder in theme root==
functions.php, inc/theme_enqueue.php

1. Split the codes in separate files - inc/theme_enqueue.php
2. Connect to functions.php

To maintain functions.php easily, create a inc folder -> theme_enqueqe.php file 
Put all the css js in it, connect file to functions.php using require()

require() / require_once(): If the target file is missing, PHP triggers a fatal error and immediately stops running the script.
include / include_once: If the target file is missing, PHP triggers a warning but continues running the script anyway 
https://wordpress.stackexchange.com/questions/206703/the-proper-way-to-include-require-php-files-in-wordpress

get_template_directory()
Returns a server file path (e.g., /home/user/public_html/wp-content/themes/my-theme). 
Used for backend PHP operations like loading or reading local files. 
Ideal with include, require, or require_once.
https://developer.wordpress.org/reference/functions/get_template_directory/

get_template_directory_uri()
Returns a web address URL (e.g., https://example.com).
Used for frontend HTML assets that the browser needs to download.
Ideal for linking stylesheets, JavaScript files, and images via functions like wp_enqueue_script
https://developer.wordpress.org/reference/functions/get_template_directory_uri/

https://wordpress.stackexchange.com/questions/208629/difference-and-usage-of-uri-e-g-get-directory-uri-and-absolute-path-e-g-get

==Step 4: dynamic menubar==
inc/theme_menu.php, functions.php, header.php

1. Create inc/theme_menu.php -> register_nav_menu()
2. Connect to functions.php -> require()
3. Creating menu form appearance
4. Calling the menu to header.php -> wp_nav_menu()
5. Customize style -> style.css -> menu style

Create a custom menu in wordpress
https://www.wpbeginner.com/wp-themes/how-to-add-custom-navigation-menus-in-wordpress-3-0-themes/

add_action( 'after_setup_theme', 'twentyfifteen_setup' );
https://developer.wordpress.org/reference/hooks/after_setup_theme/

after_setup_theme action hook fires during every page load right after the theme is initialized, making it the ideal place to add basic theme support, load text domains, and register navigation menus before pluggable functions load.

register_nav_menu() for creating a single menu
https://developer.wordpress.org/reference/functions/register_nav_menu/

register_nav_menus() for creating multiple menus at once.
https://developer.wordpress.org/reference/functions/register_nav_menus/

wp_nav_menu() to display your custom menu.
https://developer.wordpress.org/reference/functions/wp_nav_menu/
https://codex.wordpress.org/Navigation_Menus

numbered placeholders – %1$s, %2$s, %3$s
https://wordpress.stackexchange.com/questions/19245/any-docs-for-wp-nav-menus-items-wrap-argument

<?php 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>' ?> - wp default
<?php 'items_wrap' => '<ul class="right_side">%3$s</ul>', - used in project

In wp_nav_menu(), item_wrap defines the HTML wrapper around the menu items:

%3$s is replaced by the generated menu items, usually the <li> elements.
<ul class="right_side">
  <li><a href="...">Home</a></li>
  <li><a href="...">Contact</a></li>
</ul>

The placeholders are:
%1$s: menu ID
%2$s: menu CSS classes
%3$s: menu items - WordPress replaces menu items between ul with it

Why %3$s instead of writing the <li> elements?
Because WordPress creates the <li> elements automatically based on the menu configured in the admin panel. %3$s is a placeholder where those items are inserted.

walker'      => new WPTB1_Walker_Nav_Menu()

The walker generates Bootstrap-style nav markup for the header menu.

add_theme_support('menus'); 
it tells WordPress: “this theme can have menus”, it enables menu support.
then register_nav_menus() defines where those menus live
https://developer.wordpress.org/reference/functions/add_theme_support/




== Step 5: blog post using loop ==
index.php, inc/theme_support.php, functions.php

1. index.php - keeping one article to show default blog post,
2. index.php - Adding if statement, loop to show default blog post - have_posts() the_post(), If(), endif; While(), endwhile;
3. inc/theme_support.php - Adding theme support for featured image
4. functions.php - connect inc/theme_support.php
5. index.php - Featured image - the_post_thumbnail()
6. Date,
7. post title, excerpt,
7. category,
8. number of comments,
9. pagination 

Inside functions.php(inc/theme_support.php) - enabling feature image in editor by adding theme support
Inside style.css - pagination css might be added. (inc/theme_enqueue.php need to update if needed, this page was named inc/enqueue.php)

Showing default blog post
if ( have_posts() ) :
while ( have_posts() ) : the_post();
		//content
endwhile;
endif;
https://developer.wordpress.org/themes/classic-themes/basics/the-loop/
Feature image - with img class
the_post_thumbnail()
the_post_thumbnail('large', array('class' => 'card-img rounded-0'))

in functions.php (in inc folder/theme_support.php), must call into a function
add_theme_support( 'post-thumbnails' ) 

https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
https://developer.wordpress.org/reference/functions/the_post_thumbnail/
https://developer.wordpress.org/reference/functions/add_theme_support/
https://wordpress.stackexchange.com/questions/102158/add-class-name-to-post-thumbnail

Date functions -  
get_the_time(), the_time(), the_date(),
get_the_time('Y'), get_the_time('m'), get_the_time('d'), get_day_link(), the_time()

https://wordpress.org/documentation/article/customize-date-and-time-format/
https://developer.wordpress.org/reference/functions/get_the_date/
https://developer.wordpress.org/reference/functions/get_the_time/
https://developer.wordpress.org/reference/hooks/get_the_time/
https://developer.wordpress.org/reference/functions/get_day_link/
https://developer.wordpress.org/reference/functions/the_time/


the_permalink() for ( linking a post or image )
<?php the_permalink(); ?>
https://developer.wordpress.org/reference/functions/the_permalink/

the_title() - (showing post title)
<?php the_title( '<h3>', '</h3>' ); ?>
https://developer.wordpress.org/reference/functions/the_title/

the_excerpt() - (Displays the post excerpt.)
<?php the_excerpt(); ?>
https://developer.wordpress.org/reference/functions/the_excerpt/

the_category() - (Displays category list for a post)
<?php the_category( ', ' ); ?>
https://developer.wordpress.org/reference/functions/the_category/

comments_popup_link() - Displays the link to the comments for the current post ID
<?php 
comments_popup_link( 
    'No Comments', // Text when there are 0 comments
    '1 Comment',   // Text when there is 1 comment
    '% Comments',  // Text when there are more than 1 (% is replaced by the number)
    'comments-link', // CSS class for the link
    'Comments Off' // Text when comments are closed
); 
?>
https://developer.wordpress.org/reference/functions/comments_popup_link/

comments_number() - number of comments
<?php comments_number( '0', '1', '%' ); ?>
https://developer.wordpress.org/reference/functions/comments_number/

blog pagination - 
the_posts_pagination()
<?php the_posts_pagination( array(
          'mid_size'  => 2,
          'prev_text' => __( '<i class="ti-arrow-left"></i>', 'EWP Theme' ),
          'next_text' => __( '<i class="ti-arrow-right"></i>', 'EWP Theme' )
      )); 
?>
https://developer.wordpress.org/reference/functions/the_posts_pagination/
https://www.wpeditorial.com/how-to-use-the-the_posts_pagination-function-in-wordpress/

mid_size - বর্তমান পৃষ্ঠার উভয় পাশে কয়টি সংখ্যা, কিন্তু বর্তমান পৃষ্ঠা অন্তর্ভুক্ত নয়

If necessary, we have to add css for pagination. 
style.css - (root css)(written css might not work if wp_enqueue_style( 'theme_css', get_template_directory_uri() ); is used, instead use wp_enqueue_style( 'theme_css', get_stylesheet_uri() );) 

.pagination .nav-links .page-numbers {
    padding: 10px 20px !important;
    background: #fffefe !important;
    border: 1px solid #eee !important;
    color: #7d6f6f !important;
}
.pagination .nav-links .page-numbers:hover {
    color: #fff !important;
    background: #71CD14 !important;
}
.pagination .nav-links .current {
    color: #fff !important;
    background: #71CD14 !important;
}

Settings => reading => blog pages show at most ##  change the value

==Step 6: sidebar==
sidebar.php, index.php

1. Creating sidebar.php, cut the code from the index.php sidebar part.
2. Calling into index.php using get_sidebar()

To call  get_sidebar()
https://developer.wordpress.org/reference/functions/get_sidebar/
https://developer.wordpress.org/themes/classic-themes/functionality/sidebars/

==Step 7: single blog post, post loop, social share, blog author==
single.php

single.php for single blog post
1. Create single.php, clicking a blog post will bring the user in a blank template.
2. Copy single-blog.html to single.php. 
3. Modify (add header, footer, sidebar), no new css and js file needed to add.
4. Calling a blog from blog page to single blog page using blog post loop.
Post loop
Featured image
Post title
Category, comments number
Content
Social share (css might need to add in icon css file)
Blog author(img, title, description)
Comments form - in next step

Post loop, have_posts(), the_post(),
https://developer.wordpress.org/reference/functions/have_posts/
https://developer.wordpress.org/reference/functions/the_post/
https://developer.wordpress.org/themes/classic-themes/basics/the-loop/

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        // Your loop code
    endwhile;
else :
    _e( 'Sorry, no posts were found.', 'textdomain' );
endif;

the_content()
https://developer.wordpress.org/reference/functions/the_content/

Share blog post on social media share icon
https://dev.to/shahednasser/how-to-easily-add-share-links-for-each-social-media-platform-1l4f
https://www.siamcomm.com/how-tos/adding-custom-sharing-buttons-facebook-twitter-linkedin-wordpress/
https://properprogramming.com/blog/create-39-social-network-share-link-generator-and-guide-2023/

<a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>">Share on Facebook</a>

<a target="_blank" href="http://twitter.com/intent/tweet?text=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>"> Share on Twitter</a>

<a target="_blank" title="share on linkedin" href="https://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title();?>&amp;url=<?php the_permalink();?>">

Other - (need to check)
<a href="https://facebook.com<?php echo urlencode(get_permalink()); ?>" target="_blank">Share on Facebook</a>

<a href="https://twitter.com<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" target="_blank">Share on X</a>

<a href="https://linkedin.com<?php echo urlencode(get_permalink()); ?>" target="_blank">Share on LinkedIn</a>

Other - (need to check)
<a href="<?php echo esc_url( add_query_arg('u', get_permalink(), 'https://www.facebook.com/sharer/sharer.php' )); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php echo esc_attr( 'Share "' . get_the_title() . '" on Facebook' ); ?>"> <i class="ti-facebook" aria-hidden="true"></i></a>

 <a target="_blank" href="http://twitter.com/intent/tweet?text=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>"><i class="ti-twitter"></i></a>

<a href="https://www.instagram.com/yourusername/" target="_blank" rel="noopener noreferrer" aria-label="Visit us on Instagram"> <i class="ti-instagram" aria-hidden="true"></i></a>

<a href="<?php echo esc_url( add_query_arg( 'url', get_permalink(), 'https://www.linkedin.com/sharing/share-offsite/' )); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php echo esc_attr( 'Share "' . get_the_title() . '" on LinkedIn' ); ?>"> <i class="ti-linkedin" aria-hidden="true"></i></a>

Blog author
get_avatar() 
<?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>

get_the_author()

get_the_author_meta()
https://developer.wordpress.org/reference/functions/get_avatar/
https://developer.wordpress.org/reference/functions/get_author_posts_url/
https://developer.wordpress.org/reference/functions/get_the_author_meta/

==Step 8: Comments==
single.php, comments.php

1. Add code to single.php
2. Search comments template form wordpress.org doc
3. Add the comments template to comments.php
4. Add arguments before comment_form(), into the same php block, in comments.php if custom style needed
5. Custom btn class - 'class_submit' => 'main_btn',

code to single.php for basic layout
if ( comments_open() || get_comments_number() ) :
	comments_template();
endif;

Search for “ wordpress.org comments template ” read the doc
https://developer.wordpress.org/themes/classic-themes/templates/partial-and-miscellaneous-template-files/comment-template/
Copy the template to comments.php

==Step 9: archive page==
archive.php, functions.php

1. Creating archive.php for category or date archive
2. index.php template code is used to archive.php
3. Add archive title, description, 
4. Remove category/day text, add add_filter in functions.php


the_archive_title( '<h1 class="page-title">', '</h1>' );
https://developer.wordpress.org/reference/functions/the_archive_title/

the_archive_description( '<div class="taxonomy-description">', '</div>' );
https://developer.wordpress.org/reference/functions/the_archive_description/

hierarchy
https://developer.wordpress.org/themes/classic-themes/basics/template-hierarchy/
https://developer.wordpress.org/reference/functions/single_cat_title/

To show the_archive_title() properly add_filter added in functions.php
