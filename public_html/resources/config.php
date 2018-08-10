<?php

  // Constants for heavily-used paths
  defined('FRAMEWORK_PATH') or define('FRAMEWORK_PATH', $_SERVER["DOCUMENT_ROOT"] . '/resources/framework' );
  defined('CONTROLLERS_PATH') or define('CONTROLLERS_PATH', $_SERVER["DOCUMENT_ROOT"] . '/resources/controllers' );
  
  // Include custom classes
  include_once(FRAMEWORK_PATH . '/Router.class.php');
?>