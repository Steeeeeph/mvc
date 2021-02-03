<?php

//include all your model files here
require 'Controller/setup.php';
require 'Model/setup.php';
include 'Controller/SigneController.php';
require 'Model/User.php';

//include all your controllers here




/**
//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!
$controller = new HomepageController();
if(isset($_GET['page']) && $_GET['page'] === 'info') {
$controller = new InfoController();
}
$controller->render($_GET, $_POST);
 */


//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!
session_start();

$controller = new SigneController();
$controller->render($_GET, $_POST);


