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