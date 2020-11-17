<?php
/*
 * Plugin Name: exemplo de CRUD na tela de configuraçao
 * Plugin URI: https://www.facebook.com/mpiesig/
 * Description: crud do admin do wordpress.
 * Version: 0.0.1
 * Author: Marcel Roberto
 * Author URI: http://www.google.com.br/
 * License: CC BY
*/

if (!defined('WPINC')) exit; // protege o codigo de ser chamado diretamente.

register_activation_hook(__FILE__, 'criar_tabela');

function criar_tabela(){
    
    global $wpdb;

    $wpdb->query("CREATE TABLE {$wpdb->prefix}agenda  
                            ( id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                            nome VARCHAR(255) NOT NULL, 
                            whatsapp BIGINT UNSIGNED NOT NULL )");
}

register_deactivation_hook(__FILE__, 'apagar_tabela');

function apagar_tabela(){

    global $wpdb;

    $wpdb->query(" DROP TABLE {$wpdb->prefix}agenda  ");

}
add_action('admin_menu', 'crud_do_meu_plugin');

function crud_do_meu_plugin(){
    
    add_menu_page( 'config do meu plugin',
                    'Meu Crud', 
                     'administrator', 
                     'meu-plugin-config', 
                     'abre_configuracoes', 
                     'dashicons-database');
}

function abre_configuracoes(){
    
    global $wpdb;

    if ( isset($_GET['apagar'])) {

        $id = preg_replace('/\D/', '', $_GET['apagar']);

        $wpdb->query("DELETE FROM {$wpdb->prefix}agenda where id=1")
    }


    if ( isset($_POST['submit'])) {

        if ( $_POST['submit'] == 'Gravar') {
            $wpdb->query(
                $wpdb->prepare(" INSERT INTO {wpdb->prefix}agenda
                                        ( nome, whatsapp)
                                 VALUES
                                        ( %s, %d)", $_POST['nome'], $_POST['whatsapp']));
        }
    }

    $contatos = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}agenda");

    require 'lista_tpl.php';
}