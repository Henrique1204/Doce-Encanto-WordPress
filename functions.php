<?php

//Função para registrar Javascript e css
function doce_encanto_scripts() {
    // Nome | Caminho | Depedências | Versão | Se é pra ir pro footer
	wp_register_script('main', get_template_directory_uri().'/main.js', array(), false, true);

	wp_enqueue_script('main');
}

add_action('wp_enqueue_scripts', 'doce_encanto_scripts');

function doce_encanto_css() {
    wp_register_style('doce_encanto_css', get_template_directory_uri().'/style.css', array(), false, false);

    wp_enqueue_style('doce_encanto_css');
}

add_action('wp_enqueue_scripts', 'doce_encanto_css');

// Funções limpar Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Habilitar Menus
add_theme_support('menus');

//registrar menu
function registrar_menu_principal() {
	register_nav_menu('menu-principal',__('Menu Principal'));
}

add_action('init', 'registrar_menu_principal');

function pegar_campo($key, $page_id = 0) {
    $id = $page_id === 0 ? get_the_ID() : $page_id;

    return get_post_meta($id, $key, true);
}

function definir_campo($key, $page_id = 0) {
    echo pegar_campo($key, $page_id);
}

// Adicionando os arquivos para campos personalizados na home.
include(get_template_directory().'/campos_cmb2/cmb2_home.php');
include(get_template_directory().'/campos_cmb2/cmb2_produtos.php');
