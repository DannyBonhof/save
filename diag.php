<?php


$lengte1 = readline("1.geef lengte op in (cm): ");
$lengte2 = readline("2.geef lengte op in (cm): ");
$lengte3 = readline("3.geef lengte op in (cm): ");
$lengte4 = readline("4.geef lengte op in (cm): ");
$lengte5 = readline("5.geef lengte op in (cm): ");

$lengtes = ["$lengte1", "$lengte2", "$lengte3", "$lengte4", "$lengte5"];

foreach ($lengtes as $lengte) {
    if ($lengte <170) {
        echo "er zijn ? korter dan 170cm";
    }
    elseif ($lengte >170) {
        echo "er zijn ? langer dan 170cm";
    }

}





?>