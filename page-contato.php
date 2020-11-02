<?php
    // Template Name: Contato
    get_header();
?>
    
    <?php include(get_template_directory().'/inc/intro.php'); ?>

    <section class="faq">
        <h1>FAQ</h1>
        <p><?php definir_campo("subtitulo_faq"); ?></p>

        <dl class="faq-lista container" data-script="accordion-list">
            <?php
                $perguntas = pegar_campo("perguntas_frequentes");

                if (isset($perguntas)) {
                    foreach ($perguntas as $pergunta) {
            ?>
                <dt><?= $pergunta["pergunta_faq"]; ?></dt>
                <dd><?= $pergunta["resposta_faq"]; ?></dd>
            <?php } } ?>
        </dl>
    </section>

    <main class="contato">
        <h1>Contato</h1>

        <div class="container">
            <form>
                <div class="campo">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome">
                </div>

                <div class="campo">
                    <label for="email">E-mail</label>
                    <input type="text" name="email" id="email">
                </div>

                <div class="campo">
                    <label for="telefone">Telefone</label>
                    <input type="text" name="telefone" id="telefone">
                </div>

                <div class="campo">
                    <label for="msg">Mensagem</label>
                    <textarea name="msg" id="msg" cols="30" rows="10"></textarea>
                </div>

                <button type="submit">Enviar</button>
            </form>

            <div class="redes-sociais">
                <h2>Redes Sociais</h2>
                <ul class="linha">
                    <?php
                        $links = pegar_campo("links_sociais");

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
            </div>
        </div>
    </main>

<?php get_footer(); ?>
