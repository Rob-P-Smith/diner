<?php
/*Rob Smith
 *Jan 2024
 *https://rsmiths.greenriverdev.com/328/diner/
 *Site Controller
*/

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Instantiate the f3 base class
$f3 = Base::instance();

$f3->run();

echo "Diner";
echo "Now";