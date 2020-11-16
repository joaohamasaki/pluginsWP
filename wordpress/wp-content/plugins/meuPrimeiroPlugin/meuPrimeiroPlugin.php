<?php

/*
 * Plugin Name: meuPrimeiroPlugin
 * Plugin URI: https://www.facebook.com/mpiesig/
 * Description: Este é meu primeiro plugin desenvolvido por mim
 * Version: 0.0.1
 * Author: Marcel Roberto
 * Author URI: http://www.google.com.br/
 * License: CC BY
*/

add_filter('login_errors', 'altera_msg_login');

function altera_msg_login (){
    return 'Credenciais inválidas!';
}

//penderuar o header que é wp_head
add_action('wp_head', 'colocar_og_tag' );

function colocar_og_tag(){
    // tem um unico post?
    if (is_single() ) {


        $dados_do_post = get_post( get_the_ID());

        $nome_do_site = get_bloginfo();

        $titulo = $dados_do_post->post_title;

        $resumo = $dados_do_post->post_excerpt;

        echo " \n\n\n
                <meta property='og:title' content='".$titulo."'>\n
                <meta property='og:site name' content='".$nome_do_site."'>\n
                <meta property='og:url' content='".get_permalink()."'>\n
                <meta property='og:description' content='".$resumo."'>\n
                \n\n\n";
    }
}