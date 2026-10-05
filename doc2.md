<table>
<tr>
<td style="background-color: #d9d9d9; padding: 20px; border-radius: 5px;">
<strong>Step 13: Footer widget</strong>
</td>
</tr>
</table>

**Files:** inc/register_sidebar.php, footer.php, style.css (if needed)

**Steps:**

1. Check the layout from footer.php to add page list
2. in inc/register_sidebar.php calling functions (we can use the_widget function also)
3. To add pages, add a group (add title, add page list). Btw, pages are not created properly so only the sample page will be shown.
4. Check the layout to add quick links as before, custom html blocks will be used.
5. Copy the ul li a code here
6. Features and resources will be same
7. Newsletter (not now)

---

<table>
<tr>
<td style="background-color: #d9d9d9; padding: 20px; border-radius: 5px;">
<strong>Step 14: Breadcrumb and titlebar</strong>
</td>
</tr>
</table>

**Files:** inc/breadcrumb.php, functions.php, style.css

**Steps:**

1. Breadcrumb can be added in titlebar using the MJ WP Breadcrumb GitHub repo
2. Create inc/breadcrumb.php file
3. Connect to functions.php using `require()`
4. Echo breadcrumb function into pages - page_link div (index.php, single.php, archive.php, search.php, etc.). Currently testing in 2 pages (index, single)
5. Add custom CSS styling

**Reference:**
- https://github.com/mobilejazz/MJ-WP-Breadcrumb/blob/master/mj-wp-breadcrumb.php

**Breadcrumb CSS - Add to style.css:**

```css
.breadcrumb {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding: .75rem 1rem;
    margin-bottom: 1rem;
    list-style: none;
    background-color: #fff;
    border-radius: .25rem;
}

.breadcrumb .active {
    color: #71CD14;
}

.breadcrumb li::after {
    content: " ";
    margin-right: 5px;
}

.breadcrumb .active:hover {
    color: #000000;
}

.breadcrumb .active::before {
    content: " / ";
}
```
---
<table>
<tr>
<td style="background-color: #d9d9d9; padding: 20px; border-radius: 5px;">
<strong>Step 15: Option framework redux</strong>
</td>
</tr>
</table>

**Files:** option_tree, functions.php, 

**Steps:**
1. Download and integrate redux to root folder
2. Renaming the folder to option_tree
3. Connection to functions.php using 
   `/option_tree/redux-core/framework.php; or /option_tree/redux-framework.php;`
   and `/option_tree/sample/sample-config.php;`
4. keeping a copy of sample-config.php is good practice
5. Sample options is added to wp admin panel

Note - too many files, thats why only sample-config.php is uploaded to git

**Doc**
- https://devs.redux.io/

**Download** 
- https://github.com/reduxframework/redux-framework

>Note : because of the redux option tree, a lot of css will be inherited by default, that’s why the website's style will be hampered.
---
==Step 16: Option framework - header==
option_tree/sample/sample-config.php, sample/sections/media-uploads/logo.php, header.php, style.css, sample/sections/media-uploads/fav.php, sample/sections/media-uploads/toptext.php, 

1. Change the $opt_name, menu_title, page_title, dev_mode, admin_bar, customizer, page_priority, menu_icon, intro_text, footer_text, 
2. Get icon class form icon library
3. Showing logo, editing code, just use the start basic fields, copy paste it.
4. Also need to modify the sample/sections php files
5. Then calling the globar variable into header.php, and calling the variable + logo id + url(for img url parameter is needed)
6. Custom css for logo if needed.
7. In <a> tag, adding dynamic home url
8. In Alt we can add page title, just need to add text field under logo
9. Favicon(same process)
10. If the favicon is already added from the general setting then the theme opt favicon will not work.
11. It will be easy if someone delete the fields from sample-config.php and copy the necessary code from backup. This will help to reduce the duplicate css classes. 
12. Top bar text same process
```html
<a class="navbar-brand logo_h" href="<?php echo home_url('/'); ?>">
   <img src="<?php echo $wpdev['logo_img']['url']; ?>" alt="Logo" />
</a>
```
**Icon library**
- https://developer.wordpress.org/resource/dashicons/
- http://elusiveicons.com/icons/
---
==Step 17: Option framework -home page hero==
sample/sections/wpt/logo.php
sample/sections/wpt/fav.php
sample/sections/wpt/toptext.php

sample/sample-config.php,
sample/sections/wpt/hero_bg.php
sample/sections/wpt/hero.php
home page(front-page.php), index.html, style.css(template), style.css(theme)

Note - updating new file path to manage the editor files of redux framework easily(logo, fav, toptext)

1. Creating option in sample-config.php for main home page - hero section(background image, text, button) 
2. Creating front-page.php(default name) for main home page using template index.html in theme root directory
3. Copy the index.html to front-page.php, edit header, footer, 
4. Add a DocBlock code comment in front-page
5. To set it as front page, pages -> add new -> page attribute -> front page template -> publish
6. Settings -> reading -> homepage to home
7. Pages -> add new -> blog, Settings -> reading -> posts page -> blog
8. Menu -> adding pages to menu
9. front-page.php -> connect image using get_template_directory_uri() and icons using classes to get a proper view. 
10. To make hero background image dynamic -> remove style.css background image code and add to front-page.php inline css
11. To make change of button color -> add color -> need to add hover css code to style.css(theme) also


**Template**
https://developer.wordpress.org/themes/classic-themes/basics/template-hierarchy/

**DocBlock**
https://developer.wordpress.org/themes/classic-themes/templates/page-template-files/
```php
<?php
/**
* Template Name: Front Page
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
```
```html
<section class="home_banner_area mb-40" style="background: url(<?php echo esc_url( $wpdev[ 'h_hero_bg_img' ]['url'] ); ?>) no-repeat center bottom; background-size: cover;">
```
```html
<a class="main_btn mt-40" href="<?php echo esc_url( $wpdev[ 'h_btn_url' ] ); ?>" style="background-color: <?php echo esc_attr( $wpdev[ 'h_btn_color' ] ); ?>;">
<?php echo esc_html( $wpdev[ 'h_btn_text' ] ); ?>
</a>
```
---
==Step 18: Option framework - home feature, promo banner section, footer bottom==
sample-config.php, front-page.php, footer.php, check.php, editor.php

1. Creating featured items using theme option or custom post
2. Promo banner like hero section using theme option
3. Footer bottom -> adding code to sample-config.php, adding checkbox to enable or disable the footer bottom. For copyright taking an editor, for social media taking text for icon and url
4. Calling to footer.php
```php
<?php
$edfb = $wpdev['ed_check'];
if($edfb == 1){ 
?>
Footer bottom
<?php } ?>
```
---
