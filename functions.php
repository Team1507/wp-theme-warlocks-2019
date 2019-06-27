<?php

// Register Main Menu
add_action('init', function () {
    register_nav_menu('primary', 'Main Navigation Menu');
});

// Define Custom Walker Class for the Main Menu
class Header_Nav_Menu extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args=array()) {
        $output .= '<ul class="dropdown-menu">';
    }

    function end_lvl(&$output, $depth = 0, $args=array()) {
        $output .= '</ul>';
    }

    function start_el(&$output, $item, $depth = 0, $args=array(), $id = 0) {
        $has_children = (!empty($item->classes) &&  is_array($item->classes) && in_array('menu-item-has-children', $item->classes)) ? true : false;
        
        if($depth == 0 && !$has_children) {
            $output .= '<li class="nav-item"><a class="nav-link navbar-top-element" href="'.$item->url.'">'.$item->title.'</a>'; 
        } else if ($depth == 0 && $has_children) {
            $output .= '<li class="nav-item dropdown"><a class="nav-link dropdown-toggle navbar-top-element" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$item->title.'</a>';
        } else if ($depth > 0 && !$has_children) {
            $output .= '<li><a class="dropdown-item" href="'.$item->url.'">'.$item->title.'</a>';
        } else if ($depth > 0 && $has_children) {
            $output .= '<li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">'.$item->title.'</a>';
        }
    }

    function end_el(&$output, $item, $depth = 0, $args=array()) {
        $output .= '</li>';
    }
}

?>