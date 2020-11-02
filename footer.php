<footer class="footer">
       <div class="container infos">
            <h1 class="logo">Doce encanto reborn</h1>

            <ul class="redes-sociais linha">
                <?php
                    $contato = get_page_by_title("contato")->ID;
                    $links = pegar_campo("links_sociais", $contato);

                    if (isset($links)) {
                        foreach ($links as $link) {
                ?>
                    <li>
                        <a href="<?= $link["link_rede"]; ?>" target="_blank">
                            <img src="<?= $link["icone_rede"]; ?>" alt="<?= $link["nome_rede"]; ?>">
                        </a>
                    </li>
                <?php } } ?>
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
            <p>© Doce encanto reborn <?= date("Y"); ?> | Todas as fotos do site tem direitos autorais.</p>
       </div>
    </footer>
    <!-- Footer WP -->
    <?php wp_footer(); ?>
</body>
</html>
