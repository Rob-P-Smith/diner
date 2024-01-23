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
    $view = new Template();
    echo $view->render('views/home.html');
});

$f3->route('GET|POST /breakfast', function () {
    $view = new Template();
    echo $view->render('views/breakfast-menu.html');
});

$f3->route('GET|POST /order1', function () {
    $view = new Template();
    echo $view->render('views/order-form-1.html');
});

$f3->route('GET|POST /summary', function () {
    $view = new Template();
    echo $view->render('views/order-summary.html');
});

$f3->run();

