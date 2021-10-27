<?php

# constante que define o nome do banco
define("DB_NAME" , "curso_senac");

# constante que define o nome do usuário root do banco
define("DB_USER","root");

# definição da senha do banco
define("DB_PASSWORD", "");

# define o endereço do servidor
define("DB_HOST","localhost");

/** caminho absoluto para a pasta do sistema **/
if ( !defined('ABSPATH') )
define('ABSPATH', dirname(__FILE__) . '/');

/** caminho no server para o sistema **/
if ( !defined('BASEURL') )
define('BASEURL', '/PhpProject2/');

/** caminho do arquivo de banco de dados **/
if ( !defined('DBAPI') )
define('DBAPI', ABSPATH . 'inc/database.php');

// Caminho do footer e do header
define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');