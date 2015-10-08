<?php

add_theme_support("post-thumbnails");

if (!function_exists('write_log')) {
    function write_log ( $log )  {
        if ( true === WP_DEBUG ) {
            if ( is_array( $log ) || is_object( $log ) ) {
                error_log( print_r( $log, true ) );
            } else {
                error_log( $log );
            }
        }
    }
}

add_filter('next_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
    return 'class="btn btn-default btn-block BlogListingLoadMore"';
}

add_action('wp_enqueue_scripts', 'unknown_site_scripts');

function unknown_site_scripts() {
    wp_register_script('main_script', get_template_directory_uri() . '/js/main.js');
    wp_enqueue_script('jquery');
    wp_enqueue_script('main_script', get_template_directory_uri() . '/js/main.js');
}