<footer class="footer">
    <nav class="footer__menu">
        <?php
        // Affichage du menu du footer
        wp_nav_menu([
            'theme_location' => 'footer', // L'emplacement du menu enregistré
            'container' => false, // Pas de conteneur HTML supplémentaire
            'menu_class' => 'footer__list space-mono-text', // Classe CSS pour le menu UL
        ]);
        ?>
    </nav>
</footer>
<?php wp_footer(); ?>
<?php get_template_part('components/contact-modal'); ?>
</body>

</html>