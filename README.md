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




