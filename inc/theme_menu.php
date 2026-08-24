<?php
// function wpt1_menu() {
//     add_theme_support('menus');

//     register_nav_menus(array(
//         'top'    => __('Header Top Menu', 'wpt1'),
//         'main'   => __('Main Menu', 'wpt1'),
//         'footer' => __('Footer Menu', 'wpt1'),
//     ));
// }
// add_action('after_setup_theme', 'wpt1_menu');
// add_action('init', 'wpt1_menu');

// class WPTB1_Walker_Nav_Menu extends Walker_Nav_Menu {

//     // This runs when a submenu starts. <ul class="dropdown-menu">
//     public function start_lvl(&$output, $depth = 0, $args = null) {
//         $indent = str_repeat("\t", $depth);
//         $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
//     }

//     // This runs for each individual menu item. it generate like this: That matches Bootstrap-style nav structure.
//     // <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
//     // <li class="nav-item dropdown">
//     //   <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Shop</a>
//     //   <ul class="dropdown-menu">
//     //       <li class="nav-item">
//     //           <a class="nav-link" href="#">Category</a>
//     //       </li>
//     //       <li class="nav-item">
//     //           <a class="nav-link" href="#">Product</a>
//     //       </li>
//     //   </ul>
//     // </li>
//     public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
//         $classes = empty($item->classes) ? array() : (array) $item->classes;
//         $classes[] = 'nav-item';

//         if (in_array('menu-item-has-children', $classes)) {
//             $classes[] = 'dropdown';
//         }

//         if ($depth === 0 && in_array('menu-item-has-children', $classes)) {
//             $classes[] = 'submenu';
//         }

//         $class_names = join(' ', array_filter(array_unique($classes)));
//         $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

//         $output .= '<li' . $class_names . '>';

//         $atts = array();
//         $atts['title']  = ! empty($item->attr_title) ? $item->attr_title : '';
//         $atts['target'] = ! empty($item->target) ? $item->target : '';
//         $atts['rel']    = ! empty($item->xfn) ? $item->xfn : '';
//         $atts['href']   = ! empty($item->url) ? $item->url : '';

//         $atts['class'] = 'nav-link';

//         if (in_array('menu-item-has-children', $classes)) {
//             $atts['class'] .= ' dropdown-toggle';
//             $atts['data-toggle'] = 'dropdown';
//         }

//         $attributes = '';
//         foreach ($atts as $attr => $value) {
//             if (! empty($value)) {
//                 $attributes .= ' ' . $attr . '="' . esc_attr($value) . '"';
//             }
//         }

//         $output .= '<a' . $attributes . '>';
//         $output .= apply_filters('the_title', $item->title, $item->ID);
//         $output .= '</a>';
//     }
// }
?>
<?php
function wpt1_menu() {
    add_theme_support('menus');

    register_nav_menus(array(
        'top'    => __('Header Top Menu', 'wpt1'),
        'main'   => __('Main Menu', 'wpt1'),
        'footer' => __('Footer Menu', 'wpt1'),
    ));
}
add_action('after_setup_theme', 'wpt1_menu');

class WPTB1_Walker_Nav_Menu extends Walker_Nav_Menu {
    public function start_lvl(&$output, $depth = 0, $args = array()) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
    }

    public function end_lvl(&$output, $depth = 0, $args = array()) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $indent = $depth ? str_repeat("\t", $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'nav-item';

        if (in_array('menu-item-has-children', $classes, true)) {
            $classes[] = 'dropdown';
        }

        if ($depth === 0 && in_array('menu-item-has-children', $classes, true)) {
            $classes[] = 'submenu';
        }

        $class_names = join(' ', array_filter(array_unique($classes)));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $output .= $indent . '<li' . $class_names . '>';

        $atts = array();
        $atts['title'] = ! empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = ! empty($item->target) ? $item->target : '';
        $atts['rel'] = ! empty($item->xfn) ? $item->xfn : '';
        $atts['href'] = ! empty($item->url) ? $item->url : '';
        $atts['class'] = 'nav-link';

        if (in_array('menu-item-has-children', $classes, true)) {
            $atts['class'] .= ' dropdown-toggle';
            $atts['data-toggle'] = 'dropdown';
            $atts['role'] = 'button';
            $atts['aria-haspopup'] = 'true';
            $atts['aria-expanded'] = 'false';
        }

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if ($value !== '') {
                $attributes .= ' ' . $attr . '="' . esc_attr($value) . '"';
            }
        }

        $output .= '<a' . $attributes . '>';
        $output .= apply_filters('the_title', $item->title, $item->ID);
        $output .= '</a>';
    }

    public function end_el(&$output, $item, $depth = 0, $args = array()) {
        $output .= "</li>\n";
    }
}
?>
