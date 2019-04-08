<?php
function S($x){
$pi = 0;
for ($i=0; $i <=$x ; $i++) { 
     $pi += ((4.0 * (-1.0)**$i) / (2.0*$i + 1.0));
}
return $pi;
}

function A($y){
    $a = 0;
    for ($i=0; $i <=$y ; $i++) { 
        $a = ( S($i+2) * S($i) - ( S($i+1))**2 ) / ( S($i+2) - 2*S($i+1) + S($i));
    }
    return $a;
}
    echo A(10000)."\n";
?>