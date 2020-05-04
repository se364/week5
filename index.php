<?php

/*
 * Shah Emran
 * 4/17/2020
 *
 */

//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once("vendor/autoload.php");

// Create an instance of the Base Class
$f3 = Base::instance();

// Define a default route
$f3->route('GET /', function($f3){
    //echo '<h1> Pet Home</h1>';

    //Create variables in the F3 hive
    $f3->set('username', 'jshmo');
    $f3->set('password', sha1('Password01'));
    $f3->set('title', 'Working with Templates');

    $view = new Template();
    echo $view->render('views/info.html');
}
);

// Run fat free
$f3->run();

?>