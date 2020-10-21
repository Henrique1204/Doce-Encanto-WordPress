<footer class="footer">
       <div class="container infos">
            <h1 class="logo">Doce encanto reborn</h1>

            <ul class="redes-sociais linha">
                <li><a href="https://www.facebook.com/Doce-encanto-reborn-108866927616984/" class="facebook" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icones/social_facebook.svg" alt="Facebook"></a></li>
                <li><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icones/social_instagram.svg" alt="Instagram"></a></li>
                <li><a href="https://api.whatsapp.com/send?phone=5511985009022" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icones/social_whatsapp.svg" alt="Whatsapp"></a></li>
            </ul>

            <nav class="menu-nav">
                <?php $args = array(
                    'menu' => 'principal',
                    'theme_location' => 'menu-principal',
                    'container' => false
                    );
                    wp_nav_menu($args);
                ?>
            </nav>
       </div>

       <div class="copy">
            <p>© Doce encanto reborn 2020 | Todas as fotos do site tem direitos autorais</p>
       </div>
    </footer>
    <!-- Footer WP -->
    <?php wp_footer(); ?>
</body>
</html>
