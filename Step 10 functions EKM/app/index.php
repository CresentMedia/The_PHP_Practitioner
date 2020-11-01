<?php

//Functions used must be included in the php document they are used in.
/*
//The order that the PHP documents are included is also very important because if there is a function
//that is used in our index.view.php file it then the php file it is defined in must be included
//before the index.view.php is included.
*/
require 'myFunctions.php';
//Functions from myFunctions.php are used in index.view and so must be included before.
require 'index.view.php';

//Declare and fill animals array
$animals = ['dog','cat'];

function dumper($one, $two, $three){

    var_dump($one, $two, $three);
}

dumper("hello", "big", "world");


dd($animals);
