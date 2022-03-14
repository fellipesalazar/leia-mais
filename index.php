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
        'leia-mais',
        plugins_url('bloco-leia-mais.js', __FILE__),
        array('wp-blocks','wp-element'),
        filemtime(plugin_dir_path(__FILE__) . 'bloco-leia-mais.js')
    );

    register_block_type('sallazar/leia-mais', array(
        'editor_script' => 'leia-mais',
    ));

 }

 add_action('init', 'bloco_leia_mais');