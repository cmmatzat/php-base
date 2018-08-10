<?php
  define("DS", DIRECTORY_SEPARATOR);
  define("ROOT",  $_SERVER["DOCUMENT_ROOT"] . DS);
  define("FRAMEWORK_PATH", ROOT . "framework" . DS);

  define("CONTROLLER_PATH", ROOT . "controllers" . DS);
  define("VIEW_PATH", ROOT . "views" . DS);
  
  // Include custom classes
  include_once(FRAMEWORK_PATH . 'Router.class.php');
?>