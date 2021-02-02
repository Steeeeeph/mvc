<?php

// Require the correct variable type to be used (no auto-converting)
declare(strict_types = 1);

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Load secret config file
require_once 'config.php';
// Load you classes
//TODO require classes
require_once 'DatabaseManager.php';

$databaseManager = new DatabaseManager($config['host'], $config['port'], $config['username'], $config['password']);
$databaseManager->connect();

// Load your view
// Tip: you can load this dynamically and based on a variable, if you want to load another view

// $BarbieInventory = new BarbieInventory($databaseManager);


// // homepage directory assembly
// $url = $_SERVER["HTTP_REFERER"];
// echo $url; // Outputs: Full URL

/*function whatIsHappening()
{
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo "<pre>";
    echo '<h2>$_SERVER</h2>';
    var_dump($_SERVER);
    echo "</pre>";

    // echo '<h2>$_SESSION</h2>';
    // var_dump($_SESSION);
}
whatIsHappening();*/
