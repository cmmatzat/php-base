<?php
	class Route
	{
		public $path;
		private $dest;
		private $argc;

		public function __construct($path, $dest, $argc)
		{
			$this->path = $path;
			$this->dest = $dest;
			$this->takes_args = $argc;
		}

		public function uriMatch($uri)
		{
			//TODO: Add nested path support
			if ($uri[0] == trim($this->path, '/'))
			{
				return true;
			} else {
				return false;
			}
		}

		public function goToDest($args)
		{
			echo "Going to " . $this->dest;
		}
	}
?>