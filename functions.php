
<?php
function enqueue_nathalie_mota_scripts()
{
    // Fichier CSS principal
    wp_enqueue_style('nathalie-mota-css', get_stylesheet_directory_uri() . '/style.css');

    // Script principal
    wp_enqueue_script('nathalie-mota-js', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_nathalie_mota_scripts');
