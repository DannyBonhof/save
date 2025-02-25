<?php

$namen = readline("voer namen in gescheiden met spaties: ");
$namen = explode(" ", $namen);

echo "de ingevoerde namen zijn:\n";
foreach ($namen as $naam) {
    echo $naam ."\n"; 
}



?>