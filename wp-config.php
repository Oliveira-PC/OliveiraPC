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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'central-oliveirapc' );

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
define( 'AUTH_KEY',         'Cp,7IC}#JM]%4K}$)e>K`@|O2j_XzcGc-fOM?90L(Z7a:4Vv+eid%ux-XIcre(Bf' );
define( 'SECURE_AUTH_KEY',  'vpz:xD*!8kS&OGx%8zD#pT= y;%Umnv09GuikvRLN6JWyB5IEFKZWRtB}7|l229r' );
define( 'LOGGED_IN_KEY',    'WOwen1:(S)NQ[)(,jjIcR?,5D)4g(LyPm/F+nv:8.l*+tKOp[]#M J67+ (u^z(W' );
define( 'NONCE_KEY',        'iZStf6}>>ZuUT]@?ve^HK-v.9~LL)w/Lx!EOo4FbUGIb(U&&esqkZ*GYxZ)4j[A#' );
define( 'AUTH_SALT',        'x_.f$Iy~use:CSOL^52/ij-b6_~wnz*5:uWgkmGVaC8w>HGYAaL,sF5<6J#*aTrf' );
define( 'SECURE_AUTH_SALT', '/%b7Czo$$fsR2fvd5E4=,U6=G.w*#{9K94!OC}y=p-v02]$BT+&BOeWb6:}TmU.&' );
define( 'LOGGED_IN_SALT',   '4xXV2GL0*4G?hP+Cy]{1RFLq5GacySg0iHJQc.llbneFe{ocY@zPvnjf5x:.@Peu' );
define( 'NONCE_SALT',       'Yn}sis4Y<(d4HMM>yaWc+)`0J6 zQ q=JnR4D-Z<VO4]aYsYlm{ooqsmnu$X0DM.' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
