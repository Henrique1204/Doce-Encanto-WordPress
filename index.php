<?php get_header(); ?>

    <?php if(have_posts()):?>
        <section class="intro">
            <h1>Posts</h1>
        </section>
    
        <section class="posts">
            <h1>Últimos adicionados</h1>

            <ul class="container">
                <?php while(have_posts()): the_post();  ?>
                    <li>
                        <h2><?php the_title(); ?></h2>
                        <div class="conteudo"><?php the_content(); ?></div>
                    </li>
                <?php endwhile;?>
            </ul>
        </section>
    <?php else: ?>
        <section class="nao_encontrada">
            <h1>Página não encontrada.</h1>
            <p>Por favor, volte para a página inicial clicando no botão, ou vá para um de nossas outras páginas no menu de navegação.</p>
            <a href="/">Voltar</a>
        </section>
    <?php endif; ?>

<?php get_footer(); ?>
