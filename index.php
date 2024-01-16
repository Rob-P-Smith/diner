<?php
/*Rob Smith
 *Jan 2024
 *https://rsmiths.greenriverdev.com/328/diner/
 *Site Controller
*/

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once ('vendor/autoload.php');

// Instantiate the f3 base class
$f3 = Base::instance();

$f3->route('GET /', function () {
    echo "Diner";
    echo "Now";
});

$f3->run();

