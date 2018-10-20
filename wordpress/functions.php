<?php
// Ocultar la versión de WP de las metatags
remove_action( 'wp_head', 'wp_generator' );

// Bloquear mensajes de errores en la entrada al administrador
add_filter( 'login_errors', create_function('$a', 'return null;') );

// Bloquear visitantes que usen Servidores Proxies
function block_proxy_visits () {
  if ( !is_user_logged_in() ) {
    if ( @fsockopen( $_SERVER['REMOTE_ADDR'], 80, $errstr, $errno, 1 ) ) {
      die( 'No se permite el acceso mediante Proxy' );
    }
  }
}

add_action('after_setup_theme', 'block_proxy_visits');

// Evitar la enumeración de usuarios
// http://example.com/?author=1
function check_users_enum ( $redirect, $request ) {
  if ( preg_match( '/\?author=([0-9]*)(\/*)/i', $request ) ) die();
  else return $redirect;
}

if ( !is_admin() ) {
  if ( preg_match( '/author=([0-9]*)/i', $_SERVER['QUERY_STRING'] ) ) die();
  add_filter( 'redirect_canonical', 'check_users_enum', 10, 2);
}

// Crear nueva regla rewrite
add_action( 'init', 'wp_ozh_plu_rewrite' );
function wp_ozh_plu_rewrite() {
    add_rewrite_rule( 'puerta/?$', 'wp-login.php', 'top' );
}
