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
