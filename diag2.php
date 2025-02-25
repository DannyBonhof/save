<?php

$studenten = array("97123456"=>"klaas", "97234563"=>"Achmed", "97442233"=>"Janien", "97766601"=>"René");

echo "key:      Voornaam:\n";
foreach ($studenten as $x => $y) {
    echo "$x  $y \n";
}

?>