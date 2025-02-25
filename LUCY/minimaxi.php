<?php

$getal = rand(0, 100);
$getal1 = rand(0, 100);

if ($getal > $getal1) {
    echo "het getal is:\n$getal";
    echo "\n$getal1";
}
else if ($getal1 > $getal) {
    echo "het getal is:\n$getal1";
    echo "\n$getal";
}
else {
    echo "het getal is hetzelfde";
}


?>