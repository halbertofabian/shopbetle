<?php ob_start();

include_once 'config.php';


// load controllers 
require_once 'app/modules/appframework/appframework.controller.php';


$start = new AppFrameWorkController();
$start->loadApp();


ob_end_flush();