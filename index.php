<?php

/**
 * Plugin Name: Leia Mais VP
 * Plugin URI: https://github.com/fellipesalazar/leia-mais
 * Description: Adiciona um bloco "Leia mais" dentro da postagem com os posts selecionados
 * Version: 1.0
 * Author: Sallazar
 */

 defined('ABSPATH') || exit;

 function bloco_leia_mais(){

    if(!function_exists('register_block_type')){
        return;
    }

    wp_register_script(
        'script',
        plugins_url('script.js', __FILE__),
        array('wp-blocks','wp-element'),
        filemtime(plugin_dir_path(__FILE__) . 'script.js')
    );

    wp_register_style(
        'editor-style',
        plugins_url('editor-style.css', __FILE__),
        array('wp-edit-blocks'),
        filemtime(plugin_dir_path(__FILE__) . 'editor-style.css')
    )

    wp_register_style(
        'front-style',
        plugins_url('front-style.css', __FILE__),
        filemtime(plugin_dir_path(__FILE__) . 'front-style.css')
    )

    register_block_type('sallazar/leia-mais', array(
        'style' => 'front-style',
        'editor_script' => 'script',
        'editor_style' => 'editor-style'
    ));

 }

 add_action('init', 'bloco_leia_mais');