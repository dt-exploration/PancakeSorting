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
//6 1 8 2 9 4
$k=1;
echo "Ok";
for ( $i=count($nizz)-$k; $i!=0; $k++) {

    $max=$nizz[0];
    $index=0;

    for ($j=1; $j<$i+1; $j++) {

        if ( $nizz[$j] > $max){
            $index=$j;
        }
    }

flip($nizz,$index+1);
flip($nizz,$i+1);

}

echo "Sorted array: <br>";
foreach ($nizz as $variable) {
    echo $variable."    ";
}

?>
