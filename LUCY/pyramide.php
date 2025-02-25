<?php

$stapels = readline("hoeveel stapels wil je hebben? ");

for ($teken=1; $teken <=$stapels; $teken++) { 
    echo str_repeat("[]",$teken) . "\n";
}



?> 