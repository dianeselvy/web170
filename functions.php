<?php
//functions.php




//register nav menus
register_nav_menus(array(
    'main-menu' => __( 'Main', 'Dizzle'),
));


//Post thumbs
add_theme_support( 'post-thumbnails' );

//Register sidebarz
register_sidebars();




//Sub-nav
function my_subnavigation() {
	
	if(is_page()) {

    if($post->post_parent) {  
        echo '<h2>'.get_the_title($post->post_parent).'</h2>';
        echo '<ul>';
        wp_list_pages(array('title_li' => '','child_of' => $post->post_parent,));//do this
        echo '</ul>';
    }

    else {
        echo '<h2>'.get_the_title($post->post_parent).'</h2>';
        echo '<ul>';
        wp_list_pages(array('title_li' => '','child_of' => $post->ID,));//do this
        echo '</ul>';
    }
    }

    if(!(is_page())) {
        
        //echo '<h2>'.get_the_title($post->post_parent).'</h2>';
        echo '<h2>Blog</h2>';
        echo '<ul>';
        wp_list_categories(array('title_li' => '',));
        echo '</ul>';
        
    }
	
}


?>