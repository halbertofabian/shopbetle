<?php ob_start();

include_once 'config.php';


// load controllers 
require_once 'app/modules/appframework/appframework.controller.php';
require_once 'app/modules/users/users.controller.php';




// load models
require_once 'app/modules/users/users.model.php';;


$start = new AppFrameWorkController();
$start->loadApp();


ob_end_flush();