# wpt-blog

Step 1: Template install
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


Step 2: css and js links, blog page, index page, copy the template
Copy blog.html to index.php, connecting header.php, footer.php

Add css and js
https://developer.wordpress.org/themes/classic-themes/basics/including-css-javascript/
https://developer.wordpress.org/themes/core-concepts/including-assets/
https://developer.wordpress.org/reference/functions/wp_enqueue_style/
https://developer.wordpress.org/reference/functions/wp_enqueue_script/
https://developer.wordpress.org/reference/functions/wp_enqueue_scripts/

dynamic css and js links - functions.php -
wp_enqueue_style(), wp_enqueue_script(),  wp_head(), wp_footer()

header, footer - header.php, footer.php - 
get_header(), get_footer()

JQuery - to connect wp jquery - wp_enqueue_script('jquery');



