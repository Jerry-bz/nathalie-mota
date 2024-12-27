<?php
get_header(); // Inclut l’en-tête

if (have_posts()):
    while (have_posts()):
        the_post(); ?>
        <main>
        <!-- <h1><?php the_title(); ?></h1> -->
        <!-- <div><?php the_content(); ?></div> -->
        </main>
    <?php endwhile;
else:
    echo '<p>Page introuvable.</p>';
endif;

get_footer(); // Inclut le pied de page
