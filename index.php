<?php
/**
 * Created by PhpStorm.
 * User: toygan + Ming
 * Date: 1/11/18
 * Time: 2:25 PM
 */

//require the autoload file
require_once ('vendor/autoload.php');

//create an instance of the base class
$f3 = Base::instance();

//define a default rote
$f3->route('GET /', function (){

    $view = new View;
    //echo $view->render('views/home.html');
    echo "Pet Home";

});


//run fat free
$f3->run();
