<?php

$nizz=array(5,6,2,8,1,3,8,9,5,3,4,6,4,2,8,9,6,4);

function flip($niz,$first_el)
{

    for( $i=0; $i<$first_el/2; $i++) {

    $help=$niz[$i];
    $niz[$i]=$niz[$first_el-($i+1)];
    $niz[$first_el-($i+1)]=$help;

    }

    return $niz;
}

$d=flip($nizz,8);

foreach ($d as $variable) {
    echo $variable."    ";
}

//sortiranje

for($i=count(niz)-1; $i>0; $i--){

  $max=$niz[$i];

for()

if($niz[$j]>$max){
  $max=$niz[$j];
}




}



?>
