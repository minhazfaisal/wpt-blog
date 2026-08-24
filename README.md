# wpt-blog

**Step 1: Template install**

Installing wp, creating theme folder in wp-content/themes/, 
creating file index.php and style.css, screenshot.png in root theme folder

Core concept
	https://developer.wordpress.org/themes/core-concepts/theme-structure/

Style.css to wordpress
	https://developer.wordpress.org/themes/core-concepts/main-stylesheet/
	https://developer.wordpress.org/themes/classic-themes/basics/main-stylesheet-style-css/

screenshot.png - 1200*900 px

index.php 

Template checking - html, css, js, organize template if needed

Wp settings - permalink - post name


**Step 2: css and js links, blog page, index page, copy the template**

Connect the image - before creating header and footer.php
https://developer.wordpress.org/reference/functions/get_template_directory_uri/
<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" />

Copy the template to theme folder, copy blog.html to index.php, connecting functions.php, header.php, footer.php

Add css and js
	https://developer.wordpress.org/themes/core-concepts/custom-functionality/
	https://developer.wordpress.org/themes/classic-themes/basics/including-css-javascript/
	https://developer.wordpress.org/themes/core-concepts/including-assets/
	https://developer.wordpress.org/reference/functions/wp_enqueue_style/
	https://developer.wordpress.org/reference/functions/wp_enqueue_script/
	https://developer.wordpress.org/reference/functions/wp_enqueue_scripts/

dynamic css and js links - 
functions.php -
	wp_enqueue_style(), wp_enqueue_script(), wp_head(), wp_footer()

header, footer - header.php, footer.php - 
	get_header(), get_footer()

JQuery - to connect wp jquery - wp_enqueue_script('jquery');
 

Css links = 13 including theme css (total 12 files in all css links maybe)
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="vendors/linericon/style.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/themify-icons.css" />
  <link rel="stylesheet" href="css/flaticon.css" />
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css" />
  <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
  <link rel="stylesheet" href="vendors/animate-css/animate.css" />
  <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css" />

Scripts 15
	<script src="js/jquery-3.2.1.min.js"></script>
  	<script src="js/popper.js"></script>
  	<script src="js/bootstrap.min.js"></script>
  	<script src="js/stellar.js"></script>
  	<script src="vendors/lightbox/simpleLightbox.min.js"></script>
  	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
  	<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
  	<script src="vendors/isotope/isotope-min.js"></script>
  	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  	<script src="vendors/jquery-ui/jquery-ui.js"></script>
  	<script src="js/jquery.ajaxchimp.min.js"></script>
  	<script src="js/mail-script.js"></script>
  	<script src="vendors/counter-up/jquery.waypoints.min.js"></script>
  	<script src="vendors/counter-up/jquery.counterup.js"></script>
  	<script src="js/theme.js"></script>

body_class()
<body class="<?php body_class(); ?>">

**Step 3: inc folder in theme root**
To maintain functions.php easily create a inc folder -> enqueqe.php file 
Put all the css js in it, connect file to functions.php using require()

require / require_once: If the target file is missing, PHP triggers a fatal error and immediately stops running the script.
include / include_once: If the target file is missing, PHP triggers a warning but continues running the script anyway 

https://wordpress.stackexchange.com/questions/206703/the-proper-way-to-include-require-php-files-in-wordpress

get_template_directory()
Returns a server file path (e.g., /home/user/public_html/wp-content/themes/my-theme). 
Used for backend PHP operations like loading or reading local files. 
Ideal with include, require, or require_once.

get_template_directory_uri()
Returns a web address URL (e.g., https://example.com).
Used for frontend HTML assets that the browser needs to download.
Ideal for linking stylesheets, JavaScript files, and images via functions like wp_enqueue_script

https://wordpress.stackexchange.com/questions/208629/difference-and-usage-of-uri-e-g-get-directory-uri-and-absolute-path-e-g-get

**Step 4: menubar**
Inc folder -> menu.php -> calling to functions.php, 
register_nav_menus(), creating menu from Appearance, calling to header.php using wp_nav_menu() 

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

The walker generates Bootstrap-style nav markup for header menu.

add_theme_support('menus'); 
it tells WordPress: “this theme can have menus”, it enables menu support.
then register_nav_menus() defines where those menus live
https://developer.wordpress.org/reference/functions/add_theme_support/

