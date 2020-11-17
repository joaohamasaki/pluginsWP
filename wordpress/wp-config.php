<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wpClass' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '^ewJX=lst>oPqjxSYp~<Q/eaIbf)$m#7bu8TCx4![?{EAb6Ht6F_@2vSZNf[XDJy' );
define( 'SECURE_AUTH_KEY',  '|K,XdSHVTxZR]G2)ebs$L)@P,}U^&~Z=31Ir<6+2:YA(r]8WFtUpuIzuJc5l]h4Q' );
define( 'LOGGED_IN_KEY',    'EwYeCRq ^VE($O&Thq2r$4e3AVKkC8K|~eG5(P<4Hn7)7/dVv1H3ai~QFJU=$I3>' );
define( 'NONCE_KEY',        'CS TLk7F3DETmB$t_k}Zyfn9T#wS{j})H+<!b(FEqg/^(!>UJRCtG~(4Qk{vHW$+' );
define( 'AUTH_SALT',        'M%-93k6@Yg}07wRM(6lgW&B+^8Rs`GT7@d]Ol54aPI DAy,s&)gCs7<`6C2ACPMe' );
define( 'SECURE_AUTH_SALT', '~cS@ei^}5ozsQ7_eA@S;O**-Vny%p:ZG=nCOd@*WnrPLOJ3K 9.8tR7+v2$&/K8/' );
define( 'LOGGED_IN_SALT',   'qg<[Ru$TmVn19G8i_})^3 1TcsRWl=_ZwVCW, ~(VkW=Y&3ZyY8.wlS y/`dZNdX' );
define( 'NONCE_SALT',       'N{>l>EVh>CuG!y%m2I0]TBB#Q47=@#)b1#+7^DtS%fV@NJT25]c-(_gI[mXh&nWJ' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'tb_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
