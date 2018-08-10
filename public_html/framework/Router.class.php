<?php
	class Router {

		public function __constuct()
		{
			
		}
		
		public function route($request)
		{
			$uri = trim($request, '/');
			$uri = explode('/', $uri);
      
			$controllerClass = Router::getController($uri[0]);
			array_shift($uri);
      
			$controller = new $controllerClass;

			$method = method_exists($controller, strtolower($uri[0])) ? $uri[0] : 'index';
			array_shift($uri);
			$controller->$method($uri);
		}

		private static function controllerPath($controllerClassName)
		{
			return CONTROLLER_PATH . $controllerClassName . '.class.php';
		}
    
    private static function getController($uri0)
    {
      $controllerClass = ($uri0 == NULL) ? 'IndexController' : ucfirst(strtolower($uri0)) . 'Controller';
      $controller_dir = scandir(CONTROLLER_PATH);
      if (!in_array($controllerClass . '.class.php', $controller_dir))
      {
        $controllerClass = 'IndexController';
      }
      
      require_once(Router::controllerPath($controllerClass));
      return $controllerClass;
    }

	}
?>