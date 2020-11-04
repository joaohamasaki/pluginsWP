<?php
/**
 * Plugin Name: Plug-in Com Menu
 * Plugin URI: https://sp.senac.br
 * Description: Esse é um plug-in que mostra como trabalha com o menu do admin do WP
 * Version: 0.0.1
 * Author: João Hamasaki
 * Author URI: https://latters.cnpq.br/0275558279027775
 * License: CC BY
 */

 add_action('admin_menu', 'menu_do_meu_plugin');

 function menu_do_meu_plugin(){
    //Exemplo para criar item no primeiro nível do menu
    /*
    add_menu_page( 'Configurações do Meu Plug-in',
                   'Meu Plug-in',
                   'administrator',
                    'meu-plugin-config',
                    'abre_configuracoes',
                    'dashicons-admin-generic');
    */

    add_submenu_page(   'options-general.php',
                        'Configurações do Meu Plug-in',
                        'Meu Plug-in',
                        'administrator',
                        'meu-plugin-config',
                        'abre_configuracoes');

 }

 function abre_configuracoes(){

    require 'plugin_com_meu_tpl.php';
 }