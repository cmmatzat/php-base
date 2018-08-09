<?php
  
  // General config info
  $config = array(
    "paths" => array(
      "resources" => $_SERVER["DOCUMENT_ROOT"]."/resources",
    )
  );
  
  // Constants for heavily-used paths
  defined('LIBRARY_PATH') or define('LIBRARY_PATH', $_SERVER["DOCUMENT_ROOT"] . '/resources/libraries');

  // Include custom classes
  include_once(LIBRARY_PATH . '/Router.php');
  include_once(LIBRARY_PATH . '/Route.php');
?>