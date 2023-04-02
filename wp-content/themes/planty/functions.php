<?php
// action to enqueue parent theme's style.css
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

// action with priority 20. 
// we take wallstreet-style out of the queue and we enter the child's style.css
add_action('wp_enqueue_scripts', 'style_theme_enfant', 20);

function style_theme_enfant() {
    wp_dequeue_style('wallstreet-style', get_stylesheet_uri() );
    wp_enqueue_style('enfant-style', get_stylesheet_uri() );
}

//Add function to show Admin button for logged in user and no logged out user
function remove_menu_items( $items, $args ) {

    // If you need to remove several menu items, then it's good practice to set a variable for the check beforehand so that it's not running the same check function repeatedly.
    foreach ( $items as $item_index => $item ) {
        // Remove "Admin" menu item when not logged in
        if ( $item->title == 'Admin' ) {
            if ( !is_user_logged_in() ) {
                unset($items[$item_index]);
            }else{

            	if ( !current_user_can( 'manage_options' ) ) {

            		unset($items[$item_index]);

            	}

            }
        }
    }
    return $items;
}
add_filter( 'wp_nav_menu_objects', 'remove_menu_items', 10,2);