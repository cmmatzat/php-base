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
			$uri_len = count($uri);
			if ($uri_len < ($route_len + $this->minarg))
			{
				return -1;
			} else if ($uri[0] != $route_path[0])
			{
				return -1;
			} else
			{
				$pos = 0;
				while ($uri[$pos] == $route_path[$pos])
				{
					$pos++;
					if ($pos == $route_len)
					{
						return ($uri_len - $pos);
					}
				}
				return -1;
			}
		}

		public function goToDest($args)
		{
			echo "Going to " . $this->dest;
		}
	}
?>