<?php
/* Tina Ostrander
 * January 2024
 * https://tostrander.greenriverdev.com/328/diner/
 * This is my CONTROLLER for the Diner app
 */

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once ('vendor/autoload.php');
require_once ('model/validator.php');

// Instantiate Fat-Free framework (F3)
$f3 = Base::instance(); //static method
$con = new Controller($f3);

// Define a default route
$f3->route('GET /', function() {
    $GLOBALS['con']->home();
});

// Define a breakfast route
$f3->route('GET /breakfast', function() {
    $GLOBALS['con']->breakfast();
});

// Define a order form 1 route
$f3->route('GET|POST /order1', function($f3) {
    $GLOBALS['con']->order1();
});

// Define a order form 2 route
$f3->route('GET|POST /order2', function($f3) {
    $GLOBALS['con']->order2();
});

// Define an order summary route
$f3->route('GET /summary', function() {
    $GLOBALS['con']->orderSummary();
});

// Run Fat-Free
$f3->run(); //instance method