<?php

/** 
 * Load the plugin assets
 */
function robots_plugin_enqueue_assets() {

    $args = array();
    wp_enqueue_script(
        'robots-assets-plugin',
        ROBOTS_FACTORY_PLUGIN_ASSETS_DIR . '/js/scripts.js',
        array( 'jquery' ), 
        '1.1', 
        $args
    );

    wp_localize_script( 'robots-assets-plugin', 'my_ajax_object',
		array( 
			'ajax_url' => admin_url( 'admin-ajax.php' ),
		)
	);


}
add_action( 'wp_enqueue_scripts', 'robots_plugin_enqueue_assets' );


/**
 * Function that handles the AJAX call and add a like to the post
 *
 * @return void
 */
function robots_like_button() {

    // if ( empty( $_POST['action'] ) ) {
    //     return;
    // }

    $post_id = esc_attr( $_POST['post_id'] );

    $likes_number = get_post_meta( $post_id, 'likes', true );

    if ( empty( $likes_number ) ) {
        $likes_number = 0;
    }

    // add custom logic to prevent bad users
    update_post_meta( $post_id, 'likes', $likes_number + 1 );
}

add_action( 'wp_ajax_nopriv_robots_like_button', 'robots_like_button' );
add_action( 'wp_ajax_robots_like_button', 'robots_like_button' );


/**
 * Add the top level menu page.
 */
function robots_options_page() {
	add_menu_page(
		'Robots Options',
		'Robots Options',
		'manage_options',
		'robots-options',
		'robots_options_page_html'
	);
}
/**
 * Register our softuni_options_page to the admin_menu action hook.
 */
add_action( 'admin_menu', 'robots_options_page' );

function robots_options_page_html() {
    include ROBOTS_FACTORY_PLUGIN_INCLUDES_DIR . '/options-page.php';
}