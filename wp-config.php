<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configuraçções de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
//define('WP_CACHE', true); //Added by WP-Cache Manager
define('DB_NAME', 'bebocafe');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'bebocafe');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '0097edb7');

/** nome do host do MySQL */
define('DB_HOST', 'mysql552.umbler.com');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 			'f841d1c3fdc6aea737acbb104ba965fcda8341f7ab2397e78cb5bc098a6cc0ce');
define('SECURE_AUTH_KEY', 	'59a50e38ec1e548c594fcc205e2772b534356135b16cb45812134e33f46496b4');
define('LOGGED_IN_KEY', 	'e58afeeb0885963c57a70f1a73a0860f01f4c342266b88f2c3375a179d1f46f8');
define('NONCE_KEY', 		'5c5749fff8232000c1f51ce4c0d6b863ec6ac320c6cf52d07cdb78d1243387a8');
define('AUTH_SALT',			'c0ea35f558207a8fe8483f4319c8b06bbbbed4814df343c65647dd6038d46862');
define('SECURE_AUTH_SALT',	'22758df97c0928cfe944010d8281faaae299136f4bdd6a3437dc48725d15f335');
define('LOGGED_IN_SALT',	'494af418c3e3cb2ab6aefc75457d596b044af6caf54156475a021204b3c80b1c');
define('NONCE_SALT',		'7708385d92e7384beac55beac96152fbd0f4bd1151aaaf24df366819e9c7acb0');
/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente a
 * língua escolhida deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define ('WPLANG', 'pt_BR');

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto do WordPress para o diretório Wordpress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
?>
