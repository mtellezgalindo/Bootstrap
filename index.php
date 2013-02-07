<?php
define('ACCESS', true);

// comprobamos que existan los archivos básicos para el sitio y los requerimos.
if ( file_exists('init/config.php') && file_exists('init/functions.php') && file_exists('init/init.php') ) :
	require_once('init/config.php');
	require_once('init/functions.php');
	require_once('init/init.php');
else:
	die('<h1>Internal error: Core files are missing.</h1>');
endif;

?>