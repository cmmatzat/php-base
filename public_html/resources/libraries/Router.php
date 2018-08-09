<?php
    class Router
	{
		private $request;
		private $routes;

		public function __construct($request)
		{
			$this->request = $request;

			// Fill routes with lib content
		}

		public function findRoute()
		{
			$uri = trim($this->request, '/');
			$uri = explode('/', $uri);
			foreach ($routes as &$route)
			{
				if ($route.uriMatch($uri))
				{
					$args = array_shift($uri);
					$route.goToDestination($args);
					break;
				}
			}

			// Add error catch for no match found.


		}
	}
?>

