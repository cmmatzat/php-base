<?php
    class Router
	{
		private $request;
		private $routes;

		public function __construct($request)
		{
			echo $testing;
			$this->request = $request;
			$this->routes = array();
			$route_file = RESOURCES_PATH . '/routes.xml';
			$route_xml = simplexml_load_file($route_file);
			foreach ($route_xml as $route)
			{
				$this->routes[] = new Route($route->path, $route->dest, $route->argc);
			}
		}

		public function route()
		{
			$uri = trim($this->request, '/');
			$uri = explode('/', $uri);
			foreach ($this->routes as $route)
			{
				if ($route->uriMatch($uri))
				{
					$args = array_shift($uri);
					$route->goToDest($args);
					break;
				}
			}

			// Add error catch for no match found.


		}
	}
?>

