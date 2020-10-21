<?php
    // Template Name: Contato
    get_header();
?>
    
    <section class="intro">
        <h1>Contato</h1>
    </section>

    <section class="faq">
        <h1>FAQ</h1>
        <p>Nossas dúvidas frequentes</p>

        <dl class="faq-lista container" data-script="accordion-list">
            <dt class="ativo">Posso dar banho neles?</dt>
            <dd class="ativo">Pode, contanto que tu entenda QUE É UM BEBÊ PINTADO  e que a tinta vá sair, mas o bebê é teu, tu faz o que quiser com ele, cobro 50tinha pra repintar ele.</dd>

            <dt>Posso dar banho neles?</dt>
            <dd>Pode, contanto que tu entenda QUE É UM BEBÊ PINTADO  e que a tinta vá sair, mas o bebê é teu, tu faz o que quiser com ele, cobro 50tinha pra repintar ele.</dd>

            <dt>Posso dar banho neles?</dt>
            <dd>Pode, contanto que tu entenda QUE É UM BEBÊ PINTADO  e que a tinta vá sair, mas o bebê é teu, tu faz o que quiser com ele, cobro 50tinha pra repintar ele.</dd>

            <dt>Posso dar banho neles?</dt>
            <dd>Pode, contanto que tu entenda QUE É UM BEBÊ PINTADO  e que a tinta vá sair, mas o bebê é teu, tu faz o que quiser com ele, cobro 50tinha pra repintar ele.</dd>
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
                    <li><a href="https://www.facebook.com/Doce-encanto-reborn-108866927616984/" class="facebook" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icones/social_facebook_contato.svg" alt="Facebook"></a></li>
                    <li><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icones/social_instagram_contato.svg" alt="Instagram"></a></li>
                    <li><a href="https://api.whatsapp.com/send?phone=5511985009022" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icones/social_whatsapp_contato.svg" alt="Whatsapp"></a></li>
                </ul>
            </div>
        </div>
    </main>

<?php get_footer(); ?>
