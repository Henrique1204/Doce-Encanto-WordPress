<?php

// Função que irá adicionar o conteúdo aos campos
function cmb2_campos_contato() {
    /* 
    ** Define a área para edição dos campos
    ** indice => valor
    ** id - É como a box vai ser indentificada
    ** title - É como a box vai ser chamada
    ** object_types - Array com os tipos de páginas
    ** show_on - Onde os campos irão ficar
    */
    $box_faq = new_cmb2_box([
        "id" => "home_box_faq",
        "title" => "FAQ",
        "object_types" => ["page"],
        "show_on" => [
            "key" => "page-template",
            "value" => "page-contato.php"
        ]
    ]);

    /*
    ** Adiciona um campo na box
    ** name - Nome do campo
    ** id - Como você irá se referenciar ao campo
    ** type - O tipo do campo
    */
    $box_faq->add_field([
        "name" => "Subtitulo",
        "id" => "subtitulo_faq",
        "type" => "text"
    ]);

    // Para criar campos com repetição
    $perguntas = $box_faq->add_field([
        "name" => "Perguntas Frequentes",
        "id" => "perguntas_frequentes",
        "type" => "group",
        "repeatable" => true,
        "options" => [
            "group-title" => "Pergunta {#}",
            "add_button" => "Adicionar Pergunta",
            "sortable" => true
        ]
    ]);

    /*
    ** Adiciona um campo na box
    ** name - Nome do campo
    ** id - Como você irá se referenciar ao campo
    ** type - O tipo do campo
    */
    $box_faq->add_group_field($perguntas, [
        "name" => "Pergunta",
        "id" => "pergunta_faq",
        "type" => "text"
    ]);

    /*
    ** Adiciona um campo na box
    ** name - Nome do campo
    ** id - Como você irá se referenciar ao campo
    ** type - O tipo do campo
    */
    $box_faq->add_group_field($perguntas, [
        "name" => "Resposta",
        "id" => "resposta_faq",
        "type" => "textarea_small"
    ]);

    /* 
    ** Define a área para edição dos campos
    ** indice => valor
    ** id - É como a box vai ser indentificada
    ** title - É como a box vai ser chamada
    ** object_types - Array com os tipos de páginas
    ** show_on - Onde os campos irão ficar
    */
    $box_redes = new_cmb2_box([
        "id" => "home_box_redes",
        "title" => "Redes Sociais",
        "object_types" => ["page"],
        "show_on" => [
            "key" => "page-template",
            "value" => "page-contato.php"
        ]
    ]);

    // Para criar campos com repetição
    $links = $box_redes->add_field([
        "name" => "Links Sociais",
        "id" => "links_sociais",
        "type" => "group",
        "repeatable" => true,
        "options" => [
            "group-title" => "Link {#}",
            "add_button" => "Adicionar link",
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
    $box_redes->add_group_field($links, [
        "name" => "Ícone da Rede",
        "id" => "icone_rede",
        "type" => "file",
        "options" => [
            "url" => false
        ]
    ]);

    /*
    ** Adiciona o campo no grupo de repetição
    ** name - Nome do campo
    ** id - Como você irá se referenciar ao campo
    ** type - O tipo do campo
    */
    $box_redes->add_group_field($links, [
        "name" => "Nome da Rede Social",
        "id" => "nome_rede",
        "type" => "text"
    ]);

    /*
    ** Adiciona o campo no grupo de repetição
    ** name - Nome do campo
    ** id - Como você irá se referenciar ao campo
    ** type - O tipo do campo
    */
    $box_redes->add_group_field($links, [
        "name" => "Link para rede social",
        "id" => "link_rede",
        "type" => "text_url"
    ]);
}

add_action("cmb2_admin_init", "cmb2_campos_contato");
