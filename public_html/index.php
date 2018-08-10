<?php
  require_once( $_SERVER["DOCUMENT_ROOT"] . '/config.php' );

  echo "You have reached the index of dev.coreymatzat.com<br><br>";
  
  $router = new Router();
  $router->route($_SERVER['REQUEST_URI']);
?>