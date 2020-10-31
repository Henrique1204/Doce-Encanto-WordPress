<?php

// Função que cria os campos para intro da página home.
function campos_home_intro() {
    /* 
    ** Define a área para edição dos campos
    ** indice => valor
    ** id - É como a box vai ser indentificada
    ** title - É como a box vai ser chamada
    ** object_types - Array com os tipos de páginas
    ** show_on - Onde os campos irão ficar
    */
    $box_intro = new_cmb2_box([
        "id" => "home_box_intro",
        "title" => "Introdução",
        "object_types" => ["page"],
        "show_on" => [
            "key" => "page-template",
            "value" => "page-home.php"
        ]
    ]);

    /*
    ** Adiciona um campo na box
    ** name - Nome do campo
    ** id - Como você irá se referenciar ao campo
    ** type - O tipo do campo
    */
    $box_intro->add_field([
        "name" => "Intro",
        "id" => "intro",
        "type" => "text"
    ]);

    /*
    ** Adiciona um campo na box
    ** name - Nome do campo
    ** id - Como você irá se referenciar ao campo
    ** type - O tipo do campo
    ** options - Define as opções para a entrada do arquivo
    */
    $box_intro->add_field([
        "name" => "Imagem Intro",
        "id" => "img_intro",
        "type" => "file",
        "options" => [
            "url" => false
        ]
    ]);
}

// Função que cria os campos para sessão produtos da página home.
function campos_home_sessao_produtos() {
    /* 
    ** Define a área para edição dos campos
    ** indice => valor
    ** id - É como a box vai ser indentificada
    ** title - É como a box vai ser chamada
    ** object_types - Array com os tipos de páginas
    ** show_on - Onde os campos irão ficar
    */
    $box_produtos = new_cmb2_box([
        "id" => "home_box_produtos",
        "title" => "Sessão Produtos",
        "object_types" => ["page"],
        "show_on" => [
            "key" => "page-template",
            "value" => "page-home.php"
        ]
    ]);

    /*
    ** Adiciona um campo na box
    ** name - Nome do campo
    ** id - Como você irá se referenciar ao campo
    ** type - O tipo do campo
    */
    $box_produtos->add_field([
        "name" => "Subtitulo",
        "id" => "subtitulo_produtos",
        "type" => "text"
    ]);

    // Para criar campos com repetição
    $cards_produtos = $box_produtos->add_field([
        "name" => "Cards Produtos",
        "id" => "cards_produtos",
        "type" => "group",
        "repeatable" => true,
        "options" => [
            "group-title" => "Card {#}",
            "add_button" => "Adicionar Card",
            "sortable" => true
        ]
    ]);

    /*
    ** Adiciona o campo no grupo de repetição
    ** name - Nome do campo
    ** id - Como você irá se referenciar ao campo
    ** type - O tipo do campo
    ** options - Define as opções para a entrada do arquivo
    */
    $box_produtos->add_group_field($cards_produtos, [
        "name" => "Imagem Card",
        "id" => "img_card",
        "type" => "file",
        "options" => [
            "url" => false
        ]
    ]);

    /*
    ** Adiciona um campo na box
    ** name - Nome do campo
    ** id - Como você irá se referenciar ao campo
    ** type - O tipo do campo
    */
    $box_produtos->add_group_field($cards_produtos, [
        "name" => "Tituto",
        "id" => "tituto_card",
        "type" => "text"
    ]);

    /*
    ** Adiciona um campo na box
    ** name - Nome do campo
    ** id - Como você irá se referenciar ao campo
    ** type - O tipo do campo
    */
    $box_produtos->add_group_field($cards_produtos, [
        "name" => "Descricao",
        "id" => "descricao_card",
        "type" => "textarea_small"
    ]);
}

