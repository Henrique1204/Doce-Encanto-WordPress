<?php
    // Template Name: Produtos
    get_header();
?>
    
    <?php include(get_template_directory().'/inc/intro.php'); ?>

    <section class="galeria">
        <h1>Galeria</h1>
        <p><?php definir_campo("subtitulo_galeria"); ?></p>

        <div class="slide-wrapper">
            <ul class="slide">
                <?php
                    $slide_imgs = pegar_campo("slide_galeria");

                    if (isset($slide_imgs)) {
                        foreach ($slide_imgs as $img) {                    
                ?>
                    <li class="fotos">
                        <div class="f1 centralizar">
                            <img src="<?= $img["img_slide_principal"]; ?>" alt="Imagem <?= $img["tituto_slide"]; ?>">
                        </div>
                        <div class="f2 centralizar">
                            <img src="<?= $img["img_slide_secundaria"]; ?>" alt="Imagem <?= $img["tituto_slide"]; ?>">
                        </div>
                        <div class="f3 centralizar">
                            <img src="<?= $img["img_slide_terceira"]; ?>" alt="Imagem <?= $img["tituto_slide"]; ?>">
                        </div>
                        <h2><?= $img["tituto_slide"]; ?></h2>
                    </li>
                <?php } } ?>
            </ul>
        </div>
    </section>

    <section class="orcamento">
        <h1>Orçamento</h1>

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
                    <label for="des">Descrição</label>
                    <textarea name="des" id="des" cols="30" rows="10"></textarea>
                </div>

                <button type="submit">Enviar</button>
            </form>

            <p><?php definir_campo("infos_form"); ?>. Caso tenha alguma dúvida sobre o processo entre em <a href="/contato">contato</a>.</p>
        </div>
    </section>

<?php get_footer(); ?>
