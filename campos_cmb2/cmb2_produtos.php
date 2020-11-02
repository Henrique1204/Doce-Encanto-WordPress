<?php

// Função que irá adicionar o conteúdo aos campos
function cmb2_campos_produtos() {
    /* 
    ** Define a área para edição dos campos
    ** indice => valor
    ** id - É como a box vai ser indentificada
    ** title - É como a box vai ser chamada
    ** object_types - Array com os tipos de páginas
    ** show_on - Onde os campos irão ficar
    */
    $box_galeria = new_cmb2_box([
        "id" => "home_box_galeria",
        "title" => "Geleria",
        "object_types" => ["page"],
        "show_on" => [
            "key" => "page-template",
            "value" => "page-produtos.php"
        ]
    ]);

    /*
    ** Adiciona um campo na box
    ** name - Nome do campo
    ** id - Como você irá se referenciar ao campo
    ** type - O tipo do campo
    */
    $box_galeria->add_field([
        "name" => "Subtitulo",
        "id" => "subtitulo_galeria",
        "type" => "text"
    ]);

    // Para criar campos com repetição
    $slide = $box_galeria->add_field([
        "name" => "Slide",
        "id" => "slide_galeria",
        "type" => "group",
        "repeatable" => true,
        "options" => [
            "group-title" => "Item {#}",
            "add_button" => "Adicionar item",
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
    $box_galeria->add_group_field($slide, [
        "name" => "Imagem Principal",
        "id" => "img_slide_principal",
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
    ** options - Define as opções para a entrada do arquivo
    */
    $box_galeria->add_group_field($slide, [
        "name" => "Imagem Secundária",
        "id" => "img_slide_secundaria",
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
    ** options - Define as opções para a entrada do arquivo
    */
    $box_galeria->add_group_field($slide, [
        "name" => "Imagem Terceira",
        "id" => "img_slide_terceira",
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
    $box_galeria->add_group_field($slide, [
        "name" => "Tituto",
        "id" => "tituto_slide",
        "type" => "text"
    ]);

    /* 
    ** Define a área para edição dos campos
    ** indice => valor
    ** id - É como a box vai ser indentificada
    ** title - É como a box vai ser chamada
    ** object_types - Array com os tipos de páginas
    ** show_on - Onde os campos irão ficar
    */
    $box_form = new_cmb2_box([
        "id" => "home_box_form",
        "title" => "Informações Formulário",
        "object_types" => ["page"],
        "show_on" => [
            "key" => "page-template",
            "value" => "page-produtos.php"
        ]
    ]);

    /*
    ** Adiciona um campo na box
    ** name - Nome do campo
    ** id - Como você irá se referenciar ao campo
    ** type - O tipo do campo
    */
    $box_form->add_field([
        "name" => "Informações",
        "id" => "infos_form",
        "type" => "textarea_small"
    ]);
}

add_action("cmb2_admin_init", "cmb2_campos_produtos");
