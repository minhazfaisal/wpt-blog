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
