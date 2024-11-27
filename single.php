<?php
get_header(); // Inclut l’en-tête

if (have_posts()) : 
    while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <div><?php the_content(); ?></div>
    <?php endwhile; 
else : 
    echo '<p>Aucun article trouvé.</p>';
endif;

get_footer(); // Inclut le pied de page
