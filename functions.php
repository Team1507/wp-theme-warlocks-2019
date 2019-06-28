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

// Bootstrap Styled Pagination
function bootstrap_pagination( \WP_Query $wp_query = null, $echo = true ) {
	if ( null === $wp_query ) {
		global $wp_query;
	}
	$pages = paginate_links( [
			'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
			'format'       => '?paged=%#%',
			'current'      => max( 1, get_query_var( 'paged' ) ),
			'total'        => $wp_query->max_num_pages,
			'type'         => 'array',
			'show_all'     => false,
			'end_size'     => 3,
			'mid_size'     => 1,
			'prev_next'    => true,
			'prev_text'    => __( '« Prev' ),
			'next_text'    => __( 'Next »' ),
			'add_args'     => false,
			'add_fragment' => ''
		]
	);
	if ( is_array( $pages ) ) {
		//$paged = ( get_query_var( 'paged' ) == 0 ) ? 1 : get_query_var( 'paged' );
		$pagination = '<div class="pagination d-flex justify-content-center"><ul class="pagination">';
		foreach ( $pages as $page ) {
			$pagination .= '<li class="page-item '.(strpos($page, 'current') !== false ? 'active' : '').'"> ' . str_replace( 'page-numbers', 'page-link', $page ) . '</li>';
		}
		$pagination .= '</ul></div>';
		if ( $echo ) {
			echo $pagination;
		} else {
			return $pagination;
		}
	}
	return null;
}

?>