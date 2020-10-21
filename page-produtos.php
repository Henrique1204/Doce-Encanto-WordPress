<?php
    // Template Name: Produtos
    get_header();
?>
    
    <section class="intro">
        <h1>Produtos</h1>
    </section>

    <section class="galeria">
        <h1>Galeria</h1>
        <p>Fotos de alguns de nossos trabalhos já feitos.</p>

        <div class="slide-wrapper">
            <ul class="slide">
                <li class="fotos">
                    <div class="f1"></div>
                    <div class="f2"></div>
                    <div class="f3"></div>
                    <h2>Kit tudo preto</h2>
                </li>
                <li class="fotos">
                    <div class="f1"></div>
                    <div class="f2"></div>
                    <div class="f3"></div>
                    <h2>Kit tudo preto</h2>
                </li>
                <li class="fotos">
                    <div class="f1"></div>
                    <div class="f2"></div>
                    <div class="f3"></div>
                    <h2>Kit tudo preto</h2>
                </li>
                <li class="fotos">
                    <div class="f1"></div>
                    <div class="f2"></div>
                    <div class="f3"></div>
                    <h2>Kit tudo preto</h2>
                </li>
                <li class="fotos">
                    <div class="f1"></div>
                    <div class="f2"></div>
                    <div class="f3"></div>
                    <h2>Kit tudo preto</h2>
                </li>
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

            <p>Este é só o primeiro passo, logo após isso eu entrarei com contato com você para alinhar melhor o pedido. Caso tenha alguma dúvida sobre o processo entre em <a href="contato.html">contato</a>.</p>
        </div>
    </section>

<?php get_footer(); ?>
