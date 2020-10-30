<?php


require 'index.view.php';

//Declare and fill animals array
$animals = ['dog','cat'];

function dumper($one, $two, $three){

    var_dump($one, $two, $three);
}

dumper("hello", "big", "world");


dd($animals);