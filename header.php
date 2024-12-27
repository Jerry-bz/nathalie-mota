<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nathalie Mota, photographe professionnelle</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">
    <nav class="header__nav">
        <div class="menu__header">
            <a href="<?php echo get_site_url() ?>">
                <img class="icon__logo" src="<?php echo get_template_directory_uri() . "/assets/icon-logo.png" ?>"
                    alt="logo entreprise" ? />
            </a>
            <div class="menu__icon" aria-label="Menu">
                <img class="icon__hamburger" src="<?php echo get_template_directory_uri() . "/assets/icon-hamburger.png"; ?>" alt="Ouvrir le menu" />
                <img class="icon__close" src="<?php echo get_template_directory_uri() . "/assets/icon-close.png"; ?>" alt="Fermer le menu"/>
            </div>
        </div>
        <?php
        wp_nav_menu([
            'theme_location' => 'header',
            'container' => false,
            'menu_class' => 'header__list space-mono-text'
        ])
            ?>
    </nav>
</header>