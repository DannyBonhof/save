<?php
$number = readline("voer de diameter van een cirkel in: ");
echo "omtrek is = ";
echo pi() * $number;

echo "\n";

echo "oppervlakte is = ";
$straal = ($number / 2);
$oppervlakte = $straal * $straal * pi();
echo $oppervlakte;

?>