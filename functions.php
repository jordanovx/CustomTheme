<?php
function jortech_enqueue_assets()
{
    // Enqueue the main CSS file
    wp_enqueue_style('jortech-main-style', get_template_directory_uri() . '/assets/css/main.css');

    // Enqueue Bootstrap CSS
    wp_enqueue_style('jortech-bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css');

    // Enqueue additional CSS files
    wp_enqueue_style('jortech-fontawesome', get_template_directory_uri() . '/assets/css/fontawesome.css');
    wp_enqueue_style('jortech-owl', get_template_directory_uri() . '/assets/css/owl.css');

    // Enqueue jQuery 
    wp_enqueue_script('jquery');

    // Enqueue Bootstrap core JavaScript (Bootstrap requires jQuery)
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), null, true);

    wp_enqueue_script('isotope-js', get_template_directory_uri() . '/assets/js/isotope.js', array('jquery'), null, true);

    wp_enqueue_script('flex-sluder', get_template_directory_uri() . '/assets/js/flex-slider.js', array('jquery'), null, true);

    // Enqueue Owl.js (Owl Carousel JS)
    wp_enqueue_script('owl-js', get_template_directory_uri() . '/assets/js/owl.js', array('jquery'), null, true);

    // Enqueue custom JS
    wp_enqueue_script(
        'custom-js',
        get_template_directory_uri() . '/assets/js/custom.js',
        array('jquery', 'bootstrap-js'), // Ensure jQuery is loaded first
        null,
        true
    );
}


function jortech_enqueue_google_fonts()
{
    wp_enqueue_style('jortech-google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:100,300,400,500,700&display=swap');
}
add_action('wp_enqueue_scripts', 'jortech_enqueue_google_fonts');

function jortech_dequeue_navbar_css()
{
    // Dequeue the navbar.css (Make sure handle matches)
    wp_dequeue_style('navbar-css');
}
add_action('wp_enqueue_scripts', 'jortech_dequeue_navbar_css', 50);

// Dequeue default WordPress styles (if not needed)
function jortech_dequeue_default_styles()
{
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wp-embed');
}
add_action('wp_enqueue_scripts', 'jortech_dequeue_default_styles', 20);

add_action('wp_enqueue_scripts', 'jortech_enqueue_assets');
