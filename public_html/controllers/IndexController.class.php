<?php
require_once(CONTROLLER_PATH . "Controller.class.php");

class IndexController extends Controller
{	

    public function __construct()
    {
        parent::__construct();
    }

    public function index($args)
    {
        echo "index.php";
    }

    public function hello($args)
    {
        echo "hello.php";
    }

}

?>