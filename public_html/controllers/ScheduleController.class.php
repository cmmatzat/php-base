<?php
require_once(CONTROLLER_PATH . "Controller.class.php");

class ScheduleController extends Controller
{
  
    public function __construct()
    {
        parent::__construct();
    }

    public function index($args)
    {
        echo "schedule.php";
    }

    public function hello($args)
    {
        echo "schedule/hello.php";
    }

}

?>