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
define( 'AUTH_KEY',         '3R(x~V ?I?WaU_#HHs0_UF:K0$; yd#rPNS[L{Dyf3LN3F}h1f<owa%XNqCrn-/w' );
define( 'SECURE_AUTH_KEY',  '[JI^X0.BaVYw[!FerhJOc5%QNn-+Re:}opXf]}YX.(b*Aq}IYkC-6IMB28v@CPRG' );
define( 'LOGGED_IN_KEY',    '<t`Bi^t_Ud12i*hZDYQ|`_7Q:}OxAi)p(R/:I_2J(!l=HhWLmX+p>N=aH;uL4^LD' );
define( 'NONCE_KEY',        'pwVVy6pCh6([=NtDH6aetmCtEKw51HTFOTro9e2O!zXNZ:0]EEN6%JIuHwTr{{I#' );
define( 'AUTH_SALT',        '/c.0fF?W_w#WkcyOsezAXs`zglSqQlxv5;Hk K6[X{:,I$:He:#IowMl4!_9cqh]' );
define( 'SECURE_AUTH_SALT', 'g|kYOF5<-vDBMgg0H&u?6kC!CaZR,OLy]jxv4ss*(wF.FZsx`,0r(t@Dr7Q[H]|a' );
define( 'LOGGED_IN_SALT',   'MLV?FvyBW#[K0~Y21BP/ZTOL$6-@4c:gUj>%!JBz#BW)RU|h92_>_G:VSb3cK*J)' );
define( 'NONCE_SALT',       '3I.8)dhd};PTR0Lx+P7a>!R0>&i%v]`fv0dgeF K})`BmxL8;y[/LKj#K>sYf@Y-' );

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
