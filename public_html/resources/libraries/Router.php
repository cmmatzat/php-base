<?php
    class Router
	{
		public function __construct()
		{

		}

		public function route($raw_uri)
		{
			$request_uri = explode('?', $raw_uri, 2);

		    switch ($request_uri[0])
		    {
		        // Home page
		        case '/':
		            echo "Home<br>";
		            break;
		        // About page
		        case '/schedule':
		            echo "Schedule<br>";
		            break;
		        // Everything else
		        default:
		            header('HTTP/1.0 404 Not Found');
		            echo "404: Page Not Found";
		            break;
    		}
		}
	}
?>