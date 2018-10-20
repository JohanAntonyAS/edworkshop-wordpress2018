<?php
// Habilitar todas las actualizaciones básicas, incluyendo menores y mayores
define( 'WP_AUTO_UPDATE_CORE', true );
// Habilitar actualizaciones fundamentales para versiones menores (por defecto)
define( 'WP_AUTO_UPDATE_CORE', 'minor' );

// Forzar inicio de sesión seguro a la administración.
define( 'FORCE_SSL_ADMIN', true );
// Forzar inicio de sesión seguro.
define( 'FORCE_SSL_LOGIN', true );

// Mover el directorio wp-content
define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/assets' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/edwp-workshop/macho-alfa/assets' );

// Mover el directorio plugin
define( 'WP_PLUGIN_DIR', dirname(__FILE__) . '/assets/plugins' );
define( 'WP_PLUGIN_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/edwp-workshop/macho-alfa/assets/plugins' );

// Remplaza los permisos de archivos predeterminados en Wordpress
define ( 'FS_CHMOD_DIR', ( 0755 & ~ umask () ) );
define ( 'FS_CHMOD_FILE', ( 0644 & ~ umask () ) );
