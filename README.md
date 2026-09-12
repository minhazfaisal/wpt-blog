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