// Função que cria os campos para sessão qualidades da página home.
function campos_home_sessao_qualidades() {
    /* 
    ** Define a área para edição dos campos
    ** indice => valor
    ** id - É como a box vai ser indentificada
    ** title - É como a box vai ser chamada
    ** object_types - Array com os tipos de páginas
    ** show_on - Onde os campos irão ficar
    */
    $box_qualidades = new_cmb2_box([
        "id" => "home_box_qualidades",
        "title" => "Sessão Qualidades",
        "object_types" => ["page"],
        "show_on" => [
            "key" => "page-template",
            "value" => "page-home.php"
        ]
    ]);

    // Para criar campos com repetição
    $itens_qualidades = $box_qualidades->add_field([
        "name" => "Qualidades",
        "id" => "itens_qualidades",
        "type" => "group",
        "repeatable" => true,
        "options" => [
            "group-title" => "Qualide {#}",
            "add_button" => "Adicionar Qualidade",
            "sortable" => true
        ]
    ]);

    /*
    ** Adiciona o campo no grupo de repetição
    ** name - Nome do campo
    ** id - Como você irá se referenciar ao campo
    ** type - O tipo do campo
    ** options - Define as opções para a entrada do arquivo
    */
    $box_qualidades->add_group_field($itens_qualidades, [
        "name" => "Ícone Qualidade",
        "id" => "icone_qualidade",
        "type" => "file",
        "options" => [
            "url" => false
        ]
    ]);

    /*
    ** Adiciona um campo na box
    ** name - Nome do campo
    ** id - Como você irá se referenciar ao campo
    ** type - O tipo do campo
    */
    $box_qualidades->add_group_field($itens_qualidades, [
        "name" => "Tituto",
        "id" => "tituto_qualidade",
        "type" => "text"
    ]);

    /*
    ** Adiciona um campo na box
    ** name - Nome do campo
    ** id - Como você irá se referenciar ao campo
    ** type - O tipo do campo
    */
    $box_qualidades->add_group_field($itens_qualidades, [
        "name" => "Descricao",
        "id" => "descricao_qualidade",
        "type" => "text"
    ]);
}

// Função que cria os campos para sessão sobre da página home.
function campos_home_sessao_sobre() {
    /* 
    ** Define a área para edição dos campos
    ** indice => valor
    ** id - É como a box vai ser indentificada
    ** title - É como a box vai ser chamada
    ** object_types - Array com os tipos de páginas
    ** show_on - Onde os campos irão ficar
    */
    $box_sobre = new_cmb2_box([
        "id" => "home_box_sobre",
        "title" => "Sessão sobre",
        "object_types" => ["page"],
        "show_on" => [
            "key" => "page-template",
            "value" => "page-home.php"
        ]
    ]);

    /*
    ** Adiciona um campo na box
    ** name - Nome do campo
    ** id - Como você irá se referenciar ao campo
    ** type - O tipo do campo
    */
    $box_sobre->add_field([
        "name" => "Subtitulo",
        "id" => "subtitulo_sobre",
        "type" => "text"
    ]);

    /*
    ** Adiciona um campo na box
    ** name - Nome do campo
    ** id - Como você irá se referenciar ao campo
    ** type - O tipo do campo
    ** options - Define as opções para a entrada do arquivo
    */
    $box_sobre->add_field([
        "name" => "Imagem",
        "id" => "img_historia",
        "type" => "file",
        "options" => [
            "url" => false
        ]
    ]);

    // Para criar campos com repetição
    $historia = $box_sobre->add_field([
        "name" => "sobre",
        "id" => "historia",
        "type" => "group",
        "repeatable" => true,
        "options" => [
            "group-title" => "Paragrafo {#}",
            "add_button" => "Adicionar Paragrafo",
            "sortable" => true
        ]
    ]);

    /*
    ** Adiciona um campo na box
    ** name - Nome do campo
    ** id - Como você irá se referenciar ao campo
    ** type - O tipo do campo
    */
    $box_sobre->add_group_field($historia, [
        "name" => "Paragrafo",
        "id" => "paragrafo_historia",
        "type" => "textarea_small"
    ]);
}

// Função que irá adicionar o conteúdo aos campos
function cmb2_campos_home() {
    // Criando os campos da intro.
    campos_home_intro();

    // Criando os campos para sessão produtos.
    campos_home_sessao_produtos();

    // Criando os campos para sessão qualidades.
    campos_home_sessao_qualidades();

    // Criando os campos para sessão sobre.
    campos_home_sessao_sobre();
}

add_action("cmb2_admin_init", "cmb2_campos_home");
