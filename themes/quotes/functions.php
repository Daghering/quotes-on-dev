<?php

require get_theme_file_path('/inc/api-route.php');

//Add custom fields to JSON API data
function qod_custom_rest() {
    register_rest_field('post', 'quoteSource', array(
        'get_callback' => function(){return get_field('quote_source');}
    ));
    register_rest_field('post', 'quoteURL', array(
        'get_callback' => function(){return get_field('quote_source');}
    ));
}

//Adds script and stylesheets
function quotes_files() {
    wp_enqueue_style('quotes_styles', get_stylesheet_uri('/build/css/style.min.css'), NULL, microtime());
    wp_enqueue_style('fonts', "https://fonts.googleapis.com/css?family=Lato&display=swap");
    wp_enqueue_style('font-awesome', "https://use.fontawesome.com/releases/v5.8.2/css/all.css");
    wp_enqueue_script('qod_api', get_template_directory_uri() . '/js/api.js', array('jquery'), microtime(), true);
    wp_localize_script('qod_api', 'qod_data', array(
        'root_url' => get_site_url(),
        'nonce' => wp_create_nonce('wp_rest')
    ));

    // wp_localize_script('qod_api', 'api_url', array(
    //     'root_url' => rest_url(),
    //     'home_url' => home_url(),
    //     'nonce' => wp_create_nonce('wp_rest')
    // ));
}

add_action('wp_enqueue_scripts', 'quotes_files');

//Adds theme support - ex: title tag
function quotes_features() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'quotes_features');


//filter posts on front page

function qod_filter_home($query) {
    if ( is_home() && $query->is_main_query() ) : 
        $query->set('orderby', 'rand');
        $query->set('posts_per_page', 1);

endif;
}

add_action('pre_get_posts', 'qod_filter_home')


?>