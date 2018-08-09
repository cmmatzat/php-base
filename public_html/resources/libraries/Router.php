<?php
    class Router
	{
		private $request;
		private $routes;
		private $dest_route;

		public function __construct($request)
		{
			echo $testing;
			$this->request = $request;
			$this->routes = array();
			$route_file = RESOURCES_PATH . '/routes.xml';
			$route_xml = simplexml_load_file($route_file);
			foreach ($route_xml as $route)
			{
				$this->routes[] = new Route($route->path, $route->dest, $route->minarg);
			}
			$default_route = $route_xml->default;
			$this->dest_route = new Route($default_route->path, $default_route->dest, $default_route->minarg);
		}

		public function route()
		{
			$uri = trim($this->request, '/');
			$uri = explode('/', $uri);
			$min_args = count($uri);
			foreach ($this->routes as $route)
			{
				$arg_count = $route->uriMatch($uri);
				if ( ($arg_count > -1) && ($arg_count < $min_args) )
				{
					$min_args = $arg_count;
					$this->dest_route = $route;
				}
			}

			$this->dest_route->goToDest(array_slice($uri, $min_args));
		}
	}
?>

