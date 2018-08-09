<?php

  // Constants for heavily-used paths
  defined('LIBRARY_PATH') or define('LIBRARY_PATH', $_SERVER["DOCUMENT_ROOT"] . '/resources/libraries');
  defined('RESOURCES_PATH') or define('RESOURCES_PATH', $_SERVER["DOCUMENT_ROOT"] . "/resources" );

  // Include custom classes
  include_once(LIBRARY_PATH . '/Router.php');
  include_once(LIBRARY_PATH . '/Route.php');
?>