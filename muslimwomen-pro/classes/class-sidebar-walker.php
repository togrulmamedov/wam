<?php

/* Collection of Walker classes */

/*
    wp_nav_menu()

    <div class="menu-container">
        <ul> // start_lvl()
            <li><a><span> // start_el()
            </span></a></li> // end_el()

            <li><a>Link</a></li>
            <li><a>Link</a></li>
            <li><a>Link</a></li>
            <li><a>Link</a></li>
        </ul> // end_lvl()
*/

/**
 * Walker for sidebar
 * @author Tohrul <tohrul@ukr.net>
 * @version 1.0.0
 */
class SidebarWalker extends Walker_Nav_Menu{

    /**
     * Handles <ul> tag generation
     *
     * @param [string] $output
     * @param [integer] $depth
     * @return void
     */
    function start_lvl(&$output, $depth){
        $indent = str_repeat("\t", $depth);
        $ulElementClass = ($depth > 0) ? 'sub-menu' : '';
        $output .= "\n" . $indent . "<ul class=\"" . $ulElementClass . "\">" . "\n";
    }

    /**
     * Handles <li>, <a> and <span> tags generation
     *
     * @param [string] $output
     * @param [array] $item
     * @param integer $depth
     * @param array $args
     * @param integer $id
     * @return void
     */
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0){
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        $liAttributes = ''        ;
        $classNames = $value = '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = ($args->walker->has_children) ? 'no-border' : '';  // if <li> has a child
        $classes[] = ($item->current || $item->current_item_anchestor) ? 'mw-current' : ''; // if menu item is current page
        
        if ($depth && $args->walker->has_children){
            $classes[] = 'sub-menu--item';
        }

        $classNames = join(' ', apply_filters('nav_menu_css_class', array_filters($classes), $item, $args));
        $classNames = 'class="' . esc_attr($classNames)  . '"';

        $id = apply_filters('nav_menu_item_id', 'mw-menu--itemID-' . $item->ID, $item, $args);
        $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

        $output .= "\n" . $indent . "<li" . $id . $value . $classNames . $liAttributes . ">";

        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel"' . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
        $attributes .= ($args->walker->has_children) ? ' class="mw-menu--link"' : ' class="sub-menu--link"';

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= ($depth == 0 && $args->walker->has_children) ? ' <i class="fa fa-angle-down mw-angle"></i></a><hr class="mw-line" />' : '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

    // function end_el(){  // handles </li>, </a> and </span> generation

    // }

    // function end_lvl(){ // handles </ul> generation

    // }
}


?>