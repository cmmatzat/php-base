<?php
	class Router {

		private $request;

		public function __constuct($request)
		{
			$this->request = $request;
		}
		
		public function route()
		{
			$uri = trim($this->request, '/');
			echo $this->request;
			$uri = explode('/', $uri);
			echo $uri[0];

			$controllerClass = $uri[0] . 'Controller';
			$classFile = $this->controllerPath($controllerClass);
			
			array_shift($uri);

			if (!file_exists(classFile))
			{
				echo $classFile . " doesn't exist!<br>";
				$controllerClass = 'IndexController';
				$classFile = $this->controllerPath($controllerClass);
			}
			require($classFile);
			$controller = new $controllerClass;

			$method = method_exists($controller, $uri[0]) ? $uri[0] : 'index';
			array_shift($uri);
			$controller->$method($uri);
		}

		private function controllerPath($controllerClassName)
		{
			return CONTROLLERS_PATH . '/' . $controllerClassName . '.class.php';
		}

	}
?>