<?php
//functions.php



//get SEO title 
function get_title(){
	
	global $post;
	
	if(is_front_page()){
		bloginfo('description');
	}
	elseif(is_page() || is_single()){
		the_title();
	}
	else{
		bloginfo('description');
	}
	
	if($post->post_parent){
		echo ' | ';
		echo get_the_title($title->post_parent);
		}
	else {
		echo ' | ';
		bloginfo('name');
		echo ' | ';
		echo 'Seattle, WA';
	}
}


//meta data stuffs
add_post_type_support( 'page', 'excerpt' );



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

function add_flexslider() {
	
	global $post;
	
	$attachments = get_children(array('post_parent' => $post->ID, 'order' => 'ASC', 'orderby' => 'menu_order', 'post_type' => 'attachment', 'post_mime_type' => 'image'));
	
	if($attachments) {
	echo '<div class="flexslider">';
	echo '<ul class="slides">';
	
	   foreach($attachments as $attachment){
		   
			echo '<li>';
			echo wp_get_attachment_image($attachment->ID, 'full');
			echo '<p>';
			echo get_post_field('post-excerpt', $attachment->ID);
			echo '</p>';
		    echo '</li>';
	   } 
	echo '</ul>';
	echo '</div>';
	}
}

?>