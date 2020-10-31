<?php
    //Template Name: Home
    get_header();
?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

    <section class="intro-home">
        <?php
            // Pego o que foi passado no campo.
            $imagem_bg = pegar_campo("img_intro_id");
            // Busco na memória onde está a imagem, retorna um array e o primeiro valor é a url.
            $imagem_grande = wp_get_attachment_image_src($imagem_bg, "large")[0];
            $imagem_media = wp_get_attachment_image_src($imagem_bg, "medium")[0];
        ?>

        <style>
            .intro-home {
                background: #000 url("<?= $imagem_grande; ?>") no-repeat center;
                background-size: cover;
            }

            @media screen and (max-width: 750px) {
                .intro-home {
                    background: #000 url("<?= $imagem_media; ?>") no-repeat center;
                    background-size: cover;
                }
            } 
        </style>

        <h1><?php definir_campo("intro"); ?></h1>
    </section>

    <main class="portfolio-home">
        <h1>Produtos</h1>
        <p><?php definir_campo("subtitulo_produtos"); ?></p>

        <ul class="container">
            <?php
                $cards_produtos = pegar_campo("cards_produtos");

                if (isset($cards_produtos)) {
                    foreach($cards_produtos as $card) {
            ?>
                <li class="card">
                    <div class="img-container">
                        <img src="<?= $card["img_card"]; ?>" alt="<?= $card["tituto_card"] ?>">
                    </div>

                    <span class="divisor"></span>

                    <div class="card-info">
                        <h2><?= $card["tituto_card"]; ?></h2>
                        <p><?= $card["descricao_card"]; ?></p>
                        <a href="/produtos">Ver Fotos</a>
                    </div>
                </li>
            <?php } } ?>
        </ul>
    </main>

    <section class="qualidades">
        <h1>Qualidades</h1>

        <ul class="container">
            <?php
                $itens_qualidades = pegar_campo("itens_qualidades");

                if (isset($itens_qualidades)) {
                    foreach($itens_qualidades as $itens) {
            ?>
                <li>
                    <div class="icon-container">
                        <img src="<?= $itens["icone_qualidade"]; ?>" alt="Ilustração sobre <?= $itens["tituto_qualidade"]; ?>">
                    </div>

                    <h2><?= $itens["tituto_qualidade"]; ?></h2>

                    <p><?= $itens["descricao_qualidade"]; ?></p>
                </li>
            <?php } } ?>
        </ul>
    </section>

    <section class="quem-sou">
        <h1>Quem Sou</h1>
        <p><?= definir_campo("subtitulo_sobre"); ?></p>

        <div class="container">
            <div class="img-container">
                <img src="<?= definir_campo("img_historia"); ?>" alt="Rita de Cassia, criador da Doce Encanto Reborn">
            </div>

            <div class="historia">
                    <?php
                        $historia = pegar_campo("historia");

                        if (isset($historia)) {
                            foreach ($historia as $paragrafo) {
                    ?>
                        <p><?= $paragrafo["paragrafo_historia"]; ?></p>
                    <?php } } ?>
            </div>
        </div>
    </section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
