<?php
	class Route
	{
		private $path;
		private $dest;
		private $minarg;

		public function __construct($path, $dest, $minarg)
		{
			$this->path = $path;
			$this->dest = $dest;
			$this->minarg = $minarg;
		}

		public function uriMatch($uri)
		{
			$route_path = trim($this->path, '/');
			$route_path = explode('/', $route_path);
			$route_len = count($route_path);
			if (count($uri) < $route_len + $this->minarg)
			{
				return false;
			} else if ($uri[0] != $route_path[0])
			{
				return false;
			} else
			{
				$pos = 0;
				while ($uri[$pos] == $route_path[$pos])
				{
					$pos++;
					if ($pos == $route_len)
					{
						return true;
					}
				}
				return false;
			}
		}

		public function goToDest($args)
		{
			echo "Going to " . $this->dest;
		}
	}
?>