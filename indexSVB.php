<?php

//include all your model files here
require 'Model/setup.php';
include 'Controller/SigneController.php';
require 'Model/User.php';
require_once '../Controller/CollectionController.php';


//include all your controllers here

session_start();


//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!
$controller = new HomepageController();
if(isset($_GET['page']) && $_GET['page'] === 'collection.php') {
    $controller = new CollectionController($databaseManager);
    $controller->render($_SESSION, $_POST)

} else {
    $controller = new SigneController();
    $controller->render($_GET, $_POST);
}





