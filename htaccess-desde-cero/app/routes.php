<?php
$route = ( isset($_GET['page']) ) ? $_GET['page'] : 'home';

switch ($route) {
  case 'home':
    $content = 'Home';
    break;

  case 'acerca':
    $content = 'Acerca';
    break;

  case 'contacto':
    $content = 'Contacto';
    break;

  default:
    $content = 'Error 404: Not Found';
    header('HTTP/1.0 404 Not Found');
    header('Status: 404 Not Found');
    break;
}

echo 'Hola estás viendo el routes.php';
