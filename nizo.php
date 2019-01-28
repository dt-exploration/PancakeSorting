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

//sortiranje

$k=1;
for($i=count(niz)-$k; $i==0; $k++){

  $max=$niz[$i];

for($j=$i-1; $j>) {

if( $niz[$j] > $max){
    $index=$j;
}
}

flip
flip

}

foreach ($d as $variable) {
    echo $variable."    ";
}

?>
