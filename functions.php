<?php
// Enregistre et charge les fichiers CSS et JavaScript du thème
function enqueue_nathalie_mota_scripts()
{
    // Fichiers CSS
    wp_enqueue_style('nathalie-style-css', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_style('nathalie-header-css', get_stylesheet_directory_uri() . '/css/header.css');
    wp_enqueue_style('nathalie-footer-css', get_stylesheet_directory_uri() . '/css/footer.css');
    wp_enqueue_style('nathalie-modal-css', get_stylesheet_directory_uri() . '/css/modal.css');


    // Script principal sans dépendance inutile
    wp_enqueue_script('menu-js', get_stylesheet_directory_uri() . '/js/menu.js', [], null, true);
    wp_enqueue_script('modal-js', get_stylesheet_directory_uri() . '/js/modal.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_nathalie_mota_scripts');

// Enregistre les emplacements de menus pour le thème
function register_my_menus()
{
    register_nav_menus([
        'header' => 'Menu du header',    // Menu principal dans le header
        'footer' => 'Menu du pied de page' // Menu secondaire dans le footer
    ]);
}

add_action('init', 'register_my_menus');

// Charte graphique du thème Nathalie Mota.
function nathalie_mota_add_editor_color_palette()
{
    add_theme_support('editor-color-palette', [
        [
            'name' => __('Rouge principal', 'nathalie-mota'),
            'slug' => 'rouge-principal',
            'color' => '#E00000',
        ],
        [
            'name' => __('Rouge secondaire', 'nathalie-mota'),
            'slug' => 'rouge-secondaire',
            'color' => '#FE5858',
        ],
        [
            'name' => __('Rouge tertiaire', 'nathalie-mota'),
            'slug' => 'rouge-tertiaire',
            'color' => '#FE5858',
        ],
        [
            'name' => __('Noir', 'nathalie-mota'),
            'slug' => 'noir',
            'color' => '#000000',
        ],
        [
            'name' => __('Bleu foncé', 'nathalie-mota'),
            'slug' => 'bleu-fonce',
            'color' => '#313144',
        ],
        [
            'name' => __('Gris foncé', 'nathalie-mota'),
            'slug' => 'gris-fonce',
            'color' => '#C4C4C4',
        ],
        [
            'name' => __('Gris moyen', 'nathalie-mota'),
            'slug' => 'gris-moyen',
            'color' => '#D8D8D8',
        ],
        [
            'name' => __('Gris clair', 'nathalie-mota'),
            'slug' => 'gris-clair',
            'color' => '#D8D8D8',
        ],
    ]);
}
add_action('after_setup_theme', 'nathalie_mota_add_editor_color_palette');


