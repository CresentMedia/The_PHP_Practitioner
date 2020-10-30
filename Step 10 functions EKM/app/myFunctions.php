<?php

//@para accepts an age and returns if the person is old enough to get into club
function isTwentyOnePlus($age){

      if ($age >= 21){
        echo 'Come on in';
      }else{
        echo 'You are not old enough';
      }
}


//Print all of the included files
function varDumpIncludedFiles(){

    $included_files = get_included_files();

    foreach ($included_files as $filename) {
        echo "Included file: "."$filename\n<br>";
    }
}

//Die and dumb fuction will dump $data on screen and kill all other functions
function dd($data){

  echo '<pre>';
  die(var_dump($data));
  echo '<pre>';
}
