<?php
	class Router {

		public function __constuct()
		{
			echo "Router Created<br>";
		}
		
		public function route($request)
		{
      echo "Router request: " . $request . "<br>";
			$uri = trim($request, '/');
			$uri = explode('/', $uri);
      
			$controllerClass = Router::getController($uri[0]);
			array_shift($uri);
      
      echo "Using Controller " . $controllerClass . "<br>";
      
			/*$controller = new $controllerClass;

			$method = method_exists($controller, $uri[0]) ? $uri[0] : 'index';
			array_shift($uri);
			$controller->$method($uri);*/
		}

		private static function controllerPath($controllerClassName)
		{
			return CONTROLLER_PATH . $controllerClassName . '.class.php';
		}
    
    private static function getController($uri0)
    {
      echo "Router::getController(".$uri0.")<br>";
      
      $controllerClass = ($uri0 == NULL) ? 'IndexController' : ucfirst(strtolower($uri0)) . 'Controller';
      $controller_dir = scandir(CONTROLLER_PATH);
      if (!in_array($controllerClass . '.class.php', $controller_dir))
      {
        echo "Controller not found. Using IndexController.<br>";
        $controllerClass = 'IndexController';
      }
      
      
      echo "Loading file " . Router::controllerPath($controllerClass) . "<br>";
      require_once(Router::controllerPath($controllerClass));
      return $controllerClass;
    }

	}
?>