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
 */
class SidebarWalker extends Walker_Nav_Menu{

    function start_lvl(&$output, $depth){   // handles <ul> generation
        $indent = str_repeat("\t", $depth);
        $ulElementClass = ($depth > 0) ? 'sub-menu' : 'mw-menu';
        $output .= "\n" . $indent . "<ul class=\"" . $ulElementClass . "\">" . "\n";
    }

    function start_el(){    // handles <li>, <a> and <span> generation

    }

    function end_el(){  // handles </li>, </a> and </span> generation

    }

    function end_lvl(){ // handles </ul> generation

    }
}


?>