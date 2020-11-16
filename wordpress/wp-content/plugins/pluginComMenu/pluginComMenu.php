<?php

/*
 * Plugin Name: PluginComMenu
 * Plugin URI: https://www.facebook.com/mpiesig/
 * Description: Este é um plugin com mostra como trabalha com o menu do admin do wordpress.
 * Version: 0.0.1
 * Author: Marcel Roberto
 * Author URI: http://www.google.com.br/
 * License: CC BY
*/

add_action('admin_init', 'set_configs');

function set_configs(){

    register_setting('configs-exemplo', 'api-token');
    register_setting('configs-exemplo', 'api-url');
}

add_action('admin_menu', 'admin_do_meu_plugin');

function admin_do_meu_plugin(){
    
    // add_menu_page( 'config do meu plugin',
    //                 'Plugin', 
    //                 'administrator', 
    //                 'meu-plugin-config', 
    //                 'abre configuracoes', 
    //                 'dashicons-admin-generic');
    
    //acessando um submenu do settings(configuracoes).
    add_submenu_page(   'options-general.php',
                        'config do meu plugin', 
                        'Plugin', 
                        'administrator', 
                        'meu-plugin-config', 
                        'abre_configuracoes' );
}

function abre_configuracoes(){
    
    require 'pluginComMenu_tpl.php';
}