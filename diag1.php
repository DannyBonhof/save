<?php

$lengte = array();
$kleiner170 = 0;
$groter170 = 0;
$totaal = 0;

for ($i=1; $i <= 5; $i++) { 
    $lengte = readline("geef lengte op in cm: ");
    if ($lengte < 50 || $lengte > 210) {
        echo "De lengte is niet binnen de range, probeer het opnieuw.\n";
        $lengte = readline("geef lengte op in cm: ");
    }
    if ($lengte < 170) {
        $kleiner170 ++;
    }
    else {
        $groter170 ++;
    }
    $totaal = $totaal + $lengte;
}

$gemiddelde = $totaal / 5;
  
echo "er zijn $groter170 personen groter dan 170 cm\n";
echo "er zijn $kleiner170 personen kleiner dan 170 cm\n";
echo "de gemiddelde lengte is: $gemiddelde";

?>