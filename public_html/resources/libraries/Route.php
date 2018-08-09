<?php
	class Route
	{
		private $route;
		private $destination;
		private $takes_args;

		public function __construct($route, $destination, $takes_args)
		{
			$this->route = $route;
			$this->destination = $destination;
			$this->takes_args = $takes_args;
		}

		public function uriMatch($uri)
		{
			if ($uri[0] == trim($route, '/'))
			{
				return true;
			} else {
				return false;
			}
		}

		public function goToDestination($args)
		{

		}
	}
?>